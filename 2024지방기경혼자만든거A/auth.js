// auth.js
document.addEventListener('DOMContentLoaded', function () {
    fetch('auth_status.php')
        .then(response => response.json())
        .then(data => {
            const loginButton = document.getElementById('loginButton');
            const registerOrMypageButton = document.getElementById('registerOrMypageButton');

            if (data.loggedIn) {
                loginButton.textContent = '로그아웃';
                loginButton.addEventListener('click', function() {
                    window.location.href = 'logout.php';
                });

                registerOrMypageButton.textContent = '마이페이지';
                registerOrMypageButton.href = 'mypage.php';
                registerOrMypageButton.removeAttribute('data-bs-toggle');
            } else {
                loginButton.textContent = '로그인';
                loginButton.setAttribute('data-bs-toggle', 'modal');
                loginButton.setAttribute('data-bs-target', '#loginModal');

                registerOrMypageButton.textContent = '회원가입';
                registerOrMypageButton.setAttribute('data-bs-toggle', 'modal');
                registerOrMypageButton.setAttribute('data-bs-target', '#registerModal');
            }
        });
});
