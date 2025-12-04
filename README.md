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


`functions.php`tiedostossa haetaan tyylit load_css functiolla <br>

```
function load_css() { 
    
    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');


    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');
    wp_enqueue_style('main');

    } 
    
// tämä aktivoi tuon yllä olevan lataamisen
    add_action('wp_enqueue_scripts', 'load_css');

```


Bootstrapin js ja css kansioden lataaminen teeman-kansioon. Functiolla `get_template_directory_uri` sitten osoitetaan, että mistä nämä löytyvät. 
` add_action('wp_enqueue_scripts', 'load_css');` hook niin sanotusti aktivoi tuon yllä olevan funktion


```
 function load_js() {
        wp_enqueue_script ('jquery');
        wp_register_script ('bootstrap',  get_template_directory_uri() . '/js/bootstrap.min.js', 'jquery', false, true);
        wp_enqueue_script('bootstrap');
    }

add_action ('wp_enqueue_scripts', 'load_js');
```

jquery - is a dependency that is already there <br>
false - no need to define the version<br>
true - should it be in the footer or header. False if JavaScript is in header, and True if JS is in footer  <br>

## Part 4 Template Parts & Page Templates

### Template tarkoitus

Front pagen sisältö haetaan includes -kansiossa olevasta section-content.php - tiedostosta
Frontpage.php näyttää ainoastaan sen sivun sisällön, joka on asetettu WP:ssä etusivuksi. 


Mitä kukin osa tekee?

`have_posts()`

Tarkistaa, onko nykyisessä queryssä (esim. sivu, kategoria, hakutulos) yhtään postausta näytettäväksi.
Palauttaa true jos on, false jos ei.<br>

`while (have_posts())`

Käy läpi kaikki postaukset yksi kerrallaan niin kauan kuin niitä on jäljellä.
Tämä on silmukka, joka toistaa sisällön tulostuksen jokaiselle postille.


`the_post()`

Valmistelee nykyisen postin tiedot käyttöön (esim. otsikko, sisältö, meta).
Ilman tätä funktiota et voisi käyttää the_content(), the_title() jne.


`the_content()`

Tulostaa postin varsinaisen sisällön (editorissa kirjoitettu teksti, kuvat jne.).


Kokonaislogiikka:

Jos on postauksia → käy läpi kaikki → näytä sisältö.<br>
Jos ei ole postauksia, niin else-osassa voisi näyttää esim. "Ei sisältöä". <br>

Miksi tämä on tärkeää?
WordPressin Loop on se mekanismi, jolla sivupohjat (template files) hakevat ja näyttävät sisältöä tietokannasta. Ilman sitä sivu ei tiedä, mitä näyttää.<br>

Jotta yllä olevat asetukset toimivat myös muissa perussivuissa, pitää asettaa samat page.php sivuille

Luotiin `template-contactus.php`, jotta siihen voi tehdä erillisen tavan näyttää section-content.php:n sisältöä, joka eroaa muista perussivuista. Template valitaan WP:n sivun sisällönsyöttönäkymässä kohdasta "Template". Tiedostoon laitetaan Templaten nimi, joka sitten näkyy WP:n puolella.


### Eri headerit sivuilla
Eri sivuilla voi olla erilaiset headerit. 
Sitä varten luodaan `header-secondary.php`tiedosto. Sitten se sivutyyppi, jolla sitä käytetään lisätään `<?php get_header('secondary); ?>`



# Part 5 - Navigation menus

Omien stylesheetien aktivoiminen.
- Voi käyttää styles.css -tiedostoa, mutta on parempi luoda aivan erillinen. 
- Tämän voi luoda esim. css-kansioon. Tässä tapauksessa tehtiin `main.css`
- Varmista, että oma stylesheet on VASTA muiden stylesheetien jälkeen, koska jälkimmäinen aina yliajaa edellisen

- Lisätään stylesheet load_css funktioon `functions.php`kansiossa

## Menujen luonti

Lisätään `functions.php`kansioon `add_theme_support ('menus');`. Tällä saadaan WP:n Appearence-kohtaan valikkoasetukset näkyviin

### Menu locations

```
register_nav_menus(
    array(
        'top-menu' => 'Top Menu Location', //ensin menun Id ja sitten menun visuaalinen nimi
        'mobile-menu' => 'Mobile Menu Location',
    )

);
```

Tämä rekisteröi menun olemassa olon. 

Seuraavaksi lisätään menut sinne missä niiden halutaan näkyvän. Tässä tapauksessa se lisättiin `header.php` :seen seuraavalla koodilla:

```
<header>
    <div class = "container">
        <?php
            wp_nav_menu (
                array (
                    'theme-location' => 'top-menu',
                    'menu_class' => 'top-bar',
            )
        );
        ?>
       </div>

</header>

```

