<!DOCTYPE html>
<?php
include './class/include.php';

$DEFAULTDATA = new DefaultData(null);
?>
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
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

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
    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>

    <style>
        /* Always set the map height explicitly to define the size of the div
                               * element that contains the map. */
        #map {
            height: 100%;
        }

        /* Optional: Makes the sample page fill the window. */
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        .custom-map-control-button {
            background-color: #fff;
            border: 0;
            border-radius: 2px;
            box-shadow: 0 1px 4px -1px rgba(0, 0, 0, 0.3);
            margin: 10px;
            padding: 0 0.5em;
            font: 400 18px Roboto, Arial, sans-serif;
            overflow: hidden;
            height: 40px;
            cursor: pointer;
        }

        .custom-map-control-button:hover {
            background: #ebebeb;
        }
    </style>


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

                <a class="btn btn-primary btn-md" href="index.php" target="_blank" style="width: 160px;margin-right: 10px;">
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
                                        <label class="form-label">Contact Number</label>
                                        <input type="text" class="form-control contact_number " placeholder="contact number" id="contact_number" name="contact_number" maxlength="10">
                                    </div>

                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Whatsapp No 1 </label>
                                        <input type="text" class="form-control" placeholder="Whatsapp No 1 " id="whatsapp_no_1" name="whatsapp_no_1" maxlength="10">
                                    </div>

                                    <div class="mb-3 col-lg-6  " style="display: none;">
                                        <label class="form-label">Whatsapp No 2</label>
                                        <input type="text" class="form-control" placeholder="Whatsapp No 2" id="whatsapp_no_2" name="whatsapp_no_2" value="0">
                                    </div>

                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Email</label>
                                        <input type="text" class="form-control email-inputmask" placeholder="Email" id="email" name="email">
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <label class="form-label">Gender</label>
                                        <select class="form-control" id="gender" name="gender">
                                            <option value=""> -- Select gender -- </option>
                                            <option value="Male"> Male </option>
                                            <option value="Female"> Female </option>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <label class="form-label">Date of Birth</label>
                                        <input type="text" class="form-control date-inputmask" placeholder="Date of Birth" id="date_of_birth" name="date_of_birth">
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <label class="form-label">Religion</label>
                                        <select class="form-control" id="religion" name="religion">
                                            <option value=""> -- Select religion -- </option>
                                            <?php
                                            foreach ($DEFAULTDATA->religion() as $key => $religion) {
                                            ?>
                                                <option value="<?php echo $key ?>"> <?php echo $religion ?> </option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-lg-4">
                                        <label class="form-label">Nationality </label>
                                        <select class="form-control" id="nationality" name="nationality">
                                            <option value=""> -- Select nationality -- </option>
                                            <?php
                                            foreach ($DEFAULTDATA->nationality() as $key => $nationality) {
                                            ?>
                                                <option value="<?php echo $key ?>"> <?php echo $nationality ?> </option>
                                            <?php } ?>
                                        </select>
                                    </div>


                                    <div class="mb-3 col-lg-4">
                                        <label class="form-label">Agent or not Agent</label><br>
                                        <label> Yes <input type="radio" id="yes" name="is_agent" value="1" style="margin-right: 10px;"> </label>
                                        <label> No <input type="radio" id="no" name="is_agent" value="0" checked> </label>
                                    </div>

                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">District</label>
                                        <select class="form-select" name="district" id="district">
                                            <option value="">---- Select the District ---</option>
                                            <?php
                                            $DISTRICTS_OBJ = new Districts(NULL);
                                            $DISTRICTS = $DISTRICTS_OBJ->all();
                                            foreach ($DISTRICTS as $DISTRICT) {
                                            ?>
                                                <option value="<?php echo $DISTRICT['id']; ?>"><?php echo $DISTRICT['name']; ?></option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>

                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">District Secretariat</label>
                                        <select class="form-select" name="ds" id="ds">

                                        </select>
                                    </div>

                                    <div class="mb-3 col-lg-12">
                                        <label class="form-label">Address</label>
                                        <input type="text" class="form-control" placeholder="Address" id="address" name="address">
                                    </div>


                                    <div class="col-12 mb-0">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" rows="4" placeholder="Description" id="description" name="description"></textarea>
                                    </div>


                                    <div class="widget-content">
                                        <div id="map" style="border:0; width: 100%; height: 250px;margin-bottom:10px;"></div>

                                        <input type="hidden" class="form-control" name="longitude" id="longitude">
                                        <input type="hidden" class="form-control" name="latitude" id="latitude">

                                        <div class="mb-3 col-12 form-group">
                                            <a class="btn btn-secondary" id="create" style="float: right;margin-top: 10px;margin-bottom:10px;">Save Data</a>
                                            <br><!-- comment -->
                                            <br>
                                        </div>
                                    </div>
                                </form>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- JS Global Compulsory (Do not remove)-->


    <script src="js/jquery.min.js" type="text/javascript"></script>

    <script src="js/jquery.inputmask.bundle.min.js"></script>

    <script>
        $(function(e) {
            "use strict";
            $(".date-inputmask").inputmask("dd/mm/yyyy"),

                $(".contact_number").inputmask("9999999999"),
                $(".email-inputmask").inputmask({
                    mask: "*{1,20}[.*{1,20}][.*{1,20}][.*{1,20}]@*{1,20}[*{2,6}][*{1,2}].*{1,}[.*{2,6}][.*{1,2}]",
                    greedy: !1,
                    onBeforePaste: function(n, a) {
                        return (e = e.toLowerCase()).replace("mailto:", "")
                    },
                    definitions: {
                        "*": {
                            validator: "[0-9A-Za-z!#$%&'*+/=?^_`{|}~/-]",
                            cardinality: 1,
                            casing: "lower"
                        }
                    }
                })
        });
    </script>


    <script src="js/bootstrap/bootstrap.min.js"></script>

    <script src="ajax/js/location.js"></script>


    <script src="js/select2/select2.full.js"></script>
    <script src="js/dropzone/dropzone.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>

    <script src="ajax/js/district.js" type="text/javascript"></script>




    <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCFzGKfzDOLBpIU1ElAxVrBr-Ed2QRwzgQ&callback=initMap&v=weekly" async></script>

    <script>
        // Note: This example requires that you consent to location sharing when
        // prompted by your browser. If you see the error "The Geolocation service
        // failed.", it means you probably did not give permission for the browser to
        // locate you.
        let map, infoWindow;

        function initMap() {
            map = new google.maps.Map(document.getElementById("map"), {
                center: {
                    lat: 7.8731,
                    lng: 80.7718
                },
                zoom: 8,
            });
            infoWindow = new google.maps.InfoWindow();

            const locationButton = document.createElement("button");

            locationButton.textContent = "Pan to Current Location";
            locationButton.classList.add("custom-map-control-button");
            map.controls[google.maps.ControlPosition.TOP_CENTER].push(locationButton);
            locationButton.addEventListener("click", (event) => {
                event.preventDefault();

                // Try HTML5 geolocation.
                if (navigator.geolocation) {
                    navigator.geolocation.getCurrentPosition(
                        (position) => {
                            const pos = {
                                lat: position.coords.latitude,
                                lng: position.coords.longitude,
                            };

                            infoWindow.setPosition(pos);
                            infoWindow.setContent("Lat : " + position.coords.latitude + "---Lng: " + position.coords.longitude);
                            infoWindow.open(map);
                            map.setCenter(pos);

                            document.getElementById("longitude").value = position.coords.longitude;
                            document.getElementById("latitude").value = position.coords.latitude;

                        },
                        () => {
                            handleLocationError(true, infoWindow, map.getCenter());
                        }
                    );
                } else {
                    // Browser doesn't support Geolocation
                    handleLocationError(false, infoWindow, map.getCenter());
                }
            });
        }

        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
            infoWindow.setPosition(pos);
            infoWindow.setContent(
                browserHasGeolocation ?
                "Error: The Geolocation service failed." :
                "Error: Your browser doesn't support geolocation."
            );
            infoWindow.open(map);
        }
    </script>

</body>


</html>