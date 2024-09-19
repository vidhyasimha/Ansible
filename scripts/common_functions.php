<?php
// Common utility functions

function runCommand($command) {
    echo "Running: $command\n";
    $output = shell_exec($command);
    echo $output;
}
?>

