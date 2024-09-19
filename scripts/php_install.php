<?php
// PHP installation script

echo "Installing PHP...\n";
runCommand('tar -xzf php/8.0.29/php-8.0.29.tar.gz -C /usr/local/');
runCommand('cp php/8.0.29/config/php.ini /usr/local/php/etc/php.ini');
runCommand('/usr/local/php/bin/php -v');
echo "PHP installed successfully!\n";
?>

