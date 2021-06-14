# Printful developer school homework 📚

This is my take on Printful developer school homework. This app has two seperate -ends: backend REST API in **PHP** and frontent with modern JS framework - **Vue** which consumes the backend API. 

### Technologies & Tools Used 🛠
* **PHP** for backend api
* **Composer** - autloading PHP classes
* **Docker** - used for running MySQL database
* **Vite.js/Vue** for frontend app
* **Tailwind.css** for frontend app styling
* **Git** - verion control
* **Postman** for debugging backend api
* **TablePlus** for viewing & managing database
* **Figma** for designing the main app

I would have prefered to use [phpdotenv](https://github.com/vlucas/phpdotenv) for easier app configuration, but I did not know if I'm allowed to use any packages.

### Setup
1. Go to your prefered project directory and clone this repository.
```
$ git clone https://github.com/grunburg/printful-todo-app . && cd printful-todo-app
```
2. Create a and configure the [database](https://github.com/grunburg/printful-todo-app/blob/master/api/app/Core/Database/Database.php). For quick-start you can use [Docker](https://www.docker.com/) 🐳 and this MySQL image:
```
$ docker run --name printful-todo-app -p 3306:3306 \
-e MYSQL_ROOT_PASSWORD=password \
-e MYSQL_DATABASE=todo \
-d mysql
```
3. Generate autoload for the API. You will need to have [Composer](https://getcomposer.org/) for this setp.
```
$ cd api && composer dump-autoload -o
```
4. Start the API and it should be accessable at [localhost:8000](http://localhost:8000/)
```
$ php -S localhost:8000 app.php
```
4. Go to `/printful-todo-app/app` and install all the necessary packages. [Node and it's package manager](https://nodejs.org/en/) is necessary.
```
$ npm install && npm run build
```
5. Start the FE app and do your tasks! 🥳
```
$ npm run serve
```
