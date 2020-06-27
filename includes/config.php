<?php
define('DB_SERVER','us-cdbr-east-02.cleardb.com');
define('DB_USER','bd8d2dc12c12a8');
define('DB_PASS' ,'44876425');
define('DB_NAME', 'heroku_02cc6207daf1a08');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>
