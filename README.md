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
php artisan serve
```
```sh
sudo frankenphp run
```

## Worker Mode
```sh
php artisan octane:install --server=frankenphp
php artisan octane:frankenphp
```

## Stress Testing
- Stress testing to default server
```sh
./vendor/bin/pest stress http://localhost:8000/employees
```
- Stress testing to frankenphp
```sh
./vendor/bin/pest stress https://localhost/employees --concurrency=5
```
- Stress testing to Octane
```sh
./vendor/bin/pest stress http://localhost:8000/employees --concurrency=5
```

## Prometheus Metrics
- Enable metrics in Caddyfile then review the url:
  - `http://localhost:2019/metrics`
- Install Prometheus
  - Review `/etc/prometheus/prometheus.yml`
  ```sh
  sudo systemctl enable prometheus
  sudo systemctl restart prometheus
  sudo systemctl status prometheus
  ```
  - Url: `http://localhost:9090`
- Install Grafana
  ```sh
  sudo systemctl daemon-reload
  sudo systemctl start grafana-server
  sudo systemctl enable grafana-server.service
  ```
  - Url: `http://localhost:3000`