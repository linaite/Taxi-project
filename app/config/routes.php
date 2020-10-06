<?php
\Core\Router::add('login', '/login', '\App\Controllers\Auth\LoginController', 'index');
\Core\Router::add('register', '/register', '\App\Controllers\Auth\RegisterController', 'index');
\Core\Router::add('feeback', '/feedback', '\App\Controllers\FeedbackController', 'feedback');
\Core\Router::add('logout', '/logout', '\App\Controllers\Auth\LogoutController', 'index');
//\Core\Router::add('my', '/my', '\App\Controllers\FeedbackController', 'my');
\Core\Router::add('index', '/index', '\App\Controllers\FeedbackController', 'index');
\Core\Router::add('users', '/users', '\App\Controllers\UsersController', 'index');