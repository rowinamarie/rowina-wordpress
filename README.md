# Part 1

## WP:n asennus lokaalissa. 

<p> WP setup-config:  Database Name: tietokannan nimi eli se nimi minkä loit [phpAdminissa](http://localhost/phpmyadmin/) <br>
Password: voi jättää huomioimatta<br>
Database Host: localhost<br>
Table prefix: wp_<br>
</p>


## Lokaalin FTP herjan poistaminen 
Huomioitavaa, jotta lokaalissa onnistuu pluginien lataaminen ja ettei Wordpress herjaisi FTP-ilmoitusta, tee seuraavaasti: 
Avaa wp-config.php -tiedosto <br>
Lisää `define ('FS_METHOD', 'direct');` <br>
Lisää htdocs-kansioon oikeudet terminaalissa <br>
Siirry terminaalissa kansion polkuun ja tee komento `sudo chmod -R 777 wordpress`<br>


Muista myös muuttaa Settings -> Permalinks -> Common settings 

Etusivun asettaminen myös valikkoon ja sen asettaminen etusivuksi ilman, että tulee osoite.com/etusivu <br>
Settings - Reading - A statig page - Home page ja valitse sivu 


## Part 2

Uusi template luodaan WP:n themes kansioon.
Luo tiedostot <br>
<ol>
<li>`archive.php` </li>
<li>`index.php` </li>
<li>`footer.php` </li>
<li>`front-page.php` </li>
<li>`functions.php` </li>
<li>`header.php` </li>
<li>`page.php` </li>
<li>`search.php` </li>
<li>`404.php` </li>
<li>`style.css` </li>

</ol>

Style.css tiedostoon muista lisätä kommenttina <br>
Theme Name: teeman nimi <br>
Author: tekijän nimi <br>


## Part 3 Enqueuing CSS and JS to to WP theme
<p> `header.php`tiedostoon alustetaan HTML - tiedoot, kuten esim. headin tiedot. <br>
Tänne lisätään myös header näkyviin </p>

<p> 
`functions.php`tiedostossa haetaan tyylit load_css functiolla <br>
Bootstrapin js ja css kansioden lataaminen teeman-kansioon. Functiolla sitten osoitetaan, että mistä nämä löytyvät

</p>

