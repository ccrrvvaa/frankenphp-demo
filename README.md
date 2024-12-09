## Install Dependencies
```sh
composer install
```

## Execute Migrations
```sh
frankenphp php-cli artisan migrate
```

## Execute Seeders
```sh
frankenphp php-cli artisan db:seed --class=EmployeeSeeder
```

## Setup Server Locally
```sh
sudo frankenphp run
```

## Stress Testing
```sh
./vendor/bin/pest stress https://localhost/employees --concurrency=5
```