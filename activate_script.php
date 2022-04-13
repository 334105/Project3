<?php
 include("./connect_db.php");
 include("./functions.php");
 
 $id = sanitize($_POST["id"]);
 $pwh = sanitize($_POST["pwh"]);
 $password = sanitize($_POST["password"]);
 $passwordCheck = sanitize($_POST["passwordCheck"]);
// dit zorgt ervoor dat als de password niet is ingevuld, dat er een 'passwordempty' komt en als de wachtwoorden niet matchen een 'nomatch password' msg komt.
 if (empty($_POST["password"]) || empty($_POST["passwordCheck"])) {
     header("Location: ./index.php?content=message&alert=password-empty&id=$id&pwh=$pwh");
 }  elseif (strcmp($password, $passwordCheck)) {
     header("Location: ./index.php?content=message&alert=nomatch-password&id=$id&pwh=$pwh");
 }  else {
     
    $sql = "SELECT * FROM `register` WHERE  `id` = $id";

    $result = mysqli_query($conn, $sql);


    if (mysqli_num_rows($result)) {

        $record = mysqli_fetch_assoc($result);

        if ($record["activated"]) {
            header("Location: ./index.php?content=message&alert=already-active");
        } else {

            if ( !strcmp($record["password"], $pwh)) {
                 
                 // Dit is een password hash voor het nieuwe gekozen wachtwoord
            $password_hash = password_hash($password, PASSWORD_BCRYPT);

                // Dit update het record met de nieuwe gehashte password
            $sql = "UPDATE `register` 
                    SET    `password` = '$password_hash',
                           `activated`= 1 
                    WHERE  `id` = $id
                    AND    `password` = '$pwh'";
    
    if  (mysqli_query($conn, $sql)) {
        // success
        header("Location: ./index.php?content=message&alert=update-success");
    } else {
        // error
        header("Location: ./index.php?content=message&alert=update-error&id=$id&pwh=$pwh");
    }
     }else {
          header("Location: ./index.php?content=message&alert=no-match-pwh");
    }
  }
    
    } else {
        //foutmelding
            header("Location: ./index.php?content=message&alert=no-id-pwh-match&id=$id&pwh=$pwh");
    }
 }
?>