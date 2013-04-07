Quickstart
----------

#. Clone this repository.
#. Create a copy of **config/example.config.json** named **config/config.json**
#. Update appropriate fields in **composer.json** (authors, package, description, etc...")
#. Run **composer.sh update**

composer.sh
-----------

A thin wrapper around the Composer dependency manager.  It will automatically download **composer.phar** and store it in the vendor subdirectory using either curl, if available, or php. The script also checks for updates to Composer each time it runs.

For more information see: http://getcomposer.com and http://packagist.com

PHP version
-----------

If you plan to use a PHP version earlier than 5.4, remove the line:

    {
        "php":">5.4",
        .
        
    }

and change the use line in **src/app.php** from:

    use SegmentNine\\Silex\\Application;

to

    use Silex\\Application;

The custom base class includes traits, a feature not available prior to 5.4.

Structure
---------

* **src/** - This is where your applications source should be stored.  The initial **composer.json** file includes a psr-0 class loader configuration.  It might be worthwhile to customize this to your namespace.
* **web/** - This is your web root.  Your **index.php** file and any static resources should reside here.
* **template/** - The default configuration looks for twig templates here.
* **config/** - Where your configuration files go.
* **vendor/** - Composer installs downloaded dependencies here.

Suggested Reading
-----------------

* Silex - http://silex.sensiolabs.org/documentation
* Twig - http://twig.sensiolabs.org/documentation
* Symfony2 - http://symfony.com/doc/current/components/index.html

