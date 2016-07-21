<?php
// Get the document root
$doc_root = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT');

// Get the application path
$uri = filter_input(INPUT_SERVER, 'REQUEST_URI');
$dirs = explode('/', $uri);
$app_path = '/' . $dirs[1] . '/' . $dirs[2] . '/';

//echo $doc_root . $app_path;

// Set the include path
set_include_path($doc_root . $app_path);

// set constants for easier path control
define('SITE_ROOT', '/ex_solutions/ch20_ex1_sol/');
define('APP_ROOT', $_SERVER['DOCUMENT_ROOT'] . '/ex_solutions/ch20_ex1_sol/');
define('IMAGE_SITE_DIR', SITE_ROOT . 'images/');
define('IMAGE_APP_DIR', APP_ROOT . 'images/');


?>