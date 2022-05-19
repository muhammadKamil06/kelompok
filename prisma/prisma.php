<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator | Prisma</title>
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
				$hasil = $bil1*$bil2;
			break;
			case 'volume':
				$hasil = $bil1*$bil2;
			break;
			case 'pl':
				if ($bil1 >= $bil2){
					$hasil = $bil1/$bil2;
				}
				else{
					$hasil = $bil2/$bil1;
				}
			break;
			case 'tinggiprisma':
				if ($bil1 >= $bil2){
					$hasil = $bil1/$bil2;
				}
				else{
					$hasil = $bil2/$bil1;
				}
			break;			
		}
	}
	?>
	<div class="kalkulator">
		<h2 class="judul">PRISMA SEGIEMPAT</h2>
		<br>
		<form method="post" action="prisma.php">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama">
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua">
			<select class="opt" name="operasi">
				<option value="luasalas">Luas Alas</option>
				<option value="volume">Volume</option>
				<option value="pl">Panjang / Lebar</option>
				<option value="tinggiprisma">Tinggi Prisma</option>
			</select>
			<input type="submit" name="hitung" value="Hitung" class="tombol">											
		</form>
		<?php if(isset($_POST['hitung'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>m
</html>