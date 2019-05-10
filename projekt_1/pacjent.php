<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="poradnia.css">
	<title>Poradnia</title>
</head>
<body>
	<header>
		<h1>PORADNIA SPECJALISTYCZNA</h1>
	</header>
	<div class="left">
		<h3>LEKARZE SPECJALIŚCI</h3>
		<table>
			<tr>
				<th colspan="2">Poniedziałek</th>
			</tr>
			<tr>
				<th>Anna Kowalska</th><th>otolaryngolog</th>
			</tr>
			<tr>
				<th colspan="2">Wtorek</th>
			</tr>
			<tr>
				<th>Jan Nowak</th><th>kardiolog</th>
			</tr>
		</table>
        <h3>LISTA PACJENTÓW</h3>
        <?php 
			$polacz = mysqli_connect('localhost','root','','poradnia');
			$zap = "SELECT id, imie, nazwisko, choroba FROM `pacjenci`";
			$wynik = mysqli_query($polacz,$zap);
			while ($l=mysqli_fetch_row($wynik)) {
				echo $l[0].' '.$l[1].' '.$l[2].' '.$l[3].'<br>';
			}
			mysqli_close($polacz);
		?>
        <br><br>
		<form method="post" action="pacjent.php">
			<label>Podaj id: <br>
				<input type="number" name="id"></label>
				<input type="submit" value="Pokaż szczegóły">
		</form>
</div>
	<div class="right">
		<h2>KARTA PACJENTA</h2>
</div>
	<footer>
		<p>utworzone przez: Na pewno nie Michał </p>
		<a href="kwerendy.txt">Kwerendy do pobrania</a>
	</footer>
</body>
</html>