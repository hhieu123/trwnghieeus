<?php include('head.php');?>

<head>
    <title>Nạp Tiền | <?=$site_tenweb;?></title>
</head>
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
                    <a class="dropdown-item" href="https://facebook.com/TrungHieu2k9/"><i class="iconsmind-Phone"></i> Hỗ Trợ</a>
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









<main>
<div class="container-fluid">
<div class="row">
<div class="col-12">
<h1 class="text-uppercase font-weight-bold">Nạp tiền</h1>
<div class="separator mb-5"></div>
</div>
</div>
<div class="card">
<div class="card-header">
<ul class="nav nav-tabs mb-3" role="tablist">
<li class="nav-item">
<a class="nav-link active" id="home-tab" data-toggle="tab" href="#order" role="tab" aria-controls="order" aria-selected="true">Thẻ Cào (30%)</a>
</li>

<li class="nav-item">
<a class="nav-link" id="contact-tab" data-toggle="tab" href="#run" role="tab" aria-controls="run" onclick="showWarning('Chú ý','Vui lòng nạp đúng cú pháp để tự động cộng tiền. Nạp sai cú pháp sẽ trừ phí')" aria-selected="false">Chuyển
khoản</a>
</li>
</ul>
</div>
<div class="card-body">
<div class="tab-content">
<div class="tab-pane fade show active" id="order" role="tabpanel" aria-labelledby="home-tab">
<div class="row">
<div class="col-md-4">
<div class="p-15">
<form method="POST" action="" accept-charset="UTF-8">
<div class="box-body">
<div class="form-group">
<label class="font-weight-bold">Nhà mạng</label>
                  <select class="form-control form-control-alternative" name="loaithe" id="loaithe" required>
                                <option value="">Chọn loại thẻ *</option>
                                <option value="Viettel">Viettel</option>
                                <option value="Vinaphone">Vinaphone</option>
                                <option value="Mobifone">Mobifone</option>
                                <option value="Zing">Zing</option>
                                <option value="Vietnamobile">Vietnamobile</option>
                            </select>
</div>
<div class="form-group">
<label class="font-weight-bold">Mệnh giá ( Chiết Khấu 30% )</label>
  <select class="form-control form-control-alternative" name="menhgia" id="menhgia" required>
                                <option value="">Chọn mệnh giá ( Chú Ý Chiết Khấu )*</option>
                                <option value="10000">10.000</option>
                                <option value="20000">20.000</option>
                                <option value="30000">30.000</option>
                                <option value="50000">50.000</option>
                                <option value="100000">100.000</option>
                                <option value="200000">200.000</option>
                                <option value="300000">300.000</option>
                                <option value="500000">500.000</option>
                                <option value="1000000">1.000.000</option>
                            </select>

</div>
<div class="form-group">
<label class="font-weight-bold">Số seri</label>
  <input type="text" class="form-control form-control-alternative" name="seri" required="">
<option value="">Ghi Số Seri*</option>
</div>
<div class="form-group">
<label class="font-weight-bold">Mã thẻ</label>
 <input type="text" class="form-control form-control-alternative" name="pin" required="">
<option value="">Ghi Mã Thẻ*</option>
</div>
</div>
<div class="box-footer mt-3">
<button name="submit_napthe"  type="submit" class="btn mt-3 rounded-10 btn-dark fw-bold w-100"> Nạp thẻ

</button>
</div>
</form>
</div>
</div>
<div class="col-md-8">
<div class="p-15">
<div class="table-responsive">
<table id="datatable1" class="table">
<thead>
   <th scope="col">STT</th>
                                    <th scope="col">LOẠI THẺ</th>
                                    <th scope="col">MỆNH GIÁ</th>
                                    <th scope="col">THỰC NHẬN</th>
                                    <th scope="col">SERI/PIN</th>
                                    <th scope="col">TRẠNG THÁI</th>
                                    <th scope="col">GHI CHÚ</th>
                                    <th scope="col"></th>

</thead>
<tbody>
</tbody>
</table>                                <?php
$i = 0;
$result = mysqli_query($ketnoi,"SELECT * FROM `card` WHERE `username` = '".$my_username."' ORDER BY id desc limit 0, 100");
while($row = mysqli_fetch_assoc($result))
{
?>
                                <tr class="text-center">
                                    <td><?=$i;?> <?php $i++; ?></td>
                                    <td><?=$row['type'];?></td>
                                    <td>
                                        <?=format_cash($row['amount']);?>đ
                                    </td>
                                    <td>
                                        <?=format_cash($row['thucnhan']);?>đ
                                    </td>
                                    <td>
                                        <?=$row['seri'];?> / <?=$row['pin'];?>
                                    </td>
                                    <td>
                                        <?=status($row['status']);?>
                                    </td>
                                    <td>
                                        <?=$row['note'];?>
                                    </td>
                                </tr>
                                <?php }?>
                            </tbody>
                        </table>
</div>
</div>
</div>

</div>
</div>
<div class="tab-pane fade" id="run" role="tabpanel" aria-labelledby="contact-tab">
<div class="row">
<div class="col-md-8">
<h6 class="mb-3">Tỷ giá: 1 VND = 1 vnđ</h6>
<h6 class="mb-3"><span style="color: red;">Chú ý</span> Vui lòng chuyển đúng cú pháp
để hệ thống tự động cộng tiền. Nếu sai cú pháp mất thời gian + mất phí nha.</h6>
<div class="form-group row">
<div class="col-md-4">
<div class="car badge-success mb-4 rounded-10">
<div class="card-body">
<div class="d-flex justify-content-between">
<div class="d-flex font-19">
<i class="fas fa-wallet mr-2"></i>
<h6 class="mb-0 font-19">Số tiền hiện có</h6>
</div>
<h6 class="font-19 mb-0 "><?=format_cash($my_vnd);?>  vnđ</h6>
</div>
</div>
</div>
<div class="car badge-success mb-4 rounded-10">
<div class="card-body">
<div class="d-flex justify-content-between">
<div class="d-flex font-19">
<i class="fas fa-sign-in-alt mr-2"></i>
<h6 class="mb-0 font-19">Số tiền đã nạp</h6>
</div>
<h6 class="font-19 mb-0 "><?=format_cash($my_total_nap);?> vnđ</h6>
</div>
</div>
</div>
<div class="car badge-success rounded-10">
<div class="card-body">
<h6 class="font-weight-bold">Hướng dẫn nạp tiền: </h6>
<h6>Liên hệ admin</h6>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- plugins:css -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="/assets/js/plugins/nucleo/css/nucleo.css" rel="stylesheet" />
  <link href="/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="/assets/css/argon-dashboard.css" rel="stylesheet" />
  <script src="/assets/js/sweetalert.min.js"></script> <?php

if(isset($_POST["submit_napthe"])) 
{
  if(isset($_SESSION['username']))
  {
    $loaithe = check_string($_POST['loaithe']);
    $menhgia = check_string($_POST['menhgia']);
    $seri = check_string($_POST['seri']);
    $pin = check_string($_POST['pin']);
    $code = random('qwertyuiopasdfghjklzxcvbnm1234567890QWERTYUIOPASDFGHJKLZXCVBNM', 12);

    $thucnhandoithe = $menhgia - $menhgia * $site_ck_nap_the / 100;

    if (strlen($seri) < 5 || strlen($pin) < 5)
    {
        echo '<script type="text/javascript">swal("Thất Bại","Mã thẻ hoặc seri không đúng định dạng!","error");</script>';
    }
    else
    {
        $json = json_decode(curl_get('https://card24h.com/api/card-auto.php?auto=true&type='.$loaithe.'&menhgia='.$menhgia.'&seri='.$seri.'&pin='.$pin.'&APIKey='.$site_api.'&callback='.$site_callback.'&content='.$code), true);
        if (isset($json['data']))
        {
            if ($json['data']['status'] == 'error')
            {
                echo '<script type="text/javascript">swal("Thất Bại","'.$json['data']['msg'].'","error");</script>';
            }
            else if ($json['data']['status'] == 'success')
            {
              $create = mysqli_query($ketnoi,"INSERT INTO `card` SET
              `username` = '".$my_username."',
              `code` = '".$code."',
              `type` = '".$loaithe."',
              `amount` = '".$menhgia."',
              `thucnhan` = '".$thucnhandoithe."',
              `seri` = '".$seri."',
              `pin` = '".$pin."',
              `status` = 'xuly',
              `createdate` = now() ");
              die('<script type="text/javascript">swal("Thành Công","'.$json['data']['msg'].'","success");setTimeout(function(){ location.href = "" },1000);</script>');
            }
        }
    }
  }
  else
  {
    die('<script type="text/javascript">swal("Thất Bại", "Vui lòng đăng nhập để tiếp tục", "error");setTimeout(function(){ location.href = "/dang-nhap/" },1000);</script>');
  }
}
?> <script>
    function myFunction() {
        var copyText = document.getElementById("myInput");
        copyText.select();
        copyText.setSelectionRange(0, 99999);
        document.execCommand("copy");

        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Copied: " + copyText.value;
    }

    function outFunc() {
        var tooltip = document.getElementById("myTooltip");
        tooltip.innerHTML = "Copy to clipboard";
    }
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script type="text/javascript">
    $('#menhgia').on('change', function() {
        var menhgia = $('#menhgia').val();
        var ck = <?=$site_ck_nap_the;?>;
        var ketqua = menhgia - menhgia * ck / 100;
        $('#ketqua').html(ketqua.toString().replace(/(.)(?=(\d{3})+$)/g, '$1,'));


    });
    </script>    
</main>
     
<script language="JavaScript">
if (top.location != self.location)
{top.location = self.location}
</script>

 
</head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

    <?php include('foot.php');?><?php if(!isset($_SESSION['username']))
{
    echo '<script type="text/javascript">swal("Thất Bại", "Vui lòng đăng nhập để tiếp tục.", "error");
        setTimeout(function(){ location.href = "/dang-nhap/" },100);</script>';
    die();
}
?>