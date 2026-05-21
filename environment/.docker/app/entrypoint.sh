#!/bin/bash
set -e

php artisan migrate --force

exec supervisord --configuration /etc/supervisor/custom-supervisord.conf
