<?php 
  $goods = goods::all();
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

  <div class="sale wrap">
    <div class="title">
      <div class="back">GOODS SALE</div>
      <p class="main">S. B. P. <span>GOODSSALE</span></p>
      <div class="line"></div>
      <div class="sub">
        <span>skills baseball park의</span>
        <b>GOODS판매량 영역입니다.</b>
      </div>
    </div>

    <div class="container" style="margin-top: 5rem;">
      <?php foreach($goods as $v) : ?>
        <?php if (!@$_SESSION["user"] || @$_SESSION["user"] == "admin") : ?>
          <div class="item">
        <?php else : ?>
          <div class="item" onclick="movePage(<?=$v['idx']?>)">
        <?php endif?>
          <div class="img_box">
            <img src="resourse/goods/<?= $v["img"]?>" alt="#" title="#">
            <div class="poa idx"><?= $v["idx"]?></div>
          </div>

          <div class="text_box">
            <div class="flex jcsb aic">
              <div class="col-flex" style="gap: 5px;">
                <p style="color: gray; opacity: .5">goods명</p>
                <h3><?= $v["name"] ?></h3>
              </div>

              <div class="flex" style="gap: 10px">
                <?php if (@$_SESSION["user"] == "admin" || !@$_SESSION["user"]) : ?>
                  <a href="/heart/<?= $v["idx"]?>" class="btn off">관심goods</a>
                <a href="/basekit/<?= $v["idx"]?>/null" class="btn off">장바구니</a>
                <?php else : ?>
                  <a href="/heart/<?= $v["idx"]?>" class="btn <?= @$_SESSION["user"] == "manager" ? "off" : ""?>">관심goods</a>
                <a href="/basekit/<?= $v["idx"]?>/null" class="btn <?=@$_SESSION["user"] == "manager" ? "off" : ""?>">장바구니</a>
                <?php endif ?>
              </div>
            </div>

            <div class="flex jcsb money_bt aic">
              <p>가격 : </p>
              <h2><?= number_format($v["money"])?>원</h2>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>

  <input type="file"  name="file" id="file" accept="image/*" hidden>
  <div class="modify wrap">
    <div class="title">
      <div class="back">GOODS MODIFY</div>
      <p class="main">S. B. P. <span>GOODSMODIFY</span></p>
      <div class="line"></div>
      <div class="sub">
        <span>skills baseball park의</span>
        <b>GOODS수정제안 영역입니다.</b>
      </div>
    </div> 

    <div class="container">
      <div class="img_box por">
        <canvas id="canvas" width="1320" height="600"></canvas>
        <div class="poa text">사진을 추가하시면 여기에 표시됩니다.</div>
      </div>

      <div class="btns flex aic" style="gap: 10px; margin-top: 3rem;">
        <div class="btn plus"><i class="fa fa-plus"></i> 추가</div>
        <div class="btn off reset"><i class="fa fa-minus"></i> 원래대로</div>
        <div class="btn off del"><i class="fa fa-xmark"></i> 삭제</div>
        <div class="btn off text"><i class="fa fa-box"></i> 글상자</div>
        <div class="btn off move_text"><i class="fa fa-rotate"></i> 글상자 이동 및 회전</div>
        <div class="btn off mod"><i class="fa fa-pen"></i> 글상자편집</div>
        <div class="btn off down"><i class="fa fa-download"></i> 다운로드</div>
      </div>
    </div>
  </div>

  <div class="text_modal modal inv">
    <div class="container">
      <div class="box">
        <h2 class="center">글상자 입력 인터페이스</h2>
        <div class="poa"><i onclick="Modify.modalToggle()" class="fa fa-xmark"></i></div>

        <textarea name="text" id="text" placeholder="내용을 입력해주세요." cols="30" rows="10"></textarea>
      </div>
      <button class="btn">저장</button>
    </div>
  </div>

  <div class="temp_wrap"></div>

  <script>
    function movePage(idx) {
      location.href = `/detail/${idx}`;
    }
  </script>

  <?php if (@$_SESSION["user"] == "manager") : ?>
    <div class="join wrap lo" style="width: 500px">
      <h1 class="st center" style="margin-top: 15rem;">등록</h1>
      <form action="/inserDB" enctype="multipart/form-data" method="POST" class="contianer">
        <div class="inp">
          <p>사진</p>
          <input type="file" name="img2" id="img2" accept="image/*" style="margin-top: 32px">
        </div>

        <div class="inp">
          <p>상품명</p>
          <input type="text" name="name" id="name" placeholder="상품명을 입력해주세요.">
        </div>

        <div class="inp">
          <p>가격</p>
          <input type="number" name="money" id="money" min="1" oninput="chkNum(event)">
        </div>

        <div class="col-flex">
          <p>goods상세설명</p>
          <textarea name="text" id="text" placeholder="goods상세설명을 입력해주세요." cols="30" rows="10"></textarea>
        </div>

        <button>goods등록</button>
      </form>
    </div>

    <script>
      function chkNum(e) {
        const text = $("#money").val().replaceAll(/[^0-9]/g, "");

        $("#money").val(text);
      }
    </script>

    <div class="sale wrap">
    <div class="title">
      <div class="back">ITEM LIST</div>
      <p class="main">S. B. P. <span>ITEM LIST</span><p>
      <div class="line"></div>
      <div class="sub">
        <span>SKILLS BASEBALL PARK의</span>
        <b>담당자가 등록한 상품들을 보실 수 있습니다.</b>
      </div>
    </div>


    <div class="container" style="margin-top: 7.5rem">
        <?php foreach($goods as $v) : ?>
          <div class="item">
        <div class="img_box">
          <img src="resourse/goods/<?= $v["img"]?>" alt="#" title="#">
          <div class="poa idx"><?= $v["idx"]?></div>

          <div class="hide flex" style="gap: 15px;">
            <i class="fa fa-heart"></i>
            <i class="fa fa-search"></i>
            <i class="fa fa-basket-shopping"></i>
          </div>
        </div>

          <div class="text_box">
            <div class="col-flex" style="gap: 5px;">
              <h4 style="opacity: .5;">goods</h4>
              <h3><?= $v["name"]?></h3>
            </div>

            <div class="flex jcsb money_bt aic">
              <p>가격 : </p>
              <h2><?= number_format($v["money"])?>원</h2>
            </div>
          </div>
        </div>
        <?php endforeach ?>
    </div>
  </div>
  <?php endif?>