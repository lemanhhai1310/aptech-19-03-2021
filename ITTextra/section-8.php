<?php

$formSubmitSubject = 'Dự án Đào tạo và Tuyển dụng 600 việc làm Công Nghệ Thông tin cho người mới bắt đầu';
$formSubmitRedirect = './?regis=true';

?>
<section class="section-8 py-5" id="regis-form">
    <div class="container">
        <div class="row">
            <div class="col-md-6 d-flex justify-content-center pr-md-5 py-3">
                <img class="mw-100" src="./assets/img/section-8-banner.png" alt="">
            </div>
            <div class="col-md-6 pl-md-5 py-3">
                <h3 class="text-white mb-3 font-weight-bold">Đăng ký ngay<br>để nhận hỗ trợ đặc biệt</h3>
                <form class="d-flex flex-column" action="sendmail.php" method="POST">
                    <input class="form-control form-control-lg mb-3 pl-4" type="text" name="txtName" placeholder="Họ và tên" required>
                    <input class="form-control form-control-lg mb-3 pl-4" type="text" name="dateBirth" placeholder="Ngày sinh" onfocus="(this.type='date')" required>
                    <input class="form-control form-control-lg mb-3 pl-4" type="tel" name=txtPhone placeholder="Số điện thoại" required>
                    <select class="form-control form-control-lg mb-3 pl-4" name="slYouAre" required>
                        <option value>Bạn là:</option>
                        <option value="Sinh viên ngành CNTT">Sinh viên ngành CNTT</option>
                        <option value="Sinh viên ngành khác CNTT">Sinh viên ngành khác CNTT</option>
                        <option value="Người đã đi làm (ngành khác CNTT) và có nhu cầu chuyển ngành sang CNTT">Người đã đi làm (ngành khác CNTT) và có nhu cầu chuyển ngành sang CNTT</option>
                    </select>
                    <select class="form-control form-control-lg mb-3 pl-4" name="slBy" required>
                        <option value>Bạn biết đến Dự án này qua đâu?</option>
                        <option value="TopCV">TopCV</option>
                        <option value="Kênh khác">Kênh khác</option>
                    </select>
                    <input class="d-none" type="" name="subject" value="<?php echo $formSubmitSubject ?>">
                    <input class="d-none" type="" name="redirectUrl" value="<?php echo $formSubmitRedirect ?>">
                    <button type="submit" class="btn btn-round btn-warning btn-lg font-weight-bold px-5 align-self-start">GỬI ĐĂNG KÝ</button>
                </form>
            </div>
        </div>
    </div>
</section>
