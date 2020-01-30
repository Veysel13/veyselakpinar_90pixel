
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
    <!-- Basic Page Needs
    ================================================== -->
    <title>Bul Bul Yap:Bul Buluştur Yap Yakıştır | Giriş Yap</title>
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

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?=BASEURL;?>Web/assets/plugins/css/plugins.css">

    <!-- Custom style -->
    <link href="<?=BASEURL;?>Web/assets/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="<?=BASEURL;?>Web/assets/css/colors/green-style.css">


</head>
<body class="simple-bg-screen" style="background-image:url(<?=BASEURL;?>Web/assets/img/banner-10.jpg);">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJX3X7V"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="Loader"></div>
<div class="wrapper">

    <!-- Title Header Start -->
    <section class="login-screen-sec">
        <div class="container">
            <div class="login-screen">
                <a href="/giris-yap"><img src="<?=BASEURL;?>Web/assets/img/logo.png" class="img-responsive" alt=""></a>
                <?php my_errors()?>
                <?php if (isset($_GET["status"]) && $_GET["status"]=="ok") { ?>
                    <div class="alert alert-success">
                        <p>Kaydınız Başarı ile gerçekleşti.</p>
                    </div>
                <?php } ?>
                <form action="/giris-yap" method="post">
                    <input type="text" name="username" class="form-control" placeholder="Kullanıcı adı">
                    <input type="password" name="password" class="form-control" placeholder="Şifre">
                    <button class="btn btn-login" type="submit">GİRİŞ Yap</button>
                    <span>Bir Hesabım yok? <a href="/kayit-ol"> Hesap Oluştur</a></span>
                    <span><a href="/sifremi-unuttum"> Şifremi Unuttum</a></span>
                </form>
            </div>
        </div>
    </section>
    <button class="w3-button w3-teal w3-xlarge w3-right hidden" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button>
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

    <!-- Scripts
    ================================================== -->
    <script type="text/javascript" src="<?=BASEURL;?>Web/assets/plugins/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?=BASEURL;?>Web/assets/plugins/js/viewportchecker.js"></script>
    <script type="text/javascript" src="<?=BASEURL;?>Web/assets/plugins/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?=BASEURL;?>Web/assets/plugins/js/bootsnav.js"></script>
    <script type="text/javascript" src="<?=BASEURL;?>Web/assets/plugins/js/select2.min.js"></script>
    <script type="text/javascript" src="<?=BASEURL;?>Web/assets/plugins/js/datedropper.min.js"></script>
    <script type="text/javascript" src="<?=BASEURL;?>Web/assets/plugins/js/dropzone.js"></script>
    <script type="text/javascript" src="<?=BASEURL;?>Web/assets/plugins/js/loader.js"></script>
    <script type="text/javascript" src="<?=BASEURL;?>Web/assets/plugins/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="<?=BASEURL;?>Web/assets/plugins/js/slick.min.js"></script>
    <script type="text/javascript" src="<?=BASEURL;?>Web/assets/plugins/js/gmap3.min.js"></script>
    <script type="text/javascript" src="<?=BASEURL;?>Web/assets/plugins/js/jquery.easy-autocomplete.min.js"></script>

    <!-- Custom Js -->
    <script src="<?=BASEURL;?>Web/assets/js/custom.js"></script>
    <script src="<?=BASEURL;?>Web/assets/js/jQuery.style.switcher.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#styleOptions').styleSwitcher();
        });
    </script>
    <script>
        function openRightMenu() {
            document.getElementById("rightMenu").style.display = "block";
        }

        function closeRightMenu() {
            document.getElementById("rightMenu").style.display = "none";
        }
    </script>
</div>
</body>
</html>