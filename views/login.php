<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
	$ehe = $this->session->userdata('nama');
	if(!empty($ehe)){
		header("Location: admin");
	}
?>

<!DOCTYPE html>
<html>

<!-- Head -->
<head>

<title>Login</title>

<!-- Meta-Tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="Natural Signin Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //Meta-Tags -->

<!-- Style --> <link rel="stylesheet" href="<?php echo base_url('assets1/css/style.css');?>" type="text/css" media="all">

<!-- Fonts -->
<link href="//fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
<!-- //Fonts -->

</head>
<!-- //Head -->

<!-- Body -->
<body>
<div class="banner">
<div class="agileinfo-dot">
	<h1>ADMIN SHINTA</h1>

	<div class="w3layoutscontaineragileits">
	<h2>Log In</h2>
		<form action="<?php echo base_url('index.php/Login/do_login');?>" method="post">
			<input type="text" Name="Username" placeholder="USERNAME" required="">
			<input type="password" Name="Password" placeholder="PASSWORD" required="">
			<ul class="agileinfotickwthree">
				<li>
					<input type="checkbox" id="brand1" value="">
				</li>
			</ul>
			<div class="aitssendbuttonw3ls">
				<input type="submit" value="LOG IN">
				<div class="clear"></div>
			</div>
		</form>
	</div>
	
	
	<div class="w3footeragile">
		<p> &copy; 2017 Shinta. All Rights Reserved | Design by W3layouts</a></p>
	</div>

</div>
</div>
	
	
	

</body>
<!-- //Body -->

</html>