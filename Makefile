hello:
	echo "Hello, World!"
up:
	docker-compose up -d --build
down:
	docker-compose down
start:
	docker-compose start
stop:
	docker-compose stop
