# Currency Conversion Service

Due to time limitation this is very much just a start.

It does download the exchange rates for EUR currency (from https://www.exchangerate-api.com/) and send a JSON response.


To install - clone this repo or download zip, then from project root folder...
```
docker-compose up -d

```

Then...
```
docker exec slim_php composer install --no-dev --optimize-autoloader
```

Then on line 13 public/index.php 

```
    $client = new Client(['base_uri' => 'https://v6.exchangerate-api.com/v6/XXXXXXX/latest/']);
```

replace XXXXXXX with an API key for https://www.exchangerate-api.com/

A GET Request to http://localhost:8080 returns the EUR rates.


Notes

Using php-fpm and nginx rather than Apache to improve performance.

Intending to slimphp/Slim-HttpCache, Redis/Memcached