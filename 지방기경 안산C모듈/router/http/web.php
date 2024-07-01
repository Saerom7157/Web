<?php 
  foreach (reser::findAll("status = ? && date <= ?", ["confirm", date("Y-m-d", strtotime("+1 days"))]) as $v) {
    reser::update([
      "status" => "noPay"
    ], $v['idx']);
  }

  foreach (holiday::all() as $v) {
    $reser = [];

    if ($v['time'] == "") {
      $reser = reser::findAll("date = ? && status != ? && status != ?", [$v['date'], "delete", "noPay"]);
    } else {
      $reser = reser::findAll("date = ? && time = ? && league = ? && status != ? && status != ?", [$v['date'], $v['time'], $v['league'], "delete", "noPay"]);
    }

    foreach($reser as $va) {
      reser::update([
        "status" => "delete"
      ], $va['idx']);
    }
  }

  get("/", function() {
    $find = user::find("id = ?", "admin");

    if(!$find) {
      user::insert([
        "id" => "admin",
        "pw" => "1234",
        "name" => "관리자"
      ]);

      user::insert([
        "id" => "manager",
        "pw" => "1234",
        "name" => "담당자"
      ]);
    }

    view("index");
  });

  get("/sub01", function() {
    view("sub01");
  });

  get("/sub02", function() {
    view("sub02");
  });


  get("/sub03", function() {
    view("sub03");
  });

  get("/sub04", function() {
    view("sub04");
  });

  middleware("guest", function() {
    get("/join", function() {
      view("join");
    });
    
    get("/login", function() {
      view("login");
    });

    post("/joinDB", function() {
      user::insert([
        "id" => $_POST["id"],
        "pw" => $_POST["pw"],
        "name" => $_POST["name"]
      ]);

      move("회원가입이 완료되었습니다. \\n관리자 승인 대기 중입니다.", "/");
    });

    post("/loginDB", function() {
      foreach($_POST as $v) {
        if (trim($v) == "") return move("빈 내용이 있습니다.");
      }

      $find = user::find("id = ? && pw = ?", [$_POST["id"], $_POST["pw"]]);

      if (!$find) return move("회원구분, 아이디 또는 비밀번호를 확인해주세요.");

      if ($find["id"] == "admin" && $_POST["id"] == "admin" && $_POST["user"] == "admin") {
        @$_SESSION["user"] = $find["id"];
        @$_SESSION["login"] = date("Y-m-d");

        user::update([
          "nowDate" => date("Y-m-d")
        ], $find["idx"]);

        move("로그인이 되었습니다.", "/");
      } else if ($find["id"] == "manager" && $_POST["id"] == "manager" && $_POST["user"] == "manager") {
        @$_SESSION["user"] = $find["id"];
        @$_SESSION["login"] = date("Y-m-d");

        user::update([
          "nowDate" => date("Y-m-d")
        ], $find["idx"]);

        move("로그인이 되었습니다.", "/");
      } else if ($find["id"] != "manager" && $find["id"] != "admin" && $_POST["user"] == "normal" && $_POST["id"] != "admin" && $_POST["id"] != "manager") {
        @$_SESSION["user"] = $find["id"];
        @$_SESSION["login"] = date("Y-m-d");

        user::update([
          "nowDate" => date("Y-m-d")
        ], $find["idx"]);

        move("로그인이 되었습니다.", "/");
      } else {
        return move("회원구분, 아이디 또는 비밀번호를 확인해주세요.");
      }
    });
  });

  get("/popup", function() {
    @$_SESSION["login"] = "";
    require ROOT."/view/popup.php";
  });

  get("/logout", function() {
    $find = user::find("id = ?", @$_SESSION["user"]);

    user::update([
      "preDate" => date("Y-m-d")
    ], $find["idx"]);

    session_destroy();

    move("로그아웃 되었습니다.", "/");
  });

  // 마이페이지, 굿즈 예약
  get("/mypage", function() {
    if (@$_SESSION["user"] == "manager" || @$_SESSION["user"] == "admin") {
      return move("일반회원만 이용 가능합니다.", "/");
    }

    view("mypage");
  });

  post("/inserDB", function() {
    foreach($_POST as $v) {
      if (trim($v) == "") return move("빈 내용이 있습니다.");
    }

    if ($_POST["money"] <= 0) return move("가격은 최소 1원 이상이여야 합니다.");

    $img = $_FILES["img2"];
    $tmp = $img["tmp_name"];
    $name = $img["name"];
    $uniq = uniqid();

    if ($img["tmp_name"] != "") {
      if (explode("/", $img["type"])[0] != "image") return move("올바른 이미지 형식이 아닙니다.");
    }

    goods::insert([
      "name" => $_POST["name"],
      "text" => $_POST["text"],
      "money" => $_POST["money"],
      "img" => $uniq."_".$name
    ]);

    move_uploaded_file($tmp, $_SERVER["DOCUMENT_ROOT"]."/resourse/goods/$uniq"."_"."$name");
    move("goods가 등록되었습니다.", "/sub04");
  });

  get("/detail/$", function($idx) {
    view("detail", [
      "idx" => $idx
    ]);
  });
  
  post("/nowPrice", function() {
    view("nowPrice");
  });

  post("/priceDB", function() {
    grice::insert([
      "img" => $_POST["img"],
      "name" => $_POST["name"],
      "money" => $_POST["money"],
      "ui" => @$_SESSION["user"]
    ]);

    move("구매가 완료되었습니다.", "/mypage/list");
  });

  get("/mypage/list", function() {
    view("mypage");
  });

  get("/basekit/$/$", function($idx, $count) {
    $good = goods::find("idx = ?", $idx);
    $base = basekit::find("uidx =? ", $idx);
    if ($count != "null") {
      $price = $good["money"] * $count;
      if (@$base) {
        basekit::update([
          "count" => $base["count"] + $count,
          "price" => $base["price"] + $price
        ], $base["idx"]);
      } else {
        basekit::insert([
          "count" => $count,
          "img" => $good["img"],
          "name" => $good["name"],
          "ui" => @$_SESSION["user"],
          "text" => $good["text"],
          "money" => $good["money"],
          "uidx" => $good["idx"],
          "date" => date("Y-m-d"),
          "price" => $price
        ]);
      }
    } else {
      if (@$base) {
        basekit::update([
          "count" => $base["count"] + 1,
          "price" => $base["price"] + $good["money"]
        ], $base["idx"]);
      } else {
        basekit::insert([
          "count" => 1,
          "img" => $good["img"],
          "name" => $good["name"],
          "ui" => @$_SESSION["user"],
          "text" => $good["text"],
          "money" => $good["money"],
          "uidx" => $good["idx"],
          "date" => date("Y-m-d"),
          "price" => $good["money"]
        ]);
      }
    }

    move("장바구니에 등록되었습니다.", "/mypage/basekit");
  });

  get("/mypage/basekit", function() {
    view("mypage");
  });

  get("/mypage/heart", function() {
    view("mypage");
  });

  get("/priceDB2/$/$/$", function($idx, $count, $ui) {
    $find = goods::find("idx = ?", $idx);
    basekit::delete($ui);
    $price = $find["money"] * $count;

    grice::insert([
      "img" => $find["img"],
      "money" => $price,
      "ui" => @$_SESSION["user"],
      "date" => date("Y-m-d"),
      "name" => $find["name"]
    ]);

    move("구매가 완료되었습니다.", "/mypage/list");
  });

  get("/heart/$", function($idx) {
    $find = heart::find("ui = ? && gidx = ?", [@$_SESSION["user"], $idx]);
    $goods = goods::find("idx = ?", $idx);

    if ($find) return move("이미 등록된 관심goods입니다.", "/sub04");

    heart::insert([
      "gidx" => $idx,
      "img" => $goods["img"],
      "name" => $goods["name"],
      "money" => $goods["money"],
      "text" => $goods["text"],
      "date" => $goods["date"],
      "ui" => @$_SESSION["user"]
    ]);

    move("관심goods가 등록되었습니다.", "/mypage/heart");
  });

  // 예약
  post("/addResDB", function() {
    $find = reser::find("date = ? && league = ? && time = ? && status = ?", [$_POST["date"], $_POST["league"], $_POST["time"], "end"]);
    $find2 = holiday::find("date = ? && league = ? && time = ?", [$_POST["date"], $_POST["league"], $_POST["time"]]);
    $find3 = holiday::find("date = ? && league = ? && time = ?", [$_POST["date"], "", ""]);

    if ($find) return move("이미 예약된 날짜입니다.", "/sub03");   
    if ($find2 || $find3) return move("해당 날짜는 휴일로 지정되었습니다."); 

    foreach($_POST as $v)  {
      if (trim($v) == "") return move("빈 내용이 있습니다.", "/sub03");
    }

    $find = user::find("id = ?", @$_SESSION["user"]);

    reser::insert([
      "user_idx" => $find["idx"],
      "league" => $_POST["league"],
      "date" => $_POST["date"],
      "people" => $_POST["people"],
      "price" => $_POST["money"],
      "time" => $_POST["time"],
      "status" => "wait"
    ]);

    move("예약이 신청되었습니다.", "/sub03");
  });

  get("/conResDB/$/$/$/$", function($idx, $date, $league, $time) {
    $find = reser::find("idx = ?", @$_GET["idx"]);
    $find = reser::find("idx != ? && date = ? && league = ? && time = ? && status = ?", [$idx, $date, $league, $time, "confirm"]);
    if ($find) move("미리예약 된 예약이 있습니다.", "/sub03");

    reser::update([
      "status" => "confirm"
    ], $idx);

    move("예약이 승인되었습니다.", "/sub03");
  });

  get("/delResDB/$", function($idx) {
    if ($idx == "") return move("삭제할 항목이 없습니다.", "/sub03");
    $idx = explode(",", $idx);

    foreach($idx as $v) {
      reser::update([
        "status" => "delete"
      ], $v);
    }

    move("예약이 삭제되었습니다.", "/sub03");
  });

  get("/delResDB/", function() {
    return move("삭제할 항목을 체크 후 다시 시도해주세요.", "/sub03");
  });

  post("/addFevDB", function() {
    if (@$_POST["league"] || @$_POST["time"]) {
      if (!@$_POST["league"] || !@$_POST["time"]) return move("빈 내용이 있습니다.", "/sub03");
      holiday::insert([
        "league" => @$_POST["league"],
        "time" => @$_POST["time"],
        "date" => @$_POST["date"]
      ]);
    } else {
      holiday::insert([
        "league" => "",
        "time" => "",
        "date" => @$_POST["date"]
      ]);
    }

    move("휴일이 지정되었습니다.", "/sub03");
  });

  get("/endReserveDB/$", function($idx) {
    reser::update([
      "status" => "end"
    ], $idx);

    move("결제가 승인되었습니다.");
  });

  get("/payResDB/$", function($idx) {
    reser::update([
      "status" => "request"
    ], $idx);

    move("결제가 요청되었습니다. 관리자 승인 시 예약이 최종 완료됩니다.", "/mypage");
  });
?>