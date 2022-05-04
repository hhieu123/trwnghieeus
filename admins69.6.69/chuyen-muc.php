<script src="../assets/js/sweetalert.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<br><br><br><br>
<?php include('head.php');?>
<?php include('nav.php');?>

<?php
if (isset($_GET['delete'])) 
{
    $delete = $_GET['delete'];

    $create = mysqli_query($ketnoi,"DELETE FROM `category` WHERE `id` = '".$delete."' ");

    if ($create)
    {
      echo '<script type="text/javascript">swal("Thành Công","Xóa thành công","success");setTimeout(function(){ location.href = "chuyen-muc.php" },500);</script>'; 
    }
    else
    {
      echo '<script type="text/javascript">swal("Lỗi","Lỗi máy chủ","error");setTimeout(function(){ location.href = "chuyen-muc.php" },1000);</script>'; 
    }
}
?>
<?php
if (isset($_POST["submit"]) && isset($_SESSION["admin"]))
{
    
    $name = check_string($_POST['name']);
    $code = xoadau($name);
    $create = mysqli_query($ketnoi,"INSERT INTO `category` SET 
    `name` = '".$name."',
    `code` = '".$code."',
    `note` = '".$_POST['note']."'  ");
    if(check_img('img') == true)
    {
      $uploads_dir = '../upload/';
      $tmp_name = $_FILES['img']['tmp_name'];
      $create = move_uploaded_file($tmp_name, "$uploads_dir/$code.png");
      if($create)
      {
        $link_logo = 'upload/'.$code.'.png';
        $ketnoi->query("UPDATE category SET img = '$link_logo' WHERE code = '$code' ");
      }
    }
    if ($create)
    {
      echo '<script type="text/javascript">swal("Thành Công","Tạo thành công","success");setTimeout(function(){ location.href = "" },1000);</script>'; 
    }
    else
    {
      echo '<script type="text/javascript">swal("Lỗi","Lỗi máy chủ","error");setTimeout(function(){ location.href = "" },1000);</script>'; 
    }
}

?>


        <div class="row mb-2">
          <div class="col-sm-6">
     
          </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">DANH SÁCH THỂ LOẠI</h3>
                <div class="text-right">
                <a type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default" class="btn btn-info">TẠO CHUYÊN MỤC</a>
              </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="table-responsive">
                <table id="datatable1" class="table table-bordered table-striped">
                  <thead>                  
                    <tr>
                      <th style="width: 10px">ID</th>
                      <th class="text-center">NAME</th>
                      <th class="text-center">THAO TÁC</th>
                    </tr>
                  </thead>
                  <tbody>
<?php
$result = mysqli_query($ketnoi,"SELECT * FROM `category` ORDER BY id desc limit 0, 100000");
while($row = mysqli_fetch_assoc($result))
{
?>
                    <tr>
                      <td class="text-center"><?=$row['id'];?></td>
                      <td class="text-center"><?=$row['name'];?></td>
                      <td class="text-center">
             
                        <a href="chuyen-muc.php?delete=<?=$row['id'];?>" class="btn btn-default">
                          <i class="fas fa-trash"></i> Delete
                        </a>
                      </td>  
                    </tr>
<?php }?>
                  </tbody>
                </table>
              </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                VUI LÒNG THAO TÁC CẨN THẬN
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row (main row) -->

<div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">TẠO CHUYÊN MỤC</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form role="form" enctype="multipart/form-data" action="" method="post">
                  <div class="form-group">
                    <label for="exampleInputEmail1">TÊN CHUYÊN MỤC:</label>
                    <input type="text" class="form-control" name="name"  placeholder="Tên thể loại cần tạo" required="">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">ICON CHUYÊN MỤC:</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="img" accept="image/*">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">CHÚ Ý CHUYÊN MỤC:</label>
                    <textarea class="textarea" name="note" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                  </div>      
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">ĐÓNG</button>
              <button type="submit" name="submit" class="btn btn-primary">TẠO NGAY</button>
            </div>
            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->  
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script> 

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