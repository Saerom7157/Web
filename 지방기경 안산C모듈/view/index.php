

  <!-- 비주얼 -->
  <div class="visual">
    <div class="slide">
      <div class="item">
        <img src="resourse/images/slide1.png" alt="#" title="#">

        <div class="text_box">
          <h1>No limits amazing <span>skills baseball park</span>!</h1>
          <h2>한계없는 굉장함! 스킬스 베이스볼 파크</h2>
        </div>
      </div>
      <div class="item">
        <img src="resourse/images/slide2.png" alt="#" title="#">

        <div class="text_box">
          <h1><span>스킬스 베이스볼 파크에</span> 오신것을 환영합니다.</h1>
          <h2>Welcome to the Skills baseball park</h2>
        </div>
      </div>
      <div class="item">
        <img src="resourse/images/slide3.png" alt="#" title="#">

        <div class="text_box">
          <h1>New Champion, New Challenge, <span>Skills Baseball Park</span></h1>
          <h2>항상 새로운 도전을 시도하는 스킬스 베이스볼 파크!</h2>
        </div>
      </div>
      <div class="item">
        <img src="resourse/images/slide4.png" alt="#" title="#">

        <div class="text_box">
          <h1><span>스킬스베이스볼 파크</span>를 응원해주시는 모든 분께 감사드립니다.</h1>
          <h2>앞으로도 기대에 부응하는 스킬스베이스볼 파크가 되겠습니다!</h2>
        </div>
      </div>
    </div>
  </div>

  <!-- 인포메이션 -->
  <div class="information wrap">
    <div class="title">
      <div class="back">INFORMATION</div>
      <p class="main">S. B. P. <span>INFORMATION</span></p>
      <div class="line"></div>
      <div class="sub">
        <b>INFORMATION 영역</b>
        <p>skills baseball park의 정보를 알아보실 수 있습니다.</p>
      </div>
    </div>

    <div class="container">
      <div class="img_box">
        <img src="resourse/images/14.jpg" alt="#" title="#">
        <img src="resourse/images/13.jpg" alt="#" title="#">
      </div>

      <div class="col-flex">
        <div class="text_box">
          <h1><i class="fa fa-quote-left"></i></h1>
          <h1><i class="fa fa-quote-right"></i></h1>

          <div class="col-flex" style="gap: 20px;">
            <p><span>Skills baseball park</span>는 시민들의 복리증진을 위하여 설치되었으며,<br> 시민들의 건강 및 복지향상과 시민들에게 <br> 편리한 시설물 이용을 위한 야구장입니다.</p>
            <p>
              야구를 사랑하며 즐기는 생활체육인들이 모이는 곳<br>
              다양한 즐거움과 감동을 선사하는 곳<br>
              <span>Skills baseball park</span>
            </p>
          </div>
        </div>

        <a href="sub01.html" class="btn">소개 페이지 바로가기 <i class="fa fa-angle-right"></i></a>
      </div>
    </div>
  </div>

  <!-- 일정 -->
  <input type="checkbox" name="modal" id="modal" hidden>
  <div class="schedule wrap">
    <div class="title">
      <div class="back">GAME SCHEDULE</div>
      <p class="main">S. B. P. <span>GAME SCHEDULE</span></p>
      <div class="line"></div>
      <div class="sub">
        <b>GAME SCHEDULE 영역</b>
        <p>skills baseball park의 경기일정을 확인할 수 있습니다.</p>
      </div>
    </div>

    <div class="top_box flex jcfe">
      <div class="ani_box por">
        <div class="ani_slide">
          <div class="text">매주 수요일, 금요일은 게임이 있습니다!</div>
          <div class="text">매주 토요일은 게임이 없습니다!</div>
          <div class="text">매주 수요일, 금요일은 게임이 있습니다!</div>
        </div>
      </div>
    </div>

    <div class="container flex calnder">
      <div class="left">
        <div class="today col-flex tac">
          <h1 style="font-size: 140px;">02</h1>
          <h2 style="font-size: 45px; margin-top: -30px;">TUESDAY</h2>
        </div>
        <div class="game_box">
          <h3 class="ct">금일 게임 현황</h3>
          <div class="flex jcsb">
            <div class="logo_box col-flex tac">
              <div class="img_box por">
                <img src="resourse/images/tw.png" alt="#" title="#">
                <div class="text_box" style="color: tomato;">Win</div>
              </div>
              <h3>Team Web</h3>
            </div>
            <div class="flex aic" style="gap: 20px;">
              <h1 style="font-size: 45px;">5</h1>
              <h2 style="color: lightgray;">대</h2>
              <h1 style="font-size: 45px;">4</h1>
            </div>
            <div class="logo_box col-flex tac">
              <div class="img_box por">
                <img src="resourse/images/td.png" alt="#" title="#">
                <div class="text_box" style="color: orange;">Lose</div>
              </div>
              <h3>Team Design</h3>
            </div>
          </div>
        </div>
      </div>

      <div class="right">
        <div class="date flex aic jcsb">
          <div class="btns aic flex" style="gap: 5px">
            <div class="btn" onclick="changeMonth(-1)"><i class="fa fa-angle-left"></i></div>
            <div class="btn" onclick="changeMonth(1)"><i class="fa fa-angle-right"></i></div>
          </div>
          <p style="font-size: 35px;" class="dates">2024. <span style="color: #1a1455;">04 APRIL</span></p>
        </div>

        <div class="top">
          <p>Sun</p>
          <p>Mon</p>
          <p>Tue</p>
          <p>wed</p>
          <p>Thu</p>
          <p>Fri</p>
          <p>Sat</p>
        </div>

        <div class="bottom por">
          <p style="pointer-events: none;"></p>
          <div><p>1</p></div>
          <div><p style="color: white; background: #1a1455;">2</p></div>
          <div><p>3</p></div>
          <div><p>4</p></div>
          <div><p>5</p></div>
          <div><p>6</p></div>
          <div><p>7</p></div>
          <div><p>8</p></div>
          <div><p>9</p></div>
          <div><p>10</p></div>
          <div><p>11</p></div>
          <div><p>12</p></div>
          <div><p>13</p></div>
          <div><p>14</p></div>
          <div><p>15</p></div>
          <div><p>16</p></div>
          <div><p>17</p></div>
          <div><p>18</p></div>
          <div><p>19</p></div>
          <div><label for="modal">20</label></div>
          <div><p>21</p></div>
          <div><p>22</p></div>
          <div><p>23</p></div>
          <div><p>24</p></div>
          <div><p>25</p></div>
          <div><p>26</p></div>
          <div><p>27</p></div>
          <div><p>28</p></div>
          <div><p>29</p></div>
          <div><p>30</p></div>
            <b style="font-size: 14px; font-weight: normal;">Click!</b>
        </div>
        <label for="modal" class="label_modalbt dn"></label>
      </div>
    </div>

    <div class="sc_mod">
      <img src="resourse/images/modal.png" alt="#" title="#" class="img">
      <div class="container2">
        <div class="box">
          <div class="table_box"></div>
        </div>
        <label for="modal" class="btn">닫기 <i class="fa fa-xmark"></i></label>
      </div>
    </div>
  </div>

  <input type="radio" name="player" id="p1"  checked hidden>
  <input type="radio" name="player" id="p2"  hidden>
  <input type="radio" name="league" id="l1"  checked hidden>
  <input type="radio" name="league" id="l2"  hidden>
  <input type="radio" name="league" id="l3"  hidden>
  <div class="ranking wrap">
    <div class="title">
      <div class="back">RANKING</div>
      <p class="main">S. B. P. <span>RANKING</span></p>
      <div class="line"></div>
      <div class="sub">
        <b>RANKING 영역</b>
        <p>리그별 투수/타자들과 주요부문 top5를 확인할 수 있습니다.</p>
      </div>
    </div>
    
    <div class="top_box dfj">
      <div class="league_box">
        <label for="l1">나이트리그</label>
        <label for="l2">주말리그</label>
        <label for="l3">새벽리그</label>
      </div>
      <div class="player_box">
        <label for="p1">투수</label>
        <label for="p2">타자</label>
      </div>
    </div>

    <div class="container_box">
      <div class="container">
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/13.jpg" alt="#" title="#">

            <h2 class="poa name">1위. 나일투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/14.jpg" alt="#" title="#">

            <h2 class="poa name">2위. 나이투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/15.jpg" alt="#" title="#">

            <h2 class="poa name">3위. 나삼투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/16.jpg" alt="#" title="#">

            <h2 class="poa name">4위. 나사투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/17.jpg" alt="#" title="#">

            <h2 class="poa name">5위. 나오투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/18.jpg" alt="#" title="#">

            <h2 class="poa name">6위. 나육투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/19.jpg" alt="#" title="#">

            <h2 class="poa name">7위. 나칠투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>

        <a href="#" class="item noimg">
          <div class="col-flex tac">
            <h1><i class="fa fa-plus"></i></h1>
            <p>더 알아보기</p>
          </div>
          
          <div class="col-flex tac">
            <p>117명의 선수들을 더 알아보고 싶으시다면<br> 더 알아보기를 눌러주세요!</p>
          </div>
        </a>
      </div>

      <div class="container">
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/14.jpg" alt="#" title="#">

            <h2 class="poa name">1위. 나일타</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/15.jpg" alt="#" title="#">

            <h2 class="poa name">2위. 나이투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/16.jpg" alt="#" title="#">

            <h2 class="poa name">3위. 나삼타</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/17.jpg" alt="#" title="#">

            <h2 class="poa name">4위. 나사타</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/18.jpg" alt="#" title="#">

            <h2 class="poa name">5위. 나오타</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/19.jpg" alt="#" title="#">

            <h2 class="poa name">6위. 나육타</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/13.jpg" alt="#" title="#">

            <h2 class="poa name">7위. 나칠타</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>

        <a href="#" class="item noimg">
          <div class="col-flex tac">
            <h1><i class="fa fa-plus"></i></h1>
            <p>더 알아보기</p>
          </div>
          
          <div class="col-flex tac">
            <p>117명의 선수들을 더 알아보고 싶으시다면<br> 더 알아보기를 눌러주세요!</p>
          </div>
        </a>
      </div>

      <div class="container">
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/15.jpg" alt="#" title="#">

            <h2 class="poa name">1위. 주일투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/16.jpg" alt="#" title="#">

            <h2 class="poa name">2위. 주이투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/17.jpg" alt="#" title="#">

            <h2 class="poa name">3위. 주삼투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/18.jpg" alt="#" title="#">

            <h2 class="poa name">4위. 주사투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/19.jpg" alt="#" title="#">

            <h2 class="poa name">5위. 주오투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/13.jpg" alt="#" title="#">

            <h2 class="poa name">6위. 주육투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/14.jpg" alt="#" title="#">

            <h2 class="poa name">7위. 주칠투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>

        <a href="#" class="item noimg">
          <div class="col-flex tac">
            <h1><i class="fa fa-plus"></i></h1>
            <p>더 알아보기</p>
          </div>
          
          <div class="col-flex tac">
            <p>117명의 선수들을 더 알아보고 싶으시다면<br> 더 알아보기를 눌러주세요!</p>
          </div>
        </a>
      </div>

      <div class="container">
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/16.jpg" alt="#" title="#">

            <h2 class="poa name">1위. 주일타</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/17.jpg" alt="#" title="#">

            <h2 class="poa name">2위. 주이투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/18.jpg" alt="#" title="#">

            <h2 class="poa name">3위. 주삼타</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/19.jpg" alt="#" title="#">

            <h2 class="poa name">4위. 주사타</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/13.jpg" alt="#" title="#">

            <h2 class="poa name">5위. 주오타</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/14.jpg" alt="#" title="#">

            <h2 class="poa name">6위. 주육타</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/15.jpg" alt="#" title="#">

            <h2 class="poa name">7위. 주칠타</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>

        <a href="#" class="item noimg">
          <div class="col-flex tac">
            <h1><i class="fa fa-plus"></i></h1>
            <p>더 알아보기</p>
          </div>
          
          <div class="col-flex tac">
            <p>117명의 선수들을 더 알아보고 싶으시다면<br> 더 알아보기를 눌러주세요!</p>
          </div>
        </a>
      </div>

      <div class="container">
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/16.jpg" alt="#" title="#">

            <h2 class="poa name">1위. 새일투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/17.jpg" alt="#" title="#">

            <h2 class="poa name">2위. 새이투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/18.jpg" alt="#" title="#">

            <h2 class="poa name">3위. 새삼투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/19.jpg" alt="#" title="#">

            <h2 class="poa name">4위. 새사투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/13.jpg" alt="#" title="#">

            <h2 class="poa name">5위. 새오투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/14.jpg" alt="#" title="#">

            <h2 class="poa name">6위. 새육투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/15.jpg" alt="#" title="#">

            <h2 class="poa name">7위. 새칠투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>31</p></div>
            <div class="col-flex tac"><h4>승리</h4><p>18</p></div>
            <div class="col-flex tac"><h4>패배</h4><p>10</p></div>
            <div class="col-flex tac"><h4>탈삼진</h4><p>204</p></div>
            <div class="col-flex tac"><h4>평균자책</h4><p>2.64</p></div>
            <div class="col-flex tac"><h4>이닝 수 </h4><p>221</p></div>
          </div>
        </div>

        <a href="#" class="item noimg">
          <div class="col-flex tac">
            <h1><i class="fa fa-plus"></i></h1>
            <p>더 알아보기</p>
          </div>
          
          <div class="col-flex tac">
            <p>117명의 선수들을 더 알아보고 싶으시다면<br> 더 알아보기를 눌러주세요!</p>
          </div>
        </a>
      </div>

      <div class="container">
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/17.jpg" alt="#" title="#">

            <h2 class="poa name">1위. 새일타</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/18.jpg" alt="#" title="#">

            <h2 class="poa name">2위. 새이투</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/19.jpg" alt="#" title="#">

            <h2 class="poa name">3위. 새삼타</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/13.jpg" alt="#" title="#">

            <h2 class="poa name">4위. 새사타</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/14.jpg" alt="#" title="#">

            <h2 class="poa name">5위. 새오타</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/15.jpg" alt="#" title="#">

            <h2 class="poa name">6위. 새육타</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>
        <div class="item">
          <div class="img_box por">
            <img src="resourse/images/16.jpg" alt="#" title="#">

            <h2 class="poa name">7위. 새칠타</h2>
            <p class="poa tx">마우스를 올려보세요!</p>
          </div>

          <div class="text_box">
            <div class="col-flex tac"><h4>경기 수</h4><p>144</p></div>
            <div class="col-flex tac"><h4>타율</h4><p>.367</p></div>
            <div class="col-flex tac"><h4>안타</h4><p>189</p></div>
            <div class="col-flex tac"><h4>홈런</h4><p>32</p></div>
            <div class="col-flex tac"><h4>타점</h4><p>123</p></div>
            <div class="col-flex tac"><h4>도루</h4><p>30</p></div>
          </div>
        </div>

        <a href="#" class="item noimg">
          <div class="col-flex tac">
            <h1><i class="fa fa-plus"></i></h1>
            <p>더 알아보기</p>
          </div>
          
          <div class="col-flex tac">
            <p>117명의 선수들을 더 알아보고 싶으시다면<br> 더 알아보기를 눌러주세요!</p>
          </div>
        </a>
      </div>

      <div class="arcodien">
        <h1>주요 부문에서<br>TOP5👑을 달성한<br>선수들이에요</h1>

        <input type="radio" id="open1" name="open" hidden>
        <input type="radio" id="open2" name="open" hidden>
        <input type="radio" id="open3" name="open" hidden>
        <input type="radio" id="open4" name="open" hidden>
        <input type="radio" id="open5" name="open" hidden>
        <input type="radio" id="open6" name="open" hidden>
        <input type="radio" id="close" name="open" hidden>

        <div class="box flex" style="margin-top: 5rem;">
          <div class="item" style="--rotate: -30deg; --top : 4rem">
            <label for="open1" class="open"></label>
            <label for="close" class="close dn"></label>

            <img src="resourse/images/05.jpg" alt="a1" title="a1">

            <div class="name col-flex jcsb">
              <h4>타율</h4>
              <p style="opacity: .5;">
                Click <br>
                Me!
              </p>
            </div>

            <div class="text_item">
              <div class="texts">
                <p>🥇1위<br><span>일타율</s2위. pan></p>
                <p>🥈2위<br><span>이타율</span></p>
                <p>🥉3위<br><span>삼타율</span></p>
                <p>4위<br>사타율</p>
                <p>5위<br>오타율</p>
              </div>
            </div>
          </div>
          
          <div class="item" style="--rotate: -20deg; --top: -1rem">
            <label for="open2" class="open"></label>
            <label for="close" class="close dn"></label>

            <img src="resourse/images/13.jpg" alt="a2" title="a2">

            <div class="name col-flex jcsb">
              <h4>홈런</h4>
              <p style="opacity: .5;">
                Click <br>
                Me!
              </p>
            </div>

            <div class="text_item">
              <div class="texts">
                <p>🥇1위<br><span>일홈런</span></p>
                <p>🥈2위<br><span>이홈런</span></p>
                <p>🥉3위<br><span>삼홈런</span></p>
                <p>4위<br>사홈런</p>
                <p>5위<br>오홈런</p>
              </div>
            </div>
          </div>

          <div class="item" style="--rotate: -10deg; --top: -3.75rem; margin: 0 1rem;">
            <label for="open3" class="open"></label>
            <label for="close" class="close dn"></label>

            <img src="resourse/images/33.jpg" alt="a3" title="a3">

            <div class="name col-flex jcsb">
              <h4>다승</h4>
              <p style="opacity: .5;">
                Click <br>
                Me!
              </p>
            </div>

            <div class="text_item">
              <div class="texts">
                <p>🥇1위<br><span>일다승</span></p>
                <p>🥈2위<br><span>이다승</span></p>
                <p>🥉3위<br><span>삼다승</span></p>
                <p>4위<br>사다승</p>
                <p>5위<br>오다승</p>
              </div>
            </div>
          </div>

          <div class="item" style="--rotate: 10deg; --top: -3.75rem; margin: 0 1rem;">
            <label for="open4" class="open"></label>
            <label for="close" class="close dn"></label>

            <img src="resourse/images/41.jpg" alt="a4" title="a4">

            <div class="name col-flex jcsb">
              <h4>평균<br>자책</h4>
              <p style="opacity: .5;">
                Click <br>
                Me!
              </p>
            </div>

            <div class="text_item">
              <div class="texts">
                <p>🥇1위<br><span>일평자</span></p>
                <p>🥈2위<br><span>이평자</span></p>
                <p>🥉3위<br><span>삼평자</span></p>
                <p>4위<br>사평자</p>
                <p>5위<br>오평자</p>
              </div>
            </div>
          </div>

          <div class="item" style="--rotate: 20deg; --top: -1rem">
            <label for="open5" class="open"></label>
            <label for="close" class="close dn"></label>

            <img src="resourse/images/29.jpg" alt="a5" title="a5">

            <div class="name col-flex jcsb">
              <h4>탈삼진</h4>
              <p style="opacity: .5;">
                Click <br>
                Me!
              </p>
            </div>

            <div class="text_item">
              <div class="texts">
                <p>🥇1위<br><span>일삼진</span></p>
                <p>🥈2위<br><span>이삼진</span></p>
                <p>🥉3위<br><span>삼삼진</span></p>
                <p>4위<br>사삼진</p>
                <p>5위<br>오삼진</p>
              </div>
            </div>
          </div>

          <div class="item" style="--rotate: 30deg; --top: 4rem">
            <label for="open6" class="open"></label>
            <label for="close" class="close dn"></label>

            <img src="resourse/images/30.jpg" alt="a6" title="a6">

            <div class="name col-flex jcsb">
              <h4>세이브</h4>
              <p style="opacity: .5;">
                Click <br>
                Me!
              </p>
            </div>

            <div class="text_item">
              <div class="texts">
                <p>🥇1위<br><span>일세이</span></p>
                <p>🥈2위<br><span>이세이</span></p>
                <p>🥉3위<br><span>삼세이</span></p>
                <p>4위<br>사세이</p>
                <p>5위<br>오세이</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 갤러리 -->
  <div class="gallery_section wrap">
    <div class="title">
      <div class="back">GALLERY</div>
      <p class="main">S. B. P. <span>GALLERY</span></p>
      <div class="line"></div>
      <div class="sub">
        <b>GALLERY 영역</b>
        <p>skills baseball park의 멋진 장면들을 사진으로 담았습니다.</p>
      </div>
    </div>

    <div class="gallery">
      <input type="radio" name="g" id="gs2" checked hidden>
      <input type="radio" name="g" id="gs1" hidden>
      <input type="radio" name="g" id="gs0" hidden>

      <input type="radio" name="g" id="g1" hidden>
      <input type="radio" name="g" id="g2" hidden>
      <input type="radio" name="g" id="g3" hidden>
      <input type="radio" name="g" id="g4" hidden>
      <input type="radio" name="g" id="g5" hidden>
      <input type="radio" name="g" id="g6" hidden>
      <input type="radio" name="g" id="g7" hidden>
      <input type="radio" name="g" id="g8" hidden>
      <input type="radio" name="g" id="g9" hidden>
      <input type="radio" name="g" id="g10" hidden>
      <input type="radio" name="g" id="g11" hidden>

      <input type="radio" name="g" id="g-1" hidden>
      <input type="radio" name="g" id="g-2" hidden>
      <input type="radio" name="g" id="g-3" hidden>
      <input type="radio" name="g" id="g-4" hidden>
      <input type="radio" name="g" id="g-5" hidden>
      <input type="radio" name="g" id="g-6" hidden>
      <input type="radio" name="g" id="g-7" hidden>
      <input type="radio" name="g" id="g-8" hidden>
      <input type="radio" name="g" id="g-9" hidden>
      <input type="radio" name="g" id="g-10" hidden>
      <input type="radio" name="g" id="g-11" hidden>

      <input type="radio" name="g" id="reset" hidden>

      <div class="label_box">
        <div class="item">
          <label for="" class="dn"></label>
          <label for="gs1" class="btn">다음</label>
        </div>
        <div class="item">
          <label for="" class="dn"></label>
          <label for="gs0" class="btn">다음</label>
        </div>
        <div class="item">
          <label for="reset" class="btn">초기화</label>
          <div class="flex">
            <label for="g-2" class="btn">이전</label>
            <label for="g2" class="btn">다음</label>
          </div>
        </div>
        <div class="item">
          <label for="reset" class="btn">초기화</label>
          <div class="flex">
            <label for="g-3" class="btn">이전</label>
            <label for="g3" class="btn">다음</label>
          </div>
        </div>
        <div class="item">
          <label for="reset" class="btn">초기화</label>
          <div class="flex">
            <label for="g-4" class="btn">이전</label>
            <label for="g4" class="btn">다음</label>
          </div>
        </div>
        <div class="item">
          <label for="reset" class="btn">초기화</label>
          <div class="flex">
            <label for="g-1" class="btn">이전</label>
            <label for="g1" class="btn">다음</label>
          </div>
        </div>
        <div class="item">
          <label for="reset" class="btn">초기화</label>
          <div class="flex">
            <label for="g-5" class="btn">이전</label>
            <label for="g5" class="btn">다음</label>
          </div>
        </div>
        <div class="item">
          <label for="reset" class="btn">초기화</label>
          <div class="flex">
            <label for="g-6" class="btn">이전</label>
            <label for="g6" class="btn">다음</label>
          </div>
        </div>
        <div class="item">
          <label for="reset" class="btn">초기화</label>
          <div class="flex">
            <label for="g-7" class="btn">이전</label>
            <label for="g7" class="btn">다음</label>
          </div>
        </div>
        <div class="item">
          <label for="reset" class="btn">초기화</label>
          <div class="flex">
            <label for="g-8" class="btn">이전</label>
            <label for="g8" class="btn">다음</label>
          </div>
        </div>
        <div class="item">
          <label for="reset" class="btn">초기화</label>
          <div class="flex">
            <label for="g-9" class="btn">이전</label>
            <label for="g9" class="btn">다음</label>
          </div>
        </div>
        <div class="item">
          <label for="reset" class="btn">초기화</label>
          <div class="flex">
            <label for="g-10" class="btn">이전</label>
            <label for="g10" class="btn">다음</label>
          </div>
        </div>
        <div class="item">
          <label for="reset" class="btn">초기화</label>
          <div class="flex">
            <label for="g-11" class="btn">이전</label>
            <label for="g11" class="btn">다음</label>
          </div>
        </div>
      </div>

      <div class="slide">
        <div class="item" style="width: 264px;">
          <img src="resourse/images/13.jpg" alt="#" title="#">

          <div class="text_item">
            <h2>1</h2>
            <div class="btn">more</div>
          </div>
        </div>
        <div class="item" style="width: 264px;">
          <img src="resourse/images/14.jpg" alt="#" title="#">

          <div class="text_item">
            <h2>2</h2>
            <div class="btn">more</div>
          </div>
        </div>
        <div class="item" style="width: 264px;">
          <img src="resourse/images/15.jpg" alt="#" title="#">

          <div class="text_item">
            <h2>3</h2>
            <div class="btn">more</div>
          </div>
        </div>
        <div class="item" style="width: 264px;">
          <img src="resourse/images/16.jpg" alt="#" title="#">

          <div class="text_item">
            <h2>4</h2>
            <div class="btn">more</div>
          </div>
        </div>
        <div class="item" style="width: 264px;">
          <img src="resourse/images/17.jpg" alt="#" title="#">

          <div class="text_item">
            <h2>5</h2>
            <div class="btn">more</div>
          </div>
        </div>
        <div class="item" style="width: 264px;">
          <img src="resourse/images/18.jpg" alt="#" title="#">

          <div class="text_item">
            <h2>6</h2>
            <div class="btn">more</div>
          </div>
        </div>
        <div class="item" style="width: 264px;">
          <img src="resourse/images/13.jpg" alt="#" title="#">

          <div class="text_item">
            <h2>1</h2>
            <div class="btn">more</div>
          </div>
        </div>
        <div class="item" style="width: 264px;">
          <img src="resourse/images/14.jpg" alt="#" title="#">

          <div class="text_item">
            <h2>2</h2>
            <div class="btn">more</div>
          </div>
        </div>
        <div class="item" style="width: 264px;">
          <img src="resourse/images/15.jpg" alt="#" title="#">

          <div class="text_item">
            <h2>3</h2>
            <div class="btn">more</div>
          </div>
        </div>
        <div class="item" style="width: 264px;">
          <img src="resourse/images/16.jpg" alt="#" title="#">

          <div class="text_item">
            <h2>4</h2>
            <div class="btn">more</div>
          </div>
        </div>
        <div class="item" style="width: 264px;">
          <img src="resourse/images/17.jpg" alt="#" title="#">

          <div class="text_item">
            <h2>5</h2>
            <div class="btn">more</div>
          </div>
        </div>
        <div class="item" style="width: 264px;">
          <img src="resourse/images/18.jpg" alt="#" title="#">

          <div class="text_item">
            <h2>6</h2>
            <div class="btn">more</div>
          </div>
        </div>
        <div class="item" style="width: 264px;">
          <img src="resourse/images/13.jpg" alt="#" title="#">

          <div class="text_item">
            <h2>1</h2>
            <div class="btn">more</div>
          </div>
        </div>
        <div class="item" style="width: 264px;">
          <img src="resourse/images/14.jpg" alt="#" title="#">

          <div class="text_item">
            <h2>2</h2>
            <div class="btn">more</div>
          </div>
        </div>
        <div class="item" style="width: 264px;">
          <img src="resourse/images/15.jpg" alt="#" title="#">

          <div class="text_item">
            <h2>3</h2>
            <div class="btn">more</div>
          </div>
        </div>
        <div class="item" style="width: 264px;">
          <img src="resourse/images/16.jpg" alt="#" title="#">

          <div class="text_item">
            <h2>4</h2>
            <div class="btn">more</div>
          </div>
        </div>
        <div class="item" style="width: 264px;">
          <img src="resourse/images/17.jpg" alt="#" title="#">

          <div class="text_item">
            <h2>5</h2>
            <div class="btn">more</div>
          </div>
        </div>
        <div class="item" style="width: 264px;">
          <img src="resourse/images/18.jpg" alt="#" title="#">

          <div class="text_item">
            <h2>6</h2>
            <div class="btn">more</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- 굿즈 -->
  <div class="goods wrap">
    <div class="title">
      <div class="back">GOODS</div>
      <p class="main">S. B. P. <span>GOODS</span></p>
      <div class="line"></div>
      <div class="sub">
        <b>GOODS 영역</b>
        <p>skills baseball park의 특별한 goods들을 만나볼 수 있습니다.</p>
      </div>
    </div>

    <div class="container">
      <div class="img_box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <img src="resourse/images/49.jpg" alt="#" title="#">
      </div>
      <div class="img_box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <img src="resourse/images/40.jpg" alt="#" title="#">
      </div>
      <div class="img_box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <img src="resourse/images/46.jpg" alt="#" title="#">
      </div>
      <div class="img_box">
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <div></div>
        <img src="resourse/images/45.jpg" alt="#" title="#">
      </div>
    </div>

    <div class="goods_grid">
      <div class="flex aife jcsb goods-txt">
        <div class="col-flex aifs" style="gap: 40px;">
          <h1>S.B.P. GOODS를<br>할인된 가격으로💰!</h1>
          <p>S.B.P.는 여러 구단들과 정식 계약을 체력하여  <br>  시설 이용자 여러분의 굿즈 세트를 <br><b>40% 할인 특가</b>에 판매합니다!</p>
        </div>
        <div class="col-flex aife">
          <p style="opacity: 0.4; text-decoration: line-through;">200,000원</p>
          <h2 style="color: #1a1455;">160,000원</h2>
          <a href="#" class="btn" style="margin-top: 1rem;">더 알아보기 <i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      <div class="right">
        <img src="resourse/images/26.jpg" alt="#" title="#">
        <img src="resourse/images/32.jpg" alt="#" title="#">
      </div>
    </div>
  </div>


<script>
  <?php if (@$_SESSION["user"] != "" && @$_SESSION["login"] != "") : ?>
    window.open("/popup", 250, 250);
  <?php endif ?>

  let month = new Date().getMonth() + 1;
  let date = new Date().getDate();
  let year = new Date().getFullYear();
  let res = <?= json_encode(reser::findAll("status = ?", "end")) ?>;
  let hasGame = [];

  setGame();
  function setGame() {
    hasGame = [];

    res.forEach(v => {
      let date2 = v.date.split("-");

      if (date2[1] != month) return;
      if (hasGame.includes(date2[2])) return;

      hasGame.push(date2[2]);
    });
  }

  setCalnder();
  function setCalnder() {
    $(".dates").html(`${year}. <span style="color: #1a1455">${month < 10 ? `0${month}` : month}</span>`);

    let preEnd = new Date(year, month - 1, 0).getDay();
    let startD = new Date(year, month - 1, 1).getDay();
    let endD = new Date(year, month, 0).getDay();
    let endDate = new Date(year, month, 0).getDate();
    let game = "";
    let noGame = "";
    let startG = "";
    let endG = "";
    let startN = "";
    let endN = "";
    let year2 = new Date().getFullYear();
    let month2 = new Date().getMonth() + 1;
    let date2 = new Date().getDate();

    $(".schedule .bottom").html("");
    for (let i = 0; i < startD; i++) {
      $(".schedule .bottom").append(`<div><p>${preEnd - (startD - i - 1) == 0 ? "" : preEnd - (startD - i - 1)}</p></div>`);
    }

    for (let i = 1; i <= endDate; i++) {
      $(".schedule .bottom").append(`<div><p class="${`${year2}-${month2}-${date2}` == `${year}-${month}-${i}` ? "now" : ""}" onclick="modalToggle(${i})">${i}</p></div>`); 
    }
  }

  function changeMonth(dir) {
    month += dir;

    if (month > 12) {
      year += 1;
      month = 1;
    } else if (month < 1) {
      year -= 1;
      month = 12;
    }

    setGame();
    setCalnder();
  }

    function modalToggle(dates) {
      let reser = res.filter(v => v.date == `${year}-${month < 10 ? `0${month}` : month}-${dates < 10 ? `0${dates}` : dates}`)

      if (!reser.length) {
        $(".sc_mod").html(`
        <img src="resourse/images/modal.png" alt="#" title="#" class="img">
          <div class="container2">
            <div class="box col-flex tac" style="gap: 20px;">
              <img src="resourse/images/baseball.png" alt="#" title="#" class="base" style="height: 200px;">

              <h3>아직 게임이 없습니다.</h3>

            </div>
            <label for="modal" class="btn">닫기 <i class="fa fa-xmark" style="margin-left: 10px;"></i></label>
          </div>
        `)
      } else {
          $(".sc_mod").html(`
            <img src="resourse/images/modal.png" alt="#" title="#" class="img">
            <div class="container2">
              <div class="box col-flex tac">
                <div class"top_box3" style="width: 650px;border-radius: 10px 10px 0px 0px; display: grid; grid-template-columns: repeat(5, 1fr); padding: 20px; margin-top: 1.5rem; background: #1a1455; color: white;">
                  <p class="center">날짜</p>
                  <p class="center">리그</p>
                  <p class="center">경기시간</p>
                  <p class="center">최소인원(명)</p>
                  <p class="center">사용료(원)</p>
                </div>

                <div class="table_box" style="height: 500px: overflow-y: scroll;">
                </div>
              </div>
              <label for="modal" class="btn">닫기 <i class="fa fa-xmark" style="margin-left: 10px;"></i> </label>
            </div>  
            `
          )

          $(".sc_mod .table_box").html(reser.map(v => {
            return `
              <div class="item" style="width: 650px; display: grid; grid-template-columns: repeat(5, 1fr); padding: 20px; background: white; border: 1px solid #d1d1d1;">
                <p>${v.date}</p>
                <p>${v.league}</p>
                <p>${v.time}</p>
                <p>${Number(v.people).toLocaleString()}</p>
                <p>${Number(v.price).toLocaleString()}</p>
              </div>
            `
          }));
      }

      $(".label_modalbt").click();    
    }
</script>