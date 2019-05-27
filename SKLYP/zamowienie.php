<!DOCTYPE html>

<html>

<?php
include('head.php');
$checked='checked';
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

</div>

<?php
include('stopka.php');
?>

</body>
</html>