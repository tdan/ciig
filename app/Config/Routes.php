<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

service('auth')->routes($routes);

$routes->get('/', function() {
    if ( !auth()->loggedIn() ) {
        return redirect()->to(base_url('login'));
    }

    return redirect()->to(base_url('home'));
});

$routes->get('home', 'Home::index', ['as' => 'home']);
