<p align="center"><a href="https://site.cedappperu.org/" target="_blank"><img src="https://i.ibb.co/510pc4X/Screenshot-2.png" width="400"></a></p>



## About Proyect 📢

This proyect is about a ONG of psocology where the psicology does free supports poor children and teenagers online.

## How run the proyecto 🚀

###IN LOCALHOST
If you want run this proyect in localhost you need to follow the next steps: 
* 1 -> unzip the proyect or clone in your pc
* 2 -> install node and composer in your pc
* 3 -> open 2 terminal in the folder of the proyect
* 4 -> in the first terminal create the /vendor folder with the comand :
```
composer install
```
* 5 -> in the second terminal create the /node_modules folder with the comand:
```
npm install
```
* 6 -> this proyect uses the node library [swiper](https://swiperjs.com/get-started/) so now install this library in the second terminal with the comand:
```
npm install swiper
```
* 7 -> its all, now execute in the second terminal the comand:
```
npm run watch
```
_its for compile de node modules in real time_
* 8 -> and finally execute the comand in the fist terminal:
```
php artisan serve
```
_for up the server for the proyect, this comand give you the url of the proyect in your local host, just click the url and you will be able to see the proyect._


###IN PRODUCTION

```
composer install
```
```
npm install
```
```
npm run production
```
**important** -> checked port 80 en .env
```
php artisan storage:link
```
```
php artisan key:generate
```
**important** -> restart the server
```
php artisan migrate:refresh
```
```
php artisan tinker
```
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

## License 📄

The license is of: [luisangel2895@gmail.com](https://www.linkedin.com/in/luis-angel-fernandez-orellana-6a2769141/)
