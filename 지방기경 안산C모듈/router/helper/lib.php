<?php 
  session_start();
  date_default_timezone_set("Asia/Seoul");

  define("USER", @$_SESSION["user"]);
  define("LOGIN", @$_SESSION["login"]);
  define("ROOT", $_SERVER["DOCUMENT_ROOT"]);

  function move($msg = false, $url = "back") {
    $msg = is_array($msg) ? implode("\\n", $msg) : $msg;

    $url = $url == "back" ? "history.back()" : "location.href='$url'";

    if ($msg) {
      echo "<script>alert('$msg')</script>";
    }

    if ($url) {
      echo "<script>$url</script>";
    }

    exit;
  }

  function err($err, $msg = false, $url = "back") {
    if ($err) {
      move($msg, $url);
    }
  }

  function dd() {
    echo "<pre>";
      var_dump(...func_get_args());
    echo "</pre>";
  }

  function view($loc, $data = []) {
    extract($data);

    require ROOT."/view/header.php";
    require ROOT."/view/$loc.php";
    require ROOT."/view/footer.php";
  }

  function json($data = [], $s = 200) {
    header("Content-type: application/json");
    http_response_code($s);
    echo json_encode($data);
  }
?>