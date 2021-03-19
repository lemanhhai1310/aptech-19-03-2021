<?php
    $section_6 = [
        [
            'img'   => './assets/img/section-6-2-min.png',
            'title' => 'Tư vấn, định hướng ngành CNTT và lộ trình học tập hiệu quả từ các chuyên gia CNTT, doanh nghiệp CNTT hàng đầu',
        ],
        [
            'img'   => './assets/img/section-6-3-min.png',
            'title' => 'Được tham gia chương trình đào tạo chuyên sâu về lập trình phần mềm và các kỹ năng cần thiết',
        ],
        [
            'img'   => './assets/img/section-6-4-min.png',
            'title' => 'Nhận tài khoản CV Pro từ TopCV với nhiều nâng cấp đặc biệt và nhiều hỗ trợ, các gói học bổng, ưu đãi giá trị khác từ Ban tổ chức',
        ],
        [
            'img'   => './assets/img/section-6-5-min.png',
            'title' => 'Nhận chứng chỉ uy tín do Tập đoàn Aptech cấp',
        ],
        [
            'img'   => './assets/img/section-6-6-min.png',
            'title' => 'Cam kết hỗ trợ việc làm tại các doanh nghiệp CNTT hàng đầu',
        ],
    ];
?>
<section class="section-6 py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center text-uppercase text-white font-weight-bold">05 Lợi thế khi tham gia Dự án</h3>
            </div>
            <div class="col-md-6 pt-4 d-flex flex-column">
                <?php foreach ($section_6 as $section_6_item) : ?>
                    <div class="d-flex align-items-center mb-5">
                        <img src="<?php echo $section_6_item['img'] ?>" alt="">
                        <div class="text-white pl-3 font-weight-bold text-justify"><?php echo $section_6_item['title'] ?></div>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="col-md-6 pt-4">
                <img class="w-100" src="./assets/img/section-6-1-min.png" alt="">
            </div>
        </div>
    </div>
</section>