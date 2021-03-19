<?php

$section2 = [
    [
        'img' => './assets/img/section-2-2-min.png',
        'salary' => '$338 - $520',
        'title' => 'Mới tốt nghiệp',
    ],
    [
        'img' => './assets/img/section-2-3-min.png',
        'salary' => '$525 - $1,161',
        'title' => 'Kinh nghiệm 2-4 năm',
    ],
    [
        'img' => './assets/img/section-2-4-min.png',
        'salary' => '$1,355 - $2,355',
        'title' => 'Cấp quản lý',
    ],
    [
        'img' => './assets/img/section-2-5-min.png',
        'salary' => 'TỪ $2,550',
        'title' => 'Giám đốc và cấp cao hơn',
    ],
];

?>
<section class="section-2 py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center text-uppercase text-primary font-weight-bold">thời đại 4.0 - thời đại của ngành lập trình</h3>
                <h6 class="text-center"><i>(*): Báo cáo Thị trường IT 2021 – TopDev</i></h6>
            </div>
            <div class="col-md-6 pt-4">
                <h4 class="text-primary font-weight-bold">Nhu cầu tuyển dụng (*) </h4>
                <p class="mb-0 text-justify">Các công ty công nghệ lớn trên thế giới ngày càng tìm đến Việt Nam để thuê và xây dựng đội ngũ phát triển sản phẩm (Outsourcing); làn sóng khởi nghiệp trong lĩnh vực công nghệ Make In Vietnam ngày càng phát triển (Product).</p>
                <img class="mw-100" src="./assets/img/section-2-1.png">
            </div>
            <div class="col-md-6 pt-4">
                <h4 class="text-primary font-weight-bold">Mức lương CNTT (*) </h4>
                <p class="mb-0 text-justify">Sau 1 năm làm việc, mức lương của Lập trình viên thường tăng đến mức đáng kể</p>
                <div class="row">
                    <?php foreach($section2 as $section2_item) : ?>
                        <div class="col-6 d-flex flex-column justify-content-end align-items-center p-2">
                            <div class="text-center">
                                <img src="<?php echo $section2_item['img'] ?>">                            </div>
                            <h5 class="font-weight-bold pt-3 mb-1" style="color:#ae1a1f"><?php echo $section2_item['salary'] ?></h5>
                            <h6 class="text-primary text-center font-weight-bold"><?php echo $section2_item['title'] ?></h6>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</section>