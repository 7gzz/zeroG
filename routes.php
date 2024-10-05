<?php

$router->get('/', 'Controller@home_index');
$router->get('/leaderboard', 'Controller@leaderboard');

$router->get('/matches', 'Controller@matches');
$router->get('/matches/{id}', 'Controller@sportMatches');

$router->get('/login', 'Controller@login');
$router->post('/login', 'Controller@login');

$router->get('/signup', 'Controller@signup');
$router->post('/signup', 'Controller@signup');

$router->get('/profile/{id}', 'Controller@profile');

$router->post('/logout', 'Controller@logout');
$router->post('/daily_challenge', 'Controller@challenge');
