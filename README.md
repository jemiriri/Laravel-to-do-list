
# Laravel Project (To Do List)
## Simple web to add to do list


## Features

- Register new user and login
- Add new to do list in table
- Update and delete 
- View to do list
- Change status to do list (in process or done)
- Logout


## Tech

This project were built using :

- [Laragon](https://laragon.org/) - local server for  building and managing web applications
- [Visual Studio Code](https://code.visualstudio.com/) - awesome web-based text editor
- [Google Chrome] - web browser
- [Bootstrap](https://getbootstrap.com/) - CSS framework  
- [Laravel](https://laravel.com/) - PHP framework

## Requirement

- Laragon full 5 or latest
- PHP 7 or latest
- Bootstrap 5 or latest
- Laravel 8 or latest


## Structure

```sh
Controller and Model

📦app
 ┣ 📂Console
 ┃ ┗ 📜Kernel.php
 ┣ 📂Exceptions
 ┃ ┗ 📜Handler.php
 ┣ 📂Http
 ┃ ┣ 📂Controllers
 ┃ ┃ ┣ 📜Controller.php
 ┃ ┃ ┣ 📜DashboardController.php
 ┃ ┃ ┣ 📜DashboardPostController.php
 ┃ ┃ ┣ 📜LoginController.php
 ┃ ┃ ┗ 📜RegisterController.php
 ┃ ┣ 📂Middleware
 ┃ ┃ ┣ 📜Authenticate.php
 ┃ ┃ ┣ 📜EncryptCookies.php
 ┃ ┃ ┣ 📜PreventRequestsDuringMaintenance.php
 ┃ ┃ ┣ 📜RedirectIfAuthenticated.php
 ┃ ┃ ┣ 📜TrimStrings.php
 ┃ ┃ ┣ 📜TrustHosts.php
 ┃ ┃ ┣ 📜TrustProxies.php
 ┃ ┃ ┣ 📜ValidateSignature.php
 ┃ ┃ ┗ 📜VerifyCsrfToken.php
 ┃ ┗ 📜Kernel.php
 ┣ 📂Models
 ┃ ┣ 📜Post.php
 ┃ ┗ 📜User.php
 ┗ 📂Providers
 ┃ ┣ 📜AppServiceProvider.php
 ┃ ┣ 📜AuthServiceProvider.php
 ┃ ┣ 📜BroadcastServiceProvider.php
 ┃ ┣ 📜EventServiceProvider.php
 ┃ ┗ 📜RouteServiceProvider.php
```

```sh
View

📦resources
 ┣ 📂css
 ┃ ┗ 📜app.css
 ┣ 📂js
 ┃ ┣ 📜app.js
 ┃ ┗ 📜bootstrap.js
 ┗ 📂views
 ┃ ┣ 📂dashboard
 ┃ ┃ ┣ 📂layouts
 ┃ ┃ ┃ ┣ 📜header.blade.php
 ┃ ┃ ┃ ┣ 📜main.blade.php
 ┃ ┃ ┃ ┗ 📜sidebar.blade.php
 ┃ ┃ ┣ 📂posts
 ┃ ┃ ┃ ┣ 📜create.blade.php
 ┃ ┃ ┃ ┣ 📜edit.blade.php
 ┃ ┃ ┃ ┣ 📜index.blade.php
 ┃ ┃ ┃ ┗ 📜show.blade.php
 ┃ ┃ ┗ 📜index.blade.php
 ┃ ┣ 📂layouts
 ┃ ┃ ┗ 📜main.blade.php
 ┃ ┣ 📂login
 ┃ ┃ ┗ 📜index.blade.php
 ┃ ┣ 📂partials
 ┃ ┃ ┗ 📜navbar.blade.php
 ┃ ┣ 📂register
 ┃ ┃ ┗ 📜index.blade.php
 ┃ ┗ 📜home.blade.php
```



## Installation
Download zip folder and extract it

Move the folder laravel-to-do-list-main into :
```sh
..\laragon\www\ or ..\xampp\htdocs\
```

- open that folder in Visual Studio Code
- start apache on laragon
- need to install the composer into that folder to run laravel framework
- open terminal that direct to :
```sh
..\laragon\www\laravel-to-do-list-main
```

- type on terminal :
```sh
composer install
```

- after finished install the composer, type on terminal once again :
```sh
cp .env.example .env
```
OR
- open the Visual Studio Code copy and paste the file name (.env.example) and change name that file into (.env)

- type  on terminal (to generate APP_KEY in .env file) :
 ```sh
 php artisan key:generate
```

- make database table on mysql (phpMyAdmin, MySQL Workbench etc).the database table name its depends on you (example: db table name is todo-list)
- in .env file must change DB_DATABASE , DB_USERNAME, DB_PASSWORD
- example:
        -  DB_DATABASE:todo-list (same as database table name at phpmyadmin)
        -  DB_USERNAME:root (username at phpmyadmin)
        -  DB_PASSWORD:12345 (password at phpmyadmin if have)


-to generate form mysql table on phpmyadmin type on terminal :

```sh
 php artisan migrate
```

-After that type :

```sh
 php artisan serve 
```

-that's to running application on the server

-After that type http://127.0.0.1:8000 on browser


This application is ready to be run!!!







