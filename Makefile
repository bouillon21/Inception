all:	build up

build:
	sudo mkdir -p /home/cshelli/data && sudo mkdir -p /home/cshelli/data/db
	sudo chmod 777 /home/cshelli/data && sudo chmod 777 /home/cshelli/data/db
	sudo mkdir -p /home/cshelli/data && sudo mkdir -p /home/cshelli/data/wordpress
	sudo chmod 777 /home/cshelli/data && sudo chmod 777 /home/cshelli/data/wordpress
	# sudo cp -Rn srcs/requirements/wordpress/tools/wordpress /home/cshelli/data/
	# sudo cp srcs/requirements/wordpress/conf/wp-config.php /home/cshelli/data/wordpress/
	sudo chmod 777 /etc/hosts && sudo echo -e '127.0.0.1 localhost\n127.0.0.1 cshelli.42.fr' > /etc/hosts
	sudo chmod 777 /home/cshelli/data/wordpress
	cd srcs && docker-compose build
up:
	docker-compose -f ./srcs/docker-compose.yml up
clean:
	docker-compose -f srcs/docker-compose.yml down
fclean: clean
	sudo docker rmi -f $(sudo docker images -qa)
	sudo docker volume rm $(sudo docker volume ls -q)
	sudo docker network rm $(sudo docker network ls -q) 
	sudo docker system prune -a --force