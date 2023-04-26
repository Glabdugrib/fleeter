<p align="center">
    <h1 align="center">🚙 Fleeter 🚙</h1>
</p>

[...]

<br>

The website is developed with:
- Backend: PHP & Yii2
- Frontend: Bootstrap5, Tabler

<br>

DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      migrations/         contains migration files
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources

<br>

REQUIREMENTS
------------

The minimum requirement by this project is that your Web server supports PHP 7.4.

<br>

INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

Then you can install composer on the root of the project using the following command:

~~~
composer install
~~~

Now you should be able to access the application through the following URL, assuming `pastry-shop` is the directory directly under the Web root.

~~~
http://localhost/fleeter/web/
~~~

<br>

CONFIGURATION
-------------

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;port=8889;dbname=yii2basic',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.

<br>

SETUP DB
-------------

Now you can migrate up the DB with all the tables needed and with the sample data. Run the following command in the root of the project:

~~~
php yii migrate/fresh
~~~

Then confirm two times.

<br>

SERVER
-------------

If the DB is properly connected and the migrations have run, you can start the server with:

~~~
php yii serve
~~~

<br>

AUTHENTICATION
-------------

To login in the website you can use one of the two user setup by the migrations:

~~~
admin@fleeter.it
password1234
~~~
