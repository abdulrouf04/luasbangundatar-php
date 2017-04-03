<?php error_reporting(0); ?>
<form method="POST">
	<table style="width: 50%; border: 1px solid lightgray;" cellpadding="5px">
		<tr>
			<td colspan="3" style="text-align: center; font: bold 18px 'arial'; background-color: lightblue; padding: 10px;">
				<span> Ente Mau Menghitung Luas Apa Coy ? </span>
			</td>
		</tr>
		<tr>
			<td style="width: 33.3333%"> 
				<input type="checkbox" name="pilih_persegi" id="input_persegi" value="show_persegi" onClick="persegi()">
				<label for="input-persegi">Persegi</label> 
			</td>
			<td style="width: 33.3333%"> 
				<input type="checkbox" name="pilih_lingkaran" id="input_lingkaran" value="show_lingkaran" onClick="lingkaran()">
				<label for="input-lingkaran">Lingkaran</label> 
			</td>
			<td style="width: 33.3333%"> 
				<input type="checkbox" name="pilih_segitiga" id="input_segitiga" value="show_segitiga" onClick="segitiga()">
				<label for="input-segitiga">Segitiga</label> 
			</td>
		</tr>
		<tr>
			<td>
				<div id="display-persegi" style="display: none;">
					Luas Persegi : <br>
					Sisi : <input type="number" name="sisi" min="1" placeholder="Masukkan Sisi Persegi">
				</div>
			</td>
			<td>
				<div id="display-lingkaran" style="display: none;">
					Luas Lingkaran : <br>
					Jari - jari: <input type="number" name="jari" min="1" placeholder="Masukkan Sisi Lingkaran">
				</div>
			</td>
			<td>
				<div id="display-segitiga" style="display: none;">
					Luas Segitiga : <br>
					alas : <input type="number" name="alas" min="1"placeholder="Masukkan Alas Segitiga"> <br>
					Tinggi : <input type="number" name="tinggi" min="1" placeholder="Masukkan Tingg i Segitiga">
				</div>
			</td>
		</tr>
	</table>
	<button type="submit" name="btn_kirim" value="submit">Hitung</button>

</form>



<!-- Script PHP -->
<?php

if ( @$_POST['btn_kirim'] ) {

	if ( !empty($_POST['pilih_persegi']) || !empty($_POST['pilih_lingkaran']) || !empty($_POST['pilih_segitiga']) ) {
		
		if ( !empty($_POST['pilih_persegi']) ) {
			$luas = $_POST['sisi'] * 2;
			echo "<h3> Luas Persegi : ".$luas."</h3>";
		}

		if ( !empty($_POST['pilih_lingkaran']) ) {
			$luas = 3.14 * $_POST['jari'] * $_POST['jari'];
			echo "<h3> Luas Lingkaran : ".$luas."</h3>";
		}

		if ( !empty($_POST['pilih_segitiga']) ) {
			$luas = ($_POST['alas'] * $_POST['tinggi'])/2;
			echo "<h3> Luas Segitiga : ".$luas."</h3>";
		}

	} else {
		echo "Pilih dulu coy";
	}

}

?>




<!-- Script JavaScript -->
<script type="text/javascript">
	
	
	function persegi() {
		selectPersegi = document.getElementById("input_persegi");
		displayPersegi = document.getElementById("display-persegi");
		
		if ( selectPersegi.value == "show_persegi" ) {
			selectPersegi.value = "hide_persegi";
			displayPersegi.style.display = "block";
		} else {
			selectPersegi.value = "show_persegi";
			displayPersegi.style.display = "none";
		}
	}
	

	
	function lingkaran() {
		selectLingkaran = document.getElementById("input_lingkaran");
		displayLingkaran = document.getElementById("display-lingkaran");
		
		if ( selectLingkaran.value == "show_lingkaran" ) {
			selectLingkaran.value = "hide_lingkaran";
			displayLingkaran.style.display = "block";
		} else {
			selectLingkaran.value = "show_lingkaran";
			displayLingkaran.style.display = "none";
		}
	}


	function segitiga() {
		selectSegitiga = document.getElementById("input_segitiga");
		displaySegitiga = document.getElementById("display-segitiga");

		if ( selectSegitiga.value == "show_segitiga" ) {
			selectSegitiga.value = "hide_segitiga";
			displaySegitiga.style.display = "block";
		} else if ( selectSegitiga.value == "hide_segitiga" ) {
			selectSegitiga.value = "show_segitiga";
			displaySegitiga.style.display = "none";
		}	
	}
	

</script>