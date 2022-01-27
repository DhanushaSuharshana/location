<?php 
include './class/include.php';
?>
<!DOCTYPE html>
<html lang="en">

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
    <link href="css/map-api.css" rel="stylesheet" type="text/css"/>
</head>

<body>

    <!--=================================
header -->
    <?php include'header.php'?>
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
                    <div class="scrollbar scroll_dark h-100vh">
                        <form class="home-search-02 bg-white">
                            <div class="row g-0">
                                <div class="col-lg-9 mt-4 mt-lg-0">
                                    <div class="form-group mb-0 form-location">
                                        <input type="text" class="form-control" placeholder="What are you looking for...">
                                        <a class="location-icon" href="#"> <i class="fas fa-search-location"></i> </a>
                                    </div>
                                </div>
                               
                                 
                                <div class="col-lg-3 d-grid">
                                    <a class="btn btn-secondary" href="#"> <i class="fas fa-search-location"></i> Search </a>
                                </div>
                            </div>
                        </form>
                        <div class="listing-item listing-list mt-4">
                            <div class="row g-0">
                                <div class="col-xl-4 col-lg-5 col-md-5">
                                    <div class="listing-image bg-overlay-half-bottom">
                                        <img class="img-fluid" src="images/listing/grid/01.jpg" alt="">
                                        <div class="listing-quick-box">
                                            <a class="category" href="#"> <i class="flaticon-coffee-cup"></i> Cafe</a>
                                            <a class="popup popup-single" href="images/listing/grid/01.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Zoom"> <i class="fas fa-search-plus"></i> </a>
                                            <a class="like" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"> <i class="far fa-heart"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-7">
                                    <div class="listing-details h-100">
                                        <div class="listing-details-inner">
                                            <div class="listing-title">
                                                <h6><a href="#">Espresso macchiato</a></h6>
                                                <span class="listing-price">$$$</span>
                                            </div>
                                            <div class="listing-rating-call">
                                                <a class="listing-rating" href="#"><span>4.2</span> 12 Rating</a>
                                                <a class="listing-call" href="#"><i class="fas fa-phone-volume"></i> +666 658 447</a>
                                            </div>
                                            <div class="listing-info">
                                                <img class="img-fluid" src="images/listing-brand/01.png" alt="">
                                                <p class="mb-0">So how do we get clarity? Simply by asking ourselves lots of questions: What do I really want? What does success look like</p>
                                            </div>
                                        </div>
                                        <div class="listing-bottom">
                                            <a class="listing-loaction" href="#"> <i class="fas fa-map-marker-alt"></i> Piper Drive Zion</a>
                                            <span class="listing-open">Open</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listing-item listing-list mt-4">
                            <div class="row g-0">
                                <div class="col-xl-4 col-lg-5 col-md-5">
                                    <div class="listing-image bg-overlay-half-bottom">
                                        <img class="img-fluid" src="images/listing/grid/02.jpg" alt="">
                                        <div class="listing-quick-box">
                                            <a class="category" href="#"> <i class="flaticon-megaphone"></i> Nightlife</a>
                                            <a class="popup popup-single" href="images/listing/grid/02.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Zoom"> <i class="fas fa-search-plus"></i> </a>
                                            <a class="like" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"> <i class="far fa-heart"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-7">
                                    <div class="listing-details h-100">
                                        <div class="listing-details-inner">
                                            <div class="listing-title">
                                                <h6><a href="#">Fantastic Fridaze</a></h6>
                                                <span class="listing-price">$$$</span>
                                            </div>
                                            <div class="listing-rating-call">
                                                <a class="listing-rating" href="#"><span>4.6</span> 10 Rating</a>
                                                <a class="listing-call" href="#"><i class="fas fa-phone-volume"></i> +444 656 326</a>
                                            </div>
                                            <div class="listing-info">
                                                <img class="img-fluid" src="images/listing-brand/02.png" alt="">
                                                <p class="mb-0">Introspection is the trick. Understand what you want, why you want it and what it will do for you. This is a critical factor.</p>
                                            </div>
                                        </div>
                                        <div class="listing-bottom">
                                            <a class="listing-loaction" href="#"> <i class="fas fa-map-marker-alt"></i> 472 Carpenter Rd</a>
                                            <span class="listing-open">Open</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listing-item listing-list mt-4">
                            <div class="row g-0">
                                <div class="col-xl-4 col-lg-5 col-md-5">
                                    <div class="listing-image bg-overlay-half-bottom">
                                        <img class="img-fluid" src="images/listing/grid/03.jpg" alt="">
                                        <div class="listing-quick-box">
                                            <a class="category" href="#"> <i class="flaticon-guitar"></i> Sound & music</a>
                                            <a class="popup popup-single" href="images/listing/grid/03.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Zoom"> <i class="fas fa-search-plus"></i> </a>
                                            <a class="like" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"> <i class="far fa-heart"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-7">
                                    <div class="listing-details h-100">
                                        <div class="listing-details-inner">
                                            <div class="listing-title">
                                                <h6><a href="#">Bike Tours Hollywood</a></h6>
                                                <span class="listing-price">$$$</span>
                                            </div>
                                            <div class="listing-rating-call">
                                                <a class="listing-rating" href="#"><span>4.1</span> 06 Rating</a>
                                                <a class="listing-call" href="#"><i class="fas fa-phone-volume"></i> +888 235 956</a>
                                            </div>
                                            <div class="listing-info">
                                                <img class="img-fluid" src="images/listing-brand/03.png" alt="">
                                                <p class="mb-0">Once you have a clear understanding of what you want, it is critical that you engage in goal setting – specifically setting.</p>
                                            </div>
                                        </div>
                                        <div class="listing-bottom">
                                            <a class="listing-loaction" href="#"> <i class="fas fa-map-marker-alt"></i> Lincolnton, NC 28092</a>
                                            <span class="listing-close">Closed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listing-item listing-list mt-4">
                            <div class="row g-0">
                                <div class="col-xl-4 col-lg-5 col-md-5">
                                    <div class="listing-image bg-overlay-half-bottom">
                                        <img class="img-fluid" src="images/listing/grid/04.jpg" alt="">
                                        <div class="listing-quick-box">
                                            <a class="category" href="#"> <i class="flaticon-customer"></i> Art & Museums</a>
                                            <a class="popup popup-single" href="images/listing/grid/04.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Zoom"> <i class="fas fa-search-plus"></i> </a>
                                            <a class="like" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"> <i class="far fa-heart"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-7">
                                    <div class="listing-details h-100">
                                        <div class="listing-details-inner">
                                            <div class="listing-title">
                                                <h6><a href="#">The Vatican Museums</a></h6>
                                                <span class="listing-price">$$$</span>
                                            </div>
                                            <div class="listing-rating-call">
                                                <a class="listing-rating" href="#"><span>4.9</span> 03 Rating</a>
                                                <a class="listing-call" href="#"><i class="fas fa-phone-volume"></i> +222 356 457</a>
                                            </div>
                                            <div class="listing-info">
                                                <img class="img-fluid" src="images/listing-brand/04.png" alt="">
                                                <p class="mb-0">Focus is having the unwavering attention to complete what you set out to do. There are a million distractions in every facet.</p>
                                            </div>
                                        </div>
                                        <div class="listing-bottom">
                                            <a class="listing-loaction" href="#"> <i class="fas fa-map-marker-alt"></i> West Division Street</a>
                                            <span class="listing-close">Closed</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listing-item listing-list mt-4">
                            <div class="row g-0">
                                <div class="col-xl-4 col-lg-5 col-md-5">
                                    <div class="listing-image bg-overlay-half-bottom">
                                        <img class="img-fluid" src="images/listing/grid/05.jpg" alt="">
                                        <div class="listing-quick-box">
                                            <a class="category" href="#"> <i class="flaticon-wine"></i> Nightclub</a>
                                            <a class="popup popup-single" href="images/listing/grid/05.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Zoom"> <i class="fas fa-search-plus"></i> </a>
                                            <a class="like" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"> <i class="far fa-heart"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-7">
                                    <div class="listing-details h-100">
                                        <div class="listing-details-inner">
                                            <div class="listing-title">
                                                <h6><a href="#">Liberty Club</a></h6>
                                                <span class="listing-price">$$$</span>
                                            </div>
                                            <div class="listing-rating-call">
                                                <a class="listing-rating" href="#"><span>4.6</span> 15 Rating</a>
                                                <a class="listing-call" href="#"><i class="fas fa-phone-volume"></i> +333 659 856</a>
                                            </div>
                                            <div class="listing-info">
                                                <img class="img-fluid" src="images/listing-brand/05.png" alt="">
                                                <p class="mb-0">So, how can we stay on course with all the distractions in our lives? Willpower is a good start, but it’s very difficult.</p>
                                            </div>
                                        </div>
                                        <div class="listing-bottom">
                                            <a class="listing-loaction" href="#"> <i class="fas fa-map-marker-alt"></i> Fort Wayne, IN 46804</a>
                                            <span class="listing-open">Open</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="listing-item listing-list mt-4 mb-4">
                            <div class="row g-0">
                                <div class="col-xl-4 col-lg-5 col-md-5">
                                    <div class="listing-image bg-overlay-half-bottom">
                                        <img class="img-fluid" src="images/listing/grid/06.jpg" alt="">
                                        <div class="listing-quick-box">
                                            <a class="category" href="#"> <i class="flaticon-food-serving"></i> Restaurant</a>
                                            <a class="popup popup-single" href="images/listing/grid/06.jpg" data-bs-toggle="tooltip" data-bs-placement="top" title="Zoom"> <i class="fas fa-search-plus"></i> </a>
                                            <a class="like" href="#" data-bs-toggle="tooltip" data-bs-placement="top" title="Like"> <i class="far fa-heart"></i> </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-7 col-md-7">
                                    <div class="listing-details h-100">
                                        <div class="listing-details-inner">
                                            <div class="listing-title">
                                                <h6><a href="#">Honey Restaurant</a></h6>
                                                <span class="listing-price">$$$</span>
                                            </div>
                                            <div class="listing-rating-call">
                                                <a class="listing-rating" href="#"><span>4.2</span> 08 Rating</a>
                                                <a class="listing-call" href="#"><i class="fas fa-phone-volume"></i> +999 784 578</a>
                                            </div>
                                            <div class="listing-info">
                                                <img class="img-fluid" src="images/listing-brand/06.png" alt="">
                                                <p class="mb-0">The best way is to develop and follow a plan. Start with your goals in mind and then work backward to develop the plan.</p>
                                            </div>
                                        </div>
                                        <div class="listing-bottom">
                                            <a class="listing-loaction" href="#"> <i class="fas fa-map-marker-alt"></i> 442 Glenholme Street</a>
                                            <span class="listing-open">Open</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
    <script src="js/map/map-script.js"></script>
    <script src="js/index-tooltip.js" type="text/javascript"></script>
    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>
    <script src="js/markers-on-map-1.4.0.js" type="text/javascript"></script>
    <script src="js/map-api.js" type="text/javascript"></script>

</body>

<!-- Mirrored from themes.potenzaglobalsolutions.com/html/directro/index-05.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 04:35:31 GMT -->

</html>