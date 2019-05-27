<!DOCTYPE html>

<html>
<head>
   
<meta charset="utf-8">
<title>SKLYP - 100MilowyLas</title>
<link rel="stylesheet" type="text/css" href="css.css?v=<?php echo time();?>">
<?php
#$_SESSION['koszyk'] = array();
session_start();
    $polacz = mysqli_connect('localhost','root','','sklyp');
    mysqli_query($polacz,"set names utf8");

    $conditons_totalPrice = '';
    
    $getTotal = 0;
    
    $idsProduct = '';
    $qtysProduct = '';

    $separator = ',';
    foreach($_SESSION['koszyk'] as $key => $total_price) {
        
        
        $sql = "SELECT cena FROM produkt WHERE id = ".$total_price['id'];
        $result = mysqli_query($polacz,$sql);
        $getPrice = mysqli_fetch_array($result);
        
        if($total_price['ilosc'] > 1) { 
            $ilosc = $total_price['ilosc'];
        } else { 
            $ilosc = 1;
        }
         $getTotal += $getPrice['cena']*$ilosc;

         if($key < count($_SESSION['koszyk'])) {
         $idsProduct .= $total_price['id'].$separator;
            $qtysProduct .= $total_price['ilosc'].$separator;
        } else {
            $idsProduct .= $total_price['id'];
            $qtysProduct .= $total_price['ilosc'];
        }
         
    }
    ?>

</head>