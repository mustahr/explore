<?php
$db = mysqli_connect("localhost", "root", "", "explore");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}