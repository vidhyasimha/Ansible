<?php
// Main installer script

include_once('scripts/common_functions.php');

echo "Starting installation...\n";

// Install Apache
include_once('scripts/apache_install.php');

// Install PHP
include_once('scripts/php_install.php');

echo "Installation completed!\n";
?>

