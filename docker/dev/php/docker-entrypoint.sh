#!/usr/bin/env bash

set -e

setfacl -R -m u:"www-data":rwX /var/www
setfacl -dR -m u:"www-data":rwX /var/www

rm -f /var/run/rsyslogd.pid
rsyslogd

/usr/bin/supervisord -c /etc/supervisor/supervisord.conf