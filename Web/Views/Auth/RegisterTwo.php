
<!doctype html>
<html lang="en">
<head>
    <!-- Basic Page Needs
    ================================================== -->
    <title>Bul Bul Yap:Bul Buluştur Yap Yakıştır | Kayıt Ol</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="<?=BASEURL;?>Web/assets/plugins/css/plugins.css">

    <!-- Custom style -->
    <link href="<?=BASEURL;?>Web/assets/css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="<?=BASEURL;?>Web/assets/css/colors/green-style.css">

    <style>

        .login-screen, .signup-screen, .lost-ps-screen {
            position: relative;
            max-width: 450px;
            margin: 1% auto 0 auto;
        }
        .login-screen span, .signup-screen span, .lost-ps-screen span {
             margin-top: 0px;
            display: block;
            text-align: center;
            width: 100%;
        }
        .select2-container--default .select2-selection--multiple .select2-selection__choice__remove {
            color: #999;
            cursor: pointer;
            display: inline-block;
            font-weight: bold;
            margin-right: 2px;
            width: 65px;
        }
    </style>
</head>
<body class="simple-bg-screen" style="background-image:url(<?=BASEURL;?>Web/assets/img/banner-10.jpg);">
<div class="Loader"></div>
<div class="wrapper">
    <!-- Title Header Start -->
    <section class="signup-screen-sec">
        <div class="container">
            <div class="signup-screen">
                <a href="/kayit-ol/2"><img src="<?=BASEURL;?>Web/assets/img/logo.png" class="img-responsive" alt=""></a>
                <?php my_errors()?>
                <form action="/kayit-ol" method="post">
                    <div class="form-group">
                        <select multiple   id="category" name="category[]" class="form-control choose-category">
                            <?php foreach ($categories as $cat) {
                                if ($cat["top_category"] !=0){?>
                                    <option  value="<?php _e($cat["id"]);?>"> <?php _e($cat["name"]);?></option>
                            <?php } } ?>
                        </select>
                    </div>

                    <div class="form-group">
                        <input type="text" name="profil_name" id="profil_name" class="form-control" placeholder="Profil İsminiz">
                    </div>
                    <div class="form-group">
                        <select name="city" id="city" class="form-control">
                            <option value="0">İl Seçiniz</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <select name="town" id="town" class="form-control">
                            <option value="0">Önce İl Seçiniz</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <div class="alert alert-danger" style="display: none">
                            <p class="register-error">

                            </p>
                        </div>
                    </div>
                    <button class="btn btn-login register-two" type="button" >Kayıt Ol</button>
                    <span>Zaten bir hesabım var? <a href="/giris-yap"> Giriş Yap</a></span>
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

            $(document).on("click",".register-two",function () {


                var category=$("#category").val();
                var profil_name=$("#profil_name").val();
                var city=$("#city").val();
                var town=$("#town").val();
                if(profil_name===''){

                    $(".alert-danger").css("display","block");
                    $(".register-error").text("Lütfen gerekli alanları doldurunuz");
                }else if(category==='0'){
                    $(".alert-danger").css("display","block");
                    $(".register-error").text("Lütfen kategory seçiniz");
                } else if(city==='0'){
                    $(".alert-danger").css("display","block");
                    $(".register-error").text("Lütfen il seçiniz");
                }else if(town==='0'){
                    $(".alert-danger").css("display","block");
                    $(".register-error").text("Lütfen ilçe seçiniz");
                } else{
                    $(".alert-danger").css("display","none");

                    ajax("kayit-ol", "1", {profil_name,category,city,town}, function (success, data, message) {
                        if (success===1){
                            window.location.href ="/giris-yap?status=ok";
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

    <script src="<?=BASEURL;?>Web/assets/js/routing.js"></script>
    <script>
        $(document).ready(function() {
            $("#city").select2();
            $("#town").select2();
            $("#category").select2({
                placeholder:        'Lütfen İş Profillerinizi şeçiniz.Birden çok seçebilirsiniz',
                multiple:           true
            });

            ajax("ajax/get/city", "1", {}, function (success, data, message) {
                if (success === 1) {
                    var option = "<option value='0'>İl Seçiniz</option>";
                    for (i = 0; i < data.length; i++) {
                        option += '<option data-name="' + data[i]['title'] + '" value="' + data[i]['id'] + '">' + data[i]['title'] + '</option>';
                    }
                    $("#city").html(option);
                }
            }, "post");

            $(document).on("change", "#city", function () {
                id = $(this).val();
                ajax("ajax/get/town", "1", {city_id: id}, function (success, data, message) {
                    if (success === 1) {
                        var option = "<option value='0'>İlçe Seçiniz</option>";
                        for (i = 0; i < data.length; i++) {
                            option += "<option data-name='" + data[i]['title'] + "' value='" + data[i]['id'] + "'>" + data[i]['title'] + "</option>";
                        }

                        $("#town").html(option);
                    }
                }, "post");
            });





        });
    </script>
</div>
</body>
</html>