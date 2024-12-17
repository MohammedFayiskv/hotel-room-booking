@extends('layouts.index')
@section('title', 'Home Page')
@section('content')
<!-- carosel -->
<div class="container-fluid p-0 mb-5">
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item  active ">
                <img src="/images/carousel-1.jpg" class="d-block w-100" alt="image">
                <div class="carousel-caption d-flex   flex-column align-items-center  justify-content-center">
                    <div class="p-3 carousel-captions-second-div" style="max-width:700px">
                        <h6 class="section-title text-white font-700-sans text-uppercase mb-3 animated slideInDown">
                            Luxury Living</h6>
                        <h1 class="display-3  font-700-sans animated slideInDown text-white">Discover A Brand Luxurious
                            Hotel</h1>
                        <a href="#" class="btn btn-primary py-md-3 px-md-5 me-2 text-uppercase animated slideInLeft"
                            style="font-weight: 500;">Privacy Policy</a>
                        <a href="#" class="btn btn-light py-md-3 px-md-5 me-2 text-uppercase  animated slideInLeft"
                            style="font-weight: 500;">Privacy Policy</a>
                    </div>

                </div>
            </div>
            <div class="carousel-item">
                <img src="/images/carousel-2.jpg" class="d-block w-100" alt="image">
                <div class=" carousel-caption d-flex flex-column  align-items-center  justify-content-center">
                    <div class="p-3 carousel-captions-second-div" style="max-width:700px;">
                        <h6 class="text-white text-uppercase  font-700-sans mb-3 section-title animated slideInDown ">
                            Luxury Living</h6>
                        <h1 class=" display-3 text-white  font-700-sans animated slideInDown ">Discover A Brand
                            Luxurious Hotel</h1>
                        <a href="#" class="btn btn-primary py-md-3 px-md-5 me-2 text-uppercase"> Our Rooms</a>
                        <a href="#" class="btn btn-light py-md-3 px-md-5 me-2 text-uppercase"> Our Rooms</a>
                    </div>
                </div>
            </div>
            <!-- <div class="carousel-item">
      <img src="..." class="d-block w-100" alt="...">
    </div>
  </div> -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- booking section-->
    <div class="container-fluid booking-input  pb-5">


        <div class="container booking-container">
            <div class="bg-white shadow" style="padding:35px;">
                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row  g-2">
                            <div class="col-md-3">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" placeholder="Check in"
                                        data-target="#date1" data-toggle="datetimepicker" />
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="input-group date" data-provide="datepicker">
                                    <input type="text" class="form-control">
                                    <div class="input-group-addon">
                                        <span class="glyphicon glyphicon-th"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select" name="cars" id="cars">
                                    <option selected value="Adult">Adult</option>
                                    <option value="Adult1">Adult1</option>
                                    <option value="Adult2">Adult2</option>
                                    <option value="Adult3">Adult3</option>
                                </select>
                            </div>
                            <div class="col-md-3">
                                <select class="form-select" name="cars" id="cars">
                                    <option selected value="child">Child</option>
                                    <option value="child1">Child1</option>
                                    <option value="child2">Child2</option>
                                    <option value="child3">Child3</option>
                                </select>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-primary w-100" style="border-radius: 5%;">Submit</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- aboutSection -->
    <div class="container-XXl py-5">
        <div class="container">
            <div class="row g-3">
                <div class="col-md-6">
                    <h6 class="section-title text-start  font-700-sans text-uppercase">About Us</h6>
                    <h1 class="mb-4 font-700-sans ">Welcome to <span
                            class="text-uppercase font-700-sans text-color-yellow">Hotelier</span></h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                        eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet
                    </p>
                    <div class="row g-3">
                        <div class="col-sm-4">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-hotel text-color-yellow fa-2x  mb-2"></i>
                                    <h2 class="about-section-h2 counter"> 1234</h2>
                                    <p class="mb-0 about-section-p">Rooms</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users fa-2x text-color-yellow mb-2"></i>
                                    <h2 class="about-section-h2 counter"> 1234</h2>
                                    <p class="mb-0 about-section-p">Clintes</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="border rounded p-1">
                                <div class="border rounded text-center p-4">
                                    <i class="fa fa-users-cog fa-2x text-color-yellow mb-2"></i>
                                    <h2 class="about-section-h2 counter"> 1234</h2>
                                    <p class="mb-0 about-section-p">Staffs</p>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-primary py-3 text-uppercase px-5 mt-2 explore-more" href="#"> Explore
                                More</a>
                        </div>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <img src="/images/room(7).jpg" class="img-fluid w-100 rounded" alt="image">
                        </div>
                        <div class="col-md-5" style="margin-top: 49px;">
                            <img src="/images/room(9).jpg" class="img-fluid w-70 rounded" alt="image">
                        </div>
                        <div class="col-md-5">
                            <img src="/images/room(9).jpg" class="img-fluid w-70 rounded" alt="image">
                        </div>
                        <div class="col-md-6">
                            <img src="/images/room(7).jpg" class="img-fluid w-100 rounded" alt="image">
                        </div>


                    </div>
                </div>


            </div>
        </div>
    </div>


    <div class="container-XXl">
        <div class="container">
            <div class=" text-center">
                <h6 class="text-uppercase text-center section-title text-color-yellow font-700-sans">Our Rooms</h6>
                <h1 class="mb-5 font-700-sans ">Explore Our<span
                        class="text-uppercase font-700-sans text-color-yellow">Rooms</span></h1>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="shadow absolute rounded overflow-hidden">
                            <div class="card">
                                <img class="card-img-top" src="/images/room-1.jpg" alt="Card image cap">
                                <small class=" rounded py-1 px-3 card-small-rate translate-middle-y">$100/Night</small>
                                <div class="card-body pt-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="card-title email-headding">Junior Suite</h5>
                                        <div class="ps-2">
                                            <small class="fa fa-star text-color-yellow"></small>
                                            <small class="fa fa-star text-color-yellow"></small>
                                            <small class="fa fa-star text-color-yellow"></small>
                                            <small class="fa fa-star text-color-yellow"></small>
                                            <small class="fa fa-star text-color-yellow"></small>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <small class="border-end me-3 pe-3 card-p-tag"><i
                                                class="fa fa-bed  me-2 text-color-yellow"></i>3 Bed</small>
                                        <small class="border-end me-3 pe-3 card-p-tag "><i
                                                class="fa fa-bath  me-2 text-color-yellow"></i>2 Bath</small>
                                        <small class="card-p-tag"><i
                                                class="fa fa-wifi  me-2 text-color-yellow"></i>Wifi</small>
                                    </div>
                                    <p class=" text-body mb-3 text-start card-p-tag">
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                        diam sed stet lorem.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-sm  btn-primary py-2 px-3" href=""> view details</a>
                                        <a class="btn  btn-sm  btn-dark py-2 px-3" href="">book now</a>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="shadow absolute rounded overflow-hidden">
                            <div class="card">
                                <img class="card-img-top" src="/images/room-2.jpg" alt="Card image cap">
                                <small class=" rounded py-1 px-3 card-small-rate translate-middle-y">$100/Night</small>
                                <div class="card-body pt-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="card-title email-headding ">Executive Suite</h5>
                                        <div class="ps-2">
                                            <small class="fa fa-star text-color-yellow"></small>
                                            <small class="fa fa-star text-color-yellow"></small>
                                            <small class="fa fa-star text-color-yellow"></small>
                                            <small class="fa fa-star text-color-yellow"></small>
                                            <small class="fa fa-star text-color-yellow"></small>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <small class="border-end me-3 pe-3 card-p-tag"><i
                                                class="fa fa-bed text-color-yellow me-2"></i>3 Bed</small>
                                        <small class="border-end me-3 pe-3 card-p-tag"><i
                                                class="fa fa-bath text-color-yellow me-2"></i>2 Bath</small>
                                        <small class="card-p-tag"><i
                                                class="fa fa-wifi text-color-yellow me-2"></i>Wifi</small>
                                    </div>
                                    <p class=" text-body mb-3 text-start card-p-tag">
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                        diam sed stet lorem.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-sm  btn-primary py-2 px-3" href=""> view details</a>
                                        <a class="btn  btn-sm  btn-dark py-2 px-3" href="">book now</a>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="shadow absolute rounded overflow-hidden">
                            <div class="card">
                                <img class="card-img-top" src="/images/room-3.jpg" alt="Card image cap">
                                <small class=" rounded py-1 px-3 card-small-rate translate-middle-y">$100/Night</small>
                                <div class="card-body pt-4">
                                    <div class="d-flex justify-content-between mb-3">
                                        <h5 class="card-title email-headding">Super Deluxe</h5>
                                        <div class="ps-2">
                                            <small class="fa fa-star text-color-yellow"></small>
                                            <small class="fa fa-star text-color-yellow"></small>
                                            <small class="fa fa-star text-color-yellow"></small>
                                            <small class="fa fa-star text-color-yellow"></small>
                                            <small class="fa fa-star text-color-yellow"></small>
                                        </div>
                                    </div>
                                    <div class="d-flex mb-3">
                                        <small class="border-end me-3 pe-3 card-p-tag"><i
                                                class="fa fa-bed  me-2 text-color-yellow"></i>3 Bed</small>
                                        <small class="border-end me-3 pe-3 card-p-tag"><i
                                                class="fa fa-bath  me-2 text-color-yellow"></i>2 Bath</small>
                                        <small class="card-p-tag"><i
                                                class="fa fa-wifi  me-2 text-color-yellow"></i>Wifi</small>
                                    </div>
                                    <p class=" text-body mb-3 text-start card-p-tag">
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet
                                        diam sed stet lorem.
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <a class="btn btn-sm  btn-primary py-2 px-3" href=""> view details</a>
                                        <a class="btn  btn-sm  btn-dark py-2 px-3" href="">book now</a>

                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</div>



<!-- video and text -->
<div class="container-XXl py-5 px-0">
    <div class="row g-0">
        <div class="col-md-6 bg-blue-dark d-flex align-items-center">
            <div class="p-5 img-dark">
                <h6 class="section-title">Luxury Living</h6>
                <h1 class="text-start text-white text-uppercase mb-3">Discover A Brand Luxurious Hotel</h1>
                <P class="text-start text-white">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam
                    amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore
                    erat amet</P>
                <a class="btn btn-sm  btn-primary py-md-3 px-md-5 me-3" href=""> view details</a>
                <a class="btn  btn-sm  btn-dark py-md-3 px-md-5" href="">book now</a>
            </div>

        </div>
        <div class="col-md-6">
            <img class="img-fluid full-width-image-cover" src="/images/room(3).jpg" alt="image">
        </div>
    </div>
</div>

<!-- Our service -->
<div class="container-XXl py-3">
    <div class="container">
        <div class="text-center">
            <h6 class="text-uppercase text-center section-title text-color-yellow font-700-sans">Our Service</h6>
            <h1 class="mb-5 font-700-sans ">Explore Our<span
                    class="text-uppercase font-700-sans text-color-yellow">Service</span></h1>
            <div class="row g-3">
                <div class="col-lg-4 col-md-6">
                    <a class="service-item rounded" href="">
                        <div class="card d-flex align-items-center p-5  rounded shadow text-card">
                            <div class="text-center border p-1 rounded">
                                <div class="text-center border rounded p-3 ">
                                    <i class="fa fa-hotel fa-2x "></i>
                                </div>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title  email-headding">Rooms & Appartment</h5>
                                <p class="card-text card-p-tag ">Erat ipsum justo amet duo et elitr dolor, est duo duo
                                    eos lorem sed diam stet diam sed stet lorem.</p>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="service-item rounded" href="">
                        <div class="card d-flex align-items-center p-5  rounded shadow text-card">
                            <div class="text-center border p-1 rounded">
                                <div class="text-center border rounded p-3 ">
                                    <i class="fa fa-utensils fa-2x "></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title  email-headding">Food & Restaurant</h5>
                                <p class="card-text card-p-tag ">Erat ipsum justo amet duo et elitr dolor, est duo duo
                                    eos lorem sed diam stet diam sed stet lorem.</p>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a class="service-item rounded" href="">
                        <div class="card   text-card d-flex align-items-center p-5  rounded shadow text-card">
                            <div class="text-center border p-1 rounded">
                                <div class="text-center border rounded p-3 ">
                                    <i class="fa fa-spa fa-2x "></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title  email-headding">Spa & Fitness</h5>
                                <p class="card-text card-p-tag ">Erat ipsum justo amet duo et elitr dolor, est duo duo
                                    eos lorem sed diam stet diam sed stet lorem.</p>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <a class="service-item rounded" href="">
                        <div class="card d-flex align-items-center p-5  rounded shadow text-card">
                            <div class="text-center border p-1 rounded">
                                <div class="text-center border rounded p-3 ">
                                    <i class="fa fa-swimmer fa-2x "></i>
                                </div>
                            </div>

                            <div class="card-body">
                                <h5 class="card-title  email-headding">Sports & Gaming</h5>
                                <p class="card-text card-p-tag ">Erat ipsum justo amet duo et elitr dolor, est duo duo
                                    eos lorem sed diam stet diam sed stet lorem.</p>

                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-6">
                    <a class="service-item rounded" href="">
                        <div class="card d-flex align-items-center p-5  rounded shadow text-card">
                            <div class="text-center border p-1 rounded">
                                <div class="text-center border rounded p-3 ">
                                    <i class="fa fa-glass-cheers fa-2x "></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title  email-headding">Event & Party</h5>
                                <p class="card-text card-p-tag ">Erat ipsum justo amet duo et elitr dolor, est duo duo
                                    eos lorem sed diam stet diam sed stet lorem.</p>

                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-4 col-md-6 ">
                    <a class="service-item" href="">
                        <div class="card d-flex align-items-center p-5  rounded shadow text-card">
                            <div class="text-center border p-1 rounded">
                                <div class="text-center border rounded p-3 ">
                                    <i class="fa fa-dumbbell fa-2x "></i>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title email-headding ">GYM & Yoga</h5>
                                <p class="card-text card-p-tag ">Erat ipsum justo amet duo et elitr dolor, est duo duo
                                    eos lorem sed diam stet diam sed stet lorem.</p>

                            </div>
                        </div>
                    </a>
                </div>


            </div>
        </div>


    </div>

</div>





<div class="container-xxl testimonial my-5 py-5 wow zoomIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="owl-carousel testimonial-carousel py-5">
            <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet.
                    Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="/images/testimonial-1.jpg"
                        style="width: 45px; height: 45px;">
                    <div class="ps-3">
                        <h6 class="fw-bold mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
            </div>
            <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet.
                    Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="/images/testimonial-2.jpg"
                        style="width: 45px; height: 45px;">
                    <div class="ps-3">
                        <h6 class="fw-bold mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
            </div>
            <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam stet.
                    Est stet ea lorem amet est kasd kasd et erat magna eos</p>
                <div class="d-flex align-items-center">
                    <img class="img-fluid flex-shrink-0 rounded" src="/images/testimonial-3.jpg"
                        style="width: 45px; height: 45px;">
                    <div class="ps-3">
                        <h6 class="fw-bold mb-1">Client Name</h6>
                        <small>Profession</small>
                    </div>
                </div>
                <i class="fa fa-quote-right fa-3x text-primary position-absolute end-0 bottom-0 me-4 mb-n1"></i>
            </div>
        </div>
    </div>
</div>
<div class="container-XXl py-5">

    <div class="container">

        <div class="text-center">

            <h6 class="text-uppercase text-center section-title text-color-yellow font-700-sans">Our Team</h6>
            <h1 class="mb-5 font-700-sans ">Explore Our<span
                    class="text-uppercase font-700-sans text-color-yellow">Staffs</span></h1>
        </div>
        <div class="row g-4">

            <div class="col-lg-3 col-md-6 col-sm-12 staf-section-cards">
                <div class="card position-relative ">
                    <img class="card-img-top" src="images/team-1.jpg" alt="Card image cap">
                    <div class="social-media-icons">
                        <a class="btn btn-square btn-primary facebook-link mx-1 " href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary twitter-link mx-1" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary  instagram-link mx-1" href=""><i
                                class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body p-5 text-center">
                        <h5 class="fw-bold mb-0"> Full Name</h5>
                        <small class="card-p-tag" style="font-size:small">Designation</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 staf-section-cards">
                <div class="card position-relative ">
                    <img class="card-img-top" src="images/team-2.jpg" alt="Card image cap">
                    <div class="social-media-icons">
                        <a class="btn btn-square btn-primary facebook-link mx-1 " href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary twitter-link mx-1" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary  instagram-link mx-1" href=""><i
                                class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body p-5 text-center">
                        <h5 class="fw-bold mb-0"> Full Name</h5>
                        <small class="card-p-tag" style="font-size:small">Designation</small>
                    </div>
                </div>

            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 staf-section-cards">
                <div class="card position-relative ">
                    <img class="card-img-top" src="images/team-3.jpg" alt="Card image cap">
                    <div class="social-media-icons">
                        <a class="btn btn-square btn-primary facebook-link mx-1 " href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary twitter-link mx-1" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary  instagram-link mx-1" href=""><i
                                class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body p-5 text-center">
                        <h5 class="fw-bold mb-0"> Full Name</h5>
                        <small class="card-p-tag" style="font-size:small">Designation</small>
                    </div>
                </div>
            </div>



            <div class="col-lg-3 col-md-6 col-sm-12 staf-section-cards">
                <div class="card position-relative ">
                    <img class="card-img-top" src="images/team-4.jpg" alt="Card image cap">
                    <div class="social-media-icons">
                        <a class="btn btn-square btn-primary facebook-link mx-1 " href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-primary twitter-link mx-1" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-primary  instagram-link mx-1" href=""><i
                                class="fab fa-instagram"></i></a>
                    </div>
                    <div class="card-body p-5 text-center">
                        <h5 class="fw-bold mb-0"> Full Name</h5>
                        <small class="card-p-tag" style="font-size:small">Designation</small>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>




@endsection