install: # установить зависимости
	composer install
	npm install

brain-games: # Игруля
	./bin/brain-games

validate:
	composer validate
