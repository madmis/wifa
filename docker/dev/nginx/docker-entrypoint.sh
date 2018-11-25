#!/usr/bin/env bash

set -e

chmod -R 0777 /var/www/client/

sed -i "s#{{CORE_HOST}}#${CORE_HOST}#g" /etc/nginx/conf.d/core.conf
sed -i "s#{{CLIENT_HOST}}#${CLIENT_HOST}#g" /etc/nginx/conf.d/client.conf

sleep 5 && nginx -g 'daemon off;'