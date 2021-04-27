
<!DOCTYPE HTML>
<html>
<head>
    <?php \fw\core\base\View::getMeta() ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='//fonts.googleapis.com/css?family=Marcellus+SC' rel='stylesheet' type='text/css'>
    <link href="/public/bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
    <link href="/public/blog/css/style.css" rel="stylesheet" type="text/css" media="all" />
</head>
<body>
<!--start header-->
<div class="h_bg">
<div class="wrap">
<div class="wrapper">
	<div class="header">
		<div class="logo">
			 <a href="/"><img src="/public/blog/images/logo.png"> </a>
		</div>
		<div class='cssmenu'>
			<ul>
			   	<li><a href='/'><span>Главная</span></a></li>
	   			<li><a href='/about/index'><span>О нас</span></a></li>
				<li class='has-sub'><a href='/service/index'><span>Сервесы</span></a></li>
	 			<li  class='active' class='last'><a href='/app/views/layouts/contact.php'><span>Наши контакты</span></a></li>
			 <div class="clear"></div>
			 </ul>
		</div>
		<div class="search">
    		<form>
    			<input type="text" value="" placeholder="Enter Your search...">
    			<input type="submit" value="">
    		</form>
            <br><br>
            <?php new \fw\widgets\language\Language(); ?>
		</div>
		<div class="clear"></div>
</div>
</div>
</div>
</div>
<!-- start content -->
<?=$content; ?>
<!-- start footer -->
<div class="footer_bg">
<div class="wrap">
<div class="wrapper">
<div class="footer">
	<div class="section group">
		<div class="col_1_of_3 span_1_of_3">
			<h3>Testimonials</h3>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
		</div>
		<div class="col_1_of_3 span_1_of_3">
			<h3>Information</h3>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Interne.</p>
		</div>
		<div class="col_1_of_3 span_1_of_3">
			<h3>Contact Us</h3>
			<ul class="f_nav">
				<li>Lorem Ipsum available,</li>
				<li>22-56-2-9 Sit Amet, Lorem,</li>
				<li>There are many variations,</li>
				<li>USA</li>
				<li>fax:(00) 000 000 000 </li>
				<li>Phone:(00) 222 666 444 </li>
				<li>Email:<a href=""> <span><a href="mailto:info@example.com">mail@example.com</a></span></a></li>
			</ul>
		</div>
		<div class="clear"></div>
	</div>
</div>
</div>
</div>
</div>
<div class="f_bg">
<div class="wrap">
<div class="wrapper">
	<div class="footer1">
		<div class="social-icons">
	   		  	<ul>
	 			  <li class="icon1"><a href="#" target="_blank"> </a></li>
			      <li class="icon2"><a href="#" target="_blank"> </a></li>
			      <li class="icon3"><a href="#" target="_blank"> </a></li>
			      <li class="icon4"><a href="#" target="_blank"> </a></li>
			      <div class="clear"></div>
		     </ul>
		 </div>
	 	<div class="logo1">
		 	<a href="/"><img src="/public/blog/images/logo1.png"> </a>
		</div>
		<div class="copy">
			<p class="link"><span>© Quarry. All rights reserved | Design by&nbsp; <a href="http://w3layouts.com/"> W3Layouts</a></span></p>
		</div>
	</div>
</div>
</div>
</div>
</body>
</html>