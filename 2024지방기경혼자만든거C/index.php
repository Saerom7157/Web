<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>기능경기대회</title>
    <link rel="stylesheet" href="public/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <?php
if(isset($_GET['nick']) && isset($_GET['date'])) {
    echo "<script type='text/javascript'>alert('로그인 성공! 이름: " . urldecode($_GET['nick']) . ", 날짜: " . urldecode($_GET['date']) . "');</script>";
}
?>
</head>
<body>
    <nav class="navbar navbar-expand-lg fixed-top" style="background-color: rgba(255, 255, 255, 0.925);">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="images/logo.png" alt="Logo" style="width: 50px; height: 50px;">
            </a>
            <!-- Navigation links -->
            <div class="text-center" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item"><a class="nav-link" href="sub01.html">InforMation</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">StatIstics</a></li>
                    <li class="nav-item"><a class="nav-link" href="user.html">ReserVation</a></li>
                    <li class="nav-item"><a class="nav-link" href="goods.html">Goods</a></li> 
                </ul>
            </div>
            <!-- Authentication section -->
            <div class="auth-section">
                <button class="btn btn-login me-2" id="loginButton" data-bs-toggle="modal" data-bs-target="#loginModal">로그인</button>
                <button class="btn btn-register" id="registerOrMypageButton" data-bs-toggle="modal" data-bs-target="#registerModal">회원가입</button>
            </div>
        </div>
    </nav>
    <script src="auth.js"></script>
    
    <div class="slider">
        <div class="slide" style="background-image: url('images/09.jpg');"></div>
        <div class="slide" style="background-image: url('images/10.jpg');"></div>
        <div class="slide" style="background-image: url('images/12.jpg');"></div>
        <div class="slide" style="background-image: url('images/35.jpg');"></div>
    </div>


    <section id="information" class="mt-5 container-fluid d-flex justify-content-center align-items-center text-center bg-light rounded" style="height: 100vh; background-image: url('images/31.jpg'); background-position: center; background-size: cover;">
        <div>
            <h2 style="color: white; font-weight: bold;">스킬스 야구 공원 정보</h2>
            <div class="mt-4" style="color: white;">
                <p>스킬스 야구 공원은 시민들의 복리 증진을 위하여 설치되었으며, 시민들의 건강 및 복지 향상과 시설물의 편리한 이용을 위한 야구장입니다.</p>
                <p>야구를 사랑하고 즐기는 생활체육인들이 모이는 곳, 다양한 즐거움과 감동을 선사하는 장소입니다.</p>
                <a href="sub01.html" class="btn btn-primary">더 알아보기</a>
            </div>
        </div>
    </section>
    
    <!--달력 -->
    <div class="container mt-5">
        <h2>April 2024 Calendar</h2>
        <table class="table table-bordered calendar-table">
            <thead>
                <tr>
                    <th>Sun</th>
                    <th>Mon</th>
                    <th>Tue</th>
                    <th>Wed</th>
                    <th>Thu</th>
                    <th>Fri</th>
                    <th>Sat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                    <td>5</td>
                    <td>6</td>
                </tr>
                <tr>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                    <td>10</td>
                    <td>11</td>
                    <td>12</td>
                    <td>13</td>
                </tr>
                <tr>
                    <td>14</td>
                    <td>15</td>
                    <td>16</td>
                    <td>17</td>
                    <td>18</td>
                    <td>19</td>
                    <td><a href="#modal-20" class="calendar-link">20</a></td>
                </tr>
                <tr>
                    <td>21</td>
                    <td>22</td>
                    <td>23</td>
                    <td>24</td>
                    <td>25</td>
                    <td>26</td>
                    <td>27</td>
                </tr>
                <tr>
                    <td>28</td>
                    <td>29</td>
                    <td>30</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <div id="modal-20" class="modal-Calendar">
        <div class="modal-content-Calendar">
            <a href="#" class="close">&times;</a>
            <img src="images/픽토그래픽.psd">
            <p>아직 게임이 없습니다.</p>
        </div>
    </div>


<!-- Ranking Section -->
<section id="ranking" class="container mt-5">
    <h2 class="text-center">리그별 순위 및 주요 부문 Top5</h2>
    
    <!-- League Information Display -->
    <div id="night-league" class="mt-4">
      <h3 class="text-center">나이트리그 순위</h3>
      <div class="row">
        <div class="col-md-6">
          <h4>투수 순위</h4>
          <ul class="list-group">
            <li class="list-group-item">투수 A, ERA 2.34, 승 10, 패 3</li>
            <li class="list-group-item">투수 B, ERA 3.45, 승 8, 패 5</li>
          </ul>
        </div>
        <div class="col-md-6">
          <h4>타자 순위</h4>
          <ul class="list-group">
            <li class="list-group-item">타자 C, AVG .345, 홈런 15, 타점 50</li>
            <li class="list-group-item">타자 D, AVG .320, 홈런 20, 타점 60</li>
          </ul>
        </div>
      </div>
    </div>

    <!-- Major Categories Top5 Accordion -->
    <div class="accordion mt-5" id="majorCategoriesTop5">
      <h3 class="text-center">주요 부문 Top5</h3>
      <div class="accordion-item">
        <h2 class="accordion-header" id="headingBatting">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseBatting" aria-expanded="false" aria-controls="collapseBatting">
            타율 Top5
          </button>
        </h2>
        <div id="collapseBatting" class="accordion-collapse collapse" aria-labelledby="headingBatting">
          <div class="accordion-body">
            <p>1위: 일타율, 2위: 이타율, 3위: 삼타율, 4위: 사타율, 5위: 오타율</p>
          </div>
        </div>
      </div>
      <!-- Repeat for other categories -->
    </div>
  </section>

  <div id="loginModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5>Login</h5>
                <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <form action="login.php" method="post">
                    <label for="em">Email address:</label>
                    <input type="text" class="form-control" id="em" name="em" required><br>
                    <label for="pw">Password:</label>
                    <input type="password" class="form-control" id="pw" name="pw" required><br>
                    <label for="user">회원구분</label>
                    <div class="input-group mb-3 mt-4">
                        <select name="role" id="user" class="w-100 form-select">
                          <option value="not">-----------회원구분-----------</option>
                          <option value="admin">관리자</option>
                          <option value="manager">담당자</option>
                          <option value="member">일반회원</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">닫기</button>
                        <input type="submit" value="로그인" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>

    
</div>

    <!-- Register Modal -->
    <div id="registerModal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5>회원가입</h5>
                    <button type="button" class="close" data-bs-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="reg.php" method="post">
                        <label for="nick">이름</label>
                        <input type="text" class="form-control" id="nick" name="nick" required><br>
                        <label for="em">Email address:</label>
                        <input type="email" class="form-control" id="em" name="em" required><br>
                        <label for="pw">Password:</label>
                        <input type="password" class="form-control" id="pw" name="pw" required><br>
                        <label for="cpw">Confirm Password:</label>
                        <input type="password" class="form-control" id="cpw" name="cpw" required><br>
                        <!-- CAPTCHA Section -->
                        <label>캡차 인증:</label>
                        <img src="captcha/captcha.png" style="margin-bottom:25px" width="180px" height="60px"><br>
                        <input type="text" class="form-control" name="captcha" placeholder="위 이미지의 문자를 입력하세요" required><br>
                        <button type="submit" class="btn btn-success">회원가입</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bootstrap 5 JS bundle -->
    <script src="public/bootstrap-5.0.2-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>