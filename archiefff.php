<?php

    include("./connect_db.php");

    
    $sql = "SELECT * FROM `users`";

  
    $result = mysqli_query($conn, $sql);


    $row = "";
    while ($record = mysqli_fetch_assoc($result)){
        $row = $row . "<tr>
                    <td>{$record['id']}</td>
                    <td>{$record['firstname']}</td>
                    <td>{$record['lastname']}</td>
                    <td>{$record['services']}</td>
                    <td>{$record['gender']}</td>
                    <td>{$record['message']}</td>
                    <td>
                        <a href='./update.php?id={$record['id']}'>
                            <i class='bi bi-pencil-square'></i>
                        </a>
                    </td>
                    <td>
                        <a href='./delete.php?id={$record['id']}'>
                            <i class='bi bi-trash-fill'></i>
                        </a>
                    </td>
                </tr>";
    }
?>

<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

  
    <link rel="stylesheet" href="style.css">

    <title>Review pagina</title>
  </head>
  <br>
   <h2>Review Database </h2>

    <div class="container">
        <div class="row">
            <div class="col-12" style="background-color:white ; margin-top:60px">

                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Services</t>
                            <th>Gender</th>
                            <th>Message</th>
                            <th>&nbsp;</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php echo $row; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    
    <script src="js/app.js"></script>
  </body>
</html>