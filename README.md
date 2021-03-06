<p align="center">
    <h1 align="center">Home24 API , using Yii2</h1>
</p>

Yii 2 Basic Project Template is a skeleton [Yii 2](http://www.yiiframework.com/) application best for
rapidly creating small projects.


DIRECTORY STRUCTURE
-------------------

      assets/             contains assets definition
      commands/           contains console commands (controllers)
      config/             contains application configurations
      controllers/        contains Web controller classes
      mail/               contains view files for e-mails
      models/             contains model classes
      runtime/            contains files generated during runtime
      tests/              contains various tests for the basic application
      vendor/             contains dependent 3rd-party packages
      views/              contains view files for the Web application
      web/                contains the entry script and Web resources



REQUIREMENTS
------------

The minimum requirement by this project template that your Web server supports PHP 5.4.0.


INSTALLATION
------------

### Install via Composer

If you do not have [Composer](http://getcomposer.org/), you may install it by following the instructions
at [getcomposer.org](http://getcomposer.org/doc/00-intro.md#installation-nix).

You can then install this project template using the following command:

~~~
git clone https://github.com/nahla-eslamzadeh/home24api.git
composer self-update
composer global require "fxp/composer-asset-plugin:~1.1.1"
cd home24api
composer install
~~~

Now you should be able to access the application through the following URL, assuming `home24api` is the directory
directly under the Web root.

~~~
http://localhost/home24api/web/
~~~


CONFIGURATION
-------------

### Database

Create a MySql database and import `home24api.sql`.

Edit the file `config/db.php` with real data, for example:

```php
return [
    'class' => 'yii\db\Connection',
    'dsn' => 'mysql:host=localhost;dbname=home24api',
    'username' => 'root',
    'password' => '1234',
    'charset' => 'utf8',
];
```

**NOTES:**
- Yii won't create the database for you, this has to be done manually before you can access it.
- Check and edit the other files in the `config/` directory to customize your application as required.
- Refer to the README in the `tests` directory for information specific to basic application tests.


USAGE
-------------
Please first navigate to `http://localhost/home24api/web/` and click on SignUp link on top menu and register a new user.

Use your favorite REST API CLIENT to test the following endpoints:

1- Basic CRUD on : http://localhost/home24api/web/entities  
2- Send POST request to http://localhost/home24api/web/token with `email` and `password` , to get `token`.
3- Send `token` in GET request to http://localhost/home24api/web/account?token=xxxx  to see relevant account information.

<h3>Please send your API request body in JSON format.</h3>



