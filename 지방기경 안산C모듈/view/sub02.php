

  <div class="subpage">
    <img src="resourse/images/14.jpg" alt="#" title="#">

    <div class="text_box">
      <div class="text_box">
        <p class="top"><i class="fa fa-home"></i> HOME <i class="fa fa-angle-right"></i> STATISTICS</p>

        <h1 class="bottom">SKILLS BASEBALL PARK에 대해 <br> 알려드릴게요</h1>
      </div>
    </div>  
  </div>

  <div class="chart wrap">
    <div class="title">
      <div class="back">VISITORS CHART</div>
      <p class="main">S. B. P. <span>VISITORS CHART</span></p>
      <div class="line"></div>
      <div class="sub">
        <b>방문자 차트 영역</b>
        <p>skills baseball park의 방문자를 표/차트로 확인할 수 있습니다.</p>
      </div>
    </div>

    <input type="radio" name="view" id="view1" data-idx="y" checked hidden>
    <input type="radio" name="view" id="view2" data-idx="x" hidden>
    
    <input type="radio" name="league" id="league1" data-idx="나이트리그" checked hidden>
    <input type="radio" name="league" id="league2" data-idx="주말리그" hidden>
    <input type="radio" name="league" id="league3" data-idx="새벽리그" hidden>

    <div class="top_box flex aic jcsb">
      <div class="view_box">
        <label for="view1">세로로 보기</label>
        <label for="view2">가로로 보기</label>
      </div>

      <div class="chart_league">
        <label for="league1">나이트리그</label>
        <label for="league2">주말리그</label>
        <label for="league3">새벽리그</label>
      </div>

      <div class="inp">
        <p>요일</p>
        <select name="day" id="day">
          <option value="월">월요일</option>
          <option value="화">화요일</option>
          <option value="수">수요일</option>
          <option value="목">목요일</option>
          <option value="금">금요일</option>
          <option value="토">토요일</option>
          <option value="일">일요일</option>
        </select>
      </div>

      <div class="btn pass">통계</div>
    </div>

    <div class="container por">
      <canvas id="canvas" width="1320" height="600"></canvas>

      <div class="flex jcsb aic poa">
        <h3>표의 열은 방문자 수 입니다.</h3>
        <h3>표의 행은 시간대 입니다.</h3>
      </div>
      <div class="graph">
      </div>
    </div>
  </div>
