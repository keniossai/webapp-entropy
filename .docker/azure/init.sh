#!/bin/bash
set -e

echo "Starting SSH ..."
service ssh start
#cron
#rsyslogd

# Start the second process
echo "Starting Apache ..."
exec apache2-foreground