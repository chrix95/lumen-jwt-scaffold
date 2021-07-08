# Lumen JWT Scafold

- Clone the project to your computer
```
git clone https://github.com/chrix95/lumen-jwt-scaffold.git
```
- Install all required packages
```
composer install
```
- Rename the `.env.example` file to `.env`
- Add you application key
```
php artisan key:generate
```
- Generate the JWT key
```
php artisan jwt:secret
```
- Setup your DB credential on the `.env` file
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=homestead
```
- Run migration of the users table
```
php artisan migrate
```
- Run your server using the command
```
php -S localhost:8000 -t public
```

## Available Endpoints

- Register User
```
POST http://localhost:8000/api/v1/register
{
    "name": "Christopher Okokon Ntuk",
    "email": "engchris95@gmail.com",
    "password": "secret",
    "password_confirmation": "secret"
}
```
- Login User
```
POST http://localhost:8000/api/v1/login
{
    "email": "engchris95@gmail.com",
    "password": "secret",
}
```
- Profile of Logged in user
```
GET http://localhost:8000/api/v1/profile
BEARER {token}
```
- Get all users
```
GET http://localhost:8000/api/v1/users
BEARER {token}
```
- Get one user by id
```
GET http://localhost:8000/api/v1/users/{id}
BEARER {token}
```

## Contact Information
- [Email](mailto:engchris95@gmail.com)
- [Phone](tel:+2348183780409)