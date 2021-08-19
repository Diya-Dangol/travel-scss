<?php include('includes/header.php'); ?>

    <!-- header banner with slide show images -->
   <section id="banner">
        <div id="slides" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#slides" data-slide-to="0" class="active"></li>
                    <li data-target="#slides" data-slide-to="1"></li>
                    <li data-target="#slides" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                    
                    <div class="carousel-caption">                    
                        <div class="container">                
                            <div class="main-heading">
                                <h1>Never Stop Exploring</h1>
                                <label>Grab Your bag Packs and Enjoy Holidays</label>
                            </div>
                            <form action="/nepal.php"  class="row bg-light">
                                <!-- <div class="row"> -->
                                    <div class="form-group col-md-2 col-sm-6 col-xs-4 my-auto pr-0 pl-0 text-dark">
                                        <p class='my-auto'>Want to travel with us?</p>
                                    </div>
                                    <div class="form-group col-md-2 col-sm-6 col-xs-4 my-auto">
                                        <select name="location" class="form-control">
                                            <option value>where to go</option>
                                            <option value="nepal">Nepal</option>
                                            <option value="america">America</option>
                                            <option value="south-africa">South Africa</option>
                                            <option value="india">India</option>
                                            <option value="oceana">Nepal</option>
                                            <option value="nepal">Nepal</option>
                                            <option value="nepal">Nepal</option>
                                            <option value="nepal">Nepal</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-2 col-sm-6 col-xs-4 my-auto">
                                        <input type="date" class="form-control" id="date" name="date" placeholder="date" value="date">
                                    </div>
                    
                                    <div class="form-group col-md-2 col-sm-6 col-xs-4 my-auto">
                                        <select name="travel-type" class="form-control">
                                            <option value>Travel Type</option>
                                            <option value="city-tour">city tour</option>
                                            <option value="adventour-tour">adventour tour</option>
                                            <option value="couple-tour">couple tour</option>
                                            <option value="group-tour">group tour</option>                        
                                        </select>
                                    </div>
                    
                                    <div class="form-group col-md-2 col-sm-6 col-xs-4 pr-0 pl-0" >
                                        <div class="form-control" style="border: none; background: none;">
                                            <label class="text-dark">Price Range</label>
                                            <section class="range-slider">
                                                <span class="rangeValues"></span>
                                                <input value="500" min="500" max="50000" step="500" type="range">
                                                <input value="50000" min="500" max="50000" step="500" type="range">
                                            </section>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-2 col-sm-6 col-xs-4 mt-xs-5 my-auto">
                                        <a href="#" class="btn btn-primary">Search <i class="fa fa-search"></i></a>    
                                    </div>
                                <!-- </div>         -->
                            </form>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <img src ="assets/sanjay-hona.jpg" class="back-overlay">  
                    </div>
                    <div class="carousel-item">
                        <img src ="assets/Beijing.jpg" class="back-overlay">
                    </div>
                    <div class="carousel-item">
                        <img src ="assets/leonard.jpg" class="back-overlay">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#slides" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#slides" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
   </section>

   <!-- popular desttination container -->
    <section id="popularDestination" class="bg-grey">
        <div class="container">
            <div class="section-heading">
                <h2>Popular Destinations</h2>
                <label>Choose Your Next Destination</label>
            </div>
            <div class="row sub-container">
                <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                    <div class="thumbnail bg-dark rounded">
                        <img class="card-img-top rounded" src="assets/beijing.jpg" alt="Card image cap">
                        <div class="thumbnail-title text-white d-flex align-items-center">
                            <div class="mx-auto">
                                <i class="fa fa-binoculars text-center"></i>
                            </div>
                            <h5>Beijing
                                <span class="ml-3">
                                    2 Reviews
                                </span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                    <div class="thumbnail bg-dark rounded">
                        <img class="card-img-top rounded" src="assets/nepal.jpg" alt="Card image cap">
                        <div class="thumbnail-title text-white d-flex align-items-center">
                            <div class="mx-auto">
                                <i class="fa fa-binoculars text-center"></i>
                            </div>
                            <h5>Nepal
                                <span class="ml-3">
                                    2 Reviews
                                </span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                    <div class="thumbnail bg-dark rounded">
                        <img class="card-img-top rounded" src="assets/polynesia.jpg" alt="Card image cap">
                        <div class="thumbnail-title text-white d-flex align-items-center">
                            <div class="mx-auto">
                                <i class="fa fa-binoculars text-center"></i>
                            </div>
                            <h5>Polynesia
                                <span class="ml-3">
                                    2 Reviews
                                </span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-8 mb-4">
                    <div class="thumbnail bg-dark rounded">
                        <img class="card-img-top rounded" src="assets/leonard.jpg" alt="Card image cap">
                        <div class="thumbnail-title text-white d-flex align-items-center">
                            <div class="mx-auto">
                                <i class="fa fa-binoculars text-center"></i>
                            </div>
                            <h5>Paris
                                <span class="ml-3">
                                    2 Reviews
                                </span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                    <div class="thumbnail bg-dark rounded">
                        <img class="card-img-top rounded" src="assets/snow.jpg" alt="Card image cap">
                        <div class="thumbnail-title text-white d-flex align-items-center">
                            <div class="mx-auto">
                                <i class="fa fa-binoculars text-center"></i>
                            </div>
                            <h5>Poland
                                <span class="ml-3">
                                    2 Reviews
                                </span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                    <div class="thumbnail bg-dark rounded">
                        <img class="card-img-top rounded" src="assets/bhutan.jpg" alt="Card image cap">
                        <div class="thumbnail-title text-white d-flex align-items-center">
                            <div class="mx-auto">
                                <i class="fa fa-binoculars text-center"></i>
                            </div>
                            <h5>Bhutan
                                <span class="ml-3">
                                    2 Reviews
                                </span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                    <div class="thumbnail bg-dark rounded">
                        <img class="card-img-top rounded" src="assets/vacations.jpg" alt="Card image cap">
                        <div class="thumbnail-title text-white d-flex align-items-center">
                            <div class="mx-auto">
                                <i class="fa fa-binoculars text-center"></i>
                            </div>
                            <h5>Somewhere
                                <span class="ml-3">
                                    2 Reviews
                                </span>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                    <div class="thumbnail bg-dark rounded">
                        <img class="card-img-top rounded" src="assets/nowhere.jpg" alt="Card image cap">
                        <div class="thumbnail-title text-white d-flex align-items-center">
                            <div class="mx-auto">
                                <i class="fa fa-binoculars text-center"></i>
                            </div>
                            <h5>Somewhere
                                <span class="ml-3">
                                    2 Reviews
                                </span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <span class="row text-center">
                <div class="col-12">
                    <a href="nepal.php" class="btn btn-primary">More Destination  <i class="fa fa-arrow-right"></i></a>
                </div>
            </span>
        </div>
    </section>

    <!-- Banner Image -->
    <div class="jumbotron jumbotron-fluid bg-dark" style="background-image: url(assets/gary.jpg)">
        <div class="container">
            <div class='row padding clearfix'>
                <div class="bannerHeading col-md-10 col-xs-6 col-sm-5">
                    <h2>Never Stop Exploring</h2>
                </div>
                <div class="col-md-2 col-xs-6 col-sm-6">
                    <a href="#" class="btn btn-primary">View All Places <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>

    <!-- Popular Packages -->
    <section class="bg-grey">
        <div class="container">
            <div class="row text-center">
                <div class="section-heading col-12">
                    <h2>Popular Packages</h2>
                    <label>Choose Your Next Destination</label>
                </div>
            </div>
            <div class="row sub-container">
                <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                    <div class="card">
                        <div class="bg-dark figure rounded">
                            <img class="card-img-top img-height" src="assets/beijing.jpg" alt="Card image cap">
                            <div class="card-img-overlay text-white">
                                <h5 class="card-title">Beijing  
                                    <span>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                        <i class="fa fa-star checked"></i>
                                    </span>
                                </h5>                            
                            </div>
                        </div>
                        <div class="thumbnail-title mx-auto text-white">
                            <i class="fa fa-binoculars text-center"></i>
                        </div>                        
                        <div class="card-body">
                            <h5 class="card-title">Beijing</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content... <a href="#">Read More</a></p>
                            <div class="row mx-auto text-center">
                                <div class='mr-3'>
                                    <i class="fa fa-clock"></i>
                                    <br/><text>3 days</text>
                                </div>
                                <div class='mr-2 ml-3'>
                                    <i class="fa fa-calendar"></i>
                                    <br/><text>12 Jan-16 Jan</text>
                                </div>
                                <div class='mr-2 ml-3'>
                                    <i class="fa fa-plane"></i>
                                    <br/><text>Nepal</text>
                                </div>                    
                                <div class='ml-3'>
                                    <i class="fa fa-compass"></i>
                                    <br/><text>Adventurous</text>
                                </div>
                            </div>
                            <hr>
                            <div class="float-left">
                                <p class="price-rate">Rs. 8000 
                                    <span>
                                        /per person
                                    </span>
                                </p>
                            </div>
                            <div class="float-right">
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                    <div class="card">
                        <div class="bg-dark figure rounded">
                            <img class="card-img-top img-height" src="assets/nepal.jpg" alt="Card image cap">
                            <div class="card-img-overlay text-white">
                                <h5 class="card-title">Nepal  <span>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </span></h5>
                                
                            </div>
                        </div>
                        <div class="thumbnail-title mx-auto text-white">
                            <i class="fa fa-binoculars text-center"></i>
                        </div>
                        
                        <div class="card-body">
                            <h5 class="card-title">Beijing</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content... <a href="#">Read More</a></p>
                            <div class="row mx-auto text-center">
                                <div class='mr-3'>
                                    <i class="fa fa-clock"></i>
                                    <br/><text>3 days</text>
                                </div>
                                <div class='mr-2 ml-3'>
                                    <i class="fa fa-calendar"></i>
                                    <br/><text>12 Jan-16 Jan</text>
                                </div>
                                <div class='mr-2 ml-3'>
                                    <i class="fa fa-plane"></i>
                                    <br/><text>Nepal</text>
                                </div>                    
                                <div class='ml-3'>
                                    <i class="fa fa-compass"></i>
                                    <br/><text>Adventurous</text>
                                </div>
                            </div>
                            <hr>
                            <div class="float-left">
                                <p class="price-rate">Rs. 8000 
                                    <span>
                                        /per person
                                    </span>
                                </p>
                            </div>
                            <div class="float-right">
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                    <div class="card">
                        <div class="bg-dark figure rounded">
                            <img class="card-img-top img-height" src="assets/polynesia.jpg" alt="Card image cap">
                            <div class="card-img-overlay text-white">
                                <h5 class="card-title">Beijing  <span>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </span></h5>
                                
                            </div>
                        </div>
                        <div class="thumbnail-title mx-auto text-white">
                            <i class="fa fa-binoculars text-center"></i>
                        </div>
                        
                        <div class="card-body">
                            <h5 class="card-title">Polynesia</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content... <a href="#">Read More</a></p>
                            <div class="row mx-auto text-center">
                                <div class='mr-3'>
                                    <i class="fa fa-clock"></i>
                                    <br/><text>3 days</text>
                                </div>
                                <div class='mr-2 ml-3'>
                                    <i class="fa fa-calendar"></i>
                                    <br/><text>12 Jan-16 Jan</text>
                                </div>
                                <div class='mr-2 ml-3'>
                                    <i class="fa fa-plane"></i>
                                    <br/><text>Nepal</text>
                                </div>                    
                                <div class='ml-3'>
                                    <i class="fa fa-compass"></i>
                                    <br/><text>Adventurous</text>
                                </div>
                            </div>
                            <hr>
                            <div class="float-left">
                                <p class="price-rate">Rs. 8000 
                                    <span>
                                        /per person
                                    </span>
                                </p>
                            </div>
                            <div class="float-right">
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                    <div class="card">
                        <div class="bg-dark figure rounded">
                            <img class="card-img-top img-height" src="assets/bhutan.jpg" alt="Card image cap">
                            <div class="card-img-overlay text-white">
                                <h5 class="card-title">Beijing  <span>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </span></h5>
                            </div>
                        </div>
                        <div class="thumbnail-title mx-auto text-white">
                            <i class="fa fa-binoculars text-center"></i>
                        </div>
                        
                        <div class="card-body">
                            <h5 class="card-title">Beijing</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content... <a href="#">Read More</a></p>
                            <div class="row mx-auto text-center">
                                <div class='mr-3'>
                                    <i class="fa fa-clock"></i>
                                    <br/><text>3 days</text>
                                </div>
                                <div class='mr-2 ml-3'>
                                    <i class="fa fa-calendar"></i>
                                    <br/><text>12 Jan-16 Jan</text>
                                </div>
                                <div class='mr-2 ml-3'>
                                    <i class="fa fa-plane"></i>
                                    <br/><text>Nepal</text>
                                </div>                    
                                <div class='ml-3'>
                                    <i class="fa fa-compass"></i>
                                    <br/><text>Adventurous</text>
                                </div>
                            </div>
                            <hr>
                            <div class="float-left">
                                <p class="price-rate">Rs. 8000 
                                    <span>
                                        /per person
                                    </span>
                                </p>
                            </div>
                            <div class="float-right">
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                    <div class="card">
                        <div class="bg-dark figure rounded">
                            <img class="card-img-top img-height" src="assets/japan.jpg" alt="Card image cap">
                            <div class="card-img-overlay text-white">
                                <h5 class="card-title">Beijing  <span>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </span></h5>
                            </div>
                        </div>
                        <div class="thumbnail-title mx-auto text-white">
                            <i class="fa fa-binoculars text-center"></i>
                        </div>
                        
                        <div class="card-body">
                            <h5 class="card-title">Beijing</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content... <a href="#">Read More</a></p>
                            <div class="row mx-auto text-center">
                                <div class='mr-3'>
                                    <i class="fa fa-clock"></i>
                                    <br/><text>3 days</text>
                                </div>
                                <div class='mr-2 ml-3'>
                                    <i class="fa fa-calendar"></i>
                                    <br/><text>12 Jan-16 Jan</text>
                                </div>
                                <div class='mr-2 ml-3'>
                                    <i class="fa fa-plane"></i>
                                    <br/><text>Nepal</text>
                                </div>                    
                                <div class='ml-3'>
                                    <i class="fa fa-compass"></i>
                                    <br/><text>Adventurous</text>
                                </div>
                            </div>
                            <hr>
                            <div class="float-left">
                                <p class="price-rate">Rs. 8000 
                                    <span>
                                        /per person
                                    </span>
                                </p>
                            </div>
                            <div class="float-right">
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-4">
                    <div class="card">
                        <div class="bg-dark figure rounded">
                            <img class="card-img-top img-height" src="assets/leonard.jpg" alt="Card image cap">
                            <div class="card-img-overlay text-white">
                                <h5 class="card-title">Beijing  <span>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                    <i class="fa fa-star checked"></i>
                                </span></h5>
                                
                            </div>
                        </div>
                        <div class="thumbnail-title mx-auto text-white">
                            <i class="fa fa-binoculars text-center"></i>
                        </div>
                       
                        <div class="card-body">
                            <h5 class="card-title">Beijing</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content... <a href="#">Read More</a></p>
                            <div class="row mx-auto text-center">
                                <div class='mr-3'>
                                    <i class="fa fa-clock"></i>
                                    <br/><text>3 days</text>
                                </div>
                                <div class='mr-2 ml-3'>
                                    <i class="fa fa-calendar"></i>
                                    <br/><text>12 Jan-16 Jan</text>
                                </div>
                                <div class='mr-2 ml-3'>
                                    <i class="fa fa-plane"></i>
                                    <br/><text>Nepal</text>
                                </div>                    
                                <div class='ml-3'>
                                    <i class="fa fa-compass"></i>
                                    <br/><text>Adventurous</text>
                                </div>
                            </div>
                            <hr>
                            <div class="float-left">
                                <p class="price-rate">Rs. 8000 
                                    <span>
                                        /per person
                                    </span>
                                </p>
                            </div>
                            <div class="float-right">
                                <a href="#" class="btn btn-primary">Book Now</a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="row text-center">
                <div class="col-12">
                    <a href="#" class="btn btn-primary">View All Places <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </section>

    <!-- Banner Card Image -->
    <div class="jumbotron jumbotron-fluid black-overlay cardBanner" style="background-image: url(assets/vacations.jpg)">
        <div class="container">
            <div class="section-heading col-12 text-center">
                <h2>We Accept</h2>
            </div>
            <div class="row justify-content-center mt-5">
                <i class="fa fa-cc-visa mr-xs-1 mr-sm-1 mr-md-3 ml-md-3 "></i>
                <i class="fa fa-cc-mastercard mr-xs-1 mr-sm-1 mr-md-3 ml-md-3"></i>
                <i class="fa fa-cc-paypal mr-xs-1 mr-sm-1 mr-md-3 ml-md-3"></i>
                <i class="fa fa-credit-card mr-xs-1 mr-sm-1 mr-md-3 ml-md-3"></i>
                <i class="fa fa-cc-discover mr-xs-1 mr-sm-1 mr-md-3 ml-md-3"></i>
            </div>
        </div>
    </div>

    <!-- about us -->
    <section class="bg" id="about-us">
        <div class="container">
            <div class="row text-center">
                <div class="section-heading col-12">
                    <h2>About Us</h2>
                    <label>Choose Your Next Destination</label>
                </div>
            </div>

            <!-- Our Story -->
            <div class="row subTitle text-center">
                <div class="col-12">
                    <h5>Our Story</h5>
                </div>                                 
            </div>
            <!-- <div class="row"> -->
            <div class="card flex-md-row">
                <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6 pt-4">
                    <img class="card-img black-overlay" src="assets/kathmandu.jpg" alt="Card image cap">
                </div>
                <div class="col-sm-12 col-xs-12 col-md-6 col-lg-6">
                    <div class="card-body">
                        <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </p>
                        <p>
                            At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum 
                        </p>
                        <a href="#" class="btn btn-primary">Learn More <i class="fa fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- </div> -->

            <!-- Our Services -->
            <div class="row subTitle text-center">
                <div class="col-12">
                    <h5>Our Services</h5>
                </div>
            </div>
            <div class="row sectionService">
                <div class="col-xs-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-hotel"></i>
                            <article class="card-text">
                                <h5 class="card-title">Hotel Accomodation</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>                        
                            </article> 
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-hotel"></i>
                            <article class="card-text">
                                <h5 class="card-title">Delicious Food</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>                        
                            </article> 
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="card">
                        <div class="card-body text-center">
                            <i class="fa fa-hotel"></i>
                            <article class="card-text">
                                <h5 class="card-title">Luxury</h5>
                                <p class="card-text">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>                        
                            </article> 
                        </div>
                    </div>
                </div>
            </div>

            <!-- Our Partner -->
            <div class="row subTitle text-center">
                <div class="col-12">
                    <h5>Our Partner</h5>
                </div>
            </div>
            <div class="row justify-content-center" id="partner">
                <div class="mr-5 mr-xs-2 ml-5 ml-xs-2 mb-4 mb-md-0">
                    <div class="card" style="width:180px;">
                        <img class="round-image" src="assets/beijing.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <article class='card-text'>
                                <h5 class="card-title">Water Nation</h5>
                            </article>
                        </div>
                    </div>
                </div>  
                <div class="mr-5 mr-xs-2 ml-5 ml-xs-2 mb-4 mb-md-0">
                    <div class="card" style="width:180px;">
                        <img class="round-image" src="assets/beijing.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <article class='card-text'>
                                <h5 class="card-title">Water Nation</h5>
                            </article>
                        </div>
                    </div>
                </div>  
                <div class="mr-5 mr-xs-2 ml-5 ml-xs-2 mb-4 mb-md-0">
                    <div class="card" style="width:180px;">
                        <img class="round-image" src="assets/beijing.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <article class='card-text'>
                                <h5 class="card-title">Water Nation</h5>
                            </article>
                        </div>
                    </div>
                </div>  
                <div class="mr-5 mr-xs-2 ml-5 ml-xs-2">
                    <div class="card" style="width:180px;">
                        <img class="round-image" src="assets/beijing.jpg" alt="Card image cap">
                        <div class="card-body text-center">
                            <article class='card-text'>
                                <h5 class="card-title">Water Nation</h5>
                            </article>
                        </div>
                    </div>
                </div>  
            </div>      
        </div>
    </section>
    
    <!-- banner Subscriibe -->
    <div class="jumbotron jumbotron-fluid" id="bannerSubscribe" style="background-image: url(assets/sunset.jpg)">
        <div class="container">
            <div class="row">
                <div class="bannerHeading col-6">
                    <h2>Subscribe Our Newsletter</h2>
                    <p class="laed">Lorem Ipsum Text About Why You Should Subscribe To Our Newsletter Blabla. Lorem Ipsum Text About Why You Should Subscribe To Our Newsletter Blabla</p>
                </div>
                <div class="col-3">
                </div>
                <div class="col-3">
                    <!-- <div class="col-xs-12 col-sm-6 col-md-6"> -->
                        <input type="email" class="form-control mb-2" placeholder="Email">
                        <span>
                            <a href="#" class="btn btn-primary">Subscribe</a>
                        </span> 
                    <!-- </div> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Testimonials -->
    <section class="bg" id="testimonial">
        <div class="container">
            <div class="row text-center">
                <div class="section-heading col-12">
                    <h2>Testimonials</h2>
                    <label>Views From Our Excited Travellers</label>
                </div>
            </div>
            <div class="row sub-container">
                <div class="col-xs-12 col-sm-12 col-md-4 mb-4 mb-md-0">
                    <div class="card">
                        <img src="assets/monkey.jpg" class="round-image" >
                        <div class="card-body text-center">
                            <h5 class="card-title">Jonh Smilga
                                <br/>
                                <text>Nepal</text>
                            </h5>
                            <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            <p class="card-text">
                                <i class="fa fa-quote-left left-quote"></i>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                <i class="fa fa-quote-right right-quote"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4 mb-4 mb-md-0">
                    <div class="card">
                        <img src="assets/monkey.jpg" class="round-image" >
                        <div class="card-body text-center">
                            <h5 class="card-title">Jonh Smilga
                                <br/>
                                <text>Nepal</text>
                            </h5>
                            <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            <p class="card-text">
                                <i class="fa fa-quote-left left-quote"></i>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                <i class="fa fa-quote-right right-quote"></i>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="card">
                        <img src="assets/monkey.jpg" class="round-image" >
                        <div class="card-body text-center">
                            <h5 class="card-title">Jonh Smilga
                                <br/>
                                <text>Nepal</text>
                            </h5>
                            <div class="star">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                    <span class="fa fa-star"></span>
                                </div>
                            <p class="card-text">
                                <i class="fa fa-quote-left left-quote"></i>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                <i class="fa fa-quote-right right-quote"></i>
                            </p>
                        </div>
                    </div>
                </div>    
            </div>        
        </div>
    </section>

    <!-- Blog -->
    <section class="bg-grey">
        <div class="container">
            <div class="row text-center">
                <div class="section-heading col-12">
                    <h2>Our Blog</h2>
                    <label>Views From Our Exciting Blog</label>
                </div>
            </div>
            <div class="row sub-container">
                <div class="col-xs-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="card">
                        <img src="assets/monkey.jpg" class="card-img-top img-fluid rounded px-3 pt-3">
                        <div class="card-body">
                            <text>By John Smilga At 9 July 2021</text>
                            <hr class="mt-1 mb-1">
                            <div class="clearfix">
                                <text class="float-left">In Blog Diary, Travel</text>
                                <text class="float-right">0 comment</text>
                            </div>
                            <p class="card-text mt-3">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua... <span><a href="#" class="btn btn-primary">Read More <i class="fa fa-arrow-right"></i></a></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4 mb-4 mb-md-0">
                    <div class="card">
                        <img src="assets/monkey.jpg" class="card-img-top img-fluid rounded px-3 pt-3">
                        <div class="card-body">
                            <text>By John Smilga At 9 July 2021</text>
                            <hr class="mt-1 mb-1">
                            <div class="clearfix">
                                <text class="float-left">In Blog Diary, Travel</text>
                                <text class="float-right">0 comment</text>
                            </div>
                            <p class="card-text mt-3">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua... <span><a href="#" class="btn btn-primary">Read More <i class="fa fa-arrow-right"></i></a></span></p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-4">
                    <div class="card">
                        <img src="assets/monkey.jpg" class="card-img-top img-fluid rounded px-3 pt-3">
                        <div class="card-body">
                            <text>By John Smilga At 9 July 2021</text>
                            <hr class="mt-1 mb-1">
                            <div class="clearfix">
                                <text class="float-left">In Blog Diary, Travel</text>
                                <text class="float-right">0 comment</text>
                            </div>
                            <p class="card-text mt-3">Lorem Ipsum Dolor Sit Amet, Consectetur Adipiscing Elit, Sed Do Eiusmod Tempor Incididunt Ut Labore Et Dolore Magna Aliqua... <span><a href="#" class="btn btn-primary">Read More <i class="fa fa-arrow-right"></i></a></span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include('includes/footer.php'); ?>