# Repository List
## Description

This project was crafted as part of a Laravel course on platzi.com. It showcases a repository list, with the primary focus being on following the Test-Driven Development (TDD) methodology. The approach involves initially creating tests, followed by developing the corresponding functionalities, and finally, refining the codebase through refactoring.

Stack:

* PHP (7.3) + Laravel (8)
* Testing Framework: PHPUnit
* HTML (Blade Templates) + CSS (TailwindCSS Framework)

## Installation

Clone the repository

    git clone https://github.com/2Fac3R/repository-list.git

Switch to the repo folder

    cd repository-list

Install all the dependencies using composer

    composer install

Rename ".env.example" to ".env" and add your database settings.
    
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=<your-database>
    DB_USERNAME=<your-username>
    DB_PASSWORD=<your-password>

Run migrations

    php artisan migrate

Run seeder (this will create 40 repositories)

    php artisan db:seed

Start the local development server

    php artisan serve

You can now access the server at http://127.0.0.1:8000/ (you will see all 40 repos we created before)

## Usage

Log in or create a new user, user profile settings...

    http://127.0.0.1:8000/dashboard
    http://127.0.0.1:8000/register
    http://127.0.0.1:8000/login
    http://127.0.0.1:8000/user/profile
    
You can access to the following resources routes

    http://127.0.0.1:8000/repositories

Create a new repository

    http://127.0.0.1:8000/repositories/create

Get a repository by id

    http://127.0.0.1:8000/repositories/<id>

Edit a repository by id
 
    http://127.0.0.1:8000/repositories/<id>/edit

## Running tests

There are 18 test divided in unit and feature tests

    Unit/Models/UserTest.php
    Unit/Models/RepositoryTest.php
    Feature/Http/Controller/PageControllerTest.php
    Feature/Http/Controller/RepositoryControllerTest.php

Run Test

    php artisan test
    

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Any feedback is appreciated.
