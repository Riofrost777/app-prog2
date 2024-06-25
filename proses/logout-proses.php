<?php
  session_start();
  include "modul/allFunction.php";

  session_destroy();
  header("location: index.php?send=login");

?>
