## How to run

1. Clone the repository or unzip file (attached on the email) on your local system copy library.

    &nbsp;&nbsp;1.1 I used LAMP because I've Linux S.O, but you can download XAMPP which works for all the S.O: https://www.apachefriends.org/index.html

2. Put library folder inside root directory: /opt/lampp/htdocs for Linux.

## Database Configuration

3.Set up you DB in the .env, which is located in the root of my project.
4.When you will set up your db, open a terminal and write these commands below. 
```bash
php artisan migrate
php artisan db:seed
```
&nbsp;&nbsp; php artisan migrate: 
This command creates all the tables needed for my project (app/database/migrations/..)

&nbsp;&nbsp; php artisan db:seed
This command fills the tables with data (app/database/seeds/..)

5. Open a browser put inside url browser "http://laravel.test/" (remember create a domain on host file)

# VirtualHost

<VirtualHost 127.0.0.5:80>
  DocumentRoot "/opt/lampp/htdocs/kata-lms/public"
  ServerAdmin laravel.home

  <Directory "/opt/lampp/htdocs/kata-lms">
	Options Indexes FollowSymLinks
	AllowOverride All
	Require all granted
  </Directory>
</VirtualHost>

## Technology
* php: ^7.2.5.
* Laravel/framework": ^7.0.
* Database: MariaDbi with eloquent ORM by Laravel.
* Software: LAMP (Linux, Apache, MariaDb, Php).
* FrontEnd: Bootstrap, Html5.

##Basic Test
```bash
php artisan test
```
