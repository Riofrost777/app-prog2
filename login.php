<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Favicon icon -->
  <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.png">
  <title>#2019skripsi</title>
  <!-- Bootstrap Core CSS -->
  <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
  <!-- Custom CSS -->
  <link href="css/helper.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<style media="screen">
  .backg{
    background-image: url('images/bg-01.jpg');
    background-size: cover;
    background-attachment: fixed;
    background-repeat: no-repeat;
  }
</style>

<body class="fix-header fix-sidebar backg">
  <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
	    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
  </div>
  <!-- Main wrapper  -->
  <div id="main-wrapper">
    <div class="unix-login">
      <div class="container-fluid">
        <div class="row justify-content-center">
          <div class="col-lg-4">
            <div class="login-content card">
              <div class="login-form">
                <h4>Login</h4>
                <form method="post">
                  <div class="form-group">
                    <label>E-MAIL</label>
                    <input type="text" class="form-control" placeholder="Username" id="usernameLogin" required data-error="Please enter your username">
                  </div>
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" placeholder="Password" id="passwordLogin" required data-error="Please enter your password">
                  </div>
                  <div class="checkbox">
                    <label class="pull-right">
							        <a href="#">Forgotten Password?</a>
						        </label>
                  </div>
                  <button type="button" class="btn btn-primary btn-flat m-b-30 m-t-30" id="buttonLogin">Sign in</button>
                  <div class="register-link m-t-15 text-center">
                    <p>Don't have account ? <a href="index.php?send=register"> Sign Up Here</a></p>
                  </div>
                  <div class="register-link m-t-15 text-center">
                    <p><a href="index.php?send=admin/login"> Login as Admin</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Wrapper -->
  <!-- All Jquery -->
  <script src="js/lib/jquery/jquery.min.js"></script>
  <!-- Bootstrap tether Core JavaScript -->
  <script src="js/lib/bootstrap/js/popper.min.js"></script>
  <script src="js/lib/bootstrap/js/bootstrap.min.js"></script>
  <!-- slimscrollbar scrollbar JavaScript -->
  <script src="js/jquery.slimscroll.js"></script>
  <!--Menu sidebar -->
  <script src="js/sidebarmenu.js"></script>
  <!--stickey kit -->
  <script src="js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
  <!--Custom JavaScript -->
  <script src="js/custom.min.js"></script>
  <!-- Sweet Alert -->
  <script src="js/sweetalert.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#buttonLogin').click(function() {
        var userLogin = $('#usernameLogin').val();
        var passLogin = $('#passwordLogin').val();
        $.post( "proses/login-proses.php",
          {u: userLogin, p: passLogin},
          function( data ) {
            console.log(data);
            if(data == 1) {
              swal("Congratulation!", "You have successfully logged in!", "success")
                .then ((value) => {
                  window.location = "index.php?send=home";
                });
            }
            else {
              swal("Oops...", "Username or Password is Incorrect", "error");
              // , {
              //   buttons: {
              //     catch: {
              //       text: "Forget Password!",
              //       value: "forget",
              //     },
              //     defeat: {
              //       text: "OK",
              //       value: "next",
              //     },
              //   },
              // })
              // .then((value) => {
              //   switch (value) {
              //     case "forget":
              //       swal({
              //         title: "Are you sure?",
              //         text: "Your password will be reset",
              //         icon: "warning",
              //         buttons: true,
              //         dangerMode: true,
              //       })
              //       .then((willDelete) => {
              //         if (willDelete) {
              //           var status = "Request New Password";
              //           var userLogin = $('#usernameLogin').val();
              //           $.post("proses/forgetPassword-proses.php",
              //             {s: status, u: userLogin},
              //             function(data) {
              //               var dataku = data.split("&&");
              //               if (dataku[2] == 'success') {
              //                 const newPassword = dataku[1];
              //                 swal({
              //                   title: "Your new password:",
              //                   text: newPassword,
              //                   icon: "success",
              //                   button: "Okay!",
              //                 });
              //               }
              //               else {
              //                 swal("Oops...", "Something wrong, please call 911!", "error");
              //               }
              //           });
              //         }
              //         else {
              //           swal("Your password is safe!");
              //         }
              //       });
              //       break;
              //     case "next":
              //       swal.close();
              //       break;
              //   }
              // });
            }
        });
      });
    });
  </script>
</body>
</html>
