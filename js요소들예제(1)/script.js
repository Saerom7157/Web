document.getElementById('createButton').addEventListener('click', function() {
    const inputField = document.getElementById('inputField');
    const newButton = document.createElement('button');
    newButton.textContent = inputField.value || '동적으로 생성된 버튼';
    newButton.onclick = function() {
        alert(this.textContent + '가 클릭되었습니다!');
    };
    document.getElementById('button-container').appendChild(newButton);
    inputField.value = '';  // 입력 필드를 초기화합니다.
});













document.getElementById('toggleColorButton').addEventListener('click', function() {
    const innerText = document.getElementById('inner-text');
    
    if (innerText.classList.contains('blue')) {
        innerText.classList.remove('blue');
        innerText.classList.add('red');
    } else {
        innerText.classList.remove('red');
        innerText.classList.add('blue');
    }
});









window.addEventListener('load', function() {
    console.log('페이지가 완전히 로드되었습니다.');
});

document.getElementById('inputField').addEventListener('input', function() {
    const message = document.getElementById('inner-text');
    message.innerHTML = '당신이 입력한 것: ' + this.value;
});

window.onblur = function() {
    console.log('브라우저 창이 포커스를 잃었습니다.');
};
