<?php $this->load->library('javascript'); ?>
<?php $this->load->helper('url'); ?>
<html>
<head>
<meta charset="utf-8">
<title>Pengajuan Surat</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo base_url('assets/css/Untitled1.css'); ?>">
<link rel="stylesheet" href="<?php echo base_url('assets/css/index.css'); ?>">
  
   <script src="<?php echo base_url('assets/js/jquery-1.12.4.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/util.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/carousel.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/js.euy.min.js'); ?>"></script>
   <script src="<?php echo base_url('assets/js/jscuy15.min.js'); ?>"></script>
 
<script>
$(document).ready(function()
{
   $('#wb_service1').addClass('visibility-hidden');
   $('#wb_service2').addClass('visibility-hidden');
   $('#wb_service3').addClass('visibility-hidden');
   $("#Carousel2").bootstrapcarousel({interval:3000, pause: false});
   $("a[href*='#services']").click(function(event)
   {
      event.preventDefault();
      $('html, body').stop().animate({ scrollTop: $('#wb_services').offset().top-80 }, 600, 'linear');
   });
   $('#wb_services').parallax();
   function onScrollservice1()
   {
      var $obj = $("#wb_service1");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(true))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_service1', 'transform-scale-in', 100, 2000);
      }
      else
      if ($obj.hasClass("in-viewport") && !$obj.inViewPort(true))
      {
         $obj.removeClass("in-viewport");
         AnimateCss('wb_service1', 'animate-fade-out', 0, 0);
      }
   }
   if (!$('#wb_service1').inViewPort(true))
   {
      $('#wb_service1').addClass("in-viewport");
   }
   onScrollservice1();
   $(window).scroll(function(event)
   {
      onScrollservice1();
   });
   function onScrollservice2()
   {
      var $obj = $("#wb_service2");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(true))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_service2', 'transform-scale-in', 100, 2000);
      }
      else
      if ($obj.hasClass("in-viewport") && !$obj.inViewPort(true))
      {
         $obj.removeClass("in-viewport");
         AnimateCss('wb_service2', 'animate-fade-out', 0, 0);
      }
   }
   if (!$('#wb_service2').inViewPort(true))
   {
      $('#wb_service2').addClass("in-viewport");
   }
   onScrollservice2();
   $(window).scroll(function(event)
   {
      onScrollservice2();
   });
   function onScrollservice3()
   {
      var $obj = $("#wb_service3");
      if (!$obj.hasClass("in-viewport") && $obj.inViewPort(true))
      {
         $obj.addClass("in-viewport");
         AnimateCss('wb_service3', 'transform-scale-in', 100, 2000);
      }
      else
      if ($obj.hasClass("in-viewport") && !$obj.inViewPort(true))
      {
         $obj.removeClass("in-viewport");
         AnimateCss('wb_service3', 'animate-fade-out', 0, 0);
      }
   }
   if (!$('#wb_service3').inViewPort(true))
   {
      $('#wb_service3').addClass("in-viewport");
   }
   onScrollservice3();
   $(window).scroll(function(event)
   {
      onScrollservice3();
   });
});
</script>
</head>
<body>

<div id="wb_LayoutGrid3">
<div id="LayoutGrid3">
<div class="row">
<div class="col-1">
<div id="wb_Heading3" style="display:inline-block;width:100%;z-index:0;">
<h1 id="Heading3">SELAMAT DATANG</h1>
</div>
<div id="wb_Text3">
<span style="color:#A0A0A0;font-family:Arial;font-size:16px;"><em>Di sini mahasiswa dapat mengajukan surat pengantar dan surat keterangan kepada lembaga. Pengajuan akan di cek langsung oleh admin dan akan di beritahu lewat email jika surat nya suda siap. </em></span>
</div>
<div id="wb_Shape2" style="display:inline-block;width:132px;height:40px;z-index:2;position:relative;">
<a href="http://localhost/miniproject/index.php/ajuan/login_admin"><div id="Shape2"><div id="Shape2_text"><span style="color:#FFFFFF;font-family:Arial;font-size:13px;">Login Admin</span></div></div></a>
</div>
</div>
<div class="col-2">
<div id="wb_Image1" style="display:inline-block;width:100%;height:auto;z-index:3;">
<img src="<?php echo base_url('assets/images/freestockphotos-367015572514204zujq1v5go.jpg'); ?>" id="Image1" alt="">
</div>
</div>
</div>
</div>
</div>
<div id="wb_Carousel2" style="">
<div id="Carousel2" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#Carousel2" data-slide-to="0" class="active"></li>
<li data-target="#Carousel2" data-slide-to="1"></li>
<li data-target="#Carousel2" data-slide-to="2"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<div class="carousel-innerframe">
<div id="wb_Image2" style="display:inline-block;width:943px;height:628px;z-index:4;">
<img src=<?php echo base_url('assets/images/t1.jpg'); ?> id="Image2" alt="">
</div>
</div>
</div>
<div class="carousel-item">
<div class="carousel-innerframe">
<div id="wb_Image3" style="display:inline-block;width:945px;height:628px;z-index:5;">
<img src=<?php echo base_url('assets/images/t2.jpg'); ?> id="Image3" alt="">
</div>
</div>
</div>
<div class="carousel-item">
<div class="carousel-innerframe">
<div id="wb_Image4" style="display:inline-block;width:946px;height:628px;z-index:6;">
<img src=<?php echo base_url('assets/images/t3.jpg'); ?> id="Image4" alt="">
</div>
</div>
</div>
</div>
<a class="carousel-item-left carousel-control" href="#Carousel2" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span><span class="sr-only">Previous</span>
</a>
<a class="carousel-item-right carousel-control" href="#Carousel2" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span><span class="sr-only">Next</span>
</a>
</div>
</div>

<div id="wb_services">
<div id="services">
<div class="row">
<div class="col-1">
<div id="wb_service1">
<span style="color:#FFFFFF;font-family:Arial;font-size:19px;"><strong><a href="http://localhost/miniproject/index.php/ajuan/form1" title="News title">Ajukan Surat</a></strong></span><span style="color:#FFFFFF;font-family:Arial;font-size:13px;"><br><br>Dalam Form ini anda harus daftarkan nim dan nama anda untuk login nanti dalam proses download surat.</span>
</div>
</div>
<div class="col-2">
<div id="wb_service2">
<span style="color:#FFFFFF;font-family:Arial;font-size:19px;"><strong>Status Surat</strong></span><span style="color:#FFFFFF;font-family:Arial;font-size:16px;"><strong><br></strong></span><span style="color:#FFFFFF;font-family:Arial;font-size:13px;"><br>Dalam Form ini anda harus login dengan akun yang terdaftar lalu anda dapat cek status surat, jika tersedia bisa di unduh.</span>
</div>
</div>
<div class="col-3">
<div id="wb_service3">
<span style="color:#FFFFFF;font-family:Arial;font-size:19px;"><strong>Unduh Formulir</strong></span><span style="color:#FFFFFF;font-family:Arial;font-size:13px;"><br><br>Dalam Form ini anda dapat mendownload formulir yang berlaku di institusi untuk keperluan pribadi maupun akademik.</span>
</div>
</div>
</div>
</div>
</div>
<div id="wb_LayoutGrid6">
<div id="LayoutGrid6">
<div class="row">
<div class="col-1">
<div id="wb_Text6">
<span style="color:#9C9C9C;font-family:Arial;font-size:15px;"><strong>ADDRESS</strong><br>Jl. Cikutra No.113, Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124<br><br><strong>CONTACTS</strong><br>Web : stmik-bandung.ac.id<br>Phone: (022) 7207777<br></span>
</div>
</div>
<div class="col-2">
<div id="wb_Image5" style="display:inline-block;width:100%;height:auto;z-index:11;">
<a href="https://goo.gl/maps/pn1UeHJLPiyS1f1s5"><img src=<?php echo base_url('assets/images/maps_cannes.png'); ?> id="Image5" alt=""></a>
</div>
</div>
</div>
</div>
</div>
</body>
</html>