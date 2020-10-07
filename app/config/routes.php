<?php
\Core\Router::add('login', '/login', '\App\Controllers\Auth\LoginController', 'index');
\Core\Router::add('register', '/register', '\App\Controllers\Auth\RegisterController', 'index');
\Core\Router::add('feedback', '/feedback', '\App\Controllers\FeedbackController', 'index');
\Core\Router::add('logout', '/logout', '\App\Controllers\Auth\LogoutController', 'index');
\Core\Router::add('index', '/index', '\App\Controllers\HomeController', 'index');