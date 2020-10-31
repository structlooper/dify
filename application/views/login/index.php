
<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dify Login</title>
  <!-- base:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>asset/login_assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="<?= base_url(); ?>asset/login_assets/vendors/css/vendor.bundle.base.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="<?= base_url(); ?>asset/login_assets/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="<?= base_url(); ?>asset/images/logo.png" />
  <style>
      .auth .login-half-bg {
    background: url(asset/login_assets/drive.jpeg);
    background-size: cover;
  </style>
</head>

<body>
  <div class="container-scroller d-flex">
    <div class="container-fluid page-body-wrapper full-page-wrapper d-flex">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        <div class="row flex-grow">
          <div class="col-lg-6 d-flex align-items-center justify-content-center">
            <div class="auth-form-transparent text-left p-3">
              <div class="brand-logo">
                <img src="<?= base_url(); ?>asset/images/logo.png" alt="logo">
              </div>
              <h4>Welcome back!</h4>
              <h6 class="font-weight-light">Happy to see you again!</h6>
             <?= form_open_multipart('login/aksi_login'); ?>
                <div class="form-group">
                  <label for="exampleInputEmail">Username</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-account-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="text" class="form-control form-control-lg border-left-0" id="exampleInputEmail" placeholder="Username"name="user_name" required>
                  </div>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword">Password</label>
                  <div class="input-group">
                    <div class="input-group-prepend bg-transparent">
                      <span class="input-group-text bg-transparent border-right-0">
                        <i class="mdi mdi-lock-outline text-primary"></i>
                      </span>
                    </div>
                    <input type="password" class="form-control form-control-lg border-left-0" id="exampleInputPassword"  placeholder="Password" name="password" required>                        
                  </div>
                </div>
                
                <div class="my-3">
                   <button type="submit" class="btn btn-block btn-lg font-weight-medium" style="color: #fff;background: linear-gradient(88deg, #E37C08, #FAA443);">Login</button>
                </div>
              
              <!--</form>-->
            </div>
          </div>
          <div class="col-lg-6 login-half-bg d-none d-lg-flex flex-row">
            <p class="text-white font-weight-medium text-center flex-grow align-self-end">Copyright Dify; 2020  All rights reserved.</p>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- base:js -->
  <script src="<?= base_url(); ?>asset/login_assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- inject:js -->
  <script src="<?= base_url(); ?>asset/login_assets/js/off-canvas.js"></script>
  <script src="<?= base_url(); ?>asset/login_assets/js/hoverable-collapse.js"></script>
  <script src="<?= base_url(); ?>asset/login_assets/js/template.js"></script>
  <!-- endinject -->
</body>

</html>