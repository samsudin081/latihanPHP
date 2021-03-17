<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style>
	.btn-primary{
		}
</style>
<body align="center">
 <h1 align="center">PEMBELIAN BUKU </h1>

<?php 
$buku=$_POST['jumlah_buku'];
$harga=12500;
$tot=($buku*$harga);
$discon=($tot-($tot*0.05));

echo "beli buku =", $buku;
echo "</br>";
echo "harga persatuan = Rp 12.500";
echo "</br>";


if($buku > 20){
	echo "harga yang bayar = Rp ", $discon;
	 }else{
	echo "harga bayar = Rp ", $tot;
	 }

 ?></br></br>



<a href="form_latihan7A.php"><button class="btn-primary" type="submit">back</button></a>

</body>
</html>


