a-home

<?php
  include("./functions.php");
  is_authorized(["admin", "root"]);
?>
<?php
//Dit zorgt ervoor dat de gebruiksrol en id geshowed worden als je inlogd
  echo "Mijn gebruikersrol is: " . $_SESSION["userrole"];
  echo "<hr>";
  echo "Mijn id is: " . $_SESSION["id"];

?>