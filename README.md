DotPlant3 CMS
=============

Next generation of dotPlant CMS.

Installation
------------

1. Clone a project `git clone git@github.com:DevGroup-ru/dotplant3.git`
2. Go to an application directory `cd dotplant3`
3. Run an installing of composer packages `/usr/bin/php composer.phar install`
4. Modify configuration files
    * Open `config/db-local.php` and set your connection parameters. It looks like;
    * Change a domain in `config/languages/Context.php` and `config/languages/Language.php` if needs;
    * Create a new domain configuration at your web server and set `webroot` as `/path/to/dotplant3/web`.
5. Run migrations `./yii migrate`
7. Open a site in you browser `http://dotplant3.dev`
