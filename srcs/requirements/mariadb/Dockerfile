FROM debian:buster

EXPOSE 3306
RUN apt-get update
RUN apt-get install mariadb-server -y
COPY ./tools/my.cnf /etc/mysql/my.cnf
COPY /tools/start.sh /
RUN chmod +x start.sh
CMD ./start.sh