@extends('layouts.index')
@section('title', 'Home Page')
@section('content')
<div class="container-fluid carousel-about  p-5">
    <div class="container p-5 text-center">
        <h1 class=" font-700-sans text-white" style="font-size: 51px;">Rooms</h1>
        <ul class="text-white about-carousel-ul">
            <li>Home</li>
            <li>Pages</li>
            <li>Rooms</li>
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
<!-- tabsection -->
<div class="container-XXl" style="margin-bottom: 82px">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-3">

                <ul class="nav nav-tabs rooms-tab" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="forest-tab" data-bs-toggle="tab" href="#forest" role="tab"
                            aria-controls="home" aria-selected="true">Forest</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="city-tab" data-bs-toggle="tab" href="#city" role="tab"
                            aria-controls="profile" aria-selected="false">Cities</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="village-tab" data-bs-toggle="tab" href="#village" role="tab"
                            aria-controls="contact" aria-selected="false">Villages</a>
                    </li>
                  
                </ul>

            </div>

        </div>
    </div>
</div>




<div class="tab-content" id="myTabContent">

    <div class="container-XXl tab-pane fade show active" id="forest" role="tabpanel" aria-labelledby="forest-tab">
        <div class="container">
            <div class=" text-center">
                <h6 class="text-uppercase text-center section-title text-color-yellow font-700-sans">Explore forest
                    hideaways</h6>
                <h1 class="mb-5 font-700-sans text-uppercase ">See Our<span
                        class="text-uppercase font-700-sans text-color-yellow"> forest rooms</span></h1>
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
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                        stet
                                        diam
                                        sed stet lorem.
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
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                        stet
                                        diam
                                        sed stet lorem.
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
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                        stet
                                        diam
                                        sed stet lorem.
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
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                        stet
                                        diam
                                        sed stet lorem.
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
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                        stet
                                        diam
                                        sed stet lorem.
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
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                        stet
                                        diam
                                        sed stet lorem.
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





    <div class="container-XXl tab-pane fade" id="city" role="tabpanel" aria-labelledby="city-tab">
        <div class="container">
            <div class=" text-center">
                <h6 class="text-uppercase text-center section-title text-color-yellow font-700-sans">Discover our city's spaces</h6>
                <h1 class="mb-5 font-700-sans text-uppercase ">Check out our <span
                        class="text-uppercase font-700-sans text-color-yellow">city's rooms</span></h1>
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
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                        stet
                                        diam
                                        sed stet lorem.
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
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                        stet
                                        diam
                                        sed stet lorem.
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
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                        stet
                                        diam
                                        sed stet lorem.
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
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                        stet
                                        diam
                                        sed stet lorem.
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
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                        stet
                                        diam
                                        sed stet lorem.
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
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                        stet
                                        diam
                                        sed stet lorem.
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
     
    <div class="container-XXl tab-pane fade" id="village" role="tabpanel" aria-labelledby="village-tab">
        <div class="container">
            <div class=" text-center">
                <h6 class="text-uppercase text-center section-title text-color-yellow font-700-sans">Explore the village chambers</h6>
                <h1 class="mb-5 font-700-sans text-uppercase ">Visit our <span
                        class="text-uppercase font-700-sans text-color-yellow"> village rooms</span></h1>
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
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                        stet
                                        diam
                                        sed stet lorem.
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
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                        stet
                                        diam
                                        sed stet lorem.
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
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                        stet
                                        diam
                                        sed stet lorem.
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
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                        stet
                                        diam
                                        sed stet lorem.
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
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                        stet
                                        diam
                                        sed stet lorem.
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
                                        Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
                                        stet
                                        diam
                                        sed stet lorem.
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


<div class="container-xxl testimonial my-5 py-5 wow zoomIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="owl-carousel testimonial-carousel py-5">
            <div class="testimonial-item position-relative bg-white rounded overflow-hidden">
                <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam
                    stet.
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
                <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam
                    stet.
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
                <p>Tempor stet labore dolor clita stet diam amet ipsum dolor duo ipsum rebum stet dolor amet diam
                    stet.
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


















@endsection