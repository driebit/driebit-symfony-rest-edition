CREATING PROJECT
================

Make sure you have composer.phar installed.

```
$ curl -sS https://getcomposer.org/installer | php -- --install-dir=/home/USERNAME/bin
```

To run composer.phar create-project create the file packages.json and copy & paste:
```
{
    "packages": {
        "name": "driebit/driebit-symfony-rest-edition",
        "version": "dev",
        "source": {
            "url": "https://github.com/driebit/driebit-symfony-rest-edition",
            "type": "git",
            "reference": "master"
        }
    }
}
```

Then run:

```
$  ~/bin/composer.phar --stability="dev" create-project --repository-url="/PATH/TO/packages.json" driebit/driebit-symfony-rest-edition /PATH/TO/PROJECT
```


PROJECT NAME
============

API documentation
-----------------

API documentation is available at http://PROJECTNAME.dev/api/doc

