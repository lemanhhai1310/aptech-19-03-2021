<?php

$sec_5_data = [
    [
        'img' => './assets/img/section-5-1.png',
        'ul' => [
            'Nền tảng lập trình',
            'Thiết kế và quản trị Website',
            'Quản trị cơ sở dữ liệu',
            'Đồ án cuối kỳ: Xây dựng Website',
        ],
        'rs' => 'Sinh viên có khả năng thiết kế, xây dựng website và một số dạng ứng dụng trên thiết bị di động',
    ],
    [
        'img' => './assets/img/section-5-2.png',
        'ul' => [
            'Phát triển ứng dụng Java trên PC',
            'Giới thiệu Điện toán đám mây',
            'Nghiên cứu về công nghệ Big Data',
            'Đồ án cuối kỳ: Xây dựng ứng dụng trên PC, Website',
        ],
        'rs' => 'Sinh viên có khả năng lập trình, phát triển các ứng dụng, phần mềm trên máy tính',
    ],
    [
        'img' => './assets/img/section-5-3.png',
        'ul' => [
            'Phát triển các ứng dụng từ PC đến Website',
            'Phát triển các ứng dụng trên Web Azure, lập trình Điện toán đám mây',
            'Đồ án cuối kỳ: Xây dựng Website thương mại điện tử',
        ],
        'rs' => 'Sinh viên được trang bị những nền tảng công nghệ mới nhất của Microsoft, khả năng phát triển ứng dụng, phần mềm trên các nền tảng từ máy tính đến web, khả năng phát triển các ứng dụng trên nền tảng điện toán đám mây',
    ],
    [
        'img' => './assets/img/section-5-4.png',
        'ul' => [
            'Bảo mật trên Internet',
            'Phát triển ứng dụng doanh nghiệp trên nền tảng Java',
            'Phát triển chuyên sâu ứng dụng trên thiết bị di động Android',
            'Đồ án cuối kỳ: Xây dựng ứng dụng trên thiết bị di động',
        ],
        'rs' => 'Hết năm thứ hai, sinh viên có khả năng phát triển trên các ứng dụng lớn, tính chất đa nền tảng toàn cầu cho doanh nghiệp, đặc biệt là các hệ thống Ngân hàng, Bảo hiểm, Siêu thị, … Khả năng phát triển chuyên sâu các ứng dụng nền tảng di động',
    ],
];

?>

<section class="section-5 pt-5" id="course-section">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h3 class="text-center text-uppercase text-white font-weight-bold">
                    CHƯƠNG TRÌNH LẬP TRÌNH VIÊN QUỐC TẾ
                </h3>
            </div>
        </div>
    </div>
    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist" style="flex-wrap: initial">
        <?php foreach ($sec_5_data as $i => $data) : ?>
            <li class="nav-item mx-1" role="presentation">
                <a class="px-4 py-3 text-dark font-weight-bold nav-link text-center <?php echo $i == 0? 'active' : '' ?>" id="home-tab" data-bs-toggle="tab" href="<?php echo '#tab-'.$i ?>" role="tab" aria-controls="home" aria-selected="true">HỌC KỲ <?php echo $i + 1 ?></a>
            </li>
        <?php endforeach ?>
    </ul>
    <div class="tab-content bg-white py-5" id="myTabContent">
        <?php foreach ($sec_5_data as $i => $data) : ?>
            <div class="container tab-pane fade <?php echo $i == 0? 'show active' : '' ?>" id="<?php echo 'tab-'.$i ?>" role="tabpanel" aria-labelledby="home-tab">
                <div class="row">
                    <div class="col-md-6 d-flex justify-content-center align-items-start">
                        <img class="mw-100" src="<?php echo $data['img'] ?>" alt="">
                    </div>
                    <div class="col-md-6 pt-lg-3">
                        <ul>
                            <?php foreach ($data['ul'] as $li) : ?>
                                <li class="ps-2" style="line-height:35px"><?php echo $li ?></li>
                            <?php endforeach ?>
                        </ul>
                        <div class="text-primary px-3 py-2 font-weight-bold d-inline-block" style="border: 1px solid cyan; border-radius: 5px">Kết quả đạt được sau khi hoàn thành học kỳ</div>
                        <p class="mt-4"><?php echo $data['rs'] ?></p>
                        <button class="btn btn-danger px-4" style="background: #ae1a1f;">ĐĂNG KÝ</button>
                    </div>
                    <div class="col-12">
                        <a href="https://www.aptechvietnam.com.vn/san-pham-hoc-vien" target="_blank" class="font-weight-bold text-danger mt-3 d-inline-block">
                            → Xem thêm Sản phẩm học viên
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
    </div>
</section>