<?php 
include_once("functions.php");
$db=dbConnect();
?>
<!DOCTYPE html>
<html>
<head><title>Pemilihan Kabupaten dan Kota</title></head>
<body>
<script>
function updateKabKota(){
	var cbprov=document.getElementById("prov");
	if(cbprov.selectedIndex>0){ // jika memilih provinsi
		document.getElementById("progresskabkota").style.visibility="visible";
		var xhr=new XMLHttpRequest();
		xhr.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				response = xhr.responseText; // ambil response
				var data=JSON.parse(response);// konversikan string json
				var cbkabkota=document.getElementById("kabkota");
				while(cbkabkota.length>1) // hapus isi kabkota sebelumnya
					cbkabkota.remove(1);
				if(data.length>0){ // jika data kabkota ad
					for(var i=0;i<data.length;i++){ // susun dalam combobox
						var option=document.createElement("option"); // buat option
						option.value=data[i].kabupaten_kota_id; // isi value
						option.text=data[i].nama; // isi tulisan/text
						cbkabkota.add(option); // tambahkan option ke cbkabkota
					}
				}
				document.getElementById("progresskabkota").style.visibility="hidden";
			}
		};
		var provinsi_id=cbprov.options[cbprov.selectedIndex].value;
		xhr.open("GET", "getkabkota.php?provinsi_id="+provinsi_id, true);
		xhr.send();
	}
}
</script>
<h1>Pemilihan Lokasi</h1>
<form name="f" method="POST" >
<input type="hidden" name="statusemail" value="">
<table border="1">
<tr><td>Provinsi</td>
	<td><select id="prov" onchange="updateKabKota()">
			<option value="">Pilih Provinsi</option>
		<?php
			$res=$db->query("select provinsi_id,nama 
							 from provinsi order by nama");
			$data=$res->fetch_all(MYSQLI_ASSOC);
			foreach($data as $prov){
				echo "<option value=\"".$prov["provinsi_id"]."\">".$prov["nama"]."</option>";
			}
		?>
		</select>
	</td></tr>
<tr><td>Kabupaten/Kota</td>
    <td><select id="kabkota">
			<option value="">Pilih Kabupaten/Kota</option>
		</select>
		<span id="progresskabkota" style="visibility:hidden;">
		<img src="load.gif" width="16px" height="16px">
		</span>
	</td></tr>
	</td></tr>
<tr><td>&nbsp;</td><td><input type="submit" name="tblSubmit" value="OK"></td></tr>
</table>
</form>
</body>
</html>