<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

## Build Steps 

`Backend`

Basic Command Examples

API/V1/Destinations

Is the location where the files are created.

API: Indicates that it is a resource of type api.

V1: Indicates the version.

Countries: Indicate the name of the resource.
- The model is declared in the singular and the migration will be created in the plural (English), the other resources are declared in the singular.
- Create a model with m for migration and f for factory and s for seeder -mfs  [php artisan make:model API/V1/Destination -mfs](https://laravel.com/docs/9.x/eloquent#generating-model-classes).
- Create a controller  [php artisan make:controller API/V1/DestinationController --api](https://laravel.com/docs/9.x/controllers#main-content) and --api for the [API resource controller](https://laravel.com/docs/9.x/controllers#api-resource-routes).

- Create a resource to transform individual models  [php artisan make:resource API/V1/Destination/DestinationResource](https://laravel.com/docs/9.x/eloquent-resources#generating-resources).
- Create a collection. If you want to customize the resource collection response  [php artisan make:resource API/V1/Destination/DestinationCollection](https://laravel.com/docs/9.x/eloquent-resources#resource-collections).
- create a "request form" for validation and authorization rules in the store to save data  [php artisan make:request API/V1/Destination/StoreDestinationRequest](https://laravel.com/docs/9.x/validation#creating-form-requests).
- create a "request form" for the validation and authorization rules in the store to update the data  [php artisan make:request API/V1/Destination/UpdateDestinationRequest](https://laravel.com/docs/9.x/validation#creating-form-requests).

```bash
php artisan make:model API/V1/Destination -m
php artisan make:controller API/V1/DestinationController --api
php artisan make:resource API/V1/Destination/DestinationResource
php artisan make:resource API/V1/Destination/DestinationCollection
php artisan make:request API/V1/Destination/StoreDestinationRequest
php artisan make:request API/V1/Destination/UpdateDestinationRequest
```


`Installation and execution`
```bash
git clone https://github.com/jonh3rdz/elsalvador_tourism.git
cd elsalvador_tourism
cp .env.example .env
composer install
```

create a local databse according to your prefer name, then 

```bash
database = elsalvador_tourism
php artisan key:generate
php artisan migrate
php artisan storage:link
```

`Crud Destinations Commands`
```bash
php artisan make:model API/V1/Destination -mfs
php artisan make:controller API/V1/DestinationController --api
php artisan make:resource API/V1/Destination/DestinationResource
php artisan make:resource API/V1/Destination/DestinationCollection
php artisan make:request API/V1/Destination/StoreDestinationRequest
php artisan make:request API/V1/Destination/UpdateDestinationRequest
```

`Crud Hotels Commands`
```bash
php artisan make:model API/V1/Hotel -m
php artisan make:controller API/V1/HotelController --api
php artisan make:resource API/V1/Hotel/HotelResource
php artisan make:resource API/V1/Hotel/HotelCollection
php artisan make:request API/V1/Hotel/StoreHotelRequest
php artisan make:request API/V1/Hotel/UpdateHotelRequest
```

`Crud Restaurants Commands`
```bash
php artisan make:model API/V1/Restaurant -m
php artisan make:controller API/V1/RestaurantController --api
php artisan make:resource API/V1/Restaurant/RestaurantResource
php artisan make:resource API/V1/Restaurant/RestaurantCollection
php artisan make:request API/V1/Restaurant/StoreRestaurantRequest
php artisan make:request API/V1/Restaurant/UpdateRestaurantRequest
```

`Crud Activities Commands`
```bash
php artisan make:model API/V1/Activity -m
php artisan make:controller API/V1/ActivityController --api
php artisan make:resource API/V1/Activity/ActivityResource
php artisan make:resource API/V1/Activity/ActivityCollection
php artisan make:request API/V1/Activity/StoreActivityRequest
php artisan make:request API/V1/Activity/UpdateActivityRequest
```

`Crud Reservations Commands`
```bash
php artisan make:model API/V1/Reservation -m
php artisan make:controller API/V1/ReservationController --api
php artisan make:resource API/V1/Reservation/ReservationResource
php artisan make:resource API/V1/Reservation/ReservationCollection
php artisan make:request API/V1/Reservation/StoreReservationRequest
php artisan make:request API/V1/Reservation/UpdateReservationRequest
```

`Crud Reviews Commands`
```bash
php artisan make:model API/V1/Review -m
php artisan make:controller API/V1/ReviewController --api
php artisan make:resource API/V1/Review/ReviewResource
php artisan make:resource API/V1/Review/ReviewCollection
php artisan make:request API/V1/Review/StoreReviewRequest
php artisan make:request API/V1/Review/UpdateReviewRequest
```

`Installation of the routes`
```bash
the paths in the elsalvador_tourism.postman_collection.json file will be updated very soon.
```
