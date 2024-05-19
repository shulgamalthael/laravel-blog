```
install composer and run it
```
```
docker run --rm \
-v "$(pwd):/var/www/html" \
-w /var/www/html \
laravelsail/php82-composer:latest \
composer install --ignore-platform-reqs
```

```
issue 777 rights to storate
```
```
chmod -R 777 storage
```
