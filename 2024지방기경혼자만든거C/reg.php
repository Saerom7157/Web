<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 폼에서 이름, 이메일, 비밀번호, 비밀번호 확인을 받아옵니다.
    [$nick, $em, $pw, $cpw, $usersFile] = [$_POST['nick'], $_POST['em'], $_POST['pw'], $_POST['cpw'], 'users.txt'];
    $users = file_exists($usersFile) ? array_map(fn($v) => explode(':', trim($v)), file($usersFile)) : [];

    if (array_column($users, 1) && in_array($em, array_column($users, 1))) { // 변경: 0에서 1로 인덱스 변경
        $msg = '사용 중인 ID입니다.';
    } elseif ($_POST['captcha'] !== "ABC12") {
        $msg = '캡차가 일치하지 않습니다.';
    } elseif ($pw !== $cpw) {
        $msg = '비밀번호가 일치하지 않습니다.';
    } else {
        // 사용자 정보를 파일에 저장합니다. 이름을 추가합니다.
        file_put_contents($usersFile, "$nick:$em:member:" . md5($pw) ."\n", FILE_APPEND); // 변경: $nick를 추가
        $msg = '관리자 승인 대기 중입니다.';
        echo "<script>alert('$msg'); location.href = 'index.php';</script>";
        exit();
    }
    echo "<script>alert('$msg'); history.go(-1);</script>";
}
?>