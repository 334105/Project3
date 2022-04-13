<?php
// beveiliging pagina
function is_authorized($userroles) {
    
   if(!isset($_SESSION[ "id"]))
   {
   return header("Location: ./index.php?content=message&alert=auth-error");
   }
   elseif (!in_array($_SESSION["userrole"], $userroles))
   {
   return header("Location: ./index.php?content=message&alert=auth-error-user");
   }
   else
   {
      return true;
   }
}
    function sanitize($raw_data) {
        global $conn;
        $data = htmlspecialchars($raw_data);
        $data = mysqli_real_escape_string($conn, $data);
        $data = trim($data);
        return $data;
    }