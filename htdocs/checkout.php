<?php 
	session_start();
	require('connect.php');
	
	if (isset($_SESSION['username'])){
		//header('Location: home.php');
		//echo $_SESSION['username'];
		//header('Location:'.$_SERVER['PHP_SELF']);
	}
	else{
		//3.2 When the user visits the page first time, simple login form will be displayed.
		header("Location: login.php");

	}
	$data = $_GET['data'];
	$products = explode("@",$data);
	//print_r($products);
	$len = sizeof($products);
	$item;
	$tval=0;
	for ($x = 0; $x < $len-1; $x++) {
		
		$item[$x] = explode("->",$products[$x]);
		$tval = $tval + (int)($item[$x][1]);
	}
	
	
?>
<html>

<head>
	<script src="https://use.fontawesome.com/7bcf909bab.js"></script>
	<script type="text/javascript" src="js/dateestimated.js"></script>
	<script src="./js/redirectcart.js"></script>
	<script src="./js/basiccart.js"></script>
	<meta name="viewport" content="initial-scale=1">
	<!--<link rel="stylesheet" href="css/style.css">-->
	<title>
		CHECKOUT
	</title>
	<style>
        .demo-container {
            width: 100%;
            max-width: 350px;
            margin: 50px auto;
			!text-align:center;
			
        }
        form {
            margin: 30px;
        }
        input {
            width: 200px;
            margin: 10px auto;
            display: block;
        }
		@import url(https://fonts.googleapis.com/css?family=Roboto:400,900,700,500);
		#main {
		  padding: 60px 50px;
		  background-color: #B2D1E5;
		  margin: 0 auto;
		  width: 400px;
		  padding-left:35%;
		  padding-right:38%;
		}
		.body-text {
		  padding-bottom: 30px;
		  font-family: "Roboto";
		  font-size: .9em;
		  color: #fff;
		}
		.form-container {
		  width: 100%;
		}
		.card-wrapper {
		  background-color: #6FB7E9;
		  width: 100%;
		  padding: 10px 0px;
		}
		.personal-information {
		  background-color: #3C8DC5;
		  color: #fff;
		  padding: 1px 0px;
		  text-align: center;
		}
		h1 {
		  font-size: 1.3em;
		  font-family: "Roboto"
		}
		input {
		  margin: 1px 0px;
		}
		input[type="text"]{
		  display: block;
		  height: 40px;
		  width: 340px;
		  padding-left: 10px;
		  border: none;
		}
		input[type="email"]{
		  display: block;
		  height: 40px;
		  width: 340px;
		  padding-left: 10px;
		  border: none;
		}
		input[type="submit"]{
		  display: block;
		  height: 60px;
		  width: 340px;
		  border: none;
		  background-color: #3C8DC5;
		  color: #fff;
		  margin-top: 2px;
		  curson: pointer;
		  font-size: 0.9em;
		  text-transform: uppercase;
		  font-weight: bold;
		}
		input[type="submit"]:hover{
		  background-color: #6FB7E9;
		  transition: 0.3s ease;
		}
		#column-left {
		  width: 49.5%;
		  float: left;
		  margin-bottom: 2px;
		}
		#column-right {
		  width: 49.5%;
		  float: right;
		}

		@media only screen and (min-width: 300px) and (max-width: 400px){
		  .personal-information {
			width: 300px;
		  }
		  .card-wrapper {
			background-color: #6FB7E9;
			width: 300px;
			padding: 20px 0px;
		  }
		  !h1 {
			font-size: 1.2em;
		  }
		  #input-field {
			width: 290px;
		  }
		  input[type="text"]{
		  height: 40px;
		  }
		  input[type="email"]{
		  height: 40px;
		  }
		  input[type="submit"]{
		  height: 50px;
		  }
		  #column-left {
			width: 290px;
			display: block;
			float: none;
		  }
		  #column-right {
			width: 290px;
			display: block;
			float: none;
		  }
		  #input-button {
			width: 300px;
		  }
		}
    </style>
	<Style>
	html,body {
			margin:0;
			padding:0;
			//display:flex;
		}
		img{
			max-width: 100%;
			height: auto;
			width: auto\9; /* ie8 */
			
		}

		a{
			text-decoration:none;
		}
		ul {
			display:flex;
			list-style-type: none;
			margin: 0;
			padding: 10;
			background-color: #231f20;
			overflow: hidden;
			float: left;
			padding-bottom:10;
		}
		#ul2{
			display:flex;
			padding-left: 0;
			padding-right: 80px;
			float: right;
			overflow: hidden;
			!max-width: 330px;
		}
		#mlist{
			display:flex;
			float: center;
			padding-top: 12;
			padding-left: 10px;
		}
		li{
			float: center;
		}
		li a {
			display: block;
			color: #c0bfbf;
			text-align: center;
			padding: 5px 14px;
			text-decoration: none;
			font-family: Impact, Charcoal, sans-serif;
			font-size: 21px;
		}
		li a:hover {
			color: white;
			
		}
		ul li:hover ul{
			display: block;
		}
		ul ul{
			display: none;
			position: absolute;
			background-color: #231f20;
			
		}
		ul ul li {
			display: inline;
		}
		#logolist{
			padding-left:12%;
			padding-right:0%;
		}
		#nav{
			position: fixed;
			width: 100%;
			top: 0;
			background-color: #231f20;
			z-index: 999;
		}
		#searchinput{
			font-family: verdana;
			font-size: 12px;
			background-color: #231f20;
			border-bottom: 2px solid #1F9CBB;
			border-top: 2px solid #1F9CBB;
			border-left: 2px solid #1F9CBB;
			border-right: 2px solid #1F9CBB;
			height: 30px;
			width: 400px;
			padding-top: 0;
			padding-bottom:0;
			!padding-right: px;
			margin 0 20px 0 0;
			color: #1F9CBB;
		}
		#main{
			margin:0;
			padding-top: 70px;
			text-align:center;
		}
		#bread{
			padding-left: 170px;
			padding-top: 20px;
			padding-botton: 20px;
		}
		#bread p{
			text-decoration: none;
			font-family: sans-serif;
			font-size: 13px;
			color: #7E7E7E;
		}
		#bread a{
			color: #7E7E7E;
		}
		#item{
			display: flex;
			max-width: 100%;
			!clear: both;
		}
		#content{
			padding-left: 170px;
			width : 40%;
			!display= inline;
			
		}
		#itemdetail {
			width: 40%;
			padding-left: 5px;
			clear: right;
			!display: inline;
		}
		
		#itemdetail h2{
			margin: 2px;
			font-family: sans-serif;
			color: #282828;	
			font-size: 30px;
		}
		
		#categ{
			font-family: sans-serif;
			color: #7A7A7A ;
			margin: 15 30 40 2;
		}
		#dechead{
			font-family: verdana;
			font-size: 20px;
			color: #292929;
			margin: 0;
		}
		#deccont{
			font-family: verdana;
			font-size: 14px;
			color: #292929;
		}
		#prices{
			display: inline;
			font-family: verdana;
			font-size: 30px;
			color: #292929;
		}
		#price{
			display: inline;
			font-family: verdana;
			margin: 2px;
			color:  #292929;
			font-size: 40px;
		}
		#size{
			display: inline;
			font-family: verdana;
			font-size: 18px;
			color: #292929;
			margin: 2px;
		}
		#sizec1{
			display: inline;
			font-family: verdana;
			font-size: 16px;
			color: #292929;
			margin: 10px;
			padding: 7 11 7 11;
			border: 2px solid #15C0EA;
			
		}
		#sizec2{
			display: inline;
			font-family: verdana;
			font-size: 18px;
			color: #292929;
			margin: 10px;
			padding: 7 13 7 13;
			border: 2px solid #15C0EA;
			
		}
		#sizec3{
			display: inline;
			font-family: verdana;
			font-size: 18px;
			color: #292929;
			margin: 10px;
			padding: 7 9 7 9;
			border: 2px solid #15C0EA;
			
		}
		#sizec4{
			display: inline;
			font-family: verdana;
			font-size: 18px;
			color: #292929;
			margin: 10px;
			padding: 7 4 7 4;
			border: 2px solid #15C0EA;
			
		}
		#btn{
			background-repeat: no-repeat;
			background-size: cover;
			!padding-top: 10px;
			!padding-bottom:10px;
			background-color: white;
			text-decoration: none;
		}
		#btn1{
			font-family: verdana;
			font-size: 18px;
			text-align: center;
			text-decoration: none;
			padding-top: 10px;
			padding-bottom:10px;
			padding-left: 50px;
			padding-right: 50px;
			display: inline-block;
			margin: 10px;
			cursor: pointer;
			background-color:#2BCAF1;
			color: white;
			border: none;
			border-radius: 2px;
		}
		#btn1:hover{
			background-color: white;
			color: #2BCAF1;
			border: 1px solid #2BCAF1;
		}
		#!btn2{
			font-family: verdana;
			font-size: 18px;
			!text-align: center;
			text-decoration: none;
			padding-top: 50px;
			!padding-bottom:110px;
			!padding-left: 0;
			display: inline-block;
			margin: 10px;
		}
		#!btn2 a{
			color: #2BCAF1;
			padding: 10px 35px;
			!background-color:#2BCAF1; 
			border: 1px solid #2BCAF1;
			border-radius: 2px
		}
		#!btn2 a:hover{
			background-color: #2BCAF1;
			color: white;
			border: 0px solid #2BCAF1;
		}
		#edate,#cod{
			font-family: verdana;
			font-size: 10px;
			color: #292929;
			margin: 2px;
			padding-left: 10px;
			padding-top: 20px;
			font-weight : bold;
		}
		#br{
			background-color: #C9C9C9 ;
		}
		#br p{
			padding-top: 20px;
			padding-bottom: 20px;
			font-family: verdana;
			font-size: 18px;
			color: #353535;
			text-align: center;
		}
		#sugtxt{
			padding-top: 18px;
			padding-botton: 30px;
			padding-left: 100px;
			font-family: verdana;
			font-size: 18px;
			color: #292929;
		}
		#suggest{
			display: flex;
			padding-left: 80px;
			padding-right:80px;
			padding-bottom:20px;
			
		}
		#ymal{
			width: 100%;
			display:inline;
			margin: 15px;
			text-align: center;
			padding-bottom: 10px;
		}
		#ymal img{
			padding-bottom: 10px;
		}
		#ymal p{
			font-family: verdana;
			font-size: 17px;
			color: #292929;
			margin:0;
			text-align: left;
			padding-left: 5px;
		}
		#foot{
			background-color: #231f20;
			padding-left:100px;
			padding-top:70px;
			padding-bottom:79px;
			!height: 58%;
		}
		#flogo{
			padding-top: 0px;
		}
		#fdetail{
			display: flex;
			!padding-left: 80px;
			!padding-right:80px;
			
		}
		#fitem{
			padding-top: 20px;
			display: inline;
			margin: 5px;
			padding-right: 105px;
		}
		#fitem h3{
			font-family: verdana;
			font-size: 13px;
			color: #1F9CBB;
		}
		#fitem a{
			font-family: verdana;
			font-size: 12px;
			color: white
		}
		#fitem p{
			margin: 2px;
		}
		#fitem i{
			font-size: 15px;
			color: #1F9CBB;
			padding-bottom:10px;
			padding-right: 5px;
		}
		#faline i{
			!font-size: 15px;
			!color: #1F9CBB;
			!padding-bottom:10px;
			padding-right: 20px;
		}
		#email{
			font-family: verdana;
			font-size: 15px;
			background-color: #231f20;
			border-bottom: 2px solid #1F9CBB;
			border-top: none;
			border-left: none;
			border-right: none;
			height: 30px;
			width: 150px;
			color: #1F9CBB;
		}
		#submit{
			font-family: verdana;
			font-size: 13px;
			background-color:#1F9CBB;
			border-bottom: none;
			border-top: none;
			border-left: none;
			border-right: none;
			height: 30px;
			width: 120px;
			color: #0A0A0A;
		}
		#fdetail2{
			display: flex;
			!padding-left: 80px;
			!padding-right:80px;
			
		}
		#fitem2{
			padding-top: 20px;
			display: inline;
			margin: 5px;
			padding-right: 90px;
		}
		#fitem2 h3{
			font-family: verdana;
			font-size: 13px;
			color: #1F9CBB;
		}
		#fitem2 p{
			font-family: verdana;
			font-size: 12px;
			color: white;
			!margin: 2px;
		}
		</style>
</head>
<body height="100%" width="100%">
	<section>
		<header>
			<nav id = "nav">
					<div>
						<ul>
							<li id="logolist"><a href="home.php">
							<img id = "logo" src="img/logo2.png" vspace = "0" hspace = "0" height="45" width="130" >
							</a></li>
						</ul>						
					</div>
					<div class="menu">
					<ul id="ul1">
						<li id="mlist"><a href="home.php">HOME</a></li>
							<li id="mlist"><a href="aboutus.php">ABOUT</a></li>
							<li id="mlist"><a href="howitworks.php">HOW IT WORKS</a></li>
							<li id="mlist" class= "dropdown"><a href="shop.php">SHOP</a>
								<ul id = "drop-menu">
								<li><a href="hteepg1.php">Half Sleeve T-Shirt</a></li>
								<li><a href="fteepg1.php">Full Sleeve T-Shirt</a></li>
								<li><a href="pteepg1.php">Polo T-Shirt</a></li>
								</ul>
							</li>
						<!--<li id="mlist"><a href="men.php">MEN</a></li>
						<li id="mlist"><a href="women.php">WOMEN</a></li>
						<li id="mlist"><a href="acces.php">ACCESSORIES</a></li>-->
					</ul>
					<ul id= "ul2">
						<li id="mlist">
							<div id="searchContainer"> 
									<input id= "searchinput" placeholder=" Joggers, Superman T-Shirt, iPhone 6 Covers etc." type="text"> 
									<label for="searchInput" title="Search" rel="tooltip"></label> 
							</div>
						</li>
						<?php 
								if(isset($_SESSION['username'])){ 
									echo '<li id="mlist"><a href="logout.php">Hi! '.$_SESSION['username'].'</a>
											<ul id = "drop-menu">
												<li><a href="myaccount.php">My Account</a></li>
												<li><a href="logout.php">Logout</a></li>
											</ul>
										</li>';
								}
								else
								{
									echo '<li id="mlist"><a href="login.php">LOGIN</a></li>';
								}
							?>
							<!--<li id="mlist"><a href="">LOGIN</a></li>-->        
						<li id="mlist">
							<img id = "cart" src="img/cart.png" vspace = "0" style="padding:10px">
							<span id="cartcount" style="color: white"><?php echo $tval;?></span>
						</li>   
					</ul>
					</div>
			</nav>
		</header>
	</section>
	
	
	<section id= "main">
		
		  <form action="ordersubmit.php">
			<div class="form-container">
				<div class="personal-information">
					<h1>Payment Information</h1>
				</div> <!-- end of personal-information -->
				<input id="input-field" type="text" name="streetaddress" required="required" autocomplete="on" maxlength="45" placeholder="Street Address"/>

				<input id="column-left" type="text" name="city" required="required" autocomplete="on" maxlength="20" placeholder="City"/>

				<input id="column-right" type="text" name="zipcode" required="required" autocomplete="on" pattern="[0-9]*" maxlength="6" placeholder="PIN code"/>
			  
				<input id="input-field" type="email" name="email" required="required" autocomplete="on" maxlength="40" placeholder="Email"/>
			
				<div class="card-wrapper"></div>
				<input id="column-left" type="text" name="first-name" placeholder="First Name"/>
			  
				<input id="column-right" type="text" name="last-name" placeholder="Surname"/>
			  
				<input id="input-field" type="text" name="number" placeholder="Card Number"/>
			 
				<input id="column-left" type="text" name="expiry" placeholder="MM / YY"/>
				
				<input id="column-right" type="text" name="cvc" placeholder="CCV"/>
			
				<input id="input-button" type="submit" value="Submit"/>
		</form>
		  </div> <!-- end of form-container -->		
	</section> <!-- end of form-container -->

		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<!--<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/card.js'></script>-->
		<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/121761/jquery.card.js'></script>
		<script type="text/javascript" src="js/index.js"></script>
		
	
	
	
	
	<div>
		<footer id="foot">
				<div id="flogo">
					<a href="home.php"><img src="img/logo2.png" height="15%" width="15%"></a>
				</div>
				<div id="fdetail">
					<div id="fitem">
							<h3>CUSTOMER SERVICES</h3>
							<p><a href="#contact.php">Contact</a></p>
							<p><a href="#track.php">Track Order</a></p>
							<p><a href="#acces.php">Return Order</a></p>
							<p><a href="#women.php">Cancel Order</a></p>
							<p><a href="#acces.php">FAQ</a></p>
					</div>
					<div id="fitem">
							<h3>COMPANY</h3>
							<p><a href="aboutus.php">About Us</a></p>
							<p><a href="">Careers</a></p>
							<p><a href="">Terms and Conditions</a></p>
							<p><a href="">Privacy Policy</a></p>
							<p><a href="">Blog</a></p>
					</div>
					<div id="fitem">
							<h3>CONNECT WITH US</h3>
							<a href="https://www.facebook.com"><i class="fa fa-facebook-official" aria-hidden="true"></i> 2.3 M People Like This</a><br>
							<a href="https://www.instagram.com"><i class="fa fa-instagram" aria-hidden="true"></i> 120K Followers</a><br>
							<div id ="faline">
								<a href="https://www.twitter.com"><i  class="fa fa-twitter" aria-hidden="true"></i></a>
								<a href="https://www.googleplus.com"><i  class="fa fa-google-plus" aria-hidden="true"></i></a>
								<a href="https://www.pinterest.com"><i  class="fa fa-pinterest" aria-hidden="true"></i></a>
								<a href="https://www.apple.com"><i  class="fa fa-apple" aria-hidden="true"></i></a>
								<a href="https://www.android.com"><i  class="fa fa-android" aria-hidden="true"></i></a>
							</div>
					</div>
					<div id="fitem">
							<h3>KEEP UP TO DATE</h3>
							<div> <input id="email" type="email" placeholder="Enter Email Id"> <input id="submit" type="" value="SUBSCRIBE"> </div>
					</div>
				</div>
				<br>
				<div id="fdetail2">
					<div id="fitem2">
						<p>15 Days return policy</p>
						<p>Cash on delivery</p>
						<p>Free Shipping above &nbsp &#8377 500</p>
					</div>
					<div id="fitem2">
						<h3>Download The App</h3>
						<a href="https://play.google.com"><img src="img/android.png" height="35%" width="35%"></a>
						<a href="https://appstore.com"><img src="img/ios.png" height="35%" width="35%"></a>
					</div>
					<div id="fitem2">
						<h3>100% SECURE PAYMENT</h3>
						<img src="img/payment.png" height="90%" width="90%">
					</div>				
				</div>
		<footer>
	</div>
	
</body>
</html>