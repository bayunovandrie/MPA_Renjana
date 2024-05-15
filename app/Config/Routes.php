<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
// default
$routes->get('/', 'Home::index');

// home
$routes->get('/home', 'Home::index');

// about
$routes->get('/renjana-buana-about', 'About::index');

// kegiatan
$routes->get('/renjana-buana-kegiatan', 'Kegiatan::index');

// blog
$routes->get('/renjana-buana-blog', 'Blog::index');

// contact
$routes->get('/renjana-buana-contact', 'Contact::index');