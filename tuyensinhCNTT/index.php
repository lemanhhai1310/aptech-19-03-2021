<!DOCTYPE html>
<html lang="en">
<head>
<!--Start of AutoAds Tracking Code-->
<script id='autoAdsMaxLead-widget-script' src='https://cdn.autoads.asia/scripts/autoads-maxlead-widget.js?business_id=59966F38B832415EA14F4D39EF7B22EA' type='text/javascript' charset='UTF-8' async></script>
<!--End of AutoAds Tracking Code-->

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-TTFCG7G');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aptech | Tuyển sinh công nghệ thông tin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="./assets/style.css">
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTFCG7G"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <main>
        <?php
            include_once('./header.php');
            include_once('./section-1.php');
            include_once('./section-2.php');
            include_once('./section-3.php');
            include_once('./section-4.php');
            include_once('./section-5.php');
            include_once('./section-6.php');
            include_once('./section-7.php');
            include_once('./section-8.php');
            include_once('./footer.php');
        ?>
        <button class="btn" id="scroll-top-btn">🡩</button>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var mySwiper = new Swiper('.swiper-container', {
            // Optional parameters
            // direction: 'vertical',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        })
    </script>
    <script>
        //Get the button:
        const mybutton = document.querySelector("#scroll-top-btn");
        mybutton.addEventListener('click', scrollTop);

        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                mybutton.style.display = "block";
            } else {
                mybutton.style.display = "none";
            }
        };

        // When the user clicks on the button, scroll to the top of the document
        function scrollTop() {
            document.body.scrollTop = 0; // For Safari
            document.documentElement.scrollTop = 0; // For Chrome, Firefox, IE and Opera
        }
    </script>
    <?php if (!empty($_GET['regis'])) : ?>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Đăng ký thành công!',
            text: 'Chúc mừng bạn đã đăng ký thành công. Nhân viên tư vấn của Aptech sẽ liên hệ với bạn trong thời gian sớm nhất!',
            showConfirmButton: true,
        });
    </script>
    <?php endif ?>

<!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v9.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
      </script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="100840921957725">
      </div>
<!-- Chat Subiz -->
	<script>!function(s,u,b,i,z){var o,t,r,y;s[i]||(s._sbzaccid=z,s[i]=function(){s[i].q.push(arguments)},s[i].q=[],s[i]("setAccount",z),r=["widget.subiz.net","storage.googleapis"+(t=".com"),"app.sbz.workers.dev",i+"a"+(o=function(k,t){var n=t<=6?5:o(k,t-1)+o(k,t-3);return k!==t?n:n.toString(32)})(20,20)+t,i+"b"+o(30,30)+t,i+"c"+o(40,40)+t],(y=function(k){var t,n;s._subiz_init_2094850928430||r[k]&&(t=u.createElement(b),n=u.getElementsByTagName(b)[0],t.async=1,t.src="https://"+r[k]+"/sbz/app.js?accid="+z,n.parentNode.insertBefore(t,n),setTimeout(y,2e3,k+1))})(0))}(window,document,"script","subiz","acqpeyxnjmvbdavhzcwm")</script>
<!-- End chat Subiz -->

<!-- Nhúng vào cuối thẻ body -->
    <!-- MINIGAME -->

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
    <!-- Nhúng vào cuối thẻ body -->
    <!-- MINIGAME -->
    <style>
        @-webkit-keyframes rotate {
            from {
                -webkit-transform: rotate(0deg);
            }
            to { 
                -webkit-transform: rotate(360deg);
            }
        }
        .play-rotate {
            -webkit-animation-name:            rotate; 
            -webkit-animation-duration:        0.5s; 
            -webkit-animation-iteration-count: infinite;
            -webkit-animation-timing-function: linear;
        }
        
    </style>
    <img style="position:fixed;bottom:5px;right:10px" src="<?php echo "http://"."$_SERVER[HTTP_HOST]/minigame" ?>/minigame_assets/icon.png" data-toggle="modal" data-target="#modalMinigame">
    <div class="modal fade" style="overflow-x: auto;" id="modalMinigame" tabindex="-1" aria-labelledby="modalMinigameLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content position-relative"
                style="background-image: url(<?php echo "http://"."$_SERVER[HTTP_HOST]/minigame" ?>/minigame_assets/bg.png);
                    background-position: center;
                    border: initial;
                    border-radius: inherit;
                    min-width: 900px;">
                <button 
                    style="top: -18px;
                        right: -19px;
                        opacity: 1;
                        background-color: #fec31d;
                        width: 40px;
                        height: 40px;
                        border-radius: 50%;
                        padding-bottom: 7px;
                        font-weight: 900;
                        z-index: 100;"
                    type="button"
                    class="close position-absolute"
                    data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-body p-4 position-relative">
                    <div class="row">
                        <div class="col-6">
                            <img class="mw-100" src="<?php echo "http://"."$_SERVER[HTTP_HOST]/minigame" ?>/minigame_assets/logo.png" alt="">
                            <img class="mw-100 mt-5" src="<?php echo "http://"."$_SERVER[HTTP_HOST]/minigame" ?>/minigame_assets/title1.png" alt="">
                            <img class="mw-100" style="margin-left: 50px;" src="<?php echo "http://"."$_SERVER[HTTP_HOST]/minigame" ?>/minigame_assets/title2.png" alt="">
                            <h3 class="text-white mt-5" style="font-size: 1.5rem;">Thể lệ</h3>
                            <ul class="text-white"
                                style="list-style-image: url(<?php echo "http://"."$_SERVER[HTTP_HOST]/minigame" ?>/minigame_assets/dot.png);
                                    margin-left: -24px;">
                                <li>Mỗi người chơi sẽ có 1 lượt quay</li>
                                <li>Người chơi điền đẩy đủ thông tin bao gồm Họ tên, sđt, email để bắt đầu.</li>
                                <li>Cứ quay là sẽ có quà</li>
                                <li>Thời gian tham gia từ 27/01 – 15/03/2021</li>
                            </ul>
                        </div>
                        <div class="col-6">
                            <div class="position-relative" style="height: 500px;width: 400px">
                                <img class="position-absolute"
                                    style="height: 500px;;
                                        z-index: 0;
                                        left: 60px"
                                    src="<?php echo "http://"."$_SERVER[HTTP_HOST]/minigame" ?>/minigame_assets/group.png" alt="">
                                <img src="<?php echo "http://"."$_SERVER[HTTP_HOST]/minigame" ?>/minigame_assets/wheel.png" alt=""
                                    class="position-absolute wheel"
                                    style="height: 400px;
                                        width: 400px;;
                                        top: 35px;
                                        z-index: 1;">
                                <img src="<?php echo "http://"."$_SERVER[HTTP_HOST]/minigame" ?>/minigame_assets/marker.png" alt=""
                                    class="position-absolute"
                                    style="z-index: 2;
                                        top: 155px;
                                        left: 177px;">
                            </div>
                        </div>
                    </div>
                    <form name="minigame-form" class="position-absolute px-5 text-center d-flex flex-column align-items-center justify-content-center"
                        style="top: 0px;
                            right: 0px;
                            width: 450px;
                            height: 100%;
                            background-color: rgba(255, 255, 255, 0.9);
                            z-index: 10;">
                        <h3 style="color: #ab081e;
                            font-weight: bold;
                            text-align: center;">Nhập thông tin để bắt đầu</h3>
                        <input required style="border-color: #ea9e0e;" class="form-control mt-3" type="text" placeholder="Họ tên" name="minigame-name">
                        <input required style="border-color: #ea9e0e;" class="form-control mt-3" type="text" placeholder="Số điện thoại" name="minigame-phone">
                        <input required style="border-color: #ea9e0e;" class="form-control mt-3" type="email" placeholder="Email" name="minigame-email">
                        <button class="btn text-white mt-3"
                            style="background: #ab081e!important;
                                font-weight: bold;">BẮT ĐẦU CHƠI</button>
                    </form>
                </div>                
            </div>
        </div>
    </div>

    <div class="modal fade show" id="modalMinigame2" tabindex="-1" aria-labelledby="modalMinigame2Label" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-sm">
            <div class="modal-content">
                <div class="modal-body d-flex flex-column align-items-center">
                    <b>Món quà may mắn của bạn:</b>
                    <b id="minigame-gift-name" style="color: #ab081e; font-size: 22px;">Voucher khóa học</b>
                    <img id="minigame-gift-img" class="mt-3" src="<?php echo "http://"."$_SERVER[HTTP_HOST]/minigame" ?>/minigame_assets/gift1.png" alt="">
                    <button class="fb-share mt-3 btn text-white px-4" data-href="<?php echo "http://"."$_SERVER[HTTP_HOST]/minigame" ?>"
                        style="background-color: #ab081e; font-weight: bold;">
                        <img src="<?php echo "http://"."$_SERVER[HTTP_HOST]/minigame" ?>/minigame_assets/fb-icon.png" alt="">
                        SHARE
                    </button> 
                    <b><i><small>Share kết quả chơi để nhận quà</small></i></b>
                </div>
            </div>
        </div>
    </div>
    
    <!-- FB SDK -->
    <div id="fb-root"></div>
    <script crossorigin="anonymous" src="http://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v7.0&appId=316431589407979&autoLogAppEvents=1" nonce="POOuLbCt"></script>
    <script>
        // $('#modalMinigame').modal('show')
        setTimeout(() => {
            $('#modalMinigame').modal('show')
        }, 6000);
        $('.close').off('click').on('click', function(){
                $('#modalMinigame').modal('hide')
            }) ;
        const wheel = document.querySelector('.wheel')
        const form = document.querySelector('form[name=minigame-form]')
        form.addEventListener('submit', e => {
            e.preventDefault()
            const data = {
                name: document.querySelector('[name=minigame-name]').value,
                phone: document.querySelector('[name=minigame-phone]').value,
                email: document.querySelector('[name=minigame-email]').value,
            }
            form.classList.replace('d-flex', 'd-none')
            wheel.classList.add('play-rotate')
            const base_url = window.location.origin;
            fetch(`<?php echo "https://"."$_SERVER[HTTP_HOST]/minigame" ?>/minigame_assets/game.php?name=${data.name}&phone=${data.phone}&email=${data.email}&source=${base_url}`)
                // .then(res => res.json())
                .then(data => {
                    // document.querySelector('#minigame-gift-name').innerText = data.name
                    // document.querySelector('#minigame-gift-img').src = `<?php echo "http://"."$_SERVER[HTTP_HOST]/minigame/"?>${data.img}`
                    setTimeout(() => {
                        wheel.classList.remove('play-rotate')
                        let rotation = '0deg'
                        switch (data.id) {
                            case 1: rotation = '150deg'; break;
                            case 2: rotation = '90deg'; break;
                            case 3: rotation = '30deg'; break;
                            case 4: rotation = '-30deg'; break;
                            case 5: rotation = '-90deg'; break;
                            case 6: rotation = '-150deg'; break;
                        }
                        wheel.style.transform = `rotate(${rotation})`
                        
                        $('#modalMinigame2').modal('show')
                        $('#minigame-gift-img').css('transform','rotate(180deg)')
                    }, 2000)
                })
        })

        window.fbAsyncInit = function() {
            FB.init({
                appId: '862393471002894',
                status: true,
                xfbml: true,
                cookie: true
            });
        };

        $(document).ready(function() {
            $('.fb-share').click(function() {
                FB.ui({
                    method: 'feed',
                    // name: 'Manoj Yadav',
                    link: '<?php echo "http://"."$_SERVER[HTTP_HOST]/minigame" ?>',
                    picture: '<?php echo "http://"."$_SERVER[HTTP_HOST]/minigame" ?>/minigame_assets/fb-share.png',
                    // description: 'Manoj Yadav a PHP Developer from Mumbai, India'
                });
            });
        });
    </script>
    <!-- END MINIGAME -->

</body>
</html>