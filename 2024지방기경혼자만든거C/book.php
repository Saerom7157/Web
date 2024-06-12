<?php
session_start();

// 로그인 구현에 따라 사용자 이메일을 가져오는 로직 필요
$userEmail = $_SESSION['user_email'] ?? 'guest'; // 'guest'는 임시 기본값입니다.

$leagueFees = [
    'night' => 50000,
    'weekend' => 100000,
    'dawn' => 30000,
];

// 리그 선택에 따른 기본 사용료 설정
$baseFee = $leagueFees[$_POST['league']] ?? 0;
$additionalPeople = max(0, $_POST['people'] - 20);
$totalFee = $baseFee + ($additionalPeople * 1000);

// 사용자 이메일을 키로 하여 예약 정보 저장
if (!isset($_SESSION['reservations'][$userEmail])) {
    $_SESSION['reservations'][$userEmail] = [];
}

$_SESSION['reservations'][$userEmail][] = [
    'league' => $_POST['league'],
    'date' => $_POST['date'],
    'time' => $_POST['time'],
    'people' => $_POST['people'],
    'status' => 'Waiting for approval',
    'fee' => $totalFee // 계산된 총 사용료 저장
];

// 사용자를 mypage.php로 리디렉션
header('Location: mypage.php');
exit();
?>
