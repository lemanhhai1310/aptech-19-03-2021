<?php
include('phpmailer.php');
define('GUSER', 'relayaa2021@aprotrain.com'); // tài khoản đăng nhập Gmail
define('GPWD', 'Aptecln2o21'); // mật khẩu cho cái mail này


function smtpmailer($to, $from, $from_name, $subject, $body) { 
    $mail = new PHPMailer(true); // tạo một đối tượng mới từ class PHPMailer
    $mail->IsSMTP(); // bật chức năng SMTP
    $mail->SMTPDebug = 0; // kiểm tra lỗi : 1 là  hiển thị lỗi và thông báo cho ta biết, 2 = chỉ thông báo lỗi
    $mail->SMTPAuth = true; // bật chức năng đăng nhập vào SMTP này
    $mail->SMTPSecure = 'tls'; // sử dụng giao thức SSL vì gmail bắt buộc dùng cái này
    $mail->CharSet = 'utf-8';
    //$mail->IsSendmail();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->Username = GUSER;
    $mail->Password = GPWD;
    $mail->From = $from;
    $mail->FromName = $from_name;
    $mail->Subject = $subject;
    $mail->MsgHTML($body);
    $mail->AddAddress($to);
    $mail->IsHTML(true);
    
    if(!$mail->Send()) {
        return false;
    } else {
    		$mail->SmtpClose();
        return true;
    }
}
?>