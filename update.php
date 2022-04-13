<?php
include("./connect_db.php");

$sql = "SELECT * FROM `users`";

$result = mysqli_query($conn, $sql);

$record = mysqli_fetch_assoc($result);

?>
<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <link rel="stylesheet" href="style.css">

    <title>Database</title>
</head>
<br>
<body class="home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>Tweet</h1>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="row">
                    <div class="col-12">
                        <label for="inputMessage" class="form-label">Jouw tweet:</label>
                        <input class="form-control mb-4" type="text" name="tweet" id="inputMessage"
                            placeholder="not required" value="<?php echo $record["tweet"]; ?>">
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col-8">
                            <input type="Submit" class="btn btn-outline-danger form-control" value="Submit">
                        </div>
                        </form>
                        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                            crossorigin="anonymous"></script>

                        <body class="home">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-12">
                                        <a href="./index.php?content=archief"><button type="button"
                                                class="btn btn-sm btn-primary" style="padding: 4px; margin: 6px;">Terug naar archief</button></a>
                                    </div>
                                </div>
                            </div>
                            <script src="js/app.js"></script>
                        </body>
</html>