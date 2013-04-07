#!/bin/bash

INSTALL_DIR=vendor
COMPOSER=composer.phar

# test for the existence of the phar before doing anything
if [ ! -x composer.phar ];
then
    curl -sS https://getcomposer.org/installer | php -- --install-dir=vendor
fi

${INSTALL_DIR}/${COMPOSER} $@
