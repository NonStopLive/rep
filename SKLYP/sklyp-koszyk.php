<!DOCTYPE html>

<html>

<?php
include('head.php');

if(isset($_GET['remove'])) {
    unset($_SESSION['koszyk'][$_GET['remove']]);
    }
    //echo $getTotal;
?>

<body>

<div class="baner">

<img src="logo.png">
<br >
<img src="logo2.png">

</div>
<div class="koszyk">

<img src="wracamy.png"> <a href="sklyp.php"> <img class="koszyk" src="strzałka.png"> </a>

</div>
<div class="karton">
<div class="produkty">
<table class="table">
        <thead>
            <th>#</th>
            <th>Produkt</th>
            <th>Ilość</th>
            <th>Cena</th>

        </thead>
        <tbody>
        <?php 
            if(count($_SESSION['koszyk']) == 0)  {
                ?>
                Brak produktow w koszyku
                <?php
            }  else {
            foreach($_SESSION['koszyk'] as $key => $koszyk) { 
                $getProduct = "SELECT * FROM produkt WHERE id = ".$koszyk['id']."";
                $result = mysqli_query($polacz,$getProduct);
                $product = mysqli_fetch_array($result);
            ?>
            <tr>
                <td><?php echo "<img src='".$product['obrazek']."' alt='' style='width:64px;' />";?></td>
                <td><?php echo $product['nazwa']; ?></td>
                <td><?php echo $koszyk['ilosc']; ?></td>
                <td><?php echo $product['cena']; ?></td>
                <td><a href="sklyp-koszyk.php?remove=<?php echo $key; ?>&id_product=<?php echo $koszyk['id']?>">Usun</a></td>
            </tr>
            <?php
            }
        }
            ?>
            
        </tbody>
    </table>
</div>
<br>
<a href="zamowienie.php"> <img class="zrealizuj" src="serduszko.png"> </a> <img class="zrealizuj" src="zrealizuj.png">


</div>

<?php
include('stopka.php');
?>

</body>
</html>