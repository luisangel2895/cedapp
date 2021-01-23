<p align="center"><a href="https://site.cedappperu.org/" target="_blank"><img src="https://i.ibb.co/510pc4X/Screenshot-2.png" width="400"></a></p>



## About Project 📢

This project is about a ONG of psychology where the psychologists do free supports poor children and teenagers online.

## How run the project 🚀

### IN LOCALHOST
If you want to run this project in localhost you need to follow the next steps: 
* 1 -> Unzip the project or clone in your pc.
* 2 -> Install node and composer in your pc.
* 3 -> Open 2 terminal in the folder of the project.
* 4 -> In the first terminal create the /vendor folder with the command :
```
composer install
```
* 5 -> In the second terminal create the /node_modules folder with the command:
```
npm install
```
* 6 -> This project uses the node library [swiper](https://swiperjs.com/get-started/) so now install this library in the second terminal with the comand:
```
npm install swiper
```
* 7 -> It's all, now execute in the second terminal the command:
```
npm run watch
```
_It's for compile de node modules in real time_
* 8 -> and finally execute the command in the fist terminal:
```
php artisan serve
```
_For up the server for the project, this command give you the url of the project in your local host, 
just click the url, and you will be able to see the project._

### IN PRODUCTION
If you want to run this project in a external server you must follow the next steps:

* 0 -> First, your server need to have installed composer and node.
* 1 -> Unzip the project or clone in your server.
* 2 -> As a laravel project, you need configure the routes of your server to point the public
    folder in laravel.
* 3 -> Now in the project installs the libraries of composer of the project with the command :
```
composer install
```
* 4 -> Then in the project installs the node modules of the project with the command :
```
npm install
```
* 5 -> This project uses the node library [swiper](https://swiperjs.com/get-started/) so now install this library in the second terminal with the comand:
```
npm install swiper
```
* 6 -> Then run de node modules of the project in production mode:

```
npm run production
```
* 7 -> **important** -> Its very important that you check the port 80 in .env file in the project.
* 8 -> Now you need to create a symbolic link to link the laravel 
  project with the storage folder where are the images of the project.
```
php artisan storage:link
```
* 9 -> Now you need to create a key for the encrypt in the auth system in laravel, its because the auth system
was made manually with the key of laravel.
```
php artisan key:generate
```
* 10 -> **important** : It's very recommended in this point restart the server for avoid problems with the 
 environment variables of laravel.
* 11 -> Then create the tables of db in mysql with laravel migrations,
  please make sure mysql variables are set correctly in the .env file.
```
php artisan migrate
```
* 11 -> Now need create a first user admin for the admin zone in the project, for this you must use 'tinker' 
 of laravel, so first open tinker console with the command:
```
php artisan tinker
```
* 12 -> And finally in the tinker console you need to add the first user admin with these commands, these commands
 will create psychologist with role admin (you can modifier the psychologist data as you want).
```php
use Illuminate\Support\Facades\Crypt;
$psychologist =  new App\Models\Psychologist;
$psychologist->name = 'root';
$psychologist->lastname = 'root';
$psychologist->email = 'root@gmail.com';
$psychologist->phone = '';
$psychologist->state = 'active';
$psychologist->password = Crypt::encryptString('root');
$psychologist->role = 'admin';
$psychologist->save();
exit
```
Now you can log in admin zone with this created user.

## License 📄

The license is of: [luisangel2895@gmail.com](https://www.linkedin.com/in/luis-angel-fernandez-orellana-6a2769141/)
