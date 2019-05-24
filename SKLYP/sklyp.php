<?php
//https://bitbucket.org/0Pandzioszek0/projekt_3ti/src/master/p4/ 
// link do repo sary z dzialajacym koszykiem 
include('head.php');


if(isset($_POST['kup'])) {
	 
    $_SESSION['koszyk'][] = [
        'id' => $_POST['id_produkt'],
        'ilosc' => $_POST['ilosc']
    ]; 
}
 //print_r($_SESSION['koszyk']);
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
$zap = "SELECT `id`, `referencja`,`nazwa`,`ilosc`,`cena`,`opis`,`obrazek` FROM `produkt` LIMIT 6";
 $wynik = mysqli_query($polacz,$zap);
while ($l=mysqli_fetch_array($wynik)) {
	?>
	<div class="kontener">
	<div class="obrazekimg">
	<a href="" class="img">
	<img class="img" src="<?php echo $l['obrazek']; ?>" alt="n">
</a>
	</div>
	<div class="opis">
<form method="POST">
<?php
	echo ' </br>'.$l['nazwa'].'</br> '.'Cena: '.$l['cena'].' ETC </br>'.'Ilość: '.$l['ilosc'].'</br> '.' <input type="hidden" name="ilosc" value="1"> <input type="hidden" name="id_produkt" value='.$l['id'].' ><button name="kup"  type="submit">KUP</button>';
	echo substr($l['opis'],0,32);
	echo (strlen($l['opis']) > 32) ? "..." : "".' ';
	?>
	</form>
	</div>
	</div>
	<?php
}
?>

</div>
</div>
</div>

<?php
include('stopka.php');
?>

</body>
</html>