# Introduction:
This is a sample CakePHP application for customers CRUD - List all customers with pagination and sort; Add new customer; Display customer's details (by clicking customer's name on list); Edit customer (from customer's detail page); Delete customer (from customer's detail page). Customers list on index page is sortable by clicking table headers.

Note: The following commands are Windows' style.
* Import database
```bash
cd PATH-TO-YOUR-PROJECT
mysql -h localhost -uroot -pYOUR-PASSWORD < .\storage\cakephp_my_app.sql
```
(The SQL file has created DB user `my_app` with password `secret`, and grant access for database `cakephp_my_app`.)

* Configuration  
Edit `config/app.php` and setup the `'Datasources'` to match database settings:
```
'username' => 'my_app',
'password' => 'secret',
'database' => 'cakephp_my_app',
```

* Install dependencies  
```bash
composer install
```
* Run:  
You can start up the built-in web server with:  
```bash
bin\cake.bat server -p 8765
```
Then visit `http://localhost:8765/customers/index` to see the home page.
