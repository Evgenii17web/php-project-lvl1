install:
	composer install

ls:
	ls -al

brain-games:
	bin/brain-games

validate:
	composer validate

lint:
	composer run-script phpcs -- --standard=PSR12 src bin