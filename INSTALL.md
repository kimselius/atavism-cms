# Installation
## Server requirments
Make sure that your server can meet the following requirments:

* PHP >= 8.0
* BCMath PHP Extension
* Ctype PHP Extension
* cURL PHP Extension
* DOM PHP Extension
* Fileinfo PHP Extension
* JSON PHP Extension
* Mbstring PHP Extension
* OpenSSL PHP Extension
* PCRE PHP Extension
* PDO PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

## Copy files

Copy the files to your destination, i.e. `/srv/example.com`

## Configure settings

Make a copy for your environment settings `cp .env.example .env`
Change needed environment settings in .env

## Generate keys

For the application to run it needs it's own encryption keys. 

Generate using `php artisan key:generate`

## Install dependencies

composer install
npm install
npm run prod

## Database

php artisan migrate
## nginx configuration

You can use the following configuration for setting up nginx.

`
server {
    listen 80;
    listen [::]:80;
    server_name example.com;
    root /srv/example.com/public;
 
    add_header X-Frame-Options "SAMEORIGIN";
    add_header X-Content-Type-Options "nosniff";
 
    index index.php;
 
    charset utf-8;
 
    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }
 
    location = /favicon.ico { access_log off; log_not_found off; }
    location = /robots.txt  { access_log off; log_not_found off; }
 
    error_page 404 /index.php;
 
    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.0-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }
 
    location ~ /\.(?!well-known).* {
        deny all;
    }
}`
