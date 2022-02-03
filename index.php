<?php
include './class/include.php';
?>
<!DOCTYPE html>
<html lang="en">
<?php
include "./class/include.php";
?>

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="HTML5 Template" />
    <meta name="description" content="Directro - Directory and Listing Template" />
    <meta name="author" content="potenzaglobalsolutions.com" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Directory and Listing</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="images/favicon.ico" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700;900&amp;display=swap">


    <!-- DataTables -->
    <link href="assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- Responsive datatable examples -->
    <link href="assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="css/font-awesome/all.min.css" />
    <link rel="stylesheet" href="css/flaticon/flaticon.css" />
    <link rel="stylesheet" href="css/bootstrap/bootstrap.min.css" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="css/select2/select2.css" />
    <link rel="stylesheet" href="css/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="css/map/snazzy-info-window.min.css" />

    <!-- Template Style -->
    <link rel="stylesheet" href="css/style.css" />
    <link href="css/map-api.css" rel="stylesheet" type="text/css" />


</head>

<body>

    <!--=================================
    header -->
    <?php include 'header.php' ?>
    <!--=================================
     header -->



    <!--=================================
    listing map-->
    <section class="bg-white half-map">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-xl-6 col-lg-5">
                    <div class="half-map-full">
                        <div id="GoogleMaps"></div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-7">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Full Name</th>
                                            <th>NIC</th>
                                            <th>Age</th>
                                            <th>District</th>
                                            <th>secretariat</th>
                                            <th>Date of birth</th>
                                            <th>Contact No</th>
                                            <th>Religion</th>
                                            <th>Nationality</th>
                                            <th>Is agent</th>
                                            <th>whatsapp no</th>

                                            <th>Address</th>
                                            <th>Gender</th>
                                            <th>Email</th>
                                            <th> Description</th>
                                        </tr>
                                    </thead>


                                    <tbody>
                                        <?php
                                        $CENTRES_OBJ = new Center(NULL);
                                        $DEFUALT_DATA = new DefaultData(NULL);
                                        $CENTRES = $CENTRES_OBJ->all();
                                        foreach ($CENTRES as $key => $center) {
                                            $key++;
                                            $DS = new Ds($center['district_secretariat']);
                                            $DISTRICT = new Districts($DS->district)

                                        ?>
                                            <tr>
                                                <td><?php echo $key; ?></td>
                                                <td><?php echo $center['full_name']; ?></td>
                                                <td><?php echo $center['nic']; ?></td>
                                                <td><?php echo $center['age']; ?></td>
                                                <td><?php echo     $DISTRICT->name; ?></td>
                                                <td><?php echo   $DS->name; ?></td>
                                                <td><?php echo $center['date_of_birth']; ?></td>
                                                <td><?php echo $center['contact_number']; ?></td>

                                                <td>
                                                    <?php
                                                    foreach ($DEFUALT_DATA->religion() as $keys => $religion) {
                                                        if ($keys == $center['religion']) {
                                                            echo $religion;
                                                        }
                                                    }
                                                    ?>
                                                </td>

                                                <td>
                                                    <?php

                                                    foreach ($DEFUALT_DATA->nationality() as $nat => $religion) {
                                                        if ($nat == $center['nationality']) {
                                                            echo $religion;
                                                        }
                                                    }
                                                    ?>
                                                </td>
                                                <td><?php
                                                    if ($center['is_agent'] == 0) {
                                                        echo "Not Agent";
                                                    } else {
                                                        echo "Agent";
                                                    }
                                                    ?></td>
                                                <td><?php echo $center['whatsapp_no_1']; ?></td>
                                                <td><?php echo $center['address']; ?></td>
                                                <td><?php echo $center['gender']; ?></td>
                                                <td><?php echo $center['email']; ?></td>
                                                <td><?php echo $center['description']; ?></td>

                                            </tr>
                                        <?php
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div> <!-- end col -->
                </div>
            </div>
        </div>
    </section>
    <!--=================================
    listing map-->

    <!--=================================
    Back To Top-->

    <div id="back-to-top" class="back-to-top">
        <a href="#"> <i class="fas fa-angle-up"></i></a>
    </div>

    <!--=================================
    Back To Top-->

    <!--=================================
    Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->

    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="js/select2/select2.full.js"></script>
    <script src="js/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="js/nicescroll/jquery.nicescroll.min.js"></script>
    <script src="js/map/handlebars.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;key=AIzaSyBPohe84NhPXKlVEVXxOsR9HQJkBpa6Z0o"></script>
    <script src="js/map/snazzy-info-window.min.js"></script>

    <script src="js/index-tooltip.js" type="text/javascript"></script>
    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>
    <script src="js/markers-on-map-1.4.0.js" type="text/javascript"></script>
    <script src="js/map-api.js" type="text/javascript"></script>


    <!-- Required datatable js -->
    <script src="assets/libs/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <!-- Buttons examples -->
    <script src="assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
    <script src="assets/libs/jszip/jszip.min.js"></script>
    <script src="assets/libs/pdfmake/build/pdfmake.min.js"></script>
    <script src="assets/libs/pdfmake/build/vfs_fonts.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="assets/libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>

    <!-- Responsive examples -->
    <script src="assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>

    <!-- Datatable init js -->
    <script src="assets/datatables.init.js" type="text/javascript"></script>

</body>

</html>