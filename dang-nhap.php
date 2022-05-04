<?php include('config.php');?>
<html lang="vi">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta property="og:image" content="<?=$site_img;?>"/>
  <meta name="description" content="<?=$site_mota;?>" />
  <meta name="keywords" content="<?=$site_tukhoa;?>">
  <link rel="shortcut icon" href="<?=$site_favicon;?>" type="image/x-icon">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- plugins:css -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="/assets/css/argon-dashboard.css" rel="stylesheet" />
  <script src="/assets/js/sweetalert.min.js"></script>

<script language="JavaScript">
if (top.location != self.location)
{top.location = self.location}
</script>

  <style type="text/css">
  .btn-primary {
    color: #3c0050;
    background-color: #ffffff;
    border-color: #b400ff;
    box-shadow: 0 4px 6px rgb(50 50 93 / 11%), 0 1px 3px rgb(0 0 0 / 8%);
}
  .navbar-light .navbar-toggler-icon {
    background-image: url("data:image/svg+xml;charset=utf8,<svg viewBox='0 0 30 30' xmlns='http://www.w3.org/2000/svg'><path stroke='rgba(0, 0, 255)' stroke-width='2' stroke-linecap='round' stroke-miterlimit='10' d='M4 7h22M4 15h22M4 23h22'/></svg>");

}.nav-link {
    color: #004aff;
}
.pageloader {
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url('/img/loading.gif') 50% 50% no-repeat rgb(249, 249, 249);
  opacity: .8;
}
  .scroll-cards {
  width: 370px;
  height: 100%;
  overflow: auto;

  padding: 20px 0px 5px 0px;
}

.mail-names {
  color: grey;
  font-weight: bold;
  font-size: 15px;
  margin-left: 10px;
}

.mails {
  display: flex;
  align-items: center;
}
.mails > img {
  width: 35px;
  border-radius: 10px;
}
.mail-info {
  margin: 10px 65px;
  margin-left: 0px;
  line-height: 1.7;
  font-weight: 600;
}
.btn-primary {
    color: #fff;
    background-color: #006eff;
    border-color: #0026ff;
    box-shadow: 0 4px 6px rgb(50 50 93 / 11%), 0 1px 3px rgb(0 0 0 / 8%);
}
.btn-primary:hover {
  color: #fff;
  background-color:  <?=$site_color;?>;
  border-color: <?=$site_color;?>;
}
.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
  color: #fff;
  background-color: #006eff;;
}
.nav-pills .nav-link.active,
.nav-pills .show>.nav-link {
  color: #fff;
  background-color: #006eff;;
}
.alert-primary {
  color: #fff;
  background-color: <?=$site_color;?>;
  border-color: <?=$site_color;?>;
}.dropdown-item {
    display: block;
    width: 100%;
    padding: 0.25rem 1.5rem;
    clear: both;
    font-weight: 400;
    color: #0080ff;
    text-align: inherit;
    white-space: nowrap;
    background-color: transparent;
    border: 0;
}.nav-pills .nav-link {
    padding: 0.75rem 1rem;
    color: #0072ff;
    font-weight: 500;
    font-size: 0.875rem;
    box-shadow: 0 4px 6px rgb(50 50 93 / 11%), 0 1px 3px rgb(0 0 0 / 8%);
    background-color: #fff;
  transition: all 0.15s ease;
}.badge-default {
    color: #091428;
    background-color: #0095ff;
}.table .thead-light th {
    background-color: #f6f9fc;
    color: #ff0000;
}.btn-info:hover {
    color: #fff;
    background-color: #000000;
    border-color: #000000;
}.btn-info {
    color: #fff;
    background-color: #0072ff;
    border-color: #00d8ff;
    box-shadow: 0 4px 6px rgb(50 50 93 / 11%), 0 1px 3px rgb(0 0 0 / 8%);
}.badge-danger {
    color: #fd0032;
    background-color: rgb(255 255 255 / 50%);
}

  </style>
</head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<head>
<title>Đăng Nhập | <?=$site_tenweb;?></title>
</head>
<br>
   <br>
   <br>
   <br>
   <br>
   <br>
   <br>

   <body style=" background-color: #0892ff;background-image
:url(/img/nenchill.jpg);">
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-secondary shadow border-0">
            <div class="card-header bg-transparent pb-5">

<h2>TRANG ĐĂNG NHẬP</h2>

            <div class="card-body px-lg-5 py-lg-5" style="  height:420;">
              <div class="text-center text-muted mb-4">
                <small>VUI LÒNG NHẬP THÔNG TIN ĐỂ ĐĂNG NHẬP</small>
              </div>

<?php
if (isset($_POST["btnLogin"]))
{
  $username = check_string($_POST['username']);
  $password = check_string($_POST['password']);
  $password = md5($password);
  if (empty($username) || empty($password) ) 
  {
    echo '<script type="text/javascript">swal("Thất Bại", " Không được để trống tên đăng nhập hoặc mật khẩu", "error");</script>';
  }
  else
  {
    $query = $ketnoi->query("select * from users where username = '$username' and password = '$password' ");
    if (mysqli_num_rows($query) == 0) 
    {
      echo '<script type="text/javascript">swal("Thất Bại", " Thông tin đăng nhập không chính xác !!!", "error");</script>';
    }
    else
    {
      $_SESSION['username'] = $username;
      $ketnoi->query("UPDATE `users` SET ip =  '".$ip_address."' WHERE `username` = '".$username."'");
      $ketnoi->query("INSERT INTO `log` SET 
        `content`= 'Đăng nhập vào hệ thống!',
        `createdate` = now(),
        `username`= '".$_SESSION['username']."' ");
         echo '<script type="text/javascript">swal("Thành Công","Đăng ký tài khoản thành công","success");
      setTimeout(function(){ location.href = "/" },1000);</script>';
    }
  }
}
?> 


              <form role="form" action="" method="post">
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Tài khoản" name="username" type="text"  required="">
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-alternative">
                    <div class="input-group-prepend">
                      <span class="input-group-text"></i></span>
                    </div>
                    <input class="form-control" placeholder="Password" name="password" type="password" required="">
                  </div>
                </div>
                 <div class="mb-3">
                  <button type="submit" class="btn btn-primary d-block w-100 mt-3" name="btnLogin">ĐĂNG NHẬP</button>
              <hr>
                                                <div class="text-center"><small class="mr-25">Chưa có tài khoản?</small><a href="/dang-ky/"><small> Đăng Ký</small></a>
                                                </div>
             
             
             
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!--   Core   -->
 
  <script src="/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <!--   Optional JS   -->
  <!--   Argon JS   -->
  <script src="/assets/js/argon-dashboard.min.js?v=1.1.2"></script>
  <script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
</body>