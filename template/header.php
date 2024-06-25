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
  <title>#2019skripsi - <?php echo $_SESSION['username']; ?></title>

  <!-- Bootstrap Core CSS -->
  <link href="css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/lib/calendar2/semantic.ui.min.css" rel="stylesheet">
  <link href="css/lib/calendar2/pignose.calendar.min.css" rel="stylesheet">
  <link href="css/lib/owl.carousel.min.css" rel="stylesheet" />
  <link href="css/lib/owl.theme.default.min.css" rel="stylesheet" />
  <link href="css/helper.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body class="fix-header fix-sidebar">
  <!-- Preloader - style you can find in spinners.css -->
  <div class="preloader">
    <svg class="circular" viewBox="25 25 50 50">
      <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
    </svg>
  </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
      <!-- header header  -->
      <div class="header">
        <nav class="navbar top-navbar navbar-expand-md navbar-light">
          <!-- Logo -->
          <div class="navbar-header">
            <a class="navbar-brand" href="index.php?send=home">
              <!-- Logo icon -->
              <b><img src="images/logo.png" alt="homepage" class="dark-logo" /></b>
              <!--End Logo icon -->
              <!-- Logo text -->
              <span><img src="images/logo-text.png" alt="homepage" class="dark-logo" /></span>
            </a>
          </div>
          <!-- End Logo -->
          <div class="navbar-collapse">
            <!-- toggle and nav items -->
            <ul class="navbar-nav mr-auto mt-md-0">
              <!-- This is  -->
              <li class="nav-item">
                <a class="nav-link nav-toggler hidden-md-up text-muted  " href="javascript:void(0)">
                  <i class="mdi mdi-menu"></i>
                </a>
              </li>
              <li class="nav-item m-l-10">
                <a class="nav-link sidebartoggler hidden-sm-down text-muted  " href="javascript:void(0)">
                  <i class="ti-menu"></i>
                </a>
              </li>
            </ul>
            <!-- User profile, notifications & messages -->
            <ul class="navbar-nav my-lg-0">
              <!-- Notifications -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-bell"></i>
                  <div class="notify">
                    <span class="heartbit"></span>
                    <span class="point"></span>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn">
                  <ul>
                    <li>
                      <div class="drop-title">Notifications</div>
                    </li>
                    <li>
                      <div class="message-center">
                        <!-- Message -->
                        <a href="#">
                          <div class="btn btn-danger btn-circle m-r-10">
                            <i class="fa fa-link"></i>
                          </div>
                          <div class="mail-contnet">
                              <h5>This is title</h5>
                              <span class="mail-desc">Just see the my new admin!</span>
                              <span class="time">9:30 AM</span>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="#">
                          <div class="btn btn-success btn-circle m-r-10">
                            <i class="ti-calendar"></i>
                          </div>
                          <div class="mail-contnet">
                            <h5>This is another title</h5>
                            <span class="mail-desc">Just a reminder that you have event</span>
                            <span class="time">9:10 AM</span>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="#">
                          <div class="btn btn-info btn-circle m-r-10">
                            <i class="ti-settings"></i>
                          </div>
                          <div class="mail-contnet">
                            <h5>This is title</h5>
                            <span class="mail-desc">You can customize this template as you want</span>
                            <span class="time">9:08 AM</span>
                          </div>
                        </a>
                        <a href="#">
                          <div class="btn btn-info btn-circle m-r-10">
                            <i class="ti-settings"></i>
                          </div>
                          <div class="mail-contnet">
                            <h5>This is title</h5>
                            <span class="mail-desc">You can customize this template as you want</span>
                            <span class="time">9:08 AM</span>
                          </div>
                        </a>
                      </div>
                    </li>
                    <li>
                      <a class="nav-link text-center" href="javascript:void(0);">
                        <strong>Check all notifications</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- End Notifications -->
              <!-- Messages -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted  " href="#" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-envelope"></i>
                  <div class="notify">
                    <span class="heartbit"></span>
                    <span class="point"></span>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right mailbox animated zoomIn" aria-labelledby="2">
                  <ul>
                    <li>
                      <div class="drop-title">You have 4 new messages</div>
                    </li>
                    <li>
                      <div class="message-center">
                        <!-- Message -->
                        <a href="#">
                          <div class="user-img">
                            <img src="images/users/5.jpg" alt="user" class="img-circle">
                            <span class="profile-status online pull-right"></span>
                          </div>
                          <div class="mail-contnet">
                            <h5>Michael Qin</h5>
                            <span class="mail-desc">Just see the my admin!</span>
                            <span class="time">9:30 AM</span>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="#">
                          <div class="user-img">
                            <img src="images/users/5.jpg" alt="user" class="img-circle">
                            <span class="profile-status online pull-right"></span>
                          </div>
                          <div class="mail-contnet">
                            <h5>Michael Qin</h5>
                            <span class="mail-desc">Just see the my admin!</span>
                            <span class="time">9:30 AM</span>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="#">
                          <div class="user-img">
                            <img src="images/users/5.jpg" alt="user" class="img-circle">
                            <span class="profile-status online pull-right"></span>
                          </div>
                          <div class="mail-contnet">
                            <h5>Michael Qin</h5>
                            <span class="mail-desc">Just see the my admin!</span>
                            <span class="time">9:30 AM</span>
                          </div>
                        </a>
                        <!-- Message -->
                        <a href="#">
                          <div class="user-img">
                            <img src="images/users/5.jpg" alt="user" class="img-circle">
                            <span class="profile-status online pull-right"></span>
                          </div>
                          <div class="mail-contnet">
                            <h5>Michael Qin</h5>
                            <span class="mail-desc">Just see the my admin!</span>
                            <span class="time">9:30 AM</span>
                          </div>
                        </a>
                      </div>
                    </li>
                    <li>
                      <a class="nav-link text-center" href="javascript:void(0);">
                        <strong>See all e-Mails</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </li>
              <!-- End Messages -->
              <!-- Profile -->
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-muted  " href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <img src="images/users/5.jpg" alt="user" class="profile-pic" />
                </a>
                <div class="dropdown-menu dropdown-menu-right animated zoomIn">
                  <ul class="dropdown-user">
                    <li><a href="#"><i class="ti-user"></i> Profile</a></li>
                    <li><a href="#"><i class="ti-wallet"></i> Balance</a></li>
                    <li><a href="#"><i class="ti-email"></i> Inbox</a></li>
                    <li><a href="#"><i class="ti-settings"></i> Setting</a></li>
                    <li><a href="index.php?send=proses/logout-proses"><i class="fa fa-power-off"></i> Logout</a></li>
                  </ul>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!-- End header header -->
      <!-- Left Sidebar  -->
      <div class="left-sidebar">
        <!-- Sidebar scroll-->
        <div class="scroll-sidebar">
          <!-- Sidebar navigation-->
          <nav class="sidebar-nav">
            <ul id="sidebarnav">
              <li class="nav-devider"></li>
              <li class="nav-label">Home</li>
              <li>
                <a class="has-arrow  " href="#" aria-expanded="false">
                  <i class="fa fa-tachometer"></i>
                  <span class="hide-menu">Dashboard
                    <span class="label label-rouded label-primary pull-right">2</span>
                  </span>
                </a>
                <ul aria-expanded="false" class="collapse">
                  <li><a href="index.html">Ecommerce </a></li>
                  <li><a href="#">Analytics </a></li>
                </ul>
              </li>
            </ul>
          </nav>
          <!-- End Sidebar navigation -->
        </div>
        <!-- End Sidebar scroll-->
      </div>
      <!-- End Left Sidebar  -->
