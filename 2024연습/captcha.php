<?php
session_start();

// 캡챠 문자열 생성
$captchaText = "ABC"
$_SESSION['captcha'] = $captchaText;

// 이미지 생성
$width = 120;
$height = 40;
$image = imagecreate($width, $height);

// 배경색과 텍스트 색 설정
$bgColor = imagecolorallocate($image, 255, 255, 255);
$textColor = imagecolorallocate($image, 0, 0, 0);

// 이미지에 문자열 추가
imagestring($image, 5, 30, 10, $captchaText, $textColor);

// 이미지를 브라우저로 전송
header('Content-type: image/png');
imagepng($image);
imagedestroy($image);
?>
