<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Coffee</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <div class="container-fluid bg-black sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg bg-black navbar-dark py-2 py-lg-0">
                <a href="{{ route('index') }}" class="navbar-brand">
                    <img class="img-fluid" src="{{ asset('syrups/img/logo.png')}}" alt="Logo">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="#index" class="nav-item nav-link active">Home</a>
                        <a href="#about" class="nav-item nav-link">About</a>
                        <a href="#product" class="nav-item nav-link">Products</a>
                        <a href="#store" class="nav-item nav-link">Store</a>
                        <!-- <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                            <div class="dropdown-menu bg-light rounded-0 m-0">
                                <a href="feature.html" class="dropdown-item">Features</a>
                                <a href="blog.html" class="dropdown-item">Blog Article</a>
                                <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                                <a href="404.html" class="dropdown-item">404 Page</a>
                            </div>
                        </div> -->
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    <!-- <div class="border-start ps-4 d-none d-lg-block">
                        <button type="button" class="btn btn-sm p-0"><i class="fa fa-search"></i></button>
                    </div> -->
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <section id="index">
    <div class="container-fluid px-0 mb-5" >
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
             <!-- Fixed Text Overlay -->
    <!--<div class="carousel-caption d-none d-md-block">-->
    <!--    <h5>Fixed Title</h5>-->
    <!--    <p>Some representative placeholder content for all slides.</p>-->
    <!--</div>-->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ asset('syrups/img/slider1.jpg')}}" alt="Image">
                    <!-- <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">Welcome to <strong class="text-dark">TEA
                                            House</strong></p>
                                    <h1 class="display-1 text-dark mb-4 animated zoomIn">Organic & Quality Tea
                                        Production</h1>
                                    <a href="" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="{{ asset('syrups/img/slider2.webp')}}" alt="Image">
                    <!-- <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-7 text-center">
                                    <p class="fs-4 text-white animated zoomIn">Welcome to <strong class="text-dark">TEA
                                            House</strong></p>
                                    <h1 class="display-1 text-dark mb-4 animated zoomIn">Organic & Quality Tea
                                        Production</h1>
                                    <a href="" class="btn btn-light rounded-pill py-3 px-5 animated zoomIn">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
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
        </div>
    </div>
</sectin>
    <!-- Carousel End -->

    <!-- Article Start -->
    <section id="about">
    <div class="container-xxl py-5" >
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <img class="img-fluid" src="{{ asset('syrups/img/contact.jpg')}}" alt="">
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium text-primary">Conatact Us</p>
                        <h1 class="display-6">Contact Us for Order</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                        sit, sed stet lorem sit clita duo justo magna. Tempor erat elitr rebum at clita.</p>
                    <!-- <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Article End -->

    <!-- Article Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="section-title">
                        <p class="fs-5 fw-medium text-primary">About Us</p>
                        <h1 class="display-6">Know Who We Are</h1>
                    </div>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <p class="mb-4">Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et
                        sit, sed stet lorem sit clita duo justo magna. Tempor erat elitr rebum at clita.</p>
                    <!-- <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a> -->
                </div>
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.5s">
                    <img class="img-fluid" src="{{ asset('syrups/img/aboutus.jpg')}}" alt="">
                </div>

            </div>
        </div>
    </div>
</section>
    <!-- Article End -->

    <section id="product">
    <div class="container-xxl py-5" >
        <div class="container">
            <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <p class="fs-5 fw-medium text-primary">Our Products</p>
                <h1 class="display-6">Want to stay healthy? Choose tea taste</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="{{ asset('syrups/img/tp1.jpg')}}" alt="">
                        <p class="mt-3">Bar syrups</p>
                        <!-- <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Nature close tea</h4>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="text-primary">$19.00</h4>
                        </div> -->
                        <!-- <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="store-item position-relative text-center">    
                        <img class="img-fluid" src="{{ asset('syrups/img/tp2.jpg')}}" alt="">
                        <p>Coffee syrups</p>
                        <!-- <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <strong class="mb-3">Green tea tulsi</strong>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <strong class="text-primary">$19.00</strong>
                        </div> -->
                        <!-- <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="store-item position-relative text-center">
                        <img class="img-fluid" src="{{ asset('syrups/img/tp3.jpg')}}" alt="">
                        <strong class="mb-3">Shakes syrups</strong>
                        <!-- <div class="p-4">
                            <div class="text-center mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                            </div>
                            <h4 class="mb-3">Instant tea premix</h4>
                            <p>Aliqu diam amet diam et eos. Clita erat ipsum lorem erat ipsum lorem sit sed</p>
                            <h4 class="text-primary">$19.00</h4>
                        </div>
                        <div class="store-overlay">
                            <a href="" class="btn btn-primary rounded-pill py-2 px-4 m-2">More Detail <i class="fa fa-arrow-right ms-2"></i></a>
                            <a href="" class="btn btn-dark rounded-pill py-2 px-4 m-2">Add to Cart <i class="fa fa-cart-plus ms-2"></i></a>
                        </div>
                    </div> -->
                    </div>

                </div>
            </div>
        </div>
</section>
        <!-- Store End -->

        <!-- Article Start -->
        <section id="store">
        <div class="container-xxl py-5" >
            <div class="container">
                <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s"
                    style="max-width: 500px;">
                    <p class="fs-5 fw-medium text-primary">Avialiable Products</p>
                    <h1 class="display-6">Want to stay healthy? Choose tea taste</h1>
                </div>
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                        <div class="mt-5">
                        <img class="img-fluid" src="{{ asset('syrups/img/tp1.jpg')}}" alt="">
                        </div>
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="section-title">
                            <p class="fs-5 fw-medium text-primary">Bar syrups</p>
                            <h1 class="display-6">List of Bar syrups</h1>
                        </div>
                        <div class="container">
                            <div class="row g-5">
                                <div class="col-6" data-wow-delay="0.1s">
                                    <ul>
                                        <li>Passion fruit Malt beer</li>
                                        <li>Mojito mint</li>
                                        <li>Triplesec Grenadine</li>
                                        <li>Blood orange Watermelon</li>
                                        <li>Blueberry Kiwi</li>
                                        <li>India masala Black widow</li>
                                        <li>Green apple Strawberry</li>
                                        <li>Lemon tea Coffee</li>
                                        <li>Pina colada Peach</li>
                                        <li>Green mint</li>
                                    </ul>
                                </div>
                                
                                <div class="col-6" data-wow-delay="0.5s">
                                    <ul>
                                        <li>Passion fruit Malt beer</li>
                                        <li>Mojito mint</li>
                                        <li>Triplesec Grenadine</li>
                                        <li>Blood orange Watermelon</li>
                                        <li>Blueberry Kiwi</li>
                                        <li>India masala Black widow</li>
                                        <li>Green apple Strawberry</li>
                                        <li>Lemon tea Coffee</li>
                                        <li>Pina colada Peach</li>
                                        <li>Green mint</li>
                                    </ul>
                            </div>
                        </div>
                        
                        <!-- <a href="" class="btn btn-primary rounded-pill py-3 px-5">Read More</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>

        <!-- Article End -->

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="{{ asset('syrups/img/tp2.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="section-title">
                            <p class="fs-5 fw-medium text-primary">
                                Coffee syrups</p>
                            <h1 class="display-6">List of 
                                Coffee syrups</h1>
                        </div>
                       
                                <div data-wow-delay="0.5s">
                                    <ul>
                                        <li>Salted caramel</li>
                                        <li>Roasted hazelnut</li>
                                        <li>Triplesec Grenadine</li>
                                        <li>French vanilla</li>
                                        <li>Tiramisu Irish cream</li>
                                        <li>Irish cream</li>
                                        
                                    </ul>
                            </div>
                        
                </div>
            </div>
        </div>
    </div>
    
        <!-- Article End -->

        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                        <img class="img-fluid" src="{{ asset('syrups/img/tp3.jpg')}}" alt="">
                    </div>
                    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                        <div class="section-title">
                            <p class="fs-5 fw-medium text-primary">
                                Shake syrups</p>
                            <h1 class="display-6">List of 
                                Shake syrups</h1>
                        </div>
                       
                                <div data-wow-delay="0.5s">
                                    <ul>
                                        <li>Saffron cream</li>
                                        <li>Cookies & cream</li>
                                        <li>Coffee cappuccino</li>
                                        <li>Meetha paan</li>
                                        <li>Shahi kulfi</li>
                                        <li>Shahi kulfi</li>
                                        
                                    </ul>
                            </div>
                        
                </div>
            </div>
        </div>
    </div>
</section>
    
        <!-- Article End -->





        <!-- Contact Start -->
        <section id="contact">
        <div class="container-xxl contact py-5" >
            <div class="container">
                <div class="section-title text-center mx-auto wow fadeInUp" data-wow-delay="0.1s"
                    style="max-width: 500px;">
                    <p class="fs-5 fw-medium text-primary">Contact Us</p>
                    <h1 class="display-6">If You Have Any Query, Please Contact Us</h1>
                </div>
                <div class="row g-5 mb-5">
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                        <div class="btn-square mx-auto mb-3">
                            <i class="fa fa-envelope fa-2x text-white"></i>
                        </div>
                        <p class="mb-2">info@example.com</p>
                        <p class="mb-0">support@example.com</p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.4s">
                        <div class="btn-square mx-auto mb-3">
                            <i class="fa fa-phone fa-2x text-white"></i>
                        </div>
                        <p class="mb-2">+012 345 67890</p>
                        <p class="mb-0">+012 345 67890</p>
                    </div>
                    <div class="col-md-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                        <div class="btn-square mx-auto mb-3">
                            <i class="fa fa-map-marker-alt fa-2x text-white"></i>
                        </div>
                        <p class="mb-2">123 Street</p>
                        <p class="mb-0">New York, USA</p>
                    </div>
                </div>
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h3 class="mb-4">Need a functional contact form?</h3>
                        <p class="mb-4">The contact form is currently inactive. Get a functional and working contact
                            form with Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and
                            you're done.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message"
                                            style="height: 120px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send
                                        Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="h-100">
                            <iframe class="w-100 rounded"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                                frameborder="0" style="height: 100%; min-height: 300px; border:0;" allowfullscreen=""
                                aria-hidden="false" tabindex="0"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
        <!-- Contact End -->


        <!-- Footer Start -->
        <div class="container-fluid bg-dark footer mt-5 py-5 wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-primary mb-4">Our Office</h4>
                        <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>123 Street, New York, USA
                        </p>
                        <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>+012 345 67890</p>
                        <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>info@example.com</p>
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
                    <div class="col-lg-3 col-md-6">
                        <h4 class="text-primary mb-4">Quick Links</h4>
                        <a class="btn btn-link" href="">About Us</a>
                        <a class="btn btn-link" href="">Contact Us</a>
                        <a class="btn btn-link" href="">Our Services</a>
                        <a class="btn btn-link" href="">Terms & Condition</a>
                        <a class="btn btn-link" href="">Support</a>
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
        <div class="container-fluid copyright py-4">
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
        <!-- Copyright End -->


        
          <a class="btn btn-square rounded-circle me-2 whatsapp" style="color:green; font-size:40px;" target="_blank" href="https://web.whatsapp.com"><i
                            class="fab fa-whatsapp"></i></a>
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i
                class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('syrups/lib/wow/wow.min.js')}}"></script>
        <script src="{{ asset('syrups/lib/easing/easing.min.js')}}"></script>
        <script src="{{ asset('syrups/lib/waypoints/waypoints.min.js')}}"></script>
        <script src="{{ asset('syrups/lib/owlcarousel/owl.carousel.min.js')}}"></script>

        <!-- Template Javascript -->
        <script src="{{ asset('syrups/js/main.js')}}"></script>
</body>

</html>