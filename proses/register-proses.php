<?php
  session_start();
  include "../modul/allFunction.php";

  $allFunction = new allFunction();

  $username = $_POST['u'];
  $email = $_POST['e'];
  $password = password_hash($_POST['p'], PASSWORD_BCRYPT);
  $phoneNumber = $_POST['n'];
  $address = $_POST['a'];

  $coba = $allFunction->checkUsername($username);

  $data = array(
    'email' => $email,
    'username' => $username,
    'password' => $password,
    'phoneNumber' => $phoneNumber,
    'address' => $address,
    'roleID' => 1
  );


  if ($coba == '0') {
    $upload = $allFunction->registerAccount($data);
    if ($upload == 'Berhasil') {
      $_SESSION["username"] = $username;
      echo 1;
    }
    else {
      echo 0;
    }
  }
  else{
    echo 2;
  }

?>
