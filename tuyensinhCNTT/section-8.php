<?php

$formSubmitSubject = 'Tuyển sinh 2021';
$formSubmitRedirect = './?regis=true';

?>

<section class="section-8 py-5" id="regis-section">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-start align-items-center flex-column">
                <h3 class="text-center text-uppercase text-white font-weight-bold">
                    chính sách hỗ trợ
                </h3>
                <img class="mw-100 mt-4" src="./assets/img/section-8-promotion.png" alt="">
            </div>
            <div class="col-md-6">
                <h3 class="text-center text-uppercase text-white font-weight-bold">
                    đăng ký tư vấn
                </h3>
                <p class="text-white text-center font-weight-bold mb-4">Ban Tuyển sinh sẽ liên lạc và hướng dẫn các thủ tục tiếp theo</p>
                <form class="d-flex flex-column" action="sendmail.php" method="POST">
                    <input class="form-control form-control-lg mb-3 pl-4" type="" name="txtName" placeholder="Họ và tên" required>
                    <input class="form-control form-control-lg mb-3 pl-4" type="" name="dateBirth" placeholder="Năm sinh">
                    <select class="form-control form-control-lg mb-3 pl-4" name="slCenter" required>
                        <option value>Chọn địa điểm học</option>
                        <option value="aptech3@aprotrain.com">Tòa nhà Aptech, 285 Đôi Cấn, Ba Đình, Hà Nội</option>
                        <option value="aptech3@aprotrain.com">Tòa nhà Aptech, 54 Lê Thanh Nghị, Hai Bà Trưng, Hà Nội</option>
                    </select>
                    <input class="form-control form-control-lg mb-3 pl-4" type="tel" name=txtPhone placeholder="Số điện thoại" required>
                    <input class="form-control form-control-lg mb-3 pl-4" type="email" name="txtEmail" placeholder="Email" required>
                    <input class="d-none" type="" name="subject" value="<?php echo $formSubmitSubject ?>">
                    <input class="d-none" type="" name="redirectUrl" value="<?php echo $formSubmitRedirect ?>">
                    <button type="submit" style="background: #ae1a1f;" class="btn btn-round text-white px-5 py-2 align-self-center mt-3">GỬI ĐĂNG KÝ</button>
                </form>
            </div>
        </div>
    </div>
</section>