# Writeup Blog

A simple web application blog for CTF writeups, where users can write, read and share their writups with others. 
Also, users can comment on wrtieups!

## Key Features

- CRUD
- Routing
- Navigation
- Pagination
- MVC Framework
- Store Media Files (in progress)
- Responsive Layout
- Mail and Notification (in progress)
- Authorisation Middleware
- Admin Dashboard (in progress)


## Getting Started

### Installation Requirements

 Laravel Framework

 - [PHP](https://www.php.net/downloads.php)
 - [MySQL](https://www.mysql.com/downloads/)
 - [Node.js](https://nodejs.org/en/)
 - [Composer](https://getcomposer.org/)
 - [Laragon](https://laragon.org/download/)

 

## Run Locally

Clone the project into

```bash
  git clone https://github.com/sc0des/blog.git
```

Go to the project directory

```bash
  cd blog
```
Before composer installation make sure you have

* Laragon running 

* Created a new database 

* Copied .env example to local directory

* Edited .env with database configurations


Install composer packages 

```bash
  composer install
```

Generate Application Key

```bash
php artisan key:generate
```

Migrate database 

```bash
php artisan migrate:fresh --seed
```

Link to storage for media files

```bash
php artisan storage:link
```

Run the  application 

```bash
php artisan serve
```



## Screenshots



## Useful Resources

- [Laravel Tutorial](https://laracasts.com/series/laravel-8-from-scratch)
- [Template Componenets](https://mambaui.com/)


## Authors

- [@sc0des](https://github.com/sc0des)


## Acknowledgements

  Thank you to [ndeblauw](https://github.com/ndeblauw) for introducing and teaching Laravel Framework.

 
