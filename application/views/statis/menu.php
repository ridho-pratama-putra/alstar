<script type="text/javascript">
    function home() {
        window.location = '<?=base_url()?>';
    }

    function registrasi() {
        window.location ='<?=base_url()?>registrasi';
    }

    function login(){
        window.location = '<?=base_url()?>login';
    }

    function logout() {
        window.location = '<?=base_url()?>logout';
    }
</script>
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
        <a class="navbar-brand" href="<?=base_url()?>">PORKAB MALANG VII</a>

      </div>
      <div class="navigation collapse navbar-collapse navbar-ex1-collapse">
        <ul class="nav navbar-nav">
            <li>
                <a href="" onclick="home()">Home</a>
            </li>
            <li>
                <a href="" onclick="registrasi()">Registrasi</a>
            </li>
            <li>
                <a href="#tentangkami">Tentang Kami</a>
            </li>
            <li>
                <a href="#contact">Contact</a>
            </li>
            <?php if ($this->session->userdata('loginSession') == array()) { ?>
            <li>
                <a href="" onclick="login()">Login Admin</a>
            </li>
            <?php } else{ ?>
              <li>
                <a href="" onclick="logout()">Logout</a>
              </li>
            <?php
            }?>
        </ul>
      </div>
    </div>
  </nav>
