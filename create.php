<?php 
include("./connect_db.php");

$tweet = $_POST["tweet"];

$sql = "INSERT INTO `users` 
                        (`tweet`) 
                        VALUES 
                        ('$tweet');";

mysqli_query($conn, $sql);

header("Location: ./index.php?content=archief");
?>