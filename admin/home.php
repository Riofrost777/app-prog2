<?php
// Start the session
session_start();
if(isset($_SESSION["username"]) == false){
    echo '<script>alert("You have not logged in"); window.location="index.php?send=login";</script>';
}
?>

<?php

  include 'template/header.php';
  include_once 'modul/allFunction.php';

?>
      <!-- Page wrapper  -->
      <div class="page-wrapper">
        <!-- Bread crumb -->
        <div class="row page-titles">
          <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Dashboard</h3>
          </div>
          <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div>
        </div>
        <!-- End Bread crumb -->
        <!-- Container fluid  -->
        <div class="container-fluid">
          <!-- Start Page Content -->
          <div class="row">
            <div class="col-md-3">
              <div class="card p-30">
                <div class="media">
                  <div class="media-left meida media-middle">
                    <span><i class="fa f-s-40 color-primary demo-icon icon-fa-idr"></i></span>
                  </div>
                  <div class="media-body media-text-right">
                    <h2>
                      <?php
                        $total = 0;
                        $finance2=new allFunction();
                        $query=$finance2->displayFinancial();
                        foreach ($query as $data) {
                          if ($data->category == 'Pemasukan') {
                            $total = $total + $data->amount;
                          }
                        }
                        echo number_format($total,0);
                      ?>
                    </h2>
                    <p class="m-b-0">Income</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card p-30">
                <div class="media">
                  <div class="media-left meida media-middle">
                    <span><i class="fa f-s-40 color-danger demo-icon icon-fa-idr"></i></span>
                  </div>
                  <div class="media-body media-text-right">
                    <h2>
                      <?php
                        $total = 0;
                        $finance2=new allFunction();
                        $query=$finance2->displayFinancial();
                        foreach ($query as $data) {
                          if ($data->category == 'Pengeluaran') {
                            $total = $total + $data->amount;
                          }
                        }
                        echo number_format($total,0);
                      ?>
                    </h2>
                    <p class="m-b-0">Expense</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card p-30">
                <div class="media">
                  <div class="media-left meida media-middle">
                    <span><i class="fa fa-archive f-s-40 color-warning"></i></span>
                  </div>
                  <div class="media-body media-text-right">
                    <h2>25</h2>
                    <p class="m-b-0">Inbox</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="card p-30">
                <div class="media">
                  <div class="media-left meida media-middle">
                    <span><i class="fa fa-user f-s-40 color-secondary"></i></span>
                  </div>
                  <div class="media-body media-text-right">
                    <h2>
                      <?php
                        $n = 0;
                        $user = new allFunction();
                        $count = $user->countUser();
                        echo $count;
                       ?>
                     </h2>
                    <p class="m-b-0">User</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- <div class="col-lg-3">
              <div class="card bg-dark">
                <div class="testimonial-widget-one p-17">
                  <div class="testimonial-widget-one owl-carousel owl-theme">
                    <div class="item">
                      <div class="testimonial-content">
                        <img class="testimonial-author-img" src="images/avatar/2.jpg" alt="" />
                        <div class="testimonial-author">John</div>
                        <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>
                        <div class="testimonial-text">
                          <i class="fa fa-quote-left"></i>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .
                          <i class="fa fa-quote-right"></i>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimonial-content">
                        <img class="testimonial-author-img" src="images/avatar/3.jpg" alt="" />
                        <div class="testimonial-author">Abraham</div>
                        <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>
                        <div class="testimonial-text">
                            <i class="fa fa-quote-left"></i>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .
                            <i class="fa fa-quote-right"></i>
                        </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimonial-content">
                        <img class="testimonial-author-img" src="images/avatar/1.jpg" alt="" />
                        <div class="testimonial-author">Lincoln</div>
                        <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>
                          <div class="testimonial-text">
                            <i class="fa fa-quote-left"></i>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .
                            <i class="fa fa-quote-right"></i>
                          </div>
                      </div>
                    </div>
                    <div class="item">
                      <div class="testimonial-content">
                        <img class="testimonial-author-img" src="images/avatar/6.jpg" alt="" />
                        <div class="testimonial-author">TYRION LANNISTER</div>
                        <div class="testimonial-author-position">Founder-Ceo. Dell Corp</div>
                        <div class="testimonial-text">
                          <i class="fa fa-quote-left"></i>
                          Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation .
                          <i class="fa fa-quote-right"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="col-lg-12">
              <div class="card">
                <div class="card-title">
                  <h4>Recent Transaction </h4>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Description</th>
                          <th>Transaction Type</th>
                          <th>Nominal</th>
                          <th>Date</th>
                          <th>Status</th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                          $n = 1;
                          $total = 0;
                          $finance=new allFunction();
                          $query=$finance->displayFinancial();
                          foreach($query as $data){
                            if ($data->category == 'Pemasukan') {
                              $total = $total + $data->amount;
                            }
                            else {
                              $total = $total - $data->amount;
                            }
                            $formattedNum = number_format($data->amount,2);
                            $formattedDate = date('j F Y g:i:t A', strtotime($data->inputTime));
                            echo '
                              <tr>
                                <td><strong>'.$n++.'</strong></td>
                                <td><span>'.$data->name.'</span></td>
                                <td>';
                                if ($data->category == 'Pemasukan') {
                                  echo '<span class="color-success">'.$data->category.'</span></td>';
                                }
                                else {
                                  echo '<span class="color-danger">'.$data->category.'</span></td>';
                                }
                            echo '
                                <td><span> Rp. '.$formattedNum.'</span></td>
                                <td><span>'.$formattedDate.'</span></td>
                                <td>';
                                switch ($data->status) {
                                  case '1':
                                    echo '<span class="badge badge-success">Verified</span></td></tr>';
                                    break;
                                  case '2':
                                    echo '<span class="badge badge-warning">In Process</span></td></tr>';
                                    break;

                                  default:
                                    echo '<span class="badge badge-danger">Error</span></td></tr>';
                                    break;
                                }
                              }
                            echo '
                              </tbody>
                              <tfoot>
                                <tr>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td><b>TOTAL :</b></td>
                                  <td><b class="color-primary"> Rp. '.number_format($total,2).'</b></td>
                                </tr>
                              </tfoot>
                              ';
                         ?>
                        <!-- <tr>
                          <td>
                            <div class="round-img">
                              <a href=""><img src="images/avatar/4.jpg" alt=""></a>
                            </div>
                          </td>
                          <td>John Abraham</td>
                          <td><span>Pengeluaran</span></td>
                          <td><span>300000</span></td>
                          <td><span class="badge badge-success">Done</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="round-img">
                              <a href=""><img src="images/avatar/2.jpg" alt=""></a>
                            </div>
                          </td>
                          <td>John Abraham</td>
                          <td><span>Pemasukan</span></td>
                          <td><span>600000</span></td>
                          <td><span class="badge badge-success">Done</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="round-img">
                              <a href=""><img src="images/avatar/3.jpg" alt=""></a>
                            </div>
                          </td>
                          <td>John Abraham</td>
                          <td><span>Pemasukan</span></td>
                          <td><span>1000000</span></td>
                          <td><span class="badge badge-warning">Pending</span></td>
                        </tr>
                        <tr>
                          <td>
                            <div class="round-img">
                              <a href=""><img src="images/avatar/4.jpg" alt=""></a>
                            </div>
                          </td>
                          <td>John Abraham</td>
                          <td><span>Pengeluaran</span></td>
                          <td><span>200000</span></td>
                          <td><span class="badge badge-success">Done</span></td>
                        </tr> -->
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
			    <div class="col-lg-4">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">Todo</h4>
                <div class="card-content">
                  <div class="todo-list">
                    <div class="tdl-holder">
                      <div class="tdl-content">
                        <ul>
                          <li>
                            <label>
                              <input type="checkbox"><i class="bg-primary"></i><span>Build an angular app</span>
                              <a href='#' class="ti-close"></a>
                            </label>
                          </li>
                          <li>
                            <label>
                              <input type="checkbox" checked><i class="bg-success"></i><span>Creating component page</span>
                              <a href='#' class="ti-close"></a>
	                          </label>
                          </li>
                          <li>
                            <label>
                              <input type="checkbox" checked><i class="bg-warning"></i><span>Follow back those who follow you</span>
                              <a href='#' class="ti-close"></a>
	                          </label>
                          </li>
                          <li>
                            <label>
                              <input type="checkbox" checked><i class="bg-danger"></i><span>Design One page theme</span>
                          		<a href='#' class="ti-close"></a>
	                          </label>
                          </li>
                          <li>
                            <label>
                          		<input type="checkbox" checked><i class="bg-success"></i><span>Creating component page</span>
                          		<a href='#' class="ti-close"></a>
	                          </label>
                          </li>
                        </ul>
                      </div>
                      <input type="text" class="tdl-new form-control" placeholder="Type here">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End PAge Content -->
      </div>
      <!-- End Container fluid  -->

<?php

  include 'template/footer.php';

?>
