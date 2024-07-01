<?php 
  $basekit = basekit::findAll("ui = ?", @$_SESSION["user"]);
  $grice = grice::findAll("ui = ? ORDER BY money DESC", @$_SESSION["user"]);
  $heart = heart::findAll("ui = ?", @$_SESSION["user"]);
  $find = user::find("id = ?", @$_SESSION["user"]);
  $res = reser::findAll("user_idx = ? ORDER BY date, time DESC", [$find["idx"]]);
?>

<?php if (@$_SESSION["user"] == "admin" || @$_SESSION["user"] == "manager") : ?>
  <?php 
    return move("일반회원만 이용가능합니다.", "/"); 
  ?>
<?php endif?> 

  <div class="reserIn wrap">
      <div class="title">
        <div class="back">RESERINTO</div>
        <p class="main">S. B. P <span>RESERINFO</span></p>
        <div class="line"></div>
        <div class="sub">
          <b>예약정보 영역입니다.</b>
          <span>사용자가 예약한 정보를 한눈에 확인할 수 있습니다.</span>
        </div>
      </div>

    <div class="top_box">
      <p>리그</p>
      <p>날짜</p>
      <p>시간</p>
      <p>최소인원</p>
      <p>사용료</p>
      <p>승인상태</p>
    </div>

    <div class="container">
      <?php foreach ($res as $v) :?>
        <?php 
          $status = [
            "delete" => "승인불가",
            "wait" => "예약신청",
            "confirm" => "결제",
            "request" => "결제승인전",
            "end" => "결제완료",
            "noPay" => "결제취소",
            "no" => "결제취소"
          ][$v["status"]];
        ?>

        <div class="item">
          <p><?= $v["league"] ?></p>
          <p><?= $v["date"] ?></p>
          <p><?= $v["time"] ?></p>
          <p><?= number_format($v['people']) ?>명</p>
          <p><?= number_format($v['price']) ?>원</p>

          <?php if ($status == "결제") : ?>
            <div><a href="/payResDB/<?= $v["idx"]?>" class="btn">결제</a></div>
          <?php else : ?>
            <p><?= $status ?></p>
          <?php endif ?>
        </div>
      <?php endforeach ?>
    </div>
  </div>

  <div class="heart sale gr wrap" id="heart">
    <div class="title">
      <div class="back">INTRODUCE GOODS</div>
      <p class="main">S. B. P. <span>INTRODUCE GOODS</span></p>
      <div class="line"></div>
      <div class="sub">
        <b>관심GOODS 영역</b>
        <span>관심에 들어하는 굿즈를 한눈에 확인할 수 있습니다.</span>
      </div>
    </div>

    <div class="container" style="margin-top: 5rem;">
      <?php foreach ($heart as $v) : ?>
        <div class="item">
        <div class="img_box">
          <img src="/resourse/goods/<?= $v["img"]?>" alt="#" title="#">
        </div>
        <div class="text_box">
          <div class="col-flex jcc" style="gap: 5px;">
            <p style="opacity: .5;">goods명</p>
            <div class="flex jcsb aic">
              <h2><a href="/detail/<?=$v["gidx"]?>"><?= $v["name"]?></a></h2>
            </div>
          </div>

          <div class="money_bt flex aic jcsb">
            <p>가격</p>
            <h2><?= number_format($v["money"])?>원</h2>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>

  <script>
    function movePage(idx) {
      location.href = `/detail/${idx}`;
    }
  </script>

  <div class="gr sale wrap" id="basekit">
    <div class="title">
      <div class="back">BASKET</div>
      <p class="main">S. B. P. <span>BASKET</span></p>
      <div class="line"></div>
      <div class="sub">
        <b>장바구니 영역</b>
        <p>사용자가 등록한 굿즈를 확인할 수 있습니다.</p>
      </div>
    </div>

    <div class="container" style="margin-top: 5rem">
      <?php foreach ($basekit as $v) :?>
        <div class="item">
        <div class="img_box">
          <img src="/resourse/goods/<?= $v["img"]?>" alt="#" title="#">
          <div class="poa name">개수 : <?= number_format($v["count"])?>개</div>
        </div>
        <div class="text_box">
          <div class="col-flex jcc" style="gap: 5px;">
            <p style="opacity: .5;">단가 : <?= number_format($v["money"])?>원</p>
            <div class="flex jcsb aic">
              <h2><?= $v["name"]?></h2>
              <a href="/priceDB2/<?= $v["uidx"]?>/<?=$v["price"]?>/<?= $v["idx"]?>" class="btn">구매</a>
            </div>
          </div>

          <div class="money_bt flex aic jcsb">
            <p>가격</p>
            <h2><?= number_format($v["price"])?>원</h2>
          </div>
        </div>
      </div>
      <?php endforeach ?>
    </div>
  </div>

  <div class="mylist wrap" id="list">
    <div class="title">
      <div class="back">PRICELIST</div>
      <p class="main">S. B. P. <span>PRICE LIST</span></p>
      <div class="line"></div>
      <div class="sub">
        <b>구매리스트 영역</b>
        <p>사용자님이 구매해주신 리스트를 확인할 수 있습니다.</p>
      </div>
    </div>

    <div class="top_box">
      <p>사용자 ID</p>
      <p>사용자 이름</p>
      <p>goods명</p>
      <p>가격</p>
      <p>구매날짜</p>
    </div>

    <div class="container">
      <?php foreach($grice as $v) : ?>
        <?php 
          $find = user::find("id = ?", $v["ui"]);
        ?>
        <div class="item">
          <p><?= $v['ui']?></p>
          <p><?= $find["name"]?></p>
          <p><?= $v['name']?></p>
          <p><?= number_format($v["money"])?>원</p>
          <p><?= explode(" ", $v["date"])[0]?></p>
        </div>
      <?php endforeach ?>
    </div>
  </div>