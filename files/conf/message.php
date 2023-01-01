<?php
require_once 'connect.php';
$mail = $_POST['email'];
$message = $_POST['messages'];

// Insert image content into database 
$insert = $db->query("INSERT into messages 
            (
                email,
                messages,
                time_sent
            )
            VALUES 
            (
                '$mail',
                '$message',
                NOW())
                ");

header("Location: ../contact.php");
