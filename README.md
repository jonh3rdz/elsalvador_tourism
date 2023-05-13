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
