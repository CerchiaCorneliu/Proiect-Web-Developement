<?php
    session_start(); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>MyMarket</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }    
        document.write("<br>");
        
        $(document).ready(function(){
            $('#convert').click(function(){
                var val = $('#euro').val();
                $('#dollar').html((val*1.17).toFixed(3));
            });
            $('#convert').click(function(){
                var val = $('#dollar').val();
                $('#euro').html((val*0.85).toFixed(3));
            });     
        });
        // document.write("<br");
        
        $(document).ready(function(){
            $("#dropbtn1").click(function(){
                $("#dropdown-content1").show();
            });
            $(".dropdown").mouseleave(function(){
                $("#dropdown-content1").hide();
            });
        });
        
        $(document).ready(function(){
            $("#dropbtn2").click(function(){
                $("#dropdown-content2").show();
            });
            $(".dropdown").mouseleave(function(){
                $("#dropdown-content2").hide();
            });
        });
        
        $(document).ready(function(){
            $("#dropbtn3").click(function(){
                $("#dropdown-content3").show();
            });
            $(".dropdown").mouseleave(function(){
                $("#dropdown-content3").hide();
            });
        });
        
        $(document).ready(function(){
            $("#dropbtn4").click(function(){
                $("#dropdown-content4").show();
            });
            $(".dropdown").mouseleave(function(){
                $("#dropdown-content4").hide();
            });
        });
        
        $(document).ready(function(){
            $("#dropbtn5").click(function(){
                $("#dropdown-content5").show();
            });
            $(".dropdown").mouseleave(function(){
                $("#dropdown-content5").hide();
            });
        });
    </script>
</head>
<body>
	<header>
		<div class="container">
            <div id="imagelogo">
                <?php 
                    if(isset($_SESSION['id'])) {
                        echo'<a href="home.php"><img src="img/mymarket1.png" alt="MyMarket"></a>'; 
                    }
                    if(!isset($_SESSION['id'])) {
                        echo'<a href="home.php"><img src="img/mymarket1.png" alt="MyMarket"></a>'; 
                    }
                ?>
            </div>
			<div id="main-menu">
				<ul>
                    <?php 
                        if(isset($_SESSION['id'])) {
                        echo'<li><a class="actual" href="home.php">Home</a></li>
                            <li><a href="myaccount.php">My Account</a></li>
                            <li><a href="mycart.php">My Cart</a></li>
                            <li><a href="signin.php">Sign out, '.$_SESSION['lastname'].'</a></li>';
                        }
                        if(!isset($_SESSION['id'])) {
                        echo'<li><a class="actual" href="home.php">Home</a></li>
                            <li><a href="signup.php">Sign up</a></li>
                            <li><a href="signin.php">Sign in</a></li>';
                        }
                    ?>
				</ul>
				<form>
					<input type="text" name="search" placeholder="Search here...">
					<button type="submit"><i class="fa fa-search"></i></button>
				</form>
			</div>
		</div>
	</header>

	<section>
		<nav>
			<div class="container">
                <!-- Desktop -->
                <div class="dropdown">
                    <button class="dropbtn" id="dropbtn1">Cell Phones &amp; Tablets</button>
                    <div class="dropdown-content" id="dropdown-content1">
                        <a href="#">Samsung</a>
                        <a href="#">Apple</a>
                        <a href="#">Nokia</a>
                        <a href="#">Sony</a>
                        <a href="#">LG</a>
                        <a href="#">Huawei</a>
                        <a href="#">Oneplus</a>
                        <a href="#">Phone Accessories</a>
                        <a href="#">Others</a>     
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn" id="dropbtn2">Laptops &amp; Computers</button>
                    <div class="dropdown-content" id="dropdown-content2">
                        <a href="#">Apple</a>
                        <a href="#">Asus</a>
                        <a href="#">Lenovo</a>
                        <a href="#">HP</a>
                        <a href="#">Dell</a>
                        <a href="#">Acer</a>
                        <a href="#">Alienware</a>
                        <a href="#">Laptop Accessories</a>
                        <a href="#">PC Components</a>     
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn" id="dropbtn3">Cameras &amp; Photos</button>
                    <div class="dropdown-content" id="dropdown-content3">
                        <a href="#">Canon</a>
                        <a href="#">Panasonic</a>
                        <a href="#">Sony</a>
                        <a href="#">Lumix</a>
                        <a href="#">Fujifilm</a>
                        <a href="#">GoPro</a>
                        <a href="#">Camera Accessories</a>     
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn" id="dropbtn4">TV &amp; Audio</button>
                    <div class="dropdown-content" id="dropdown-content4">
                        <a href="#">Samsung</a>
                        <a href="#">Philips</a>
                        <a href="#">LG</a>
                        <a href="#">Sharp</a>
                        <a href="#">Speaker</a>
                        <a href="#">Home Audio</a>
                        <a href="#">DVD Player</a>
                        <a href="#">Audio HI FI</a>     
                    </div>
                </div>
                <div class="dropdown">
                    <button class="dropbtn" id="dropbtn5">Video Games &amp; Consoles</button>
                    <div class="dropdown-content" id="dropdown-content5">
                        <a href="#">Games</a>
                        <a href="#">Consoles</a>
                        <a href="#">Gamepad</a>
                        <a href="#">Joystick</a>
                        <a href="#">Gaming Chairs</a>    
                    </div>
                </div>
                
                <!-- Tablet & Mobile -->
                <div class="topnav" id="myTopnav">
                    <a href="#" class="active">Categories</a>
                    <a href="#">Cell Phones &amp; Tablets</a>
                    <a href="#">Laptops &amp; Computers</a>
                    <a href="#">Cameras &amp; Photos</a>
                    <a href="#">TV &amp; Audio</a>
                    <a href="#">Video Games &amp; Consoles</a>
                    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>
			</div>
		</nav>

		<div class="container">
			<aside>
                <div class="deal">
                    <div id="deal1">
                        <h1>hot deal</h1>
                        <img src="img/apple-iphone_xs.png">
                        <div class="paragraph">
                            <p>Lorem Ipsum Dolor</p>
                            <p><del>$400</del> $300</p>
                        </div>
                        <div class="rating">
                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>
                    </div>
                    <div id="deal2">
                        <h1>special deal</h1>
                        <img src="img/macbook.jpg">
                        <div class="paragraph">
                            <p>Lorem Ipsum Dolor</p>
                            <p><del>$600</del> $500</p>
                        </div>
                        <div class="rating">
                            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>
                    </div>
                </div>
				<div class="newsletter">
					<h1>newsletters</h1>
					<p>Sign Up for Our Newsletter!</p>
					<form>
						<input type="email" name="email" placeholder="Enter Email address">
                        <input type="submit" name="subscribe" value="Subscribe">
					</form>
				</div>
                <div class="converter">
					<h1>currency converter</h1>
					<form>
						<input type="number" name="euro" id="euro">
                        <p>EUR</p>
                        <input type="number" name="dollar" id="dollar">
                        <p>USD</p>
						<input type="submit" name="convert" id="convert" value="Convert">
					</form>
				</div>
			</aside>

			<article>
				<div id="advertize">
					<div id="advert">
						<img src="img/galaxy s9.jpg">
						<h1>best deal 2018</h1>
						<h2>save 30% for</h2>
						<p>first purchase</p>
						<form>
                            <a href=""><button>SHOP NOW</button></a>
                        </form>
					</div>
					<div id="terms">
						<table>
							<tr>
								<td>
									<h1>money back</h1>
									<p>30 Days Money Back Guarantee</p>
								</td>
								<td>
									<h1>free shipping</h1>
									<p>Shipping on orders over $99</p>
								</td>
								<td>
									<h1>special sale</h1>
									<p>Extra $5 off on all items</p>
								</td>
							</tr>
						</table>
					</div>
				</div>

				<div id="newproducts">
					<h1>new products</h1>
					<div class="product">
				        <img src="img/iphone x.jpg">
                        <div class="paragraph">
                            <p>Lorem Ipsum Dolor</p>
                            <p><del>$1000</del> $900</p>
                        </div>
				        <div class="rating">
				            <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>
					</div>

					<div class="product">
				        <img src="img/nikon SL1500.jpg">
                        <div class="paragraph">
                            <p>Lorem Ipsum Dolor</p>
                            <p><del>$2000</del> $1700</p>
                        </div>
				        <div class="rating">
    				        <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>
					</div>

					<div class="product">
				        <img src="img/lenovo legion.jpg">
                        <div class="paragraph">
				            <p>Lorem Ipsum Dolor</p>
							<p><del>$1500</del> $1400</p>
                        </div>
				        <div class="rating">
							 <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
				        </div>
					</div>

					<div class="product">
				        <img src="img/lyra voices.jpg">
                        <div class="paragraph">
							<p>Lorem Ipsum Dolor</p>
							<p><del>$300</del> $280</p>
                        </div>
				        <div class="rating">
							 <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>
					</div>
				</div>

				<div id="latestproducts">
					<h1>latest products</h1>
					<div class="product">
				        <img src="img/dynaudio.jpg">
                        <div class="paragraph">
							<p>Lorem Ipsum Dolor</p>
							<p><del>$200</del> $180</p>
                        </div>
				        <div class="rating">
							 <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>
					</div>

					<div class="product">
				        <img src="img/2016-SUHD-TV.jpg">
                        <div class="paragraph">
				            <p>Lorem Ipsum Dolor</p>
							<p><del>$1800</del> $1400</p>
                        </div>
				        <div class="rating">
							 <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
				        </div>
					</div>

					<div class="product">
				        <img src="img/BookSmall.jpg">
                        <div class="paragraph">
							<p>Lorem Ipsum Dolor</p>
							<p><del>$1200</del> $1000</p>
                        </div>
				        <div class="rating">
							 <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>
					</div>

					<div class="product">
				        <img src="img/xbox-one-microsoft.jpg">
                        <div class="paragraph">
							<p>Lorem Ipsum Dolor</p>
							<p><del>$500</del> $450</p>
                        </div>
				        <div class="rating">
							 <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
                        </div>
					</div>
				</div>

				<div id="specialproduct">
					<img src="img/macbook pro 2018.png">
					<h1>beautiful laptop</h1>
					<h2>retina display 18" ready!</h2>
                    <form>
                        <a href=""><button>SHOP NOW</button></a>
                    </form>
				</div>
		
				<div id="featuredproducts">
					<h1>featured products</h1>
					<div class="featuredproduct">
				        <img src="img/iPhone6.jpg">
                        <div class="paragraph">
							<p>Lorem Ipsum Dolor</p>
							<p><del>$700</del> $600</p>
                        </div>
				        <div class="rating">
							 <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
				        </div>
					</div>

					<div class="featuredproduct">
				        <img src="img/imac.jpg">
                        <div class="paragraph">
							<p>Lorem Ipsum Dolor</p>
							<p><del>$1800</del> $1400</p>
                        </div>
				        <div class="rating">
							 <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
				        </div>
					</div>

					<div class="featuredproduct">
				        <img src="img/tv4k.jpg">
                        <div class="paragraph">
							<p>Lorem Ipsum Dolor</p>
							<p><del>$1200</del> $1000</p>
                        </div>
				        <div class="rating">
							 <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
				        </div>
					</div>

					<div class="featuredproduct">
				        <img src="img/ipad.jpg">
                        <div class="paragraph">
							<p>Lorem Ipsum Dolor</p>
							<p><del>$600</del> $550</p>
                        </div>
				        <div class="rating">
							 <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
				        </div>
					</div>

					<div class="featuredproduct">
				        <img src="img/galaxy-j5.jpg">
                        <div class="paragraph">
							<p>Lorem Ipsum Dolor</p>
							<p><del>$400</del> $350</p>
                        </div>
				        <div class="rating">
							 <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
				        </div>
					</div>

					<div class="featuredproduct">
				        <img src="img/dims.jpg">
                        <div class="paragraph">
							<p>Lorem Ipsum Dolor</p>
							<p><del>$250</del> $220</p>
                        </div>
				        <div class="rating">
						      <span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>
				        </div>
					</div>
				</div>
            </article>
        </div>		
	</section>

    <div id="contact">
        <div class="container">
            <div class="column col-4">
                <div class="wrap">
                    <img id="logo" src="img/mymarket1.png" alt="MyMarket">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    <p><a href=""><i class="fa fa-map-marker"></i>0123 Main Road, NY 123456</a></p>
                    <p><a href=""><i class="fa fa-phone"></i>(000) 1234-5678</a></p>
                    <p><a href=""><i class="fa fa-envelope"></i>info@mymarket.com</a></p>
                </div>
            </div>

            <div class="column col-4">
                <div class="wrap">
                    <h1>information</h1>
                    <p><a href="">Our Story</a></p>
                    <p><a href="">Privacy &amp; Policy</a></p>
                    <p><a href="">Terms &amp; Conditions</a></p>
                    <p><a href="">Shipping &amp; Delivery</a></p>
                    <p><a href="">Careers</a></p>
                    <p><a href="">FAQs</a></p>
                </div>
            </div>

            <div class="column col-4">
                <div class="wrap">
                    <h1>our social</h1>
                    <p><a href=""><i class="fa fa-google-plus"></i>Google+</a></p>
                    <p><a href=""><i class="fa fa-facebook"></i>Facebook</a></p>
                    <p><a href=""><i class="fa fa-twitter"></i>Twitter</a></p>
                    <p><a href=""><i class="fa fa-rss"></i>RSS</a></p>
                    <p><a href=""><i class="fa fa-youtube-play"></i>Youtube</a></p>
                </div>
            </div>

            <div class="column col-4">
                <div class="wrap">
                    <h1>opening time</h1>
                    <p>Monday-Friday: 08:30 am - 09.30 pm</p>
                    <p>Sat - Sun 09:00 am - 10:00 pm</p>
                    <h1>payment option</h1>
                    <img class="card" src="img/mastercard.png">
                    <img class="card" src="img/visa1.png">
                    <img class="card" src="img/paypal1.png">
                </div>
            </div>
        </div>
    </div>		

	<footer>
        <div class="container">
            <ul>
                <li><a href="">Sitemap</a></li>
                <li><a href="">Search</a></li>
                <li><a href="">Advance</a></li>
                <li><a href="">Contact Us</a></li>
            </ul>
		    <p>&copy;2018 MyMarket | All Rights Reserved</p>
        </div>
	</footer>
</body>
</html>
