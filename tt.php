<?php include('head.php');?>
<body id="app-container" class="menu-default show-spinner"><nav class="navbar fixed-top"> <div class="d-flex align-items-center navbar-left"><a href="#" class="menu-button d-none d-md-block"><svg class="main" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 9 17"><rect x="0.48" y="0.5" width="7" height="1" /><rect x="0.48" y="7.5" width="7" height="1" /><rect x="0.48" y="15.5" width="7" height="1" /></svg><svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17"><rect x="1.56" y="0.5" width="16" height="1" /><rect x="1.56" y="7.5" width="16" height="1" /><rect x="1.56" y="15.5" width="16" height="1" /></svg> </a><a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17"><rect x="0.5" y="0.5" width="25" height="1" /><rect x="0.5" y="7.5" width="25" height="1" /><rect x="0.5" y="15.5" width="25" height="1" /></svg></a><div class="search" data-search-path="Layouts.Search.html?q="><input placeholder="Search..."><span class="search-icon"><i class="simple-icon-magnifier"></i></span></div></div><a class="navbar-logo" href="/"><span class="logo d-none d-xs-block"></span><span class="logo-mobile d-block d-xs-none"></span></a><div class="navbar-right"><div class="header-icons d-inline-block align-middle"><a class="btn btn-sm btn-outline-primary mr-2 d-none d-md-inline-block mb-2" href="https://www.facebook.com/V%C6%B0%C6%A1ng-Thanh-T%C3%B9ng-106376518212154">&nbsp;BUY&nbsp;</a><div class="position-relative d-none d-sm-inline-block"><button class="header-icon btn btn-empty" type="button" id="iconMenuButton" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false"><i class="simple-icon-grid"></i></button><div class="dropdown-menu dropdown-menu-right mt-3  position-absolute" id="iconMenuDropdown"><a href="#" class="icon-menu-item"><i class="iconsmind-Equalizer d-block"></i><span>Setting</span></a><a href="/thong-tin/" class="icon-menu-item"><i class="iconsmind-MaleFemale d-block"></i>
                            <span>Users</span>
                        </a>

                        <a href="facebook.com/TrungHieu2k9/" class="icon-menu-item">
                            <i class="iconsmind-Puzzle d-block"></i>
                            <span>H??? Tr???</span>
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
                    <a class="dropdown-item" href="/profile.php"><i class="iconsmind-User"></i> T??i Kho???n</a>
                    <a class="dropdown-item" href="/nap-tien/"><i class="iconsmind-Dollar"></i> N???p Ti???n</a>
                    <a class="dropdown-item" href="/lich-su.php"><i class="iconsmind-Clock"></i> L???ch S???</a>
                    <a class="dropdown-item" href="https://facebook.com/TrungHieu2k9/"><i class="iconsmind-Phone"></i> H??? Tr???</a>
                    <a class="dropdown-item" href="/dang-xuat/"><i class="iconsmind-User"></i> ????ng Xu???t</a>  
                    
                    
                    
                    
                    
                    
                    <?php } else { ?>

            
            
                <button class="btn btn-empty p-0" type="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <span class="name"> T??i Kho???n</span>
                    <span>
                        <img alt="Profile Picture" src="<?=$my_avt;?>" />
                    </span>
                </button>

                <div class="dropdown-menu dropdown-menu-right mt-3">
                    <a class="dropdown-item" href="/dang-nhap/"><i class="iconsmind-MaleFemale"></i> ????ng nh???p</a>
                    <a class="dropdown-item" href="/dang-ky/"><i class="iconsmind-User"></i> ????ng k??</a>
       
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
                        N???p Ti???n
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
                         <span>Kh??c</span>
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
                            <i class="simple-icon-home"></i>Trang Ch???
                        </a>
                    </li>
                    <li>
                        <a href="/profile.php">
                         <i class="simple-icon-user"></i> T??i Kho???n 
                        </a>
                    </li>
                    <li>
                    	       <a href="/lich-su.php">                       	
                              <i class="iconsmind-Clock"></i>L???ch S???</a>
                    </li>
                    <li>
                        <a href="#">                       	
                              <i class="iconsmind-Phone"></i>H??? Tr??? <span class="badge badge-pill badge-outline-primary float-right mr-4">FB</span></a>
                    </li>
                    <li>
                        <a href="/api/">
                             <i class="simple-icon-rocket"></i> T??ch H???p Api<span class="badge badge-pill badge-outline-primary float-right mr-4">[ON]</span>
                        
                        </a>
                    </li>
                </ul>

                 <ul class="list-unstyled" data-link="layouts">
            <li class="active">
                        <a href="/tt.php?id=dich-vu-followfb">
                          <i class="iconsmind-MaleFemale"></i>T??ng Theo D??i</a>
                 
                        </li>
                    
                    <li>
                         <a href="/tt.php?id=dich-vu-like">
                           <i class="simple-icon-like"></i>T??ng Like B??i Vi???t</a>
                        </li>
                    
                    <li>
                         <a href="/tt.php?id=dich-vu-likepage">
                           <i class="simple-icon-like"></i>T??ng Like Page</a>
                        </li>
                    
                    <li>
                         <a href="/tt.php?id=dich-vu-share">
                           <i class="simple-icon-share"></i>T??ng Share </a>
                        </li>
                    
                    <li>
                         <a href="/tt.php?id=dich-vu-comment">
                           <i class="iconsmind-Book"></i>T??ng Comment </a>
                        </li>
                    
                    <li>
                         <a href="/tt.php?id=dich-vu-groud">
                           <i class="simple-icon-user"></i>T??ng Men Groud </a>
                                 </li>
                    
                    <li>
                         <a href="/tt.php?id=dich-vu-eyestr">
                           <i class="iconsmind-Eye"></i>T??ng M???t Story</a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="landingPage">
            <li class="active">
                        <a href="/tt.php?id=dich-vu-timtiktok">
                           <i class="iconsmind-Heart"></i>T??ng Tim</a>
                    </li>
                    
                    <li>
                         <a href="/tt.php?id=dich-vu-fltiktok">
                           <i class="iconsmind-MaleFemale"></i>T??ng Follow</a>
                                 </li>
                    
                    <li>
                         <a href="/tt.php?id=dich-vu-eyetiktok">
                           <i class="iconsmind-Eye"></i>T??ng L?????t Xem</a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="menu">
                  <li class="active">
                        
                        <a href="/nap-tien">
                              <i class="iconsmind-Dollar"></i>N???p Ti???n<span class="badge badge-pill badge-outline-primary float-right mr-4">AUTO</span></a>
                    </li>
                    
                    <li>
                        <a href="#">
                        	<i class="iconsmind-Phone"
                          ></i>H?????ng D???n</a>
                    </li>
                </ul>
                <ul class="list-unstyled" data-link="menu3">
                  <li class="active">
                        
                        <a href="/tt.php?id=dich-vu-dame">
                              <i class="iconsmind-MaleFemale"></i>Dame Facebook<span class="badge badge-pill badge-outline-primary float-right mr-4">B???o Tr??</span></a>
                    </li>
                    
                    <li>
                          <a href="/tt.php?id=dich-vu-flig">
                              <i class="iconsmind-MaleFemale"></i>Unlock Facebook<span class="badge badge-pill badge-outline-primary float-right mr-4">B???o Tr??</span></a> 
       
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
<label class="font-weight-bold" >Nh???p Link ho???c id :</label>
<input name="url"  type="text" class="form-control rounded-10" required placeholder="Nh???p Id">
	       </div>
                                        <div class="alert alert-info rounded-10 shadow-lg border-0 mt-3">
                                            Get ID Facebook t??? Link nhanh t???i <a class="fw-bold" target="_blank"
                                                                                 href="https://findids.net">Findids.net</a>
</div>
<div>
</div>
<div class="form-group">
<label class="bold">Lo???i :
           <select class="form-control form-control-alternative" id="dichvu" name="service">
            <?php $query = $ketnoi->query("SELECT * FROM service WHERE category = '$id' AND status = 'show' ORDER BY stt ");
            while ($row = mysqli_fetch_array($query) ) 
            {?>
            <option value="<?=$row['id'];?>" data-price="<?=$row['money'];?>" ><?=$row['name'];?> ??? [<?=$row['money'];?> <?=$site_currency;?>]</option>
            <?php }?>
            </select>
</label>
</div>
</div>
<div class="form-group">
<label class="font-weight-bold">S??? l?????ng :</label>
<input  name="amount" id="amount" class="form-control rounded-10" value="100" type="number" min="10" placeholder="S??? l?????ng" required />
<div class="alert alert-warning fade show mt-3 rounded-10" role="alert">
<h5 style="color: red">Ch?? ??</h5>
<p class="font-weight-bold">- L??u ??: ? L??n ?????i l?? h?????ng m???c gi?? ??u ????i h??n ?
</p>
<p class="font-weight-bold">- N??n n???u nick c???a h??? b??? kh??a (checkpoint) trong l??c t??ng s??? g??y t???t trong l??c buff l??m l?????ng like-follow l??n kh??ng ????? s??? l?????ng c???n t??ng l?? b??nh th?????ng.. ??? </p>
<p class="font-weight-bold">- Do ????, vui l??ng buff d?? th??m 30 - 50% tr??n t???ng s??? l?????ng ????? tr??nh t???t ?
</p>
<p class="font-weight-bold">- Kh??ng buff c???ng d???n, c??i xong ch??? ch???y ????? v?? 10 ng??y sau ch???y l???i . ?
</p>
<p class="font-weight-bold">- Link chu???n ph???i c?? d???ng : https://mangxahoi.com/@tennguoidung ???
</p>
<p class="font-weight-bold">- Ch??ng t??i kh??ng ho??n ti???n n???u b???n c??i sai id ho???c kh??ng ?????c h?????ng d???n l???y link - kh??ng th??? hu??? n???u c??i sai ?</p>
</div>
</div>
<div class="form-group">
<input id="price_per" name="price_per" class="form-control rounded-10" value="49" type="hidden" min="49" placeholder="S??? l?????ng" required />
</div>
<div class="form-group">
<label class="font-weight-bold">Ghi ch?? :</label>
<textarea name="note" class="form-control rounded-10" rows="3" placeholder="Nh???p n???i dung ghi ch??"></textarea>
</div>
<div class="form-group">
<div class="alert alert-success alert-dismissible fade show text-center rounded-10" role="alert">
<button type="button" class="close" data-dismiss="alert">
<span>??</span></button>
<h3><span id="ketqua">0</span> vn??</h3>
<strong>T???ng ti???n thanh to??n</strong>
<p class="mb-0 mt-3 text-center">B???n s??? buff <span  id="soluong">0</span> like v???i gi?? <span  id="dichvu">0</span>
vn?? / like</p>
</div>
</div>



















</div>
</div>














  <!-- Modal -->
                                    
                          <button type="submit" name="btnOrder"
                                                class="btn mb-3 rounded-10 btn-dark fw-bold w-100">Mua
                                            d???ch v???
</button>

</form>
                                </div>
                                <div class="col-md-4">
       
       <div class="card mb-0 overflow-hidden">
            <div class="bg-holder bg-card"></div>
            <div class="card-body position-relative">
                <div class="alert alert-info" role="alert">
                    <h5 class="alert-heading font-weight-semi-bold">Ch?? ??:</p>
            <p class="fw-bold">- Ngi??m c???m Buff c??c ID Seeding c?? n???i dung vi
                ph???m ph??p lu???t, ch??nh tr???, ????? tr???y... N???u c??? t??nh buff b???n s??? b??? tr??? h???t
                ti???n v?? band kh???i h??? th???ng v??nh vi???n, v?? ph???i ch???u ho??n to??n tr??ch nhi???m
                tr?????c ph??p lu???t.</p>
            <p>- H??? th???ng s??? d???ng 99% t??i kho???n ng?????i VN, fb th???t ????? t????ng t??c like,
                comment, share....</p>
            <p>- Th???i gian l??m vi???c (t??ng seeding) v?? b???o h??nh t??nh t??? ng??y b???t ?????u cho
                ?????n ng??y k???t th??c job, t???i ??a l?? 1 tu???n</p>
            <p>- H???t th???i gian c???a job ???? order n???u kh??ng ????? s??? l?????ng h??? th???ng s??? t???
                ?????ng ho??n l???i s??? ti???n seeding ch??a t??ng cho b???n <b class="fw-bold">trong
                    v??ng 1 ?????n 3 ng??y</b></p>
            <p>- Vui l??ng l???y ????ng id b??i vi???t, c??ng khai v?? check k??? job tr??nh t???o
                nh???m, t??nh n??ng ??ang trong giai ??o???n th??? nghi???m n??n s??? kh??ng ho??n ti???n
                n???u b???n t???o nh???m</p>
            <p>- Ch??? nh???n id b??i vi???t c??ng khai kh??ng nh???p id album, id comment, id
                trang c?? nh??n, id page,...</p>
            <p class="fw-bold">- Nh???p id l???i ho???c trong th???i gian ch???y die id
                th?? h??? th???ng kh??ng ho??n l???i ti???n.</p>
            <p>- M???i id c?? th??? <span class="fw-bold">Buff t???i ??a 10 l???n tr??n h???
                                                th???ng ????? tr??nh Spam</span>,
                max 1k trong ng??y (ho???c h??n n???u order gi?? cao), tr??n 1k th???i gian l??n
                ch???m h??n trong v??ng 7 ng??y</p>
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
      echo '<script type="text/javascript">swal("Th???t B???i", "VUI L??NG ????NG NH???P!", "error");
      setTimeout(function(){ location.href = "/dang-nhap/" },1000);</script>';
      die();
  }
  else if($site_status_order == 'OFF')
  {
      echo '<script type="text/javascript">swal("Th???t B???i", "??ang b???o tr?? ch???c n??ng n??y!", "error");</script>';      
  }
  else if($amount < $get_limit_min)
  {
    echo '<script type="text/javascript">swal("Th???t B???i", "S??? l?????ng t???i thi???u c???n ch???y l??: '.format_cash($get_limit_min).'", "error");</script>'; 
  }
  else if($my_vnd < $total_money_service)
  {
      $if_vnd_buy = $total_money_service - $my_vnd;
      echo '<script type="text/javascript">swal("Th???t B???i", "B???n c???n th??m: '.format_cash($if_vnd_buy).'?? ????? thanh to??n ????n h??ng n??y!", "error");</script>';      
  }
  else if ($service == '')
  {
    echo '<script type="text/javascript">swal("Th???t B???i", "Vui l??ng ch???n d???ch v???", "error");</script>';   
  }
  else if ($amount == '')
  {
    echo '<script type="text/javascript">swal("Th???t B???i", "Vui l??ng nh???p s??? l?????ng", "error");</script>';   
  }
  else if ($amount <= '0')
  {
    echo '<script type="text/javascript">swal("Th???t B???i", "Vui l??ng nh???p s??? l?????ng l???n h??n 0", "error");</script>';   
  }
  else if ($url == '')
  {
    echo '<script type="text/javascript">swal("Th???t B???i", "Vui l??ng nh???p link c???n t??ng", "error");</script>';   
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
    `content`= '".format_cash($my_vnd)." - ".format_cash($total_money_service)." = ".format_cash(pheptru($my_vnd,$total_money_service))."  l?? do: Thanh To??n ????n ".$name_service." #".$code."',
    `createdate` = now(),
    `username`= '".$my_username."' ");

    $ketnoi->query("UPDATE users SET 
      `money` = `money` - '".$total_money_service."' WHERE `username` = '".$my_username."' ");

    if ($create)
    {
      $cookie = $site_cookie;
      $idNguoiNhan = $site_idfb;
      $noiDungTinNhan = '[SYSTEM] '.$my_username.' v???a t???o 1 ????N H??NG ??ang ?????i b???n x??? l??.';
      $idAnh = '';
      senInboxCSM($cookie, $noiDungTinNhan, $idAnh, $idNguoiNhan);
      ///////////////////////////////////
      $guitoi = $site_gmail;   
      $subject    = 'C?? ????N H??NG ??ANG ?????I B???N X??? L??';
      $bcc = $site_tenweb;
      $hoten ='Admin';
      $noi_dung = '<h2>????n h??ng #'.$code.'</h2>
          <table >
          <tbody>
          <tr>
          <td>D???ch V???:</td>
          <td><b>'.$name_service.'</b></td>
          </tr>
          <td>S??? L?????ng:</td>
          <td><b>'.format_cash($amount).'</b></td>
          </tr>
          <tr>
          <td>Th??nh Ti???n:</td>
          <td><b style="color:blue;">'.format_cash($total_money_service).'</b></td>
          </tr>
          <tr>
          <td>Kh??ch H??ng</td>
          <td><b style="color:red;">'.$my_username.'</b></td>
          </tr>
          </tbody>
          </table>';

      sendCSM($guitoi, $hoten, $subject, $noi_dung, $bcc);  

      //////////////////////////////////
      echo '<script type="text/javascript">swal("Th??nh C??ng","T???o ????n h??ng th??nh c??ng","success");setTimeout(function(){ location.href = "/nhat-ky/order/" },1000);</script>';
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
<!--<script src="/assets/js/plugins/jquery/dist/jquery.min.js"></script> ???n v?? Loading kh??ng th??ch :(-->
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