<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Formulir</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/Untitled12.css'); ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/formulir.css'); ?>">
      <script src="<?php echo base_url('assets/js/jquery-1.12.4.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/transition.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/carousel2.min.js'); ?>"></script>
      <script>
         $(document).ready(function()
         {
            $("#projectCarousel1").on('slid.bs.carousel', function(e)
            {
               var index = $(e.relatedTarget).index();
               switch(index)
               {
                  case 0:
                     $('#projectCarousel2').bootstrapcarousel(0);
                     break;
                  case 1:
                     $('#projectCarousel2').bootstrapcarousel(1);
                     break;
                  case 2:
                     $('#projectCarousel2').bootstrapcarousel(2);
                     break;
                  case 3:
                     $('#projectCarousel2').bootstrapcarousel(3);
                     break;
               }
            });
            $.fn.bootstrapcarousel.Constructor.TRANSITION_DURATION = 500;
            $("#projectCarousel1").bootstrapcarousel({interval:0});
            $.fn.bootstrapcarousel.Constructor.TRANSITION_DURATION = 0;
            $("#projectCarousel2").bootstrapcarousel({interval:0});
         });
      </script>
   </head>
   <body>
      <div id="wb_projectCarouselGrid">
         <div id="projectCarouselGrid">
            <div class="row">
               <div class="col-1">
                  <div id="wb_projectCarousel1" style="">
                     <div id="projectCarousel1" class="carousel slide">
                        <ol class="carousel-indicators">
                           <li data-target="#projectCarousel1" data-slide-to="0" class="active"></li>
                           <li data-target="#projectCarousel1" data-slide-to="1"></li>
                           <li data-target="#projectCarousel1" data-slide-to="2"></li>
                           <li data-target="#projectCarousel1" data-slide-to="3"></li>
                        </ol>
                        <div class="carousel-inner">
                           <div class="item active">
                              <div class="innerframe">
                                 <div id="wb_Image5" style="display:inline-block;width:445px;height:352px;z-index:0;">
                                    <a href="#" onclick="$('#projectCarousel1').bootstrapcarousel(0);return false;"><img src=<?php echo base_url('assets/images/Capture.PNG'); ?> id="Image5" alt=""></a>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="innerframe">
                                 <div id="wb_Image6" style="display:inline-block;width:445px;height:351px;z-index:1;">
                                    <a href="#" onclick="$('#projectCarousel1').bootstrapcarousel(1);return false;"><img src=<?php echo base_url('assets/images/2.PNG'); ?> id="Image6" alt=""></a>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="innerframe">
                                 <div id="wb_Image8" style="display:inline-block;width:444px;height:349px;z-index:2;">
                                    <a href="#" onclick="$('#projectCarousel1').bootstrapcarousel(2);return false;"><img src=<?php echo base_url('assets/images/3.PNG'); ?> id="Image8" alt=""></a>
                                 </div>
                              </div>
                           </div>
                           <div class="item">
                              <div class="innerframe">
                                 <div id="wb_Image7" style="display:inline-block;width:445px;height:348px;z-index:3;">
                                    <a href="#" onclick="$('#projectCarousel1').bootstrapcarousel(3);return false;"><img src=<?php echo base_url('assets/images/4.PNG'); ?> id="Image7" alt=""></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-2">
                  <div id="wb_projectCarousel2" style="">
                     <div id="projectCarousel2" class="carousel slide">
                        <div class="carousel-inner">
                           <div class="item active">
                              <div class="innerframe">
                                 <div id="wb_projectText1">
                                    <span style="color:#000000;font-family:Arial;font-size:15px;line-height:18px;"><strong>FORMULIR PAS FOTO DAN TANDA TANGAN </strong><br>Anda dapat menggunakan formulir ini untuk kebutuhan administrasi pengumpulan data mahasiswa berupa pas foto dan tanda tangan, silahkan downlaod dan print formulir ini.<br><br><strong>Note:</strong><br>Isi data dengan benar agar dapat mudah di proses nantinya. lanjut nomer 2 untuk formulir selanjutnya.</span>
                                 </div>
                                 <input type="button" id="projectButton1" name="" value="Download" style="display:inline-block;width:156px;height:37px;z-index:6;">
                              </div>
                           </div>
                           <div class="item">
                              <div class="innerframe">
                                 <div id="wb_projectText2">
                                    <span style="color:#000000;font-family:Arial;font-size:15px;line-height:18px;"><strong>FORMULIR DATA PRIBADI MAHASISWA<br></strong>Anda dapat menggunakan formulir ini untuk kebutuhan administrasi pengumpulan data pribadi mahasiswa yang di butuhkan instansi, silahkan downlaod dan print formulir ini.<br><br><br></span>
                                 </div>
                                 <input type="button" id="projectButton2" name="" value="Download" style="display:inline-block;width:156px;height:37px;z-index:8;">
                              </div>
                           </div>
                           <div class="item">
                              <div class="innerframe">
                                 <div id="wb_projectText3">
                                    <span style="color:#000000;font-family:Arial;font-size:15px;line-height:18px;"><strong>FORMULIR REGISTRASI MATA KULIAH<br></strong>Anda dapat menggunakan formulir ini untuk kebutuhan administrasi pengumpulan data registrasi mata kuliah yang akan di proses oleh prodi, silahkan downlaod dan print formulir ini.<br><br><br></span>
                                 </div>
                                 <input type="button" id="projectButtton3" name="" value="Download" style="display:inline-block;width:156px;height:37px;z-index:10;">
                              </div>
                           </div>
                           <div class="item">
                              <div class="innerframe">
                                 <div id="wb_projectText4">
                                    <span style="color:#000000;font-family:Arial;font-size:15px;line-height:18px;"><strong>FORMULIR PENDAFTARAN MAHASISWA BARU <br></strong>Anda dapat menggunakan formulir ini untuk kebutuhan administrasi pengumpulan data mahasiswa baru angkatan 2020, silahkan ikuti tautan di bawah ini untuk mengisi dan info lebih lanjut<br><br><br></span>
                                 </div>
                                 <input type="button" id="projectButton4" name="" value="PMB 2020" style="display:inline-block;width:156px;height:37px;z-index:12;">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="wb_LayoutGrid2">
         <div id="LayoutGrid2">
            <div class="row">
               <div class="col-1">
                  <div id="wb_Image1" style="display:inline-block;width:100%;height:auto;z-index:26;">
                     <a href="#" onclick="$('#projectCarousel1').bootstrapcarousel(0);return false;"><img src=<?php echo base_url('assets/images/Capture.PNG'); ?> id="Image1" alt=""></a>
                  </div>
               </div>
               <div class="col-2">
                  <div id="wb_Image2" style="display:inline-block;width:212px;height:169px;z-index:27;">
                     <a href="#" onclick="$('#projectCarousel1').bootstrapcarousel(1);return false;"><img src=<?php echo base_url('assets/images/2.PNG'); ?> id="Image2" alt=""></a>
                  </div>
               </div>
               <div class="col-3">
                  <div id="wb_Image3" style="display:inline-block;width:212px;height:167px;z-index:28;">
                     <a href="#" onclick="$('#projectCarousel1').bootstrapcarousel(2);return false;"><img src=<?php echo base_url('assets/images/3.PNG'); ?> id="Image3" alt=""></a>
                  </div>
               </div>
               <div class="col-4">
                  <div id="wb_Image4" style="display:inline-block;width:212px;height:167px;z-index:29;">
                     <a href="#" onclick="$('#projectCarousel1').bootstrapcarousel(3);return false;"><img src=<?php echo base_url('assets/images/4.PNG'); ?> id="Image4" alt=""></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="wb_LayoutGrid1">
         <div id="LayoutGrid1">
            <div class="row">
               <div class="col-1">
                  <div id="wb_Text6">
                     <span style="color:#000000;font-family:Arial;font-size:24px;"><strong>Contact</strong></span>
                  </div>
                  <div id="wb_Text7">
                     <span style="color:#000000;font-family:Arial;font-size:13px;"><br> Jl. Cikutra No.113<br>Cikutra, Kec. Cibeunying Kidul, Kota Bandung, Jawa Barat 40124<br>(022) 7207777<br>info@stmik-bandung.ac.id <br></span>
                  </div>
                  <div id="wb_FontAwesomeIcon2" style="display:inline-block;width:44px;height:44px;text-align:center;z-index:32;">
                     <a href="#top" title="Top">
                        <div id="FontAwesomeIcon2"><i class="fa fa-facebook"></i></div>
                     </a>
                  </div>
                  <div id="wb_FontAwesomeIcon3" style="display:inline-block;width:44px;height:44px;text-align:center;z-index:33;">
                     <a href="#top" title="Top">
                        <div id="FontAwesomeIcon3"><i class="fa fa-twitter"></i></div>
                     </a>
                  </div>
                  <div id="wb_FontAwesomeIcon6" style="display:inline-block;width:44px;height:44px;text-align:center;z-index:34;">
                     <a href="#top" title="Top">
                        <div id="FontAwesomeIcon6"><i class="fa fa-linkedin"></i></div>
                     </a>
                  </div>
                  <div id="wb_Text1">
                     <span style="color:#000000;font-family:Arial;font-size:13px;"><br></span><span style="color:#777777;font-family:Arial;font-size:13px;">Copyright © STMIK BANDUNG 2020</span><span style="color:#000000;font-family:Arial;font-size:13px;"><br></span>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>