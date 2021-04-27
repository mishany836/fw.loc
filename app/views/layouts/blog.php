<!DOCTYPE HTML>
<html>
<head>
    <?php \fw\core\base\View::getMeta() ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link href='//fonts.googleapis.com/css?family=Marcellus+SC' rel='stylesheet' type='text/css'>
    <link href="/public/bootstrap/css/bootstrap.min.css" rel='stylesheet' type='text/css'>
    <link href="/public/blog/css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--start slider -->
    <script src="/public/blog/js/jquery.min.js"></script>
    <script src="/public/blog/js/responsiveslides.min.js"></script>
    <script>
        // You can also use "$(window).load(function() {"
        $(function () {

            // Slideshow 1
            $("#slider1").responsiveSlides({
                maxwidth: 1600,
                speed: 600
            });
        });
    </script>
    <!--start lightbox -->
    <link rel="stylesheet" type="text/css" href="/public/blog/css/jquery.lightbox.css">
    <script src="/public/blog/js/jquery.lightbox.js"></script>
    <script>
        // Initiate Lightbox
        $(function() {
            $('.gallery a').lightbox();
        });
    </script>
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
                        <li class='active'><a href="/"><span>Главная</span></a></li>
                        <li><a href="/about/index"><span>О нас</span></a></li>
                        <li class='has-sub'><a href="/service/index"><span>Сервис</span></a></li>
                        <li class='last'><a href="/contact/index"><span>Наши контакты</span></a></li>
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
<!-- start slider -->
<div class="slider">
    <div class="image-slider">
        <!-- Slideshow 1 -->
        <ul class="rslides" id="slider1">
            <li><img src="/public/blog/images/slider1.jpg" alt=""></li>
            <li><img src="/public/blog/images/slider2.jpg" alt=""></li>
            <li><img src="/public/blog/images/slider3.jpg" alt=""></li>
        </ul>
        <!-- Slideshow 2 -->
    </div>
    <!--End-image-slider---->
</div>
<!-- start content -->

<div class="content_bg">
         <div class="wrap">
             <h2 style="text-align: center"><?php __('recent_posts');?></h2>
                <div class="wrapper">

                        <?php if (isset($_SESSION['error'])): ?>
                            <div class="alert alert-danger">
                                <?=$_SESSION['error']; unset($_SESSION['error'])?>
                            </div>
                        <?php endif; ?>

                        <?php if (isset($_SESSION['success'])): ?>
                            <div class="alert alert-success">
                                <?=$_SESSION['success']; unset($_SESSION['success'])?>
                            </div>
                        <?php endif; ?>
                        <?=$content;?>

                 <!--    <div class="grid">
                            <div class="gallery">
                                <a href="/blog/images/grids-img5.jpg"><img src="/blog/images/grids-img5.jpg" title="image-name"></a>
                            </div>
                            <h3> ut hendrerit lipsum</h3>
                            <div class="grid_p">
                                <p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
                                <a class="button bg1 grid_btn" href="details.html">read more</a>
                            </div>
                        </div>
                        <div class="grid">
                            <div class="gallery">
                                <a href="/blog/images/grids-img5.jpg"><img src="/blog/images/grids-img6.jpg" title="image-name"></a>
                            </div>
                            <h3>Proin vehicula justo</h3>
                            <div class="grid_p">
                                <p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
                                <a class="button bg3 grid_btn" href="details.html">read more</a>
                            </div>
                        </div>


                    <div class="clear"> </div>-->
                    <!--<div class="grid_s">
                       <div class="grid">
                            <div class="gallery">
                                <a href="/blog/images/grids-img1.jpg"><img src="/blog/images/grids-img2.jpg" title="image-name"></a>
                            </div>
                            <h3>the rhoncus neque</h3>
                            <div class="grid_p">
                                <p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
                                <a class="button bg5 grid_btn" href="details.html">read more</a>
                            </div>
                        </div>
                        <div class="grid ">
                            <div class="gallery">
                                <a href="/blog/images/grids-img3.jpg"><img src="/blog/images/grids-img3.jpg" title="image-name"></a>
                            </div>
                            <h3> ut hendrerit lipsum</h3>
                            <div class="grid_p">
                                <p>Lorem ipsum dolor sit amet consectetur adiing elit. In volutpat luctus eros ac placerat. Quisque erat metus facilisis non feu,aliquam hendrerit quam. Donec ut lectus vel dolor adipiscing tincnt.</p>
                                <a class="button bg6 grid_btn" href="details.html">read more</a>
                            </div>
                        </div>

                    </div>-->
                <div class="clear"> </div>
          </div>
</div>
<!-- start footer -->
    <div class="footer_bg">
       <?php $this->getPart('inc/footer'); ?>
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
                    <div class="logo1 logo_social">
                        <a href="/"><img src="/public/blog/images/logo1.png"> </a>
                    </div>
                    <div class="copy">
                        <p class="link"><span>© Quarry. All rights reserved | Design by&nbsp; <a href="http://w3layouts.com/"> W3Layouts</a></span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <script src="/public/blog/js/main.js"></script>
</body>
</html>