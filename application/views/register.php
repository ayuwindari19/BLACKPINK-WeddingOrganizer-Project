<!DOCTYPE html>
<html lang="en">

  <head>
        <?php $this->load->view('admin/_partials/head.php') ?>
  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-register mx-auto mt-5">
        <div class="card-header">Register an Account</div>
        <div class="card-body">
          <form>
            <!-- <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="firstName" class="form-control" placeholder="First name" required="required" autofocus="autofocus">
                    <label for="firstName">First name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">
                    <label for="lastName">Last name</label>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="form-group">
              <div class="form-label-group">
                <input type="text" name="nama" id="inputName" class="form-control" placeholder="Nama Lengkap" required="required">
                <label for="inputName">Nama Lengkap</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" name="username" id="inputUsername" class="form-control" placeholder="Username" required="required">
                    <label for="inputUsername">Username</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="required">
                    <label for="inputPassword">Password</label>
                  </div>
                </div>
              </div>
            </div>
            <a class="btn btn-primary btn-block" href="login.html">Register</a>
          </form>
          <div class="text-center">
            <a class="d-block small mt-3" href="<?php echo site_url('../') ?>">Login Page</a>
            <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
          </div>
        </div>
      </div>
    </div>

        <?php $this->load->view('admin/_partials/js.php') ?>

  </body>

</html>
