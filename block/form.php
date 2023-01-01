<?php
require_once '../files/conf/connect.php';
$mail = $_POST['email'];

// Insert image content into database 
$insert = $db->query("INSERT into client 
            (
                mail,
                created
            )
            VALUES 
            (
                '$mail',
                NOW())
                ");

header("Location: ../");
