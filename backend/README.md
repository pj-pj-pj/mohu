<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## About MoHu (backend)

A turn-based, text-based game inspired by _Monster Hunter Portable 3rd_. Built with **Laravel**, it provides the API and logic for managing hunters, monsters, quests, and combat.

## Table of Contents

1. [Features](#features)
2. [Technologies](#technologies)
3. [Installation](#installation)
4. [API Documentation](#api-documentation)
 <!-- 5. [Database Schema](#database-schema)
5. [Environment Variables](#environment-variables)
6. [Testing](#testing)
7. [Contributing](#contributing)
8. [License](#license) -->

## Features

Mohu provides the following backend features:

-   **Hunter Management**: Create, customize, and manage hunters with weapons and armor.
-   **Quest System**: Manage quests, rewards, and progression.
-   **Combat System**: Handle turn-based combat logic, including attacks, skills, and monster AI.
-   **Inventory System**: Manage items and equipment.

## Technologies

-   **Laravel**: PHP framework for building the API and backend logic.
-   **PostgreSQL (Supabase)**: Database for storing game data.
-   **API Resources**: Transform models into JSON responses.
-   **Seeders**: Populate the database with initial data for testing.

## Installation

Follow these steps to set up the Mohu backend locally:

1. **Clone the repository**:

    ```bash
    git clone https://github.com/your-username/mohu.git
    cd mohu
    ```

2. **Install Dependencies**:

    ```bash
    composer install
    ```

3. **Set up the environment**

    - Update .env with your database credentials

4. **Generate an application key:**:

    ```bash
    php artisan key:generate
    ```

5. **Generate an application key:**:

    ```bash
    php artisan migrate --seed
    ```

6. **Serve the application:**:

    ```bash
    php artisan serve
    ```

7. **Access the API:**:

    ```bash
    The API will be available at http://localhost:8000.
    ```

## API Documentation

-   (coming soon)
