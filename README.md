# OpenEMR Project Website

## Install

Set up wiki database:

set `/etc/apache2/sites-available/000-default.conf` up as:
```
<VirtualHost *:80>
        ServerAdmin webmaster@localhost
        DocumentRoot /var/www/html

        <Directory /var/www/html>
                Options Indexes FollowSymLinks MultiViews Includes
                AllowOverride None
                Order allow,deny
                allow from all
                AddType text/html .shtml
                AddOutputFilter INCLUDES .shtml
        </Directory>

        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined

        ErrorDocument 404 /404.php
</VirtualHost>
```

Then run the following:

```$ sudo a2enmod include && sudo service apache2 restart```

Create database and user:

```$ mysql -u root -p```

```sql
CREATE DATABASE OpenEMRWiki;

GRANT INDEX, CREATE, SELECT, INSERT, UPDATE, DELETE, ALTER, LOCK TABLES ON OpenEMRWiki.* TO 'admin'@'localhost' IDENTIFIED BY 'mypassword';

FLUSH PRIVILEGES;

exit;
```

Set up working area:

```
$ sudo ln -s  /home/$USER/website-openemr/ /var/www/html
```

Change directory to the wiki content:

```
$ cd /home/$USER/website-openemr/wiki
```

Download Mediawiki (must be specified version... newer version will error out!):

```
$ wget https://releases.wikimedia.org/mediawiki/1.16/mediawiki-1.16.1.tar.gz
```

Install Mediawiki:
```
$ tar -xvf mediawiki-1.16.1.tar.gz
$ cp -f mediawiki-1.16.1/** ./
$ chmod a+w config
$ rm -rf mediawiki-1.16*
```

Configure Mediawiki:
```
$ # Open http://localhost/wiki/config/index.php and follow along
$ mv config/LocalSettings.php ./
$ # Using your favorite editor, open up LocalSettings.php and change the value of $wgDefaultSkin value to 'openemr'
```

## Tasks
Project tasks are listed here: http://www.open-emr.org/wiki/index.php/Active_Projects#Website_Rework

## Caveats
- main site is served at `./` and wiki is served in `./wiki`, however both shared the `./templates` directory
- `./wiki/skins/openemr/main.css` has been copied from Mediawiki version `1.16.5` but there were a few adjustments made to it. If upgrading this file, do a diff.

## License

GNU GENERAL PUBLIC LICENSE
