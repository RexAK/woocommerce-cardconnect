#!/usr/bin/env bash

set -e

if [[ -z "$CI" ]]; then
	npm ci
	docker-compose run composer install
fi

rm -rf build || true
mkdir build

cp -R assets build
cp -R classes build
cp -R includes build
mkdir -p build/javascript
cp -R javascript/dist build/javascript/dist
cp -R stylesheets build
cp -R templates build
cp -R vendor build
cp -R cardconnect-payment-gateway.php build
cp -R composer.json build
#cp -R composer.lock build # Removed as there are no longer currently any composer dependencies
cp -R index.php build
cp -R LICENSE build
cp -R readme.txt build
