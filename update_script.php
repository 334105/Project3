<?php

include ("./connect_db.php");

$id = $_POST["id"];
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$service = $_POST["services"];
$gender = $_POST["gender"];
$message = $_POST["message"];


$sql = "UPDATE `users` 
            SET `firstname` = '$firstname',
                `lastname` = '$lastname',
                `services` = '$services',
                `gender` = '$gender',
                `message` = '$message',
            WHERE `id` = $id;";

mysqli_query($conn, $sql);

header("Location: ./read.php");

?>