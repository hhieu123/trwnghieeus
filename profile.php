<?php include('head.php');?>
<head>
<title>Profile | <?=$site_tenweb;?></title>
</head>
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

  </style><script>
$(function() {
    $("#datatable1").DataTable({
        "responsive": false,
        "autoWidth": false,
    });
});
</script>
<!--<script src="/assets/js/plugins/jquery/dist/jquery.min.js"></script> Ẩn vì Loading không thích :(-->
<script src="/assets/js/plugins/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--   Optional JS   -->
<script src="/assets/js/plugins/chart.js/dist/Chart.min.js"></script>
<script src="/assets/js/plugins/chart.js/dist/Chart.extension.js"></script>
<!--   Argon JS   -->
<script src="/assets/js/argon-dashboard.min.js?v=1.1.2"></script>
<script src="https://cdn.trackjs.com/agent/v3/latest/t.js"></script>
<script src="/admin/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/admin/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<link rel="stylesheet" href="/admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<!-- Clipboard -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.6/clipboard.min.js"></script>
<script>
new ClipboardJS('.copy');
</script>
<script type="text/javascript">
$(window).load(function() {
    $(".pageloader").fadeOut("slow");
});

</head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<body id="app-container" class="menu-default show-spinner"><nav class="navbar fixed-top"> <div class="d-flex align-items-center navbar-left"><a href="#" class="menu-button d-none d-md-block"><svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17"><rect x="0.48" y="0.5" width="7" height="1" /><rect x="0.48" y="7.5" width="7" height="1" /><rect x="0.48" y="15.5" width="7" height="1" /></svg><svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17"><rect x="1.56" y="0.5" width="16" height="1" /><rect x="1.56" y="7.5" width="16" height="1" /><rect x="1.56" y="15.5" width="16" height="1" /></svg> </a><a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17"><rect x="0.5" y="0.5" width="25" height="1" /><rect x="0.5" y="7.5" width="25" height="1" /><rect x="0.5" y="15.5" width="25" height="1" /></svg></a><div class="search" data-search-path="Layouts.Search.html?q="><input placeholder="Search..."><span class="search-icon"><i class="simple-icon-magnifier"></i></span></div></div><a class="navbar-logo" href="/"><span class="logo d-none d-xs-block"></span><span class="logo-mobile d-block d-xs-none"></span></a><div class="navbar-right"><div class="header-icons d-inline-block align-middle"><a class="btn btn-sm btn-outline-primary mr-2 d-none d-md-inline-block mb-2" href="https://www.facebook.com/V%C6%B0%C6%A1ng-Thanh-T%C3%B9ng-106376518212154">&nbsp;BUY&nbsp;</a><div class="position-relative d-none d-sm-inline-block"><button class="header-icon btn btn-empty" type="button" id="iconMenuButton" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false"><i class="simple-icon-grid"></i></button><div class="dropdown-menu dropdown-menu-right mt-3  position-absolute" id="iconMenuDropdown"><a href="#" class="icon-menu-item"><i class="iconsmind-Equalizer d-block"></i><span>Setting</span></a><a href="/thong-tin/" class="icon-menu-item"><i class="iconsmind-MaleFemale d-block"></i>
                            <span>Users</span>
                        </a>

                        <a href="facebook.com/TrungHieu2k9/" class="icon-menu-item">
                            <i class="iconsmind-Puzzle d-block"></i>
                            <span>Hỗ Trợ</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-Bar-Chart d-block"></i>
                            <span>Profits</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-File-Chart d-block"></i>
                            <span>Surveys</span>
                        </a>

                        <a href="#" class="icon-menu-item">
                            <i class="iconsmind-Suitcase d-block"></i>
                            <span>Tasks</span>
                        </a>

                    </div>
                </div>

                

                <button class="header-icon btn btn-empty d-none d-sm-inline-block" type="button" id="fullScreenButton">
                    <i class="simple-icon-size-fullscreen"></i>
                    <i class="simple-icon-size-actual"></i>
                </button>

            </div>

            <div class="user d-inline">
      
              <?php if(isset($_SESSION['username'])){?>
            
            
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name"><?=$my_username;?> - <font style="color: <?=$site_color;?>;"><?=format_cash($my_vnd);?></font></span>
                      

                    <span>
                        <img alt="Profile Picture" src="https://uphinh.vn/images/2021/08/24/4836d24806669908a9e00fdebe362228.png" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="/profile.php"><i class="iconsmind-User"></i> Tài Khoản</a>
                    <a class="dropdown-item" href="/nap-tien/"><i class="iconsmind-Dollar"></i> Nạp Tiền</a>
                    <a class="dropdown-item" href="/lich-su.php"><i class="iconsmind-Clock"></i> Lịch Sử</a>
                    <a class="dropdown-item" href="https://www.facebook.com/TrungHieu2k9/"><i class="iconsmind-Phone"></i> Hỗ Trợ</a>
                    <a class="dropdown-item" href="/dang-xuat/"><i class="iconsmind-User"></i> Đăng Xuất</a>  
                    
                    
                    
                    
                    
                    
                    <?php } else { ?>

            
            
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name"> Tài Khoản</span>
                    <span>
                        <img alt="Profile Picture" src="<?=$my_avt;?>" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="/dang-nhap/"><i class="iconsmind-MaleFemale"></i> Đăng nhập</a>
                    <a class="dropdown-item" href="/dang-ky/"><i class="iconsmind-User"></i> Đăng ký</a>
       
                              <?php }?>
                </div>
            </div>
        </div>
    </nav>
    <div class="sidebar">
        <div class="main-menu">
            <div class="scroll">
                <ul class="list-unstyled">
                  
                        <a href="#dashboard"><li class="active">
                            <i class="iconsmind-Shop-4"></i>
                            <span>Dashboards</span>
                        </a>
                    </li>
                 <li>
                        <a href="#menu"> 
                        <i class="iconsmind-Dollar"></i>
                        Nạp Tiền
                        </a>

                    <li>
                        <a href="#layouts">  
                        <i class="iconsmind-Facebook"></i>
                        <span>Facebook</span>
                        </a>
                    </li>
                    <li>
                        <a href="#landingPage">
                        <i class="iconsmind-Cloud"></i>  
                         <span>Tik Tok</span>
                        </a>
                    </li>
                    
                     <li>
                        <a href="#menu2">
                        <i class="iconsmind-Instagram"></i>
                         <span>Instargram</span>
                        </a>
                    </li> 
                                <li>
                        <a href="#menu3">
                        <i class="iconsmind-Bar-Chart d-block"></i>
                         <span>Khác</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="sub-menu">
            <div class="scroll">
                <ul class="list-unstyled" data-link="dashboard">
                    <li class="active" >
                        <a href="/">
                            <i class="simple-icon-home"></i>Trang Chủ
                        </a>
                    </li>
                    <li>
                        <a href="/profile.php">
                         <i class="simple-icon-user"></i> Tài Khoản 
                        </a>
                    </li>
                    <li>
                    	       <a href="/lich-su.php">                       	
                              <i class="iconsmind-Clock"></i>Lịch Sử</a>
                    </li>
                    <li>
                        <a href="#">                       	
                              <i class="iconsmind-Phone"></i>Hỗ Trợ <span class="badge badge-pill badge-outline-primary float-right mr-4">FB</span></a>
                    </li>
                    <li>
                        <a href="/api/">
                             <i class="simple-icon-rocket"></i> Tích Hợp Api<span class="badge badge-pill badge-outline-primary float-right mr-4">[ON]</span>
                        
                        </a>
                    </li>
                </ul>

                 <ul class="list-unstyled" data-link="layouts">
            <li class="active">
                        <a href="/tt.php?id=dich-vu-followfb">
                          <i class="iconsmind-MaleFemale"></i>Tăng Theo Dõi</a>
                 
                        </li>
                    
                    <li>
                         <a href="/tt.php?id=dich-vu-like">
                           <i class="simple-icon-like"></i>Tăng Like Bài Viết</a>
                        </li>
                    
                    <li>
                         <a href="/tt.php?id=dich-vu-likepage">
                           <i class="simple-icon-like"></i>Tăng Like Page</a>
                        </li>
                    
                    <li>
                         <a href="/tt.php?id=dich-vu-share">
                           <i class="simple-icon-share"></i>Tăng Share </a>
                        </li>
                    
                    <li>
                         <a href="/tt.php?id=dich-vu-comment">
                           <i class="iconsmind-Book"></i>Tăng Comment </a>
                        </li>
                    
                    <li>
                         <a href="/tt.php?id=dich-vu-groud">
                           <i class="simple-icon-user"></i>Tăng Men Groud </a>
                                 </li>
                    
                    <li>
                         <a href="/tt.php?id=dich-vu-eyestr">
                           <i class="iconsmind-Eye"></i>Tăng Mắt Story</a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="landingPage">
            <li class="active">
                        <a href="/tt.php?id=dich-vu-timtiktok">
                           <i class="iconsmind-Heart"></i>Tăng Tim</a>
                    </li>
                    
                    <li>
                         <a href="/tt.php?id=dich-vu-fltiktok">
                           <i class="iconsmind-MaleFemale"></i>Tăng Follow</a>
                                 </li>
                    
                    <li>
                         <a href="/tt.php?id=dich-vu-eyetiktok">
                           <i class="iconsmind-Eye"></i>Tăng Lượt Xem</a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="menu">
                  <li class="active">
                        
                        <a href="/nap-tien">
                              <i class="iconsmind-Dollar"></i>Nạp Tiền<span class="badge badge-pill badge-outline-primary float-right mr-4">AUTO</span></a>
                    </li>
                    
                    <li>
                        <a href="#">
                        	<i class="iconsmind-Phone"
                          ></i>Hướng Dẫn</span
></a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="menu3">
                  <li class="active">
                        
                        <a href="/tt.php?id=dich-vu-dame">
                              <i class="iconsmind-MaleFemale"></i>Dame Facebook<span class="badge badge-pill badge-outline-primary float-right mr-4">Bảo Trì</span></a>
                    </li>
                    
                    <li>
                          <a href="/tt.php?id=dich-vu-flig">
                              <i class="iconsmind-MaleFemale"></i>Unlock Facebook<span class="badge badge-pill badge-outline-primary float-right mr-4">Bảo Trì</span></a> 
       
</li>
                </ul>
                
                
                
                
                
                
                
                
                
                
                
                
            </div>
        </div>
    </div>


<main><div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
<div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-danger">
          
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Thông Báo</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            
            <div class="modal-body">
              
                <div class="py-3 text-center">
                    <i class="ni ni-bell-55 ni-3x"></i>
                    <p><?=$site_thongbao;?></p>
                </div>
                
            </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Đóng</button>
            </div>
            
        </div>
    </div>
</div>


<div class="pageloader"></div>





<?php
if (isset($_POST["btnChangePass"]) && isset($_SESSION['username'])) 
{
  $password = md5(check_string($_POST['password']));
  $newpassword = md5(check_string($_POST['newpassword']));
  $renewpassword = md5(check_string($_POST['renewpassword']));

  if (empty($password) || empty($newpassword) || empty($renewpassword))
  {
    echo '<script type="text/javascript">swal("Thất Bại", "Vui lòng nhập dữ liệu vào ô !", "error");</script>';
  }
  else if ($password != $my_password)
  {
    echo '<script type="text/javascript">swal("Thất Bại", "Mật khẩu hiện tại không đúng !", "error");</script>';
  }
  else if ($newpassword != $renewpassword)
  {
    echo '<script type="text/javascript">swal("Thất Bại", "Xác nhận mật khẩu không đúng !", "error");</script>';
  }
  else 
  {
    $create = $ketnoi->query("UPDATE users SET password = '$newpassword' WHERE username = '$my_username' ");
    if ($create)
    {
      echo '<script type="text/javascript">swal("Thành Công", "Thay đổi mật khẩu thành công !", "success");
        setTimeout(function(){ location.href = "" },1000);</script>';
      die();
    }
    else
    {
      echo '<script type="text/javascript">swal("Thất Bại", "Không thể kết nối DATABASE !", "error");</script>';
    }
  }
}
?>

<div class="container-fluid">
<div class="row">
<div class="col-12">
<h1 class="text-uppercase font-weight-bold">Tài khoản</h1>
<div class="separator mb-5"></div>
</div>
</div>
<div class="card">
<div class="card-body">
<div class="row">
<div class="col-md-8 mb-5">
<div class="box box-outline-success mb-4">

<input type="hidden" name="_token" value="JX5rqDzO8SFb5IaNqYtXxEayIXtD7d7fKjnCcdzK">
<input type="hidden" name="id" value="44718">
<div class="box-body">
<div class="form-group">
<label for="inputName">Tên Tài Khoản</label>
<input type="text" disabled name="username" id="inputName" value="<?=$my_username;?>" class="form-control rounded-10">
</div> <form enctype="multipart/form-data" action="" method="post">
<div class="form-group">
<label for="input-username" >Mật khẩu cũ</label>
<input type="password" name="password" class="form-control rounded-10" placeholder="">
</div>
<div class="form-group">
<label for="input-username">Mật khẩu mới</label>
<input type="password" name="newpassword" class="form-control rounded-10">
</div>
<div class="form-group">
<label for="input-username">Nhập lại mật khẩu mới</label>
<input type="password" name="renewpassword" class="form-control rounded-10">
</div>
<div class="form-group row">

<div class="ml-auto col-sm">
<div class="checkbox custom-control custom-checkbox">
<input type="checkbox" class="custom-control-input" id="basic_checkbox_1" checked="">
<label for="basic_checkbox_1" class="custom-control-label"> Tôi đồng
ý</label> &nbsp;&nbsp;&nbsp;&nbsp;
<a href="#" class="change-info ">Thay đổi thông tin</a>
</div>

</div>
</div>
</div>
<div class="box-footer text-center"><hr class="my-4" />
<button ttype="submit" name="btnChangePass"  class="btn btn-primary w-100 d-block rounded-10">Lưu thông
tin
</button>
</div>
</form>
</div>
</div>
<div class=" col-md-4 ">
<div class="card bg-warning border-10">
<div class="card-body">
<h6 class="mb-0 text-center">
<a href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link waves-effect waves-dark profile-pic">
<img src="<?=$my_avt;?>" class="w-25 rounded-circle" alt="avatar">
</a>
</h6>
<h6 class="mb-0 text-center font-weight-bold font-size-19"><?=$my_username;?></h6>
<h6 class="mb-0 text-center font-size-14"> Khách hàng </h6>
<h6 class="text-center font-weight-bold font-size-19  pb-4">  <?=format_cash($my_vnd);?> </h6>
<h6> Email: <span class="ml-4"><?=$my_mail;?></span></h6>
<h6> Phone: <span class="ml-3"><?=$my_phone;?></span>
</h6>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</main>
<script>     
function readURL(input)
{
  if (input.files && input.files[0])
  {
      var reader = new FileReader();
      reader.onload = function (e)
      {
          $('#blah').attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
  }
}
</script>
<?php if(!isset($_SESSION['username']))
{
    echo '<script type="text/javascript">swal("Thất Bại", "Vui lòng đăng nhập để tiếp tục.", "error");
        setTimeout(function(){ location.href = "/dang-nhap/" },100);</script>';
    die();
}
?>
<?php include('foot.php');?>          