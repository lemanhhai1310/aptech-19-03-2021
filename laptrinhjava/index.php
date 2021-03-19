<?php
    include_once '../astc.config.php';

    $titlePage = 'Aptech | Java';

    $metaDescription = '3 sai lầm phổ biến khi học lập trình Java Web. 3 kinh nghiệm học lập trình Java hiệu quả dành cho người mới bắt đầu. Khóa học Java cùng Chuyên gia công nghệ để lập trình Web, lập trình game Java. Học Java cơ bản tiết kiệm thời gian học, ứng dụng Công nghệ mới nhất 2020.';
    $metaKeywords = 'học java, hoc java, học javascript, hoc javascript, học java cơ bản, hoc java co ban, khóa học java, java aptech, aptech, học java từ đầu, khóa học java, lập trình web với java, khóa học lập trình java web';

    $feelStd = json_decode(file_get_contents("../assets/data/feel-std.json"));
    $quoteCom = json_decode(file_get_contents("../assets/data/quote-com.json"));

    $formSubmitRedirect = BASE_URL.'/laptrinhjava/dang-ky-thanh-cong';
    $formSubmitSubject = 'Đăng ký khóa học lập trình Java';

    $fbComment = BASE_URL.'/laptrinhjava';
?>

<!Doctype html>
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

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="<?php echo $metaDescription ?>">
    <meta name="keywords" content="<?php echo $metaKeywords ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" /> -->
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/master<?php echo FILE_EXT ?>.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/style<?php echo FILE_EXT ?>.css">
    <title><?php echo $titlePage ?></title>
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TTFCG7G"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white pl-4">
        <a class="navbar-brand" href="https://aptechvietnam.com.vn/" target="_blank">
            <img src="../assets/img/logo-min.png" class="mr-2">
            <!-- <img src="../assets/img/logo-second-min.png"> -->
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active px-lg-3">
                    <a class="nav-link text-uppercase font-600 px-0 link-scroll text-center" href="#">Giới thiệu</a>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link text-uppercase font-600 px-0 link-scroll text-center" href="#section-2">Khóa học này dành cho ai</a>
                </li>
                <li class="nav-item px-lg-3">
                    <a class="nav-link text-uppercase font-600 px-0 link-scroll text-center" href="#regis-form">Tư vấn miễn phí</a>
                </li>
                <li class="nav-item pl-lg-3 pr-lg-0">
                    <div class="d-flex flex-nowrap justify-content-center py-3 py-lg-0">
                        <a class="nav-link p-0 nav-link-social mr-3" target="_blank" href="https://www.facebook.com/aptechvietnam.com.vn/">
                            <img src="../assets/img/icon-fb-min.png">
                        </a>
                        <a class="nav-link p-0 nav-link-social mr-3" target="_blank" href="https://www.youtube.com/user/aprotrainaptechvn">
                            <img src="../assets/img/icon-youtube-min.png">
                        </a>
                        <a class="btn regis-btn text-bold text-uppercase px-5 link-scroll font-600" href="#regis-form">Đăng ký</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Header -->

  	<a href="#regis-form" class="banner section-banner">
        <img class="w-100" src="./assets/img/banner-PC_java-min.jpg"> 
    </a>
    <div class="bg-white">
    	<div class="container py-5">
    		<h3 class="text-center text-bold text-uppercase title mb-5 text-main px-5">03 lý do bạn cần phải học khoá java ngay hôm nay</h3>
    		<div class="row reason mt-4">
    			<div class="col-md-6 bodered">
    				<!-- Youtube -->
    				<iframe class="youtube-block" src="https://www.youtube.com/embed/I-VEiZqVohQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    			</div>
    			<div class="col-md-6">
    				<div class="content mt-3">
    					<img src="./assets/img/java-min.png" alt="">
    					<span class="text d-block">Java là ngôn ngữ lập trình phổ biến bậc nhất thế giới.</span>
    				</div>
    				<div class="content mt-5">
    					<img src="./assets/img/responsive-min.png" alt="">
    					<span class="text d-block">Lập trình cho mọi nền tảng Desktop, Web, Mobile.</span>
    				</div>
    				<div class="content mt-5">
    					<img src="./assets/img/money-min.png" alt="">
    					<span class="text d-block">Mức lương khởi điểm cho Lập trình viên Java tối thiểu 800USD/tháng.
    					</span>
    				</div>
    			</div>
    		</div>
    	</div>	
    </div>	
      
    <section id="section-2" class="section-2 pt-5 px-5 bg-main">
        <h3 class="text-uppercase text-white text-center text-bold pb-4">Khóa học này dành cho ai?</h3>
        <div class="d-flex sec-2 justify-content-center">
            <div class="text-center d-flex align-items-end px-3 flex-basis-40">
                <img class="w-100" src="./assets/img/Layer 67-min.png" alt="">
            </div>
            <div class="d-flex flex-column justify-content-center px-3 flex-basis-40 pb-4">
                <div class="box d-flex align-items-center">
                    <img src="./assets/img/sec2-t1-min.png" alt="">
                    <div class="text-white p-3">
                        <h4>Sinh viên CNTT</h4>
                        <p class="mb-0">muốn học bài bản, có khả năng thực chiến tốt với Java.</p>
                    </div>
                </div>
                <div class="box d-flex align-items-center">
                    <img src="./assets/img/sec2-t2-min.png" alt="">
                    <div class="text-white p-3">
                        <h4>Lập trình viên</h4>
                        <p class="mb-0">đang làm việc tại các Doanh nghiệp, muốn bổ sung kiến thức và kỹ năng lập trình Java để phục vụ cho công việc.</p>
                    </div>
                </div>
                <div class="box d-flex align-items-center">
                    <img src="./assets/img/sec2-t3-min.png" alt="">
                    <div class="text-white p-3">
                        <h4>Học sinh, sinh viên, người đi làm </h4>
                        <p class="mb-0">mới bắt đầu tìm hiểu về lập trình. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section-3 pt-5 bg-white">
        <h3 class="text-center text-main text-uppercase text-bold mb-4 px-5">Những sai lầm phổ biến khi học Lập trình Java</h3>
        <div class="d-flex justify-content-center wrapper">
            <div class="flex-basis-40 d-flex justify-content-end align-items-end px-3">
                <img class="mw-100" src="./assets/img/sec-3img-min.png" alt="">
            </div>
            <div class="flex-basis-40 px-3 pb-5">
                <div class="d-flex align-items-center mb-3">
                    <img src="./assets/img/x-tick-min.png" alt="">
                    <span class="pl-3 text-bold">Muốn học nhanh quá nhiều công nghệ cùng 1 lúc.</span>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="./assets/img/x-tick-min.png" alt="">
                    <span class="pl-3 text-bold">Suy nghĩ chỉ cần học ngôn ngữ Java là có thể lập trình Java mà không chú trọng rèn luyện tư duy logic, khả năng giải quyết vấn đề,...</span>
                </div>
                <div class="d-flex align-items-center mb-3">
                    <img src="./assets/img/x-tick-min.png" alt="">
                    <span class="pl-3 text-bold">Tự học Java 1 mình mà không có sự trao đổi, kết nối với những người khác.</span>
                </div>
            </div>
        </div>
    </section>

    <section class="section-4 bg-main py-5">
        <h3 class="text-center text-bold text-white text-uppercase px-5">03 kinh nghiệm học Lập trình Java</h3>
        <div class="d-flex justify-content-between px-3 flex-wrap container">
            <div class="box pt-4 d-flex justify-content-center flex-grow-1">
                <img src="./assets/img/sec-4-1-min.png" alt="">
            </div>
            <div class="box pt-4 d-flex justify-content-center flex-grow-1">
                <img src="./assets/img/sec-4-2-min.png" alt="">
            </div>
            <div class="box pt-4 d-flex justify-content-center flex-grow-1">
                <img src="./assets/img/sec-4-3-min.png" alt="">
            </div>
        </div>
    </section>

    <div class="section-5 py-5 bg-white">
        <h3 class="text-center text-bold text-uppercase text-main px-5">Ưu điểm vượt trội của khoá học lập trình java tại aptech</h3>
        <div class="d-flex justify-content-center pt-3 flex-wrap">
            <div class="box">
                <div class="img-container"><img src="./assets/img/proffessor-min.png"></div>
                <p class="pt-3">
                    <span class="text-bold">Giảng viên là các Chuyên gia Công nghệ</span>
                    <br>
                    <small>Giúp sinh viên ứng dụng ngay kiến thức mới học vào thực tế</small>
                </p>
            </div>
            <div class="box">
                <div class="img-container"><img class="ml-2" src="./assets/img/time-min.png"></div>
                <p class="pt-3">
                    <span class="text-bold">Tiết kiệm thời gian học</span>
                    <br>
                    <small>Sinh viên ra trường có thể ứng tuyển ngay vào các Doanh nghiệp tuyển dụng.</small>
                </p>
            </div>
            <div class="box">
                <div class="img-container"><img src="./assets/img/reactjs-min.png"></div>
                <p class="pt-3">
                    <span class="text-bold">Áp dụng công nghệ mới nhất</span>
                    <br>
                    <small>Cập nhật chương trình 2020 của Aptech toàn cầu với các công nghệ Web mới nhất.</small>
                </p>
            </div>
            <div class="box">
                <div class="img-container"><img src="./assets/img/coder-min.png"></div>
                <p class="pt-3">
                    <span class="text-bold">Dự án thực tế</span>
                    <br>
                    <small>Học viên được tham gia dự án thực tế vào cuối kỳ dưới sự hướng dẫn trực tiếp của các giảng viên.</small>
                </p>
            </div>
            <div class="box">
                <div class="img-container"><img src="./assets/img/certificate-min.png"></div>
                <p class="pt-3">
                    <span class="text-bold">Chứng chỉ uy tín</span>
                    <br>
                    <small> Kết thúc khóa học học viên được nhận chứng chỉ <span class="text-bold">“Chuyên viên lập trình Java” (Aptech Certified Java Programmer)</span> do Aptech cấp.</small>
                </p>
            </div>
        </div>
    </div>

  	<div class="section-6">
  		<div class="bn-1  float-left">
  			<div class="text text-bold d-flex justify-content-center text-center">Hoàn thành khoá học, học viên được giới thiệu làm việc tại các Doanh nghiệp CNTT lớn.</div>
  		</div>
  		<div class="bn-2 float-right">
  			<div class="detail">
  				<button class="btn rounded-pill bg-white text-bold px-4 py-2 ml-5" data-toggle="collapse" data-target="#detailCollapse">→ Xem chi tiết khóa học</button>
  			</div>
  		</div>
    </div>
    <div class="section-6-mb flex-column align-items-center py-3">
        <div class="text d-flex justify-content-center text-center p-2 text-bold">Hoàn thành khoá học, học viên được giới thiệu làm việc tại các Doanh nghiệp CNTT lớn.</div>
        <button class="text-white btn rounded-pill text-bold px-5 mb-3" data-toggle="collapse" data-target="#detailCollapse">→ Xem chi tiết khóa học</button>
    </div>
    <div class="collapse section-6-collapse py-4" id="detailCollapse">
        <div class="d-flex flex-column align-items-center">
            <!-- <img class="w-100" src="./assets/img/course-detail.jpg"> -->
            <table class="table">
                <thead>
                    <tr class="title-tr table-bordered">
                        <td class="text-bold">Khóa ACJP (Aptech Certificate Java Programing)</td>
                        <td class="text-center text-bold">Số buổi</td>
                        <td class="text-center text-bold">Giờ/buổi</td>
                        <td class="text-center text-bold">Số giờ</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-bold">Learn Java By Example</td>
                        <td class="text-center focused text-bold">13</td>
                        <td class="text-center text-bold">2</td>
                        <td class="text-center focused text-bold">26</td>
                    </tr>
                    <tr>
                        <td class="text-bold">Distributed Computing in Java</td>
                        <td class="text-center focused text-bold">12</td>
                        <td class="text-center text-bold">2</td>
                        <td class="text-center focused text-bold">24</td>
                    </tr>
                    <tr>
                        <td class="text-bold">Working with Database and Security in Java</td>
                        <td class="text-center focused text-bold">8</td>
                        <td class="text-center text-bold">2</td>
                        <td class="text-center focused text-bold">16</td>
                    </tr>
                    <tr>
                        <td class="text-bold">eProject 1 (Java)</td>
                        <td class="text-center focused text-bold">4</td>
                        <td class="text-center text-bold">2</td>
                        <td class="text-center focused text-bold">8</td>
                    </tr>
                    <tr>
                        <td class="text-bold">TOTAL</td>
                        <td class="text-center focused text-bold"></td>
                        <td class="text-center text-bold"></td>
                        <td class="text-center focused text-bold">74</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table class="table">
                <thead>
                    <tr class="title-tr table-bordered">
                        <td class="text-bold">Khóa ACJD (Aptech Certificate Java Developer)</td>
                        <td class="text-center text-bold">Số buổi</td>
                        <td class="text-center text-bold">Giờ/buổi</td>
                        <td class="text-center text-bold">Số giờ</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-bold">Web Programing with Servlet and JSP</td>
                        <td class="text-center focused text-bold">20</td>
                        <td class="text-center text-bold">2</td>
                        <td class="text-center focused text-bold">40</td>
                    </tr>
                    <tr>
                        <td class="text-bold">Architeching Web Applications using JSF and Struts</td>
                        <td class="text-center focused text-bold">8</td>
                        <td class="text-center text-bold">2</td>
                        <td class="text-center focused text-bold">16</td>
                    </tr>
                    <tr>
                        <td class="text-bold">eProject 2 (Java)</td>
                        <td class="text-center focused text-bold">5</td>
                        <td class="text-center text-bold">2</td>
                        <td class="text-center focused text-bold">10</td>
                    </tr>
                    <tr>
                        <td class="text-bold">TOTAL</td>
                        <td class="text-center focused text-bold"></td>
                        <td class="text-center text-bold"></td>
                        <td class="text-center focused text-bold">66</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>


    <div class="section-7 py-5 bg-white">
        <h3 class="text-bold text-center text-uppercase text-main px-5">Bạn sẽ làm được gì sau khoá học<br> "Lập trình Java chuyên nghiệp" tại Aptech</h3>
        <h6 class="text-center px-5 text-bold">Hoàn thành khóa học Học viên có khả năng xây dựng các phần mềm quản lý, website thương mại điện tử trên nền tảng Java, phát triển phần mềm ứng dụng trong dịch vụ tài chính, ngân hàng...</h6>

        <div class="d-flex justify-content-center pt-3 flex-wrap">
            <!-- List -->
            <div class="box m-2 d-flex flex-column">
                <div class="position-relative">
                    <img class="w-100" src="./assets/img/prj1-min.png">
                    <div class="detail-layer">
                        <a href="https://aptechvietnam.com.vn/quan-ly-cau-lac-bo-bong-ban" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                    </div>
                </div>
                <div class="p-3 text-center">
                    <h6 class="text-bold p-0 text-main">Đề tài: Quản lý CLB Bóng Bàn</h6>
                    <p class="m-0">
                        <small>Quản lý CLB Bóng Bàn</small>
                        <br>
                        <span class="text-bold">Lớp: C1606L</span>
                    </p>
                </div>
            </div>
            <div class="box m-2 d-flex flex-column">
                <div class="position-relative">
                    <img class="w-100" src="./assets/img/prj2-min.png">
                    <div class="detail-layer">
                        <a href="https://aptechvietnam.com.vn/project-hoc-ky-2" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                    </div>
                </div>
                <div class="p-3 text-center">
                    <h6 class="text-bold p-0 text-main">Đề tài: Game bắn xe tăng trên nền tảng Java</h6>
                    <p class="m-0">
                        <small>Project học kỳ 2</small>
                        <br>
                        <span class="text-bold">Lớp: C1410L</span>
                    </p>
                </div>
            </div>
            <div class="box m-2 d-flex flex-column">
                <div class="position-relative">
                    <img class="w-100" src="./assets/img/prj3-min.png">
                    <div class="detail-layer">
                        <a href="https://aptechvietnam.com.vn/de-tai-he-thong-quan-ly-diem-sinh-vien" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                    </div>
                </div>
                <div class="p-3 text-center">
                    <h6 class="text-bold p-0 text-main">Đề tài: Hệ thống quản lý điểm sinh viên</h6>
                    <p class="m-0">
                        <small>Project học kỳ 1</small>
                        <br>
                        <!-- <span class="text-bold">Lớp: C1610I</span> -->
                    </p>
                </div>
            </div>
            <div class="box m-2 d-flex flex-column">
                <div class="position-relative">
                    <img class="w-100" src="./assets/img/prj4-min.png">
                    <div class="detail-layer">
                        <a href="https://aptechvietnam.com.vn/thiet-ke-website-thuong-mai-dien-tu" class="px-4 btn text-white text-bold border-light rounded-pill" target="_blank">Xem thêm ></a>
                    </div>
                </div>
                <div class="p-3 text-center">
                    <h6 class="text-bold p-0 text-main">Đề tài: Thiết kế Website thương mại điện tử</h6>
                    <p class="m-0">
                        <small>Thiết kế Website thương mại điện tử</small>
                        <br>
                        <span class="text-bold">Lớp: C1611L</span>
                    </p>
                </div>
            </div>
            <!-- End List -->
        </div>
    </div>


  	<div class="section-8 py-5">
  		<h3 class="text-center text-uppercase title text-bold text-main px-5">Học xong  bạn sẽ làm việc ở đâu?</h3>
  		<div class="container">
  			<p class="text-center text">Tham khảo các vị trí tuyển dụng Lập trình Java tại đây:</p>
  			<div class="row mt-5">
  				<div class="col-md-8 col-12">
	  				<div class="row d-flex flex-wrap">
	  					<div class="block-area col-md-6 col-6">
		  					<div class="head">
		  						<div class="img-container">
                                    <img class="h-100" src="./assets/img/logo1-min.png" alt="ifi solution">
                                </div>
		  						<span class="name-company text-uppercase">ifi solution</span>
		  					</div>
		  					<div class="body">
		  						<p class="body_title">Tuyển dụng FRESHER JAVA</p>
		  						<div class="content">
		  							<p>→ Làm việc trong môi trường CNTT chuyên nghiệp. Cơ hội trở thành nhân viên chính thức</p>

		  							<p>→ Tiếp xúc với các dự án lớn như IoT, Big Data, ITS …</p>

		  							<a href="https://www.facebook.com/groups/JobAptech/permalink/2373412106267351" class="final" style="margin-top: 37px;" target="_blank">→ Xem chi tiết </a>
		  						</div>
		  					</div>
	  					</div>

		  				<div class="block-area col-md-6 col-6">
		  					<div class="head">
		  						<div class="img-container border-0 bg-transparent">
                                    <img class="h-100 w-100" src="./assets/img/T_Solution-min.png" alt="t-solution">
                                </div>
		  						<span class="name-company text-uppercase">T-SOLUTION</span>
		  					</div>
		  					<div class="body">
		  						<p class="body_title">Tuyển JAVA developer</p>
		  						<div class="content">
		  							<p>→ Mức lương: 500$ - 1500$</p>

		  							<p>→ Xét tăng lương 2 lần/năm + bonus + lương tháng 13.</p>
		  							<p>→ Tham gia vào các dự án lập trình phát triển phần mềm product, outsource trong và ...</p>
		  							<a href="https://www.facebook.com/groups/JobAptech/permalink/2367285340213361" class="final" target="_blank">→ Xem chi tiết </a>
		  						</div>
		  					</div>
		  				</div>

		  				<div class="block-area col-md-6 mt-4 col-6">
		  					<div class="head">
		  						<div class="img-container">
                                    <img src="./assets/img/leadsgen-min.png" alt="leadsgen">
                                </div>
		  						<span class="name-company">LeadsGen</span>
		  					</div>
		  					<div class="body">
		  						<p class="body_title">Tuyển dụng JAVA developer</p>
		  						<div class="content">
		  							<p>→ Mức lương: 10-20 triệu.</p>

		  							<p>→ Được tham gia vào các dự án với các đối tác lớn ở nước ngoài.</p>
		  							<p>→ Thưởng cuối năm, du lịch 2 lần/năm và xét tăng lương 01 lần/năm...</p>
		  							<a href="https://www.facebook.com/groups/JobAptech/permalink/2327418970866665" class="final" target="_blank">→ Xem chi tiết </a>
		  						</div>
		  					</div>
		  				</div>

		  				<div class="block-area col-md-6 mt-4 col-6">
		  					<div class="head">
		  						<div class="img-container">
                                    <img src="./assets/img/synergix-min.png" alt="synergix-min.png">
                                </div>
		  						<span class="name-company">Synergix Việt Nam</span>
		  					</div>
		  					<div class="body">
		  						<p class="body_title">Tuyển dụng JAVA developer</p>
		  						<div class="content">
		  							<p>→ Lương từ $600 - $1200.</p>
		  							<p>→ Lương tháng 13, 14 ; Xét tăng lương 2 lần/ năm.</p>
		  							<p>→ Tham gia các loại bảo hiểm full lương theo quy định của Pháp luật.</p>
		  							<a href="https://www.facebook.com/groups/JobAptech/permalink/2307815716160324" class="final" target="_blank">→ Xem chi tiết </a>
		  						</div>
		  					</div>
		  				</div>
	  				</div>
  				</div>
  				<div class="col-md-4 block-fb col-12">
  					<div class="head">
  						<p>→ Xem thêm tại </p>
  					</div>
  					<div class="fb-group w-100" data-href="https://www.facebook.com/groups/JobAptech/"  data-show-social-context="true" data-show-metadata="true"></div>
  				</div>	
  			</div>
  		</div>
  	</div>

  	<section class="section-9 py-5">
        <h3 class="text-white text-center text-bold px-5">BÁO CHÍ NÓI VỀ APTECH</h3>
        <div class="d-flex mt-4 justify-content-center flex-wrap">
            <!-- List -->
            <div class="box bg-white m-3 d-flex flex-column">
                <img height="183" width="259" src="./assets/img/Layer_54-min.png">
                <div class="p-3">                    
                    <small>Nguồn: <span class="text-bold">Vietnamnet.vn</span></small>
                    <h5 class="py-2 text-justify text-bold">Lễ ký kết hợp tác đào tạo Công nghệ 4.0 cho các Trường đại học.</h5>
                    <!-- <p class="text-justify">Nhằm giúp Việt Nam đào tạo đội ngũ giảng viên CN 4.0, Bộ GD&ĐT phối hợp với Tập đoàn Aptech tổ chức Khóa đào tạo Công nghệ 4.0 cho các giảng viên đại học.</p> -->
                </div>
                <a target="_blank" class="text-bold mt-auto px-3 pb-3" href="https://vietnamnet.vn/vn/cong-nghe/tin-cong-nghe/hoi-thao-giai-phap-dao-tao-nhan-luc-cntt-thoi-4-0-546367.html">Xem thêm ></a>
            </div>
            <div class="box bg-white m-3 d-flex flex-column">
                <iframe width="259" height="183" src="https://www.youtube.com/embed/Z_VRZ8RBpkg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="p-3">                    
                    <small>Nguồn: <span class="text-bold">Truyền hình VTV6</span></small>
                    <h5 class="py-2 text-justify text-bold">Aptech - Lễ ký kết hợp tác đào tạo Công nghệ 4.0 cho giảng viên các Trường đại học.</h5>
                    <!-- <p class="text-justify">Ngày 03/07, Bộ GD & ĐT cùng với Tập đoàn Aptech tổ chức Hội thảo Giải pháp đào tạo nhân lực CNTT cho CMCN 4.0 với sự tham gia của Đại sứ quán Ấn Độ, các tập đoàn công nghệ hàng đầu Thế giới như Microsoft, Oracle và lãnh đạo các trường Đại học.</p> -->
                </div>
                <a target="_blank" class="text-bold mt-auto px-3 pb-3" href="https://vietnamnet.vn/vn/cong-nghe/tin-cong-nghe/hoi-thao-giai-phap-dao-tao-nhan-luc-cntt-thoi-4-0-546367.html">Xem thêm ></a>
            </div>
            <div class="box bg-white m-3 d-flex flex-column">
                <img height="183" width="259" src="./assets/img/Layer_55-min.png">
                <div class="p-3">                    
                    <small>Nguồn: <span class="text-bold">Giaoducthoidai.vn</span></small>
                    <h5 class="py-2 text-justify text-bold">Cơ hội việc làm tại ngày hội tuyển dụng Aptech Job Fair 2019.</h5>
                    <!-- <p class="text-justify">Sáng (20/04) tại Hà Nội, Aptech tổ chức Ngày hội tuyển dụng Aptech job fair 2019, đây là dip để các bạn trẻ có cơ hội tìm hiểu về ngành nghề mà mình yêu thích, cũng như đăng ký ứng tuyển trực tiếp với các Doanh nghiệp tuyển dụng.</p> -->
                </div>
                <a target="_blank" class="text-bold mt-auto px-3 pb-3" href="https://giaoducthoidai.vn/giao-duc/nganh-cong-nghe-thong-tin-chinh-sach-dai-ngo-tot-vi-sao-van-kho-tuyen-nhan-su-3997074-v.html">Xem thêm ></a>
            </div>
            <div class="box bg-white m-3 d-flex flex-column">
                <iframe width="259" height="183" src="https://www.youtube.com/embed/sd2KKryb5y4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="p-3">                    
                    <small>Nguồn: <span class="text-bold">Truyền hình VTC1</span></small>
                    <h5 class="py-2 text-justify text-bold">Lễ Khai giảng và Trao bằng tốt nghiệp năm 2019 tại Aptech.</h5>
                    <!-- <p class="text-justify">Vừa qua (28/07), Lễ tốt nghiệp dành cho các bạn học viên vượt qua hơn 40 bài thi và 4 dự án phần mềm và Chào đón Tân học viên đã diễn ra tại Trung tâm Văn hóa Pháp L’Espace. Buổi lễ có sự tham dự của hơn 200 học sinh và phụ huynh cùng các doanh nghiệp công nghệ tuyển dụng.</p> -->
                </div>
                <a target="_blank" class="text-bold mt-auto px-3 pb-3" href="https://www.facebook.com/aptechvietnam.com.vn/videos/2601192076560243">Xem thêm ></a>
            </div>
            <!-- End List -->
        </div>
    </section>

    <!-- <section class="section-10 pt-5 pb-4 bg-white">
        <h3 class="text-bold text-center text-main px-5">MÔI TRƯỜNG HỌC TẬP CHUYÊN NGHIỆP TẠI APTECH</h3>
        <div class="img-container mt-4 d-flex flex-wrap justify-content-center">
            <?php for($i = 1; $i <= 6; $i++): ?>
                <div class="box m-3">
                    <a data-fancybox="gallery" href="../assets/img/env/eco<?php echo $i ?>-min.png">
                        <img class="w-100" src="../assets/img/env/eco<?php echo $i ?>-min.png">
                    </a>
                </div>
            <?php endfor ?>
        </div>
        <h4 class="text-center text-main text-bold">Bạn muốn học tại môi trường này không?</h4>
        <div class="d-flex justify-content-center align-items-center mt-3">
            <img src="./assets/img/caret1-min.png" alt="">
            <a href="#regis-form" class="btn btn-warning text-bold px-4 mx-3">Tôi muốn</a>
            <img src="./assets/img/caret2-min.png" alt="">
        </div>
    </section> -->


    <?php include_once('./section-11.php') ?>


    <section class="section-13 pt-0 pb-5" id="regis-form">
        <div class="pt-4 d-flex justify-content-center flex-wrap">
            <div class="box p-3 pt-0 d-flex text-center flex-basis-40">
                <img class="mw-100 m-auto" src="./assets/img/promotion-min.png" alt="promotion.png">
            </div>
            <div class="box p-3 flex-basis-40">
                <h5 class="text-white mb-3 text-bold text-center">Đăng ký tư vấn<br>và nhận bộ tài liệu tự học Java miễn phí</h5>
                <form class="d-flex flex-column" action="../mail/sendmail.php" method="POST">
                    <input class="form-control form-control-lg mb-3 pl-4" type="" name="txtName" placeholder="Họ và tên" required>
                    <input class="form-control form-control-lg mb-3 pl-4" type="email" name="txtEmail" placeholder="Email" required>
                    <input class="form-control form-control-lg mb-3 pl-4" type="tel" name=txtPhone placeholder="Số điện thoại" required>
                    <input class="form-control form-control-lg mb-3 pl-4" type="" name="dateBirth" placeholder="Năm sinh" required>
                    <select class="form-control form-control-lg mb-3 pl-4" name="slCenter" required>
                        <option value>Chọn địa điểm học</option>
                        <option value="aptech3@aprotrain.com">Tòa nhà Aptech, 285 Đôi Cấn, Ba Đình, Hà Nội</option>
                        <option value="aptech3@aprotrain.com">Tòa nhà Aptech, 54 Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</option>
                    </select>
                    <input class="d-none" type="" name="subject" value="<?php echo $formSubmitSubject ?>">
                    <input class="d-none" type="" name="redirectUrl" value="<?php echo $formSubmitRedirect ?>">
                    <button type="submit" class="btn btn-round btn-warning btn-lg text-bold px-5 align-self-end">NHẬN TƯ VẤN</button>
                </form>
                <p class="text-white text-italic pt-4 mb-0">Thời gian ưu đãi còn:</p>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="countdown-box d-flex flex-column align-items-center text-white text-center py-3 px-3 mt-4">
                        <h1 class="countdown-box-days text-bold m-0"></h1>
                        <p class="m-0">Ngày</p>
                    </div>
                    <div class="countdown-box d-flex flex-column align-items-center text-white text-center py-3 px-3 mt-4">
                        <h1 class="countdown-box-hours text-bold m-0"></h1>
                        <p class="m-0">Giờ</p>
                    </div>
                    <div class="countdown-box d-flex flex-column align-items-center text-white text-center py-3 px-3 mt-4">
                        <h1 class="countdown-box-minutes text-bold m-0"></h1>
                        <p class="m-0">Phút</p>
                    </div>
                    <div class="countdown-box d-flex flex-column align-items-center text-white text-center py-3 px-3 mt-4">
                        <h1 class="countdown-box-seconds text-bold m-0"></h1>
                        <p class="m-0">Giây</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div class="section-14 py-5 bg-white">
        <h3 class="text-center text-bold text-main px-5">MỌI NGƯỜI NÓI GÌ VỀ APTECH?</h3>
        <div class="fb-comments" data-href="<?php echo $fbComment ?>" width="100%" data-numposts="5"></div>
    </div>

    <!-- Footer -->
    <footer class="text-white text-md-left text-center">
        <div class="container py-5 text-center">
            <h4 class="text-uppercase text-white text-center text-bold">Hệ thống đào tạo lập trình viên quốc tế Aptech</h4>
            <div class="d-flex justify-content-center align-items-center pt-3 flex-wrap">
                <div class="px-3">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill text-warning" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg> Hà Nội:
                </div>
                <div class="px-3"><span class="text-bold">285 Đội Cấn</span>, Q. Ba Đình</div>
                <div class="px-3"><span class="text-bold">54 Lê Thanh Nghị</span>, Q. Hai Bà Trưng</div>
                <div class="px-3">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-geo-alt-fill text-warning" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                    </svg> TP.HCM:
                </div>
                <div class="px-3"><span class="text-bold">212 - 214 Nguyễn Đình Chiểu</span>, Q.3</div>
            </div>
            <a href="mailto:aptech1@aprotrain.com" class="btn btn-lg btn-warning mt-3 px-4" style="line-height:1;border-radius:28px;">
                <span class="text-bold">Hotline: 1800 1141</span>
                <br>
                <small style="font-size:70%">Email: aptech1@aprotrain.com</small>
            </a>
        </div>
    </footer>
    <!-- End Footer -->

    <!-- Scroll button -->
    <button class="btn" id="scroll-top-btn">🡩</button>
    <!-- End scroll button -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script async defer src="../assets/js/bootstrap/util.min.js"></script>
    <script async defer src="../assets/js/bootstrap/collapse.min.js"></script>
    <script async defer src="../assets/js/bootstrap/carousel.min.js"></script>
    <script async defer src="../assets/js/bootstrap/button.min.js"></script>

    <!-- Fancybox -->
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <!-- Scroll top -->
    <script async defer src="../assets/js/scroll-top<?php echo FILE_EXT ?>.js"></script>

    <!-- Countdown -->
    <script async defer src="../assets/js/countdown<?php echo FILE_EXT ?>.js"></script>
    
    <!-- FB SDK -->
    <!-- <div id="fb-root"></div> -->
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=749494412182083&autoLogAppEvents=1"></script>
    <!-- End FB SDK -->

    <!-- Subiz -->
    <script>
        (function(s, u, b, i, z){
            u[i]=u[i]||function(){
                u[i].t=+new Date();
                (u[i].q=u[i].q||[]).push(arguments);
            };
            z=s.createElement('script');
            var zz=s.getElementsByTagName('script')[0];
            z.async=1; z.src=b; z.id='subiz-script';
            zz.parentNode.insertBefore(z,zz);
        })(document, window, 'https://widget.mysubiz.com/static/js/app.js', 'subiz');
        subiz('setAccount', 'acqpeyxnjmvbdavhzcwm');
    </script>
    <!-- End Subiz -->

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
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution=setup_tool
        page_id="100840921957725">
      </div>

    </div>
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
        });
    </script>

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
    setTimeout(() => {
            $('#modalMinigame').modal('show')
        }, 6000);
        // $('#modalMinigame').modal('show')
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
    <!-- END MINIGAME -->



</body>
</html>