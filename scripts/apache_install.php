<?php
// Apache installation script

echo "Installing Apache...\n";
runCommand('tar -xzf apache/2.4.62/apache-2.4.62.tar.gz -C /usr/local/');
runCommand('cp apache/2.4.62/config/httpd.conf /usr/local/apache2/conf/httpd.conf');
runCommand('/usr/local/apache2/bin/apachectl start');
echo "Apache installed successfully!\n";
?>

