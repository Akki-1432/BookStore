<?php
	session_start();
?>
<html>
<head>
	<title>Book Store</title>
	  <link rel="stylesheet" type="text/css" href="css/index.css">
	<!-- <script src="https://kit.fontawesome.com/a076d05399.js"></script> -->
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />

</head>
<body>
	<div class="main1">
		<div class="wrapper">
			<!-- HEADER1 -->
			<div class="heading">
			   	<div class="social_logo">
			   		<ul>
			   			<li><a href="#"><img src="images/facebook.png"></a></li>
			   			<li><a href="#"><img style="width: 35px;height: 35px;margin-top: 3px;" src="images/instagram.png"></a></li>
			   			<li><a href="#"><img src="images/twitter.png"></a></li>
			   			<li><a href="#"><img src="images/snapchat.png"></a></li>
			   		</ul>
			   	</div>
			   	<div class="middle">
			   		<p>Free shipping for standard over $100&#128717;</p>
			   	</div>
			   	<div class="welcome">
			   		<h2>WELCOME&#128591;</h2>
			   	</div>
			</div>
		</div>
		
		<div class="wrapper">
			<!-- HEADER2 -->
			<div class="header1">
				<!-- LOGO -->
				<div class="logo">
					<img src="images/logo.png">
					<div class="logoname">
						<h2>Singh's</h2>
						<h5>Bookstore</h5>
					</div>
				
				</div>
				<!-- MENU -->
				<div class="menu">
					<ul>
						<li><a href="index1.php">HOME</a></li>
						<li><a href="shop.php">SHOP</a></li>
						<li><a href="cart.php">MY CART</a></li>
						<li><a href="#">ABOUT</a></li>
						<li><a href="#">CONTACT</a></li>
					</ul>
				</div>
				<div class="register">
					<div class="but">
						<button id="mybtn">LOG IN&#128100;</button>
					</div>
					<!-- SIGN OUT -->
					<div class="but">
						<button>SIGN UP&#128100;</button>
						
					</div>
				</div>
				<!-- CART -->
				<div class="cart">
					<img src="images/cart.png"><sup>1</sup>
					<!-- <i class="fas fa-bars"></i> -->
				</div>
				
			</div>
		</div>	
	<div class="clr"></div>
	<!-- Carousel wrapper -->
<div
  id="carouselBasicExample"
  class="carousel slide carousel-fade"
  data-mdb-ride="carousel"
>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-mdb-target="#carouselBasicExample" data-mdb-slide-to="0" class="active"></li>
    <li data-mdb-target="#carouselBasicExample" data-mdb-slide-to="1"></li>
    <li data-mdb-target="#carouselBasicExample" data-mdb-slide-to="2"></li>
  </ol>

  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item active">
      <img
        src="images/library.jpg"
        class="d-block w-100"
        alt="..."
      />

      <div class="carousel-caption d-none shopbutton d-md-block">
        <h5>Book Collection 2021</h5>
        <h1>NEW ARRIVALS</h1>
        <button>SHOP NOW</button>
      </div>
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img
        src="images/library2.jpg"
        class="d-block w-100"
        alt="..."
      />
      <!-- <div class="carousel-caption d-none shopbutton d-md-block">
        <h5>Book Collection 2021</h5>
        <h1>NEW ARRIVALS</h1>
        <button>SHOP NOW</button>
      </div> -->
    </div>

    <!-- Single item -->
    <div class="carousel-item">
      <img
        src="images/library3.jpg"
        class="d-block w-100"
        alt="..."
      />
      <div class="carousel-caption d-none shopbutton d-md-block">
        <!-- <h5>Book Collection 2021</h5>
        <h1>NEW ARRIVALS</h1>
        <button>SHOP NOW</button>
      </div> -->
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls -->
  <a
    class="carousel-control-prev"
    href="#carouselBasicExample"
    role="button"
    data-mdb-slide="prev"
  >
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </a>
  <a
    class="carousel-control-next"
    href="#carouselBasicExample"
    role="button"
    data-mdb-slide="next"
  >
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </a>
  <div class="clr"></div>
</div>
</div>
	<div class="clr"></div>
	<div class="wrapper">
		<div class="featuretext">
			<h2>FEATURED BOOK</h2>
		</div>
	</div>
	<div class="clr"></div>
	<!-- FEATURED BOOKS -->
		<div class="featuredbook">
			<div class="book1">
				<div class="book2">
				<img src="images/books/php1.jpg">
				</div>
			<div class="bookname">
				<h5>PHP:REFERENCE BOOK</h5>
			</div>	
			<div class="price">
				<p>PRICE:599<sub><strike>999</strike></sub></p>
			</div>
				<button class="button1"><span>BUY NOW</span></button>
				<button class="button1"><span>ADD TO CART</span></button>
			</div>
			</div>
			<div class="book1">
				<div class="book2">
				<img src="images/books/java1.jpg">
				</div>
				<div class="bookname">
				<h5>JAVA:BEGINNERS</h5>
			</div>	
			<div class="price">
				<p>PRICE:599<sub><strike>999</strike></sub></p>
			</div>
			
				<button class="button1"><span>BUY NOW</span></button>
				<button class="button1"><span>ADD TO CART</span></button>
			
			</div>
			<div class="book1">
				<div class="book2">
				<img src="images/books/biobook.jpg">
				</div>
				<div class="bookname">
				<h5>BIOMEDICAL:ENGINEERING</h5>
			</div>	
			<div class="price">
				<p>PRICE:599<sub><strike>999</strike></sub></p>
			</div>
			
				<button class="button1"><span>BUY NOW</span></button>
				<button class="button1"><span>ADD TO CART</span></button>
			
			</div>
			<div class="book1">
				<div class="book2">
				<img src="images/books/engineerbook.jpg">
				</div>
				<div class="bookname">
				<h5>INDUSTRIAL:ENGINEERING</h5>
			</div>	
			<div class="price">
				<p>PRICE:599<sub><strike>999</strike></sub></p>
			</div>
			
				<button class="button1"><span>BUY NOW</span></button>
				<button class="button1"><span>ADD TO CART</span></button>
			
			</div>
			<div class="clr"></div>
		<!-- BEST SELLER -->
	<div class="wrapper">
		<div class="featuretext">
			<h2>BEST SELLER</h2>
		</div>
	</div>
	<div class="clr"></div>
		<div class="featuredbook">
			<div class="book1">
				<div class="book2">
				<img src="images/books/yoga.jpg">
				</div>
				<div class="bookname">
				<h5>YOGA LEARNING</h5>
			</div>	
			<div class="price">
				<p>PRICE:599<sub><strike>999</strike></sub></p>
			</div>
				<button class="button1"><span>BUY NOW</span></button>
				<button class="button1"><span>ADD TO CART</span></button>
			</div>
			</div>
			<div class="book1">
				<div class="book2">
				<img src="images/books/fruits.jpg">
				</div>
				<div class="bookname">
				<h5>FRUITS:FOR KIDS</h5>
			</div>	
			<div class="price">
				<p>PRICE:599<sub><strike>999</strike></sub></p>
			</div>
			
				<button class="button1"><span>BUY NOW</span></button>
				<button class="button1"><span>ADD TO CART</span></button>
			
			</div>
			<div class="book1">
				<div class="book2">
				<img src="images/books/fit.jpg">
				</div>
				<div class="bookname">
				<h5>FIT,TRIM & DISEASE FREE</h5>
			</div>	
			<div class="price">
				<p>PRICE:599<sub><strike>999</strike></sub></p>
			</div>
			
				<button class="button1"><span>BUY NOW</span></button>
				<button class="button1"><span>ADD TO CART</span></button>
			
			</div>
			<div class="book1">
				<div class="book2">
				<img src="images/books/diet.jpg">
				</div>
				<div class="bookname">
				<h5>DIET:FOR BEGINNERS</h5>
			</div>	
			<div class="price">
				<p>PRICE:599<sub><strike>999</strike></sub></p>
			</div>
			
				<button class="button1"><span>BUY NOW</span></button>
				<button class="button1"><span>ADD TO CART</span></button>
			
			</div>
			<div class="clr"></div>
			<!-- CHILDREN BOOKS -->
	<div class="wrapper">
		<div class="featuretext">
			<h2>CHILDREN BOOKS</h2>
		</div>
	</div>
	<div class="clr"></div>
		<div class="featuredbook">
			<div class="book1">
				<div class="book2">
				<img src="images/books/olympus.jpg">
				</div>
				<div class="bookname">
				<h5>OLYMPUS</h5>
			</div>	
			<div class="price">
				<p>PRICE:599<sub><strike>999</strike></sub></p>
			</div>
				<button class="button1"><span>BUY NOW</span></button>
				<button class="button1"><span>ADD TO CART</span></button>
			</div>
			</div>
			<div class="book1">
				<div class="book2">
				<img src="images/books/lion.jpg">
				</div>
				<div class="bookname">
				<h5>LION AND THE BEE</h5>
			</div>	
			<div class="price">
				<p>PRICE:599<sub><strike>999</strike></sub></p>
			</div>
			
				<button class="button1"><span>BUY NOW</span></button>
				<button class="button1"><span>ADD TO CART</span></button>
			
			</div>
			<div class="book1">
				<div class="book2">
				<img src="images/books/yearwise.jpg">
				</div>
				<div class="bookname">
				<h5>STORY BOOKS:3 TO 5 YEARS</h5>
			</div>	
			<div class="price">
				<p>PRICE:599<sub><strike>999</strike></sub></p>
			</div>
			
				<button class="button1"><span>BUY NOW</span></button>
				<button class="button1"><span>ADD TO CART</span></button>
			
			</div>
			<div class="book1">
				<div class="book2">
				<img src="images/books/mister.jpg">
				</div>
				<div class="bookname">
				<h5>THE MISTER</h5>
			</div>	
			<div class="price">
				<p>PRICE:599<sub><strike>999</strike></sub></p>
			</div>
			
				<button class="button1"><span>BUY NOW</span></button>
				<button class="button1"><span>ADD TO CART</span></button>
			
			</div>
			<div class="clr"></div>
			<!-- FOOTER -->
			<div class="wrapper">
				
				<div class="ltext">
					<h5>Free Delivery Worldwide</h5>
					<p>Click here for more info</p>
				</div>
				<div class="ctext">
					<h5>30 Days Return</h5>
					<p>Simply return it within 30 days for an exchange</p>
				</div>
				<div class="rtext">
					<h5>Store Opening</h5>
					<p>Shop open from Monday to Sunday</p>
				</div>

			</div>
			<!-- FOOTER -->
				<div class="wrapper">
			<div class="footer">
				<div class="f1">
					<div class="hleft">
						<h2>SINGH's<br>BOOKSTORE</h2>
					</div>
					<div class="hright">
						<img src="images/insta.png">
						<img src="images/fb.png">
						<img src="images/youtube.png">
					</div>
					<div class="clr"></div><hr style="width: 600px;margin-left: -5px">
					<div class="lleft">
						<h2>HOME</h2>
						<h2>PROPERTIES
							<ul>
								<li>53 France</li>
								<li>51 France</li>
								<li>28 St.Louis</li>
							</ul>
						</h2>
						<h2>ABOUT US</h2>
					</div>
					<div class="lright">
						<h2>OUR PROCESS</h2>
						<h2>NEWS / BLOGS</h2>
						<button>INQUIRE&#10145;</button>
					</div>
					<div class="clr"></div><hr style="width: 600px;margin-left: -5px;">
					<div class="aleft">
						<h2>&#9742;9860406989</h2>
					</div>
					<div class="aright">
						<h2>&#9993;akshaysingh@gmail.com</h2>
					</div>	
				</div>
				
				<div class="f2" >
					<h2>INQUIRE</h2>
					<div class="nleft">
						<input type="fname" name="fname" placeholder="&#128100;First Name">
					</div>	
					<div class="nright">
						<input type="lname" name="lname" placeholder="&#128100;Last Name">
					</div><br><br><br>
					<div class="gmail">
						<input type="email" name="email" placeholder="&#9993;Enter Your Email">
					</div><br>
					<div class="num">
						<input type="text" name="number" placeholder="&#9742;Enter Your Number">
					</div><br>
					<div class="message">
						<input type="text" name="message" placeholder="&#10031;Let us know how can we help you...">
					</div><br>
					<button>SUBMIT&#10145;</button>
				</div>
			<div class="clr"></div>
			</div>
			<div class="clr"></div>
	</div>
	<div class="container">
		<div class="footer1">
			<h4>Copyright&#169;2019.Singh's Bookstore.All Rights Reserved.</h4>
		</div>
	</div>
	<!-- MODAL CONTENT -->
	<div id="mymodal" class="modal" style="width: 500px; height: 400px;">
				<div class="modal-content">
					<span class="close">&times;</span>
					<form action="#" method="POST">
					  <div class="imgcontainer">
					    <img src="image/pika.jpg" alt="Avatar" class="avatar">
					  </div>

					  <div class="container">
					    <label for="uname"><b>Username</b></label>
					    <input type="text" placeholder="Enter Username" name="c_email" required>

					    <label for="psw"><b>Password</b></label>
					    <input type="password" placeholder="Enter Password" name="Password" required>
					     <div class="class">   
					    	*<button name="submit" type="submit">Login</button>
						</div>
					    <label>
					      <input type="checkbox" checked="checked" name="remember"> Remember me
					    </label>
					  </div>

					  <div class="container" style="background-color:#f1f1f1">
					   
					    <span class="psw">Forgot <a href="#">password?</a></span>
					  </div>
					</form>
				</div>
			</div>	
</div>
</body>
  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Custom scripts -->
  <script type="text/javascript"></script>
  <script type="text/javascript">
	// java script modal

var modal=document.getElementById("mymodal");
var btn=document.getElementById("mybtn");
var span=document.getElementsByClassName("close")[0];

btn.onclick=function()
{
	modal.style.display="block";
}

	span.onclick=function()
	{
		modal.style.display="none";
	}

	window.onclick=function(event)
	{
		if (event.target  == modal)
		{
		modal.style.display="none";
		}
	}

</script>
</html>

<?php
include 'config.php';

if (isset($_POST['submit'])) 
{
  $query= "select * from customer where c_email='".$_POST['c_email']."' and Password='".$_POST['Password']."'";
   $res=mysqli_query($conn,$query)or die (mysqli_error($conn));

   if(mysqli_num_rows($res) > 0)

      {
        $row=mysqli_fetch_array($res);
        extract($row);
        $_SESSION['c_email']=$row['c_email'];

       echo "<script>";
       echo "alert ('login succesfully');";
       echo "window.location.href='index1.php';";
       echo "</script>";

      }

      else
      {
         echo "<script>";
         echo "alert('email or password is invalid');";
         echo "window.location.href='index1.php';";
         echo "</script>";
      }
}
?>




