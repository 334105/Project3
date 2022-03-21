<?php
  var_dump($_POST["email"]);

  if (empty($_POSTP["email"])) {
     header("Location: ./index.php?content=message&alert=no-email"); 
  } else {
    include("./connect_db.php");   
    include("./functions.php");

    sanitize($_POST["email"]);

    $email = sanitize($_POST["email"]);
   
    $sql = "SELECT * FROM 'register' WHERE 'email' = '$email' ";

    $result = mysqli_query($conn, $sql);

    
    if (mysqli_num_rows($result)) {
        header("Location: ./index.php?content=message&alert=emailexists"); 
    } else {
      $password = "geheim";
      $password_hash = password_hash($password, PASSWORD_BCRYPT);  

      $sql = "INSERT INTO 'register' ('id',
                                        'email',
                                        'password',
                                        'userrole')     
              VALUES                        (NULL,
                                                '$email',
                                                '$password_hash',
                                                'customer')";   
                                                
      if (mysqli_query($conn, $sql)) { 
          // e-mail versturen 
        header("Location: ./index.php?content=message&alert=register-success");   
    } else {
        header("location: ./index.php?content=message&alert=register-error");
    }
  }
} 
 ?> 