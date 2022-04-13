<?php
  $active = (isset($_GET["content"]))? $_GET["content"]: "";
?>
<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid ms-auto">
  <a href="http://www.bananen.org/index.php?content=home">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item <?php echo (in_array($active, ["home", ""]))? "active": "" ?>">
          <a class="nav-link active" aria-current="page" href="./index.php?content=homepage">Home</a>
        </li>
        <li class="nav-item <?php echo ( $active == "dashboard")? "active": "" ?>">
          <a class="nav-link" href="./index.php?content=dashboard">Dashboard</a>
        </li>
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle <?php if ($active == "" || $active == "" || $active ="") { echo "active"; } ?>" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Extra's
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item <?php if ($active == "") { echo "active"; } ?>" href="./index.php?content=">Haha</a>
          <a class="dropdown-item <?php if ($active == "") { echo "active"; } ?>" href="./index.php?content=">Get</a>
          <a class="dropdown-item <?php if ($active == "") { echo "active"; } ?>" href="./index.php?content=">Scammed</a>
        </div>
      </li>
      </ul>  
      <ul class="navbar-nav ml-auto">
        <?php
          if (isset($_SESSION["id"])) {
                   echo '<li class="nav-item '; echo ($active == "logout") ? "active" : ""; echo '">
                         <a class="nav-link" href="./index.php?content=logout">Logout</a>
                         </li>';
          } else {    
                   echo '<li class="nav-item '; echo ($active == "register") ? "active": ""; echo '">
                           <a class="nav-link" href="./index.php?content=register">Register</a>
                        </li>
                        <li class="nav-item '; echo ($active == "login") ?  "active": ""; echo '">
                           <a class="nav-link" href="./index.php?content=login">Login</a>
                        </li>';
                        
          }
        ?>
      </ul> 
  </div>
</nav>