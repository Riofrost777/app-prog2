<?php
  session_start();
  include "../modul/allFunction.php";
  $allFunction = new allFunction();

  $email = $_POST['u'];
  $password = $_POST['p'];

  if ($_POST['a']) {
    $login = $allFunction->adminLogin($email);

    if ($login == '0'){
      echo 0;
      // echo '<script>alert("Username not found!"); window.location ="index.php?send=login"</script>';
    }
    else {
      if (password_verify($password, $login->password)) {
        // $data['state'] = 1;
        echo 1;
        $_SESSION['id'] = $login->id_admin;
        $_SESSION['email'] = $login->email;
        $_SESSION['username'] = $login->name;
        $_SESSION['mobile'] = $login->mobile;
        $_SESSION['role'] = $login->roleID;
      }
      else {
        echo 0;
        // echo '<script>alert("Username not found!"); window.location ="index.php?send=login"</script>';
        // $data['state'] = 0;
      }
    }
  }
  else {
    $login = $allFunction->login($email);

    if ($login == '0'){
      echo 0;
      // echo '<script>alert("Username not found!"); window.location ="index.php?send=login"</script>';
    }
    else {
      if (password_verify($password, $login->password)) {
        // $data['state'] = 1;
        echo 1;
        $_SESSION['id'] = $login->id_congregation;
        $_SESSION['email'] = $login->email;
        $_SESSION['username'] = $login->name;
        $_SESSION['address'] = $login->address;
        $_SESSION['mobile'] = $login->mobile;
        $_SESSION['role'] = $login->roleID;
      }
      else {
        echo 0;
        // echo '<script>alert("Username not found!"); window.location ="index.php?send=login"</script>';
        // $data['state'] = 0;
      }
    }
  }

  // $login = $allFunction->login($email);
  //
  // if ($login == '0'){
  //   echo 0;
  //   // echo '<script>alert("Username not found!"); window.location ="index.php?send=login"</script>';
  // }
  // else {
  //   if (password_verify($password, $login->password)) {
  //     // $data['state'] = 1;
  //     echo 1;
  //     $_SESSION['id'] = $login->id_congregation;
  //     $_SESSION['email'] = $login->email;
  //     $_SESSION['username'] = $login->name;
  //     $_SESSION['address'] = $login->address;
  //     $_SESSION['mobile'] = $login->mobile;
  //     $_SESSION['role'] = $login->roleID;
  //   }
  //   else {
  //     echo 0;
  //     // echo '<script>alert("Username not found!"); window.location ="index.php?send=login"</script>';
  //     // $data['state'] = 0;
  //   }
  // }

?>
