#!/user/bin/env bash

sed -i -e "s/\${DB_DATABASE}/${DB_DATABASE}/g" /var/www/html/wp-config.php
sed -i -e "s/\${DB_USER}/${DB_USER}/g" /var/www/html/wp-config.php
sed -i -e "s/\${DB_PASSWORD}/${DB_PASSWORD}/g" /var/www/html/wp-config.php
sed -i -e "s/\${DB_HOST}/${DB_HOST}/g" /var/www/html/wp-config.php
wget https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar
php wp-cli.phar --info
chmod +x ./wp-cli.phar
cp ./wp-cli.phar /usr/local/bin/wp
sleep 10
wp core install --allow-root --url=cshelli.42.fr --title=inception --admin_user=${WP_ADMIN} --admin_password=${WP_ADMIN_PASS} --admin_email=aaa@example.com --path=/var/www/html
wp user create bob bbb@example.com --allow-root --role=author --user_pass=12345 --path=/var/www/html

mkdir -p /run/php
touch /run/php/php7-fpm.pid
exec php-fpm7.3 --nodaemonize
