<!--
Hubert : 5
Fabian : 5
-->
<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="styl.css">
<title>Szkoła Podstawowa</title>

</head>
<body>

<div class="baner">

	<h1>Oceny uczniów: biologia</h1>

</div>
<div class="left">

<h2>Uczeń: <?php 
				$polacz = mysqli_connect('localhost','root','','szkola');
				$zap = "SELECT `uczen`.`imie`, `uczen`.`nazwisko` FROM `uczen` WHERE `uczen`.`id`=1";
				$wynik = mysqli_query($polacz,$zap);
				while ($l=mysqli_fetch_row($wynik)) {
					echo $l[0].' '.$l[1];
				}
				mysqli_close($polacz);
			 ?>
		</h2>
		<p>Najwyższa ocena z biologii: 
			<?php 			 
				$polacz = mysqli_connect('localhost','root','','szkola');
				$zap = "SELECT MAX(`ocena`.`ocena`) FROM `ocena` INNER JOIN `uczen` On `uczen`.`id`= `ocena`.`uczen_id` Where `uczen`.`id` = 1 AND `ocena`.`przedmiot_id`= 4";
				$wynik = mysqli_query($polacz,$zap);
				while ($l=mysqli_fetch_row($wynik)) {
					echo $l[0];
				}
				mysqli_close($polacz);	 
			?>
		</p>
</div>
<div class="right">

<h3>Nazwiska i numery PESEL uczniów: </h3>
		<ul>
			<?php 				 
				$polacz = mysqli_connect('localhost','root','','szkola');
				$zap = "SELECT `uczen`.`nazwisko`, `uczen`.`PESEL` FROM `uczen`";
				$wynik = mysqli_query($polacz,$zap);
				while ($l=mysqli_fetch_row($wynik)) {
					echo '<li>'.$l[0].' '.$l[1].'</li>';
				}
				mysqli_close($polacz);			
			?>
		</ul>
</div>
<div class="stopka">

<h3>Szkoła Podstawowa</h3>
<p>Stronę opracował: Puchaty i Prosiaty</p>

</div>

</body>
</html>