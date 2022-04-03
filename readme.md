
## About This Project 

use html , css , bootstrap , javascript , laravel . and use mySQL for Database.
make this ecommerce project useing MVC pattern .
this project have add to cart , search option , 
full management system to take order and delivery the product ,
both fontend and backend control by laravel ,

## How to Open file 
localhost:8080/project_name
at first you have to open terminal (where is you file),
and write Composer Commands (php artisen serve),
then commands (npm install) -> (npm run dev) -> (npm run watch).{ becouse when you uplode laravel file in github , you should ignore this 
type of file , it also mention in .gitignore file}

then you have to make a .env file (open .env.example copy all data and past to .env file you create).


## How to Add Database

at first you have to go main file and upload the database (db1417304.SQL) on your server
now go to the project file open .env file and change the ,

DB_DATABASE=
DB_USERNAME=
DB_PASSWORD=

now we ready to go 

## How to Admin login 

url/admin 
admin@gmail.com
12345678

## How to user login 

user@gmail.com
12345678


composer install 
mv .env.example .env 
php artisan cache:clear 
composer dump-autoload 
php artisan key:generate