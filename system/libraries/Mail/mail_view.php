<?php
function mailContent($konu = '', $mesaj = '', $adsoyad = '')
{

    $logo = "https://www.bulbulyap.com/Web/assets/img/logo-white.png";

    $content = "  

	<!DOCTYPE html>
    <html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
    <head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta name='viewport' content='initial-scale=1.0'/>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
    <meta name='format-detection' content='telephone=no'/>
    <title>Bul Bul Yap</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>
    <style type='text/css'>

   
    /* Resets: see reset.css for details */
    .ReadMsgBody { width: 100%; background-color: #ffffff;}
    .ExternalClass {width: 100%; background-color: #ffffff;}
    .ExternalClass, .ExternalClass p, .ExternalClass span,
    .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height:100%;}
    #outlook a{ padding:0;}
    html{width: 100%; }
    body {-webkit-text-size-adjust:none; -ms-text-size-adjust:none; }
    html,body {background-color: #ffffff; margin: 0; padding: 0; }
    table {border-spacing:0;}
    table td {border-collapse:collapse;}
    br, strong br, b br, em br, i br { line-height:100%; }
    h1, h2, h3, h4, h5, h6 { line-height: 100% !important; -webkit-font-smoothing: antialiased; }
    img{height: auto !important; line-height: 100%; outline: none; text-decoration: none; display:block !important; }
    span a { text-decoration: none !important;}
    a{ text-decoration: none !important; }
    table p{margin:0;}
    .yshortcuts, .yshortcuts a, .yshortcuts a:link,.yshortcuts a:visited,
    .yshortcuts a:hover, .yshortcuts a span { text-decoration: none !important; border-bottom: none !important;}
    table{ mso-table-lspace:0pt; mso-table-rspace:0pt; }
    img{ -ms-interpolation-mode:bicubic; }
    ul{list-style: initial; margin:0; padding-left:20px;}
    /*mailChimp class*/
    .default-edit-image{
    height:20px;
    }
    .tpl-repeatblock {
    padding: 0px !important;
    border: 1px dotted rgba(0,0,0,0.2);
    }
    img{height:auto !important;}
    td[class='image-270px'] img{
    width:270px;
    height:auto !important;
    max-width:270px !important;
    }
    td[class='image-170px'] img{
    width:170px;
    height:auto !important;
    max-width:170px !important;
    }
    td[class='image-185px'] img{
    width:185px;
    height:auto !important;
    max-width:185px !important;
    }
    td[class='image-124px'] img{
    width:124px;
    height:auto !important;
    max-width:124px !important;
    }
    @media only screen and (max-width: 640px){
    body{
    width:auto!important;
    }
    table[class='container']{
    width: 100%!important;
    padding-left: 20px!important;
    padding-right: 20px!important;
    min-width:100% !important;
    }
    td[class='image-270px'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    }
    td[class='image-170px'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    }
    td[class='image-185px'] img{
    width:185px !important;
    height:auto !important;
    max-width:185px !important;
    }
    td[class='image-124px'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    }
    td[class='image-100-percent'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    }
    td[class='small-image-100-percent'] img{
    width:100% !important;
    height:auto !important;
    }
    table[class='full-width']{
    width:100% !important;
    min-width:100% !important;
    }
    table[class='full-width-text']{
    width:100% !important;
    background-color:#ffffff;
    padding-left:20px !important;
    padding-right:20px !important;
    }
    table[class='full-width-text2']{
    width:100% !important;
    background-color:#ffffff;
    padding-left:20px !important;
    padding-right:20px !important;
    }
    table[class='col-2-3img']{
    width:50% !important;
    margin-right: 20px !important;
    }
    table[class='col-2-3img-last']{
    width:50% !important;
    }
    table[class='col-2-footer']{
    width:55% !important;
    margin-right:20px !important;
    }
    table[class='col-2-footer-last']{
    width:40% !important;
    }
    table[class='col-2']{
    width:47% !important;
    margin-right:20px !important;
    }
    table[class='col-2-last']{
    width:47% !important;
    }
    table[class='col-3']{
    width:29% !important;
    margin-right:20px !important;
    }
    table[class='col-3-last']{
    width:29% !important;
    }
    table[class='row-2']{
    width:50% !important;
    }
    td[class='text-center']{
    text-align: center !important;
    }
    /* start clear and remove*/
    table[class='remove']{
    display:none !important;
    }
    td[class='remove']{
    display:none !important;
    }
    /* end clear and remove*/
    table[class='fix-box']{
    padding-left:20px !important;
    padding-right:20px !important;
    }
    td[class='fix-box']{
    padding-left:20px !important;
    padding-right:20px !important;
    }
    td[class='font-resize']{
    font-size: 18px !important;
    line-height: 22px !important;
    }
    table[class='space-scale']{
    width:100% !important;
    float:none !important;
    }
    table[class='clear-align-640']{
    float:none !important;
    }
    table[class='show-full-mobile']{
    display:none !important;
    width:100% !important;
    min-width:100% !important;
    }
    }
    @media only screen and (max-width: 479px){
    body{
    font-size:10px !important;
    }
    table[class='container']{
    width: 100%!important;
    padding-left: 10px!important;
    padding-right:10px!important;
    min-width:100% !important;
    }
    table[class='container2']{
    width: 100%!important;
    float:none !important;
    min-width:100% !important;
    }
    td[class='full-width'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    min-width:124px !important;
    min-width:100% !important;
    }
    td[class='image-270px'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    min-width:124px !important;
    }
    td[class='image-170px'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    min-width:124px !important;
    }
    td[class='image-185px'] img{
    width:185px !important;
    height:auto !important;
    max-width:185px !important;
    min-width:124px !important;
    }
    td[class='image-124px'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    min-width:124px !important;
    }
    td[class='image-100-percent'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    min-width:124px !important;
    }
    td[class='small-image-100-percent'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    min-width:124px !important;
    }
    table[class='full-width']{
    width:100% !important;
    }
    table[class='full-width-text']{
    width:100% !important;
    background-color:#ffffff;
    padding-left:20px !important;
    padding-right:20px !important;
    }
    table[class='full-width-text2']{
    width:100% !important;
    background-color:#ffffff;
    padding-left:20px !important;
    padding-right:20px !important;
    }
    table[class='col-2-footer']{
    width:100% !important;
    margin-right:0px !important;
    }
    table[class='col-2-footer-last']{
    width:100% !important;
    }
    table[class='col-2']{
    width:100% !important;
    margin-right:0px !important;
    }
    table[class='col-2-last']{
    width:100% !important;
    }
    table[class='col-3']{
    width:100% !important;
    margin-right:0px !important;
    }
    table[class='col-3-last']{
    width:100% !important;
    }
    table[class='row-2']{
    width:100% !important;
    }
    table[id='col-underline']{
    float: none !important;
    width: 100% !important;
    border-bottom: 1px solid #eee;
    }
    td[id='col-underline']{
    float: none !important;
    width: 100% !important;
    border-bottom: 1px solid #eee;
    }
    td[class='col-underline']{
    float: none !important;
    width: 100% !important;
    border-bottom: 1px solid #eee;
    }
    /*start text center*/
    td[class='text-center']{
    text-align: center !important;
    }
    div[class='text-center']{
    text-align: center !important;
    }
    /*end text center*/
    /* start  clear and remove */
    table[id='clear-padding']{
    padding:0 !important;
    }
    td[id='clear-padding']{
    padding:0 !important;
    }
    td[class='clear-padding']{
    padding:0 !important;
    }
    table[class='remove-479']{
    display:none !important;
    }
    td[class='remove-479']{
    display:none !important;
    }
    table[class='clear-align']{
    float:none !important;
    }
    /* end  clear and remove */
    table[class='width-small']{
    width:100% !important;
    }
    table[class='fix-box']{
    padding-left:15px !important;
    padding-right:15px !important;
    }
    td[class='fix-box']{
    padding-left:15px !important;
    padding-right:15px !important;
    }
    td[class='font-resize']{
    font-size: 14px !important;
    }
    td[class='increase-Height']{
    height:10px !important;
    }
    td[class='increase-Height-20']{
    height:20px !important;
    }
    table[width='595']{
    width:100% !important;
    }
    table[class='show-full-mobile']{
    display:table !important;
    width:100% !important;
    min-width:100% !important;
    }
    }
    @media only screen and (max-width: 320px){
    table[class='width-small']{
    width:125px !important;
    }
    img[class='image-100-percent']{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    min-width:124px !important;
    }
    }
    a:active{color:initial !important;} a:visited{color:initial !important;}
    td ul{list-style: initial; margin:0; padding-left:20px;}

	@media only screen and (max-width: 640px){ .image-100-percent{ width:100%!important; height: auto !important; max-width: 100% !important; min-width: 124px !important;}}body{background-color:#efefef;} .default-edit-image{height:20px;} tr.tpl-repeatblock , tr.tpl-repeatblock > td{ display:block !important;} .tpl-repeatblock {padding: 0px !important;border: 1px dotted rgba(0,0,0,0.2);} table[width='595']{width:100% !important;}a img{ border: 0 !important;}
a:active{color:initial !important;} a:visited{color:initial !important;}
.tpl-content{padding:0 !important;}
</style>
<!--[if gte mso 15]>
<style type='text/css'>
a{text-decoration: none !important;}
body { font-size: 0; line-height: 0; }
tr { font-size:1px; mso-line-height-alt:0; mso-margin-top-alt:1px; }
table { font-size:1px; line-height:0; mso-margin-top-alt:1px; }
body,table,td,span,a{font-family: Arial, Helvetica, sans-serif !important;}
a img{ border: 0 !important;}
</style>
<![endif]-->
<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
</head>
<body  style='font-size:12px; width:100%; height:100%;'>
	<table id='mainStructure' width='800' class='full-width' align='center' border='0' cellspacing='0' cellpadding='0' style='background-color:#efefef; width:800px; max-width: 800px; margin: 0 auto; outline: 1px solid #efefef; box-shadow: 0px 0px 5px #E0E0E0;'><!--START IMAGE HEADER LAYOUT-->
		<tbody>
			<tr>
				<td align='center' valign='top' style='background-color: #383838;'>
					<!-- start HEADER LAYOUT-container width 600px -->
					<table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='full-width' syle='background-color:#ffffff min-width:600px;' style='background-color: #383838; width: 600px;mso-table-lspace:0pt; mso-table-rspace:0pt;'>
						<tbody>
							<tr>
								<td valign='top' class='image-100-percent' width='600' style='/* width: 600px; */padding-top: 50px;padding-bottom: 50px;text-align: -webkit-center;'>
									<img src='$logo' width='600' alt='header-image' style='width: 300px;display: block !important;height: 61px;'>
								</td>
							</tr>
							<tr style='background-color: #000000;'>
								<td valign='top'>
									<table width='100%' border='0' cellspacing='0' cellpadding='0' align='left' style='mso-table-lspace:0pt; mso-table-rspace:0pt;'>
										<tbody>
											<tr>
												<td align='center' style='font-size: 18px;font-family: Roboto, Arial, Helvetica, sans-serif;color: white;font-weight: 300;word-break: break-word;line-height: 26px;padding-top: 10px;padding-bottom: 10px;'>
													<span style='font-weight: 300; font-size: 18px; line-height: 26px;'>
													<span style='font-size: 28px; line-height: 36px;'>$konu</span><br style='line-height: 24px;'></span>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table><!-- end HEADER LAYOUT-container width 600px -->
				</td><!-- end HEADER LAYOUT-container width 600px --></td>
			</tr><!--END IMAGE HEADER LAYOUT-->
		</tbody>
		<tbody>
			<tr>
				<td align='center' valign='top' style='background-color:#ecebeb;'>
				<!-- start  container width 600px -->
					<table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='border-bottom: 1px solid rgb(199, 199, 199); padding-left: 20px; padding-right: 20px; min-width: 600px; background-color: #ffffff; width: 600px;mso-table-lspace:0pt; mso-table-rspace:0pt;'><!--start space height --><tbody><tr><td height='20' valign='top' style='height: 20px; font-size: 0px; line-height: 0; border-collapse: collapse;'>&nbsp;
				</td>
			</tr><!--end space height -->
			<tr>
				<td valign='top'>
					<!-- start container width 560px -->
					<table width='560' align='center' border='0' cellspacing='0' cellpadding='0' class='full-width' style='width: 560px;mso-table-lspace:0pt; mso-table-rspace:0pt;'><!-- start heading --><tbody><!-- end heading --><!--start space height --><tr><td height='15' style='height: 15px; font-size: 0px; line-height: 0; border-collapse: collapse;'>&nbsp;
				</td>
            </tr><!--end space height --><!-- start text content -->
			<tr>
				<td valign='top'>
					<table width='100%' border='0' cellspacing='0' cellpadding='0' align='left' style='mso-table-lspace:0pt; mso-table-rspace:0pt;'>
						<tbody><!-- end heading --><!--start space height -->
							<tr>
								<td height='15' style='height: 15px; font-size: 0px; line-height: 0; border-collapse: collapse;'>&nbsp;</td>
							</tr><!--end space height --><!-- start text content -->
							<tr>
								<td valign='top'>
									<table width='100%' border='0' cellspacing='0' cellpadding='0' align='left' style='mso-table-lspace:0pt; mso-table-rspace:0pt; '>
										<tbody>
											<tr>
												<td style=' font-family: Roboto, Arial, Helvetica, sans-serif; color: rgb(163, 162, 162); font-weight: 300; text-align: left; word-break: break-word; line-height: 21px;'>
													<span style='font-weight: bold; color: rgb(128, 128, 128); font-size: 16px; line-height: 23px;'>Merhaba $adsoyad, </span>
													<br style='line-height: 24px;'>
												</td>
											</tr>
											<tr><td></td></tr>
											<tr><td style='padding-top: 30px; padding-bottom: 30px;'>$mesaj</td></tr>
											<tr><td></td></tr>
											<tr>
												<td style=' font-family: Roboto, Arial, Helvetica, sans-serif; color: rgb(163, 162, 162); font-weight: 300; text-align: left; word-break: break-word; line-height: 21px; padding-bottom:30px;'>
													<span style=' color: rgb(128, 128, 128); font-size: 16px; line-height: 23px;'>Saygılarımızla...</span>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
            </tr>
		</tbody>
	</table><!-- end  container width 560px --></td>
    </tr><!--start space height -->
	</tbody>
	</table><!-- end  container width 600px -->
	</td>
    </tr><!-- END LAYOUT-9 -->
		</tbody><!--  START FOOTER COPY RIGHT -->
		<tbody>
			<tr>
				<td align='center' valign='top' style='background-color: #9c27b0;'>
					<table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='min-width: 600px; padding-left: 20px; padding-right: 20px; background-color: rgba(92, 10, 55, 0.37); width: 600px; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
						<tbody>
							<tr>
								<td valign='top'>
									<table width='560' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='width: 560px; mso-table-lspace:0pt; mso-table-rspace:0pt;'><!--start space height -->
									<tbody>
										<tr>
											<td height='10' style='height: 10px; font-size: 0px; line-height: 0; border-collapse: collapse;'>&nbsp;</td>
										</tr><!--end space height -->
										<tr><!-- start COPY RIGHT content -->
											<td valign='top' style='ffont-family: Roboto, Arial, Helvetica, sans-serif; color: rgb(255, 255, 255); font-weight: 300; text-align: center; word-break: break-word; line-height: 21px;'>
												<span style='font-size: 16px; line-height: 21px;color:#fff;'> İletişim Numarası 
												&nbsp; &nbsp; &nbsp;
												<a style='color: #fff;' href='mailto:info@bulbulyap.com' target='_blank'>info@bulbulyap.com</a> 
												&nbsp; &nbsp; &nbsp;
												<a href='https://www.bulbulyap.com' style='color:white;'>www.bulbulyap.com</a></span>
											</td>
											<!-- end COPY RIGHT content -->
										</tr><!--start space height -->
										<tr>
											<td height='10' style='height: 10px; font-size: 0px; line-height: 0; border-collapse: collapse;'>&nbsp;</td>
										</tr><!--end space height -->
									</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr><!--  END FOOTER COPY RIGHT -->
		</tbody><!--  START FOOTER COPY RIGHT -->
		<tbody>
			<tr>
				<td align='center' valign='top' style='background-color: #9c27b0;'>
					<table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='min-width: 600px; padding-left: 20px; padding-right: 20px; background-color: #9c27b0; width: 600px;mso-table-lspace:0pt; mso-table-rspace:0pt;'>
						<tbody>
							<tr>
								<td valign='top'>
									<table width='560' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='width: 560px;mso-table-lspace:0pt; mso-table-rspace:0pt;'><!--start space height -->	  <tbody>
											<tr>
												<td height='10' style='height: 10px; font-size: 0px; line-height: 0; border-collapse: collapse;'>&nbsp;</td>
											</tr><!--end space height -->
											<tr><!-- start COPY RIGHT content -->
												<td align='center' style='font-size: 13px; font-family: Roboto, Arial, Helvetica, sans-serif; color: rgb(255, 255, 255); font-weight: 300; text-align: center; word-break: break-word; line-height: 21px;'>
													<span style='font-weight: 300; font-size: 16px; line-height: 21px;'>Bul Bul Yap&nbsp;, all rights reserved © 2019 </span>
												</td>
											  <!-- end COPY RIGHT content -->
											</tr><!--start space height -->
											<tr>
												<td height='10' style='height: 10px; font-size: 0px; line-height: 0; border-collapse: collapse;'>&nbsp;</td>
											</tr><!--end space height -->
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr><!--  END FOOTER COPY RIGHT -->
		</tbody>
		</table>
		</body>
</html>
";

    return $content;

}

function mailContentEN($konu = '', $mesaj = '', $adsoyad = '')
{

    $content = "  
	
	<!DOCTYPE html>
    <html xmlns='http://www.w3.org/1999/xhtml' xmlns:v='urn:schemas-microsoft-com:vml' xmlns:o='urn:schemas-microsoft-com:office:office'>
    <head>
    <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
    <meta name='viewport' content='initial-scale=1.0'/>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'/>
    <meta name='format-detection' content='telephone=no'/>
    <title>Lokal Fırsat</title>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&subset=latin,cyrillic,greek' rel='stylesheet' type='text/css'>
    <style type='text/css'>

    
    /* Resets: see reset.css for details */
    .ReadMsgBody { width: 100%; background-color: #ffffff;}
    .ExternalClass {width: 100%; background-color: #ffffff;}
    .ExternalClass, .ExternalClass p, .ExternalClass span,
    .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height:100%;}
    #outlook a{ padding:0;}
    html{width: 100%; }
    body {-webkit-text-size-adjust:none; -ms-text-size-adjust:none; }
    html,body {background-color: #ffffff; margin: 0; padding: 0; }
    table {border-spacing:0;}
    table td {border-collapse:collapse;}
    br, strong br, b br, em br, i br { line-height:100%; }
    h1, h2, h3, h4, h5, h6 { line-height: 100% !important; -webkit-font-smoothing: antialiased; }
    img{height: auto !important; line-height: 100%; outline: none; text-decoration: none; display:block !important; }
    span a { text-decoration: none !important;}
    a{ text-decoration: none !important; }
    table p{margin:0;}
    .yshortcuts, .yshortcuts a, .yshortcuts a:link,.yshortcuts a:visited,
    .yshortcuts a:hover, .yshortcuts a span { text-decoration: none !important; border-bottom: none !important;}
    table{ mso-table-lspace:0pt; mso-table-rspace:0pt; }
    img{ -ms-interpolation-mode:bicubic; }
    ul{list-style: initial; margin:0; padding-left:20px;}
    /*mailChimp class*/
    .default-edit-image{
    height:20px;
    }
    .tpl-repeatblock {
    padding: 0px !important;
    border: 1px dotted rgba(0,0,0,0.2);
    }
    img{height:auto !important;}
    td[class='image-270px'] img{
    width:270px;
    height:auto !important;
    max-width:270px !important;
    }
    td[class='image-170px'] img{
    width:170px;
    height:auto !important;
    max-width:170px !important;
    }
    td[class='image-185px'] img{
    width:185px;
    height:auto !important;
    max-width:185px !important;
    }
    td[class='image-124px'] img{
    width:124px;
    height:auto !important;
    max-width:124px !important;
    }
    @media only screen and (max-width: 640px){
    body{
    width:auto!important;
    }
    table[class='container']{
    width: 100%!important;
    padding-left: 20px!important;
    padding-right: 20px!important;
    min-width:100% !important;
    }
    td[class='image-270px'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    }
    td[class='image-170px'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    }
    td[class='image-185px'] img{
    width:185px !important;
    height:auto !important;
    max-width:185px !important;
    }
    td[class='image-124px'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    }
    td[class='image-100-percent'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    }
    td[class='small-image-100-percent'] img{
    width:100% !important;
    height:auto !important;
    }
    table[class='full-width']{
    width:100% !important;
    min-width:100% !important;
    }
    table[class='full-width-text']{
    width:100% !important;
    background-color:#ffffff;
    padding-left:20px !important;
    padding-right:20px !important;
    }
    table[class='full-width-text2']{
    width:100% !important;
    background-color:#ffffff;
    padding-left:20px !important;
    padding-right:20px !important;
    }
    table[class='col-2-3img']{
    width:50% !important;
    margin-right: 20px !important;
    }
    table[class='col-2-3img-last']{
    width:50% !important;
    }
    table[class='col-2-footer']{
    width:55% !important;
    margin-right:20px !important;
    }
    table[class='col-2-footer-last']{
    width:40% !important;
    }
    table[class='col-2']{
    width:47% !important;
    margin-right:20px !important;
    }
    table[class='col-2-last']{
    width:47% !important;
    }
    table[class='col-3']{
    width:29% !important;
    margin-right:20px !important;
    }
    table[class='col-3-last']{
    width:29% !important;
    }
    table[class='row-2']{
    width:50% !important;
    }
    td[class='text-center']{
    text-align: center !important;
    }
    /* start clear and remove*/
    table[class='remove']{
    display:none !important;
    }
    td[class='remove']{
    display:none !important;
    }
    /* end clear and remove*/
    table[class='fix-box']{
    padding-left:20px !important;
    padding-right:20px !important;
    }
    td[class='fix-box']{
    padding-left:20px !important;
    padding-right:20px !important;
    }
    td[class='font-resize']{
    font-size: 18px !important;
    line-height: 22px !important;
    }
    table[class='space-scale']{
    width:100% !important;
    float:none !important;
    }
    table[class='clear-align-640']{
    float:none !important;
    }
    table[class='show-full-mobile']{
    display:none !important;
    width:100% !important;
    min-width:100% !important;
    }
    }
    @media only screen and (max-width: 479px){
    body{
    font-size:10px !important;
    }
    table[class='container']{
    width: 100%!important;
    padding-left: 10px!important;
    padding-right:10px!important;
    min-width:100% !important;
    }
    table[class='container2']{
    width: 100%!important;
    float:none !important;
    min-width:100% !important;
    }
    td[class='full-width'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    min-width:124px !important;
    min-width:100% !important;
    }
    td[class='image-270px'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    min-width:124px !important;
    }
    td[class='image-170px'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    min-width:124px !important;
    }
    td[class='image-185px'] img{
    width:185px !important;
    height:auto !important;
    max-width:185px !important;
    min-width:124px !important;
    }
    td[class='image-124px'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    min-width:124px !important;
    }
    td[class='image-100-percent'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    min-width:124px !important;
    }
    td[class='small-image-100-percent'] img{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    min-width:124px !important;
    }
    table[class='full-width']{
    width:100% !important;
    }
    table[class='full-width-text']{
    width:100% !important;
    background-color:#ffffff;
    padding-left:20px !important;
    padding-right:20px !important;
    }
    table[class='full-width-text2']{
    width:100% !important;
    background-color:#ffffff;
    padding-left:20px !important;
    padding-right:20px !important;
    }
    table[class='col-2-footer']{
    width:100% !important;
    margin-right:0px !important;
    }
    table[class='col-2-footer-last']{
    width:100% !important;
    }
    table[class='col-2']{
    width:100% !important;
    margin-right:0px !important;
    }
    table[class='col-2-last']{
    width:100% !important;
    }
    table[class='col-3']{
    width:100% !important;
    margin-right:0px !important;
    }
    table[class='col-3-last']{
    width:100% !important;
    }
    table[class='row-2']{
    width:100% !important;
    }
    table[id='col-underline']{
    float: none !important;
    width: 100% !important;
    border-bottom: 1px solid #eee;
    }
    td[id='col-underline']{
    float: none !important;
    width: 100% !important;
    border-bottom: 1px solid #eee;
    }
    td[class='col-underline']{
    float: none !important;
    width: 100% !important;
    border-bottom: 1px solid #eee;
    }
    /*start text center*/
    td[class='text-center']{
    text-align: center !important;
    }
    div[class='text-center']{
    text-align: center !important;
    }
    /*end text center*/
    /* start  clear and remove */
    table[id='clear-padding']{
    padding:0 !important;
    }
    td[id='clear-padding']{
    padding:0 !important;
    }
    td[class='clear-padding']{
    padding:0 !important;
    }
    table[class='remove-479']{
    display:none !important;
    }
    td[class='remove-479']{
    display:none !important;
    }
    table[class='clear-align']{
    float:none !important;
    }
    /* end  clear and remove */
    table[class='width-small']{
    width:100% !important;
    }
    table[class='fix-box']{
    padding-left:15px !important;
    padding-right:15px !important;
    }
    td[class='fix-box']{
    padding-left:15px !important;
    padding-right:15px !important;
    }
    td[class='font-resize']{
    font-size: 14px !important;
    }
    td[class='increase-Height']{
    height:10px !important;
    }
    td[class='increase-Height-20']{
    height:20px !important;
    }
    table[width='595']{
    width:100% !important;
    }
    table[class='show-full-mobile']{
    display:table !important;
    width:100% !important;
    min-width:100% !important;
    }
    }
    @media only screen and (max-width: 320px){
    table[class='width-small']{
    width:125px !important;
    }
    img[class='image-100-percent']{
    width:100% !important;
    height:auto !important;
    max-width:100% !important;
    min-width:124px !important;
    }
    }
    a:active{color:initial !important;} a:visited{color:initial !important;}
    td ul{list-style: initial; margin:0; padding-left:20px;}

	@media only screen and (max-width: 640px){ .image-100-percent{ width:100%!important; height: auto !important; max-width: 100% !important; min-width: 124px !important;}}body{background-color:#efefef;} .default-edit-image{height:20px;} tr.tpl-repeatblock , tr.tpl-repeatblock > td{ display:block !important;} .tpl-repeatblock {padding: 0px !important;border: 1px dotted rgba(0,0,0,0.2);} table[width='595']{width:100% !important;}a img{ border: 0 !important;}
a:active{color:initial !important;} a:visited{color:initial !important;}
.tpl-content{padding:0 !important;}
</style>
<!--[if gte mso 15]>
<style type='text/css'>
a{text-decoration: none !important;}
body { font-size: 0; line-height: 0; }
tr { font-size:1px; mso-line-height-alt:0; mso-margin-top-alt:1px; }
table { font-size:1px; line-height:0; mso-margin-top-alt:1px; }
body,table,td,span,a{font-family: Arial, Helvetica, sans-serif !important;}
a img{ border: 0 !important;}
</style>
<![endif]-->
<!--[if gte mso 9]><xml><o:OfficeDocumentSettings><o:AllowPNG/><o:PixelsPerInch>96</o:PixelsPerInch></o:OfficeDocumentSettings></xml><![endif]-->
</head>
<body  style='font-size:12px; width:100%; height:100%;'>
	<table id='mainStructure' width='800' class='full-width' align='center' border='0' cellspacing='0' cellpadding='0' style='background-color:#efefef; width:800px; max-width: 800px; margin: 0 auto; outline: 1px solid #efefef; box-shadow: 0px 0px 5px #E0E0E0;'><!--START IMAGE HEADER LAYOUT-->
		<tbody>
			<tr>
				<td align='center' valign='top' style='background-color: #383838;'>
					<!-- start HEADER LAYOUT-container width 600px -->
					<table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='full-width' syle='background-color:#ffffff min-width:600px;' style='background-color: #383838; width: 600px;mso-table-lspace:0pt; mso-table-rspace:0pt;'>
						<tbody>
							<tr>
								<td valign='top' class='image-100-percent' width='600' style='/* width: 600px; */padding-top: 50px;padding-bottom: 50px;text-align: -webkit-center;'>
									<img src='https://www.lokalfirsat.com/public/img/lk_logo_en.png' width='600' alt='header-image' style='width: 300px;display: block !important;height: 61px;'>
								</td>
							</tr>
							<tr style='background-color: #000000;'>
								<td valign='top'>
									<table width='100%' border='0' cellspacing='0' cellpadding='0' align='left' style='mso-table-lspace:0pt; mso-table-rspace:0pt;'>
										<tbody>
											<tr>
												<td align='center' style='font-size: 18px;font-family: Roboto, Arial, Helvetica, sans-serif;color: white;font-weight: 300;word-break: break-word;line-height: 26px;padding-top: 10px;padding-bottom: 10px;'>
													<span style='font-weight: 300; font-size: 18px; line-height: 26px;'>
													<span style='font-size: 28px; line-height: 36px;'>$konu</span><br style='line-height: 24px;'></span>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table><!-- end HEADER LAYOUT-container width 600px -->
				</td><!-- end HEADER LAYOUT-container width 600px --></td>
			</tr><!--END IMAGE HEADER LAYOUT-->
		</tbody>
		<tbody>
			<tr>
				<td align='center' valign='top' style='background-color:#ecebeb;'>
				<!-- start  container width 600px -->
					<table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='border-bottom: 1px solid rgb(199, 199, 199); padding-left: 20px; padding-right: 20px; min-width: 600px; background-color: #ffffff; width: 600px;mso-table-lspace:0pt; mso-table-rspace:0pt;'><!--start space height --><tbody><tr><td height='20' valign='top' style='height: 20px; font-size: 0px; line-height: 0; border-collapse: collapse;'>&nbsp;
				</td>
			</tr><!--end space height -->
			<tr>
				<td valign='top'>
					<!-- start container width 560px -->
					<table width='560' align='center' border='0' cellspacing='0' cellpadding='0' class='full-width' style='width: 560px;mso-table-lspace:0pt; mso-table-rspace:0pt;'><!-- start heading --><tbody><!-- end heading --><!--start space height --><tr><td height='15' style='height: 15px; font-size: 0px; line-height: 0; border-collapse: collapse;'>&nbsp;
				</td>
            </tr><!--end space height --><!-- start text content -->
			<tr>
				<td valign='top'>
					<table width='100%' border='0' cellspacing='0' cellpadding='0' align='left' style='mso-table-lspace:0pt; mso-table-rspace:0pt;'>
						<tbody><!-- end heading --><!--start space height -->
							<tr>
								<td height='15' style='height: 15px; font-size: 0px; line-height: 0; border-collapse: collapse;'>&nbsp;</td>
							</tr><!--end space height --><!-- start text content -->
							<tr>
								<td valign='top'>
									<table width='100%' border='0' cellspacing='0' cellpadding='0' align='left' style='mso-table-lspace:0pt; mso-table-rspace:0pt; '>
										<tbody>
											<tr>
												<td style=' font-family: Roboto, Arial, Helvetica, sans-serif; color: rgb(163, 162, 162); font-weight: 300; text-align: left; word-break: break-word; line-height: 21px;'>
													<span style='font-weight: bold; color: rgb(128, 128, 128); font-size: 16px; line-height: 23px;'>Dear, $adsoyad, </span>
													<br style='line-height: 24px;'>
												</td>
											</tr>
											<tr><td></td></tr>
											<tr><td style='padding-top: 30px; padding-bottom: 30px;'>$mesaj</td></tr>
											<tr><td></td></tr>
											<tr>
												<td style=' font-family: Roboto, Arial, Helvetica, sans-serif; color: rgb(163, 162, 162); font-weight: 300; text-align: left; word-break: break-word; line-height: 21px; padding-bottom:30px;'>
													<span style=' color: rgb(128, 128, 128); font-size: 16px; line-height: 23px;'>Best Regards...</span>
												</td>
											</tr>
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
            </tr>
		</tbody>
	</table><!-- end  container width 560px --></td>
    </tr><!--start space height -->
	</tbody>
	</table><!-- end  container width 600px -->
	</td>
    </tr><!-- END LAYOUT-9 -->
		</tbody><!--  START FOOTER COPY RIGHT -->
		<tbody>
			<tr>
				<td align='center' valign='top' style='background-color: #9c27b0;'>
					<table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='min-width: 600px; padding-left: 20px; padding-right: 20px; background-color: rgba(92, 10, 55, 0.37); width: 600px; mso-table-lspace:0pt; mso-table-rspace:0pt;'>
						<tbody>
							<tr>
								<td valign='top'>
									<table width='560' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='width: 560px; mso-table-lspace:0pt; mso-table-rspace:0pt;'><!--start space height -->
									<tbody>
										<tr>
											<td height='10' style='height: 10px; font-size: 0px; line-height: 0; border-collapse: collapse;'>&nbsp;</td>
										</tr><!--end space height -->
										<tr><!-- start COPY RIGHT content -->
											<td valign='top' style='ffont-family: Roboto, Arial, Helvetica, sans-serif; color: rgb(255, 255, 255); font-weight: 300; text-align: center; word-break: break-word; line-height: 21px;'>
												<span style='font-size: 16px; line-height: 21px;color:#fff;'>
												
												<a style='color: #fff;' href='mailto:info@qboni.com' target='_blank'>info@qboni.com</a> 
												&nbsp; &nbsp; &nbsp;
												<a href='https://www.qboni.com' style='color:white;'>www.qboni.com</a></span>
											</td>
											<!-- end COPY RIGHT content -->
										</tr><!--start space height -->
										<tr>
											<td height='10' style='height: 10px; font-size: 0px; line-height: 0; border-collapse: collapse;'>&nbsp;</td>
										</tr><!--end space height -->
									</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr><!--  END FOOTER COPY RIGHT -->
		</tbody><!--  START FOOTER COPY RIGHT -->
		<tbody>
			<tr>
				<td align='center' valign='top' style='background-color: #9c27b0;'>
					<table width='600' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='min-width: 600px; padding-left: 20px; padding-right: 20px; background-color: #9c27b0; width: 600px;mso-table-lspace:0pt; mso-table-rspace:0pt;'>
						<tbody>
							<tr>
								<td valign='top'>
									<table width='560' align='center' border='0' cellspacing='0' cellpadding='0' class='container' style='width: 560px;mso-table-lspace:0pt; mso-table-rspace:0pt;'><!--start space height -->	  <tbody>
											<tr>
												<td height='10' style='height: 10px; font-size: 0px; line-height: 0; border-collapse: collapse;'>&nbsp;</td>
											</tr><!--end space height -->
											<tr><!-- start COPY RIGHT content -->
												<td align='center' style='font-size: 13px; font-family: Roboto, Arial, Helvetica, sans-serif; color: rgb(255, 255, 255); font-weight: 300; text-align: center; word-break: break-word; line-height: 21px;'>
													<span style='font-weight: 300; font-size: 16px; line-height: 21px;'>Qboni&nbsp;, all rights reserved © 2017 </span>
												</td>
											  <!-- end COPY RIGHT content -->
											</tr><!--start space height -->
											<tr>
												<td height='10' style='height: 10px; font-size: 0px; line-height: 0; border-collapse: collapse;'>&nbsp;</td>
											</tr><!--end space height -->
										</tbody>
									</table>
								</td>
							</tr>
						</tbody>
					</table>
				</td>
			</tr><!--  END FOOTER COPY RIGHT -->
		</tbody>
		</table>
		</body>
</html>
";

    return $content;

}

?>