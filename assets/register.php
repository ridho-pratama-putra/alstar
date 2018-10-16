<!DOCTYPE html>
<html>

<head>
  <title>PORKAB MALANG VII</title>
  <meta charset="utf-8" />
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- css -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,700,800" rel="stylesheet" media="screen">

  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link href="css/style.css" rel="stylesheet" media="screen">
  <link href="color/default.css" rel="stylesheet" media="screen">

  <!-- SELECT2 -->
    <link rel="stylesheet" href="select2/css/select2.min.css">
    <script src="js/jquery.js"></script>
    <!-- <script src="js/jquery-3.3.1.min.js"></script> -->
    
    <script src="select2/js/select2.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#kecamatan").select2(); 
            $("#cabor").select2();
        });
    </script>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-default" role="navigation">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
          <span class="sr-only">Toggle nav</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <!-- Logo text or image -->
        <a class="navbar-brand" href="index.php">PORKAB MALANG VII</a>

      </div>
      <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
          <li class="current"><a href="index.php">Home</a></li>
          <li><a href="/alstar/registrasi/">Registrasi</a></li>
          <li><a href="#tentangkami">Tentang Kami</a></li>
          <li><a href="login.php">Login Admin</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>
    </div>
  </nav>


  <!-- Contact -->
  <section id="contact" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Contact us</h2>
            <div class="heading-line"></div>
            <p>If you have any question or just want to say 'hello' to Alstar web studio please fill out form below and we will be get in touch with you within 24 hours. </p>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div id="sendmessage">Your message has been sent. Thank you!</div>
          <div id="errormessage"></div>

          <form action="" method="post" class="form-horizontal contactForm" role="form">
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <label for="first_name" class="required">Nama</label>
                <input type="text" name="first_name" id="first_name" />
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <label for="TTL" class="required">Tempat, Tanggal Lahir</label>
                <div class="col">
                    <input type="text" placeholder="Tempat," name="tempat" id="tempat" /><input type="date"  placeholder="Tanggal Lahir" name="TTL" id="TTL" />
                </div>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <label for="alamat" class="required">Alamat</label>
                <textarea name="alamat" id="alamat"></textarea>
              </div>
            </div>

            <div class="col-md-offset-2 col-md-8">
                <div class="form-group">
                    <label for="email" class="required">Email</label>
                    <input type="text" name="email" id="email" />
                </div>
            </div>
            <div class="col-md-offset-2 col-md-8">
                <div class="form-group">
                    <label for="no_tlp" class="required">Nomor Telepon</label>
                    <input type="text" name="no_tlp" id="no_tlp" />
                </div>
            </div>

            <div class="form-group">
                <div class="form-select">
                    <div class="label-flex">
                        <label for="kecamatan" class="required">Kecamatan</label>
                    </div>
                    <div class="select-list">
                        <select name="kecamatan" id="kecamatan">
                            <option value="Ampelgading">Ampelgading</option>
                            <option value="Bantur">Bantur</option>
                            <option value="Bululawang">Bululawang</option>
                            <option value="Dampit">Dampit</option>
                            <option value="Dau">Dau</option>
                            <option value="Donomulyo">Donomulyo</option>
                            <option value="Gedangan">Gedangan</option>
                            <option value="Gondanglegi">Gondanglegi</option>
                            <option value="Jabung">Jabung</option>
                            <option value="Kalipare">Kalipare</option>
                            <option value="Karangploso">Karangploso</option>
                            <option value="Kasembon">Kasembon</option>
                            <option value="Kepanjen">Kepanjen</option>
                            <option value="Kromengan">Kromengan</option>
                            <option value="Lawang">Lawang</option>
                            <option value="Ngajum">Ngajum</option>
                            <option value="Ngantang">Ngantang</option>
                            <option value="Pagak">Pagak</option>
                            <option value="Pagelaran">Pagelaran</option>
                            <option value="Pakis">Pakis</option>
                            <option value="Pakisaji">Pakisaji</option>
                            <option value="Poncokusumo">Poncokusumo</option>
                            <option value="Pujon">Pujon</option>
                            <option value="Sumbermanjing Wetan">Sumbermanjing Wetan</option>
                            <option value="Singosari">Singosari</option>
                            <option value="Sumberpucung">Sumberpucung</option>
                            <option value="Tajinan">Tajinan</option>
                            <option value="Tirtoyudo">Tirtoyudo</option>
                            <option value="Tumpang">Tumpang</option>
                            <option value="Turen">Turen</option>
                            <option value="Wagir">Wagir</option>
                            <option value="Wajak">Wajak</option>
                            <option value="Wonosari">Wonosari</option>
                        </select>
                    </div>
                </div>
                <div class="form-select">
                    <div class="label-flex">
                        <label for="cabor" class="required">Cabang Olahraga</label>
                    </div>
                    <div class="select-list">
                        <select name="cabor" id="cabor">
                            <option value="Anggar">Anggar</option>
                            <option value="Atletik">Atletik</option>
                            <option value="Balap Sepeda">Balap Sepeda</option>
                            <option value="Bola Basket">Bola Basket</option>
                            <option value="Bridge">Bridge</option>
                            <option value="Hockey">Hockey</option>
                            <option value="Kick Boxing(Full Contact)">Kick Boxing(Full Contact)</option>
                            <option value="Kick Boxing(Point Fighting)">Kick Boxing(Point Fighting)</option>
                            <option value="Kick Boxing(Musical Form)">Kick Boxing(Musical Form)</option>
                            <option value="Muaythai(Putra)">Muaythai(Putra)</option>
                            <option value="Muaythai(Putri)">Muaythai(Putri)</option>
                            <option value="Panahan">Panahan</option>
                            <option value="Panjat Tebing">Panjat Tebing</option>
                            <option value="Pentaque">Pentaque</option>
                            <option value="Tarung Derajat">Tarung Derajat</option>
                            <option value="Tinju">Tinju</option>
                            <option value="Bola Voli Indoor">Bola Voli Indoor</option>
                            <option value="Bola Voli Pasir">Bola Voli Pasir</option>
                            <option value="Wushu">Wushu</option>
                            <option value="Pencak Silat(Tanding)">Pencak Silat(Tanding)</option>
                            <option value="Pencak Silat(Seni)">Pencak Silat(Seni)</option>
                            <option value="Shorinji Kempo">Shorinji Kempo</option>
                            <option value="Gulat">Gulat</option>
                            <option value="Selam">Selam</option>
                            <option value="Futsal">Futsal</option>
                            <option value="Sepak Bola">Sepak Bola</option>
                            <option value="Karate">Karate</option>
                            <option value="Tenis Lapangan">Tenis Lapangan</option>
                            <option value="Taekwondo">Taekwondo</option>
                            <option value="Cricket">Cricket</option>
                            <option value="Bilyar">Bilyar</option>
                            <option value="Catur">Catur</option>
                        </select>
                    </div>

                    <!-- <div class="form-radio-group">            
                        <div class="form-radio-item">
                            <input type="radio" name="payment" id="cash" checked>
                            <label for="cash">Cash</label>
                            <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                            <input type="radio" name="payment" id="cheque">
                            <label for="cheque">Cheque</label>
                            <span class="check"></span>
                        </div>
                        <div class="form-radio-item">
                            <input type="radio" name="payment" id="demand">
                            <label for="demand">Demand Draf</label>
                            <span class="check"></span>
                        </div>
                    </div> -->
                </div>
            </div>
            
            <div class="form-group">
              <div class="col-md-offset-2 col-md-8">
                <button type="submit" class="btn btn-theme btn-lg btn-block">Send message</button>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
  </section>

  <!-- Footer -->
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p>Copyright &copy; Alstar. All rights reserved.</p>
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Alstar
            -->
            Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- js -->
  
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/mb.bgndGallery.js"></script>
  <script src="js/mb.bgndGallery.effects.js"></script>
  <script src="js/jquery.simple-text-rotator.min.js"></script>
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nav.js"></script>
  <script src="js/modernizr.custom.js"></script>
  <script src="js/grid.js"></script>
  <script src="js/stellar.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Custom Javascript File -->
  <script src="js/custom.js"></script>

</body>
</html>
