
# Event Management API

API Services Built on TOP of laravel 10 and sanctum.



## Server Requirements:

| dependency | version     | Description                |
| :-------- | :------- | :------------------------- |
| `php` | `>=8.1` | Minimum php version should be 8.1 or greater then it |



## Deployment

To install this project follow below steps:

```bash
  composer install
```

Create .env file :

```bash
  cp .env.example .env
```

Generate application key :

```bash
php artisan key:generate
```

Setting up the database connection :

```bash
  Setup database in .env file
```

Run the migrations :

```bash
  php artisan migrate
```

Start the server : 

```bash
  php artisan serve
```


## Authors

- [@thegr8dev](https://www.github.com/thegr8dev)

