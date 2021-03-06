## Hotel Booking System (Laravel 5.1)

This project is an example Laravel 5 open-source project from [learninglaravel.net](http://learninglaravel.net/hotel-booking-engine-with-laravel-5-and-angularjs-part-1) where they explain how to create an hotel booking system from scratch using Laravel 5.1 and AngularJS. In the booking engine they used AngularJS to create a single page application, the front end, where the final user can make reservations and the hotel owner can manage rooms, price and reservations. On the backend side we will use Laravel to create all the needed REST API to serve the application.It will be a modular tutorial, so let’s start by create the data model and some basic REST api to serve the frontend.

###Let’s create the migration file with Laravel artisan :

*php artisan make:migration create_table_room_type*

*php artisan make:migration create_table_room_calendar*

*php artisan make:migration create_table_reservations*

*php artisan make:migration create_table_reservation_nights*

*php artisan make:migration create_table_customers*

**Once all the file are in place you can execute  a migration with the usual command**

*php artisan migrate*
