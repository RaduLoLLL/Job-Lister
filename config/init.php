<?php

//Start Session -> for the $_SESSION variables to work
session_start();

//Config file
require_once 'config.php';

//Include Helpers
require_once 'helpers/system_helper.php';

//Auto-load our classes
spl_autoload_register(function($class_name) {
    include 'lib/' . $class_name . '.php';
});