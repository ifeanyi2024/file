<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['uname'])) {

 ?>
 

<?php 


    require_once("connection.php");
    $query = " select * from registertion ";
    $result = mysqli_query($con,$query);

?>

<!DOCTYPE HTML>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Law Firm</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="clearfix">
			<div class="logo">
				<a href="index.html"><img src="images/logo.png" alt="LOGO" height="52" width="362"></a>
			</div>
			<ul class="navigation">
				<li>
					<a href="view.php">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="practices.html">Practices</a>
				</li>
				<li>
					<a href="lawyers.html">Our Lawyers</a>
				</li>
				<li>
					<a href="news.html">News</a>
					<div>
						<a href="singlepost.html">News Single Post</a>
					</div>
				</li>
				<li class="active">
					<a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div class="clearfix">
			<div class="sidebar">
				<div>
					<h2>Contact Info</h2>
					<ul class="contact">
						<li>
							<p>
								<span class="home"></span> <em>Manes Winchester<br> Family Law Firm</em> the address city, state 1111
							</p>
						</li>
						<li>
							<p class="phone">
								Phone: (+20) 000 222 999
							</p>
						</li>
						<li>
							<p class="fax">
								Fax: (+20) 000 222 988
							</p>
						</li>
						<li>
							<p class="mail">
								Email: info@freewebsitetemplates.com
							</p>
						</li>
					</ul>
				</div>
			</div>
			<div class="main">
				<h1>Contact</h1>
				<h2>Send Us a Quick Message</h2>
				<p>
					You can remove any link to our website from this website template, you're free to use this website template without linking back to us.If you're having problems editing this website template, then don't hesitate to ask for help on the Forums.
				</p>
				<form action="insert.php" method="post" class="message">
					<label>First Name</label>
					<input type="text" name="fname">
					<label>Last Name</label>
					<input type="text" name="lname">
					<label>Email Address</label>
					<input type="text" name="email">
					<label>Message</label>
					<!--input type="message" name="message"--->
					<textarea name="message" id="" cols="30" rows="10"></textarea>
					<button name="submit">send</button>
				</form>
			</div>
		</div>
	</div>
	<div id="footer">
		<div class="clearfix">
			<div class="section">
				<h4>Latest News</h4>
				<p>
					This website template has been designed by Free Website Templates for you, for free. You can replace all this text with your own text. You can remove any link.
				</p>
			</div>
			<div class="section contact">
				<h4>Contact Us</h4>
				<p>
					<span>Address:</span> the address city, state 1111
				</p>
				<p>
					<span>Phone:</span> (+20) 000 222 999
				</p>
				<p>
					<span>Email:</span> info@freewebsitetemplates.com
				</p>
			</div>
			<div class="section">
				<h4>SEND US A MESSAGE</h4>
				<p>
					If you're having problems editing this website template, then don't hesitate to ask for help on the Forums.
				</p>
				<a href="http://www.freewebsitetemplates.com/misc/contact/" class="subscribe">Click to send us an email</a>
			</div>
		</div>
		<div id="footnote">
			<div class="clearfix">
				<div class="connect">
					<a href="http://freewebsitetemplates.com/go/facebook/" class="facebook"></a><a href="http://freewebsitetemplates.com/go/twitter/" class="twitter"></a><a href="http://freewebsitetemplates.com/go/googleplus/" class="googleplus"></a><a href="http://pinterest.com/fwtemplates/" class="pinterest"></a>
				</div>
				<p>
					© Copyright 2023 Manes Winchester. All Rights Reserved.
				</p>
			</div>
		</div>
	</div>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>