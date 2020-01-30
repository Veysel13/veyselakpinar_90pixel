
<!doctype html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>Bul Bul Yap:Bul Buluştur Yap Yakıştır | Şifremi Unuttum</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?=BASEURL;?>Web/assets/plugins/css/plugins.css">

    <!-- Custom style -->
    <link href="<?=BASEURL;?>Web/assets/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="<?=BASEURL;?>Web/assets/css/colors/green-style.css">

</head>
<body class="simple-bg-screen" style="background-image:url(<?=BASEURL;?>Web/assets/img/banner-10.jpg);">
<div class="Loader"></div>
<div class="wrapper">

    <!-- Title Header Start -->
    <section class="lost-ps-screen-sec">
        <div class="container">
            <div class="lost-ps-screen">
                <a href="/giris-yap"><img src="<?=BASEURL;?>Web/assets/img/logo.png" class="img-responsive" alt=""></a>
                <?php my_errors()?>
                <form action="/sifremi-unuttum/kullanici-kontrol" method="post">
                    <input type="text" name="email_or_phone" id="email_or_phone" class="form-control" placeholder="Telefon yada email giriniz">
                    <button class="btn btn-login" type="submit">Gönder</button>
                </form>
            </div>
        </div>
    </section>
    <button class="w3-button w3-teal w3-xlarge w3-right" onclick="openRightMenu()"><i class="spin fa fa-cog" aria-hidden="true"></i></button>
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