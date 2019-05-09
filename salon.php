<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="salon.css">

	<title>Salon pielęgnacji</title>
</head>

<body>
<header>
	<h1>SALON PIELĘGNACJI PSÓW I KOTÓW</h1>
</header>

<div class="left">
	<h3>SALON ZAPRASZA W DNIACH</h3>
		<ul>
			<li>Poniedziałek, 12:00 - 18:00</li>
			<li>Wtorek, 12:00 - 18:00</li>
		</ul>
	<a href="pies.jpg"><img src="pies-mini.jpg"></a>
	<p>Umów się telefonicznie na wizytę lub po prostu przyjdź!</p>
</div>

<div class="mid">
	<h3>PRZYPOMNIENIE O NASTĘPNEJ WIZYCIE</h3>

	<?php
		$connect = mysqli_connect('localhost','root','','salon');
		$zapytanie1 = "SELECT `zwierzeta`.`imie`, `zwierzeta`.`rodzaj`, `zwierzeta`.`nastepna_wizyta`, `zwierzeta`.`telefon` FROM `zwierzeta` WHERE `zwierzeta`.`nastepna_wizyta` != 0";
		$zapytanie2 = "SELECT `zwierzeta`.`imie`, `zwierzeta`.`rodzaj`, `zwierzeta`.`nastepna_wizyta`, `zwierzeta`.`telefon` FROM `zwierzeta` WHERE `zwierzeta`.`nastepna_wizyta` != 0 AND `zwierzeta`.`rodzaj` = 1";
		$zapytanie3 = "SELECT `zwierzeta`.`imie`, `zwierzeta`.`rodzaj`, `zwierzeta`.`nastepna_wizyta`, `zwierzeta`.`telefon` FROM `zwierzeta` WHERE `zwierzeta`.`nastepna_wizyta` != 0 AND `zwierzeta`.`rodzaj` = 2";
		
		$wynik1 = mysqli_query($connect, $zapytanie1);
		$wynik2 = mysqli_query($connect, $zapytanie2);		
		$wynik3 = mysqli_query($connect, $zapytanie3);		

		while ($pokaz = mysqli_fetch_row($wynik1)) 
		{
			while ($pokaz2 = mysqli_fetch_row($wynik2)) { 
				echo 'Pies: '.$pokaz2[0];
				echo '<br>';
				echo 'Data następnej wizyty: '.$pokaz2[2];
				echo ', telefon właściciela: '.$pokaz2[3];
				echo '<br>';
			}
			while ($pokaz3 = mysqli_fetch_row($wynik3)) { 
				echo 'Kot: '.$pokaz3[0];
				echo '<br>';
				echo 'Data następnej wizyty: '.$pokaz3[2];
				echo ', telefon właściciela: '.$pokaz3[3];
				echo '<br>';
			}
		}
		mysqli_close($connect);
	?>
</div>
<div class="right">
	<h3>USŁUGI</h3>
	<?php
		$connect = mysqli_connect('localhost','root','','salon');
		$zapytanie = "SELECT nazwa, cena FROM `uslugi`";
		$wynik = mysqli_query($connect, $zapytanie);

		while ($pokaz1 = mysqli_fetch_row($wynik)) {
			echo $pokaz1[0].', '.$pokaz1[1].'<br>';
		}
		mysqli_close($connect);
	?>
</div>
</body>
</html>