<!-- 8.3 -->

<?php
    var_dump($_POST);
    include("./connect_db.php");
    include("./functions.php");


    sanitize($_POST["email"]);

    $email = sanitize($_POST["email"]);
    $password = sanitize($_POST["password"]);


   if(empty($email) || empty($password)) {
       echo "Leeg";
    } else {
           echo "Ingevuld";
   } 
    ?>