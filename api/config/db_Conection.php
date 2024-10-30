<?php


$servername = "localhost";
$username   = "postgres";
$password   = "1234";
$dbname     = "InterEs";
$port       = "5432";

$data_connection = "
   host     = $servername
   user     = $username
   password = $password
   dbname   = $dbname
   port     = $port
";

$conn = pg_connect($data_connection);

if(!$conn){
    die("Connection faild: " .preg_last_error());
}else{
    echo"Connection success";
}

?>