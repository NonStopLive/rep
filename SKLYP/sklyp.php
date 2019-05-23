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
	<div class="produkty">
	<div class="produkt">
	<a href="" class="img">
    	<img class="img" src="serce.png" alt="n">
	</a>
<?php 
$zap = "SELECT `nazwa`,`ilosc`, `cena`,`opis` FROM `produkt`";
 $wynik = mysqli_query($polacz,$zap);
while ($l=mysqli_fetch_row($wynik)) {
	echo ' </br>'.$l[0].'</br> '.'Cena: '.$l[1].' ETC </br>'.'Ilość: '.$l[2].'</br> '.$l[3].' ';
}
?>
<button type="button">KUP</button>
</div>
<div class="produkt">
	<a href="" class="img">
    	<img class="img" src="wątróbka.png" alt="n">
	</a>
<?php 
$zap = "SELECT `nazwa`,`ilosc`, `cena`,`opis` FROM `produkt`";
 $wynik = mysqli_query($polacz,$zap);
while ($l=mysqli_fetch_row($wynik)) {
	echo ' </br>'.$l[0].'</br> '.'Cena: '.$l[1].' ETC </br>'.'Ilość: '.$l[2].'</br> '.$l[3].' ';
} 
?>
<button type="button">KUP</button>
</div>
<div class="produkt" style="padding: 0;">
	<a href="" class="img">
    	<img class="img" src="wątróbka.png" alt="n">
	</a>
<?php 
$zap = "SELECT `nazwa`,`ilosc`, `cena`,`opis` FROM `produkt`";
 $wynik = mysqli_query($polacz,$zap);
while ($l=mysqli_fetch_row($wynik)) {
	echo ' </br>'.$l[0].'</br> '.'Cena: '.$l[1].' ETC </br>'.'Ilość: '.$l[2].'</br> '.$l[3].' ';
}
?>
<button type="button">KUP</button>
</div>
<div class="produkt" style="padding: 0;">
	<a href="" class="img">
    	<img class="img" src="wątróbka.png" alt="n">
	</a>
<?php 
$zap = "SELECT `nazwa`,`ilosc`, `cena`,`opis` FROM `produkt`";
 $wynik = mysqli_query($polacz,$zap);
while ($l=mysqli_fetch_row($wynik)) {
	echo ' </br>'.$l[0].'</br> '.'Cena: '.$l[1].' ETC </br>'.'Ilość: '.$l[2].'</br> '.$l[3].' ';
}
mysqli_close($polacz); 
?>
<button type="button">KUP</button>
</div>

</div>
</div>

<?php
include('stopka.php');
?>

</body>
</html>