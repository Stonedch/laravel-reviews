# Laravel Reviews

This application is a website with product reviews based on *Laravel 7.24*.

## Table of contents

* [Setup](#setup)
* [Status](#status)
* [Contacts](#contacts)

## Setup

1. Copy the docker environments file and correct if required:

    ```console
    foo@bar: laravel-reviews $ cp .env.example .env
    ```

2. Build docker images and up containers:

    ```console
    foo@bar: laravel-reviews $ docker-compose up -d --build
    ```

3. Copy the laravel environments file:

    ```console
    foo@bar: laravel-reviews $ docker-compose exec php cp .env.example .env
    ```

4. Correct laravel environments file:

    connect to mysql container

    ```console
    DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=reviews
    DB_USERNAME=root
    DB_PASSWORD=secret
    ```

    also needs to be added values for MAIL

    ```console
    MAIL_MAILER=smpt
    MAIL_HOST=smtp.mailtrap.io
    MAIL_PORT=2525
    MAIL_USERNAME=null
    MAIL_PASSWORD=null
    MAIL_ENCRYPTION=null
    MAIL_FROM_ADDRESS=null
    MAIL_FROM_NAME="${APP_NAME}"
    ```

5. Composer install:

    ```console
    foo@bar: laravel-reviews $ docker-compose exec php composer install
    ```

6. Generate key:

    ```console
    foo@bar: laravel-reviews $ docker-compose exec php php artisan key:generate
    ```

7. Migrate and seed db:

    ```console
    foo@bar: laravel-reviews $ docker-compose exec php php artisan migrate --seed
    ```

8. Create storage symbolic link:

    ```console
    foo@bar: laravel-reviews $ docker-compose exec php php artisan storage:link
    ```

9. Install and run npm:

    ```console
    foo@bar: laravel-reviews $ docker-compose exec php npm install
    foo@bar: laravel-reviews $ docker-compose exec php npm run production
    ```

## Status

Project is: _in progress_

## Contacts

Created by [@stonedch](https://github.com/stonedch)
