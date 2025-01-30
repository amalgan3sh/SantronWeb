<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/about', 'Home::about');
$routes->get('/night_club', 'Home::night_club');
$routes->get('/spa_and_relaxation', 'Home::spa_and_relaxation');
$routes->get('/lounge_experience', 'Home::lounge_experience');
$routes->get('/hotel_supplies', 'Home::hotel_supplies');
$routes->get('/night_club_gallery', 'Home::night_club_gallery');
$routes->get('/spa_and_wellness_gallery', 'Home::spa_and_wellness_gallery');
$routes->get('/lounge_experience_gallery', 'Home::lounge_experience_gallery');
$routes->get('/our_global_presence_gallery', 'Home::our_global_presence_gallery');
$routes->get('/behind_the_scene_gallery', 'Home::behind_the_scene_gallery');
$routes->get('/nightlife_blog', 'Home::nightlife_blog');
$routes->get('/founders_message', 'Home::founders_message');
$routes->get('/chairmans_message', 'Home::chairmans_message');
$routes->get('/ceos_message', 'Home::ceos_message');
$routes->get('/blog', 'Home::blog');
$routes->get('/contact_us', 'Home::contact_us');
