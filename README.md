# NewsPulse

NewsPulse is a Laravel-based news and blogs publishing platform designed to provide users with the latest updates and insights across various topics.

## Features

- **User Authentication**: Secure user authentication system for managing access to the platform.
- **News/Blogs Management**: Allows administrators to create, edit, and delete news articles and blog posts.
- **Category Management**: Organize content by categories for easy navigation and discovery.
- **User Profiles**: Users can create profiles, customize preferences, and manage subscriptions.
- **Commenting System**: Engage with the community through a built-in commenting system.
- **Search Functionality**: Enable users to search for specific articles or topics quickly.
- **Responsive Design**: Optimized for a seamless experience across devices of all sizes.

## Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/search4asraful/NewsPulse.git
2. Navigate to the project directory:
    ```bash
    cd newspulse
3. Install dependencies:
    ```bash
    composer install
- or composer update `(if install not worked)`

4. Copy `.env.example` to `.env`:
    ```bash
    cp .env.example .env
5. Generate application key:
    ```bash
    php artisan key:generate
6. Set up your database in the `.env` file:

    - DB_CONNECTION=mysql

    - DB_HOST=127.0.0.1

    - DB_PORT=3306

    - DB_DATABASE=your_database_name

    - DB_USERNAME=your_database_username
    - DB_PASSWORD=your_database_password

7. Migrate the database:
    ```bash
    php artisan migrate
8. Serve the application:
    ```bash
    php artisan serve
9. Access the application in your web browser at `http://localhost:8000`.

## Contributing

Contributions are welcome! Please fork this repository and submit a pull request with your changes.

## Acknowledgements

- This project was built using the Laravel framework.
- Bootstrap & custom was used for styling the frontend and backend.
- Bootstrap & Boxicons was used for icons in backend.
- Special thanks to the Laravel community for their support and resources.
