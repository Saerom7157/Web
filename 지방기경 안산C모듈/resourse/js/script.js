const dd = console.log;
const ls = localStorage;

const script = {
  init() {
    if (location.pathname.includes("/sub02")) Chart.init();
    if (location.pathname.includes("/sub04")) Modify.init();

    if (location.pathname.includes("/mypage/list")) {
      const tp = $("#list")[0].offsetTop;

      window.scrollTo({left: 0, top: tp});
    }
    if (location.pathname.includes("/mypage/basekit")) {
      const tp = $("#basekit")[0].offsetTop;

      window.scrollTo({left: 0, top: tp});
    }
    if (location.pathname.includes("/mypage/heart")) {
      const tp = $("#heart")[0].offsetTop;

      window.scrollTo({left: 0, top: tp});
    }

    script.hook();
  },

  hook() {
    $(document) 
      .on("input", "input[type='number']", (e) => {
        const text = $(e.target).val().replaceAll(/[^0-9]/g, "");

        $(e.target).val(text);
      })
      .on("keydown", (e) => {
        if (e.key == "Enter") {
          e.preventDefault();
        }
      })
  }
}

const Reser = {
  idxs: [],

  addIdx(e, idx, status) {
    if ($(e.target)[0].checked) {
      Reser.idxs.push({
        idx: idx,
        status: status
      });
    } else {
      Reser.idxs.splice(Reser.idxs.findIndex(v => v.idx == idx), 1);
    }
  },

  deAll() {
    dd(Reser.idxs);
    if (Reser.idxs.find(v => v.status == "con")) return alert("예약 가능 항목이 체크되었습니다.");

    location.href = `/delResDB/${Reser.idxs.map(v => v.idx)}`;
  }
}

const Chart = {
  data: [],
  day: "월",
  league: "나이트리그",
  view: "y",
  ms: 0,
  ctx: null,
  pass: "hide",

  async init() {
    Chart.ctx = $("#canvas")[0].getContext('2d');

    await $.getJSON("/resourse/json/visitors.json").done(res => {
      Chart.data = [...res.data];
    });
    
    Chart.hook();
    Chart.drawChart();
  },

  hook() {
    $(document) 
      .on("change", "#day", (e) => {
        Chart.day = $(e.target).val();

        Chart.drawChart();
      })
      .on("click", "input[name='league']", (e) => {
        Chart.league = $(e.target).data("idx");

        Chart.drawChart();
      })
      .on("click", "input[name='view']", (e) => {
        Chart.view = $(e.target).data("idx");

        Chart.drawChart();
      })
      .on("click", ".pass", (e) => {
        $(e.target).toggleClass("show");
        Chart.pass = Chart.pass == "show" ? "hide" : "show";

        Chart.drawChart();
      })
  },

  drawBackground() {
    const ctx = Chart.ctx;

    ctx.clearRect(0, 0, 1320, 600);

    ctx.strokeStyle = "black";
    ctx.font = "16px sans";
    ctx.textAlign = "end";
    ctx.textBaseline = "middle";
    ctx.fillStyle = "black";

    for (let i = 0; i < 11; i++) {
      if (Chart.view == "y") {
        ctx.beginPath();
          ctx.moveTo(50, 550 - (i * 50));
          ctx.lineTo(650, 550 - (i * 50));
          ctx.stroke();
        ctx.closePath();

        ctx.fillText(50 * i, 40, 550 - (i * 50));

        if (i == 10) {
          ctx.textAlign = "start";
          ctx.fillText("(단위 : 명)", 10, 20);
        }
      } else {
        ctx.textAlign = "center";
        ctx.beginPath();
          ctx.moveTo(100 + (i * 50), 0);
          ctx.lineTo(100 + (i * 50), 550);
          ctx.stroke();
        ctx.closePath();

        ctx.fillText(50 * i, 100 + (i * 50), 570);

        if (i == 10) {
          ctx.textAlign = "start";
          ctx.fillText("(단위 : 명)", 550, 590);
        }
      }
    }
  },

  drawChart() {
    clearInterval(Chart.interval);
    Chart.ms = 0;
    const ctx = Chart.ctx;
    const data = Chart.data.find(v => v.name == Chart.league).visitors;
    const data2 = Chart.data.find(v => v.name == Chart.league).visitors
                            .find(v => v.day == Chart.day).visitor;
    const keys = Object.keys(data2);
    const pos = {
      y2: [225, 475],
      y3: [150, 350, 550],
      x2: [175, 425],
      x3: [100, 275, 450]
    }[Chart.view + keys.length];
    const count = [];
    const color = {
      0: "#1a1455",
      1: "#b6aeff",
      2: "orange"
    };

    data.forEach(v => {
      keys.forEach(va => {
        if (!count[va]) count[va] = [];

        count[va][v.day] = data.find(val => val.day == v.day).visitor[va];
      });
    });

    $(".graph").html(`
      <div class="box top_bx" style="padding: 20px 0">
        <p>방문자 표</p>
        <p>월</p>
        <p>화</p>
        <p>수</p>
        <p>목</p>
        <p>금</p>
        <p>토</p>
        <p>일</p>
      </div>
    `);

    $(".graph").append(Object.keys(count).map((v, i) => {
      return `
        <div class="box bb">
          <p>${v}</p>
          <p>${count[v]["월"]}</p>
          <p>${count[v]["화"]}</p>
          <p>${count[v]["수"]}</p>
          <p>${count[v]["목"]}</p>
          <p>${count[v]["금"]}</p>
          <p>${count[v]["토"]}</p>
          <p>${count[v]["일"]}</p>
        </div>
      `;
    }));

    Chart.interval = setInterval(() => {
      $(".graph").css({"width": `${(Chart.ms / 100) * 660}px`});
      Chart.drawBackground();
  
      keys.forEach((v, i) => {
        ctx.fillStyle = color[i];
        if (Chart.view == "y") ctx.fillRect(pos[i] - 40, 549 - (data2[v] * (Chart.ms / 100)), 80, data2[v] * (Chart.ms / 100));
        else ctx.fillRect(101, pos[i] - 40, data2[v] * (Chart.ms / 100), 80);

        ctx.fillRect(700 + (100 * i), 510, 40, 40);

        ctx.fillStyle = "#000";
        ctx.textAlign = "center";
        if (Chart.view == "y") ctx.fillText(v, pos[i], 570);
        else ctx.fillText(v, 60, pos[i]);

        ctx.fillText(data2[v] + "명", 720 + (100 * i), 570);
      });
      
      Chart.ms++;
      if (Chart.ms == 100) {
        clearInterval(Chart.interval)
      }

      let gr = 0;
      let gr2 = 0;
      let gr3 = 0;
  
      if (Chart.league == "나이트리그") {
        gr = Math.floor((50 + 20 + 60 + 90 + 100 + 150 + 30) / 7);
        gr2 = Math.floor((70 + 100 + 80 + 120 + 200 + 170 + 20) / 7);
      } else if (Chart.league == "주말리그") {
        gr = Math.floor((200 + 230 + 270 + 290 + 320 + 230 + 220) / 7);
        gr2 = Math.floor((170 + 200 + 270 + 170 + 370 + 670 + 270) / 7);
        gr3 = Math.floor((180 + 280 + 320 + 380 + 380 + 280 + 280) / 7);
      } else {
        gr = Math.floor((20 + 21 + 30 + 32 + 25 + 30 + 29) / 7);
        gr2 = Math.floor((40 + 41 + 33 + 38 + 29 + 37 + 39) / 7);
      }
  
      keys.forEach((v, i) => {
        if (Chart.view == "y" && Chart.pass == "show") {
          ctx.strokeStyle = "tomato";
          ctx.beginPath();
          ctx.moveTo(pos[0], 555 - gr);
          ctx.lineTo(pos[1], 555 - gr2);
          ctx.stroke();
          ctx.closePath();
  
          if (Chart.league == "주말리그") {
            ctx.beginPath();
            ctx.moveTo(pos[0], 555 - gr);
            ctx.lineTo(pos[1], 555 - gr2);
            ctx.stroke();
            ctx.closePath();

            ctx.beginPath();
            ctx.moveTo(pos[1], 555 - gr3);
            ctx.lineTo(pos[2], 555 - gr2);
            ctx.stroke();
            ctx.closePath();
          }
        } else if (Chart.view == "x" && Chart.pass == "show") {
          ctx.strokeStyle = "tomato";
          ctx.beginPath();
          ctx.moveTo(105 + gr, pos[0]);
          ctx.lineTo(105 + gr2, pos[1]);
          ctx.stroke();
          ctx.closePath();
  
          if (Chart.league == "주말리그") {
            ctx.beginPath();
            ctx.moveTo(105 + gr, pos[0]);
            ctx.lineTo(105 + gr2, pos[1]);
            ctx.stroke();
            ctx.closePath();

            ctx.beginPath();
            ctx.moveTo(105 + gr2, pos[1]);
            ctx.lineTo(105 + gr3, pos[2]);
            ctx.stroke();
            ctx.closePath();
          }
        }
      })
      
      keys.forEach((v, i) => {
        if (Chart.view == "y" && Chart.pass == "show") {
          ctx.fillStyle = "tomato";
          ctx.fillRect((pos[i] - 40) + 35, 549 - (i == 0 ? gr : i == 1 ? gr2 : gr3), 10, 10);
        } else if (Chart.view == "x" && Chart.pass == "show") {
          ctx.fillStyle = "tomato";
          ctx.fillRect(101 + (i == 0 ? gr : i == 1 ? gr2 : gr3), pos[i], 10, 10);
        }
      })
    }, 10);
  },
}

const Goods = {
  // 객체 전역변수
  data: [],
  group: "",
  sort: 1,
  pass: "hide",

  // 기본실행
  init() {
    $.getJSON("/resourse/json/goods.json").done(res => {
      Goods.data = [...res.data].sort((a, b) => b.sale - a.sale);
      Goods.setItem();
    });

    Goods.hook();
  },

  // 이벤트
  hook() {
    $(document) 
      .on("change", "#list", (e) => {
        Goods.group = $(e.target).val();
        Goods.setItem();
      })
      .on("click", ".sort_btn", (e) => {
        Goods.sort = $(e.target).attr("data-sort");
        $(".sort_btn").removeClass("chk");
        $(e.target).addClass("chk");

        if (Goods.sort == 1) Goods.data.sort((a, b) => b.sale - a.sale);
        if (Goods.sort == 2) Goods.data.sort((a, b) => a.sale - b.sale);
        if (Goods.sort == 3) Goods.data.sort((a, b) => (b.price.replaceAll(",", "") * 1) - (a.price.replaceAll(",", "") * 1));
        if (Goods.sort == 4) Goods.data.sort((a, b) => (a.price.replaceAll(",", "") * 1) - (b.price.replaceAll(",", "") * 1));

        Goods.setItem();
      })
      .on("click", ".pass", (e) => {
        $(e.target).toggleClass("chk");

        Chart.pass = Chart.pass == "show" ? "hide" : "show";
      })
  },  

  // json으로 반복문 돌리기
  setItem() {
    let idx = [];
    let i = 0;

    [...Goods.data].sort((a, b) => b.sale - a.sale).forEach(v => {
      if (Goods.group != "" && Goods.group != v.group) return;
      if (i > 2) return;
      i++;
      idx.push(v.idx);
    });

    $(".sale .container").html(Goods.data.map(v => {
      if (Goods.group != "" && Goods.group != v.group) return;

      return `
        <div class="item">
          <div class="img_box">
            <img src="resourse/${v.img}" alt="#" title="#">
            <div class="poa idx">${v.idx}</div>
            ${idx.includes(v.idx) ? `<div class="poa best">BEST</div>` : ""}
            <div class="poa name">판매량 : ${v.sale.toLocaleString()}개</div>

            <div class="hide flex" style="gap: 15px;">
              <i class="fa fa-heart"></i>
              <i class="fa fa-search"></i>
              <i class="fa fa-basket-shopping"></i>
            </div>
          </div>

          <div class="text_box">
            <div class="col-flex" style="gap: 5px;">
              <h4 style="opacity: .5;">#${v.group}</h4>
              <h3>${v.title}</h3>
            </div>

            <div class="flex jcsb money_bt aic">
              <p>가격 : </p>
              <h2>${v.price}원</h2>
            </div>
          </div>
        </div>
      `
    }))
  }
}

const Modify = {
  img: "",
  textBox: [],
  move: false,
  ctx: null,
  targetText: null,
  startPos: null,
  name: "",
  control: false,
  back: false,
  color: false,

  init() {
    Modify.hook();

    Modify.canvas = $("#canvas")[0];
    Modify.ctx = Modify.canvas.getContext("2d");
  },

  hook() {
    $(document)
      .on("click", ".modify .btn", (e) => {
        Modify.move = false;
        Modify.targetText = null;
        $(".temp_wrap").html("");
        $(".move_text").removeClass("chk");

        if($(e.target).hasClass("move_text")) {
          $(e.target).addClass("chk");
        } else {
          $(".modify .btn").removeClass("off");
        }

        if ($(e.target).hasClass("plus")) return;
        Modify.updateFrame();
      })
      .on("click", ".plus", () => {$("#file").click()})
      .on("input", "#file", Modify.addImg)
      .on("click", ".reset", () => {
        Modify.textBox = [];
        Modify.targetText = null;
        Modify.updateFrame();
      })
      .on("click", ".del", () => {
        $(".img p").removeClass("inv");
        $(".modify .btn").addClass("off");
        $(".modify .plus").removeClass("off");
        Modify.textBox = [];
        Modify.targetText = null;
        Modify.img = "";
        Modify.updateFrame();
      })
      .on("click", ".down", Modify.down)
      .on("click", ".text, .text_modal .close", Modify.modalToggle)
      .on("click", ".text_modal button", Modify.addText)
      .on("mousedown mousemove mouseup mouseleave", "#canvas", Modify.handleMouse)
      .on("click", ".move_text", (e) => {
        $(e.target).addClass("checked");
        Modify.move = true;
      })
      .on("keydown", Modify.arrow)
      .on("keyup", (e) => {
        if (Modify.targetText == null) return;
        if (e.key == "Control") Modify.control = false;
      })
      .on("click", ".modify .mod", () => {
        if (Modify.textBox.length == 0) {
          alert("글상자 입력후 다시 실행해주세요.");
          $(".color_modal").addClass("inv");
          return;
        }

        $(".color_modal").removeClass("inv");
      })
      .on("input", "#color", (e) => {
        Modify.color = $(e.target).val();

        Modify.drawText();
      })
      .on("click", ".close_bt", () => {
        Modify.modalToggle();
      })
      .on("click", ".color_modal .btn", () => {
      })
      .on("click", ".color_modal .close", () => {
        $(".color_modal").addClass("inv");
        $("#color").val("");
        Modify.color = false;
        Modify.drawText();
      })
      .on("click", ".color_modal .btn", () => {
        $(".color_modal").addClass("inv");
      })
  },

  handleMouse(e) {
    if (Modify.img == "") return;
    if (!Modify.move) return;

    let [x, y] = [
      e.pageX - $("#canvas").offset().left,
      e.pageY - $("#canvas").offset().top,
    ];

    if (e.type == "mousedown") {
      Modify.clickMouse(x, y);
      Modify.startPos = [x, y];
    } else if (e.type == "mousemove") {
      if (Modify.targetText == null) return;
      let s = Modify.startPos;
      
      const dx = x - s[0];
      const dy = y - s[1];

      s[0] += dx;
      s[1] += dy;

      Modify.targetText.x += dx;
      Modify.targetText.y += dy;
    } else {
      if (Modify.startPos == null) return;
      Modify.startPos = null;
    }

    Modify.updateFrame();
  },

  clickMouse(x, y) {
    for (const textItem of Modify.textBox) {
      if (textItem.x - 16 <= x && x <= textItem.x + textItem.size[0] + 16 && textItem.y - 8 <= y && y <= textItem.y + textItem.size[1]) {
        Modify.targetText = textItem;
        Modify.startPos = [x, y];
        return;
      }
    }

    Modify.targetText = null;
    return;
  },

  arrow(e) {
    if (Modify.targetText == null) return;
    
    if (e.key == "ArrowUp") {
      e.preventDefault();
      Modify.targetText.y  = Modify.targetText.y == 0 ? 0 : Modify.targetText.y -= 5;
    } else if (e.key == "ArrowDown") {
      e.preventDefault();
      Modify.targetText.y += 5;
    } else if (e.key == "ArrowLeft") {
      e.preventDefault();
      Modify.targetText.x -= 5;
    } else if (e.key == "ArrowRight") {
      if (Modify.control) {
        Modify.targetText.rotate += 90;
      } else {
        e.preventDefault();
        Modify.targetText.x += 5;
      }
    } else if (e.key == "Control") {
      Modify.control = true;
    }

    Modify.updateFrame();
  },

  modalToggle() {
    $(".text_modal textarea").val("");
    $(".text_modal").toggleClass("inv");
  },

  addImg(e) {
    const file = [...e.target.files][0];

    if (!file.type.includes("image")) return alert("이미지만 입력 가능합니다.");

    const reader = new FileReader();
    reader.readAsDataURL(file);

    reader.onload = () => {
      const img = new Image();
      img.src = reader.result;
      img.onload = () => {
        $(".modify .poa").css({"z-index": "-5", opacity: "0"});
        Modify.img = img;
        Modify.textBox = [];
        Modify.name = file.name;
        Modify.drawImage();
      }
    }
    
    $(".img p").addClass("inv");
    $(".btn").removeClass("off");
  },
  
  addText() {
    let text = $("#text").val();

    if (text.trim() == "") return alert("텍스트를 입력해주세요.");

    let idx = Modify.textBox.length;
    text = `글상자 ${idx + 1} \n${text}`;
    let temp = $(`<p class="temp" id="temp${idx}"></p>`);

    temp.text(text);
    
    $(".temp_wrap").append(temp);

    Modify.textBox.push({
      idx: idx,
      x: 32,
      y: 24,
      text: text.split("\n"),
      size: Modify.getSize(idx),
      rotate: 0
    });

    Modify.updateFrame();
    Modify.modalToggle();
  },

  drawImage() {
    const ctx = Modify.ctx;
    if (Modify.img == "") {
      ctx.clearRect(0, 0, 1320, 600);
      $(".cent").css({
        opacity: 1,
        "z-index": 1,
      })
    } else {  
      ctx.clearRect(0, 0, 1320, 600);
      ctx.drawImage(Modify.img, 0, 0, 1320, 600);
    }
  },

  drawText() {
    const ctx = Modify.ctx;
    
    ctx.textBaseline = "top";

    if (Modify.color != false) {
      Modify.textBox.forEach((v, i) => {
        if (Modify.targetText?.idx == v.idx) {
          ctx.fillStyle = "rgb(218, 227, 255)";
          ctx.strokeStyle = "royalblue";
        } else {
          ctx.fillStyle = `${Modify.color}`;
          ctx.strokeStyle = "royalblue";
        }
  
        ctx.save();
        
  
          if (v.rotate != 0) {
            ctx.translate(v.x + (v.size[0] / 2), v.y + (v.size[1] / 2));
            ctx.rotate((Math.PI * v.rotate) / 180);
            ctx.translate((v.x + (v.size[0] / 2)) * -1, (v.y + (v.size[1] / 2)) * -1);
          }
  
          ctx.fillRect(v.x - 16, v.y - 8, v.size[0] + 32, v.size[1] + 8);
          ctx.strokeRect(v.x - 16, v.y - 8, v.size[0] + 32, v.size[1] + 8);
  
          v.text.forEach((va, id) => {
            ctx.font = "16px sans";
            ctx.fillStyle = "#000";
            ctx.fillText(va, v.x, v.y + (id * 24));
          });
  
        ctx.restore();
      });
    } else {
      Modify.textBox.forEach((v, i) => {
        if (Modify.targetText?.idx == v.idx) {
          ctx.fillStyle = "rgb(218, 227, 255)";
          ctx.strokeStyle = "royalblue";
        } else {
          ctx.fillStyle = "white";
          ctx.strokeStyle = "royalblue";
        }
  
        ctx.save();
  
          if (v.rotate != 0) {
            ctx.translate(v.x + (v.size[0] / 2), v.y + (v.size[1] / 2));
            ctx.rotate((Math.PI * v.rotate) / 180);
            ctx.translate((v.x + (v.size[0] / 2)) * -1, (v.y + (v.size[1] / 2)) * -1);
          }
  
          ctx.fillRect(v.x - 16, v.y - 8, v.size[0] + 32, v.size[1] + 8);
          ctx.strokeRect(v.x - 16, v.y - 8, v.size[0] + 32, v.size[1] + 8);
  
          v.text.forEach((va, id) => {
            ctx.font = "16px sans";
            ctx.fillStyle = "#000";
            ctx.fillText(va, v.x, v.y + (id * 24));
          });
  
        ctx.restore();
      });
    }
  },

  updateFrame() {
    Modify.drawImage();
    Modify.drawText();
  },

  getSize(idx) {
    const temp = $(`#temp${idx}`);

    return [
      temp.width(),
      temp.height()
    ];
  },

  down() {
    if (Modify.img == "") return;
    Modify.targetText = null;
    Modify.updateFrame();

    let data = $("#canvas")[0].toDataURL();
    const a = $(`<a download="${Modify.name}" href="${data}"></a>`)[0];

    a.click();
    a.remove();
  }
}
$(() => script.init())