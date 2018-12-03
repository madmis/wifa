#!/usr/bin/env bash

set -e

if [[ ! -d /var/www/node_modules ]]; then
  npm install
fi

sleep 5 && npm run serve