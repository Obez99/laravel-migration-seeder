<p align="center"><img src="https://s29.postimg.cc/xqf5iv9kn/laravel_logo_white.png" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Setup
1. Clone this repository
2. Start your local server
3. Create a new database
4. Run ```composer install```
5. Run ```npm install```
6. Run ```npm run dev```
7. Copy the ```.env.example``` in the same folder and rename it to ```.env```
8. Edit the ```.env``` file  with the following parameters: <br> <br>
DB_PORT= **YOUR MYSQL PORT** (default should be '3306')<br>
DB_DATABASE=**THE NAME OF YOUR DATABASE**<br>
DB_USERNAME=**YOUR DATABASE USERNAME** (default should be '**root**')<br>
DB_PASSWORD=**YOUR DATABASE PASSWORD** (default should be '**root**' or **empty**)<br><br>
8. Run ```php artisan key:generate```<br>
9. Run ```php artisan migrate```<br>
10. Run ```php artisan db:seed --class=TripsTableSeeder```
11. Run ```php artisan serve```<br>
12. **You're all set up!**

## Description
This projects creates a new table called trips and then seeds it using a **faker**.<br>
When seeding the table, a **random price** between a specific range is created depending on the number of destinations for each trip (more destinations, higher the price).<br>
Each trip is shown inside of a card in the index view, if a certain trip is selected by its button the server redirects you to the show view of the selected trip.

## Screenshots

![booltrip1](https://user-images.githubusercontent.com/85038274/151713950-f97eaa9f-6a71-462c-9b65-bac31affe46b.PNG)

![booltrip 2](https://user-images.githubusercontent.com/85038274/151713952-454399ef-bb30-428f-8f81-07cb98301dbf.PNG)

