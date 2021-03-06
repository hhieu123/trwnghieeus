
<?php include('head.php');?>
  <script src="../assets/js/sweetalert.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<br><br><br><br>



        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Đơn Hàng</h1>
          </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DANH SÁCH ĐƠN HÀNG</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table id="datatable1" class="table table-bordered table-striped">
                  <thead>                  
                    <tr>
                      <th class="text-center">STT</th>
                      <th class="text-center">CODE</th>
                      <th class="text-center">NOTE ADMIN</th>
                      <th class="text-center">USERNAME</th>
                      <th class="text-center">DỊCH VỤ</th>
                      <th class="text-center">SỐ LƯỢNG</th>
                      <th class="text-center">TỔNG TIỀN</th>
                      <th class="text-center">THỜI GIAN</th>
                      <th class="text-center">TRẠNG THÁI</th>
                      <th class="text-center">THAO TÁC</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
$i = 0;
$result = mysqli_query($ketnoi,"SELECT * FROM `orders` ORDER BY id desc limit 0, 100000");
while($row = mysqli_fetch_assoc($result))
{
?>
                    <tr>
                      <td class="text-center"><?=$i;?><?php $i++;?></td>
                      <td class="text-center"><?=$row['code'];?></td>
                      <td class="text-center"><?=$row['note_admin'];?></td>
                      <td class="text-center"><?=$row['username'];?></td>
                      <td class="text-center"><?=$row['service_name'];?></td>
                      <td class="text-center"><?=format_cash($row['amount']);?></td>
                      <td class="text-center"><?=format_cash($row['money']);?>đ</td>
                      <td class="text-center"><?=$row['createdate'];?></td>
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
                          if ($row['status'] == 'hoantat')
                          {
                            echo '<span class="badge bg-success"><font color="#fff">HOÀN TẤT</span>';
                          }
                        ?> 
                      </td>
                      <td class="text-center">
                        <a type="button" class="btn btn-default" data-toggle="modal" data-target="#modal_<?=$row['code'];?>" class="btn btn-info"><i class="fa fa-search" aria-hidden="true"></i></a>
                      </td>  
                    </tr>
<div class="modal fade" id="modal_<?=$row['code'];?>">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">THÔNG TIN ĐƠN HÀNG #<?=$row['id'];?></h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" action="" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">TÊN DỊCH VỤ</label>
                    <input type="text" class="form-control" value="<?=$row['service_name'];?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">KHÁCH HÀNG</label>
                    <input type="text" class="form-control" value="<?=$row['username'];?>" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">SỐ LƯỢNG</label>
                    <input type="text" class="form-control" value="<?=format_cash($row['amount']);?>" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">TỔNG TIỀN</label>
                    <input type="text" class="form-control" value="<?=format_cash($row['money']);?>đ" readonly="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">LINK</label>
                  <div class="input-group input-group">
                  <input type="text" class="form-control" value="<?=$row['url'];?>" readonly="">
                  <span class="input-group-append">
                    <a type="button" href="<?=$row['url'];?>" target="_blank" class="btn btn-info btn-flat">XEM NGAY</a>
                  </span>
                  </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">GHI CHÚ MEMBER</label>
                    <textarea class="form-control" readonly=""><?=$row['note'];?></textarea>
                  </div>
                  <div class="form-group">
                  <label>TRẠNG THÁI</label>
                    <select class="form-control select2bs4" name="status" style="width: 100%;">
                      <option value="<?=$row['status'];?>" >
                        <?php if($row['status'] == 'xuly') { echo 'ĐANG XỬ LÝ'; }?>
                        <?php if($row['status'] == 'hoantat') { echo 'HOÀN TẤT'; }?>
                        <?php if($row['status'] == 'thatbai') { echo 'THẤT BẠI'; }?>
                        </option>
                      <option value="hoantat">HOÀN TẤT</option>
                      <option value="thatbai">THẤT BẠI</option>
                      <option value="xuly">ĐANG XỬ LÝ</option>
                    </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">GHI CHÚ STATUS</label>
                    <textarea class="form-control" name="note_status"><?=$row['note_status'];?></textarea>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">GHI CHÚ ADMIN</label>
                    <textarea class="form-control" name="note_admin"><?=$row['note_admin'];?></textarea>
                  </div>    
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">ĐÓNG</button>
              <button type="submit" name="edit_<?=$row['code'];?>" class="btn btn-primary">LƯU</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->     

<?php
    if (isset($_POST['edit_'.$row['code']]))
    {
      $create = mysqli_query($ketnoi,"UPDATE `orders` SET 
        `status` = '".$_POST['status']."',
        `updatedate` = now(),
        `note_admin` = '".$_POST['note_admin']."',
        `note_status` = '".$_POST['note_status']."' WHERE `code` = '".$row['code']."' ");

      if ($create)
      {
        if ($_POST['status'] == 'hoantat')
        {
          $get_mail = $ketnoi->query("SELECT `mail` FROM `users` WHERE `username` = '".$row['username']."'  ")->fetch_array()['mail'];
          $guitoi = $get_mail;   
          $subject    = 'ĐƠN HÀNG #'.$row['id'].' ĐÃ HOÀN TẤT';
          $bcc = $site_tenweb;
          $hoten ='CLIENT';
          $noi_dung = 'Thông báo trạng thái đơn hàng #'.$row['id'].' của bạn đã được chạy thành công, cảm ơn bạn đã sử dụng dịch vụ của chúng tôi.';
          sendCSM($guitoi, $hoten, $subject, $noi_dung, $bcc);  

          echo '<script type="text/javascript">swal("Thành Công","LƯU THÀNH CÔNG","success");setTimeout(function(){ location.href = "" },1000);</script>'; 
        }
        else if ($_POST['status'] == 'thatbai')
        {
          mysqli_query($ketnoi,"UPDATE `users` SET
          `money`=`money`+ '".$row['money']."'
          WHERE `username`='".$row['username']."'");

          mysqli_query($ketnoi,"INSERT INTO `log` SET 
              `content`= 'Cộng ".number_format($row['money'], 0, '.', '.')." từ ".$_SESSION['admin'].", lý do Hoàn Tiền Order',
              `createdate` = now(),
              `username`= '".$row['username']."' ");

          echo '<script type="text/javascript">swal("Thành Công","ĐÃ HOÀN TIỀN CHO USER THÀNH CÔNG!","success");setTimeout(function(){ location.href = "" },2000);</script>'; 
        }
        else
        {
          echo '<script type="text/javascript">swal("Thành Công","LƯU THÀNH CÔNG","success");setTimeout(function(){ location.href = "" },1000);</script>'; 
        }
      }
      else
      {
        echo '<script type="text/javascript">swal("Thất Bại","LỖI MÁY CHỦ, VUI LÒNG LIÊN HỆ KỸ THUẬT VIÊN","error");setTimeout(function(){ location.href = "" },1000);</script>'; 
      }
    }
?>



<?php }?>
                  </tbody>
                </table>
              </div>
              </div>
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