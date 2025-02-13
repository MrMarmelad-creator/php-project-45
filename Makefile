install: # установить зависимости
	composer install
	npm install

brain-games: # Игруля
	./bin/brain-games

validate:
	composer validate

lint:
	composer exec --verbose phpcs -- --standard=PSR12 src bin

brain-even:
	./bin/brain-even
