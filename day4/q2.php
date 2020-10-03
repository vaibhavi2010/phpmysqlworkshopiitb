<?php
require('connect.php');

$update_1 = "UPDATE class1 SET Sub5 = 99 WHERE name = 'Rohan'";
mysqli_query($connect, $update_1);
echo "Table updated";
?>