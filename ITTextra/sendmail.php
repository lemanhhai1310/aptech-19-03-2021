<?php
ob_start();

// $rootPath = $_SERVER['DOCUMENT_ROOT'];
// include $rootPath . '/tm/queue_email.php';
include_once('./tm/queue_email.php');

$name = trim($_POST['txtName']);
$phone = trim($_POST['txtPhone']);
$birthDate = trim($_POST['dateBirth']);
$youAre = trim($_POST['slYouAre']);
$slBy = trim($_POST['slBy']);

$subject = trim($_POST['subject']);
$redirectUrl = trim($_POST['redirectUrl']);
$to = 'aptech1@aprotrain.com';

if ($name == '' || $phone == '') {
	echo '<center><h2 class="error">Vui lòng nhập đầy đủ thông tin và thử lại!!!</h2></center>';
	header('Refresh: 3; URL=index.html');
} else {
	date_default_timezone_set("Asia/Ho_Chi_Minh");
    $date = date('Y-m-d',time());
   
	$content =
		'<ul>'.
		'	<li>Họ và tên: <b>'.$name.'</b></li>'.
		'	<li>Điện thoại: <b>'.$phone.'</b></li>'.
		'	<li>Ngày sinh: <b>'.$birthDate.'</b></li>'.
		'	<li>Đối tượng: <b>'.$youAre.'</b></li>'.
		'	<li>Nguồn: <b>'.$slBy.'</b></li>'.
		'   <li>Ngày đăng ký: <b>'.date("d-m-Y h:i:s", time()).'</b></li>'.
		'</ul>';

	$from = 'relayAA@aprotrain.com';
	
	$array_emails = array(
        $to . '||' . $name . '||' . htmlentities($subject, ENT_QUOTES, "UTF-8") . '||' . htmlentities($content, ENT_QUOTES, "UTF-8")
    );

    $queue = new QueueMail(array(
        'emails' => $array_emails,
        'cache_name' => "aptech_email"
    ));

    $queue->queue_email();
	
    header('location:'.$redirectUrl);
}
