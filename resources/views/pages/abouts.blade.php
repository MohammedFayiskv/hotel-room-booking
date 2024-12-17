@extends('layouts.index')
@section('title', 'Home Page')
@section('content')
<div class="container-fluid carousel-about  p-5">
    <div class="container p-5 text-center">
        <h1 class=" font-700-sans text-white" style="font-size: 51px;">About Us</h1>
        <ul class="text-white about-carousel-ul">
            <li>Home</li>
            <li>Pages</li>
            <li>About</li>
        </ul>
    </div>
</div>
<!-- booking section -->
<div class="container-fluid  booking-section">
    <div class="conainer p-5 ">
        <form action="/action_page.php">
            <div class="shadow" style="padding: 35px;   background-color: white;">

                <div class="row g-2">
                    <div class="col-md-10">
                        <div class="row g-2">
                            <div class="col-md-3">
                                <input class="form-control" type="text" placeholder="Check in">
                            </div>
                            <div class="col-md-3">
                                <input class="form-control" type="text" placeholder="Check out">
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
    </form>
  </div>
</div>
<!-- carosal section -->
<div class="container-XXl py-5">
    <div class="container">
        <div class="row g-3">
            <div class="col-md-6">
                <h6 class="section-title text-start  font-700-sans text-uppercase">About Us</h6>
                <h1 class="mb-4 font-700-sans ">Welcome to <span
                        class="text-uppercase font-700-sans text-color-yellow">Hotelier</span></h1>
                <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et
                    eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
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
                        <a class="btn btn-primary py-3 text-uppercase px-5 mt-2 explore-more" href="#"> Explore More</a>
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