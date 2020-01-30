
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
    <title>Bul Bul Yap:Bul Buluştur Yap Yakıştır | Kayıt Ol</title>
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
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
    <link type="text/css" rel="stylesheet" id="jssDefault" href="<?=BASEURL;?>Web/assets/css/colors/green-style.css">

    <style>

        .login-screen, .signup-screen, .lost-ps-screen {
            position: relative;
            max-width: 450px;
            margin: -6% auto 0 auto;
        }
    </style>
</head>
<body class="simple-bg-screen" style="background-image:url(<?=BASEURL;?>Web/assets/img/banner-10.jpg);">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJX3X7V"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="Loader"></div>
<div class="wrapper">

    <!-- Title Header Start -->
    <section class="signup-screen-sec">

        <div class="container">
            <div class="signup-screen">
                <a href="/kayit-ol"><img src="<?=BASEURL;?>Web/assets/img/logo.png" class="img-responsive" alt=""></a>
                <?php my_errors()?>
                <form class="form-wizard" id="register_one_form" action="/kayit-ol/2" method="post">
                    <input type="text" name="full_name" id="full_name" class="form-control" placeholder="Ad Soyad" value="<?php echo isset($model["full_name"])?$model["full_name"]:"";?>">
                    <div class="form-group">
                        <input type="text"  name="username" id="username" class="form-control" placeholder="Kullanıcı Adınız" value="<?php echo isset($model["username"])?$model["username"]:"";?>">
                    </div>
                    <input type="text"  name="phone" id="phone" class="form-control" placeholder="Telefon" value="<?php echo isset($model["phone"])?$model["phone"]:"";?>">
                    <input type="email" name="email" id="email" class="form-control" placeholder="E Posta" value="<?php echo isset($model["email"])?$model["email"]:"";?>">
                    <input type="password" name="password" id="password" class="form-control" placeholder="Şifre" value="<?php echo isset($model["password"])?$model["password"]:"";?>">

                    <div class="alert alert-danger" style="display: none">
                        <p class="register-error">

                        </p>
                    </div>

                    <button class="btn btn-login  register-one" type="button" >Devam Et</button>
                    <span>Zaten bir hesabım var? <a href="/giris-yap"> Giriş Ysp</a></span>
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
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
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

    <script src="<?= BASEURL; ?>Web/assets/js/routing.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?= BASEURL; ?>Web/assets/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#styleOptions').styleSwitcher();

            $(document).on("click",".register-one",function () {


                var full_name=$("#full_name").val();
                var username=$("#username").val();
                var email=$("#email").val();
                var phone=$("#phone").val();
                var password=$("#password").val();

                if(full_name==='' || username==='' || email==='' || phone===''|| password===''){

                    $(".alert-danger").css("display","block");
                    $(".register-error").text("Lütfen gerekli alanları doldurunuz");
                }else{
                    $(".alert-danger").css("display","none");


                    ajax("kayit-ol/2", "1", {full_name,username,email,phone,password}, function (success, data, message) {
                        if (success===1){
                                window.location.href ="/kayit-ol/2";
                        }else{
                            $(".alert-danger").css("display","block");
                            $(".register-error").text(message);
                        }
                    }, "post");

                }
            });

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