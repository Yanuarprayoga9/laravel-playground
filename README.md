## Instal
cloning repository
```sh
git clone https://github.com/Yanuarprayoga9/laravel-playground.git

```
depedency
```sh
npm i 
```
## Database Configuration

change database name

```sh
DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=pbdfweek2
# DB_USERNAME=root
# DB_PASSWORD=

```
migrate database (you must be create a database first)
```sh
php artisan migrate 
# or refresh 
php artisan migrate:fresh
```
seeding database
```sh
php artisan db:seed
```


