<?php

// Use in the “Post-Receive URLs” section of your GitHub re


exec('whoami ; cd /var/www/taxlocal/ && ls -la ; git status ; git pull 2>&1 ', $output, $retval);
echo "Returned with status $retval and output:\n";
// print_r($output);

echo '<pre>';
print_r($output);
echo '</pre>';

?>

