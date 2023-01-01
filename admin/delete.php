<?php 
// Include the database configuration file  
session_start() ;

if(!isset($_SESSION['login'])){
    header("Location: musta.php");
}
require_once '../files/conf/connect.php';
$trip_category_id = $_GET['id'];
$table = $_GET['table'];
$column = $_GET['column'];
$insert = $db->query("DELETE FROM $table WHERE $column = $trip_category_id ");



header("location:admin_".$table.".php");