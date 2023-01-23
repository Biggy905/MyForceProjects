init:
	docker network create my_force_network
up:
	docker-compose up -d
down:
	docker-compose down --remove-orphans
down-clear:
	docker-compose down -v --remove-orphans
composer-install:
	docker-compose run --rm my_force_php_cli composer install
migrate:
	docker-compose run --rm my_force_php_cli composer app migrate -- --interactive=0
fixtures:
	docker-compose run --rm my_force_php_cli composer fixtures -- --interactive=0
rbac-init:
	docker-compose run --rm my_force_php_cli php ./yii rbac/init
rbac-assign:
	docker-compose run --rm my_force_php_cli php ./yii rbac/assign
