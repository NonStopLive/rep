<!DOCTYPE html>

<html>
<head>
   
<meta charset="utf-8">
<title>SKLYP - 100MilowyLas</title>
<link rel="stylesheet" type="text/css" href="css.css?v=<?php echo time();?>">
<?php
$_SESSION['koszyk'] = array();
    $polacz = mysqli_connect('localhost','root','','sklyp');
    mysqli_query($polacz,"set names utf8");
    ?>

</head>