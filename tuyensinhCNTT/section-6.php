<section class="section-6 py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center text-uppercase text-white font-weight-bold">
                    LỰA CHỌN SAU KHI TỐT NGHIỆP APTECH
                </h3>
            </div>
            <div class="col-md-6 text-white pt-5 d-flex flex-column">
                <h5 class="font-weight-bold">Làm việc tại doanh nghiệp lớn</h5>
                <p>Sinh viên Apech được tuyển dụng freelance, parttime ngay trong quá trình học và fulltime sau khi tốt nghiệp với mức lương khởi điểm trung bình từ <b>8.000.000 đ</b> trở lên.</p>
                <div class="d-flex justify-content-start align-items-center mb-3">
                    <span style="color:cyan;">→ Xem chi tiết tại</span>
                    <a class="ms-3" href="https://www.facebook.com/groups/JobAptech">
                        <img src="./assets/img/section-6-fb.png" alt="">
                    </a>
                </div>
                <p class="font-weight-bold mt-auto">Đối tác tuyển dụng</p>
                <div class="swiper-container bg-white w-100" style="border-radius: 20px">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper d-flex align-items-center">
                        <!-- Slides -->
                        <?php for ($i = 1; $i <= 6; $i++) : ?>
                            <div class="swiper-slide px-5 py-4">
                                <div class="row">
                                    <?php for ($j = $i * 4 - 3; $j <= $i * 4; $j++) : ?>
                                        <div class="col-6 d-flex justify-content-center align-items-center">
                                            <img class="mw-100" style="max-height: 50px" src="<?php echo 'assets/img/company/'.$j.'.png' ?>" alt="">
                                        </div>
                                    <?php endfor ?>
                                </div>
                            </div>
                        <?php endfor ?>
                    </div>
                    <!-- If we need pagination -->
                    <!-- <div class="swiper-pagination"></div> -->

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>
            </div>
            <div class="col-md-6 text-white pt-5 d-flex flex-column">
                <h5 class="font-weight-bold">Liên thông du học</h5>
                <p>Sau khi tốt nghiệp, sinh viên Aptech nếu muốn, có thể học chuyển tiếp năm cuối tại các trường Đại học ở Anh, Úc, Mỹ, Singapore… với chi phí tiết kiệm đáng kể so với việc du học ngay từ khi tốt nghiệp THPT.</p>
                <div class="d-flex justify-content-start align-items-center py-1 mb-3">
                    <a href="https://aptechvietnam.com.vn/Co-hoi-nao-voi-canh-cua-du-hoc-va-dinh-cu-toan-cau-trong-nganh-CNTT" style="color:cyan;">→ Xem chi tiết tại đây</a>
                </div>
                <p class="font-weight-bold mt-auto">Các Trường liên kết</p>
                <div class="swiper-container bg-white w-100" style="border-radius: 20px">
                    <!-- Additional required wrapper -->
                    <div class="swiper-wrapper d-flex align-items-center">
                        <!-- Slides -->
                        <?php for ($i = 1; $i <= 6; $i++) : ?>
                            <div class="swiper-slide px-5 py-4">
                                <div class="row">
                                    <?php for ($j = $i * 4 - 3; $j <= $i * 4; $j++) : ?>
                                        <div class="col-6 d-flex justify-content-center align-items-center">
                                            <img class="mw-100" style="max-height: 50px" src="<?php echo 'assets/img/school/'.$j.'.png' ?>" alt="">
                                        </div>
                                    <?php endfor ?>
                                </div>
                            </div>
                        <?php endfor ?>
                    </div>
                    <!-- If we need pagination -->
                    <!-- <div class="swiper-pagination"></div> -->

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>

                    <!-- If we need scrollbar -->
                    <!-- <div class="swiper-scrollbar"></div> -->
                </div>
            </div>
        </div>
    </div>
</section>

