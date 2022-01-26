<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta name="keywords" content="HTML5 Template" />
  <meta name="description" content="Directro - Directory and Listing Template" />
  <meta name="author" content="potenzaglobalsolutions.com" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Location Find - Sri Lanka</title>

  <!-- Favicon -->
  <link rel="shortcut icon" href="images/favicon.ico" />

  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700;900&amp;display=swap">

  <!-- CSS Global Compulsory (Do not remove)-->
  <link rel="stylesheet" href="css/font-awesome/all.min.css" />
  <link rel="stylesheet" href="css/flaticon/flaticon.css" />
  <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

  <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
  <link rel="stylesheet" href="css/select2/select2.css" />
  <link rel="stylesheet" href="css/dropzone/dropzone.css" />

  <!-- Template Style -->
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="sweetalert/sweetalert.css" />

</head>

<body>
  <!--=================================
header -->
  <header class="header header-light">

    <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
      <div class="container-fluid">
        <div class="col-md-6">
          <a class="navbar-brand" href="index.php">
            <img class="img-fluid" src="images/logo-dark.svg" alt="logo">
          </a>
        </div>
        <!--<div class="col-md-6" style="margin-top: 18px;">
          <a class="btn btn-primary btn-md" href="index.php"> <i class="fa fa-plus-circle"></i>MAP LIST </a>
        </div>-->
      </div>
      <div class="d-block d-md-flex align-items-center">

        <a class="btn btn-primary btn-md" href="add-listing.php" target="_blank" style="width: 160px;margin-right: 10px;">
          <i class="fa fa-plus-circle"></i>MAP LIST </a>
      </div>
      </div>
      </div>
    </nav>
  </header>


  <!--=================================
Add Listings -->
  <section class="space-ptb bg-light">
    <div class="container">
      <div class="row">

        <div class="col-lg-12 col-md-8">
          <div class="sidebar mb-0">
            <div class="widget">
              <div class="widget-title bg-primary">
                <h6 class="text-white mb-0"> <i class="far fa-address-book"></i> General Information: </h6>
              </div>
              <div class="widget-content">
                <form class="row" id="form-data">

                  <div class="mb-3 col-lg-6">
                    <label class="form-label">Full name</label>
                    <input type="text" class="form-control" placeholder="Full name" id="full_name" name="full_name">
                  </div>

                  <div class="mb-3 col-lg-6">
                    <label class="form-label">NIC Number</label>
                    <input type="text" class="form-control" placeholder="NIC Number" id="nic" name="nic">
                  </div>

                  <div class="mb-3 col-lg-6">
                    <label class="form-label">Age</label>
                    <input type="text" class="form-control" placeholder="Age" id="age" name="age">
                  </div>

                  <div class="mb-3 col-lg-6">
                    <label class="form-label">Date of Birth</label>
                    <input type="text" class="form-control" placeholder="Date of Birth" id="date_of_birth" name="date_of_birth">
                  </div>

                  <div class="mb-3 col-lg-6">
                    <label class="form-label">City</label>
                    <input type="text" class="form-control" placeholder="City" id="city" name="city">
                  </div>

                  <div class="mb-3 col-lg-6">
                    <label class="form-label">Address</label>
                    <input type="text" class="form-control" placeholder="Address" id="address" name="address">
                  </div>


                  <div class="col-12 mb-0">
                    <label class="form-label">Description</label>
                    <textarea class="form-control" rows="4" placeholder="Description" id="description" name="description"></textarea>
                  </div>
                </form>
              </div>
            </div>

            <div class="widget">
              <div class="widget-title bg-primary">
                <h6 class="text-white mb-0"> <i class="fas fa-map-marked-alt"></i> Location: </h6>
              </div>
              <div class="widget-content">

                <div class="row">
                  <center>
                    <a class="btn btn-primary btn-md" href="index.php"> <i class="fa fa-map"></i>Find my location </a>
                  </center>
                </div>

                <form class="row mt-4">

                  <div class="mb-3 col-12 form-group">
                    <a class="btn btn-secondary" id="create" style="float: right;">Save & Preview</a>
                  </div>

                  <input type="hidden" class="form-control" name="longitude" value="1">
                  <input type="hidden" class="form-control" name="latitude" value="1">


                </form>
              </div>
            </div>


          </div>
        </div>
      </div>
    </div>
  </section>


  <div id="back-to-top" class="back-to-top">
    <a href="#"> <i class="fas fa-angle-up"></i></a>
  </div>



  <!-- JS Global Compulsory (Do not remove)-->
  <script src="js/jquery-3.6.0.min.js"></script>
  <script src="js/popper/popper.min.js"></script>
  <script src="js/bootstrap/bootstrap.min.js"></script>

  <script src="sweetalert/sweetalert-dev.js"></script>
  <script src="ajax/js/location.js"></script>


  <script src="js/select2/select2.full.js"></script>
  <script src="js/dropzone/dropzone.js"></script>

  <!-- Template Scripts (Do not remove)-->
  <script src="js/custom.js"></script>

</body>


</html>