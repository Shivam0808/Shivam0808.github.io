
<style>
  ::placeholder{
    color: blue;   
    font-weight: bold;  
}
form.formsub {
  position: relative;
  margin: 200px auto 50px auto;
  width: 550px;
  height: 80px;
}

input.formsub {
  position: absolute;
  width: 100%;
  height: 100%;
  left: 0;
  border: #044f9e;
  border-radius: 20px;
  background: #fff;
  outline: 0;
  padding: 2em 1em 1em 1em;
  color: #2e5baa;
  font-size: 1em;
  -webkit-transition: background 0.35s ease-out;
  transition: background 0.35s ease-out;
}
input.formsub::-webkit-input-placeholder {
  color: #2e5baa;
  text-transform: capitalize;
}
input.formsub:-moz-placeholder {
  color: #2e5baa;
  text-transform: capitalize;
}
input.formsub::-moz-placeholder {
  color: #2e5baa;
  text-transform: capitalize;
}
input.formsub:-ms-input-placeholder {
  color: #2e5baa;
  text-transform: capitalize;
}
input.formsub:focus {
  background: #fff;
}
input.formsub:focus + label {
  -webkit-transform: translateY(-10px) scale(0.8);
          transform: translateY(-10px) scale(0.8);
  color: #6da6df;
}
input.formsub:focus + label + button {
  opacity: 1;
}

label.formsub {
  position: absolute;
  left: 1em;
  font-size: larger;
  top: 50%;
  margin-top: -12px;
  color: #2e5baa;
  text-transform: capitalize;
  -webkit-transform-origin: left center;
          transform-origin: left center;
  -webkit-transition: color 0.25s ease-out, -webkit-transform 0.25s ease-out;
  transition: color 0.25s ease-out, -webkit-transform 0.25s ease-out;
  transition: transform 0.25s ease-out, color 0.25s ease-out;
  transition: transform 0.25s ease-out, color 0.25s ease-out, -webkit-transform 0.25s ease-out;
}

button.formsub {
  position: absolute;
  right: 0;
  width: 120px;
  height: 100%;
  border: 0;
  border-radius: 5px;
  font-size: 1em;
  background:#6da6df;
  color: black;
  cursor: pointer;
  opacity: 0;
  outline: none;
  -webkit-transition: opacity 0.35s ease-out, width 0.5s ease-out, background 0.25s ease-out;
  transition: opacity 0.35s ease-out, width 0.5s ease-out, background 0.25s ease-out;
}

button.formsub.is-active {
  background: #5c94cd;
  color: #fff;
}

button.formsub.is-done {
  width: 100%;
  opacity: 1;
}

</style>
<footer style="position:relative;">

<link rel="stylesheet" type="text/css" href="css/footer2.css">

<!-- new additional footer -->
  <section class="e7 p-3 " >
  <div class="footerwrap">
  <div class="row">
  <!--
  <div class="col-6 mb-3 col-md-6 col-lg-4 col-xl-4">
    <h4>Support Center </h4>
    <p class="mt-3">Have a question about <b>TSAW <br></b>services for your property or asset?
    Or want to learn more about becoming a <b>TSAW</b> pilot? Visit our FAQ. </p>
    <p class="d-block d-lg-flex">
      <a href="" class="s1" >Pilot FAQ</a>
      <a href="" class="ml-2" >Customer FAQ</a>

    </p>
  </div>
  <div class="col-6 mb-3 col-md-6 col-lg-4 col-xl-4">
    <h4>Our Blog </h4>
    <p class="mt-3">Learn more about exclusive <b>TSAW <br></b>content, exclusive discounts, and industry news! </p>
    <p class="mt-3">
       <a href="" class="s2">Visit our Tsaw Blog</a>
    </p>
  </div>
  -->

  <!-- Instagram Feed -->
  <!-- <div class="col-12 col-md-6 col-lg-4 col-xl-4 ">
    <h6 class=""><b>@tsaw_drones</b> </h6>
    <div class="row mt-3" >
      <div class="col-4 p-0 col-md-4 col-lg-4 col-xl-4 colred">
        <img class="fimage" src="images/update/realState.jpg" >
    </div>
          <div class="col-4 p-0 col-md-4 col-lg-4 col-xl-4">
        <img class="fimage" src="images/update/umbrella.jpg" >
    </div>
        <div class="col-4 p-0 col-md-4 col-lg-4 col-xl-4">
        <img class="fimage" src="images/update/beach.jpg" >
    </div>
  </div>
   <div class="row mt-4" >
      <div class="col-4 p-0 col-md-4 col-lg-4 col-xl-4 colred" >
        <img class="fimage" src="images/update/river.jpg" >
    </div>
          <div class="col-4 p-0 col-md-4 col-lg-4 col-xl-4">
        <img class="fimage" src="images/update/dmount.jpg" >
    </div>
        <div class="col-4 p-0 col-md-4 col-lg-4 col-xl-4">
        <img class="fimage" src="images/update/icedrone.jpg" >
    </div>
  </div>
  </div>  -->

  <!-- Instagram Feed End -->
  </section>

<div class="lap" >
<div class="container">
 <div class="input-group mt-2">

 <form class="formsub">
  <input class="formsub" type="email" id="email" required/>
  <label class="formsub" for="email">Email Address</label>
  <button id="button" class="formsub">OK</button>
</form>

 <!-- <form method="POST" class="input-group" action="" id="newsletter">

     <input type="email" name="email" class="form-control subscribeemail"  placeholder="Subscribe to our newsletter">
    <button class="btn subscribeMe" name="subscribe"  type="submit">Subscribe</button>

</form> -->



</div>
   <p  id="speak">SPEAK WITH AN EXPERT</p>
   <div class="container s3">

<div class="form-wrap mt-2">
<form method="POST" action="" id="contact_form" target="frame">
<div class="form-group">

<input id="contactme_name" type="text" name="name" class="form-control" placeholder="Your Name" required="">
</div>

<div class="form-group">
<label></label>
 <input id="contactme_email" type="email" name="email" class="form-control" placeholder="@email.com" required="">
</div>


<div class="form-group">
<label></label>
<input id="contactme_phone" type="tel" name="phone" class="form-control" placeholder="Phone Number" required="">
</div>



<div class="form-group">
<label> </label>
<textarea placeholder="Comments"class="form-control" name="comments" rows="3"></textarea>
</div>
<button id="submit"  type="submit" value="Submit" name="submit" class="contactme_submit_form btn submit-btn w-90 ">Let's
Talk!</button>
</form>
</div>
</div>

  </div>
</div>

<img src="images/desklap.jpg" class="s4"  alt="">


<!-- footer starting -->


<footer>
<!-- <div class="ga">
<img class="s5" src="images/startup.png" alt="Drone mobile">
</div> -->
  <div class="container">

    <div class="row z1">
      <div class="col-md-3" >
        <ul class="footer-image">
          <img class="club_logo" src="website_elements/club.svg" alt="" >
          <img class="drone_logo" src="website_elements/dronehuman.png" alt=""  >
      <img class="mines_logo" src="website_elements/mining.png" alt="">

      </ul>

      </div>
      <div class="col-md-3">
        <ul class="footer-company">
          <li class=" m1" style="text-align: left;">Company</li>
          <li class="footcom" style="text-align: left;"><a class="f2" href="about.php">About Us</a></li>
          <li class="footcom" style="text-align: left;"><a class="f2" href="area-manager/managerLogin.php">Area Manager</a></li>
          <li class="footcom" style="text-align: left;"><a class="f2" href="#speak">Contact Us</a></li>
          <li class="footcom" style="text-align: left;"><a class="f2" target="_blank" href="http://saytrees.org">Clients</a></li>
          <li class="footcom" style="text-align: left;"><a class="f2" href="#">Partners</a></li>
          <li class="footcom" style="text-align: left;"><a class="f2" href="about.php">Our Team</a></li>
          <li class="footcom" style="text-align: left;"><a class="f2" href="career.php">Careers</a></li>
          <li class="footcom" style="text-align: left;"><a class="f2" href="sitemap.php">Sitemap</a></li>

        </ul>
      </div>
      <div class="col-md-3">
        <ul class="footer-products">
          <li class="m2" style="text-align: left;">Products</li>
          <li class="footpro" style="text-align: left;"><a href="rental.php">Rent a Drone</a></li>
          <li class="footpro"style="text-align: left;" ><a href="agriculture.php">Agricultural Monitoring</a></li>
          <li class="footpro m3" style="text-align: left;"><a href="agriculture.php">Agricultural Mechanisation</a></li>

          <!-- <li class="footpro" style="text-align: left;"><a href="agriculture.php">Garud</a></li>
          <li class="footpro" style="text-align: left;"><a href="security.php">Jatayu</a></li>
          <li class="footpro" style="text-align: left;"><a href="index.php">Drone port</a></li> -->
        </ul>
      </div>
      <div class="col-md-3" >
        <ul class="footer-locations">
          <li class="footloc1" style="text-align: left;">Locations</li>
          <li class="footloc2" style="text-align: left;"><b>Regd Office</b></li>
          <li class="footloc3" style="text-align: left;">334/21, west of Rasara Kothi, Garul Par, Deoria, U.P. - 274001</li>

          <li class="footloc4" style="text-align: left;"><b>Corporate Office</b></li>
          <li class="footloc5" style="text-align: left;">D 232, Sector 105, Noida, U.P. - 201304</li>

          <li class="footloc6" style="text-align: left;">For Sales:</li>
          <li class="footloc7" style="text-align: left;"><a  href="mailto:sales@tsaw.tech">sales@tsaw.tech</a></li>

          <li class="footloc8" style="text-align: left;">For Career:</li>
          <li style="text-align: left;"><a href="mailto:hr@tsaw.tech">hr@tsaw.tech</a></li>
        </ul>
      </div>
    </div>
    <div class="row z2">

      <div class="col-md-3 t1">
        <a target="_blank" href="https://www.facebook.com/TSAWIndia"><img class="zamin" src="website_elements/fb.png" alt="" width="150px" height="50px;"></a>
      </div>
      <div class="col-md-3 t2">
        <a target="_blank" href="https://www.instagram.com/tsaw_technology/"><img class="zamin" src="website_elements/insta.png" alt="" width="150px" height="50px;"></a>
      </div>
      <div class="col-md-3 t3">
        <a target="_blank" href="http://linkedin.com/company/28728847"><img class="zamin" src="website_elements/linkedin.png" alt="" width="150px" height="50px;"></a>
      </div>
    </div>
  </div>
  <div class="container-fluid mb-3 mt-3">
    <div class="row sa">
      <div class="re" >
        &copy; 2020. Tiwari Space and Aero Works Pvt. Ltd. All Rights reserved. | <a href="#" class="ma">Privacy Policy</a>
      </div>
    </div>
  </div>

<script>
  var email = document.getElementById("email"),
  button = document.getElementById("button");

function validateEmail(email) {
  var ex = /^([\w-]+(?:\.[\w-]+)*)@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$/i;
  return ex.test(email);
}

email.addEventListener("keydown", function () {
  var email = this.value;

  if (validateEmail(email)) {
    button.classList.add("is-active");
  }
});

button.addEventListener("click", function (e) {
  e.preventDefault();
  this.classList.add("is-done", "is-active");

  setTimeout(function () {
    button.innerHTML = "Thanks! Check Your Email.";
  }, 500);
});

</script>

</footer>
