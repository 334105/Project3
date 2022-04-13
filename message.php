<?php
    $alert = (isset($_GET["alert"]))? $_GET["alert"]: "default";
    $id = (isset($_GET["id"]))? $_GET["id"]: "";
    $pwh = (isset($_GET["pwh"]))? $_GET["pwh"]: "";
    $email = (isset($_GET["email"]))? $_GET["email"]: "";

    switch($alert) {
  
        // Registratiepagina messages
        case "no-email" :
            echo '<div class="alert alert-info mt-5 w-50 mx-auto" role="alert">
                    U heeft geen e-mailadres ingevuld, probeer het opnieuw...
                  </div>';
            header("Refresh: 3; url=./index.php?content=register");

        break;

        case "emailexists" :
            echo '<div class="alert alert-warning mt-5 w-50 mx-auto" role="alert">
                  Het door u ingevulde e-mailadres bestaat al, probeer in te loggen.
             </div>';
            header("Refresh: 3; url=./index.php?content=login");

        break;


        // Activatiepagina messages
        case "password-empty" :
            echo '<div class="alert alert-primary mt-5 w-50 mx-auto" role="alert">
            U heeft één van beide velden niet ingevuld, probeer het opnieuw.
          </div>';
            header("Refresh: 3; url=./index.php?content=activate&id=$id&pwh=$pwh");

        break;

        case "nomatch-password" :
            echo '<div class="alert alert-primary mt-5 w-50 mx-auto" role="alert">
            Één van beide passwords matchen niet, probeer het opnieuw.
          </div>';
            header("Refresh: 3; url=./index.php?content=activate&id=$id&pwh=$pwh");

        break;

        case "no-id-pwh-match" :
            echo '<div class="alert alert-warning mt-5 w-50 mx-auto" role="alert">
            U bent niet geregristreerd in de database, u wordt doorgestuurd naar de registratiepagina.
          </div>';
            header("Refresh: 3; url=./index.php?content=register");

        break;

        case "update-success" :
            echo '<div class="alert alert-primary mt-5 w-50 mx-auto" role="alert">
            U bent succesvol geregristreerd, u wordt doorgestuurd naar de inlogpagina.
          </div>';
            header("Refresh: 3; url=./index.php?content=login");

        break;

        case "update-error" :
            echo '<div class="alert alert-warning mt-5 w-50 mx-auto" role="alert">
            Er is een fout opgetreden, probeer het opnieuw.
          </div>';
            header("Refresh: 3; url=./index.php?content=activate&id=$id&pwh=$pwh");

        break;

        case "already-active" :
          echo '<div class="alert alert-primary mt-5 w-50 mx-auto" role="alert">
        Dit account is al actief. Log in met uw wachtwoord en emailadres.
        </div>';
          header("Refresh: 3; url=./index.php?content=login"); 

        break;

        case "no-match-pwh" :
        echo '<div class="alert alert-primary mt-5 w-50 mx-auto text-center" role="alert">
        Uw activatiegegevens zijn niet correct, registreer opnieuw.
        </div>';
        header("Refresh: 3; url=./index.php?content=register"); 

        break;


        // De Login Messages
        case "register-success" :
            echo '<div class="alert alert-primary mt-5 w-50 mx-auto" role="alert">
         U bent succesvol geregistreed. U ontvangt een e-mail van ons met daarin een activatielink.    
          </div>';
            header("Refresh: 3; url=./index.php?content=login"); 

        break;

        case "loginform-empty" :
            echo '<div class="alert alert-primary mt-5 w-50 mx-auto" role="alert">
         U heeft één van beide velden niet ingevoerd. Probeer het opnieuw. 
          </div>';
            header("Refresh: 3; url=./index.php?content=login");

        break;

        case "email-unknown" :
          echo '<div class="alert alert-primary mt-5 w-50 mx-auto" role="alert">
        Deze email is onbekend in onze database. Controleer op spelfouten.
        </div>';
          header("Refresh: 3; url=./index.php?content=login"); 
        
        break;

        case "not-activated" :
          echo '<div class="alert alert-primary mt-5 w-50 mx-auto" role="alert">
        Uw account is nog niet geactiveerd. Check uw e-mail <span class="badge badge-dark p-2">' . $email . '</span> voor de activatielink.
        </div>';
          header("Refresh: 4; url=./index.php?content=login");

        break;

        case "no-pw-match" :
          echo '<div class="alert alert-primary mt-5 w-50 mx-auto" role="alert">
        Uw ingevulde wachtwoord voor het e-mailadres <span class="badge badge-dark p-2">' . $email . '</span> klopt niet, probeer het opnieuw.
        </div>';
          header("Refresh: 4; url=./index.php?content=login");

        break;


        // De Logout messages
        case "logout" :
          echo '<div class="alert alert-primary mt-5 w-50 mx-auto" role="alert">
          U bent uitgelogd, u wordt automatisch doorgestuurd naar de homepage in 3, 2, 1...
        </div>';
          header("Refresh: 4; url=./index.php?content=login");

        break;


        // Overige Messages
        case "hacker-alert" :
            echo '<div class="alert alert-primary mt-5 w-50 mx-auto" role="alert">
         U heeft geen rechten op deze pagina.    
          </div>';
            header("Refresh: 4; url=./index.php?content=home"); 

        break;

        case "auth-error" :
          echo '<div class="alert alert-primary mt-5 w-50 mx-auto" role="alert">
        Uh oh, niet ingelogd! U wordt weldirect teruggestuurd naar de homepage...
        </div>';
          header("Refresh: 3; url=./index.php?content=home"); 

        break;

        case "auth-error-user" :
          echo '<div class="alert alert-primary mt-5 w-50 mx-auto" role="alert">
        Uh oh, u heeft niet de juiste machtigingen om deze page te bezoeken! Terug naar de homepage...
        </div>';
          header("Refresh: 3; url=./index.php?content=home"); 

        break;


        default:
            header("Location: ./index.php?content=home");

        break;  
    }


 ?>   