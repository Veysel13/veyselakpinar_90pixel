
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
                <form action="/sifremi-unuttum/yeni-sifre" method="post">
                    <input type="text" name="new_password" id="new_password" class="form-control" placeholder="Şifre giriniz">
                    <input type="text" name="new_password_again" id="new_password_again" class="form-control" placeholder="Şifre giriniz">
                    <input type="hidden" name="code" id="code" value="<?php echo $user['dogrulama_kodu']; ?>">
                    <input type="hidden" name="user_id" id="user_id" value="<?php echo $user['user_id']; ?>">
                    <div class="alert alert-danger" style="display:none;">
                        <p class="register-error"></p>
                    </div>
                    <button class="btn btn-login new-password" type="button">Gönder</button>
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
    <script src="<?= BASEURL; ?>Web/assets/js/routing.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?= BASEURL; ?>Web/assets/js/main.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#styleOptions').styleSwitcher();
            $(document).on("click",".new-password",function () {

                var password=$("#new_password").val();
                var password_again=$("#new_password_again").val();
                var code=$("#code").val();
                var user_id=$("#user_id").val();

                if(password==='' || password_again===''){
                    $(".alert-danger").css("display", "block");
                    $(".register-error").text("Gerekli alanları doldurunuz");
                }else if(password_again!==password){
                    $(".alert-danger").css("display", "block");
                    $(".register-error").text("Girdiğiniz şifreler uyuşmamaktadır");
                }else{
                    ajax("sifremi-unuttum/yeni-sifre", "1", {password,code,user_id}, function (success, data, message) {
                        console.log(data);
                        if (success===1){
                            swal({
                                title: "Başarılı ?",
                                text: "Şifreniz başarı ile değiştirildi",
                                icon: "success",
                                buttons: ["Kapat !", "Tamam !"],
                                dangerMode: false,
                            }).then((willDelete) => {
                                window.location.href = "/giris-yap";
                            });
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