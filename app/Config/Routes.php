<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/beranda', 'Page::beranda');
$routes->get('/data1', 'Page::data1');
$routes->get('/data1IN', 'Page::data1IN');
$routes->add('/data1INpost', 'PageProccess::data1INpost'); 

#$routes->group('admin',function($routes){ } );