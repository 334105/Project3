<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bitter</title>
    <link rel="shortcut icon" href="img/BitterLogoTitle.png">
    <link rel="stylesheet" href="./signup/signup.css">
</head>
<body>
<header>
    <nav>
        <ul>
            <a href=" http://www.project-3.nl/homepage.php">
            <img class="logo" src="img/BitterLogo.png   ">
            </a>
            <li><a href="http://www.project-3.nl/homepage.php">Home</a></li>
            <li><a href="http://www.project-3.nl/archief.php">Beets</a></li>
            <li><a href="http://www.project-3.nl/dashboard.php">Dashboard</a></li>
            <li><a href="http://www.project-3.nl/login.php">Login</a></li>
            <li><a href="http://www.project-3.nl/register.php">Sign Up</a></li>
        </ul>
    </nav>
</header>

<div class="container mt-5">
    <div class="row">
        <div class="col-12 col-sm-6">
            <form action="./index.php?content=register_script" method="post">
                <div class="form-group">
                    <label for="inputEmail">Vul hier uw e-mailadres in:</label>
                    <input name="email" type="email" class="form-control" id="inputEmail" aria-describedat="">
                    <small id="emailHelp" class="form-text text-muted">Uw privacy is gegarandeerd...</small> 
                </div>
                
                <button type="submit" class="btn btn-warning btn-lg btn-block">Registreer</button>
            </form> 
    </div>
    <div class="col-12 col-sm-6">
        <img src="./img/vegetablejuice.jpg" alt="kersen" class="w-75 mx-auto d-block">
    </div>
   </div>
   <h2>Login Form</h2>


<form action="./login_script" method="post">
  <div class="container">
    <label for="inputEmail"><b>E-Mail</b></label>
    <input name="email" type="text" placeholder="Enter Email" required class="form-control" id="inputUsername" aria-describedby="usernameHelp">

    <label for="inputPassword"><b>Password</b></label>
    <input name="password" type="password" placeholder="Enter Password" required aria-describedby="inputPassword">
        
    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  </div>
</form>
</div>

</body>
</html>