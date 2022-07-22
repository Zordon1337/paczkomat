<?php
$kod = $_GET['kod'];
$numertel = $_GET['numer'];
@ $db = mysqli_connect('localhost', 'LOGIN', 'HASŁO', 'paczka' ); // zmień LOGIN i HASŁO
$sql = "SELECT numer FROM server WHERE numer = '$numertel' && kod = '$kod'";
$result = $db->query($sql);

if($result->num_rows > 0) {
    echo "<body bgcolor='yellow'>";
    echo "<h1 align='center'>Otwarto skrytke</h1>"; //takes'em back to form
    echo "<p> </p>";
    echo "<p align='center'>";
    echo "<a href='/index.php'>Koniec na dzisiaj</a>";
    echo "</p>";
    echo "</body>";
} else {
    echo "<body bgcolor='yellow'>";
    echo "<h1 align='center'>Zły kod lub numer</h1>";
    echo "<p> </p>";
    echo "<div align='center'";
    echo "<p align='center'>";
    echo "<a>Wróć do początku</a>";
    echo "</p>";
    echo "</div>";
    echo "</body>";
}
?>