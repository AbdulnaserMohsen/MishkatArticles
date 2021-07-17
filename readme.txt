clone the project 

you will find the database file beside this file its name is meshkat_articles.sql

import meshkat_articles.sql file to your local host database

then open CMD inside laravel project

type: composer install
then download .env file from here: https://github.com/laravel/laravel/blob/master/.env.example
then: back to CMD and type: php artisan key:generate
then:back to .env file and change DB_DATABASE=laravel to DB_DATABASE=meshkat_articles
then: php artisan serve


use email: admin@admin.com and password: 123456789 to login as admin