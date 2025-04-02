# arhitektur-zadatak-za-bien.studio

HRV:

Dokumentacija za lokalnu instalaciju WordPress teme
Preduvjeti

Za postavljanje projekta lokalno, potrebno je instalirati XAMPP ili LocalWp ali meni bolje radi XAMPP, koji je besplatan i open-source paket rješenja za web poslužitelj koji uključuje Apache, MySQL i PHP, a sve je potrebno za pokretanje WordPressa lokalno. ja sam na Windows sve stavio pa bi bilo dobro da vi ovo isto napravite jer nisam siguran za MAC i ostalo.

1. Instalirajte XAMPP

    Preuzmite i instalirajte XAMPP s službene web stranice: https://www.apachefriends.org/index.html

 
Odaberite ispravnu verziju za vaš operacijski sustav i slijedite upute za instalaciju 

2. Pokrenite XAMPP usluge

    Nakon instalacije, otvorite XAMPP Control Panel.

    Pokrenite sljedeće usluge:

        Apache (za web poslužitelj)

        MySQL (za bazu podataka)

3. Kreirajte novu bazu podataka za WordPress

    Otvorite svoj preglednik i idite na http://localhost/phpmyadmin.

    U phpMyAdmin kliknite na Databases u gornjem izborniku.

    Kreirajte novu bazu podataka unosom naziva, na primjer wordpress_db, i kliknite Create.

4. Preuzmite WordPress

    Posjetite službenu web stranicu WordPressa: https://wordpress.org/download/.

    Preuzmite najnoviju verziju WordPressa i raspakirajte datoteke u sljedeći direktorij:

        *C:\xampp\htdocs* (ili vaša instalacijska mapa XAMPP-a) — stvorite novu mapu (npr. my_site).

5. Konfigurirajte WordPress

    Idite na http://localhost/my_site (zamijenite my_site s imenom vaše mape).

    Slijedite proces instalacije WordPressa. Unesite sljedeće informacije:

        Naziv baze podataka: Ime baze podataka koju ste ranije stvorili (wordpress_db).

        Korisničko ime: root (default u XAMPP-u).

        Lozinka: Ostavite prazno (default u XAMPP-u).

        Host baze podataka: localhost

    Dovršite instalaciju i moći ćete se prijaviti u svoj lokalni WordPress.

6. Potrebni dodaci

   Instalirajte ACF dodatak ako već nije instaliran.

   Idite na Plugins > Add New, potražite Advanced Custom Fields i instalirajte ga.

   Napravite dva field s oznakom Architect Name i Material Type

   I nazivi polja trebaju biti imenovani architect_name i material_type
   

8. Instalirajte temu

    Idite na wp-content/themes direktorij u vašoj WordPress instalacijskoj mapi.

    Stvorite novu mapu i nazovite je prema vašoj temi (npr. my_theme).

    Kopirajte sve datoteke vaše teme (uključujući style.css, index.php i druge) u ovu mapu.

9. Aktivirajte temu

    Prijavite se na WordPress administratorski panel na http://localhost/my_site/wp-admin.

    Idite na Appearance > Themes.

    Pronađite svoju temu i kliknite Activate.

10. Testirajte temu

    Posjetite http://localhost/my_site da biste vidjeli svoju temu u akciji.

    Provjerite je li stranica za izlistavanje blog postova i stranica za pojedinačne blog postove ispravno prikazana.


ENG

English Version:
Local Setup Documentation for the WordPress Theme
Prerequisites

To set up the project locally, you will need to install XAMPP, which is a free and open-source cross-platform web server solution stack package. It includes Apache, MySQL, and PHP, which are required to run WordPress locally. I'm running it on Windows and i advise you do the same since I'm not sureabout MAC and the rest

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

        *C:\xampp\htdocs* (or your XAMPP installation directory) — create a new folder here (e.g., my_site).

5. Configure WordPress

    Go to http://localhost/my_site (replace my_site with the name of your folder).

    Follow the WordPress installation process. Enter the following information:

        Database Name: The name of the database you created earlier (wordpress_db).

        Username: root (default in XAMPP).

        Password: Leave it blank (default in XAMPP).

        Database Host: localhost

    Complete the installation, and you will be able to log into your local WordPress site.

6. Necessary Plugins

   Install the ACF plugin if it is not already installed.

   Navigate to Plugins > Add New, search for Advanced Custom Fields, and install it.

   Make two fields labeled Architect Name and Material Type

   And the field names need to be named architect_name and material_type

8. Install the Theme

    Go to the wp-content/themes directory in your WordPress installation folder.

    Create a new folder and name it according to your theme (e.g., my_theme).

    Copy all your theme files (including the style.css, index.php, etc.) into this folder.

9. Activate the Theme

    Log in to the WordPress admin panel at http://localhost/my_site/wp-admin.

    Go to Appearance > Themes.

    Find your theme and click Activate.

10. Test the Theme

    Visit http://localhost/my_site to see your theme in action.

    Make sure the blog listing and individual blog post pages are displaying correctly.
