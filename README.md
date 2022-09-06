# Laravel 9 API

## Setup

Run ```$ npm install``` to install dependencies

To initialize the server run ```$ php artisan server```

To migrate the database run ```php artisan migrate```

Be sure to name your database  "laravel-api" or change the config in the .env file

# API Commands

### GET
<strong>Get all users:</strong> url + /api/user

<strong>Get user by id:</strong> url + /api/user/$id

### POST
<strong>Create new user:</strong> url + /api/user 

<strong>-> Headers:</strong> Accept: application/json, Content-Type: application/json
   
<strong>-> Body:</strong> raw: {"name" : "$name", "email" : "$email", "password" : "$password"}, type: JSON

### PUT
<strong>Update user:</strong> url + /api/user/$id

<strong>-> Headers:</strong> Accept: application/json, Content-Type: application/json
   
<strong>-> Body:</strong> raw: {"name" : "$name", "email" : "$email", "password" : "$password"}, type: JSON

### DELETE
<strong>Delete user:</strong> url + /api/user/$id 
