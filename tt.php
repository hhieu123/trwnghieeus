<?php include('head.php');?>
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
                          ></i>Hướng Dẫn</a>
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


































<?php
if (isset($_GET['id'])) 
{
    $id = check_string($_GET['id']); 
}
?>























<main>
<div class="container-fluid">
<div class="row">
<div class="col-12">
<h1 class="text-uppercase font-weight-bold"><?=$ketnoi->query("SELECT `name` FROM `category` WHERE `code` = '".$id."' ")->fetch_array()['name'];?></h1>
<div class="separator mb-5"></div>
</div>
</div>
<div class="card">
<div class="card-header">
<ul class="nav nav-tabs card-header-tabs " role="tablist">
    
    
    
    
    
    
    
  








<li class="nav-item">

</li>
</ul>
</div>
<script>
    function goToUrl(url) {
        loading();
        window.location.href = url;
    }
</script>
<div class="card-body">
<div class="tab-content ">
<div class="tab-pane fade show active" id="first" role="tabpanel" aria-labelledby="first-tab">
    

    
    
<div class="row">
<div class="col-md-8 mb-5">
<div class="box box-outline-success">
<div class="box-header with-border pb-2">
<h4 class="box-title"><strong><?=$ketnoi->query("SELECT `name` FROM `category` WHERE `code` = '".$id."' ")->fetch_array()['name'];?></strong></h4>
</div>     <div id="taodonhang" class="tab-pane fade show active">
   <form action="" method="POST">

<div class="box-body">
<div class="form-group">
<label class="font-weight-bold" >Nhập Link hoặc id :</label>
<input name="url"  type="text" class="form-control rounded-10" required placeholder="Nhập Id">
	       </div>
                                        <div class="alert alert-info rounded-10 shadow-lg border-0 mt-3">
                                            Get ID Facebook từ Link nhanh tại <a class="fw-bold" target="_blank"
                                                                                 href="https://findids.net">Findids.net</a>
</div>
<div>
</div>
<div class="form-group">
<label class="bold">Loại :
           <select class="form-control form-control-alternative" id="dichvu" name="service">
            <?php $query = $ketnoi->query("SELECT * FROM service WHERE category = '$id' AND status = 'show' ORDER BY stt ");
            while ($row = mysqli_fetch_array($query) ) 
            {?>
            <option value="<?=$row['id'];?>" data-price="<?=$row['money'];?>" ><?=$row['name'];?> ➜ [<?=$row['money'];?> <?=$site_currency;?>]</option>
            <?php }?>
            </select>
</label>
</div>
</div>
<div class="form-group">
<label class="font-weight-bold">Số lượng :</label>
<input  name="amount" id="amount" class="form-control rounded-10" value="100" type="number" min="10" placeholder="Số lượng" required />
<div class="alert alert-warning fade show mt-3 rounded-10" role="alert">
<h5 style="color: red">Chú ý</h5>
<p class="font-weight-bold">- Lưu ý: ? Lên đại lý hưởng mức giá ưu đãi hơn ?
</p>
<p class="font-weight-bold">- Nên nếu nick của họ bị khóa (checkpoint) trong lúc tăng sẽ gây tụt trong lúc buff làm lượng like-follow lên không đủ số lượng cần tăng là bình thường.. ✔ </p>
<p class="font-weight-bold">- Do đó, vui lòng buff dư thêm 30 - 50% trên tổng số lượng để tránh tụt ?
</p>
<p class="font-weight-bold">- Không buff cộng dồn, cài xong chờ chạy đủ và 10 ngày sau chạy lại . ?
</p>
<p class="font-weight-bold">- Link chuẩn phải có dạng : https://mangxahoi.com/@tennguoidung ✔
</p>
<p class="font-weight-bold">- Chúng tôi không hoàn tiền nếu bạn cài sai id hoặc không đọc hướng dẫn lấy link - không thể huỷ nếu cài sai ?</p>
</div>
</div>
<div class="form-group">
<input id="price_per" name="price_per" class="form-control rounded-10" value="49" type="hidden" min="49" placeholder="Số lượng" required />
</div>
<div class="form-group">
<label class="font-weight-bold">Ghi chú :</label>
<textarea name="note" class="form-control rounded-10" rows="3" placeholder="Nhập nội dung ghi chú"></textarea>
</div>
<div class="form-group">
<div class="alert alert-success alert-dismissible fade show text-center rounded-10" role="alert">
<button type="button" class="close" data-dismiss="alert">
<span>×</span></button>
<h3><span id="ketqua">0</span> vnđ</h3>
<strong>Tổng tiền thanh toán</strong>
<p class="mb-0 mt-3 text-center">Bạn sẽ buff <span  id="soluong">0</span> like với giá <span  id="dichvu">0</span>
vnđ / like</p>
</div>
</div>



















</div>
</div>














  <!-- Modal -->
                                    
                          <button type="submit" name="btnOrder"
                                                class="btn mb-3 rounded-10 btn-dark fw-bold w-100">Mua
                                            dịch vụ
</button>

</form>
                                </div>
                                <div class="col-md-4">
       
       <div class="card mb-0 overflow-hidden">
            <div class="bg-holder bg-card"></div>
            <div class="card-body position-relative">
                <div class="alert alert-info" role="alert">
                    <h5 class="alert-heading font-weight-semi-bold">Chú ý:</p>
            <p class="fw-bold">- Ngiêm cấm Buff các ID Seeding có nội dung vi
                phạm pháp luật, chính trị, đồ trụy... Nếu cố tình buff bạn sẽ bị trừ hết
                tiền và band khỏi hệ thống vĩnh viễn, và phải chịu hoàn toàn trách nhiệm
                trước pháp luật.</p>
            <p>- Hệ thống sử dụng 99% tài khoản người VN, fb thật để tương tác like,
                comment, share....</p>
            <p>- Thời gian làm việc (tăng seeding) và bảo hành tính từ ngày bắt đầu cho
                đến ngày kết thúc job, tối đa là 1 tuần</p>
            <p>- Hết thời gian của job đã order nếu không đủ số lượng hệ thống sẽ tự
                động hoàn lại số tiền seeding chưa tăng cho bạn <b class="fw-bold">trong
                    vòng 1 đến 3 ngày</b></p>
            <p>- Vui lòng lấy đúng id bài viết, công khai và check kỹ job tránh tạo
                nhầm, tính năng đang trong giai đoạn thử nghiệm nên sẽ không hoàn tiền
                nếu bạn tạo nhầm</p>
            <p>- Chỉ nhận id bài viết công khai không nhập id album, id comment, id
                trang cá nhân, id page,...</p>
            <p class="fw-bold">- Nhập id lỗi hoặc trong thời gian chạy die id
                thì hệ thống không hoàn lại tiền.</p>
            <p>- Mỗi id có thể <span class="fw-bold">Buff tối đa 10 lần trên hệ
                                                thống để tránh Spam</span>,
                max 1k trong ngày (hoặc hơn nếu order giá cao), trên 1k thời gian lên
                chậm hơn trong vòng 7 ngày</p>
        </div>



<?php
if (isset($_POST["btnOrder"]))
{
    
  $service = check_string($_POST['service']);
  $note = check_string($_POST['note']);
  $amount = check_string($_POST['amount']);
  $url = str_replace(array('<',"'",'>','?','--','eval(','<php'),array('','','','','','',''),htmlspecialchars(addslashes(strip_tags($_POST['url']))));

  $money_service = $ketnoi->query("SELECT `money` FROM `service` WHERE `id` = '$service'  ")->fetch_array()['money'];
  $name_service = $ketnoi->query("SELECT `name` FROM `service` WHERE `id` = '$service'  ")->fetch_array()['name'];

  $code = random('QWERTYUIOPASDFGHJKLZXCVBNM1234567890','6');
  
  $total_money_service1 = $money_service * $amount;
  $total_money_service = $total_money_service1 - $total_money_service1 * $my_ck / 100;

  $get_limit_min = $ketnoi->query("SELECT limit_min FROM service WHERE id = $service ")->fetch_array()["limit_min"];

  if(!isset($_SESSION['username']))
  {
      echo '<script type="text/javascript">swal("Thất Bại", "VUI LÒNG ĐĂNG NHẬP!", "error");
      setTimeout(function(){ location.href = "/dang-nhap/" },1000);</script>';
      die();
  }
  else if($site_status_order == 'OFF')
  {
      echo '<script type="text/javascript">swal("Thất Bại", "Đang bảo trì chức năng này!", "error");</script>';      
  }
  else if($amount < $get_limit_min)
  {
    echo '<script type="text/javascript">swal("Thất Bại", "Số lượng tối thiểu cần chạy là: '.format_cash($get_limit_min).'", "error");</script>'; 
  }
  else if($my_vnd < $total_money_service)
  {
      $if_vnd_buy = $total_money_service - $my_vnd;
      echo '<script type="text/javascript">swal("Thất Bại", "Bạn cần thêm: '.format_cash($if_vnd_buy).'đ để thanh toán đơn hàng này!", "error");</script>';      
  }
  else if ($service == '')
  {
    echo '<script type="text/javascript">swal("Thất Bại", "Vui lòng chọn dịch vụ", "error");</script>';   
  }
  else if ($amount == '')
  {
    echo '<script type="text/javascript">swal("Thất Bại", "Vui lòng nhập số lượng", "error");</script>';   
  }
  else if ($amount <= '0')
  {
    echo '<script type="text/javascript">swal("Thất Bại", "Vui lòng nhập số lượng lớn hơn 0", "error");</script>';   
  }
  else if ($url == '')
  {
    echo '<script type="text/javascript">swal("Thất Bại", "Vui lòng nhập link cần tăng", "error");</script>';   
  }
  else
  {
    $create = $ketnoi->query("INSERT INTO `orders` SET 
    `service_name` = '".$name_service."',
    `category_code` = '".$id."',
    `service_id` = '".$service."',
    `username` = '".$my_username."',
    `amount` = '".$amount."',
    `money` = '".$total_money_service."',
    `note` = '".$note."',
    `code` = '".$code."',
    `url` = '".$url."',
    `createdate` = now() ");

    $ketnoi->query("INSERT INTO `log` SET 
    `content`= '".format_cash($my_vnd)." - ".format_cash($total_money_service)." = ".format_cash(pheptru($my_vnd,$total_money_service))."  lý do: Thanh Toán Đơn ".$name_service." #".$code."',
    `createdate` = now(),
    `username`= '".$my_username."' ");

    $ketnoi->query("UPDATE users SET 
      `money` = `money` - '".$total_money_service."' WHERE `username` = '".$my_username."' ");

    if ($create)
    {
      $cookie = $site_cookie;
      $idNguoiNhan = $site_idfb;
      $noiDungTinNhan = '[SYSTEM] '.$my_username.' vừa tạo 1 ĐƠN HÀNG đang đợi bạn xử lý.';
      $idAnh = '';
      senInboxCSM($cookie, $noiDungTinNhan, $idAnh, $idNguoiNhan);
      ///////////////////////////////////
      $guitoi = $site_gmail;   
      $subject    = 'CÓ ĐƠN HÀNG ĐANG ĐỢI BẠN XỬ LÝ';
      $bcc = $site_tenweb;
      $hoten ='Admin';
      $noi_dung = '<h2>Đơn hàng #'.$code.'</h2>
          <table >
          <tbody>
          <tr>
          <td>Dịch Vụ:</td>
          <td><b>'.$name_service.'</b></td>
          </tr>
          <td>Số Lượng:</td>
          <td><b>'.format_cash($amount).'</b></td>
          </tr>
          <tr>
          <td>Thành Tiền:</td>
          <td><b style="color:blue;">'.format_cash($total_money_service).'</b></td>
          </tr>
          <tr>
          <td>Khách Hàng</td>
          <td><b style="color:red;">'.$my_username.'</b></td>
          </tr>
          </tbody>
          </table>';

      sendCSM($guitoi, $hoten, $subject, $noi_dung, $bcc);  

      //////////////////////////////////
      echo '<script type="text/javascript">swal("Thành Công","Tạo đơn hàng thành công","success");setTimeout(function(){ location.href = "/nhat-ky/order/" },1000);</script>';
    }
     
  }    
}
?>






</main>
   




























  <script src="/assets/js/sweetalert.min.js"></script>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>



          <script type="text/javascript">
          $('#amount').keyup(function()
          {
          var amount = $("#amount").val();
          var service = $('#dichvu').children("option:selected").attr('data-price');
          console.log(service);

          var ck = <?=$my_ck;?>;
          var ketquaz = service * amount;
          var ketqua = ketquaz - ketquaz * ck / 100;
          $('#ketqua').html(ketqua.toString().replace(/(.)(?=(\d{3})+$)/g,'$1,'));
          $('#soluong').html(amount.toString().replace(/(.)(?=(\d{3})+$)/g,'$1,'));
          });

          $('#dichvu').on('change', function(){
          var amount = $('#amount').val();
          if(amount >= 1){
          total = $(this).children('option:selected').attr('data-price') * amount;
          var ck = <?=$my_ck;?>;
          var ketquazz = total - total * ck / 100;
          $('#ketqua').html(ketquazz.toString().replace(/(.)(?=(\d{3})+$)/g,'$1,'));
          $('#soluong').html(amount.toString().replace(/(.)(?=(\d{3})+$)/g,'$1,'));
          }
          });
          </script>




<script>
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
</script>

<?php include('foot.php');?>