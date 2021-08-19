<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Travel Mate using sass and bootstrap</title>

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        <script src="js/main.js"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body> 
        <header id="header">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a class="navbar-brand" id="logo" href="#">
                        <span id="M">M</span>
                        <span id="travel-mate">
                            travel
                            <sup>mate</sup>
                        </span>
                    </a>
                    <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">About</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle accordion" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                    Pages
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Trip list Page</a></li>
                                    <li><a class="dropdown-item" href="#">Trip Detail Page</a></li>
                                    <!-- <li><hr class="dropdown-divider"></li> -->
                                    <li><a class="dropdown-item" href="#">404 page</a></li>
                                    <li><a class="dropdown-item" href="#">Gallery</a></li>
                                    <li><a class="dropdown-item" href="#">login</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle accordion" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                    Destination
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <ul class="col-3">
                                        <li><a class="dropdown-item" href="#">Nepal</a></li>
                                        <li><a class="dropdown-item" href="#">Bhutan</a></li>
                                        <!-- <li><hr class="dropdown-divider"></li> -->
                                        <li><a class="dropdown-item" href="#">South Africa</a></li>
                                        <li><a class="dropdown-item" href="#">South America</a></li>
                                    </ul>
                                    <ul class="col-3">                                    
                                        <li><a class="dropdown-item" href="#">South Korea</a></li>
                                        <li><a class="dropdown-item" href="#">England</a></li>
                                        <li><a class="dropdown-item" href="#">London</a></li>
                                        <li><a class="dropdown-item" href="#">British</a></li>
                                    </ul>
                                    <ul class="col-3">
                                        <li><a class="dropdown-item" href="#">Irish</a></li>
                                        <li><a class="dropdown-item" href="#">Japan</a></li>
                                        <li><a class="dropdown-item" href="#">China</a></li>
                                        <li><a class="dropdown-item" href="#">India</a></li>
                                    </ul>
                                    <ul class="col-3">
                                        <li><a class="dropdown-item" href="#">Bangladesh</a></li>
                                        <li><a class="dropdown-item" href="#">Afgasnistan</a></li>
                                        <li><a class="dropdown-item" href="#">Canada</a></li>
                                        <li><a class="dropdown-item" href="#">Maldives</a></li>
                                    </ul>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle accordion" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                    Blog
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Blog ArchivePage</a></li>
                                    <li><a class="dropdown-item" href="#">Blog Single Page</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle accordion" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                                    Contact us
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Contact us 1</a></li>
                                    <li><a class="dropdown-item" href="#">contact Us Alt</a></li>
                                </ul>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>  
        </header>  

        <script>
            var acc = document.getElementsByClassName("accordion");
            var i;

            for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdown_menu = this.nextElementSibling;
                if (dropdown_menu.style.display === "block") {
                dropdown_menu.style.display = "none";
                } else {
                dropdown_menu.style.display = "block";
                }
            });
            }
        </script>