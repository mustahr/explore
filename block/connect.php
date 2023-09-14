<?php
$db = mysqli_connect("localhost", "u333140862_explore", "Mustaphaharmouch@2000", "u333140862_explore");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}