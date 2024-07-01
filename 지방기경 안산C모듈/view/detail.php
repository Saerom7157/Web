<?php 
  $find = goods::find("idx = ?", $idx);
?>

<form action="/nowPrice" method="POST" class="join wrap detail" style="width: 600px;">
  <h1 class="ct" style="margin-top: 15rem;">상세보기</h1>

  <div class="img_box" style="margin-top: 1.5rem;">
    <img src="/resourse/goods/<?= $find["img"]?>" alt="#" title="#">
  </div>
  <input type="text" name="img" id="img" hidden value="<?= $find["img"]?>">
  <input type="text" name="idx" id="idx" hidden value="<?= $find["idx"]?>">

  <div class="inp">
    <p>godos명</p>
    <input type="text" name="name" id="name" value="<?= $find["name"]?>" readonly>
  </div>
  <div class="inp">
    <p>가격</p>
    <input type="text" name="fake" id="fake" value="<?= number_format($find["money"])?>원" readonly>
    <input type="text" name="money" id="money" value="<?= $find["money"]?>" hidden>
  </div>
  <div class="inp">
    <p>개수</p>
    <input type="number" value="1" min="1" name="count" id="count">
  </div>

  <div class="grid">
    <a href="/heart/<?= $find["idx"]?>" class="<?= @$_SESSION["user"] == "manager" ? "pen" : ""?> btn"> 관심goods등록</a>
    <button class="<?= @$_SESSION["user"] == "manager" ? "pen" :""?>">바로구매</button>
    <a onclick="movePage(<?= $find['idx']?>)" class="<?= @$_SESSION["user"] == "manager" ? "pen" : ""?> btn">장바구니</a>
  </div>

  <div class="col-flex">
    <p>goods상세설명</p>
    <textarea name="text" id="text" cols="30" rows="10" placeholder="<?= $find["text"]?>" readonly></textarea>
  </div>
</form>  

<script>
  function movePage(idx) {
    location.href = `/basekit/${idx}/${$("#count").val()}`;
  }
</script>
