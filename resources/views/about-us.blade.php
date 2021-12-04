@extends('nav_bar')

@section('content')

	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <style>
        .aboutUs{
        background:rgba(255,255,255,0.4);
        padding:15px;
        border: 2px;
        border-radius: 25px; 
        font-family: Montserrat; 
        width:100%;
}
    </style>
 <!-- Carousel wrapper -->
 <div id="carouselDarkVariant" class="carousel slide carousel-fade carousel-dark" data-bs-ride="carousel">
                <!-- Indicators -->
                <div class="carousel-indicators">
                    <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="0" class="active" aria-current="true"></button>
                    <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="1"  aria-label="Slide 1" ></button>
                    <button data-bs-target="#carouselDarkVariant" data-bs-slide-to="2"  aria-label="Slide 2"></button>
                </div>

                <!-- Inner -->
                <div class="carousel-inner">
                    <!-- Single item -->
                    <div class="carousel-item active" data-bs-interval="10000">
                    <img  src="{{asset('./img/bgcover.jpg')}}" class="d-block w-100"  alt="..." />
                        <div class="carousel-caption">
                            <div  class="aboutUs">
                                    <h1 class="animated bounceInRight" style="font-size:5vw; color:rgba(14, 42, 3, 0.93)">OUR COMPANY</h1>
                                    <div  class="animated bounceInUp"tyle="animation-duration: 500ms;"style="animation-delay: 2s">
                                        <img  src="{{asset('./img/CompanyPic.jpg')}}" width="30%"></img>
                                    </div>
                                    <p class="animated bounceInRight" style="animation-delay: 3s;font-size:1.5vw;padding:15px">
                                    <span style="color:#1019B5;font-style:bold">GUD HOUSE BUILDERS AND DEVELOPMENT CORP</span> is composed of a group of engineers and designers specializing in international construction trade and familiar with the architectural styles of various countries. The company's main business is to introduce <span style="color:#1019B5 font-style:bold">INTERNATIONAL AND ADVANCED CONSTRUCTION</spn=ab> technology and produce <span style="color:#1019B5 font-style:bold">HIGH-QUALITY</span> houses suitable for the Philippines.
                                    </p>
                                    <button class="animated bounceInRight btn btn-success" style="animation-delay: 3s" type="button" style="margin-top:25px">READ MORE</button>
                                </div>
                        </div>
                    </div>
                    <!-- Single item -->
                    <div class="carousel-item"  data-bs-interval="10000">
                        <img  src="{{asset('./img/.jpg')}}" class="d-block w-100"  alt="..." />
                        <div class="carousel-caption d-none d-md-block">
                                <h1 class="animated bounceInRight" style="font-size:150px;">OUR MISSION</h1>
                                <p class="animated bounceInRight" style="animation-delay: 2s">
                                A company profile may take on many different styles and lengths. New start-ups might boast a company profile that runs only two pages long. More accomplished teams might include awards, certifications, and a large client portfolio in their own profiles. It all comes down to who the company is, what its mission is, and what it has already accomplished. A company profile may take on many different styles and lengths. New start-ups might boast a company profile that runs only two pages long. More accomplished teams might include awards, certifications, and a large client portfolio in their own profiles. It all comes down to who the company is, what its mission is, and what it has already accomplished.
                                </p>
                                <div class="animated bounceInRight" style="animation-delay: 2s">
                                        <button class="animated bounceInRight" style="animation-delay: 2s" type="button" class="btn btn-success btn-lg" style="margin-top:25px">KNOW MORE</button>
                                </div>
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
                                    <div class="animated bounceInRight" style="animation-delay: 2s">
                                        <button  type="button" class="btn btn-dark btn-lg" style="margin-top:25px">KNOW MORE</button>
                                    </div>
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