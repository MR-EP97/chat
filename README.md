<!-- ABOUT THE PROJECT -->

## About The Project

A simple project is demonstrating WebSocket functionality built with Reverb.
You can send messages to a private channel via both the command line and the view. These messages are visible to the
viewer at the "/dashboard" route.
Note that the user must be authenticated to access this route.

<p align="right">(<a href="https://www.youtube.com/watch?v=BEKiNgcBqJw">source of education</a>)</p>

### Built With

* <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" />   
* <img src="https://img.shields.io/badge/Livewire-4e56a6?style=for-the-badge&logo=livewire&logoColor=white" />


<!-- GETTING STARTED -->

## Getting Started

### Installation

1. Clone the repo
   ```sh
   git clone  https://github.com/MR-EP97/chat.git
   ```
2. Install
   ```php
   composer install
   
   php artisan migrate
   ```
   ```js
   npm install
   ```

3. Run
   ```php
   php artisan serve
   
   php artisan reverb:start
   
   php artisan queue:work
   ```
   ```js
   npm run dev
   ```

<!-- USAGE EXAMPLES -->

## Usage

First, go to the register route and sign up. After you navigate to the dashboard route, you can send and view your message there. 
You can also use the 
```php
php artisan send:message
```
command to send your message via the CLI.


