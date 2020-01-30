<?php

if ( ! function_exists('mail_content')) {
    function mail_content($content_type, $data = array())
    {
        $content = "";

        foreach ($data as $key => $value) {
            $$key = $value;
        }

        if ($content_type == "sifre-sifirlama") {
            $content = "<br style='line-height: 24px;'><span style='font-weight: 300; font-size: 12px; line-height: 20px;'><span style='font-weight: 300; color: rgb(128, 128, 128); font-size: 15px; line-height: 23px;'></span><br style='line-height: 24px;'><br style='line-height: 24px;'><span style='font-weight: bold; color: rgb(128, 128, 128); font-size: 15px; line-height: 23px;'>Şifre sıfırlama linkiniz: </span><br style='line-height: 24px;'><span style='font-weight: 300; color: rgb(128, 128, 128); font-size: 15px; line-height: 23px;'>&nbsp;</span><br style='line-height: 24px;'><button type='button' style='background-color: #3999ed; padding: 20px 120px 20px 120px;line-height: 20px;text-align: center;color: #ffffff;font-size: 20px;font-weight: normal;font-family: Helvetica,Arial,sans-serif;text-decoration: none;width: 100%;display: inline-block;'><a href='$mesaj' style='color: white;'>Şifrenizi Yenileyin</a></button><br style='line-height: 24px;'><br style='line-height: 24px;'><span style='font-weight: bold; color: rgb(128, 128, 128); font-size: 15px; line-height: 23px;'>Doğrulama Kodu : </span>$dogrulama_kodu<br style='line-height: 24px;'><span style='font-weight: 300; color: rgb(128, 128, 128); font-size: 15px; line-height: 23px;'> <br style='line-height: 24px;'><br style='line-height: 24px;'><span style='font-weight: 300; font-size: 13px; line-height: 21px;'>“ Mobil stratejiniz yoksa, gelecek için de stratejiniz yoktur“</span></span><br style='line-height: 24px;'></span>";
        } elseif ($content_type == "yeni-talep") {
            $ul = "<ul>";
            foreach ($data["service"] as $item) {
                $question = $item->question;
                $answer = $item->answer;
                $ul .= "<li>" . $question . " = " . $answer . "</li>";
            }

            $ul .= "</ul>";
            $content = "<br style='line-height: 24px;'>
                                       <span style='font-weight: bold; color: rgb(128, 128, 128); font-size: 15px; line-height: 23px;'>Yeni bir talep oluşturulmuştur.İlk Teklif veren siz olun: </span>
                                       <br style='line-height: 24px;'>
                                       $ul
                                       <br style='line-height: 24px;'>
                                       <button type='button' style='background-color: #3999ed; padding: 20px 120px 20px 120px;line-height: 20px;text-align: center;color: #ffffff;font-size: 20px;font-weight: normal;font-family: Helvetica,Arial,sans-serif;text-decoration: none;width: 100%;display: inline-block;'>
                                       <a href='$giris_yap' style='color: white;'>Giriş Yap</a></button>
                                       <br style='line-height: 24px;'>";
        } elseif ($content_type == "kayit-olma") {

            $content = "<br style='line-height: 24px;'>
                                       <span style='font-weight: bold; color: rgb(128, 128, 128); font-size: 15px; line-height: 23px;'>Oluşturmuş olduğunuz kullanıcı adı ve şifre ile panelinize giriş yapabilirsiniz </span>
                                       <br style='line-height: 24px;'>
                                        <br style='line-height: 24px;'>
                                       <ul>
                                       <li>Kullanıcı Adı = $username</li>
                                       <li>Şifre = $password</li>
                                       </ul>
                                       <br style='line-height: 24px;'>
                                        <br style='line-height: 24px;'>
                                       <button type='button' style='background-color: #3999ed; padding: 20px 120px 20px 120px;line-height: 20px;text-align: center;color: #ffffff;font-size: 20px;font-weight: normal;font-family: Helvetica,Arial,sans-serif;text-decoration: none;width: 100%;display: inline-block;'>
                                       <a href='$giris_yap' style='color: white;'>Giriş Yap</a></button>
                                       <br style='line-height: 24px;'>";
        } elseif ($content_type == "yeni-teklif") {

            $content = "<br style='line-height: 24px;'>
                                      
                                        <br style='line-height: 24px;'>
                                       <ul>
                                       <li>Teklif Veren  = $full_name</li>
                                       <li>Teklif Fiyatı = $price ₺</li>
                                       <li>Kişisel Açıklama  = $description</li>
                                       </ul>
                                       <br style='line-height: 24px;'>
                                       <br style='line-height: 24px;'>
                                       <span style='font-weight: bold; color: rgb(128, 128, 128); font-size: 15px; line-height: 23px;'>Kullanıcı Paneline girerek verilen teklifleri değerlendirebilirsiniz </span>
                                       <br style='line-height: 24px;'>
                                       <br style='line-height: 24px;'>
                                       <button type='button' style='background-color: #3999ed; padding: 20px 120px 20px 120px;line-height: 20px;text-align: center;color: #ffffff;font-size: 20px;font-weight: normal;font-family: Helvetica,Arial,sans-serif;text-decoration: none;width: 100%;display: inline-block;'>
                                       <a href='$giris_yap' style='color: white;'>Giriş Yap</a></button>
                                       <br style='line-height: 24px;'>";
        } elseif ($content_type == "tanitim") {

            $content = "<br style='line-height: 24px;'>
                                  <h2><span style='font-size: 18px;font-weight: 700'>Tüm Kullanıcılarımıza özel  ilk işinizi yapmanız için.</span>.(Hesabınıza tanımlanmış olan 15 Tl'yi kullanabilirsiniz.)</h2>
                                   <br style='line-height: 24px;'>
                                
                                   <p style='font-size: 20px'>Her türlü ihtiyacınızın profesyonel  ekipler tarafından karşılanması  için
                                    <a target='_blank' href='https://www.bulbulyap.com/'> bulbulyap.com 'u</a>
                                    ziyaret edip,ücretsiz talep oluşturarak,teklifleri karşılaştırıp değerlendirebilirsiniz.
                                    </p>
                                   <br style='line-height: 24px;'>
                                   <br style='line-height: 24px;'>
                                   <button type='button' style='background-color: #32991f; padding: 20px 120px 20px 120px;line-height: 20px;text-align: center;color: #ffffff;font-size: 20px;font-weight: normal;font-family: Helvetica,Arial,sans-serif;text-decoration: none;width: 100%;display: inline-block;'>
                                   <a href='https://www.bulbulyap.com/kayit-ol' style='color: white;'>Kayıt Ol</a></button>
                                
                                   <br style='line-height: 24px;'>
                                   <br style='line-height: 24px;'>
                                    <button type='button' style='background-color: #3999ed; padding: 20px 120px 20px 120px;line-height: 20px;text-align: center;color: #ffffff;font-size: 20px;font-weight: normal;font-family: Helvetica,Arial,sans-serif;text-decoration: none;width: 100%;display: inline-block;'>
                                        <a target='_blank' href='https://www.bulbulyap.com/' style='color: white;'>Siteye Git</a></button>
                                   
                                   ";
        }elseif ($content_type == "bilgilendirme") {

            $content = "<br style='line-height: 24px;'>
                                  <h2><span style='font-size: 18px;font-weight: 700'>Veri Transferi başarı bir şekilde gerçekleştirilmiştir.</span>
                                 <br style='line-height: 24px;'>
                                   <br style='line-height: 24px;'>
                                   <p style='font-size: 20px'>Bilgieri kontrol edebilirsiniz</p>
                              
                                   ";
        }

        return $content;

    }

}
