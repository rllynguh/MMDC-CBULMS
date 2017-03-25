<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <title>Contract Creation | Majent CBULMS</title>
    <!-- Favicon-->
      <link rel="icon" href="images/icon1.ico">
      <!-- Bootstrap Core Css -->
      <link href="plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

      <!-- Waves Effect Css -->
      <link href="plugins/node-waves/waves.css" rel="stylesheet" />

      <!-- Animation Css -->
      <link href="plugins/animate-css/animate.css" rel="stylesheet" />

      <!-- Morris Chart Css-->
      <link href="plugins/morrisjs/morris.css" rel="stylesheet" />

      <!-- Custom Css -->
      <link href="css/style.css" rel="stylesheet">

      <link href="css/themes/all-themes.css" rel="stylesheet" />
</head>

<body class="theme-brown">
  <!-- Page Loader -->
  <?php
      include('includes/preloader.php');
  ?>
  <!-- #END# Page Loader -->
  <!-- Overlay For Sidebars -->
  <div class="overlay"></div>
  <!-- #END# Overlay For Sidebars -->
  <!-- #END# Search Bar -->

  <!-- Top Bar -->
  <?php
      include('includes/navtop.php');
  ?>
  <!-- #Top Bar -->

  <section>
      <!-- Left Sidebar -->

      <aside id="leftsidebar" class="sidebar">
          <!-- User Info -->
          <?php
              include('includes/userinfo.php');
          ?>
          <!-- #User Info -->

          <!-- Menu -->
          <?php
              include('includes/navside.php');
          ?>
          <!-- #Menu -->
      </aside>

      <!-- #END# Left Sidebar -->
  </section>

    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
            </div>

            <!-- Advanced Form Example With Validation -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header align-center">
                            <h2>Registration</h2>
                        </div>
                        <div class="body">
                            <form id="wizard_with_validation" method="POST">

                                <h3>Client information</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="name" class="form-control" required>
                                            <label class="form-label">Company</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" name="surname" class="form-control" required>
                                            <label class="form-label">Nature of Business</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="email" name="email" class="form-control" required>
                                            <label class="form-label">Email*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <textarea name="address" cols="30" rows="3" class="form-control no-resize" required></textarea>
                                            <label class="form-label">Address*</label>
                                        </div>
                                    </div>
                                </fieldset>
                                <h3>Representative Information</h3>
                                <fieldset>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="text" class="form-control" name="username" required>
                                            <label class="form-label">First Name*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="" class="form-control" name="" id="password" required>
                                            <label class="form-label">Middle Name*</label>
                                        </div>
                                    </div>
                                    <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="" class="form-control" name="" required>
                                            <label class="form-label">Last Name</label>
                                        </div>
                                    </div>
									<div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="" class="form-control" name="" required>
                                            <label class="form-label">Position</label>
                                        </div>
                                    </div>
                                </fieldset>
								<h3>Unit</h3>
                                <fieldset>
								
                                </fieldset>
                                <h3>Terms & Conditions - Finish</h3>
                                <fieldset>
                                    <input id="acceptTerms-2" name="acceptTerms" type="checkbox" required>
                                    <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Advanced Form Example With Validation -->
        </div>
    </section>

    <!-- Jquery Core Js -->
    <script src="plugins/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core Js -->
    <script src="plugins/bootstrap/js/bootstrap.js"></script>

    <!-- Select Plugin Js -->
    <script src="plugins/bootstrap-select/js/bootstrap-select.js"></script>

    <!-- Slimscroll Plugin Js -->
    <script src="plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

    <!-- Jquery Validation Plugin Css -->
    <script src="plugins/jquery-validation/jquery.validate.js"></script>

    <!-- JQuery Steps Plugin Js -->
    <script src="plugins/jquery-steps/jquery.steps.js"></script>

    <!-- Sweet Alert Plugin Js -->
    <script src="plugins/sweetalert/sweetalert.min.js"></script>

    <!-- Waves Effect Plugin Js -->
    <script src="plugins/node-waves/waves.js"></script>

    <!-- Custom Js -->
    <script src="js/admin.js"></script>
    <script src="js/pages/forms/form-wizard.js"></script>

    <!-- Demo Js -->
    <script src="js/demo.js"></script>
</body>
</html>
