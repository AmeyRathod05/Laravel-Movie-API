POSTMAN API TESTING : 

- REGISTER USER :  
![Screenshot 2025-06-14 214436](https://github.com/user-attachments/assets/15331878-0607-43a0-8c91-11322df5686e)

- LOGIN : 
![Screenshot 2025-06-14 214450](https://github.com/user-attachments/assets/d04e5480-7a72-45b2-9c6b-1566cb67d74d)

- GET USER : 
![Screenshot 2025-06-14 214512](https://github.com/user-attachments/assets/8abae738-c3ab-48d8-90ea-7644acc04555)

- LOGOUT USER :
![Screenshot 2025-06-14 214526](https://github.com/user-attachments/assets/d9f5ae2f-05d3-45f0-ba26-f356db43b8d2)

- GET MOVIES : 
![Screenshot 2025-06-14 214553](https://github.com/user-attachments/assets/fcc56625-8696-4b09-a54e-c6c2ccbeb07c)

- GET ONE MOVIE : 
 ![Screenshot 2025-06-14 221254](https://github.com/user-attachments/assets/a3568ea3-691e-4a20-875d-6865dace866a)

- DELETE MOVIE :
![Screenshot 2025-06-14 215334](https://github.com/user-attachments/assets/a16ae703-3c7c-4983-bcb5-add5a1ad3ab2)

- PUT/UPDATE :
![Screenshot 2025-06-14 215552](https://github.com/user-attachments/assets/920a03be-0c07-493b-a4ee-c7eb20674870)

- DATABASE : 
![Screenshot 2025-06-14 215626](https://github.com/user-attachments/assets/e2074b82-f588-412d-8b33-9fd0714b065b)


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>


# Laravel Movie API

A RESTful API for managing movies, built with Laravel 10. This API provides endpoints for CRUD operations on movies, complete with authentication using Laravel Sanctum.

## Features

- **Authentication System** with JWT tokens
- **CRUD Operations** for movies
- **RESTful API** following best practices
- **Validation** for all inputs
- **Database Seeding** with sample movie data
- ** Eloquent 
- **API Documentation** in the README

## Tech Stack

- **Backend**: Laravel 10
- **Authentication**: Laravel Sanctum
- **Database**: MySQL
- **Testing**: PHPUnit

## Requirements

- PHP 8.1+
- Composer
- MySQL 5.7+
- Node.js & NPM (for frontend assets)

## Setup

1. Clone the repository
2. Run `composer install`
3. Copy [.env.example](cci:7://file:///d:/LARAVEL-API-PROJECT/API-PROJECT/.env.example:0:0-0:0) to `.env` and configure
4. Generate app key: `php artisan key:generate`
5. Run migrations: `php artisan migrate --seed`
6. Start server: `php artisan serve`

## API Documentation

### Authentication
- `POST /api/v1/register` - Register a new user
- `POST /api/v1/login` - Login and get token
- `POST /api/v1/logout` - Logout (revoke token)

### Movies
- `GET /api/v1/movies` - List all movies
- `GET /api/v1/movies/{id}` - Get a specific movie
- `POST /api/v1/movies` - Create a new movie (protected)
- `PUT /api/v1/movies/{id}` - Update a movie (protected)
- `DELETE /api/v1/movies/{id}` - Delete a movie (protected)

## License

This project is open-source and available under the [MIT License](LICENSE).
