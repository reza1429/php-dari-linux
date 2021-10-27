<?php

$host = 'db'; // service name from docker-compose.yml
$user = 'reza';
$password = 'reza';
$db = 'test_db';

$conn = new mysqli($host, $user, $password, $db);
if($conn->connect_error){
    echo 'connection failed' . $conn->connect_error;
}
echo 'Succesfully connected to MYSQL';

?>
