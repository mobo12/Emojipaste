<?php
$db = new mysqli('localhost', 'username', 'password', 'database');

if($db->connect_errno > 0){
    die('Database error: [' . $db->connect_error . ']');
}


?>