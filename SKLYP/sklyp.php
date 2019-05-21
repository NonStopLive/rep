<?php
include('head.php');
			 ?>
<div class="baner">

<img src="logo.png">
<br>
<img src="logo2.png">

</div>
<div class="koszyk">

<img src="textkoszyk.png"> <a href="sklyp-koszyk.php"> <img class="koszyk" src="koszyk.png"> </a>

</div>
<div class="karton">
<?php 

$zap = "SELECT `nazwa`.`ilosc`, `cena`.`opis` FROM `produkt`";
 $wynik = mysqli_query($polacz,$zap);
while ($l=mysqli_fetch_row($wynik)) {
	echo $l[0].' '.$l[1];
}
mysqli_close($polacz); 
?>

</div>

<?php
include('stopka.php');
?>

</body>
</html>