<!DOCTYPE html>
<html>
<head>
	
<style type="text/css">.modal{
	display: none;
	z-index: 1;
	margin-left: 800px;
	margin-top: 120px;
	top: 0px;
	width: 50%;
	height: 50%;
	overflow: auto;
	/*background-color: grey;*/
	text-align: center;
}
.modal1{
	display: none;
	z-index: 1;
	margin-left: 800px;
	margin-top: 120px;
	top: 0px;
	width: 50%;
	height: 50%;
	overflow: auto;
	/*background-color: grey;*/
	text-align: center;
}
/*Modal Content Box*/
.modal-content{
	background-color: #fefefe;
	margin: 15% auto;
	padding: 20px;
	border: 1px solid #888;
	width: 40%;

}
/*The Close Button*/
.close{
	color: #aaa;
	float: right;
	font-size: 28px;
	font-weight: bold;
}
.close:hover,
.close:focus{
	color: black;
	text-decoration: none;
	cursor: pointer;
}</style>
</head>
<body>
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
						<li><a href="contact.php">CONTACT</a></li>
					</ul>
				</div>
				<div class="register">
				<div class="but">
					<button id="mybtn">LOG IN&#128100;</button>
				</div>
				<!-- SIGN OUT -->
				<div class="but">
					<button><a href="signup.php"> SIGN UP&#128100;</a></button>
					
				</div>
				</div>
				<!-- CART -->
				<div class="cart">
					<img src="images/cart.png"><sup>1</sup>
					<!-- <i class="fas fa-bars"></i> -->
				</div>
				
			</div>
		</div>

		<!-- MODAL CONTENT -->
		<!-- Login -->
	<div id="mymodal" class="modal" style="width: 500px; height: 400px;">
				<div class="modal-content">
					<span class="close">&times;</span>
					<form action="/action_page.php" method="post">
					  <div class="imgcontainer">
					    <img src="image/pika.jpg" alt="Avatar" class="avatar">
					  </div>

					  <div class="container">
					    <label for="uname"><b>Username</b></label>
					    <input type="text" placeholder="Enter Username" name="uname" required>

					    <label for="psw"><b>Password</b></label>
					    <input type="password" placeholder="Enter Password" name="psw" required>
					     <div class="class">   
					    	*<button type="submit">Login</button>
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

			<!-- SIGN UP -->
			<div id="mymodal1" class="modal1" style="width: 500px; height: 400px;">
				<div class="modal-content">
					<span class="close1">&times;</span>
					<form action="/action_page.php" method="post">
					  <div class="imgcontainer">
					    <img src="image/pika.jpg" alt="Avatar" class="avatar">
					  </div>

					  <div class="container">
					    <label for="uname"><b>Username</b></label>
					    <input type="text" placeholder="Enter Username" name="uname" required>

					    <label for="psw"><b>Password</b></label>
					    <input type="password" placeholder="Enter Password" name="psw" required>
					     <div class="class">   
					    	*<button type="submit">Login</button>
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
</body>
</html>


<!-- js for model login -->
<script>
	var modal=document.getElementById("mymodal");
	var modal1= document.getElementById("mymodal1")
	var btn=document.getElementById("mybtn");
	var btn1=document.getElementById("mybtn1");
	var sp = document.getElementById("sp");
	var sp1 = document.getElementById("sp1");
	var span=document.getElementsByClassName("close")[0];
	var span1=document.getElementsByClassName("close1")[0];
	
	if(btn == document.getElementById("mybtn") )
	{
		btn.onclick=function(){
		modal.style.display="block";
		}
	}
	else(btn1 == document.getElementById("mybtn1"))
	{
		
			btn1.onclick=function(){
			modal1.style.display="block";
		}
		
	}

	if(sp == document.getElementById("sp") )
	{	
		span.onclick=function(){
		modal.style.display="none";
		}
	}
	else(sp1 == document.getElementById("sp1"))
	{
		
			span1.onclick=function(){
		modal1.style.display="none";
		}
		
	}
	
	// span.onclick=function(){
	// 	modal.style.display="none";
	// }
	window.onclick=function(event){
		if (event.target  == modal) {
		modal.style.display="none";
	}
	}
</script>
	