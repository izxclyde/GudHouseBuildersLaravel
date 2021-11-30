@extends('nav_bar')

@section('content')

	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
 <!-- Carousel wrapper -->
 <div id="carouselDarkVariant" class="carousel slide carousel-fade carousel-dark" data-bs-ride="carousel">
                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="0" class="active" aria-current="true"></button>
                    <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="1"  aria-label="Slide 1" ></button>
                    <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="2"  aria-label="Slide 1"></button>
                </div>

                <!-- Inner -->
                <div class="carousel-inner">
                    <!-- Single item -->
                    <div class="carousel-item active" data-bs-interval="10000">
                    <img  src="{{asset('./img/aboutUsCover.png')}}" class="d-block w-100"  alt="..." />
                        <div class="carousel-caption d-none d-md-block">
                            <h1 class="animated bounceInRight" style="font-size:150px;">OUR COMPANY</h1>
                            <p class="animated bounceInRight" style="animation-delay: 2s">
                            A company profile may take on many different styles and lengths. New start-ups might boast a company profile that runs only two pages long. More accomplished teams might include awards, certifications, and a large client portfolio in their own profiles. It all comes down to who the company is, what its mission is, and what it has already accomplished. A company profile may take on many different styles and lengths. New start-ups might boast a company profile that runs only two pages long. More accomplished teams might include awards, certifications, and a large client portfolio in their own profiles. It all comes down to who the company is, what its mission is, and what it has already accomplished.A company profile may take on many different styles and lengths. New start-ups might boast a company profile that runs only two pages long. More accomplished teams might include awards, certifications, and a large client portfolio in their own profiles. It all comes down to who the company is, what its mission is, and what it has already accomplished. A company profile may take on many different styles and lengths. New start-ups might boast a company profile that runs only two pages long. More accomplished teams might include awards, certifications, and a large client portfolio in their own profiles. It all comes down to who the company is, what its mission is, and what it has already accomplished.A company profile may take on many different styles and lengths. New start-ups might boast a company profile that runs only two pages long. More accomplished teams might include awards, certifications, and a large client portfolio in their own profiles. It all comes down to who the company is, what its mission is, and what it has already accomplished. A company profile may take on many different styles and lengths. New start-ups might boast a company profile that runs only two pages long. More accomplished teams might include awards, certifications, and a large client portfolio in their own profiles. It all comes down to who the company is, what its mission is, and what it has already accomplished.
                            </p>
                            <button type="button" class="btn btn-dark btn-lg" style="margin-top:25px">KNOW MORE</button>
                        </div>
                    </div>
                    <!-- Single item -->
                    <div class="carousel-item"  data-bs-interval="10000">
                        <img  src="{{asset('./img/slide1.jpg')}}" class="d-block w-100"  alt="..." />
                        <div class="carousel-caption d-none d-md-block">
                                <h1 class="animated bounceInRight" style="font-size:150px;">OUR MISSION</h1>
                                <p class="animated bounceInRight" style="animation-delay: 2s">
                                A company profile may take on many different styles and lengths. New start-ups might boast a company profile that runs only two pages long. More accomplished teams might include awards, certifications, and a large client portfolio in their own profiles. It all comes down to who the company is, what its mission is, and what it has already accomplished. A company profile may take on many different styles and lengths. New start-ups might boast a company profile that runs only two pages long. More accomplished teams might include awards, certifications, and a large client portfolio in their own profiles. It all comes down to who the company is, what its mission is, and what it has already accomplished.
                                </p>
                                <button type="button" class="btn btn-dark btn-lg " style="margin-top:25px">KNOW MORE</button>
                        </div>
                    </div>
                    <!-- Single item -->
                    <div class="carousel-item"  data-bs-interval="1000">
                        <img  src="{{asset('./img/slide2.jpg')}}" class="d-block w-100"  alt="..." />
                        <div class="carousel-caption d-none d-md-block">
                                    <h1 class="animated bounceInRight" style="font-size:150px;">OUR VISSION</h1>
                                    <p class="animated bounceInRight" style="animation-delay: 2s">
                                    A company profile may take on many different styles and lengths. New start-ups might boast a company profile that runs only two pages long. More accomplished teams might include awards, certifications, and a large client portfolio in their own profiles. It all comes down to who the company is, what its mission is, and what it has already accomplished. A company profile may take on many different styles and lengths. New start-ups might boast a company profile that runs only two pages long. More accomplished teams might include awards, certifications, and a large client portfolio in their own profiles. It all comes down to who the company is, what its mission is, and what it has already accomplished.
                                    </p>
                                    <button type="button" class="btn btn-dark btn-lg" style="margin-top:25px">KNOW MORE</button>
                         </div>
                    </div>
                    
                </div>
                <!-- Inner -->

                <!-- Controls -->
                <button
                    class="carousel-control-prev" type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselDarkVariant" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!-- Carousel wrapper -->
               

  @stop