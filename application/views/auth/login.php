<!-- Contact -->
  <section id="contact" class="home-section bg-gray">
    <div class="container">
      <div class="row">
        <div class="col-md-offset-2 col-md-8">
          <div class="section-heading">
            <h2>Log In</h2>
            <div class="heading-line"></div>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-md-offset-2 col-md-8">

          <form action="<?=base_url()?>submit-login" method="post" class="form-horizontal" role="form">
            <div class="col-md-offset-2 col-md-8">
              <div class="form-group">
                <label>Username</label>
                <input type="text" name="username" class="form-control" id="name" placeholder="Username"data-msg=" " />
                <br/>
                <label>Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="PassWord" data-msg=" "/>
                <br/>
                <button type="submit" class="btn btn-theme btn-lg btn-block">Log In</button>
              </div>
            </div>
          </form>

        </div>
      </div>

    </div>
  </section>