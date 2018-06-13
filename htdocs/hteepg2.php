<?php 
	session_start();
	require('connect.php');
	
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
	
		<title>
		Half Sleeve T-Shirt
		</title>
	<script src="./js/redirectcart.js"></script>
	<script src="./js/basiccart.js"></script>
		<script src="https://use.fontawesome.com/7bcf909bab.js"></script>
	
	
		<style>
			html,body {
				margin:0;
				padding:0;
				display:flex;
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
				padding-top: 75px;
			}
			#slider img{
				!margin:0px;
				!padding-left:8px;
				!width: 150%;
				!height: 100%;
			}
			#bread{
				padding-left: 300px;
				padding-top: 20px;
				padding-botton: 20px;
				}
			#bread p{
				text-decoration: none;
				font-family: sans-serif;
				font-size: 13px;
				color: #505050;
			}
			#bread a{
				color: #505050;
			}
			
			#submain{
				padding-left: 100px;
				padding-top: 20px;
				display:flex;
			}
			#sidebar{
				!width: 20%;
				display:inline;
				
			}
			#sidebar a{
				font-family: sans-serif;
				font-size: 13px;
				color: #464646;
				!border-top: 2px solid #1F9CBB;
				!padding-top: 20px;
				!padding-botton:50px;
				!padding-left: 0px;
				!padding-right: 20px;
			}
			#sidebar h3{
				padding-top: 5px;
				padding-bottom: 5px;
				
			}
			#sidebar hr{
				width: 130px;
				text-align:left;
			}
			#contentbox{
				display: inline;
			}
			#suggest{
				display: flex;
				padding-left: 50px;
				padding-right:80px;
				padding-bottom:20px;
				
			}
			#ymal{
				width: 100%;
				display:inline;
				margin: 5px;
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
			#bread2{
				padding-right: 10px;
				padding-top: 1px;
				padding-bottom: 1px;
				background-color: #F5F5F5;
				margin: 10px 80px 37px 285px;
			}
			#bread2 p{
				text-decoration: none;
				font-family: sans-serif;
				!padding-right: 5px;
				!padding-bottom: 20px;
				font-size: 13px;
				!color: ##222222;
				text-align:right;
				margin: 8px;
			}
			#p1,#p3,#p4{  !Edit Here;
				color: #222222;
				padding-bottom:3px;
			}
			#p2{  !Edit Here;
				color: #1F9CBB;
				border-bottom: 2px solid #1F9CBB;
				padding-left:5px;
				padding-right:5px;
				padding-bottom:3px;
			}
			#bread2 i{
				font-size: 20px;
			}
			
			
			
			#foot{
				background-color: #231f20;
				padding-left:100px;
				padding-top:70px;
				padding-bottom:79px;
				!height: 58%
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
							<li id="mlist"><a href="">HOW IT WORKS</a></li>
							<li id="mlist" class= "dropdown"><a href="shop.php">SHOP</a>
								<ul id = "drop-menu">
								<li><a href="hteepg1.php">Half Sleeve T-Shirt</a></li>
								<li><a href="fteepg1.php">Full Sleeve T-Shirt</a></li>
								<li><a href="pteepg1.php">Polo T-Shirt</a></li>
								</ul>
							</li>
						</ul>
						<ul id= "ul2">
							<li id="mlist">
								<form id="searchContainer"> 
										<input id= "searchinput" placeholder=" Joggers, Superman T-Shirt, iPhone 6 Covers etc." type="text"> 
										<label for="searchInput" title="Search" rel="tooltip"></label> 
								</form>
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
		<section>
			<div id="main">
				<div id= "slider">
					<img src="img/hteeslider2.jpg" width="100%">
				</div>
				<div id="bread">
					<p><a href="men.php">Men</a> &nbsp / &nbsp <a href="hteepg2.php">Half Sleeve T-Shirt's</a></p><!--Edit Here-->
				</div>
				<div id ="submain">
					<div id="sidebar">
						<hr align="left"><h3><a href="hteepg1.php">Half Sleeve T-Shirt</a></h3>
						<hr align="left"><h3><a href="">Full Sleeve T-Shirt</a></h3>
						<hr align="left"><h3><a href="">Polo T-Shirt  </a></h3>
						<hr align="left"><h3><a href="">Casual Shirt  </a></h3>
						<hr align="left">
					</div>
					<div id="contentbox">
						<div id="suggest">
							<div id= "ymal">
								<a href="htee7.php"><img src="img/htee7.jpg" height="620px" width="495px">
								<p>Mountains (Reggae Colours)</p>
								<p>&#8377 445</p></a>
							</div>
							<div id= "ymal">
								<a href="htee8.php"><img src="img/htee8.jpg" height="620px" width="495px">
								<p>Minimal Cycle</p>
								<p>&#8377 495</p></a>
							</div>
							<div id= "ymal">
								<a href="htee9.php"><img src="img/htee9.jpg" height="620px" width="495px">
								<p>Ninja Chop</p>
								<p>&#8377 445</p></a>
							</div>
						</div>
						<div id="suggest">
							<div id= "ymal">
								<a href="htee10.php"><img src="img/htee10.jpg" height="620px" width="495px">
								<p>Interstellar Superman (GID) (SL)</p>
								<p>&#8377 495</p></a>
							</div>
							<div id= "ymal">
								<a href="htee11.php"><img src="img/htee11.jpg" height="620px" width="495px">
								<p>Psy</p>
								<p>&#8377 546</p></a>
							</div>
							<div id= "ymal">
								<a href="htee12.php"><img src="img/htee12.jpg" height="620px" width="495px">
								<p>Flash Logo (Bold Red) (DCL)</p>
								<p>&#8377 546</p></a>
							</div>
						</div>
					</div>
				</div>
				<div id="bread2"><!--Edit Here-->
					<b><p><i class="fa fa-angle-left" aria-hidden="true"></i> &nbsp  &nbsp <a id="p1" href="hteepg1.php">1</a> &nbsp  &nbsp <a id="p2" href="hteepg2.php">2</a> &nbsp  &nbsp <a id="p3" href="hteepg3.php">3</a> &nbsp  &nbsp <a id="p4" href="">4</a> &nbsp  &nbsp <i class="fa fa-angle-right" aria-hidden="true"></i></p><b><!--Edit Here-->
				</div>
			</div>
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
							<form> <input id="email" type="email" placeholder="Enter Email Id"> <input id="submit" type="submit" value="SUBSCRIBE"> </form>
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
		</section>
	
	</body>
</html>