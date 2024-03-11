<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Coffee</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://www.fontspace.com/aura-seraph-font-f97349">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Playfair+Display:wght@700;900&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('syrups/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('syrups/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('syrups/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('syrups/css/style.css') }}" rel="stylesheet">
    <style>
        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            display: none;
        }

        .bottom {
            font-size: 16px;
        }

        #product p {
            font-size: 18px;
        }

        #store ul li {
            font-size: 30px;
            font-family: 'Stencil', sans-serif;
            font-weight: normal;
            /* Or use 400 */
        }

        #about p {
            font-size: 30px;
            /*font-weight: normal;*/
            /* Or use 400 */
        }

        #contact p {
            font-size: 18px;
        }

        .footer p,
        h6 {
            font-size: 18px;
        }

        .links {
            font-size: 18px;
        }

        .nav-item {
            font-size: 18px;
        }

        .navbar .navbar-nav .nav-link {
            margin-right: 35px;
            padding: 25px 0;
            color: white;
            font-weight: 600;
            text-transform: uppercase;
            outline: none;
        }

        .navbar .navbar-nav .nav-link:hover,
        .navbar .navbar-nav .nav-link.active {
            color: var(--primary);
        }

        .navbar-light #navbar-button {
            color: white;
            border-color: white(0, 0, 0, .1);
        }

        .navbar-light .navbar-toggler-icon {
            background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 1%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
        }

        .section-title h1 {
            color: #996633;
        }

        .carousel-caption {
            position: absolute;
            bottom: 20%;
            /* Adjust as necessary */
            right: 15%;
            /* Adjust as necessary */
            left: 15%;
            /* Adjust as necessary */
            z-index: 10;
            color: #33adff;
            /* Ensures text is white */
            text-align: center;
        }

        .slidercoffee {
            background: rgba(51, 33, 29, 0.7);
        }

        p {
            font-size: 18px;
        }

        .navbar .navbar-logo {
            max-width: 75px;
            /*  max-height: 145px; */
        }

        .carousel-caption h6 {
            font-family: "Stencil Std, fantasy";
            font-size: 160px;
            color: #ecffb3;
        }

        /* Media query for small screens */
        @media (max-width: 768px) {

            /* Adjusts for medium devices and below */
            .carousel-caption h6 {
                font-size: 40px;
                /* Smaller font size for small screens */
            }
        }

        @media (max-width: 576px) {

            /* Adjusts for small devices */
            .carousel-caption h6 {
                font-size: 30px;
                /* Even smaller font size for phone screens */
            }
        }


        .carousel-item img {
            width: 100%;
            /* Full width */
            height: auto;
            /* Maintain aspect ratio */
            object-fit: cover;
            /* Cover the container without losing aspect ratio */
        }

        /* Adjustments for smaller screens */
        @media (max-width: 768px) {

            .carousel-item,
            .carousel-item img {
                height: 200px;
                /* Example fixed height, adjust as needed */
                object-fit: cover;
                /* Ensures images cover the area nicely */
            }
        }

        @media (max-width: 768px) {
            .navbar-collapse {
                max-height: 50vh;
                overflow-y: auto;
            }
        }

        /* Media query for mobile devices */
        /* @media only screen and (max-width: 768px) {
    #about .img-fluid {
        margin-top: 70px;
    }
} */
        @media (max-width: 576px) {

            /* Adjusts for screens smaller than 576px */
            .carousel-caption {
                bottom: 10%;
                /* Adjust for smaller screens */
                right: 5%;
                /* Adjust for smaller screens */
                left: 5%;
                /* Adjust for smaller screens */
                font-size: 12px;
                /* Smaller text for smaller screens */
            }
        }

        @media (max-width: 576px) {
            #product .container .display-5 {
                margin-top: -1rem !important;
                /* Add !important to ensure this rule takes precedence */
            }
        }

        .dot {
            font-size: 50px;
        }
         .coffee_syrups {
            font-size: 18px;
            /* Smaller font size for small screens */
            padding: 4px 8px;
            word-break: keep-all;
            /* Prevent word breaking */
            border: 1px solid;
            /* Reduce padding */
            border-radius: 15px;
            /* Adjust border radius */
            box-sizing: border-box;
            border-style:inherit;
            box-shadow: 2px 3px #abc982;
;
            /* Apply universally, as an example */
            /* Include padding and border in element's total width and height */
        }

        @media (max-width: 768px) {

            /* Adjusts for medium devices and below */
            .coffee_syrups {
                font-size: 15px;
                /* Smaller font size for small screens */
                padding: 4px 8px;
                word-break: keep-all;
                /* Prevent word breaking */
                border: 1px solid;
                /* Reduce padding */
                border-radius: 15px;
                /* Adjust border radius */
                box-sizing: border-box;
                border-style:inherit;
                 box-shadow: 2px 3px #abc982;
;
                /* Apply universally, as an example */
                /* Include padding and border in element's total width and height */
            }
        }

        @media (max-width: 576px) {

            /* Adjusts for small devices */
            .coffee_syrups {
                font-size: 15px;
                font-weight: bold;
                /* Even smaller font size for phone screens */

            }
        }
       @media (max-width: 768px) {
    /* Adjusts for medium devices and below */
    .syrups {
        font-size: 20px;
        margin-top: 20px;
    }
}


       
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top" style="background: #252525;">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light py-2 py-lg-0" style="background: #252525;">
                <a href="{{ route('index') }}" class="navbar-logo">
                    <img class="img-fluid" src="{{ asset('syrups/img/logos.png') }}" alt="Logo">
                </a>
                <button type="button" id="navbar-button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="#index" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#product" class="nav-item nav-link">Products</a>
                        {{-- <a href="#store" class="nav-item nav-link">Menu</a> --}}
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <section id="index">

        <div id="header-carousel" class="carousel slide carousel-fade slidercoffee" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('syrups/img/home page1.jpg') }}" data-bs-interval="100"
                        alt="Image">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('syrups/img/home page 3.jpg') }}" data-bs-interval="100"
                        alt="Image">
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('syrups/img/home page 2.jpg') }}" data-bs-interval="100"
                        alt="Image">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            <div class="carousel-caption">
                <h6 class="display-1">Lets innovate <br> with us..</h6>
            </div>
        </div>


        <!-- Overlay Content (Positioned Absolute) -->
        {{-- <div class="carousel-caption d-none d-md-block">
        <h5>Same Title for All Slides</h5>
        <p>This is a description that will appear on all slides.</p>
        <a href="#" class="btn btn-primary">Learn More</a>
      </div> --}}

    </section>
    <!-- Carousel End -->

    <!-- Article Start -->
    <section id="about">
        <!-- <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5 ">
                    <div class="col-5 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="{{ asset('syrups/img/contact-us.avif') }}" alt="">
                    </div>
                    <div class="col-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="section-title">
                            {{-- <p class="fs-5 fw-medium text-primary">Conatact Us</p> --}}
                            <h1 class="display-6">Contact Us</h1>
                        </div>
                        <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                            amet diam et
                            eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore
                            erat amet
                        </p>
                    </div>
                </div>
            </div>
        </div>-->
        <!-- Article End -->

        <!-- Article Start -->
        <div class="container-xxl py-5 mt-2">
            <div class="container">
                <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s"
                    style="max-width: 500px;">
                    <h1 class="display-5">About Us</h1>
                </div>
                <div class="row mt-4">
                    <div class="col-sm-6">
                        <img class="img-fluid" src="{{ asset('syrups/img/coffee_syrup.jpg') }}" alt="">
                    </div>
                    <div class="col-sm-6">
                        <p>With a long experience in a food industry Quebec waters establish itself as a key Player
                            amongest the beverage the most Innovative part of the industry. Our premium quality syrups
                            blended by masters are perfect balance of finest Ingredients into natural cane sugar syrup
                        </p>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!-- Article End -->


    <section id="product">
        <div class="container-xxl">
            <div class="container">
                <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s"
                    style="max-width: 500px;">
                    {{-- <p class="fs-5 fw-medium text-primary">Our Products</p> --}}
                    <h1 class="display-5">Syrups for Beverages</h1>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-4">
                        <img src="{{ asset('syrups/img/bar_syrups.jpg') }}" class="img-fluid" alt="Image 1">
                        <p class="mt-3 text-center">Bar syrups</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="{{ asset('syrups/img/COFFEE SYRUPS.png') }}" class="img-fluid" alt="Image 2">
                        <p class="mt-3 text-center">Coffee syrups</p>
                    </div>
                    <div class="col-sm-4">
                        <img src="{{ asset('syrups/img/shake_syrup.png') }}" class="img-fluid" alt="Image 3">
                        <p class="mt-3 text-center">Shake syrups</p>
                    </div>
                    <!-- Add more columns here if needed -->
                </div>
            </div>
        </div>
    </section>
    <!-- Store End -->

    <!-- Article Start -->
    <section id="store">
        <div class="container-xxl py-4">
            <div class="container">
                <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s"
                    style="max-width: 500px;">
                    {{-- <p class="fs-5 fw-medium text-primary">Avialiable Products</p> --}}
                    {{-- <h1 class="display-5">Menu</h1> --}}
                </div>
                <div class="row mt-3">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="{{ asset('syrups/img/bar_syrups.jpg') }}" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="section-title">
                            <!-- <p class="fs-5 fw-medium text-primary">Bar syrups</p>-->
                            <h3 class="display-6 syrups" style="color:#33adff">Bar syrups</h3>
                        </div>
                        <div class="text-center">
                        <div class="row mt-3 p-2">
                            <div class="col-6">
                                <div class="coffee_syrups">Passion fruit</div>
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">Grenadine</div>
                            </div>
                        </div>
                        <div class="row mt-3 p-2">
                            <div class="col-3">
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">Blue curacao</div>
                            </div>
                            <div class="col-3">    
                            </div>
                        </div>
                        <div class="row mt-3 p-2">
                            <div class="col-6">
                                <div class="coffee_syrups">Malt Whiskey</div>
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">Green apple</div>
                            </div>
                        </div>
                        <div class="row mt-3 p-2">
                            <div class="col-3">
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">Mojito mint</div>
                            </div>
                            <div class="col-3">
                            </div>
                        </div>
                        <div class="row mt-3 p-2">
                            <div class="col-6">
                                <div class="coffee_syrups">Strawberry</div>
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">Lemon tea</div>
                            </div>
                        </div>
                        <div class="row mt-3 p-2">
                            <div class="col-3">
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">Peach tea</div>
                            </div>
                            <div class="col-3">
                            </div>
                        </div>
                        <div class="row mt-3 p-2">
                            <div class="col-6">
                                <div class="coffee_syrups">Kiwi</div>
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">Cucumber</div>
                            </div>

                        </div>
                        <div class="row mt-3 p-2">
                            <div class="col-3"> 
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">Triplesec</div>
                            </div>
                            <div class="col-3">
                            </div>
                        </div>
                        <div class="row mt-3 p-2">
                            <div class="col-6">
                                <div class="coffee_syrups">Watermelon</div>
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">Pinacolada</div>
                            </div>
                        </div>
                        <div class="row mt-3 p-2">
                            <div class="col-3">
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">Black widow</div>
                            </div>
                            <div class="col-3">
                            </div>
                        </div>
                        <div class="row mt-3 p-2">
                            <div class="col-6">
                                <div class="coffee_syrups">Rose</div>
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">Blood orange</div>
                            </div>
                        </div>
                        <div class="row mt-3 p-2">
                            <div class="col-3">
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">Green mint</div>
                            </div>
                            <div class="col-3">
                            </div>
                        </div>
                        <div class="row mt-3 p-2">
                            <div class="col-6">
                                <div class="coffee_syrups">India masala</div>
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">Pineapple</div>
                            </div>
                        </div>
                    </div>
                        <!-- <div data-wow-delay="0.5s"> -->
                        {{-- <ul>
                                        <li>Passion fruit</li>
                                        <li>Blue curacao</li>
                                        <li>Grenadine</li>
                                        <li>Malt Whiskey</li>
                                        <li>Mojito mint</li>
                                        <li>Green apple</li>
                                        <li>Strawberry</li>
                                        <li>Peach tea</li>
                                        <li>Lemon tea</li>
                                        <li>Kiwi</li>
                                        <li>Triplesec</li>
                                        <li>Cucumber</li>
                                        <li>Watermelon</li>
                                        <li>Black widow</li>
                                        <li>Pinacolada</li>
                                        <li>Rose</li>
                                        <li>Green mint</li>
                                        <li>Blood orange</li>
                                        <li>India masala</li>
                                        <li>Pineapple</li>
                            </ul> --}}
                        <!--
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-6" data-wow-delay="0.1s">
                                        <ul>
                                            <li>Passion fruit</li>
                                            <li>Blue curacao</li>
                                            <li>Grenadine</li>
                                            <li>Malt Whiskey</li>
                                            <li>Mojito mint</li>
                                            <li>Green apple</li>
                                            <li>Strawberry</li>
                                            <li>Peach tea</li>
                                            <li>Lemon tea</li>
                                            <li>Kiwi</li>
                                        </ul>
                                    </div>

                                    <div class="col-sm-6" data-wow-delay="0.5s">
                                        <ul>
                                            <li>Triplesec</li>
                                            <li>Cucumber</li>
                                            <li>Watermelon</li>
                                            <li>Black widow</li>
                                            <li>Pinacolada</li>
                                            <li>Rose</li>
                                            <li>Green mint</li>
                                            <li>Blood orange</li>
                                            <li>India masala</li>
                                            <li>Pineapple</li>
                                        </ul>
                                    </div>
                                </div>
                            </div> -->
                        <!-- </div> -->

                    </div>
                </div>
            </div>
        </div>

        <!-- Article End -->

        <div class="container-xxl py-4">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="{{ asset('syrups/img/COFFEE SYRUPS.png') }}" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="section-title">
                            <!--  <p class="fs-5 fw-medium text-primary">
                                Coffee syrups</p>-->
                            <h3 class="display-6 syrups" style="color:#33adff">
                                Perfect Syrups for Coffee</h3>
                        </div>
                        <div class="text-center">
                        <div class="row mt-3 p-2">
                            <div class="col-7">
                                <div class="coffee_syrups">Roasted hazelnut</div>
                            </div>
                            <div class="col-5">
                                <div class="coffee_syrups">Irish cream</div>
                            </div>
                        </div>
                        <div class="row mt-3 p-2">
                            <div class="col-3">     
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">Salted caramel</div>
                            </div>
                            <div class="col-3">
                            </div>
                        </div>
                        <div class="row mt-3 p-2">
                            <div class="col-7">
                                <div class="coffee_syrups">Triplesec Grenadine</div>
                            </div>
                            <div class="col-5">
                                <div class="coffee_syrups">Tiramisu</div>
                            </div>
                        </div>
                        <div class="row mt-3 p-2">
                            <div class="col-3">
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">French vanilla</div>
                            </div>
                            <div class="col-3">        
                            </div>
                        </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- <ul>
                                <li>Roasted hazelnut</li>
                                <li>Salted caramel</li>
                                <li>Irish cream</li>
                                <li>Triplesec Grenadine</li>
                                <li>French vanilla</li>
                                <li>Tiramisu</li>
                            </ul> -->

        <!-- Article End -->

        <div class="container-xxl py-4">
            <div class="container">
                <div class="row ">
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="{{ asset('syrups/img/shake_syrup.png') }}" alt="">
                    </div>
                    <div class="col-sm-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="section-title">
                            <!-- <p class="fs-5 fw-medium text-primary">
                                Shake syrups</p>-->
                            <h3 class="display-6 syrups" style="color:#33adff">
                                Shake syrups</h3>
                        </div>
                        <div class="text-center">
                        <div class="row mt-3 p-2">
                            <div class="col-6">
                                <div class="coffee_syrups">Bubblegum</div>
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">Cold coffee</div>
                            </div>
                        </div>
                        
                        
                        <div class="row mt-3 p-2">
                            <div class="col-3">
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">Cookies cream</div>
                            </div>
                            <div class="col-3">
                            </div>
                        </div>
                        
                        
                        <div class="row mt-3 p-2">
                            <div class="col-6">
                                <div class="coffee_syrups">Rose</div>
                            </div>                            
                            <div class="col-6">
                                <div class="coffee_syrups">Shahi kulfi</div>
                            </div>
                        </div>
                       
                        
                        <div class="row mt-3 p-2">
                            <div class="col-3">                               
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">Saffron cream</div>
                            </div>
                            <div class="col-3">                               
                            </div>
                        </div>
                       
                        
                        <div class="row mt-3 p-2">
                            <div class="col-3">
                            </div>
                            <div class="col-6">
                                <div class="coffee_syrups">Red velvet</div>
                            </div>
                            <div class="col-3">
                            </div>
                        </div>
                        </div>
                        


                        <!-- <div data-wow-delay="0.5s">
                            <ul>
                                <li>Bubblegum</li>
                                <li>Cookies cream</li>
                                <li>Cold coffee</li>
                                <li>Rose</li>
                                <li>Saffron cream</li>
                                <li>Shahi kulfi</li>
                                <li>Red velvet</li>

                            </ul>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Article End -->

    <!-- Contact Start -->
    <section id="contact">
        <div class="container-xxl contact py-4">
            <div class="container">
                <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s"
                    style="max-width: 500px;">
                    {{-- <p class="fs-5 fw-medium text-primary">Contact Us</p> --}}
                    <h1 class="display-4">Let's meet us</h1>
                </div>
                <div class="row g-5 mb-5 mt-2">
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="btn-square mx-auto mb-3">
                            <i class="fa fa-envelope fa-2x text-white"></i>
                        </div>
                        <p class="mb-0">smartvegies@gmail.com</p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="btn-square mx-auto mb-3">
                            <i class="fa fa-phone fa-2x text-white"></i>
                        </div>
                        <p class="mb-0">18005729262</p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                        <div class="btn-square mx-auto mb-3">
                            <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                        </div>
                        <p class="mb-0">Roop Nutritions</p>
                        <p class="mb-0">Industrial Area, Mehatpur</p>
                        <p class="mb-0">Distt. Una, Himachal Pradesh- 174315</p>
                    </div>
                </div>
                <div class="row g-5">
                    {{-- <div class="col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="mb-4" style="color: #873e23;">Need a functional contact form?</h3>
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working
                            contact
                            form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code
                            and
                            you're done.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name"
                                            placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email"
                                            placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 120px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                    <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <iframe class="w-100 rounded"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6810.3163480438525!2d76.33976424318259!3d31.409767847058884!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391ace6944a6f5fb%3A0x768302e0b4911d9f!2sIndustrial%20Area%2C%20Mehatpur%2C%20Himachal%20Pradesh%20174315!5e0!3m2!1sen!2sin!4v1708665472733!5m2!1sen!2sin"
                                style="height: 100%; min-height: 300px; border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                            {{-- <iframe class="w-100 rounded"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                                frameborder="0" style="height: 100%; min-height: 300px; border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark footer py-4 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-4">
            <div class="row g-5">
                <div class="col-lg-5 col-md-6">
                    <h4 class="text-primary mb-4">Our Office</h4>
                    <p>
                        Roop Nutritions, Industrial Area, Mehatpur, Distt. Una, Himachal Pradesh- 174315<br>
                        <strong>Phone:</strong>
                        18005729262<br>
                        <strong>Email:</strong> smartvegies@gmail.com<br>
                    </p>
                    {{-- <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>Roop Nutritions

                        Industrial Area, Mehatpur
                        
                        Distt. Una, <div class="mx-4">Himachal Pradesh- 174315</span>
                        
                    </p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@example.com</p> --}}
                    {{-- <div class="d-flex pt-3">
                            <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                    class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                    class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                    class="fab fa-youtube"></i></a>
                            <a class="btn btn-square btn-primary rounded-circle me-2" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div> --}}
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-primary mb-4">Quick Links</h4>
                    <a class="btn btn-link" href="#index"><span class="links">Home</span></a>
                    <a class="btn btn-link" href="#about"><span class="links">About Us</span></a>
                    <a class="btn btn-link" href="#product"><span class="links">Our Products</span></a>
                    <a class="btn btn-link" href="#store"><span class="links">Menu</span></a>
                    <a class="btn btn-link" href="#contact"><span class="links">Contact Us</span></a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-primary mb-4">Business Hours</h4>
                    <p class="mb-1">Monday - Friday</p>
                    <h6 class="text-light">09:00 am - 07:00 pm</h6>
                    <p class="mb-1">Saturday</p>
                    <h6 class="text-light">09:00 am - 12:00 pm</h6>
                    <p class="mb-1">Sunday</p>
                    <h6 class="text-light">Closed</h6>
                </div>
                <!-- <div class="col-lg-3 col-md-6">
                        <h4 class="text-primary mb-4">Contact us with Whatsapp</h4>
                        <div class="whatsapp">
                        <a class="btn btn-square rounded-circle me-2" style="color:green; font-size:25px;" target="_blank" href="https://web.whatsapp.com"><i
                            class="fab fa-whatsapp"></i></a>
                        </div>
                    </div> -->
                {{-- <div class="col-lg-3 col-md-6">
                        <h4 class="text-primary mb-4">Newsletter</h4>
                        <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                        <div class="position-relative w-100">
                            <input class="form-control bg-transparent w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Your email">
                            <button type="button"
                                class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                        </div>
                    </div> --}}
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Copyright Start -->
    <div class="bottom">
        <div class="container-fluid copyright py-4 ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="fw-medium" href="#">Your Site Name</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="fw-medium" href="https://htmlcodex.com">HTML Codex</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Copyright End -->


    <!-- Whatsapp -->
    <!--<a class="btn btn-lg btn-primary btn-lg-square rounded-circle whatsapp" style="font-size:30px; margin-right: 14px;margin-bottom: -9rem" target="_blank"-->
    <!--   href="https://web.whatsapp.com"><i class="fab fa-whatsapp"></i></a>-->
    <!--  <a class="btn btn-lg btn-primary btn-lg-square rounded-circle whatsapp" style="font-size:30px; margin-right: 14px;margin-bottom: -9rem" target="_blank"-->
    <!--href="whatsapp://send?phone=+91 9501084697&text=Hello"><i class="fab fa-whatsapp"></i></a>-->
    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle whatsapp"
        style="font-size:30px; margin-right: 14px;margin-bottom: -9rem" target="_blank"
        href="whatsapp://send?phone=+91 8968220622"><i class="fab fa-whatsapp"></i></a>
    <!--<a id="whatsapp-link" class="btn btn-lg btn-primary btn-lg-square rounded-circle whatsapp" style="font-size:30px; margin-right: 14px;margin-bottom: -9rem" href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>-->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
            class="bi bi-arrow-up"></i></a>

    {{-- <script>
                document.addEventListener('DOMContentLoaded', function () {
                    var navbarToggler = document.getElementById('navbar-button');
                    var navbarCollapse = document.querySelector('.navbar-collapse');
                
                    navbarToggler.addEventListener('click', function () {
                        // Check if the navbar is expanded
                        if (navbarCollapse.classList.contains('show')) {
                            // Navbar is about to be hidden, apply default style
                            navbarToggler.style.color = ''; // Reset to default
                            navbarToggler.style.borderColor = ''; // Reset to default
                        } else {
                            // Navbar is about to be shown, change color to white
                            navbarToggler.style.color = 'white';
                            navbarToggler.style.borderColor = 'white';
                        }
                    });
                });
                </script> --}}

    <!--                <script>
        -- >
        <
        !--document.addEventListener('DOMContentLoaded', function() {
            -- >
            <
            !--
            var whatsappURL = '';
            -- >

            // Basic mobile detection
            <
            !--
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
                -- >
                // Mobile URL
                <
                !--whatsappURL = 'whatsapp://send?phone=+919501084697';
                -- >
                <
                !--
            } else {
                -- >
                // Web/Desktop URL
                <
                !--whatsappURL = 'https://wa.me/+919501084697';
                -- >
                <
                !--
            }-- >

            // Update the link's href with the determined URL
            <
            !--document.getElementById('whatsapp-link').setAttribute('href', whatsappURL);
            -- >
            <
            !--
        });
        -- >
        <
        !--
    </script>-->


    <script>
        document.querySelectorAll('.nav-link').forEach(item => {
            item.addEventListener('click', () => {
                const bsCollapse = new bootstrap.Collapse(document.getElementById('navbarCollapse'), {
                    toggle: false
                });
                bsCollapse.hide(); // This line hides the navbar
            });
        });
    </script>


    <!-- JavaScript Libraries -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('syrups/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('syrups/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('syrups/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('syrups/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('syrups/js/main.js') }}"></script>
</body>

</html>
