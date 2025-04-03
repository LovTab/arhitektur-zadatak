# arhitektur-zadatak za bien.studio

front-page.php je za izlistavanje članaka
single.php je za ovi pojedini članak (blog details)

HRV:

Dokumentacija za lokalnu instalaciju WordPress teme
Preduvjeti

Za setup projekta lokalno, potrebno je instalirati XAMPP ili LocalWp ali meni bolje radi XAMPP, koji uključuje Apache, MySQL i PHP, a sve je potrebno za pokretanje WordPressa lokalno. Ja sam na Windows sve stavio pa bi bilo dobro da vi ovo isto napravite jer nisam siguran za MAC i ostalo.

1. Instalirajte XAMPP

    Preuzmite i instalirajte XAMPP s službene web stranice: https://www.apachefriends.org/index.html

    Odaberite ispravnu verziju za vaš operacijski sustav i slijedite upute za instalaciju 

2. Pokrenite XAMPP usluge

    Nakon instalacije, otvorite XAMPP Control Panel.

    Pokrenite sljedeće usluge:

        Apache (za web poslužitelj)

        MySQL (za bazu podataka)

3. Stvorite novu bazu podataka za WordPress

    Otvorite svoj preglednik i idite na http://localhost/phpmyadmin.

    U phpMyAdmin kliknite na Databases u gornjem izborniku.

    Kreirajte novu bazu podataka unosom naziva, na primjer wordpress_db, i kliknite Create.

4. Preuzmite WordPress

    Posjetite službenu web stranicu WordPressa: https://wordpress.org/download/.

    Preuzmite najnoviju verziju WordPressa i raspakirajte datoteke u sljedeći direktorij:

        XAMPP > htdocs (ili vaša instalacijska mapa XAMPP-a) — stvorite novu mapu onda copy i paste sve što ste raspakirali od wordpress zip (wp-content, wp-admin,             wp-includes i ostlao) na novoj mapi i promjenite ime na nešto drugo (npr. my_site).

6. Konfigurirajte WordPress

    Idite na http://localhost/my_site (zamijenite my_site s imenom vaše mape).

    Slijedite proces instalacije WordPressa. Unesite sljedeće informacije:

        Naziv baze podataka: Ime baze podataka koju ste ranije stvorili (wordpress_db).

        Korisničko ime: root (default u XAMPP-u).

        Lozinka: Ostavite prazno (default u XAMPP-u).

        Host baze podataka: localhost

    Dovršite instalaciju i moći ćete se prijaviti u svoj lokalni WordPress.
   

7. Instalirajte temu

    Idite na wp-content/themes direktorij u vašoj WordPress instalacijskoj mapi.

    Stvorite novu mapu i nazovite je prema vašoj temi (npr. my_theme).

    Kopirajte sve datoteke vaše teme (uključujući style.css, index.php i druge) u ovu mapu.

8. Aktivirajte temu

    Prijavite se na WordPress administratorski panel na http://localhost/my_site/wp-admin.

    Idite na Appearance > Themes.

    Pronađite svoju temu i kliknite Activate.

9. Testirajte temu

    Posjetite http://localhost/my_site da biste vidjeli svoju temu u akciji.

    Provjerite je li stranica za izlistavanje blog postova i stranica za pojedinačne blog postove ispravno prikazana.



EXTRA: Potrebni dodaci

   Instalirajte ACF dodatak ako već nije instaliran.

   Idite na Plugins > Add New, potražite Advanced Custom Fields i instalirajte ga.

   Napravite dva field s oznakom Architect Name i Material Type

   I nazivi polja trebaju biti imenovani architect_name i material_type. architect_name drži imena kao YH2 Architects i material_type drži informaciju za ove 
   narančaste kocke koj piše family homes i ostalo 

   Ja sam stavio arhitektur.xml file koj možete import ako niste napravili blog posts i to možete na Wordpressu idite na Tools > Import. Ako ste več napravili blog        posts onda super mozete izbrisati arhitektur.xml


ENG

front-page.php is for listing articles (blog)
single.php is for these single articles (blog details)

English Version:
Local Setup Documentation for the WordPress Theme
Prerequisites

To set up the project locally, you will need to install XAMPP, which includes Apache, MySQL, and PHP, which are required to run WordPress locally. I'm running it on Windows and i advise you do the same since I'm not sureabout MAC and the rest

1. Install XAMPP

    Download and install XAMPP from the official website: https://www.apachefriends.org/download.html.

    Choose the correct version for your operating system and follow the installation instructions.

2. Start XAMPP Services

    After installation, open the XAMPP Control Panel.

    Start the following services:

        Apache (for the web server)

        MySQL (for the database)

3. Create a New Database for WordPress

    Open your browser and go to http://localhost/phpmyadmin.

    In phpMyAdmin, click on Databases in the top menu.

    Create a new database by giving it a name, such as wordpress_db, and click Create.

4. Download WordPress

    Go to the official WordPress website: https://wordpress.org/download/.

    Download the latest version of WordPress and extract the files to the following directory:

        XAMPP > htdocs (or your XAMPP installation directory) — create a new folder then copy and paste everything you unpacked from the wordpress zip (wp-content,             wp-admin, wp-includes and so on) into the new folder and change the name to something else (e.g. my_site).

5. Configure WordPress

    Go to http://localhost/my_site (replace my_site with the name of your folder).

    Follow the WordPress installation process. Enter the following information:

        Database Name: The name of the database you created earlier (wordpress_db).

        Username: root (default in XAMPP).

        Password: Leave it blank (default in XAMPP).

        Database Host: localhost

    Complete the installation, and you will be able to log into your local WordPress site.


7. Install the Theme

    Go to the wp-content/themes directory in your WordPress installation folder.

    Create a new folder and name it according to your theme (e.g., my_theme).

    Copy all your theme files (including the style.css, index.php, etc.) into this folder.

8. Activate the Theme

    Log in to the WordPress admin panel at http://localhost/my_site/wp-admin.

    Go to Appearance > Themes.

    Find your theme and click Activate.

9. Test the Theme

    Visit http://localhost/my_site to see your theme in action.

    Make sure the blog listing and individual blog post pages are displaying correctly.


EXTRA: Required accessories

   Install the ACF plugin if it is not already installed.

   Go to Plugins > Add New, search for Advanced Custom Fields and install it.

   Create two fields labeled Architect Name and Material Type

   And the field names should be named architect_name and material_type. architect_name holds names like YH2 Architects and material_type holds information for these 
   orange cubes that say family homes and other things 

   I put the arhitektur.xml file that you can import if you haven't made blog posts and you can do that in Wordpress by going to Tools > Import. If you have made more     blog posts then you can delete arhitektur.xml
