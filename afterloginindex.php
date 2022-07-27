<?php
session_start();
$_SESSION;
include("connection.php");
include("functions.php");
$user_data = check_login($con);
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale =1.0">
    <title>PlusDukan.com</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel = "icon" href = "Images/Title logo.jpg" type = "image/x-icon">
    <style type="text/css">html{scroll-behavior: smooth;}</style>
    <title></title>
</head>
<body>             
<div class="header">
        
        
        <div class="container">
        <div class="navbar">
           <div class="logo">
               <img src="Images/logo.jpeg" width="125px">
           </div>
           <nav>
           <ul id="MenuItems">
               <li><b><i>Hello, <?php echo $user_data['user_name']; ?></b></i></li>
               <li><a href="">Home</a></li>
               <li><a href="">Products</a></li>
               <li><a href="About.html">About</a></li>
               <li><a href="contact form.php">Contact</a></li>
               <li><a href="">Account</a></li>
               <li><a href="contactfp.php">Forgot the Password</a></li>
               <li><a href="logout.php">Logout</a></li>

               </ul>
           </nav>
            <a href=""><img src="RedStore_Img/images/cart.png" height="30px" width="30px" class="cart"></a>
            <img src="RedStore_Img/images/menu.png" class="menu-icon" onclick="menutoggle()">
        </div>
            <div class="row">
            <div class="col-2">
                <h1>Give Your Clothing <br>A New Style!</h1>
                <p>Plus size Clothing at Affordable prices!!</p>
                <a href="#section2" class="btn">Explore Now &#8594;</a>
                </div> 
                 <div class="col-2">
                  <img src="Images/shirts5.jpeg" >
                </div>
            </div>
        </div>
        </div> 

        <!-------- Linen Material Products -------->
        <div class="small container" id="section2">
            
        <h2 class="title">Linen Material Products</h2>
            <div class="row">
            <div class="col-4">
                <img src="Images/shirts5.jpeg">
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Inr.500/-</p>
                <button id="myBtn">View the Product</button>
                </div>
            <div class="col-4">
                <a href="" ><img src="Images/shirts5.jpeg"> </a>
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Inr.500/-</p>
                <button id="myBtn2">View the Product</button>
                </div>
            <div class="col-4">
                <a href="" ><img src="Images/shirts5.jpeg"> </a>
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>Inr.500/-</p>
                </div>
            <div class="col-4">
                <a href="" ><img src="Images/shirts5.jpeg"> </a>
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>Inr.500/-</p>
                </div>
            
            </div>
        <h2 class="title">Kelvin Cotton Material Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="" ><img src="Images/shirts5.jpeg"> </a>
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>Inr.500/-</p>
                </div>
            <div class="col-4">
                <a href="" ><img src="Images/shirts5.jpeg"> </a>
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Inr.500/-</p>
                </div>
            <div class="col-4">
                <a href="" ><img src="Images/shirts5.jpeg"> </a>
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>Inr.500/-</p>
                </div>
            <div class="col-4">
                <a href="" ><img src="Images/shirts5.jpeg"> </a>
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>Inr.500/-</p>
                </div>
            
        </div>
        <h2 class="title">Dotted Linen Material Products</h2>
        <div class="row">
            <div class="col-4">
              <a href="" ><img src="Images/shirts5.jpeg"> </a>
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Inr.500/-</p>
                </div>
            <div class="col-4">
                <img src="Images/shirts5.jpeg">
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>Inr.500/-</p>
                </div>
            <div class="col-4">
                <a href="" ><img src="Images/shirts5.jpeg"> </a>
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Inr.500/-</p>
                </div>
            <div class="col-4">
                <a href="" ><img src="Images/shirts5.jpeg"> </a>
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>Inr.500/-</p>
                </div>
            
        </div>
        <h2 class="title">Satin Cotton Material Products</h2>
            <div class="row">
            <div class="col-4">
                <a href="" ><img src="Images/shirts5.jpeg"> </a>
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Inr.500/-</p>
                </div>
            <div class="col-4">
                <a href="" ><img src="Images/shirts5.jpeg"> </a>
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Inr.500/-</p>
                </div>
            <div class="col-4">
                <a href="" ><img src="Images/shirts5.jpeg"> </a>
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Inr.500/-</p>
                </div>
            <div class="col-4">
                <a href="" ><img src="Images/shirts5.jpeg"> </a>
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>Inr.500/-</p>
                </div>
            </div>
        </div>
        <h2 class="title">Matty Cotton Material Products</h2>
        <div class="row">
            <div class="col-4">
                <a href="" ><img src="Images/shirts5.jpeg"> </a>
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Inr.500/-</p>
                </div>
            <div class="col-4">
                <a href="" ><img src="Images/shirts5.jpeg"> </a>
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Inr.500/-</p>
                </div>
            <div class="col-4">
                <a href="" ><img src="Images/shirts5.jpeg"> </a>
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-o"></i>
                </div>
                <p>Inr.500/-</p>
                </div>
            <div class="col-4">
                <a href="" ><img src="Images/shirts5.jpeg"> </a>
                <h4>Red Linen Shirt (Full Hand)</h4>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star-half-o"></i>
                </div>
                <p>Inr.500/-</p>
                </div>
            </div>
        <!-------- offer -------->
    <div class="offer">
        <div class="small-container">
        <div class="row">
            <div class="col-2">
                <a href="" ><img src="Images/shirts5.jpeg"class="offer-img">> </a> 
            </div>
             <div class="col-2">
            <p>Exclusively available on PlusDukan.Com</p>
                 <h1>Jackets</h1>
                 <small>Affordable Jackets for any Harsh Winter, even in Plus Size!!!! </small>
                 <a href="" class="btn">Buy Now &#8594;</a>
            </div>
            </div>
        </div>
        </div>
        <!-------- testimonial -------->
        <div class="testimonial">
        <div class="small-container">
            <div class="row">
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>The products were amazing!! I gifted my Hubby Shirts from PlusDukan.Com and he was so impressed by the product that he deciced to only buy the products of PlusDukan.Com. Thanks PlusDukan.Com!!!</p>
                 <i class="fa fa-quote-right"></i>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <img src="RedStore_Img/images/user-1.png">
                <h3>Sean Parker</h3>
                </div>
                        
<div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>I love the PlusDukan.Com products! They work as party wear, formal wear, casual wear - Literally Everything!! I won the Best Businessman Award and you know what I wore? You guessed it right - PlusDukan.Com shirts!!!! Thanks and love PlusDukan.Com! </p>
     <i class="fa fa-quote-right"></i>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <img src="RedStore_Img/images/user-2.png">
                <h3>Jim Havells</h3>
                </div>
            <div class="col-3">
                <i class="fa fa-quote-left"></i>
                <p>The products were amazing! My brother is very fat. So it is a problem to find clothes for him. So PlusDukan.Com is the perfect destination for him. Thanks PlusDukan.com.</p>
                <i class="fa fa-quote-right"></i>
                <div class="rating">
                <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>  
                      <i class="fa fa-star"></i>
                    <i class="fa fa-star"></i>
                </div>
                <img src="RedStore_Img/images/user-3.png">
                <h3>Lara Thompson</h3>
                </div>
            </div>
            </div>
        </div>
        <div class="footer">
        <div class="container">
            <div class="row">
                 <div class="footer-col-2">
                <img src="Images/logo.jpeg" width="125px">
                <p>Our purpose is to provide affordable clothing for men even in plus size at affordable rates.</p>
                </div>
            <div class="footer-col-1">
                <h3>Download our App</h3>
                <p>Download our app for Android mobile phone</p>
                <div class="app-logo">
                    <a href="">
                        <img src="RedStore_Img/images/play-store.png"></a>
                </div>
                </div>
            </div>
            <div class="footer-col-3">
                 
           
                <h3>Follow us</h3>
                <ul>
                 <li><a href="" >Facebook</a></li>
                <li><a href="" >Instagram</a></li>
                <li><a href="" >Twitter</a></li>
                <li><a href="" >Youtube</a></li>
                </ul>
                </div>
            <hr>
            <p class="copyright">Copyright 2021 - PlusDukan.Com</p>
            </div>
        </div>
        <!---------js for menu toggle------->
        <script>
        var MenuItems = document.getElementById("MenuItems");
            
            MenuItems.style.maxHeight = "0px";
            
            function menutoggle(){
                 if(MenuItems.style.maxHeight == "0px")
                {
                    MenuItems.style.maxHeight = "200px";
                }
            else
                {
                    MenuItems.style.maxHeight = "0px";
                }
            }
           
        </script>
</body>
<!-- Card 1 -->
</html>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
#myBtn{
    background-color: #125d98;
    width: 290px;
    cursor: pointer;
    height: 50px;
    transition: 1s;
    color: white;
}
#myBtn:hover{
    background-color: #3c8dad;
    color: cornsilk;
    border: 3 px solid blue;
}
</style>
</head>
<body>




<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

#adc{
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
#bn{
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: red;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
#adc:hover {
  opacity: 0.7;
}
#bn:hover{
     opacity: 0.7;
}
</style>
</head>
<body>


<div class="card">
  
  <style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev{
    left: 0;
    border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="shirts5.jpeg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="logo.jpeg" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="stars.jpg" style="width:100%">

</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
</div><br>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

  <h1>Shirt</h1><br>
  <p class="price">Rs.500</p><br>
  <p>Awesome Shirt!</p><br>
  <p><button id="adc">Add to Cart</button></p>
  <p><button id="bn">Buy Now</button></p>
</div>

</body>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<!-- Card 1 Close -->


</body>
</html>

<!-- Card 2 -->
</html>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  background-color: #fefefe;
  margin: auto;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
}

/* The Close Button */
.close {
  color: #aaaaaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}
#myBtn2{
    background-color: #125d98;
    width: 290px;
    cursor: pointer;
    height: 50px;
    transition: 1s;
    color: white;
}
#myBtn2:hover{
    background-color: #3c8dad;
    color: cornsilk;
    border: 3 px solid blue;
}
</style>
</head>
<body>




<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

#adc{
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
#bn{
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: red;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}
#adc:hover {
  opacity: 0.7;
}
#bn:hover{
     opacity: 0.7;
}
</style>
</head>
<body>


<div class="card">
  
  <style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}
.prev{
    left: 0;
    border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="shirts5.jpeg" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="shirts5.jpeg" style="width:100%">

</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="shirts5.jpeg" style="width:100%">

</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span>
</div><br>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

  <h1>Shirt</h1><br>
  <p class="price">Rs.500</p><br>
  <p>Awesome Shirt!</p><br>
  <p><button id="adc">Add to Cart</button></p>
  <p><button id="bn">Buy Now</button></p>
</div>

</body>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<!-- Card 2 Close -->


</body>
</html>




