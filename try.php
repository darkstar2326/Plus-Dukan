
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
</html>

