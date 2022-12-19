# Siakad Unand Website
## requirements:
- node.js
- Composer version 2.2.7
- PHP 8.2.0
- connenction to a database  
## how to use
install dependencies
```
npm install
composer install
```
create the `.env` file
```
cp .env.example .env
```
migrate the database
```
php artisan migrate
```
add dummy data for the seeder
```
php artisan db:seed
```
to start the website, run these commands in different terminals:
```
npm run dev
```
```
php artisan serve
```