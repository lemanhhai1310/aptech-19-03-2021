<?php

$sec_4_data = [
    [
        'title' => 'Song bằng Quốc tế',
        'img' => 'assets/img/section-4-1.png',
        'des' => 'Bằng Lập trình viên Quốc tế (ADSE - Advanced Diploma in Software Engineering) và bằng Cao đẳng Anh quốc (L5DC - Level 5 Diploma in Computing). Thăng tiến trong sự nghiệp CNTT tại Việt Nam, mở rộng cơ hội làm việc tại nước ngoài và du học năm cuối tại các trường Đại học trên thế giới.',
    ],
    [
        'title' => 'Bảo hành công nghệ trọn đời',
        'img' => 'assets/img/section-4-2.png',
        'des' => 'Sau khi tốt nghiệp, học viên được trở lại Aptech để học miễn phí các công nghệ mới cập nhật trong chương trình đào tạo.',
    ],
    [
        'title' => 'Chương trình đào tạo toàn diện',
        'img' => 'assets/img/section-4-3.png',
        'des' => 'Kiến thức nền tảng chuyên sâu để quản trị dự án theo chuẩn quốc tế. Cập nhật công nghệ mới liên tục để bắt kịp nhu cầu doanh nghiệp. Trang bị tiếng Anh chuyên ngành và kỹ năng mềm.',
    ],
    [
        'title' => 'Phương pháp đào tạo tiên tiến',
        'img' => 'assets/img/section-4-4.png',
        'des' => '70% thực hành, 04 dự án lớn giúp trải nghiệm làm việc thực tế. Sĩ số 24 bạn/ lớp theo chuẩn toàn cầu, tăng tương tác với giảng viên. Giờ học linh hoạt phù hợp với 03 ca học tự chọn: sáng, chiều, tối.',
    ],
    [
        'title' => 'Hỗ trợ năng lực học tập',
        'img' => 'assets/img/section-4-5.png',
        'des' => 'Học viên được tham gia miễn phí các lớp học bù, ôn tập, hội thảo công nghệ, tham quan doanh nghiệp, cuộc thi chuyên ngành...',
    ],
    [
        'title' => 'Cam kết hỗ trợ việc làm',
        'img' => 'assets/img/section-4-6.png',
        'des' => 'Được hỗ trợ việc làm tại các doanh nghiệp CNTT theo đúng năng lực học viên, hoàn toàn miễn phí và được hỗ trợ nhiều lần.',
    ],
];

?>

<section class="section-4 py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-5">
                <h3 class="text-center text-uppercase text-white font-weight-bold">
                    6 Lợi Thế Khi Học lập trình Tại Aptech Việt Nam
                </h3>
            </div>
            <?php foreach ($sec_4_data as $data) : ?>
                <div class="col-md-6 text-white my-2">
                    <img class="d-inline-block" src="<?php echo $data['img'] ?>" alt="">
                    <h5 class="d-inline-block ms-3 font-weight-bold"><?php echo $data['title'] ?></h5>
                    <p class="text-justify mt-2"><?php echo $data['des'] ?></p>
                </div>
            <?php endforeach ?>
            <div class="col-12 d-flex justify-content-center">
                <a href="#regis-section" class="mt-3 btn text-white text-uppercase py-2 px-4" style="background: #ae1a1f;">nhận tư vấn về học phí</a>
            </div>
        </div>
    </div>
</section>