<?php
// root/index.php
// start session
session_start(); 
require_once 'app/bootstrap.php';

// Init Core Library

require APPROOT . '/views/includes/header.php';
require APPROOT . '/views/includes/navbar.php';

$init = new Core();

require APPROOT . '/views/includes/footer.php';