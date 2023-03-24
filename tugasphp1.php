<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Rumus  bangun datar jajar genjang </title>
</head>
<body>
    <h1>  bangun datar jajar genjang  </h1>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
		<label for="alas">Alas:</label>
		<input type="number" name="alas" required><br><br>
		<label for="tinggi">Tinggi:</label>
		<input type="number" name="tinggi" required><br><br>
		<label for="sisi">Sisi:</label>
		<input type="number" name="sisi" required><br><br>
		<input type="submit" name="hitung" value="Hitung">
</table>
</form>
<?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			$alas = $_POST["alas"];
			$tinggi = $_POST["tinggi"];
			$sisi = $_POST["sisi"];

			$luas = $alas * $tinggi;
			$keliling = 2 * ($alas + $sisi);

			echo "<h3>Hasil Perhitungan:</h3>";
			echo "Luas jajar genjang: " . $luas . "<br>";
			echo "Keliling jajar genjang: " . $keliling . "<br>";
		}
	?>
</body>
</html>
