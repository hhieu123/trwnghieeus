
<?php include('head.php');?>


<?php 

$total_donhang = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `orders` ")) ['COUNT(*)']; 
$total_donhangthanhcong = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `orders` WHERE `status` = 'hoantat' ")) ['COUNT(*)']; 

$total_thanhvien = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `users` ")) ['COUNT(*)']; 
$total_thanhvienbanned = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `users` WHERE `banned` = '1' ")) ['COUNT(*)']; 
$total_tiennap = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT SUM(total_nap) FROM `users` ")) ['SUM(total_nap)']; 
$total_vnd = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT SUM(money) FROM `users` ")) ['SUM(money)']; 
$total_doanhthu = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT SUM(money) FROM `orders` ")) ['SUM(money)']; 
$total_refund = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT SUM(money) FROM `orders` WHERE `status` = 'thatbai' ")) ['SUM(money)']; 

?>


            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">Admin</h2>
                                    <button class="au-btn au-btn-icon au-btn--blue">
                                        <i class="zmdi zmdi-plus"></i>Thêm Dịch Vụ</button>
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2> <?=format_cash($total_thanhvien);?></h2>
                                                <span>các thành viên</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2> <?=format_cash($total_donhang);?></h2>
                                                <span>TỔNG ĐƠN HÀNG</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2> <?=format_cash($total_donhangthanhcong);?></h2>
                                                <span>ĐƠN HÀNG THÀNH CÔNG</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2> <?=format_cash($total_tiennap);?></h2>
                                                <span>TỔNG TIỀN NẠP</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-lg-9">
                                <h2 class="title-1 m-b-25">Lịch Sử</h2>
                                <div class="table-responsive table--no-card m-b-40">
                                    <table class="table table-borderless table-striped table-earning">
                                        <thead>
                                            <tr>
                                      <th>STT</th>
          <th>Username</th>
          <th>Content</th>
          <th>Time</th>
                                            </tr>
                                        </thead>
                                            <tbody>
<?php
$i = 0;
$A12A6 = mysqli_query($ketnoi,"SELECT * FROM `log`   ORDER BY id desc ");
while ($row1 = mysqli_fetch_array($A12A6) ) 
{?>
        <tr class="text-center">
          <td><?=$i;?> <?php $i++;?></td>
          <td><a href="edit-thanh-vien.php?username=<?=$row1['username'];?>" >
          <?=$row1['username'];?>
          </td>
          <td><?=$row1['content'];?></td>
          <td><?=$row1['createdate'];?></td>
        </tr>
<?php }?>
      </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <h2 class="title-1 m-b-25">CẬP NHẬP</h2>
                                <div class="au-card au-card--bg-blue au-card-top-countries m-b-40">
                                    <div class="au-card-inner">
                                        <div class="table-responsive">
                                            <table class="table table-top-countries">
                                                <tbody>
                                                    <tr>
                                                        <td>MÃ:</td>
                                                        <td class="text-right">56987172622</td>                                                   
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 By <a href="https://www.facebook.com/TrungHieu2k9/">Trung Hiếu</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
