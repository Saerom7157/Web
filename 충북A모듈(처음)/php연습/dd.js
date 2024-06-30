function Logout() {
    const loginbtn = document.querySelector('#login-title');
    
    loginbtn.style.diplaye='noen';
    const Logoutbtn = confirm('로그아웃 하시겠습니까?');
    if(Logoutbtn) {
        alert('로그아웃 되었습니다');
        window.location.href = 'logout.php';
    } else {
        alert('로그아웃 취소 되었습니다');
    }
}