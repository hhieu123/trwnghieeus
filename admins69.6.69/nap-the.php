
<?php include('head.php');?>
  <script src="../assets/js/sweetalert.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<br><br><br><br>

        <div class="row mb-2">
          <div class="col-sm-6">
        
          </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DANH SÁCH NẠP THẺ CÀO</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table id="datatable1" class="table table-bordered table-striped">
                  <thead>                  
                    <tr>
                      <th class="text-center">CODE</th>
                      <th class="text-center">USERNAME</th>
                      <th class="text-center">TYPE</th>
                      <th class="text-center">AMOUNT</th>
                      <th class="text-center">SERI</th>
                      <th class="text-center">PIN</th>
                      <th class="text-center">CREATE</th>
                      <th class="text-center">NOTE</th>
                      <th class="text-center">STATUS</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
$result = mysqli_query($ketnoi,"SELECT * FROM `card` ORDER BY id desc limit 0, 100000");
while($row = mysqli_fetch_assoc($result))
{
?>
                    <tr>
                      <td class="text-center"><?=$row['code'];?></td>
                      <td class="text-center"><?=$row['username'];?></td>
                      <td class="text-center"><?=$row['type'];?></td>
                      <td class="text-center"><?=$row['amount'];?></td>
                      <td class="text-center"><?=$row['seri'];?></td>
                      <td class="text-center"><?=$row['pin'];?></td>
                      <td class="text-center"><?=$row['createdate'];?></td>
                      <td class="text-center"><?=$row['note'];?></td>
                      <td class="text-center">
                        <?php
                          if ($row['status'] == 'xuly')
                          {
                            echo '<span class="badge bg-primary"><font color="#fff">ĐANG XỬ LÝ</span>';
                          }
                          if ($row['status'] == 'thatbai')
                          {
                            echo '<span class="badge bg-danger"><font color="#fff">THẤT BẠI</span>';
                          }
                          if ($row['status'] == 'thanhcong')
                          {
                            echo '<span class="badge bg-success"><font color="#fff">THÀNH CÔNG</span>';
                          }
                        ?>
                        
                      </td>
                    </tr>
<?php }?>
                  </tbody>
                </table>
              </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row (main row) -->
     

</div></div></div></div></div></div></div></div></div></div></div></div>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>                <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2020 By<a href="https://www.facebook.com/TrungHieu2k9/">Trung Hiếu</a></p>
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
<?php include('foot.php');?>