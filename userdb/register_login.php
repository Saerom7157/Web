<?php
$host = 'localhost';     // 데이터베이스 서버의 호스트명
$dbname = 'userdb';      // 데이터베이스 이름
$user = 'root';          // 데이터베이스 사용자 이름
$pass = '';              // 데이터베이스 사용자 비밀번호
$charset = 'utf8mb4';    // 문자 인코딩


$dsn = "mysql:host=$host;dbname=$dbname;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // 에러 발생 시 예외를 던지도록 설정
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // 데이터를 연관 배열 형식으로 가져오도록 설정
];

session_start();

try {
    $pdo = new PDO($dsn, $user, $pass, $options);

    //$_POST <= 메서드로 전송된 데이터를 저장합니다.
    //$_GET <= 은 url에 내가 무슨 이름으로 회원,로그인을 했는지 다 나오고 pw 까지 나오게 되어 있다 그러니 
    //그냥 $_POST를 사용을 하는것은 GET은 보완이 안되는데 POST는 정송된 데이터를 저장을 한다 여기서는 db에 저장아 되고 있죠??
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") { //$_SERVER 배열: 웹 서버와 실행 환경에 대한 정보를 저장하는 슈퍼 글로벌 배열입니다.
        //$_SERVER["REQUEST_METHOD"]: 요청이 어떤 HTTP 메소드로 전송되었는지를 나타냅니다
        //if ($_SERVER["REQUEST_METHOD"] == "POST"): 요청이 POST 메소드로 전송된 경우에만 내부 코드를 실행합니다.
        //웹 브라우져에서 서버로 전달을 하는 것이 HTTP이다 POST를 전달을 할려는 코드는 method이다 그 값을 HTTP가 전달을 해주는 것이다

        //$_POST[' '] 안에 들어가는 것은 HTML 폼에서 name 속성으로 지정한 값입니다. value 속성은 폼 데이터의 실제 값을 의미이다
        $username = $_POST['username'];//여기 필드 값을 집어 넣는 거임 (필드값 == 안에 적은값)
        $password = $_POST['password'];
        
        //action 값이 회원가입이면 ('name' 속성을 가지고 있으며 제출 버튼을 'value' 속성을 가질수 있다) 쉽게 말해서
        //버튼을 클릭하면: 해당 버튼의 value 값이 폼 데이터에 포함되어 서버로 전송됩니다.
        if ($_POST['action'] == '회원가입') {
            $email = $_POST['email'];
              
            $passwordHash = password_hash($password, PASSWORD_DEFAULT); //비밀번호를 해시화(보기 어렵게 만약내가 abc를 쳤는데 이걸 사용을 하면 dlfkjsdlkfjsdl(아무렇게 친거임)이렇게 저장이 되는겁니다)시킨는 작업
            //PASSWORD_DEFAULT <= 알고리즘을 찾아서 비밀버호를 안전하게 만들어줌
            // 원래 비밀번호: 'mysecretpassword'
            // 해시화된 비밀번호: $2y$10$eImiTXuWVxfM37uY4JANjQ==... (예시)

            $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)"; //새로운 사용자를 users 테이블에 추가하는 SQL 문입니다.
            $stmt = $pdo->prepare($sql); //pdo <= 요리사 sql <= 요리레시피
            // PDO 객체 ($pdo): 요리사 역할을 합니다. 데이터베이스와의 상호작용을 관리합니다.
            // SQL 쿼리 ($sql): 요리 레시피입니다. 어떤 작업을 수행할지 설명합니다.
            //SQL은 데이터베이스에서 데이터를 찾고 관리하는 일을 합니다.

            // prepare 메소드: 요리사가 레시피를 읽고 필요한 재료와 도구를 준비하는 과정입니다. SQL 쿼리를 준비하고, 이를 실행하기 위한 계획을 세웁니다.
            if ($stmt->execute([$username, $email, $passwordHash])) { //요리 시작 배열에 있는 [1,2,3]은 (?,?,?) 에 들어가는겁니다
                echo "회원가입 성공!"; //파업창
            } else {
                echo "회원가입 실패: 사용자 이름 또는 이메일이 이미 사용중입니다.";
            }


            // 열(컬럼): 엑셀 시트에서 각 열은 이름, 이메일, 비밀번호와 같은 특정 데이터를 저장합니다.

            // 인덱스: 엑셀 시트에서 특정 열의 값을 빠르게 찾기 위해 사용하는 색인입니다.

            // 자리 표시자 (?): 요리 레시피에서 1컵의 설탕 대신 1컵의 ?라고 써두고, 나중에 실제로 설탕을 넣는 것과 비슷합니다.


        //action 값이 로그인이면
        } else if ($_POST['action'] == '로그인') {
            $sql = "SELECT username, password FROM users WHERE username = ?"; 
            //username, password 찾는것이다 users 테이블 안에서 username = ? "?"을 찾는것이다

            //이 쿼리는 users 테이블에서 username과 password 열의 값을 선택합니다. 조건은 username 열의 값이 나중에 바인딩될 값과 일치하는 행만 조회한다는 것입니다.
            //FROM은 데이터를 조회할 테이블을 지정합니다 users <= db테이블 이름 여기에 있는 것은 / FROM users => 이 쿼리는 users 테이블에서 데이터를 가져오겠다라는 의미이다.
            
            
            //쿼리: 데이터베이스에서 특정 데이터를 요청하면 SQL이 그 데이터를 찾아줍니다.
            //SQL: 은 데이터베이스에서 데이터를 찾고 관리하는 일을 합니다.


            $stmt = $pdo->prepare($sql);
            $stmt->execute([$username]); //username = ? "?"안에 값이 들어가는 것이다
            $user = $stmt->fetch(); //사용자가 존재하면 정보를 배열 형태로 저장하고, 존재하지 않으면 false를 반환합니다.

            // login.php의 로그인 성공 부분에 추가
            //이 함수는 사용자가 입력한 비밀번호와 데이터베이스에 저장된 해시된 비밀번호를 비교합니다.
            //사용법: password_verify(입력된 비밀번호, 해시된 비밀번호)
            if ($user && password_verify($password, $user['password'])) {
                $_SESSION['username'] = $username; // 사용자 이름을 세션에 저장
                echo "로그인 성공! 환영합니다, " . $username . ". ";
                echo "<button onclick='confirmLogout()'>로그아웃</button>"; // 로그아웃 버튼 추가
            } else {
                echo "로그인 실패: 사용자 이름 또는 비밀번호가 잘못되었습니다.";
            }

            // JavaScript 로그아웃 확인 함수
            echo "<script>
            function confirmLogout() {
                var logoutBtn = confirm('로그아웃을 하시겠습니까?');
                if(logoutBtn) {
                    window.localhost.href = 'logout.php';
                } else {
                    alert('로아웃이 취소되었습니다');
                }
            }
            </script>";
        }
    }
} catch (PDOException $e) {
    //die() 함수는 메시지를 출력하고 현재 스크립트의 실행을 중단합니다. exit() 함수와 동일한 기능을 합니다.
    die("Database error: " . $e->getMessage());
}
?>
