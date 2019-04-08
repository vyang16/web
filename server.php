<!--Save php file in /var/www/html/server.php -->
<!--To run or test php file, start apache with
1. sudo systemctl restart apache2
2. Type in browser http://192.168.0.102/server.php

## Start command ##
systemctl start apache2.service
## Stop command ##
systemctl stop apache2.service
## Restart command ##
systemctl restart apache2.service


-->

<!DOCTYPE html>
<html>
<body>

<?php
$txt = "Hello world!";
$x = 5;
$y = 10.5;

echo $txt;
echo "<br>";
echo $x;
echo "<br>";
echo $y;
?>

</body>
</html>
