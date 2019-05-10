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
	<nav>
		<h3>LEKARZE SPECJALIŚCI</h3>
		<div class="left">
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
        <br><br>
		<form method="POST" action="pacjent.php">
			<label>Podaj id: <br>
				<input type="number" name="id"></label>
				<input type="submit" value="Pokaż szczegóły">
		</form>
</div>
	<div class="right">
		<h2>KARTA PACJENTA</h2>
		<p>Nie wybrano pacjenta</p>
</div>
	<footer>
		<p>utworzone przez: Na pewno nie Michała </p>
		<a href="kwerendy.txt">Kwerendy do pobrania</a>
	</footer>
</body>
</html>