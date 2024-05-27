# Movie Collection Application

This is a Laravel-based application for managing a collection of movies. The application allows users to create, update, delete, and search for movies. It uses Bootstrap for styling and form validation.

## Features

- Add new movies with details such as title, director, summary, and genres.
- Edit existing movies.
- Delete movies.
- Search movies by title.
- Responsive design using Bootstrap.
- Form validation with Bootstrap styling.

## Requirements

- Laragon (for local development environment)
- PHP 8.3.7
- Composer
- Laravel 11
- MySQL (included with Laragon)

## Installation

1. **Clone the repository:**

   ```bash
   git clone https://github.com/your-username/movie-collection-app.git
   cd movie-collection-app

2. **Install PHP dependencies:**

    ```bash
    composer install

3. **Copy the example environment file and set the environment variables:**

    ```bash
    cp .env.example .env
    
Update the .env file with your database credentials and other necessary configuration. If you're using     Laragon, your .env file might look like this:

    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=movie_db
    DB_USERNAME=root
    DB_PASSWORD=

4. **Generate the application key:**

    ```bash
    php artisan key:generate

5. **Run the database migrations and seed the database:**

    ```bash
    php artisan migrate
    php artisan db:seed


6. **Start the Laragon server:**

    Open Laragon and click on "Start All".
    The application will be available at http://localhost.

#Database Setup
To set up the database, follow these steps:

1. **Create the Database:**
   
   Create a database using your preferred method (e.g., via phpMyAdmin, MySQL Workbench, or command line).
   ```bash
   CREATE DATABASE laravel;

2. **Update the .env File:**

    Ensure your .env file contains the correct database configuration:
    ```bash
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=movie_db
    DB_USERNAME=root
    DB_PASSWORD=
    
3. **Run Migrations:**

   Run the migrations to set up the database schema:

    ```bash
    php artisan migrate

4. **Seed the Database (Optional):**

   If you have a database seeder, you can seed the database with initial data:
    ```bash
    php artisan db:seed

# Usage

## Main Page

    • The main page displays a list of all movies.
    • Use the search input to filter movies by title.
    • Click the "+" button to add a new movie.

## Add/Edit Movie

    • Fill in the movie details and click "Save" to add or update the movie.
    • Click "Delete" to remove the movie.
    • Click "Back to Home" to return to the main page.

## Search Functionality

    • Use the search input on the main page to filter movies by title.

## Folder Structure

    • app/Http/Controllers/MovieController.php: Contains the controller logic for handling movie operations.
    • resources/views/movies: Contains Blade templates for the movie views.
        • index.blade.php: Main page view.
        • create_edit.blade.php: Add/Edit movie view.
    • public/css: Contains custom styles.
    • app.css: Custom CSS styles for the application.
    • public/js: Contains custom JavaScript.
        • app.js: JavaScript for handling additional functionality.
    • routes/web.php: Defines the web routes for the application.
    • database/migrations: Contains the database migration files.
    • database/seeders/MoviesTableSeeder.php: Seeds the database with initial movie data.
