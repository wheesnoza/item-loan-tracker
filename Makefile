lint:
	./vendor/bin/phpstan analyse --memory-limit=2G
format:
	./vendor/bin/pint
tinker:
	php artisan tinker
fresh:
	php artisan migrate:fresh --seed
