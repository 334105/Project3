<?php
  $active = (isset($_GET["content"]))? $_GET["content"]: "";
?>




<nav class="navbar navbar-expand-md navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php?content=secretbitterpage">Bitter</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
      <?php    
      if (isset($_SESSION["id"])) {
          switch($_SESSION["userrole"]) {
            // Kaasjes inlog pages
            case 'admin':
              echo '<li class="nav-item">
              <a class="nav-link '; echo (in_array($active, ["a-home", ""]))? "active"   : ""; echo'" href="./index.php?content=a-home">Home <span class="sr-only"></span></a>
              </li>';
            break;

            case 'customer':
              echo '<li class="nav-item">
              <a class="nav-link '; echo (in_array($active, ["c-home", ""]))? "active"   : ""; echo'" href="./index.php?content=c-home">Home <span class="sr-only"></span></a>
              </li>';
            break;  
          }     
        } else {
          echo '<li class="nav-item '; echo (in_array($active, ["home", ""]))? "active"   : ""; echo'">
                <a class="nav-link" href="./index.php?content=home">Home <span class="sr-only"></span></a>
                </li>';
        }
        ?>
        <li class="nav-item">
          <a class="nav-link <?php echo ($active == "juices") ? "active": "" ?>" href="./index.php?content=dashboard">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php echo ($active == "juices") ? "active": "" ?>" href="./index.php?content=archief">Archief</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?php echo (in_array($active, ["sleep" , "nutrition" , "exercise"]))? "active": "" ?> " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Contact
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item <?php echo ($active == "sleep")? "active": "" ?>" href="./index.php?content=adresses">Adres</a>
            <a class="dropdown-item <?php echo ($active == "nutrition")? "active": "" ?>" href="./index.php?content=emails">Email</a>
            <a class="dropdown-item <?php echo ($active == "exercise")? "active": "" ?>" href="./index.php?content=phonenumbers">Telefoonnummer</a>
          </div>
        </li>
      </ul>  
      <ul class="navbar-nav ms-auto">
        <?php
          if (isset($_SESSION["id"])) {
            switch($_SESSION["userrole"]) {
              case 'customer':
                echo'<li class="nav-item">
                <a class="nav-link '; echo (in_array($active, ["c-rootpage", ""]))? "active"   : ""; echo'" href="./index.php?content=customerpage">Customer<span class="sr-only"></span></a>
              </li>';
 
              break;

              case 'admin':
                echo '<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle' ; echo (in_array($active, ["a-users" , "a-reset_password"]))? "active": ""; echo '" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Admin workbench
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkRight">
                  <a class="dropdown-item '; echo ($active == "a-users")? "active": ""; echo'" href="./index.php?content=a-users">Users</a>
                  <a class="dropdown-item '; echo ($active == "a-reset_password")? "active": ""; echo'>" href="./index.php?content=a-reset_password">Reset password</a>
                </div>
                </li>';   

              break;
              default:
              break;
            }
            echo '<li class="nav-item';
            echo ($active == "logout")? "active": ""; 
            echo '">
            <a class="nav-link" href="./index.php?content=logout">Uitloggen</a>
          </li>';   
          } else {
            echo ' <li class="nav-item' ; echo ($active == "register") ? "active" : ""; echo '">
            <a class="nav-link" href="./index.php?content=register">Registreer</a>
          </li>
          <li class="nav-item' ; echo ( $active == "login")? "active" : ""; echo '">
            <a class="nav-link" href="./index.php?content=login">Inloggen</a>
          </li>';
          }
          ?>
       
      </ul> 
    </div>
  </div>
</nav>