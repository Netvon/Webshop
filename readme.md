# Websites-2 Webshop
Gemaakt door Sander Grandia en Tom van Nimwegen voor Avans Hogeschool.

## Installatie
Clone eerst de repository naar je computer. Voor vervolgens het onderstaande commando uit in de map waar de webshop staat.
```
composer install
```
Als het bovenstaande commando klaar is moet je een ``.env`` bestand aanmaken voor alle instellingen voor de database connectie. Na het aanmaken en vullen van het bestand kun je het volgende commando uitvoeren.
```
artisan key:generate
```
Nadat de key is aangemaakt kan je verder gaan met het aanmaken van de database. Maak in MySQL zelf je schema aan en voer vervolgens het onderstaande commando's uit.
```
artisan migrate
artisan db:seed
```
Nu ben je klaar om de webshop locaal te draaien. Als je via Laravel zelf een server op wil zetten kan je dat d.m.v. het volgende commando. Let wel op dat dit commando blijft draaien totdat je het zelf uit zet.
```
artisan serve
```
## PhpStorm
Als je gebruikt maakt van PhpStorm kan je [deze](https://confluence.jetbrains.com/display/PhpStorm/Laravel+Development+using+PhpStorm) link volgen voor betere Laravel integatie. Ook is het handig op de [GitHub plugin](https://www.jetbrains.com/help/phpstorm/2016.1/using-github-integration.html?origin=old_help) te installeren. Als laatste kan je ook nog een [verbinding leggen](https://confluence.jetbrains.com/display/PhpStorm/Databases+and+SQL+Editor+in+PhpStorm) met je MySQL database vanuit PhpStorm. Om dan snel het schema te droppen en aan te maken kan je het onderstaande script gebruiken.
```MySQL
drop SCHEMA if exists webshop;
create SCHEMA webshop;
```
