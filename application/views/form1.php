<!doctype html>
<html>
   <head>
      <meta charset="utf-8">
      <title>Form Pengajuan</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/font-awesome.min.css'); ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/Untitled22.css'); ?>">
      <link rel="stylesheet" href="<?php echo base_url('assets/css/form1.css'); ?>">
      <script src="<?php echo base_url('assets/js/jquery-1.12.4.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/wb.panel.min.js'); ?>"></script>
      <script src="<?php echo base_url('assets/js/jquery-ui.min.js'); ?>"></script>
      <script>
         $(document).ready(function()
         {
            $("#PanelMenu1").panel({animate: true, animationDuration: 200, animationEasing: 'linear', dismissible: true, display: 'overlay', position: 'right', toggle: true, overlay: true});
            $("a[href*='#contact']").click(function(event)
            {
               event.preventDefault();
               $('html, body').stop().animate({ scrollTop: $('#wb_contact').offset().top-78 }, 600, 'easeOutQuart');
            });
            $("a[href*='#contactForm']").click(function(event)
            {
               event.preventDefault();
               $('html, body').stop().animate({ scrollTop: $('#wb_contactForm').offset().top }, 600, 'easeInCubic');
            });
         });
      </script>
   </head>
   <body>
      <form action="<?php echo base_url(). 'index.php/ajuan/tambah_aksi'; ?>" method="post">
         <div id="wb_PageHeader">
            <div id="PageHeader">
               <div class="row">
                  <div class="col-1">
                     <div id="wb_FontAwesomeIcon1" style="display:inline-block;width:40px;height:40px;text-align:center;z-index:0;">
                        <a href="http://www.stmik-bandung.ac.id/stmikbdg/">
                           <div id="FontAwesomeIcon1"><i class="fa fa-check"></i></div>
                        </a>
                     </div>
                  </div>
                  <div class="col-2">
                     <div id="wb_Heading1" style="display:inline-block;width:100%;z-index:1;">
                        <h1 id="Heading1">STMIK BANDUNG</h1>
                     </div>
                  </div>
                  <div class="col-3">
                     <div id="wb_PanelMenu1" style="display:inline-block;width:63px;height:70px;z-index:2;">
                        <a href="#PanelMenu1_markup" id="PanelMenu1">&nbsp;</a>
                        <div id="PanelMenu1_markup">
                           <ul role="menu">
                              <li role="menuitem"><a href="http://localhost/miniproject/index.php/ajuan/index"><i class="fa fa-home fa-fw"></i><span>Home</span></a></li>
                              <li role="menuitem"><a href="http://localhost/miniproject/index.php/ajuan/status_surats"><i class="fa fa-check-circle fa-fw"></i><span>Status Surat</span></a></li>
                              <li role="menuitem"><a href="http://localhost/miniproject/index.php/ajuan/status_surats"><i class="fa fa-download fa-fw"></i><span>Download Surat</span></a></li>
                              <li role="menuitem"><a href="http://www.stmik-bandung.ac.id/ais/"><i class="fa fa-pencil fa-fw"></i><span>AIS Online</span></a></li>
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="wb_contact">
            <div id="contact">
               <div class="row">
                  <div class="col-1">
                     <div id="wb_contactHeadingText">
                        <span style="color:#FFFFFF;font-family:Arial;font-size:32px;">PENGAJUAN </span><span style="color:#28A7E9;font-family:Arial;font-size:32px;"><strong>SURAT</strong></span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div id="wb_contactForm">
            <div id="contactForm">
               <div class="row">
                  <div class="col-1">
                     <div id="wb_contactText">
                        <p style="font-size:15px;line-height:16.5px;color:#FFFFFF;line-height:22.4px;"><span style="color:#FFFFFF;">Di sini anda dapat mengajukan surat pengantar dan surat keterangan kepada lembaga, harap isi data dengan lengkap dan benar agar proses pegajuan dapat di selesaikan secepatnya.</span></p>
                        <p style="font-size:15px;line-height:16.5px;line-height:22.4px;">&nbsp;</p>
                        <p style="font-size:15px;line-height:16.5px;color:#28A7E9;line-height:22.4px;"><span style="font-weight:bold;color:#28A7E9;">Address:</span><span style="color:#FFFFFF;">&nbsp; Jl. Cikutra No. 113A, Cikutra, Cibeunying Kidul, Kota&nbsp;&nbsp;&nbsp;&nbsp; Bandung, Jawa Barat, Indonesia</span></p>
                        <p style="font-size:15px;line-height:16.5px;color:#28A7E9;line-height:22.4px;"><span style="font-weight:bold;color:#28A7E9;">Phone:</span><span style="color:#FFFFFF;">&nbsp; (022) 7207777</span></p>
                        <p style="font-size:15px;line-height:16.5px;color:#28A7E9;line-height:22.4px;"><span style="font-weight:bold;color:#28A7E9;">Email:</span><span style="color:#FFFFFF;">&nbsp; info@stmik-bandung.ac.id</span></p>
                        <p style="font-size:15px;line-height:16.5px;color:#28A7E9;line-height:22.4px;"><span style="font-weight:bold;color:#28A7E9;">Fax:</span><span style="color:#FFFFFF;">&nbsp; (022) 7207777</span></p>
                     </div>
                  </div>
                  <div class="col-2">
                     <div id="wb_contactFormInner">
                        <div id="contactFormInner">
                           <div class="row">
                              <div class="col-1">
                                 <div class="col-1-padding">
                                    <input type="text" id="contactName" style="display:block;width: 100%;height:42px;z-index:5;" name="nama" value="" spellcheck="false" placeholder="Nama" required>
                                 </div>
                              </div>
                              <div class="col-2">
                                 <div class="col-2-padding">
                                    <input type="text" id="contactEmail" style="display:block;width: 100%;height:42px;z-index:6;" name="nim" value="" spellcheck="false" placeholder="Nim" required>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <input type="text" id="contactSubject" style="display:block;width: 100%;height:42px;z-index:8;" name="email" value="" spellcheck="false" placeholder="Email" required>
                     <input type="text" id="contactSubject" style="display:block;width: 100%;height:42px;z-index:8;" name="kat_surat" value="" spellcheck="false" placeholder="Kategori Surat" required>
                     <textarea name="jenis_surat" id="contactMessage" style="display:block;width: 100%;;height:108px;z-index:9;" rows="4" cols="41" spellcheck="false" placeholder="Jenis surat dan di Tujukan pada (Data Lengkap)" required></textarea>
                     <input type="submit" id="contactButton" value="Kirim" style="display:block;width: 100%;;height:39px;z-index:10;">
                  </div>
               </div>
            </div>
         </div>
         <div id="wb_LayoutGrid2" style="z-index: 10000 !important;">
            <div id="LayoutGrid2">
               <div class="row">
                  <div class="col-1"></div>
                  <div class="col-2">
                     <div id="wb_FontAwesomeIcon3" style="display:inline-block;width:20px;height:20px;text-align:center;z-index:13;">
                        <a href="https://web.facebook.com/BandungSTMIK/">
                           <div id="FontAwesomeIcon3"><i class="fa fa-facebook"></i></div>
                        </a>
                     </div>
                     <div id="wb_FontAwesomeIcon4" style="display:inline-block;width:20px;height:20px;text-align:center;z-index:14;">
                        <a href="www.instagram.com/stmikbandung/">
                           <div id="FontAwesomeIcon4"><i class="fa fa-instagram"></i></div>
                        </a>
                     </div>
                     <div id="wb_FontAwesomeIcon8" style="display:inline-block;width:20px;height:20px;text-align:center;z-index:15;">
                        <a href="https://www.youtube.com/channel/UCquRaRrD-VR2sWhHNHDLV5g">
                           <div id="FontAwesomeIcon8"><i class="fa fa-youtube"></i></div>
                        </a>
                     </div>
                     <div id="wb_FontAwesomeIcon10" style="display:inline-block;width:20px;height:20px;text-align:center;z-index:16;">
                        <a href="mailto:info@stmik-bandung.ac.id">
                           <div id="FontAwesomeIcon10"><i class="fa fa-volume-control-phone"></i></div>
                        </a>
                     </div>
                  </div>
                  <div class="col-3"></div>
               </div>
            </div>
         </div>
      </form>
   </body>
</html>