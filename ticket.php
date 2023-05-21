<!doctype html>
<html lang="en">

<head>
    <?php include 'head.php' ?>
</head>

<body>

    <?php include 'header.php' ?>

    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="breadcrumb-wrap">
                        <h2>Ticket</h2>
                        <ul class="breadcrumb-links">
                            <li>
                                <a href="index.php">Home</a>
                                <i class="bx bx-chevron-right"></i>
                            </li>
                            <li>Ticket</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-wrapper pt-90">
        <div class="contact-cards">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-card">
                            <div class="contact-icon"><i class="flaticon-arrival"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Address</h5>
                                <p>Dehli</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-card">
                            <div class="contact-icon"><i class="flaticon-customer-service"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Call</h5>
                                    <p>+91 9971545400</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <div class="contact-card">
                            <div class="contact-icon"><i class="flaticon-thumbs-up"></i>
                            </div>
                            <div class="contact-info">
                                <h5>Social Media</h5>
                                <ul class="contact-icons">
                                    <li><a href="#"><i class='bx bxl-instagram'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-facebook'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-twitter'></i></a></li>
                                    <li><a href="#"><i class='bx bxl-whatsapp'></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shadow container">
            <div class="contact-inputs pb-40 mt-120 " style="padding: 5%">
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="contact-form">
                            <form action="#" method="post">
                                <h5 class="contact-d-head" style="text-align: center;">
                                    Book Ticket
                                </h5>
                                <div class="row">
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="fname">First Name</label>
                                        <input type="text" class="form-control" placeholder="First Name">
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="lname">Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name">
                                    </div>
                                    </div>

                                    <div class="col-lg-6">
                                    <div class="form-group">   
                                        <label for="mail">Mail</label>
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                    <div class="form-group">
                                        <label for="phone">Phone No</label>
                                        <input type="text" class="form-control" placeholder="Phone">
                                    </div>
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="depature">Arrival Date</label>
                                        <input id="date" type="date" class="form-control" name="s_date">
                                    </div>
                                    </div>
                                    <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="depature">Departure Date</label>
                                        <input id="date" type="date" class="form-control" name="s_date">
                                    </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group selectdiv">
                                            <label for="accom">Hotel Category</label>
                                            <select class="form-control" name="accom">
                                                <option value="" selected>Select hotel</option>
                                                <option value="Luxury">Luxury</option>
                                                <option value="5 Star">5 Star</option>
                                                <option value="4 Star">4 Star</option>
                                                <option value="3 Star">3 Star</option>
                                                <option value="Budget">Others</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fromcity">Number Of Guests</label>
                                            <input type="text" name="fromcity" id="fromcity" class="form-control" placeholder="Enter..." />
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="fromcity">From Place</label>
                                            <input type="text" name="fromcity" id="fromcity" class="form-control" placeholder="Type From City" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="tocity">To Place</label>
                                            <input type="text" name="tocity" id="tocity" class="form-control" placeholder="Type To City" />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <label>Services Required</label>

                                        <div class="row checkboxtabmenu">
                                            <div class="col-md-3 item">
                                                <label>
                                                    <input id="flightcheck" type="checkbox" name="Services[]" value="Flight" />
                                                    Flight</label>
                                            </div>
                                            <div class="col-md-3 item">
                                                <label>
                                                    <input id="transportcheck" type="checkbox" name="Services[]" value="Transport" />
                                                    Transport</label>
                                            </div>
                                            <div class="col-md-3 item">
                                                <label><input id="transportcheck" type="checkbox" name="Services[]" value="Transport" />
                                                    Insurance</label>
                                            </div>
                                            <div class="col-md-3 item">
                                                <label>
                                                    <input id="visacheck" type="checkbox" name="Services[]" value="Visa" />
                                                    Visa</label>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="col-lg-12" style="text-align: center;">
                                        <input type="submit" value="Submit Now">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="feature-area-2 p-80 mt-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="section-head feature-head-2 pb-40">
                        <h2>Best Tour Packages</h2>
                    </div>
                </div>
            </div>
            <div class="feature-slider-2 owl-carousel">
                <div class="feature-card-2">
                    <div class="feature-thumb">
                        <img src="assets/images/feature/index(1).png" alt="" class="img-fluid" />
                        <div class="feature-price">
                            <h5>₹30,010 <span>/ Couple</span></h5>
                        </div>
                    </div>
                    <div class="feature-details">
                        <h5 class="tour-duration">
                            <i class="flaticon-calendar"></i>5 Days/6 night
                        </h5>
                        <h3>
                            <i class="flaticon-arrival"></i>
                            <a href="#">Andaman Tour Packages</a>
                        </h3>
                    </div>
                    <div class="feature-card-review">
                        <p>(<span>20</span> Review )</p>
                        <ul class="feature-rating">
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                        </ul>
                        <a href="package.php" class="feature-btn">Book Now</a>
                    </div>
                </div>
                <div class="feature-card-2">
                    <div class="feature-thumb">
                        <img src="assets/images/feature/maldiv.png" alt="" class="img-fluid" />
                        <div class="feature-price">
                            <h5>₹28,110 <span>/ Couple</span></h5>
                        </div>
                    </div>
                    <div class="feature-details">
                        <h5 class="tour-duration">
                            <i class="flaticon-calendar"></i>5 Days/6 night
                        </h5>
                        <h3>
                            <i class="flaticon-arrival"></i>
                            <a href="#">Maldives Packages</a>
                        </h3>
                    </div>
                    <div class="feature-card-review">
                        <p>(<span>20</span> Review )</p>
                        <ul class="feature-rating">
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                        </ul>
                        <a href="package.php" class="feature-btn">Book Now</a>
                    </div>
                </div>
                <div class="feature-card-2">
                    <div class="feature-thumb">
                        <img src="assets/images/feature/mal1.png" alt="" class="img-fluid" />
                        <div class="feature-price">
                            <h5>₹20,810 <span>/ Couple</span></h5>
                        </div>
                    </div>
                    <div class="feature-details">
                        <h5 class="tour-duration">
                            <i class="flaticon-calendar"></i>5 Days/6 night
                        </h5>
                        <h3>
                            <i class="flaticon-arrival"></i>
                            <a href="#">Vietnam Package</a>
                        </h3>
                    </div>
                    <div class="feature-card-review">
                        <p>(<span>20</span> Review )</p>
                        <ul class="feature-rating">
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                        </ul>
                        <a href="package.php" class="feature-btn">Book Now</a>
                    </div>
                </div>
                <div class="feature-card-2">
                    <div class="feature-thumb">
                        <img src="assets/images/feature/himachal-banner1.png" alt="" class="img-fluid" />
                        <div class="feature-price">
                            <h5>₹8,110 <span>/ Couple</span></h5>
                        </div>
                    </div>
                    <div class="feature-details">
                        <h5 class="tour-duration">
                            <i class="flaticon-calendar"></i>5 Days/6 night
                        </h5>
                        <h3>
                            <i class="flaticon-arrival"></i>
                            <a href="#">Himachal Tour Packages</a>
                        </h3>
                    </div>
                    <div class="feature-card-review">
                        <p>(<span>20</span> Review )</p>
                        <ul class="feature-rating">
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                            <li><i class="bx bxs-star"></i></li>
                        </ul>
                        <a href="package.php" class="feature-btn">Book Now</a>
                    </div>
                </div>


            </div>
        </div>
    </div>

    <?php include 'footer.php' ?>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/typed.js"></script>

    <script src="assets/js/main.js"></script>
</body>

</html>