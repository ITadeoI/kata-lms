# Library

This project is my proposal to the Hexad's exercise, create a LMS (library management system).

##First thoughts 
#####Solution: 
&nbsp;&nbsp;Create a simple mockup using Laravel Framework (MVC pattern).

Day:1
 
I had a lot of problem to create an stable enviorement because I never used Linux before. I had issue installing Apache and to redirect correctly to my virtual host.


Day:2

I spent time to configurate Laravel, Db and read articles, stackoverflow, to find how to resolve incompatibilities with Mint (Linux), once resolved, I could makee my first commit with a stable environment.

Day: 2-3

I was spending all the time to finish all the user cases descripted on the Assigment_Library_Management.pdf

Day: 3

Create the last part of my project and fix some bugs.

## How to improve my project
It would more interesting create a DDD project structure, but I don't have enough knowledge yet.

##Conclusions
I'm pretty proud of my solution, but I little bit angry with myself because I realized that I don't know how to create a correct battery of test.
I mean, I know how it works TDD and phpunit, but when I want to apply in my project I was stuck because I dont' know how to start them.
I need to work more hard to be better with TDD and phpunit. I'm working to create more test.


## How to run this Project

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

# VirtualHost for laravel.lms

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

## Contributing
https://github.com/ITadeoI/kata-lms. (private)
