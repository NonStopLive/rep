<DOCTYPE html> 
<html>


<head>

<meta charset="utf-8">
<title>Nasze hobby</title>
<link rel="stylesheet" type="text/css" href="hobby.css">

</head>
<body>

<div class="baner">

FORUM HOBBYSTYCZNE

</div>
<div class="left">
<?php 
if(isset($_POST['rejestruj'])) {
  //  print_r($_POST);
		$nick=$_POST['nick'];
		$zainteresowania=$_POST['hobby'];
		$zawod=$_POST['zawod'];
		$login=$_POST['login'];
        $haslo=$_POST['haslo'];
        $zaznacz=$_POST['zaznacz'];
		$polaczenie=mysqli_connect('localhost','root','','forum');
		echo "Konto $nick zostało zarejestrowane na forum hobbystycznym";
			if (empty($zaznacz) || empty($nick) || empty($zawod) || empty($zainteresowania)) {
				echo "Nie podano danych lub nie zaznaczono płci";
			}
			else if (isset($_POST['zaznacz'])) {
				$sql="INSERT INTO uzytkownicy VALUES(NULL,'$nick','$zainteresowania','$zawod','$zaznacz')";
				$wynik=mysqli_query($polaczenie,$sql);
			}	
			if (empty($login) || empty($haslo)) {
				echo "Nie podano danych logowania";
			}
			else if (isset($_POST['login']) && isset($_POST['haslo'])) {
				$sql2="INSERT INTO konta VALUES(NULL,'$login','$haslo')";
				$wynik2=mysqli_query($polaczenie,$sql2);
			}
        mysqli_close($polaczenie);
}
        ?>
</div>
<div class="right">

<h3>TEMATYKA FORUM</h3>
<ul>
    <li>Hodowla zwierząt
<ul>
    <li>psy</li>
    <li>koty</li>
</ul>
</li>
    <li>Muzyka</li>
    <li>Gry komputerowe</li>
</ul>

</div>


</body>
</html>