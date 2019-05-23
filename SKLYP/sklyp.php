<?php
//https://bitbucket.org/0Pandzioszek0/projekt_3ti/src/master/p4/ 
// link do repo sary z dzialajacym koszykiem 
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
	<div class="produkt" style="padding: 0;">

<?php 
$zap = "SELECT `referencja`,`nazwa`,`ilosc`,`cena`,`opis`,`obrazek` FROM `produkt` LIMIT 6";
 $wynik = mysqli_query($polacz,$zap);
while ($l=mysqli_fetch_row($wynik)) {
	?>
	<a href="" class="img">
	<img class="img" src="<?php echo $l[5]; ?>" alt="n">
</a>
<?php
	echo ' </br>'.$l[1].'</br> '.'Cena: '.$l[2].' ETC </br>'.'Ilość: '.$l[3].'</br> '.'<button type="button">KUP</button>';
	echo substr($l[4],0,32);
	echo (strlen($l[4]) > 32) ? "..." : "".' ';
}
?>
</div>
</div>
</div>
</div>

<?php
include('stopka.php');
?>

</body>
</html>