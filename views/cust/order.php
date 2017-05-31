<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
<title>Sari Kedelai Shinta dan Oleh Oleh Khas Kediri | Order Form</title>
<link href="<?php echo base_url('assets3/css/bootstrap.css');?>" rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php echo base_url('assets3/js/jquery.min.js');?>"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?php echo base_url('assets3/css/style.css');?>" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Cookery Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!---->
<link href='//fonts.googleapis.com/css?family=Raleway:400,200,100,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
<link href="<?php echo base_url('assets3/css/styles.css');?>" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets3/css/component.css');?>" />
	<!-- animation-effect -->
<link href="<?php echo base_url('assets3/css/animate.min.css');?>" rel="stylesheet"> 
<script src="<?php echo base_url('assets3/js/wow.min.js');?>"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->

</head>
<body>
<div class="header head">
	<div class="container">
		<div class="logo">
			<h1><a href="<?php echo site_url('Home/lala');?>"<span>S</span>hinta</a></h1>
		</div>
		<div class="nav-icon">		
			<a href="#" class="navicon"></a>
				<div class="toggle">
					<ul class="toggle-menu">
						<li><a  href="<?php echo site_url('Home/lala');?>">Home</a></li>
						<li><a  href="<?php echo site_url('Home/menu');?>">Menu</a></li>
						<li><a  href="<?php echo site_url('Home/events');?>">Events</a></li>
						<li><a  href="<?php echo site_url('Home/order');?>">Order</a></li>
						<li><a  href="<?php echo site_url('Home/contacts');?>">Contact</a></li>
					</ul>
				</div>
			<script>
			$('.navicon').on('click', function (e) {
			  e.preventDefault();
			  $(this).toggleClass('navicon--active');
			  $('.toggle').toggleClass('toggle--active');
			});
			</script>
		</div>
	<div class="clearfix"></div>
	</div>
	<!-- start search-->	
		
</div>
<!--content-->
	<div class="contact">
		<div class="container">
		<div class="menu-top">
				<div class="col-md-4 menu-left animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h3>Order Form</h3>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<span>Sari Kedelai dan Oleh Oleh Khas Kediri.</span>
				</div>
				<div class="clearfix"> </div>
			
			</div>
			<div class="col-md-7 contact-para animated wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="500ms">

			<form action="<?php echo base_url().'index.php/Home/email()/';?>">
				<div class="grid-contact">
						<p class="your-para">Name </p>
							<input type="text" name="nama" placeholder="Nama Panjang" class="form-control" required="required">
				</div>
					<div class="clearfix"> </div>
				<div class="grid-contact">
						<p class="your-para">Email </p>
							<input type="email" name="email" placeholder="shinta@gmail.com" class="form-control" required="required">
				</div>
					<div class="clearfix"> </div>
				<div class="grid-contact">
						<p class="your-para">Phone Number </p>
							<input type="text" name="hp" placeholder="contoh: 081231232301" class="form-control" required="required">
				</div>
					<div class="clearfix"> </div>
				<div class="grid-contact">
						<p class="your-para">Order </p>
							<select name="pesan" class="col-sm-6">
							<?php foreach ($hehe as $d)  { ?>
                                <option value="Tahu Kuning"><?= $d['nama_barang'] ?> </option>
                             <?php } ?>
                            </select> 
				</div>
					<div class="clearfix"> </div>
				<div class="grid-contact">
						<p class="your-para">Quantity </p>
							<input type="text" name="quantity" placeholder="Jumlah" class="form-control" required="required">
				</div>
					<div class="clearfix"> </div>
				<div class="grid-contact">
					<p class="your-para msg-para">Delivery Address</p>
					<textarea cols="77" rows="6" name="deliv" id="message" required="required" class="form-control" rows="3" placeholder="Tuliskan alamat lengkap anda, baik rumah, apartemen dan kantor (Nama jalan, nomor rumah, kecamatan, dan Kode Pos)" ></textarea>
				<div class="grid-contact">
						<p class="your-para">Bank Payment </p>
							<select name="payment" class="col-sm-6"> 
                                <option value="bca">BCA</option>
                                <option value="mandiri">Mandiri</option>
                                <option value="mandiri">BRI</option>
                                <option value="mandiri">BNI</option>
                            </select> 
				</div>
					<div class="clearfix"> </div>
				<div class="grid-contact">
					<p class="your-para msg-para">Delivery Address</p>
					<textarea cols="77" rows="6" name="message" id="message" class="form-control" rows="3" placeholder="Jika order anda lebih dari 1 menu, silahkan tuliskan pesanan anda disini"></textarea>
				</div>
					<div class="clearfix"> </div>
					<div class="submit">
						<input type="submit" name="submit" required="required">
					</div>
				</div>
			</form>
			</div>	
			
			<div class="clearfix"> </div>
		</div>
	</div>
	</div>
<!--footer-->
<div class="footer">
		<div class="container">
			<div class="footer-head">
				<div class="col-md-8 footer-top animated wow fadeInRight" data-wow-duration="1000ms" data-wow-delay="500ms">
					<ul class=" in">
						<li><a  href="<?php echo site_url('Home/lala');?>">Home</a></li>
						<li><a  href="<?php echo site_url('Home/menu');?>">Menu</a></li>
						<li><a  href="<?php echo site_url('Home/events');?>">Events</a></li>
						<li><a  href="<?php echo site_url('Home/order');?>">Order</a></li>
						<li><a  href="<?php echo site_url('Home/contacts');?>">Contact</a></li>
					</ul>					
						<span>Sari Kedelai Shinta dan Oleh Oleh Khas Kediri</span>
				</div>
				<div class="col-md-4 footer-bottom  animated wow fadeInLeft" data-wow-duration="1000ms" data-wow-delay="500ms">
					<h2>Shinta</h2>
					<label><i class="glyphicon glyphicon-menu-up"></i></label>
					<p>Banyak hal yang patut kita banggakan dari negara kita, Indonesia. Tidak cuma alamnya yang indah, tapi juga makanan dan jajanannya yang beragam. Memang sekarang jajanan tradisional sering kalah pamor dengan jajanan Indonesia, tapi jangan sampai melupakan lezatnya jajanan tradisional Indonesia!</p>
					

				</div>
			<div class="clearfix"> </div>
					
			</div>
			<p class="footer-class animated wow bounce" data-wow-duration="1000ms" data-wow-delay="500ms">&copy; 2016 Shinta . All Rights Reserved | Design by Shinta</a> </p>
		</div>
	</div>		
	<!--//footer-->

</body>
</html>

