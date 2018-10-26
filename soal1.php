<!DOCTYPE html>
<html>
<body>
<p>Masukkan diameter bola</p>
<form action ="soal1.php" method="post">
diameter : <input type="text" name="jari2"><br><br>
<input type="submit" name="submit" value="Hitung">
</form>
<?php
define("phi", "3.14");
function volumebola ($diameter= 4){
	$r= 1/2 * "$diameter";
	$volume = 4/3 * phi * ("$r" * "$r" *"r");
	printf("%2f",$volume);
}
volumebola();
?>

</body>
</html>