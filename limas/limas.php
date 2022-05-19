<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator | Limas</title>
	<link rel="icon" href="../Pict/icon.png">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		switch ($operasi) {
			case 'luasalas':
				$hasil = $bil1*$bil2/2;
			break;
			case 'volume':
				$hasil = $bil1*$bil2/3;
			break;
			case 'tinggialas':
				if ($bil1 >= $bil2){
					$hasil = $bil1/$bil2*2;
				}
				else{
					$hasil = $bil2/$bil1*2;
				}
			break;
			case 'tinggilimas':
				if ($bil1 >= $bil2){
					$hasil = $bil1/$bil2*3;
				}
				else{
					$hasil = $bil2/$bil1*3;
				}
			break;			
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">LIMAS SEGIEMPAT</h2>
		<br>
		<form method="post" action="limas.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
			<select class="opt" name="operasi">
				<option value="luasalas">Luas Alas</option>
				<option value="volume">Volume</option>
				<option value="tinggialas">Tinggi Alas</option>
				<option value="tinggilimas">Tinggi Limas</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>