Quickstart
----------

#. Clone this repository.
#. Create a copy of *config/example.config.json* named *config/config.json*
#. Update appropriate fields in composer.json (authors, package, description, etc...")
#. Run *composer.sh update*

composer.sh
-----------

A thin wrapper around the Composer dependency manager.  It will automatically download *composer.phar* and store it in the vendor subdirectory using either curl, if available, or php. The script also checks for updates to Composer each time it runs.

For more information see: http://getcomposer.com and http://packagist.com

