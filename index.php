<?php include('head.php');?>
<head>
<title>Home | <?=$site_tenweb;?></title>
</head> 

<?php 
$total_donhang = mysqli_fetch_assoc(mysqli_query($ketnoi, "SELECT COUNT(*) FROM `orders` WHERE `username` = '".$my_username."' ")) ['COUNT(*)'];  
?>
<body id="app-container" class="menu-default show-spinner"><nav class="navbar fixed-top"> <div class="d-flex align-items-center navbar-left"><a href="#" class="menu-button d-none d-md-block"><svg class="main" xmlns="http://www.w3.org/20svg00/" viewBox="0 0 9 17"><rect x="0.48" y="0.5" width="7" height="1" /><rect x="0.48" y="7.5" width="7" height="1" /><rect x="0.48" y="15.5" width="7" height="1" /></svg><svg class="sub" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 18 17"><rect x="1.56" y="0.5" width="16" height="1" /><rect x="1.56" y="7.5" width="16" height="1" /><rect x="1.56" y="15.5" width="16" height="1" /></svg> </a><a href="#" class="menu-button-mobile d-xs-block d-sm-block d-md-none"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 17"><rect x="0.5" y="0.5" width="25" height="1" /><rect x="0.5" y="7.5" width="25" height="1" /><rect x="0.5" y="15.5" width="25" height="1" /></svg></a><div class="search" data-search-path="Layouts.Search.html?q="><input placeholder="Search..."><span class="search-icon"><i class="simple-icon-magnifier"></i></span></div></div><a class="navbar-logo" href="/"><span class="logo d-xs-block"></span><span class="logo-mobile d-block d-xs-none"></span></a><div class="navbar-right"><div class="header-icons d-inline-block align-middle"><a class="btn btn-sm btn-outline-primary mr-2 d-none d-md-inline-block mb-2" href="https://www.facebook.com/V%C6%B0%C6%A1ng-Thanh-T%C3%B9ng-106376518212154">&nbsp;BUY&nbsp;</a><div class="position-relative d-none d-sm-inline-block"><button class="header-icon btn btn-empty" type="button" id="iconMenuButton" data-toggle="dropdown"aria-haspopup="true" aria-expanded="false"><i class="simple-icon-grid"></i></button><div class="dropdown-menu dropdown-menu-right mt-3  position-absolute" id="iconMenuDropdown"><a href="#" class="icon-menu-item"><i class="iconsmind-Equalizer d-block"></i><span>Setting</span></a><a href="/thong-tin/" class="icon-menu-item"><i class="iconsmind-MaleFemale d-block"></i>
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
                    <a class="dropdown-item" href="https://www.facebook.com/TrungHieu2k9/"><i class="iconsmind-Phone"></i> H??? Tr???</a>
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
                          ></i>H?????ng D???n</span
></a>
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














<main>
<div class="container-fluid">
<div class="row">
<div class="col-md-12 col-lg-12">
<div class="row">
<div class="col-md-12 col-lg-6 mb-6">
<div class="card">
<div class="card-body d-flex justify-content-between align-items-center">
<a href="/tc.php"><h6 class="mb-0 font-weight-bold">N???P TI???N V??O T??I KHO???N</h6>
</a>
<a href="/tc.php"><i class="fas fa-angle-double-right "></i></a>
</div>
</div>
</div>
<div class="col-md-12 col-lg-3 mb-3">
<div class="card">
<div class="card-body d-flex justify-content-between align-items-center">
 <h6 class="mb-0 font-weight-bold">S??? D??</h6>
<h3><?=format_cash($my_vnd);?></h3>
</div>
</div>
</div>
<div class="col-md-12 col-lg-3 mb-3">
<div class="card">
<div class="card-body d-flex justify-content-between align-items-center">
<h6 class="mb-0 font-weight-bold">T???ng S??? Ti???n ???? N???p</h6>
<h3><?=format_cash($my_total_nap);?> </h3>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-6 mb-6">
<div class="card h-100">
<div class="card-body">
<h5 class="card-title">Th??ng b??o h??? th???ng</h5>
<div class="scroll dashboard-list-with-user">
<div class="d-flex flex-row mb-3 pb-3 border-bottom">
<a href="#">
<img src="https://i0.wp.com/s1.uphinh.org/2021/08/20/admin.png" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
</a>
<div class="pl-3">
<a href="#">

<p class="font-weight-medium mb-0 ">Th??ng b??o</p>
<p class="text-muted mb-0 text-small"><?=$site_thongbao;?></p>
</a>
</div>
</div>
<div class="d-flex flex-row mb-3 pb-3 border-bottom">	
<a href="#">
<img src="https://i0.wp.com/s1.uphinh.org/2021/08/20/admin.png" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
</a>
<div class="pl-3">
<a href="#">
<p class="font-weight-medium mb-0 ">Th??ng b??o</p>
<p class="text-muted mb-0 text-small">Anh em nh??? n??ng c???p lever ????? h?????ng gi?? ??u ????i nh??.</p>
</a>
</div>
</div>
<div class="d-flex flex-row mb-3 pb-3 border-bottom">
<a href="#">
<img src="https://i0.wp.com/s1.uphinh.org/2021/08/20/admin.png" alt="Mayra Sibley" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
</a>
<div class="pl-3">
<a href="#">
<p class="font-weight-medium mb-0 ">Th??ng b??o</p>
<p class="text-muted mb-0 text-small">Sale theo d??i 5?? trong 24h anh em h??p nhanh l??n nh??.</p>
</a>
</div>
</div>
<div class="d-flex flex-row mb-3 pb-3 border-bottom">
<a href="#">
<img src="https://i0.wp.com/s1.uphinh.org/2021/08/20/admin.png" alt="Mayra Sibley" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
</a>
<div class="pl-3">
<a href="#">
<p class="font-weight-medium mb-0 ">Th??ng b??o</p>
<p class="text-muted mb-0 text-small">N???p ti???n th??? c??o t??? ?????ng 5s ,ch??a m??? h??? th???ng momo b???i z?? ad ??o c?? cmnd ????? t???o momo thui n???p card ????? nka????????.</p>
</a>
</div>
</div>
<div class="d-flex flex-row mb-3 pb-3 border-bottom">
<a href="#">
<img src="https://i0.wp.com/s1.uphinh.org/2021/08/20/admin.png" alt="Mayra Sibley" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
</a>
<div class="pl-3">
<a href="#">
<p class="font-weight-medium mb-0 ">Th??ng b??o</p>
<p class="text-muted mb-0 text-small">H??? th???ng ??ang sale r???t nhi???u d???ch v??? hot , anh em nhanh tay h??p nh??.</p>
</a>
</div>
</div>
<div class="d-flex flex-row mb-3 pb-3 border-bottom">
<a href="#">
<img src="https://i0.wp.com/s1.uphinh.org/2021/08/20/admin.png" alt="Mayra Sibley" class="img-thumbnail border-0 rounded-circle list-thumbnail align-self-center xsmall" />
</a>
<div class="pl-3">
<a href="#">
</div>
</div>


</div>
</div>
</div>
</div>
<div class="col-lg-3 mb-3">
<div class="dashboard-list-with-user">
</p>
<div class="card">
<div class="card-body d-flex justify-content-between align-items-center">
<h6 class="mb-0 font-weight-bold"><a target="_blank" href="#">Group
Facebook</a></h6>
</div>
</div>
</p>
<div class="card">
<div class="card-body d-flex justify-content-between align-items-center">
<h6 class="mb-0 font-weight-bold"><a target="_blank" href="#">Group
Fanpage</a></h6>
</div>
</div>
</p>
<div class="card">
<div class="card-body d-flex justify-content-between align-items-center">
<h6 class="mb-0 font-weight-bold"><a target="_blank" href="#">Group
Telegram</a></h6>
</div>
</div>
</p>
<div class="card">
<div class="card-body d-flex justify-content-between align-items-center">
<h6 class="mb-0 font-weight-bold"><a target="_blank" href="#">Group
Zalo</h6>
</div>
                                    </div>
                                </div>
                            </p>
                        </div>
<div class="col-lg-3 mb-3">
    <div class="dashboard-list-with-user">
</p>
<div class="list-group">
 <a href="#" target="_blank" class="list-group-item font-weight-bold">
<i class="fas fa-feather-alt"></i> Mua page + group <span class="badge">
<img src="/new.gif"> </span>
</a>
<a href="#" target="_blank" class="list-group-item font-weight-bold">
<i class="fas fa-feather-alt"></i> Mua acc TikTok <span class="badge">
<img src="/new.gif"> </span>
</a>
<a href="#" target="_blank" class="list-group-item font-weight-bold">
<i class="fas fa-feather-alt"></i> B???ng gi?? d???ch v??? <span class="badge">
<img src="/new.gif"> </span>
</a>
<a href="#" target="_blank" class="list-group-item font-weight-bold">
<i class="fas fa-feather-alt"></i> Mua page <span class="badge">
<img src="/new.gif"> </span>
</a>
<a href="#" target="_blank" class="list-group-item font-weight-bold">
<i class="fas fa-feather-alt"></i> Th??? thu???t facebook <span class="badge">
<img src="/new.gif"> </span>
</a>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-12 col-lg-4 mb-4">
</div>

</div>
</div>
</main>
<?php include('foot.php');?>                    