@extends('nav_bar')

@section('content')

	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
    <style>
        .aboutUs{
        background:rgba(255,255,255,0.4);
        padding:15px;
        border: 2px;
        border-radius: 25px; 
        width:100%;
}
    </style>
 <!-- Carousel wrapper -->
 <div class="row">
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
                                    <button class="animated bounceInRight btn btn-success" style="animation-delay: 3s" type="button" style="margin-top:25px" onclick="tglOurCompany()">READ MORE</button>
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
</div>
<div  id="ourCompany" style="display:none">
    <div class="row" style="padding:2vw">
            <div class="col-md-3">
                <h1><strong>Company Overview</strong></h1>
                </br></br>
                <h3>
                <ul>
                <li>Over 20 years experience</li>
                <li>Complete building design</li>
                <li>Total project supply</li>
                <li>Construction management</li>
                <li>Unique “Ultraframe”® design</li>
                <li>Own manufacturing facility</li>
                <li>Design capabilities</li>
                <li>Rapid construction</li>
                <li>Total turnkey solution</li>
                <li>International Standards</li>
                <li>Multi-cultural team</li>
                </ul>
                </h3>
                    
            
            </div>
            <div class="col-md-3">
                <div class="animated bounceInUp">
                  <img  src="{{asset('./img/UltraFrame.PNG')}}" class="d-block w-100"  style="height:30vh;width:100wh" alt="..." />
                 </div>
                <p style="padding-top:15px">
                We also offer a broad range of products made from branded materials like <b>ZINCALUME®</b> and Clean <b>COLORBOND®</b> steel, <b>RHEINZINK®</b> titanium-zinc, <b>ARUBIS ®</b> copper, NTK stainless steel, PRINTECH printed steel, <b>CALCIUM SILICATE</b> reinforced products.
                </p>                   
            </div>
            <div class="col-md-6">
                <h1><strong>20 years of experience in steel frame building design.</strong></h1>
                <div class="animated bounceInRight">
                <img  src="{{asset('./img/Team.PNG')}}" class="d-block w-100"  style="height:20vh;width:100wh" alt="..." />
                </div>
                <div>
                    <p>
                    We have had 20 years experience in steel building design and manufacture. We provide Complete Building Design,
                    Project Supply, Construction Management. Our Objective is to deliver High Quality Economical Solutions. Our 
                    Design Team are experienced in Delivering Rapid Construction Solutions. 
                    </br></br>
                    Our <strong>ULTRAFRAME® </strong> building system is unique and adaptable to a complete range of designs. We control the quality
                    because we do our own manufacture. We can provide Total Project Supply Management and Project Construction
                    Management. We also provide the Complete Turn Key Solution. 
                    </br></br>
                    With offices in <b>China</b>, <b>Australia</b> and <b>Singapore</b>, we can serve the entire Pacific and nearby areas.
                    </br></br>
                    We become your partner in delivering cost effective solutions.
                    </p>
                </div>
            </div>
    </div>
<div>
 

@stop

<script>
function tglOurCompany() {
  var x = document.getElementById("ourCompany");
  if (x.style.display === "none") {
    x.style.display = "block";
    window.scrollTo(0, 500);
    
    
  } else {
    x.style.display = "none";
  }
}

</script>