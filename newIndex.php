<?php session_start() ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>

  <title>
    TSAW Home
  </title>
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="TSAW:Tailoring Drone Solutions according to your Custom Needs using Drone Technology and Drone Port concept  " />
  <meta name="keywords" content="TSAW,tsaw,tsaw drones ,jatayu,,maruthi,garud,tsaw security, tsaw agriculture,drone agriculture,drone security,aerial surveying,Aerial surveying,drone survey,tsaw covid,covid-19,drone covid,tsaw career,drone broadcasting,night vision,live aerial time ,aerial,arial,arial survey,automated,automated drones  " />
  <link rel="icon" href="images/Asset 48.svg">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/orderForm.css">
  <link rel="stylesheet" href="css/newStyle.css">
  <link rel="stylesheet" href="css/newIndex.css">
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
  <script src="js/orderForm.js"></script>
</head>
<style>

.container1 {
  position: relative;
  margin-top: 50px;
  height:120px;
  width:180px;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  height:120px;
  width:180px;
  background: rgba(0, 0, 0, 0);
  transition: background 0.5s ease;
}

.container1:hover .overlay {
  display: block;
  background: rgba(0, 0, 0, .8);
}

img.imgb {
  position: absolute;
  height:120px;
  width:180px;
  left: 0;
}

.container1:hover .title1{
  opacity: 0;
}

.title1 {
  position: absolute;
  width:180px;
  left: 0;
  top: 120px;
  font-weight: 400;
  font-size: 20px;
  text-align: center;
  text-transform: uppercase;
  color: #2e5baa;
  z-index: 1;
  transition: opacity 1;
}

.title1:hover{
  opacity: 0;
}

.button1 {
  position: absolute;
  width: 180px;
  left:0;
  top: 180px;
  font-size: 12px;
  text-align: center;
  opacity: 0;
  transition: opacity .35s ease;
  transition: top .5s ease;
}

.button1 {
  top: 90px;
}

.button1 a {
  width: 100px;
  padding: 12px 48px;
  text-align: center;
  color:#ffffff;
  border: solid 2px white;
  z-index: 1;
}

.container1:hover .button1 {
  opacity: 1;
}

.h2k{
color: #2e5baa; 
font-weight:900; 
font-size: 30px; 
margin-top: 150px; 
margin-left: 80px;
}

</style>
<script type="text/javascript">
  $(function() {
    $("#datepicker").datepicker();
  });
  function changeSection(val){
    if (val==1) {
      document.getElementById('wrapper1').style.display='block';
      document.getElementById('wrapper').style.display='none';
      document.getElementById('wrapper2').style.display='none';
     // document.getElementById('section1').style.display='block';
      document.body.style='overflow-y:inherit;';
    }
    if (val==2) {
      document.getElementById('wrapper2').style.display='block';
      document.getElementById('wrapper').style.display='none';
      document.getElementById('wrapper1').style.display='none';
    //  document.getElementById('section1').style.display='block';
      document.body.style='overflow-y:inherit;';
    }
  }
  function missionPreview() {
    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("test123").innerHTML = this.responseText;
      }
    };
    xhttp.open("POST", "temp123.php", true);
    xhttp.send();
  }

  function sendOtp() {
    $('#verify-btn').bind('click', function(e) {
      e.preventDefault();
      $.ajax({
        type: 'post',
        url: 'otp.php', //otp file here
        data: 'number=' + document.getElementById('mobile').value,
        success: function() {
          displayDetail('2');
        }
      });
    });
  }

  function verifyOtp() {
    $('#verify-btn2').bind('click', function(e) {
      e.preventDefault();
      $.ajax({
        type: 'post',
        url: 'otp.php', //verify otp file here
        data: 'number=' + document.getElementById('otp1').value,
        success: function() {
          //missionPreview();
          // alert('OTP was sent.Please verify to proceed');
          document.getElementById('checkPrice').classList.remove('disabled');

        }
      });
    });
  }

  function checkPrice(event) {
    event.preventDefault();
    $.ajax({
      //debugger removed from here.
      type: 'post',
      url: 'priceCalculator.php', //verify otp file here
      data: $('form').serialize(),
      success: function() {
        missionPreview();

        //alert(data);

        // document.getElementById("test").innerHTML=data;

      }
    });
  }

  $(document).ready(function() {
    $('#multipleFeatures').select2({
      placeholder: "Features you might need?"
    });
  });

  window.onload = function() {
    if ($(window).width() < 992) {
      // window.location = "mhome.php"
    }
  }
</script>


<?php include 'header.php'; ?>

<body style="overflow-y:hidden;">


   <!-- chatbot ui -->
  <!--  <div id='botDiv' style='height: 50px; margin-left: 73%;  position: fixed; bottom: 0; z-index: 1000; background-color: #fff'>
      <div id='botTitleBar' style='height: 50px; width: 400px; position:fixed; cursor: pointer;'></div><iframe width='400px' height='600px' src='https://d3nkn6vtyjoxmk.cloudfront.net/'></iframe>
    </div>
    <script src="chat.js"></script>-->
    <!-- chat bot ui> -->

<div id="home1">
  <div  id="wrapper">
        <div  style="padding:10px;">
            <img class="center1" style=" height: 100px;" src="images/rent_image/Asset 241px.svg"><br>
            <br>
            <p style="margin-top:5px;"  class='text-center'>
            <font style="color: #2e5baa; font-weight: 600; font-size: 24px; text-align: center;">Drones are no longer an expensive commodity to hire</font>  <br>
          <font style="color: #2e5baa; font-weight: 400; font-size: 18px; text-align: center;">Hire a Drone Service in your town at much affordable price </font> <br>
            <p class="know"> Know More</p>
            </p>
            <div class="divcen">
                <div class="greydiv">
                &emsp;&emsp;  Get your data in    &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;    Get your data in
                </div>
                <div class=blackdiv>
                &emsp;&emsp; final processed output  &emsp;&emsp;&emsp;  final processed output
               </div>
               </div>
              <div class="cenbut" class="btn-group btn-group-lg" role="group">
                <a class='butt1' onclick="changeSection('1');" style="color: #2e5baa;">Rent a Drone</a>
                <a class='butt2' onclick="changeSection('2');" style="color: #ffffff;">Avail Service</a>
        
            </div>
            
  
       
        </div>
       
    <div class="background">

      <img src="images/rent_image/Asset 260px.svg" class="img1" alt="background" />
    </div>

  </div>
  <div style="display:none;" id="wrapper1">
 

          <div class="home">
           <!-- <img style=" height: 50px; margin-top: 50px;" src="images/rent_image/Asset 171px.svg"> -->
           <!-- <img style=" height: 50px;margin-left:250px; margin-top: 50px;" src="images/rent_image/Asset 171px.svg">  -->
            <br>
           <img class="" src="images/rent_image/Asset 161px.svg" style=" height: 80px; margin-top: -20px; margin-left: 120px;"> 
                <!-- <img style=" height: 120px;margin-top: 20px;margin-right: 10px;float:right;" src="images/rent_image/Asset 241px.svg" ><br> -->
                <p class="text-center " style="margin-top: 20px; margin-right: 200px; color: #2e5baa; font-weight: 600; font-size: 22px;"> Your smart aerial surveillance & shooting partner</p>
             <p class="text-center" style="color: #2e5baa; margin-right: 200px; font-size: 22px; font-weight: 300;" >Bargain free drone service at hourly rates</p>
           </div>
 

      
    <div class="background">

      <img src="images/rent_image/Asset 260px.svg" class="img2" alt="background" />
    </div>

   </div>
  </div>


    <div style="display:none;" id="wrapper2">
    

        <div style="float:left;">
        <h2 class="h2k">Sectors you are into</h2>
        </div>
        <div style="float:right; margin-right:15%;margin-top:-65px;">
        <table style="height:350px;" class="table table-borderless">
          <tbody>
            <tr>
              <td scope="row">
              <div class="container1">
              <img src="images/update/tower.jpg" class="imgb">
              <p class="title1">INDUSTRIAL</p>
              <div class="overlay"></div>
              <div class="button1"><a href="#">READ MORE</a></div>
              </div> 

              <br>

            </td>
              <td> 
              <div class="container1">
              <img src="images/update/thermal.jpg" class="imgb">
              <p class="title1">ENERGY AND UTILITES</p>
              <div class="overlay"></div>
              <div class="button1"><a href="#"> READ MORE </a></div>
              </div>
 
              <br>
   
              </td>
              <td>
              <div class="container1">
              <img src="images/update/power.jpg" class="imgb">
              <p class="title1">AGRICULTURE</p>
              <div class="overlay"></div>
              <div class="button1"><a href="sub-sectors/Agriculture.php">READ MORE </a></div>
              </div>

              <br>

              </td>
              <td>
              <div class="container1">
              <img src="images/update/beach.jpg" class="imgb">
              <p class="title1">CONSTRUCTION</p>
              <div class="overlay"></div>
              <div class="button1"><a href="#">READ MORE </a></div>
              </div>

              <br>
 
              </td>
            </tr>
            <tr>
              <td >
              <div class="container1">
              <img src="images/update/colony.jpg" class="imgb">
              <p class="title1">EMERGENCY SERVICES</p>
              <div class="overlay"></div>
              <div class="button1"><a href="#">READ MORE </a></div>
              </div>

              <br>
              </td>
              <td>
              <div class="container1">
              <img src="images/update/realState.jpg" class="imgb">
              <p class="title1">REAL ESTATE</p>
              <div class="overlay"></div>
              <div class="button1"><a href="realEstate.php"> READ MORE </a></div>
              </div>
           
              <br>
        
              </td>
              <td>
              <div class="container1">
              <img src="images/update/umbrella.jpg" class="imgb">
              <p class="title1">HOSPITALITY AND <br> TOURISM</p>
              <div class="overlay"></div>
              <div class="button1"><a href="#">READ MORE</a></div>
              </div>
           
              <br>
     
              </td>
              <td>
              <div class="container1">
              <img src="images/update/river.jpg" class="imgb">
              <p class="title1">OTHERS</p>
              <div class="overlay"></div>
              <div class="button1"><a href="#"> READ MORE </a></div>
              </div>
            
              <br>
    
              </td>
            </tr>
          </tbody>
        </table>
        </div>
        <div class="background">
        <img src="images/rent_image/Asset 260px.svg" class="img3" alt="background" />
           </div>

</div>

<section  id="section1">
 <div class="section2" style="padding-top: 600px; ">
    <div class="part1">
        <h5 class="text-center1">Country's largest Drone Aggregator Platform with most advanced technology & features</h5>
        <hr>
         <div class="container">
             <div class="row mx-5">
                 <div class="box p-2 pt-4   col-12 col-md-4 col-lg-4 col-xl-4">
                     <div class="text-center ">
                        <img class="iimg" src="images/update/1_BookProfessional.png" alt="">
                    <p class="p1">
                         <a style="color: #2e5baa;">
                              Book Professional drone service
                           </a>
                     </p>
                <h6 class="p2">
                   by features what you need
              </h6>
               </div>
             </div>
             <div class="box p-2 pt-4 col-12 col-md-4 col-lg-4 col-xl-4">
                <div class="text-center ">

                    <img class="iimg" src="images/update/2_We-Fly.png" alt="">

                <p class="p1">
                <a style="color: #2e5baa;">
                    We do the flying
                </a>
                </p>
                <h6 class="p2">
                     Our professional pilots <br> can get the best for you
                </h6>
                </div>
                </div>
                <div class="box p-2 pt-4 col-12 col-md-4 col-lg-4 col-xl-4">
                <div class="text-center ">

                    <img class="iimg" src="images/update/3_ViewShare.png" alt="">

                <p class="p1">
                <a style="color: #2e5baa;">
                    Make better, faster decision
                </a>
                </p>
                <h6 class="p2">
                    get the best data for various <br> aerial needs and events
                </h6>
            </div>
        </div>
    </div></div>
   
    <div style="background-color: #f0f2f5" class="part1">
    <h4 class="text-center" style="font-size: 30px; color: #2e5baa; letter-spacing: 0.5px; font-weight: 900; padding-top: 20px; ">Why Us? </h4>
    <div class="inner3">
        <div style="width: 860px; margin:auto;" class="row mt-3 small_mt">
            <div class="py-3 col-12 col-md-4 col-xl-4  text-center">
                <h4 class="c2 ">500 </h4>
                <p style="display: inline; margin-left: 30px; position: absolute; top: 1em; color: #2e5baa; font-weight: 900;"> +</p>
                <p class="mt-2 cb"><b> Professional highly skilled <br> pilots ready to serve<br> your ariel needs</b></p>

            </div>
            <div class="py-3 col-12 col-md-4 col-xl-4  text-center">
                <h4 class="c2">700</h4>
                <p style="display: inline; margin-left: 30px; position: absolute;  top: 1em; color: #2e5baa; font-weight: 900;"> +</p>
                <p class="mt-2 cb"><b> Various automated Drones<br> all over the country <br>ready to be deployed</b></p>

            </div>
            <div class="py-3 col-12 col-md-4 col-xl-4 text-center">
                <h4 class="c2">1000</h4>
                <p style="display: inline; margin-left: 35px; position: absolute; top: 1em; color: #2e5baa; font-weight: 900;"> +</p>
                <p class="mt-2 cb"><b> Clients served over various <br>  time interval <br> by our operators</b></p>

            </div>  
        </div>
    </div>
</div>


    <div class="part1">
        <p >
                <h3 class="text-center" style="color: black; font-size: 30px; font-weight:600; word-spacing:1px;">Drone Rental Services</h3>      
                <h3 class="text-center" style="color:#2e5baa; font-size: 30px; font-weight:500; word-spacing:1px;">for all industries</h3>    
        </p>
        <div class="d-flex justify-content-center mt-5" style="margin: 3em;">
     <div class="col-lg-2">
        <div class="container ">
           <img src="images/rent_image/Asset 151px.svg" width="74%" style="margin-bottom: 10px;">
           <p class="bhead mt-3">Standard rates </p>
        </div>
     </div>
     <div class="col-lg-2">
        <div class="container">
           <img src="images/rent_image/Asset 131px.svg" width="74%" style="margin-bottom: 15.5px;">
           <p class="bhead mt-3">Affordable Pricing </p>
        </div>
     </div>
     <div class="col-lg-2">
        <div class="container">
           <img src="images/rent_image/Asset 91px.svg" width="74%" style="margin-bottom: 27px;">
           <p class="bhead mt-3">Professional pilots </p>
        </div>
     </div>
     <div class="col-lg-2">
        <div class="container">
           <img src="images/rent_image/Asset 1px.svg" width="80%" style="margin-bottom: 28px;">
           <p class="bhead mt-3">Hassle-free Payment </p>
        </div>
     </div>
  </div>
    </div>
 </div>


        </div>


<div style=" background-image: url(images/update/dashdrone.jpg); min-height:30vw; background-size: cover;">
</div>
<div class="part2">
    <div class="row" style="margin: 100px;">
    <div class="col-12 col-md-6 col-lg-5 col-xl-4 text-center">
        <img class="shift_left_img" src="images/update/Asset 11px.svg" width="300">
    </div>
    <div class="text_content col-12 col-md-6 col-lg-7 col-xl-8">
        <h4 class="text-left mb-3" style="color: #2e5baa; font-weight:700;">Get Live stream of your property from anywhere</h4>
        <p class="text-left content1"> Whether you're a global enterprise with assets around the world or a real estate
        <span id="book_hide">
        agent with a property that must be seen from the sky, TSAW has the power, scale, and flexibility to take your buissness to the new heights.
        Easily order individual drone flights from our intiative Client Dashboard, or connect with our API to seemlessly
        integrate drone data into your workflow at scale.</span>
        <button id="book_btn" class="d-lg-none d-md-none" style="border: none;"><i class="fa fa-expand" aria-hidden="true"></i></button> </p>
        <div class="text-left mt-3">
        <a href="#o-form" class="w2"><button class=" btn btn-primary w1">Book Now</button></a>
        </div>
    </div>
    </div>
    
</div>
<div class="part2">
<div class="row" style="margin: 100px;">
  <div class="col-12 col-md-6 col-lg-5 col-xl-4 text-center">
    <img class="shift_left_img" src="images/update/handlap.jpg" width="300">
  </div>
  <div class="text_content col-12 col-lg-7 col-md-6 col-xl-8">
    <h4 class="text-left mb-3" style="color: #2e5baa; font-weight:700;">Our Pilot Network</h4>
    <p class="text-left content1"> The TSAW Pilot App, available for Android, streamlines Pilots’
workflows so they can spend more time flying. Never miss a Mission with
Push notifications and mobile access to scheduling, shot lists, and more.
Our app integrates with the DJI SDK enabling DroneBase Pilots to find
and fly Missions without switching between apps.
      <button id="book_btn" class="d-lg-none d-md-none" style="border: none;"><i class="fa fa-expand" aria-hidden="true"></i></button> </p>
      <div class="text-left mt-3">
     <a href="#o-form" class="w2"><button class=" btn btn-primary w1">Book Now</button></a>
      </div>
  </div>
</div>
</div>
<div class="part2">
<div class="row" style="margin: 100px;">
  <div class="col-12 col-md-6 col-lg-5 col-xl-4 text-center">
    <img class="shift_left_img" src="images/update/icedrone.jpg" width="300">
  </div>
  <div class="text_content col-12 col-md-6 col-lg-7 col-xl-8">
    <h4 class="text-left mb-3" style="color: #2e5baa; font-weight:700;">Manage your Drone Flights Quckly and Easily</h4>
    <p class="text-left content1">Whether you’re a global enterprise with assets around the world or a
real estate agent with a property that must be seen from the sky,
TSAW has the power, scale, and flexibility to take your business to new
heights. Easily order individual drone flights from our intuitive Client
Dashboard, or connect with our API to seamlessly integrate drone data
into your workflow at scale.</p>
      <div class="text-left mt-3">
     <a href="#o-form" class="w2"><button class=" btn btn-primary w1 ">Book Now</button></a>
      </div>
  </div>
</div>
</div>

<div style="text-align: center; padding-right: 100px; padding-bottom: 100px; padding-left: 100px;">
    <a style="color: #2e5baa; font-size: 25px; font-weight:600;" href="">Read More</a> 
</div>
<section class="e7 p-3 " style="background-color: #f3f3f5;">
  <div class="threediv">
  <div class="row">
  <div class="col-6 mb-3 col-md-6 col-lg-4 col-xl-4" style="padding-left: 50px; padding-top: 30px; padding-right: 30px;">
    <h4>Support Center </h4>
    <p class="mt-3">Have a question about <b>TSAW <br></b>services for your property or asset?<br>
       Or want to learn more about becoming a <br> <b>TSAW</b> pilot? <br> Visit our FAQ. </p>
    <p class="d-block d-lg-flex" style="display: inline;">
      <a href="" style="color: #2e5baa !important; ">Pilot FAQ</a>
      <a href="" class="ml-2" style="color: #2e5baa !important; ">Customer FAQ</a>
 
    </p>
  </div>
  <div class="col-6 mb-3 col-md-6 col-lg-4 col-xl-4" style="padding-left: -30px; padding-top: 30px; padding-right: 30px;">
    <h4>Our Blog </h4>
    <p class="mt-3">Learn more about exclusive <b>TSAW <br></b>content, exclusive discounts, and industry news! </p>
    <p class="mt-3">
       <a href=""  style="color: #2e5baa !important; ">Visit our Tsaw Blog</a>
    </p>
  </div>

  <!-- Instagram Feed -->
 

  <div class="col-6 mb-3 col-md-6 col-lg-4 col-xl-4" style="padding-left: -30px; padding-top: 30px; padding-right: 30px;">
    <h6 class=""><b>@tsaw_drones</b> </h6>
    <div class="row mt-3" style="margin-right: 50px;">
      <div class="col-4 p-0 col-md-4 col-lg-4 col-xl-4" >
        <img class="fimage" src="images/update/realState.jpg" >
    </div>
          <div class="col-4 p-0 col-md-4 col-lg-4 col-xl-4">
        <img class="fimage" src="images/update/umbrella.jpg" >
    </div>
        <div class="col-4 p-0 col-md-4 col-lg-4 col-xl-4">
        <img class="fimage" src="images/update/beach.jpg" >
    </div>
  </div>
   <div class="row mt-4" style="margin-right: 50px;">
      <div class="col-4 p-0 col-md-4 col-lg-4 col-xl-4">
        <img class="fimage" src="images/update/river.jpg" >
    </div>
          <div class="col-4 p-0 col-md-4 col-lg-4 col-xl-4">
        <img class="fimage" src="images/update/dmount.jpg" >
    </div>
        <div class="col-4 p-0 col-md-4 col-lg-4 col-xl-4">
        <img class="fimage" src="images/update/icedrone.jpg">
    </div>
  </div>
  </di  v> 

  
  </div>
  </div>

  <!-- Instagram Feed End -->
  </section>
</section>



<!-- countup -->
<script src="js/jquery.waypoints.min.js"></script>
      <script src="js/jquery.countup.js"></script>
      <script>
         $('.c2').countUp();
      </script>

<!-- scrolling  -->
<script>
$(document).ready(function(){
  $(".w2").on('click', function(event) {
    if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
        window.location.hash = hash;
      });
    } 
  });
});
</script>
</div>


       
        <?php include 'footer2.php'; ?>-->
        <script src="newIndex.js"></script>
</body>

<!-- countup -->
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.countup.js"></script>
<script>
  $('.c2').countUp();
</script>

<!-- scrolling  -->
<script>
  $(document).ready(function() {
    $(".w2").on('click', function(event) {
      if (this.hash !== "") {
        event.preventDefault();
        var hash = this.hash;
        $('html, body').animate({
          scrollTop: $(hash).offset().top
        }, 800, function() {
          window.location.hash = hash;
        });
      }
    });
  });
</script>