<?php 

$sect_9_data = [
    [
        'href' => 'https://www.youtube.com/watch?v=R_1VhfPlulg',
        'iframe' => '<iframe class="w-100 h-50" src="https://www.youtube.com/embed/R_1VhfPlulg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        'src' => 'Nguồn: <b>VTC1</b>',
        'des' => 'Giải bài toán nhân lực để hiện thực hóa Khát vọng Chuyển đổi số',
    ],
    [
        'href' => 'https://dantri.com.vn/nhip-song-tre/9-dac-diem-nhan-dien-nhan-su-cong-nghe-thong-tin-tiem-nang-20201114234645628.htm',
        'iframe' => '<img class="w-100 h-50" src="./assets/img/section-9-2.png">',
        'src' => 'Nguồn: <b>Dân Trí</b>',
        'des' => '9 đặc điểm nhận diện nhân sự công nghệ thông tin tiềm năng',
    ],
    [
        'href' => 'https://www.youtube.com/watch?v=2k8LOnK0KbI',
        'iframe' => '<iframe class="w-100 h-50" src="https://www.youtube.com/embed/2k8LOnK0KbI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        'src' => 'Nguồn: <b>VTV6</b>',
        'des' => 'Người Việt trẻ và Khát vọng chuyển đổi số',
    ],
    [
        'href' => 'https://vietnamnet.vn/vn/cong-nghe/khoi-dong-du-an-dao-tao-tuyen-dung-viec-lam-cntt-cho-nguoi-moi-bat-dau-688973.html',
        'iframe' => '<img class="w-100 h-50" src="./assets/img/section-9-4.png">',
        'src' => 'Nguồn: <b>Vietnamnet</b>',
        'des' => 'Khởi động dự án đào tạo, tuyển dụng việc làm CNTT cho người mới bắt đầu',
    ],
];

?>
<section class="section-9 py-5 bg-white">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center text-uppercase text-primary font-weight-bold">Báo chí nói về dự án</h3>
            </div>

            <!-- <div id="carouselExampleControls" class="box-sm carousel slide col-12" data-ride="carousel">
                <div class="carousel-inner">
                    <?php foreach ($sect_9_data as $k => $data) : ?>
                        <div class="carousel-item <?php echo $k == 0 ? 'active' : '' ?>">
                            <a href="<?php echo $data['href'] ?>" target="_blank" class="col-lg-3 col-md-6 col-sm-6 mt-4">
                                <div class="h-100" style="background:#ebebeb">
                                    <?php echo $data['iframe'] ?>
                                    <div class="px-3 pt-2 pb-3">
                                        <small class="text-dark"><?php echo $data['src'] ?></small>
                                        <p class="pt-2 text-primary font-weight-bold mb-0"><?php echo $data['des'] ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div> -->
            
            <?php foreach ($sect_9_data as $k => $data) : ?>
                <a href="<?php echo $data['href'] ?>" target="_blank" class="box-lg col-lg-3 col-md-6 col-sm-6 mt-4">
                    <div class="h-100" style="background:#ebebeb">
                        <?php echo $data['iframe'] ?>
                        <div class="px-3 pt-2 pb-3">
                            <small class="text-dark"><?php echo $data['src'] ?></small>
                            <p class="pt-2 text-primary font-weight-bold mb-0 text-justify"><?php echo $data['des'] ?></p>
                        </div>
                    </div>
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>