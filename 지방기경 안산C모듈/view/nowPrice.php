<?php 
  $find = goods::find("idx = ?", $_POST["idx"]);
  $price = $_POST["count"] * $_POST["money"];
?>

<form action="/priceDB" method="POST" class="join wrap detail pr" style="width: 600px; margin-top: 15rem;">
  <h1 class="ct">결제</h1>

  <div class="img_box">
    <img src="/resourse/goods/<?= $find["img"]?>" alt="#" title="#">
  </div>
  <input type="text" name="img" id="img" hidden value="<?= $find["img"]?>">

  <div class="inp">
    <p>godos명</p>
    <input type="text" name="name" id="name" value="<?= $find["name"]?>" readonly>
  </div>

  <div class="inp">
    <p>가격</p>
    <input type="text" name="fake" id="fake" value="<?= number_format($price)?>원" readonly>
    <input type="text" name="money" id="money" value="<?= $price?>" hidden>
  </div>

  <button>구매</button>
</form>  

<script>
  function movePage(idx) {
    location.href = `/baseket/${idx}/${$("#count").val()}`;
  }
</script>
