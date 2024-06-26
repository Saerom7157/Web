<?php
session_start();

// 임시로 설정한 사용자 정보, 실제로는 데이터베이스에서 정보를 가져와야 합니다.
$users = [
    'admin' => [
        'username' => 'admin',
        'password' => md5('adminpass'), // 실제 애플리케이션에서는 더 강력한 해싱 사용 권장
    ],
    'manager' => [
        'username' => 'manager',
        'password' => md5('managerpass'),
    ],
    'member' => [
        'username' => 'member',
        'password' => md5('memberpass'),
    ],
];

// 요청에서 데이터 가져오기
$username = $_POST['username'];
$password = md5($_POST['password']); // 클라이언트와 같은 방식으로 비밀번호를 해시해야 함
$role = $_POST['role'];

// 로그인 성공 여부
$loginSuccess = false;

if (isset($users[$role]) && $users[$role]['username'] === $username && $users[$role]['password'] === $password) {
    $loginSuccess = true;
    $_SESSION['logged_in'] = true;
    $_SESSION['role'] = $role;
    // 로그인 일자 업데이트 등의 처리...
}

// JSON 응답 반환
header('Content-Type: application/json');
if ($loginSuccess) {
    echo json_encode(['success' => true, 'lastLogin' => '이전 로그인 일자', 'redirectUrl' => 'index.php']);
} else {
    echo json_encode(['success' => false]);
}
