function Logout() {
    const logoutbtn = confirm('로그아웃 하시겠습니까?');
    if(logoutbtn) {
        alert('로그아웃되었습니다');
        window.location.href = 'logout.php';
    } else {
        alert('로그아웃취소되었습니다');
    }
}