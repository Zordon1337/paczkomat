<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .center {
            text-align: center;
        }
    </style>
</head>
<body bgcolor="yellow">
<div class="center">

    <h1>Odbierz</h1>
    <?php // całe menu chyba nie musze tłumaczyć co do czego :P
    echo"<form action='./nadajprocess.php' method='GET'>";
    echo"<p align='center'>Podaj Numer Telefonu</p>";
    echo"<input type='text' name='numer' />";
    echo"<p align='center'>Podaj email na jaki ma przyjść kod odbioru</p>";
    echo"<input type='mail' name='mail1' />";
    echo"<p align='center'>Napisz pod jaką nazwą ma się pojawić paczka</p>";
    echo"<input type='mail' name='nazwapaczki' />";
    echo"<p align='center'>Podaj Adres gdzie paczka ma być wysłana</p>";
    echo"<input type='mail' name='addr' />";
    echo"<p> </p>";
    echo"<input style='color:white;border:0px;background-color:green;font-size: 14px;margin: 4px 2px;padding: 15px 32px;' type='submit' value='Przejdź Dalej' />";
    
    
    echo"</form>";
    ?>
    <form action="/"></form>
    <p> </p>
    <input style="color:white;border:0px;background-color:green;font-size: 14px;margin: 4px 2px;padding: 15px 32px;" type="button" value="Wróć do początku"
</div>
</body>
</html>