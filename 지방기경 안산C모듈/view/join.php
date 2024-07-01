<div class="join wrap" style="width: 500px">
  <h1 class="sub_title ct">회원가입</h1>


  <form action="/joinDB" method="POST" class="container">
    <div class="inp">
      <p>ID</p>
      <input type="text" name="id" id="id" oninput="trimInput(event)" class="id" placeholder="ID를 입력해주세요.">
    </div>

    <div class="flex aic" style="margin-top: 1.5rem; gap: 10px;">
      <div class="btn" onclick="chkID()">중복확인</div>
      <p class="chkId"></p>
    </div>

    <div class="inp">
      <p>이름</p>
      <input type="text" name="name" id="name" placeholder="이름을 입력해주세요.">
    </div>

    <div class="inp">
      <p>PW</p>
      <input type="password" name="pw" id="pw" placeholder="PW를 입력해주세요.">
    </div>

    <div class="inp">
      <p>캡차</p>
      <canvas id="canvas" width="351" height="23"></canvas>
      <input type="text" name="capcha" id="capcha" hidden>
    </div>

    <div class="inp">
      <p>캡차 입력</p>
      <input type="text" name="capcha_text" id="capcha_text">
    </div>

    <div class="btn butn" onclick="chkForm()">가입하기</div>
    <button style="opacity: 0"></button>
  </form>
</div>

<script>
  randomText();
  let user = <?= json_encode(user::all()) ?>;
  let checked = false;

  function chkForm() {
    let id = $("#id").val();
    let pw = $("#pw").val();
    let name = $("#name").val();
    let capcha = $("#capcha_text").val();
    let text = $("#capcha").val()
    let err = "";

    if (id == "") err += (err == "" ? "" : "\n") + "ID를 입력해주세요";
    else if (id.replaceAll(/[A-z0-9]/g, "") != "" || id.replaceAll(/\D/g, "") == "" || id.replaceAll(/\d/g, "") == "") err += (err == "" ? "" : "\n") + "ID는 영문 및 숫자 조합으로 입력해주세요";
    
    if (!checked) err += (err == "" ? "" : "\n") + "중복확인을 해주세요";
    if (checked == "no") err += (err == "" ? "" : "\n") + "사용 중인 ID입니다.";

    if (name == "") err += (err == "" ? "" : "\n") + "이름을 입력해주세요";
    else if (/[^ㄱ-ㅎ가-힣]/g.test(name)) err += (err == "" ? "" : "\n") + "이름은 한글로만 입력해주세요";

    if (pw == "") err += (err == "" ? "" : "\n") + "PW를 입력해주세요";
    else if (pw.replaceAll(/[A-z0-9]/g, "") != "" || pw.replaceAll(/\D/g, "") == "" || pw.replaceAll(/\d/g, "") == "") err += (err == "" ? "" : "\n") + "PW는 영문 및 숫자 조합으로 입력해주세요";

    if (capcha == "") err += (err == "" ? "" : "\n") + "캡차를 입력해주세요";
    else if (capcha != text) err += (err == "" ? "" : "\n") + "캡차가 위에 이미지와 다릅니다";

    if (err != "") return alert(err);


    $(".join button").click();
  }

  function chkID() {
    let id = $("#id").val();
    if (id == "") return alert("ID를 입력해주세요.")

    $(".join .chkId").removeClass("dn");
    if (user.find(v => v.id == id)) {
      $(".chkId").css({color: "tomato"}).html("사용 중인 ID입니다.");
      checked = "no"
    } else {
      $(".chkId").css({color: "green"}).html("사용 가능한 ID입니다.");
      checked = true;
    }
  }

  function trimInput(e) {
    let val = $(e.target).val().trim();

    $(e.target).val(val);

    if ($(e.target).hasClass("id")) {
      checked = false;
      $(".chkId").addClass("dn");
    }
  }

  function randomText() {
    let char = "";
    const canvas = $("#canvas")[0];
    const ctx = canvas.getContext('2d');
    const num = "0123456789";
    const text = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz";
    let random = Math.floor(Math.random() * 6) + 1;


    for (let i = 1; i < 6; i++) {
      if (random == 1) {
        if (i < 2) {
          char += num[Math.floor(Math.random() * num.length)];
        } else {
          char += text[Math.floor(Math.random() * text.length)];
        }
      } else if (random == 2) {
        if (i < 4) {
          char += num[Math.floor(Math.random() * num.length)];
        } else {
          char += text[Math.floor(Math.random() * text.length)];
        }
      } else if (random == 3) {
        if (i < 4) {
          char += text[Math.floor(Math.random() * text.length)];
        } else {
          char += num[Math.floor(Math.random() * num.length)];
        }
      }  else if (random == 4) {
        if (i < 2) {
          char += num[Math.floor(Math.random() * num.length)];
        } else {
          char += text[Math.floor(Math.random() * text.length)];
        }
      }  else if (random == 5) {
        if (i < 2) {
          char += text[Math.floor(Math.random() * text.length)];
        } else {
          char += num[Math.floor(Math.random() * num.length)];
        }
      }  else if (random == 6) {
        if (i < 5) {
          char += num[Math.floor(Math.random() * num.length)];
        } else {
          char += text[Math.floor(Math.random() * text.length)];
        }
      }
    }

    ctx.fillStyle = "black";
    ctx.font = "20px sans";
    ctx.textAlign = "center";
      
    for (let i = 1; i < 6; i++) {
      ctx.fillText(`${char[i - 1]}`, `${i * 55}`, 20)
    }

    $("#capcha").val(char);
  }
</script>