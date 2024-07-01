<div class="join login wrap" style="width: 500px">
  <h1 class="sub_title ct">로그인</h1>


  <form action="/loginDB" method="POST" class="container">
    <div class="inp">
      <p>아이디</p>
      <input type="text" name="id" id="id" placeholder="아이디를 입력해주세요.">
    </div>

    <div class="inp">
      <p>비밀번호</p>
      <input type="password" name="pw" id="pw" placeholder="비밀번호를 입력해주세요.">
    </div>

    <div class="inp">
      <p>회원구분</p>
      <div class="flex" style="gap: 10px">
        <div class="btn" onclick="selUser(event, 'normal')">일반회원</div>
        <div class="btn" onclick="selUser(event, 'admin')">관리자</div>
        <div class="btn" onclick="selUser(event, 'manager')">담당자</div>
      </div>
    </div>

    <input type="text" hidden name="user" id="user">

    <button>로그인</button>
  </form>
</div>

<script>
  function selUser(e, user) {
    $(".btn").removeClass("chk");
    $(e.target).addClass("chk");

    $("#user").val(user);
  }
</script>