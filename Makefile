ARGS = $(filter-out $@,$(MAKECMDGOALS))

.PHONY: up start stop state rebuild bash shell root
.SILENT:

up:
	docker-compose up -d

start:
	docker-compose start

stop:
	docker-compose stop

state:
	docker-compose ps

ps: state

rebuild:
	docker-compose stop
	docker-compose rm --force app
	docker-compose build --no-cache
	docker-compose up -d

bash: shell

shell:
	docker exec -it -u application $$(docker-compose ps -q app) /bin/bash

ssh: shell

root:
	docker exec -it -u root $$(docker-compose ps -q app) /bin/bash

logs:
	docker-compose logs -f $(ARGS)

restart:
	docker-compose restart $(ARGS)

default: up
