<!DOCTYPE html>

<html>

<?php
include('head.php');
$checked='checked';
$cena_ostateczna ='';
/**

Dobra panie dzieju,
w widoku zamowienia wez przy składaniu zamowienia uwzględnij checkboxy wg schematu: 
(uwaga cenne info)

DB: 
dostawa
|id |   nazwa   |   koszt
--------------------------
|1  |  Kurier InPost    | 10.00
|2  |  Kurier DPD       | 15.00
|3  |  Poczta Polska    | 9.00
|4  |  Odbior osobisty  | 0.00




$sql = "SELECT * FROM dostawcy WHERE id = ".$_POST['dostawa']."";

$resutat = mysqli_result($polaczenie,$sql);

$dostawa_koszt = mysqli_fetch_array($resutat);

$dostawa = $dostawa_koszt['koszt'];

$cena_ostateczna = $totalPrice + $dostawa;

*/
?>

<body>

<div class="baner">

<img src="logo.png">
<br>
<img src="logo2.png">

</div>
<div class="koszyk">

<img class="koszyknapis" src="koszyknapis.png"> <a href="sklyp-koszyk.php"> <img class="koszyk" src="strzałka.png"> </a>
<br>

</div>
<div class="karton">

<?php 
if(isset($_POST['dostawa'])) {
$sql = "SELECT * FROM dostawy WHERE id = ".$_POST['dostawa']."";

$resultat = mysqli_result($polaczenie,$sql);

$dostawa_koszt = mysqli_fetch_array($resultat);

$dostawa = $dostawa_koszt['koszt'];

$cena_ostateczna = $getTotal + $dostawa;
}
?>
<input type="checkbox" name="dostawa" value="$r['12']" /> Kurier Tomek <?php echo '</br>' ?>
<input type="checkbox" name="dostawa" value="$r['13']" /> Punkt <?php echo '</br>' ?>
<input type="checkbox" name="dostawa" value="$r['14']" /> Poczta Polska <?php echo '</br>' ?>
<input type="checkbox" name="dostawa" value="$r['15']" /> Odbior osobisty <?php echo '</br>' ?>
<?php
echo '<button name="kup" type="button">Oblicz</button>'.'</br>';
echo "CENA: ".$cena_ostateczna;
?>

<div class="kup">

<a href="zrealizowano.php"> <img class="kup" src="kup.png">  </a>

</div>

</div>

<?php
include('stopka.php');
?>

</body>
</html>
