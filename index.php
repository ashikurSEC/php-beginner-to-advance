<?php 

require 'function.php';


$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

dd( $uri );

 

if ( $uri === '/') {
    require 'controllers/index.php';
} else if ( $uri === '/about') {
    require 'controllers/about.php';
} else if ( $uri === '/contact') {
    require 'controllers/contact.php';
}


