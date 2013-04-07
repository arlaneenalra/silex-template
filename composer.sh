#!/bin/bash

INSTALL_DIR=./vendor
COMPOSER=${INSTALL_DIR}/composer.phar

OPTS="--install-dir=${INSTALL_DIR}"
CURL=`which curl 2> /dev/null`


# install composer using straight php
install_php() {
    echo "Using php . . ."
    php -r "eval('?>'.file_get_contents('https://getcomposer.org/installer'));" -- ${OPTS}
}

# install via curl
install_curl() {
    echo "Using curl . . ."
    ${CURL} -sS https://getcomposer.org/installer | php -- ${OPTS}
}

# test for the existence of the phar before doing anything
if [[ ! -x "${COMPOSER}" ]]
then
    # try curl

    if [[ -x "${CURL}" ]]
    then
        install_curl
    else
        install_php
    fi
fi

# do an update
${COMPOSER} self-update
${COMPOSER} $@
