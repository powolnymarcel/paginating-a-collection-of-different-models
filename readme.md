# Paginating a collection of different models

To paginate a collection that consists of many different models is a very tricky task, but it can be solved by manually creating a paginator and passing it the collection of models. The task of manually creating a paginator is very poorly documented in the [official documentation](https://laravel.com/docs/5.3/pagination#manually-creating-a-paginator).

In this tutorial we will implement a search functionality that will work across with two models with pagination. We will accept user input, search the database, retrieve records, merge them in a collection, manually create a paginator and finally display them to the user.

## Installation

Clone repository to your drive and type in terminal there:

```
composer install
```

## Configuration

Copy file `.env.example` to `.env` file:

```
cp .env.example .env
```

and change the `APP_KEY` in `.env` using:

```
php artisan key:generate
```

Create empty database file called `database.sqlite` in `database` directory.

Run migrations and seed database with:

```
php artisan migrate --seed
```

## Running

From terminal type:

```
php artisan serve
```

You should get an address to open in your browser like http://localhost:8000.

**Have fun!**
