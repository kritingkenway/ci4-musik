<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Detail | Mlijo</title>
    <link href="<?php base_url() ?>/assets/frontend/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php base_url() ?>/assets/frontend/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php base_url() ?>/assets/frontend/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php base_url() ?>/assets/frontend/css/price-range.css" rel="stylesheet">
    <link href="<?php base_url() ?>/assets/frontend/css/animate.css" rel="stylesheet">
    <link href="<?php base_url() ?>/assets/frontend/css/main.css" rel="stylesheet">
    <link href="<?php base_url() ?>/assets/frontend/css/responsive.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="<?php base_url() ?>/assets/frontend/images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php base_url() ?>/assets/frontend/images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php base_url() ?>/assets/frontend/images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php base_url() ?>/assets/frontend/images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php base_url() ?>/assets/frontend/images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <header id="header"><!--header-->
        <div class="header_top"><!--header_top-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="contactinfo">
                            <ul class="nav nav-pills">
                                <li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
                                <li><a href="#"><i class="fa fa-envelope"></i> alatmusik@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="social-icons pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header_top-->

        <div class="header-middle"><!--header-middle-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="logo pull-left">
                            <!--a href="index.html"><img src="assets/images/home/logo.png" alt="" /></a-->
                        </div>

                    </div>
                    <div class="col-sm-8">
                        <div class="shop-menu pull-right">
                            <ul class="nav navbar-nav">
                                <li><a href="/"><i class="fa fa-home"></i> Halaman Utama</a></li>

                                <li><a href="/collection"><i class="fa fa-user"></i> Daftar Barang</a></li>
                                <?php if (session()->has('logged-in')) { ?>
                                    <li><a href="/logout"><i class="fa fa-lock"></i> Log Out</a></li>
                                <?php } else { ?>
                                    <li><a href="/login"><i class="fa fa-lock"></i> Log In</a></li>

                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-middle-->

        <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu pull-left">

                        </div>
                    </div>

                </div>
            </div>
        </div><!--/header-bottom-->
    </header> <!--/header-->

    <section>
        <div class="container">
            <div class="row">
                <!--?php $this->load->view('frontend/sidebar');?-->

                <div class="col-sm-12 padding-right">
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-5">
                            <div class="view-product">
                                <img src="http://localhost/kelompok/images/accordion.jpg" alt="" />
                            </div>


                        </div>
                        <div class="col-sm-7">
                            <div class="product-information"><!--/product-information-->

                                <h2><?= $produk['nama_barang'] ?></h2>
                                <p>Web ID: 32</p>
                                <!--img src="<!?php echo base_url('assets/frontend/') ?>/images/product-details/rating.png" alt="" /-->
                                <span>
                                    <span><?= number_to_currency($produk['harga_barang'], 'IDR') ?></span>
                                    <!-- <label>Quantity:</label>
                                    <input type="number" value="1" min="1" /> -->
                                    <br />
                                    <a href="/cart/<?= $produk['id_barang'] ?>">
                                        <button type="button" class="btn btn-fefault cart">
                                            <i class="fa fa-shopping-cart"></i>
                                            Add to cart
                                        </button>
                                    </a>
                                </span>
                                <p><b>Availability:</b> <?= $produk['stok_barang'] ?> Remaining</p>
                                <!--p><b>Condition:</b> New</p>
			<p><b>Brand:</b> E-SHOPPER</p-->

                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->

                    <div class="category-tab shop-details-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#reviews" data-toggle="tab">Detail Produk</a></li>
                                <li><a href="#details" data-toggle="tab">Company Profile</a></li>
                            </ul>
                        </div>
                        <div class="tab-content">

                            <div class="tab-pane fade active in" id="reviews">
                                <div class="col-sm-12">

                                    <p>Deskripsi AKAN DIMUNCULKAN DISNI</p>

                                </div>
                            </div>
                            <div class="tab-pane fade " id="details">
                                <div class="col-sm-5">
                                    <table>
                                        <tr>
                                            <td rowspan="4"><img alt="LOGO" title="LOGO" style="width:250px;height:250px" /></td>
                                            <td style="width:100px">Nama Pelapak</td>
                                            <td style="width:10px">:</td>
                                            <td>AA</td>
                                        </tr>
                                        <tr>

                                            <td>Email</td>
                                            <td>:</td>
                                            <td>AA</td>
                                        </tr>
                                        <tr>

                                            <td>Alamat</td>
                                            <td>:</td>
                                            <td>AA</td>
                                        </tr>
                                        <tr>

                                            <td>Telpon</td>
                                            <td>:</td>
                                            <td>AA</td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="col-sm-7">
                                    <div id="googleMap" style="width:100%;height:400px;"></div>
                                    <script>
                                        function myMap() {
                                            var mapProp = {
                                                center: new google.maps.LatLng(51.508742, -0.120850),
                                                zoom: 5,
                                            };
                                            var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
                                        }
                                    </script>
                                </div>

                            </div>
                        </div>
                    </div><!--/category-tab-->
                    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
                </div>
            </div>
        </div>
    </section>

    <!--Footer-->
    <footer id="footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="companyinfo">
                            <h2><span>Alat Musik</span>-online</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
                        </div>
                    </div>
                    <div class="col-sm-7">
                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="http://localhost/musik/assets/frontend/images/home/iframe1.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="http://localhost/musik/assets/frontend/images/home/iframe2.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="http://localhost/musik/assets/frontend/images/home/iframe3.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <div class="video-gallery text-center">
                                <a href="#">
                                    <div class="iframe-img">
                                        <img src="http://localhost/musik/assets/frontend/images/home/iframe4.png" alt="" />
                                    </div>
                                    <div class="overlay-icon">
                                        <i class="fa fa-play-circle-o"></i>
                                    </div>
                                </a>
                                <p>Circle of Hands</p>
                                <h2>24 DEC 2014</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="address">
                            <img src="http://localhost/musik/assets/frontend/images/home/map.png" alt="" />
                            <p>505 S Atlantic Ave Virginia Beach, VA(Virginia)</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-widget">
            <div class="container">
                <div class="row">
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Service</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Online Help</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Order Status</a></li>
                                <li><a href="#">Change Location</a></li>
                                <li><a href="#">FAQ’s</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Quock Shop</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">T-Shirt</a></li>
                                <li><a href="#">Mens</a></li>
                                <li><a href="#">Womens</a></li>
                                <li><a href="#">Gift Cards</a></li>
                                <li><a href="#">Shoes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>Policies</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privecy Policy</a></li>
                                <li><a href="#">Refund Policy</a></li>
                                <li><a href="#">Billing System</a></li>
                                <li><a href="#">Ticket System</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href="#">Company Information</a></li>
                                <li><a href="#">Careers</a></li>
                                <li><a href="#">Store Location</a></li>
                                <li><a href="#">Affillate Program</a></li>
                                <li><a href="#">Copyright</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3 col-sm-offset-1">
                        <div class="single-widget">
                            <h2>About Shopper</h2>
                            <form action="#" class="searchform">
                                <input type="text" placeholder="Your email address" />
                                <button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
                                <p>Get the most recent updates from <br />our site and be updated your self...</p>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <p class="pull-left">Copyright © 2017 Alat Musik-Online Inc. All rights reserved.</p>
                    <p class="pull-right">Designed by <span><a target="_blank" href="">AlamatMusik.com</a></span></p>
                </div>
            </div>
        </div>

    </footer> <!--/Footer-->



    <script src="http://localhost/musik/assets/frontend/js/jquery.js"></script>
    <script src="http://localhost/musik/assets/frontend/js/bootstrap.min.js"></script>
    <script src="http://localhost/musik/assets/frontend/js/jquery.scrollUp.min.js"></script>
    <script src="http://localhost/musik/assets/frontend/js/price-range.js"></script>
    <script src="http://localhost/musik/assets/frontend/js/jquery.prettyPhoto.js"></script>
    <script src="http://localhost/musik/assets/frontend/js/main.js"></script>
</body>

</html>