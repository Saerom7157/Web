<?php 
  $reser = reser::all();
?>

  <div class="subpage">
    <img src="resourse/images/14.jpg" alt="#" title="#">

    <div class="text_box">
      <div class="text_box">
        <p class="top"><i class="fa fa-home"></i> HOME <i class="fa fa-angle-right"></i> GOODS</p>

        <h1 class="bottom">SKILLS BASEBALL PARK에 대해 <br> 알려드릴게요</h1>
      </div>
    </div>  
  </div>

<?php if (@$_SESSION["user"] != "manager" && @$_SESSION["user"] != "admin" && @$_SESSION["user"]) : ?>
  <div class="reservation wrap" style="margin-top: 15rem;">
  <div class="title">
      <div class="back">RESERVATION INFO</div>
      <p class="main">S. B. P <span>RESERVATION</span></p>
      <div class="line"></div>
      <div class="sub">
        <b>예약현황 영역입니다.</b>
        <span>skills baseball park의 예약현황을 확인할 수 있습니다.</span>
      </div>
    </div>

    <div class="top_box">
      <p>예약자 ID</p>
      <p>예약자 이름</p>
      <p>리그</p>
      <p>날짜</p>
      <p>시간</p>
      <p>최소인원</p>
      <p>사용료</p>
    </div>

    <div class="container">
      <?php foreach(@$reser as $v) : ?>
        <?php 
          $user = user::find("idx = ?", $v["user_idx"]);
        ?>
        <div class="item">
          <p><?= $v["user_idx"]?></p>
          <p><?= $user["name"]?></p>
          <p><?= $v["league"]?></p>
          <p><?= $v["date"]?></p>
          <p><?= $v["time"]?></p>
          <p><?= number_format($v["people"])?>명</p>
          <p><?= number_format($v["price"])?>원</p>
        </div>
      <?php endforeach ?>
    </div>
  </div>

  <div class="rein wrap">
    <div class="title">
      <div class="back">RESERVATION</div>
      <p class="main">S. B. P <span>RESERVATION</span></p>
      <div class="line"></div>
      <div class="sub">
        <b>예약 영역입니다.</b>
        <span>skills baseball park의 구장을 예약할 수 있습니다.</span>
      </div>
    </div>

    <div class="big_box">
      <img src="/resourse/images/15.jpg" alt="#" title="#">

      <form action="/addResDB" method="POST" class="container join">
        <div class="inp">
          <p>리그</p>
          <select onchange="changeTime(this.value)" name="league" id="league" style="width: 500px">
            <option value="나이트리그">나이트리그</option>
            <option value="주말리그">주말리그</option>
            <option value="새벽리그">새벽리그</option>
          </select>
        </div>

        <div class="inp">
          <p>날짜</p>
          <input type="date" name="date" id="date">
        </div>

        <div class="inp time">
          <p>시간</p>
          <select name="time" id="time">
            <option value="19">19시</option>
            <option value="23">23시</option>
          </select>
        </div>

        <div class="inp">
          <p>최소인원</p>
          <input oninput="changeMoney()" type="number" name="people" id="people" value="20" min="20">
        </div>

        <div class="inp">
          <p>사용료</p>
          <input type="text" readonly name="money" id="money" value="50000">
        </div>

        <div class="btn button3" onclick="chkForm()">예약하기</div>
        <button class="dn buu" style="display: none;"></button>
      </form>
    </div>
  </div>

  <script>
    let times = {
      "나이트리그" : [19, 23],
      "주말리그" : ["09", 13, 15],
      "새벽리그" : ["04", "07"]
    }

    function chkForm() {
      let league = $("#league").val();
      let date = $("#date").val();
      check = false;

      if (league == "" || date == "") return;
      let time = times[league];
      let date2 = date.split("-");
      let firstDay = new Date(date2[0], date2[1] - 1, 1).getDay() - 1;
      if (league != "새벽리그" || firstDay == 1 || firstDay == 2) {
        firstDay = 0;
      } else {
        firstDay = firstDay < 0 ? 2 : (firstDay == 0 ? 1 : 1 + (7- firstDay));
      }

      dd(time, date2[0], date2[1], firstDay);

      time.forEach((v, i) => {
        if (i == 0) {
          if (date == `${date2[0]}-${date2[1]}-${`0${firstDay}`}`) {
            return alert("매월 첫째주 월요일 새벽 4시는 예약이 불가능합니다.");
          } else {
            check = true;
          }
        } else {
          return
        }
      });

      if ($("#date").val() == "") return alert("날짜를 선택해 주세요");
      if ($("#league").val() == "") return alert("리그를 선택해 주세요");
      if ($("#time").val() == "") return alert("경기를 선택해 주세요");
      if ($("#people").val() == "") return alert("사용인원을 입력해 주세요");
      if ($("#people").val() < 20) return alert("최소인원은 20명입니다");

      if (check == true) {
         $(".buu").click();
      }
    }

    function changeTime(value) {
      if (value == "나이트리그") {
        $("#time").html(`
          <option value="19">19시</option>
          <option value="23">23시</option>
        `)

        $("#money").val(50000);
        $("#people").val(20);
      } else if (value == "주말리그") {
        $("#time").html(`
          <option value="09">09시</option>
          <option value="13">13시</option>
          <option value="15">15시</option>
        `)

        $("#money").val(100000);
        $("#people").val(20);
      } else {
        $("#time").html(`
          <option value="04">04시</option>
          <option value="07">07시</option>
        `)

        $("#money").val(30000);
        $("#people").val(20);
      }
    }

    function changeMoney() {
      let money = $("#money").val();
      const league = $("#league").val() == "나이트리그" ? 50000 : ($("#league").val() == "주말리그" ? 100000 : 30000)

      if (league == 50000) {
        $("#money").val((30000 + (($("#people").val() < 20 ? 0 : $("#people").val()) * 1000)));
      } else if (league == 100000) {
        $("#money").val((80000 + (($("#people").val() < 20 ? 0 : $("#people").val()) * 1000)));
      } else {
        $("#money").val((10000 + (($("#people").val() < 20 ? 0 : $("#people").val()) * 1000)));
      }
    }
  </script>
<?php elseif (@$_SESSION["user"] == "manager") : ?>
<?php 
  $res = reser::findAll("status = ? || status = ?", ["wait", "confirm"]);
?>

<div class="rlist3 wrap">
  <div class="title">
      <div class="back">RESER LIST</div>
      <p class="main">S. B. P <span>RESER LIST</span></p>
      <div class="line"></div>
      <div class="sub">
        <b>신청 예약 목록 영역</b>
        <p>일반회원이 신청한 예약목록을 확인할 수 있습니다.</p>
      </div>
    </div>

  <div class="btn center" style="width: 100px; margin-top: 5rem" onclick="Reser.deAll()">전체삭제</div>

  <div class="top_box">
    <p>-</p>
    <p>예약자 ID</p>
    <p>예약자 이름</p>
    <p>리그</p>
    <p>날짜</p>
    <p>시간</p>
    <p>최소인원</p>
    <p>사용료</p>
    <p>예약가능여부</p>
    <p>-</p>
    <p>-</p>
  </div>

  <?php foreach($res as $v) : ?>
    <?php 
      $user = user::find("idx = ?", $v["user_idx"]);
      $check = reser::find("idx != ? && date = ? && league = ? && time = ? && status = ?", [$v["idx"], $v["date"], $v["league"], $v["time"], "confirm"]);
    ?>

    <div class="container3">
      <p><input type="checkbox" oninput="Reser.addIdx(event, <?= $v['idx']?>, '<?= $check ? 'den' : 'con'?>')"></p>
      <p><?= $user["idx"] ?></p>
      <p><?= $user["name"]?></p>
      <p><?= $v["league"]?></p>
      <p><?= $v["date"]?></p>
      <p><?= $v["time"]?></p>
      <p><?= number_format($v["people"])?>명</p>
      <p><?= number_format($v["price"])?>원</p>
      <p><?= $check ? "승인 불가" : ($v["status"] == "confirm" ? "승인완료" : "예약 가능")?></p>
      <div>
        <a href="/conResDB/<?= $v["idx"]?>/<?= $v["date"]?>/<?= $v["league"]?>/<?= $v["time"]?>" class="btn con <?= $check ? "off" : ($v["status"] == "confirm" ? "off" : "")?>">예약승인</a>
      </div>
      <div>
        <a href="/delResDB/<?= $v["idx"]?>" class="btn del <?= $check ? "" : "off" ?>">삭제</a>
      </div>
    </div>
  <?php endforeach ?>
</div>

<?php elseif (@$_SESSION["user"] == "admin") : ?>
  <div class="fev_section join wrap" style="width:600px">
    <div class="title ct">
      <h1>휴일 지정</h1>
    </div>

    <form action="/addFevDB" method="POST" class="container">
    <div class="inp">
      <p>날짜</p>
      <input type="date" id="date" name="date">
    </div>

    <div class="inp">
      <p>리그</p>

      <select name="league" id="league" onchange="timeSet(this.value)">
        <option selected disabled>리그를 선택해주세요</option>
        <option value="나이트리그">나이트리그</option>
        <option value="주말리그">주말리그</option>
        <option value="새벽리그">새벽리그</option>
      </select>
    </div>

    <div class="inp">
      <p>경기 시간</p>
      <select name="time" id="time">
        <option selected disabled>시간을 선택해주세요</option>
        <option value="19">19</option>
        <option value="23">23</option>
      </select>
    </div>

    <div class="btn center" onclick="checkFev()" style="height: 58px; margin-top: 1.5rem">휴일 지정</div>
    <button class="dn" style="opacity: 0"></button>
    </form>
  </div>

  <?php 
    $res = reser::findAll("status = ? || status = ? || status = ? ORDER BY date, time DESC", ["confirm", "request", "end"]);
    $reser = [];

    foreach($res as $v) {
      if (!@$reser[$v["date"]]) $reser[$v["date"]] = [];

      array_push($reser[$v["date"]], $v);
    }

    $res = [];

    foreach($reser as $v) {
      usort($v, function($a, $b) {
        return str_replace("시", "", $b["time"]) - str_replace("시", "", $a["time"]);
      });

      array_push($res, ...$v);
    }
  ?>

  <div class="payCon_section wrap">
    <div class="title">
      <div class="back">PAYLIST</div>
      <p class="main">S. B. P <span>PAYLIST</span></p>
      <div class="line"></div>
      <div class="sub">
        <b>결제승인 목록 영역입니다.</b>
        <span>사용자의 예약 결제를 승인해줄 수 있습니다.</span>
      </div>
    </div>

    <div class="payCon">
      <div class="box">
        <p>예약자 ID</p>
        <p>예약자 이름</p>
        <p>리그</p>
        <p>날짜</p>
        <p>시간</p>
        <p>최소인원</p>
        <p>사용료</p>
        <p>결제상태</p>
        <p>-</p>
      </div>

      <?php foreach($res as $v) : ?>
        <?php $user = user::find("idx = ?", $v["user_idx"]); ?>

        <div class="item">
          <p><?= $user["id"] ?></p>
          <p><?= $user["name"] ?></p>
          <p><?= $v["league"] ?></p>
          <p><?= $v["date"] ?></p>
          <p><?= $v["time"] ?></p>
          <p><?= number_format($v["people"]) ?>명</p>
          <p><?= number_format($v["price"]) ?>원</p>
          <p><?= $v["status"] == "confirm" ? "결제전" : ($v["status"] == "request" ? "결제요청" : "결제완료") ?></p>
          <div><a href="/endReserveDB/<?= $v["idx"]?>" class="btn <?= $v["status"] == "request" ? "" : "off" ?>">결제승인</a></div>
        </div>
      <?php endforeach ?>
    </div>
  </div>

  <script>
    function checkFev() {
      if ($("#date").val() == "") return alert("날짜를 선택해주세요.");
      if ($("#time").val() == "" && $(".league").val() != "")  return alert("경기 시간을 선택해주세요.");

      $(".fev_section button").click();
    }

    function timeSet(value) {
      if (value == "나이트리그") {
        $("#time").html(`
          <option selected disabled>시간을 선택해주세요</option>
          <option value="19">19</option>
          <option value="23">23</option>
        `)
      } else if (value == "주말리그") {
        $("#time").html(`
          <option selected disabled>시간을 선택해주세요</option>
          <option value="09">09</option>
          <option value="13">13</option>
          <option value="15">15</option>
        `)
      } else {
        $("#time").html(`
          <option selected disabled>시간을 선택해주세요</option>
          <option value="04">04</option>
          <option value="07">07</option>
        `)
      }
    }
  </script>
<?php elseif (!@$_SESSION["user"]) : ?>
  <div class="reservation wrap">
  <div class="title">
      <div class="back">RESER LIST</div>
      <p class="main">S. B. P <span>RESER LIST</span></p>
      <div class="line"></div>
      <div class="sub">
        <span>모든 사용자가 예약한 리스트를</span>
        <b>확인할 수 있는 예약현황 영역입니다.</b>
      </div>
    </div>

    <div class="top_box">
      <p>예약자 ID</p>
      <p>예약자 이름</p>
      <p>리그</p>
      <p>날짜</p>
      <p>시간</p>
      <p>최소인원</p>
      <p>사용료</p>
    </div>

    <div class="container">
      <?php foreach(@$reser as $v) : ?>
        <?php 
          $user = user::find("idx = ?", $v["user_idx"]);
        ?>
        <div class="item">
          <p><?= $v["user_idx"]?></p>
          <p><?= $user["name"]?></p>
          <p><?= $v["league"]?></p>
          <p><?= $v["date"]?></p>
          <p><?= $v["time"]?></p>
          <p><?= number_format($v["people"])?></p>
          <p><?= number_format($v["price"])?></p>
        </div>
      <?php endforeach ?>
    </div>
  </div>
<?php endif ?>