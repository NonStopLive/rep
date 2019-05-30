<!DOCTYPE html>

<html>

<?php
include('head.php');
$checked='checked';

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

<input type="checkbox" name="dostawa" value="$r['id']" /> Kurier InPost
<input type="checkbox" name="dostawa" value="$r['id']" /> Kurier DPD
<input type="checkbox" name="dostawa" value="$r['id']" /> Poczta Polska
<input type="checkbox" name="dostawa" value="$r['id']" /> Odbior osobisty


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

<input type="checkbox" name="Kurier Tomek" <?php if ($checked == '1') $getTotal+2;?>/><?php echo 'Kurier Tomek'.'</br>'?> 

<input type="checkbox" name="Paczkomat" <?php if ($checked == '1') $getTotal+1;?> /><?php echo 'Paczkomat'.'</br>'?> 
<input type="checkbox" name="Punkt" <?php if ($checked== '1') $getTotal+1;?> /><?php echo 'Punkt'.'</br>'?> 
<?php
echo $getTotal;
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