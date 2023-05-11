NAME = inception

all: prune reload
	
stop:
	@ docker-compose -f srcs/docker-compose.yml down

clean: stop
	@ sudo rm -rf ~/Desktop/inception

prune: clean
	@ docker system prune -f

reload: 
	@ docker-compose -f srcs/docker-compose.yml up --build

.PHONY: stop clean prune reload all
