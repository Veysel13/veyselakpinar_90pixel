

<!doctype html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-NJX3X7V');</script>
    <!-- End Google Tag Manager -->

    <!-- Basic Page Needs==================================================-->
    <title>Bul Bul Yap </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <meta name="title" content="Bul Bul Yap">
    <meta name="description" content="Nakliyat , Özel Ders , Temizlik , Montaj ,Tadilat vb. tüm alanlarda 7,000+ Memnun Müşteriye sahibiz.Sizleri hizmet veren ile buluşturalım.">
    <meta name="keywords" content="Giriş Yap,Kayıt Ol,Hizmet,Hizmet Al,Hizmet ver,Nakliyat,Özel Ders,Temizlik,Montaj,Tadilat,Muzik,Usta,Bul Bul Yap">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="Turkish">
    <meta name="revisit-after" content="1 days">
    <meta name="author" content="https://veyselakpinar.com/">


    <!-- CSS==================================================-->
    <base href="<?=BASEURL;?>/Web/">
    <link rel="stylesheet" href="<?=BASEURL;?>Web/assets/plugins/css/plugins.css">
    <link href="<?=BASEURL;?>Web/assets/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="<?=BASEURL;?>Web/assets/css/colors/green-style.css">
    <link href="<?=BASEURL;?>Web/assets/css/custom.css" rel="stylesheet">
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJX3X7V"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="Loader"></div>
<div class="wrapper">
    <nav class="navbar navbar-default navbar-fixed navbar-transparent white bootsnav">
        <div class="container">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu"><i class="fa fa-bars"></i></button>
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <img src="assets/img/footer-logo.png" class="logo logo-display" alt="Bul Bul Yap Logo">
                    <img src="assets/img/logo-white.png" class="logo logo-scrolled" alt="Bul Bul Yap Logo"></a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-menu">
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">

                    <!-- <li><a href="pricing.html"><i class="fa fa-sign-in" aria-hidden="true"></i>Pricing</a></li>-->
                    <!--<li class="left-br"><a href="javascript:void(0)" data-toggle="modal" data-target="#signup" class="signin">Sign In Now</a></li>-->
                </ul>
                <ul class="nav navbar-nav navbar-right" data-in="fadeInDown" data-out="fadeOutUp">

                    <li><a href="/">Anasayfa</a></li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="clearfix"></div>

			<!-- Tab Section Start -->
			<section class="simple-bg-screen big-wrap">
				<div class="container">
					<div class="error-page">
						<h2>4<span>0</span>4</h2>
						<p><?php
                            $deger= \System\General\Session::get("error_message");
                            echo $deger["message"];
                            \System\General\Session::delete("error_message");
                            ?>
                        </p>
						<a href="/" class="btn btn-success small-btn">Anasayfa</a>
					</div>
				</div>
			</section>
			<!-- Tab section End -->

    <div class="clearfix"></div>
    <!-- Download app Section End -->
    <footer class="footer light-footer">
        <div class="row lg-menu">
            <div class="container">
                <div class="col-md-4 col-sm-4">
                    <img src="assets/img/footer-logo.png" class="img-responsive" alt="Bul Bul Yap Logo"/></div>
                <div class="col-md-8 co-sm-8 pull-right">
                    <ul>
                        <li><a href="/" title="">Anasayfa</a></li>
                        <li><a href="/sss" title="">Sık Sorulan Sorular</a></li>
                        <li><a href="/yardim" title="">Yardım</a></li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="row copyright">
            <div class="container">
                <a href="https://veyselakpinar.com/"> <p>Copyright © 2019. Veysel Akpinar </p></a>
            </div>
        </div>
    </footer>
    <div class="clearfix"></div>

    <button class="w3-button w3-teal w3-xlarge w3-right hidden" onclick="openRightMenu()"><i class="spin fa fa-cog"
                                                                                             aria-hidden="true"></i></button>
    <div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu">
        <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
        <ul id="styleOptions" title="switch styling">
            <li>
                <a href="javascript: void(0)" class="cl-box blue" data-theme="colors/blue-style"></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box red" data-theme="colors/red-style"></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box purple" data-theme="colors/purple-style"></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box green" data-theme="colors/green-style"></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box dark-red" data-theme="colors/dark-red-style"></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box orange" data-theme="colors/orange-style"></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box sea-blue" data-theme="colors/sea-blue-style "></a>
            </li>
            <li>
                <a href="javascript: void(0)" class="cl-box pink" data-theme="colors/pink-style"></a>
            </li>
        </ul>
    </div>
    <!-- Scripts==================================================-->

    <script type="text/javascript" src="<?= BASEURL; ?>Web/assets/plugins/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>Web/assets/plugins/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>Web/assets/plugins/js/bootsnav.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>Web/assets/plugins/js/select2.min.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>Web/assets/plugins/js/loader.js"></script>
    <script type="text/javascript" src="<?= BASEURL; ?>Web/assets/plugins/js/slick.min.js"></script>
    <script src="<?= BASEURL; ?>Web/assets/js/custom.js"></script>
    <script src="<?= BASEURL; ?>Web/assets/js/jQuery.style.switcher.js"></script>


    <script type="text/javascript">
        $(document).ready(function () {
            $('#styleOptions').styleSwitcher();
        });
    </script>

</div>
</body>

</html>