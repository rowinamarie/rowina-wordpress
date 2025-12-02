# Part 1

WP:n asennus lokaalissa. 

<p> WP setup-config:  Database Name: tietokannan nimi eli se nimi minkä loit [phpAdminissa](http://localhost/phpmyadmin/) <br>
Password: voi jättää huomioimatta<br>
Database Host: localhost<br>
Table prefix: wp_<br>
</p>


## Lokaalin FTP herjan poistaminen 
Huomioitavaa, jotta lokaalissa onnistuu pluginien lataaminen ja ettei Wordpress herjaisi FTP-ilmoitusta, tee seuraavaasti: 
Avaa wp-config.php -tiedosto
Lisää `define ('FS_METHOD', 'direct');`

Lisää htdocs-kansioon oikeudet terminaalissa
Siirry terminaalissa kansion polkuun ja tee komento `sudo chmod -R 777 wordpress`


