# Laravel Blog API

A **RESTful API** for a blog platform built with **Laravel**, featuring user authentication (via **Sanctum**), CRUD operations for blog posts, and deployment on **AWS EC2**.

## Features

### User Authentication:
- **Registration**, **login**, and **token-based** authentication using **Laravel Sanctum**.
- Protected API endpoints using middleware.

### Blog Management:
- **CRUD** operations (Create, Read, Update, Delete) for blog posts.
- Posts are associated with authenticated users.
- Input validation for user data.

### Deployment:
- Deployed on **AWS EC2** with **Nginx**, **MySQL**, and **PHP**.

## Tech Stack
- **Backend**: Laravel 10
- **Authentication**: Laravel Sanctum
- **Database**: MySQL
- **Web Server**: Nginx
- **Deployment**: AWS EC2
- **Testing**: Postman

---

## Installation

### Prerequisites:
- PHP ≥ 8.1
- Composer
- MySQL

### Steps:

1. **Clone the repository:**

   ```bash
   git clone https://github.com/yourusername/laravel-blog-api.git
   cd laravel-blog-api
   ```

2. **Install dependencies:**

   ```bash
   composer install
   ```

3. **Configure the environment:**

   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Update `.env` with your database credentials:**

   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=Blog_db
   DB_USERNAME=***
   DB_PASSWORD=***
   ```

5. **Migrate the database:**

   ```bash
   php artisan migrate
   ```

6. **Start the server:**

   ```bash
   php artisan serve
   ```

---

## API Endpoints

### Authentication
| Method | Endpoint       | Description                |
|--------|----------------|----------------------------|
| POST   | /api/register  | Register a new user.       |
| POST   | /api/login     | Log in and get a token.    |

### Blog Posts (Protected)
| Method | Endpoint         | Description                      |
|--------|------------------|----------------------------------|
| GET    | /api/blogs       | Get all blog posts.              |
| POST   | /api/blogs       | Create a new blog post.         |
| GET    | /api/blogs/{id}  | Get a specific blog post.       |
| PUT    | /api/blogs/{id}  | Update a blog post.             |
| DELETE | /api/blogs/{id}  | Delete a blog post.             |

---

## Deployment on AWS EC2

### 1. Launch an EC2 Instance:
- **Ubuntu 22.04 LTS** (t2.micro).
- Security group allowing **SSH** (port 22), **HTTP** (port 80), and **HTTPS** (port 443).

### 2. Connect via SSH:

```bash
ssh -i "laravel-key.pem" ubuntu@13.61.9.245
```

### 3. Install Dependencies:

```bash
sudo apt update && sudo apt install php php-mysql nginx mysql-server composer -y
```

### 4. Deploy Code:
- Clone your repository or upload files to `/home/ubuntu/blog-api`.

### 5. Configure Nginx:

- Create a config file in `/etc/nginx/sites-available/laravel` (refer to Nginx Setup section below).

### 6. Set Permissions:

```bash
sudo chown -R www-data:www-data /home/ubuntu/blog-api
sudo chmod -R 775 storage bootstrap/cache
```

### 7. Restart Services:

```bash
sudo systemctl restart nginx php8.1-fpm
```

---

## Nginx Configuration

Create an Nginx configuration file (`/etc/nginx/sites-available/laravel`) with the following content:

```nginx
server {
    listen 80;
    server_name 13.61.9.245;

    root /home/ubuntu/blog-api/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/var/run/php/php8.1-fpm.sock;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

---

## Postman Collection

- **Postman Collection link**: [https://planetary-shuttle-403016.postman.co/workspace/Team-Workspace~98b8f495-8bca-45ea-89a7-320c16f72b8c/request/43324745-341d4cab-99c2-4db6-8a91-07c6f8028129?action=share&creator=43324745&ctx=documentation&active-environment=43324745-1b67c59b-55ee-4ab8-804e-b09cd79ed051


- **Live API URL**: `http://13.61.9.245:8000/api/blogs`

---
