FROM debian:buster

EXPOSE 9000
RUN apt-get update
RUN apt-get -y install curl wget php7.3 php7.3-cli php7.3-fpm php7.3-opcache php7.3-curl php7.3-mbstring php7.3-zip php7.3-xml php7.3-mysqli
COPY ./conf/www.conf /etc/php/7.3/fpm/pool.d

# Установка
# ADD https://wordpress.org/latest.tar.gz /var/www/
COPY ./tools/wordpress-5.8.2.tar.gz /var/www/

RUN cd /var/www/ && tar -xzvf wordpress-5.8.2.tar.gz
RUN rm -f /var/www/wordpress-5.7.2-ru_RU.tar.gz
RUN mv /var/www/wordpress /var/www/html

RUN mkdir -p /run/php
RUN touch /run/php/php7.3-fpm.pid
COPY ./conf/wp-config.php /var/www/html/wp-config.php

# Прописываем права доступа к папкам
RUN chown -R www-data:www-data /var/www/html/* && \
chmod -R 775 /var/www/html/*

# Скрипт
COPY ./tools/start.sh /
ENTRYPOINT [ "bash", "./start.sh" ]