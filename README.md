# Part 1

WP:n asennus lokaalissa. 

WP setup-config:
Database Name: tietokannan nimi eli se nimi minkä loit [phpAdminissa](http://localhost/phpmyadmin/)
Username (lokaalissa): root
Password: voi jättää huomioimatta
Database Host: localhost
Table prefix: wp_

## Lokaalin FTP herjan poistaminen 
Huomioitavaa, jotta lokaalissa onnistuu pluginien lataaminen ja ettei Wordpress herjaisi FTP-ilmoitusta, tee seuraavaasti: 
Avaa wp-config.php -tiedosto
Lisää define ('FS_METHOD', 'direct');

Lisää htdocs-kansioon oikeudet terminaalissa
Siirry terminaalissa kansion polkuun ja tee komento sudo chmod -R 777 wordpress


