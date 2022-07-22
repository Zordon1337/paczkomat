# paczkomat
Zanim powiesz że to jest jakiś shit to wiedz że to mój pierwszy z takich projektów w php (ucze się go dopiero z 4 dni)

# Plusy tego projektu
```
funkcja wysyłania maili
używa baze danych
strona ma odrazu w miare dobry CSS
```
# wymagania
```
MySQL lub MariaDB
Apache, NGINX lub PHP (testowane na PHP 8.1.6) 
```

# Jak Postawić taki serwer
```
1. Pobierasz cały zip i go wypakowujesz
2. otwierasz plik /paczkomat-master/actions/nadajproces.php w notatniku
3. jeżeli używasz gmaila to napisałem poradnik gmailsmtp.md jak używasz innej poczty to możesz zrobić konto na gmailu (też napisane w tutorialu) a też możesz sprawdzić czy twoja poczta ma serwer smtp
4. w przypadku Apache lub NGINX wrzuć poprostu pliki do folderu a jeżeli używasz php to odpal terminal/cmd w folderze z plikami i wpisz "php -S [TWOJE_LOKALNE_IP]:[PORT]"
5. Myślisz że koniec? niestety nie :C teraz nadszedł czas na baze danych
6. Wchodzimy do odbierzprocess.php i edytujemy linijke 4 tam gdzie trzeba
7. Tworzymy baze danych o nazwie "paczka" i importujemy /src/paczka.sql
8. Gotowe Powinno działać 
9. [ZALECANE] Sprawdź czy baza danych jest dobrze skonfigurowana
```

# jak sprawdzić czy dobrze podłączyliśmy baze danych
```
1. próbujemy odebrać paczka testowym kodem i numerem (kod: 333333 numer: 531531531)
2. jeżeli dobrze zrobiliśmy powinno nam wyskoczyć otwarto skrytke (tak naprawde nie :P)
```
