document.addEventListener('DOMContentLoaded', function() { //완전히 로드되고 피싱할수 있게 하는 것임

    

    //회원가입 on
    const joinbtn = document.getElementById('register-link');
    joinbtn.addEventListener('click', function() {
        const joinPopup = document.getElementById('register-popup');
        joinPopup.style.display = 'block';
    })

    //회원가입 off
    const joinNone = document.getElementById('close-register');
    joinNone.addEventListener('click', function() {
        const loginPopup = document.getElementById('register-popup');
        loginPopup.style.display = 'none';
        console.log("click");
    })


    //로그인 no
    const loginbtn = document.getElementById('login-link');
    loginbtn.addEventListener('click', function() {
        const loginPopup = document.getElementById('login-popup');
        loginPopup.style.display = 'block';
    })

    //로그인 off
    const loginNone = document.getElementById('close-login');
    loginNone.addEventListener('click', function() {
        const loginPopup = document.getElementById('login-popup');
        loginPopup.style.display = 'none';
        console.log("click");
    })

    
})
