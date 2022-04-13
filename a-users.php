<?php
    include("./connect_db.php"); 

    $sql = "SELECT * FROM `users`";

    $result = mysqli_query($conn, $sql);

      // dit laat alle records zien op de website
      $row = "";
      while ($record = mysqli_fetch_assoc($result)) {
        $row = $row . "<tr>
                    <td>{$record['tweet']}</td>
                    <td> <a href='./update.php'>
                       <i class='bi bi-pencil-square'></i>
                    </td>
                </tr>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./amazingcss/style.css"> 
</head>
<body>
<div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Tweets</th>
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
        </table>
        </div>
    </div>
</div> 
</body>
</html>