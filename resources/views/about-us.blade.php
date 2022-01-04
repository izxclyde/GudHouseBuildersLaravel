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

<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
 

  <main class="px-3 ">
      <center>
            <div  class="aboutUs">
                                                <h1 class="animated bounceInRight" style="font-size:5vw; color:rgba(14, 42, 3, 0.93)">OUR COMPANY</h1>
                                                <div  class="animated bounceInUp"tyle="animation-duration: 500ms;"style="animation-delay: 2s">
                                                <img  src="{{asset('./img/CompanyPic.jpg')}}" style="height:50vh;width:70wh; border-radius: 25px; " ></img>
                                                </div>
                                                <p class="animated bounceInRight" style="animation-delay: 3s;font-size:1.5vw;padding:15px">
                                                <span style="color:#1019B5;font-style:bold">GUD HOUSE BUILDERS AND DEVELOPMENT CORP</span> is composed of a group of engineers and designers specializing in international construction trade and familiar with the architectural styles of various countries. The company's main business is to introduce <span style="color:#1019B5 font-style:bold">INTERNATIONAL AND ADVANCED CONSTRUCTION</spn=ab> technology and produce <span style="color:#1019B5 font-style:bold">HIGH-QUALITY</span> houses suitable for the Philippines.
                                                </p>
                                                <input type="button" class="animated bounceInRight btn btn-success" style="animation-delay: 3s" type="button" style="margin-top:25px" onclick="tglOurCompany()"  id="btnreadmore" value="READ MORE"/> 
                                            
                </div>
        </center>
    </main>    
  </div>

    
<div  id="ourCompany" style="display:none"  style="margin-top;2%"> 
    <div class="row w-100" >
                    <div class="col-md-3" >
                        <h1 style="padding-left:2%;"><strong>Company Overview</strong></h1>
                        </br></br>
                        <h3 style="padding-left:2%;">
                        
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
                   
                        </br></br>
                        <h3 style="padding-left:2%;">
                            <h1><strong>20 years of experience in steel frame building design.</strong></h1>
                            <div class="animated bounceInRight">
                                <img  src="{{asset('./img/Team.PNG')}}" class="d-block w-100"  style="height:20vh;width:70wh" alt="..." />
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
        <div class="row w-100" >
            <div class="col-md-6" >
                <h1 style="padding-left:2%;"><strong>Global Network</strong></h1>
                <div class="animated bounceInUp" style="animation-delay: 1s">
                    <img  src="{{asset('./img/GlobalNetwork.PNG')}}" class="d-block w-100"  style="height:70vh;width:50wh" alt="..." />
                </div>
            </div>
  
            <div class="col-md-6">
                <h1><strong>Advanced production equipment</strong></h1>
                <div class="row w-100" >
                    
                        <table class="w-100"style="height:80vh;width:100wh">
                            <tr>
                                <td>
                                      <img  src="{{asset('./img/DryerGroup.PNG')}}"  style="height:20vh;width:15vw" alt="..." />
                                      <h6></br>Fully Automatic Dryer Group</h6>
                                </td>
                                <td>
                                    <img  src="{{asset('./img/PlatePipeline.PNG')}}" c style="height:20vh;width:15vw" alt="..." />
                                    <h6></br>Plate Forming Pipeline</h6>
                                </td>
                                <td>
                                    <img  src="{{asset('./img/Vessel.PNG')}}" style="height:20vh;width:15vw" alt="..." />
                                    <h6> </br> Autoclave Vessel </h6>
                                </td>
                            </tr>
                            <tr>
                                <td rowspan="2" colspan="2">
                                    <img  src="{{asset('./img/Modern.PNG')}}"  style="height:50vh;width:32vw" alt="..." />
                                     <h6> </br> Modern Production Line </h6>
                                 </td>
                                <td>
                                    <img  src="{{asset('./img/SprayPainting.PNG')}}"   style="height:20vh;width:15vw" alt="..." />
                                    <h6> </br>         Spray Painting features: bright colors, </br> high saturation</h6>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <img  src="{{asset('./img/RollerCoating.PNG')}}"   style="height:20vh;width:15vw" alt="..." />
                                    <h6> </br> Roller Coating features: Strong adhesive, fast   </h6>
                                </td>
                            </tr>
                        </table>
                    
                    
                    
      
                </div>
            </div>        
                    
        </div>


        <div class="row w-100" style="paddimng:2vw">
            <div class="col-md-12" >
                <center>
                <h1 style="font-size:2vw;"><strong>Manufacturing Facility</strong></h1>
                <h2 style="padding-left:2%;"><strong>Total control over the quality standards and materials</strong></h2>
                
                <div class="animated bounceInUp" style="animation-delay: 1s">
                <p style="padding:2px;">
                PEB Projects has established a high quality manufacturing facility to produce our unique ULTRAFRAME system and other products that are unique to the PEB Projects Building System. </br> </br> 

                We have established this facility so we have total control over the quality including the raw material selection to ensure that our high quality standards are consistently maintained. </br> </br> 

                Each product is designed and manufactured according to established manufacturing and quality procedures.</br> </br> 

                The modern manufacturing facility has been specially designed and developed so to meet the high quality standards and manufacturing requirements of the PEB Projects building system.</br> </br> 

                </p>
                    <img  src="{{asset('./img/Mfacility.PNG')}}"   style="height:70vh;width:50wh" alt="..." />
                </div>
                </center>
            </div>
  
        </div>
            
<div>

@stop

<script>
 var btnName= 'READ MORE';
function tglOurCompany() {
  var x = document.getElementById("ourCompany");
  if (x.style.display === "none") {
    x.style.display = "block";
    window.scrollTo(0, 500);

    document.getElementById("btnreadmore").value="HIDE"

    
    
  } else {
    x.style.display = "none";
    document.getElementById("btnreadmore").value="READ MORE"
  }
}


</script>