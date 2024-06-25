document.addEventListener('DOMContentLoaded', () => {
    const id = document.querySelector('#id')
    const pw = document.querySelector('#pw')
    const btn = document.querySelector('#login_btn')
    btn.addEventListener('click', (e) => { //클릭했을때 막아버린다.
        e.preventDefault()
        if(id.value == '') {
            alert('아이디를 입력해주세요')
            id.focus()
            return false
        }
        if(pw.value == '') {
            alert('비밀번호를 입력해주세요')
            pw.focus()
            return false
        }
        document.login_form.submit()
    })
}) 