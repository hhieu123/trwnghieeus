
<?php include('head.php');?>
  <script src="../assets/js/sweetalert.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<br><br><br><br>
<body class="hold-transition sidebar-mini layout-fixed">


<?php
if (isset($_POST["btnSave"]) && isset($_SESSION["admin"]))
{
  if (check_img('logo') == true)
  {
    $uploads_dir = '../upload/';
    $tmp_name = $_FILES['logo']['tmp_name'];
    $create = move_uploaded_file($tmp_name, "$uploads_dir/logo.png");
    if($create)
    {
      $ketnoi->query("UPDATE setting SET logo = '/upload/logo.png' ");
    }
  }
  if (check_img('site_logo1') == true)
  {
    $uploads_dir = '../upload/';
    $tmp_name = $_FILES['site_logo1']['tmp_name'];
    $create = move_uploaded_file($tmp_name, "$uploads_dir/Logo1.png");
    if($create)
    {
      $ketnoi->query("UPDATE setting SET site_logo1 = '/upload/Logo1.png' ");
    }
  }
  if (check_img('site_favicon') == true)
  {
    $uploads_dir = '../upload/';
    $tmp_name = $_FILES['site_favicon']['tmp_name'];
    $create = move_uploaded_file($tmp_name, "$uploads_dir/favicon.png");
    if($create)
    {
      $ketnoi->query("UPDATE setting SET site_favicon = '/upload/favicon.png' ");
    }
  }
  if (check_img('site_img') == true)
  {
    $uploads_dir = '../upload/';
    $tmp_name = $_FILES['site_img']['tmp_name'];
    $create = move_uploaded_file($tmp_name, "$uploads_dir/thumb.png");
    if($create)
    {
      $ketnoi->query("UPDATE setting SET site_img = '/upload/thumb.png' ");
    }
  }
  if (check_img('bg_login') == true)
  {
    $uploads_dir = '../upload/';
    $tmp_name = $_FILES['bg_login']['tmp_name'];
    $create = move_uploaded_file($tmp_name, "$uploads_dir/bgLogin.png");
    if($create)
    {
      $ketnoi->query("UPDATE setting SET bg_login = '/upload/bgLogin.png' ");
    }
  }
  $create = mysqli_query($ketnoi,"UPDATE `setting` SET 
    `site_color_nav` = '".$_POST['site_color_nav']."',
    `MEMO_PREFIX` = '".$_POST['MEMO_PREFIX']."',
    `site_gmail` = '".$_POST['site_gmail']."',
    `tenweb` = '".$_POST['tenweb']."',
    `mota` = '".$_POST['mota']."',
    `baotri` = '".$_POST['baotri']."',
    `status_top` = '".$_POST['status_top']."',
    `status_order` = '".$_POST['status_order']."',
    `id_fb` = '".$_POST['idfb']."',
    `api` = '".$_POST['api']."',
    `thong_bao_chay` = '".$_POST['thong_bao_chay']."',
    `text_nap_tien` = '".$_POST['text_nap_tien']."',
    `cookie` = '".$_POST['cookie']."',
    `currency` = '".$_POST['currency']."',
    `ck_nap_the` = '".$_POST['ck_nap_the']."',
    `color` = '".$_POST['color']."',
    `color1` = '".$_POST['color']."',
    `thongbao` = '".$_POST['thongbao']."',
    `tukhoa` = '".$_POST['tukhoa']."' ");

  if ($create)
  {
    echo '<script type="text/javascript">swal("Thành Công","Lưu thành công","success");setTimeout(function(){ location.href = "" },1000);</script>'; 
  }
  else
  {
    echo '<script type="text/javascript">swal("Lỗi","Lỗi máy chủ","error");setTimeout(function(){ location.href = "" },1000);</script>'; 
  }
}

?>


<div class="row">




<div class="col-lg-6">
<div class="card">
<div class="card-header">
<strong><font style="vertical-align: inherit;"></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhóm
 </font><strong><font style="vertical-align: inherit;">SETIING CHUNG</font></strong></font></div>
<div class="card-body card-block">
<form enctype="multipart/form-data" action="" method="post">
<div class="row form-group">
<div class="col col-md-12">
<div class="input-group">
 <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">TÊN WEB</label>
                      <input type="text" class="form-control" name="tenweb" value="<?=$site_tenweb;?>"  >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">MÔ TẢ</label>
                      <input type="text" class="form-control" name="mota" value="<?=$site_mota;?>"  >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">TỪ KHÓA</label>
                      <input type="text" class="form-control" name="tukhoa" value="<?=$site_tukhoa;?>"  >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">API CARD24H.COM</label>
                      <input type="text" class="form-control" name="api" value="<?=$site_api;?>"  >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">ID FB ADMIN</label>
                      <input type="text" class="form-control" name="idfb" value="<?=$site_idfb;?>"  >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">GMAIL ADMIN</label>
                      <input type="text" class="form-control" name="site_gmail" value="<?=$site_gmail;?>"  >
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <label for="exampleInputEmail1">COOKIE BOT</label>
                      <textarea class="form-control"  name="cookie"><?=$site_cookie;?></textarea>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputEmail1">CHIẾT KHẤU NẠP THẺ</label>
                    <input type="text" class="form-control" name="ck_nap_the" value="<?=$site_ck_nap_the;?>"  >
                  </div>
             &ensp;  &ensp; <div class="form-group">
                  <label>BẢO TRÌ</label>
                    <select class="form-control select2bs4" name="baotri" style="width: 100%;">
                      <option value="<?=$site_baotri;?>" ><?=$site_baotri;?></option>
                      <option value="ON">ON</option>
                      <option value="OFF">OFF</option>
                    </select>
                  </div>
&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;&ensp;
                

                  <div class="form-group">
                  <label> ORDER</label>
                    <select class="form-control select2bs4" name="status_order" style="width: 100%;">
                      <option value="<?=$site_status_order;?>" ><?=$site_status_order;?></option>
                      <option value="ON">ON</option>
                      <option value="OFF">OFF</option>
                    </select>
                  </div>
              </div>
              <div class="col-md-6">
                
       
 
                    
                <div class="form-group">
                    <label for="exampleInputEmail1">Text Nạp Tiền</label>
                    <textarea class="textarea" name="text_nap_tien" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=$site_text_nap_tien;?></textarea>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Thông Báo</label>
                  <textarea class="textarea" name="thongbao" placeholder="Place some text here"
                        style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?=$site_thongbao;?></textarea>
                </div>
                
                  


 </div>
<div class="card-footer">
<button name="btnSave" type="submit" class="btn btn-success btn-sm">
<i class="fa fa-dot-circle-o"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Gửi đi
</font></font></button>
<button type="reset" class="btn btn-danger btn-sm">
<i class="fa fa-ban"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Cài lại
</font></font></button>
</div>
</div>
</div></form>






</div></div></div></div></div></div></div></div></div></div></div></div>
<script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();
});
</script>                <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2022 By<a href="https://www.facebook.com/TrungHieu2k9/">Trung Hiếu</a></p>
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