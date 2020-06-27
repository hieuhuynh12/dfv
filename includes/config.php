<?php
define('DB_SERVER','us-cdbr-east-02.cleardb.com');
define('DB_USER','bb89690bd8d2dc12c12a8493efe0');
define('DB_PASS' ,'44876425');
define('DB_NAME', 'shopping');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>