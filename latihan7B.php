
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body align="center">

<h3>nilai keseluruhan</h3>

<?php 
$uts=$_POST['nilai_uts'];
$uas=$_POST['nilai_uas'];
$tugas=$_POST['nilai_tugas'];
$tuts=$uts*0.35;
$tuas=$uas*0.5;
$ttugas=$tugas*0.15;
$totalall=$tuts+$tuas+$ttugas;


          
echo "nilai uts risma adalah ", $uts;
echo "</br>";
echo "nilai uas risma adalah ", $uas;
echo "</br>";
echo "nilai tugas risma adalah ", $tugas;
echo "</br>";
echo "nilai total uts risma ", $tuts;
echo "</br>";
echo "nilai total uas risma ", $tuas;
echo "</br>";
echo "nilai total tugas risma ", $ttugas;
echo "</br>";
echo "nilai keseluruhan nilai risma adalah ", $totalall;
?>
</br>
</br>

<a href="form_latihan7B.php"><button class="btn-primary" type="submit">back</button></a>

<!-- penambahan komentar -->
<!-- penambahan komentar baru -->

</body>
</html>


