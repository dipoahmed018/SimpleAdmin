# Simple Admin
A siple admin dashboard without any login panel or authentication.

## Features
- PDFDownload -> Admin: Read, Edit, Delete, Create | Home: Read,
- Link -> Admin: Read, Edit, Delete, Create | Home: Read,
- HtmlSnippet -> Admin: Read, Edit, Delete, Create | Home: Read,


## Requirements

PHP8, Node JS, MYSQL, 

## Installation

### First create a .env file at the project root directory and copy all text from .env.example file,
### Here You can edit your server configuration example. your MYSQL server credentials.

Open A terminal to the project root directory And run

1. composer install
2. npm install
3. php artisan key:generate
4. php artisan storage:link

Now Replace the value of these fields below accorading to you mysql server configuration 
Note! Make Sure to create a new database and name it SimpleAdmin if you want or you have to change it at "DB_DATABASE" field,

DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=SimpleAdmin
DB_USERNAME=root
DB_PASSWORD=root

Now run

1. php artisan migrate:fresh --seed Note:"This will show you a propmt. just type yes and it will create the tables and some dummy data in your databse."
2. npm run build
3. php artisan serve;

This should provide you with a host like this 127.0.0.1:8000, If for some reasone it's differant make sure to replace your .env configuration valriable "APP_URL" with the provided host and port

Now You can look around this site without any problem.

# Have a great day!
