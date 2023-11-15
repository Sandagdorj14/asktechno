<div id="works-section">
  <div class="container">
    <div class="section-title text-center center">
      <h2> Revitアドイン販売 </h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <div class="col-md-12">
        <div class="about-text" style="margin-left: 100px">
            <h4>2022年4月より、販売を開始する予定です。<br>『 ASKNOTE 』という名前でアドインされます。
                アスキットという名前でアドインされます。<br>随時拡張していきます。<br>
                AppStoreでのRevitのアドイン販売を実施しています。ご購入の際はこちらにアクセスください。<br>
                また、対応バージョンとしては、現状2021と2023を対応しています。
            </h4>
          <div class="t-text">
            <h3>コマンドのご紹介</h3>
            <p>AppStoreでも内容を記載していますが、より細かな内容のご紹介をしています。</p>
            <h3>コマンド目次</h3>
                <table id="customers">
                  <tr>
                      <th>セットNo</th>
                      <th>セット名</th>
                      <th>リリース</th>
                  </tr>
                  <tbody id="tableSection"></tbody>
                </table>
          </div>
          <div id="light">
          <a class="boxclose" id="boxclose" onclick="lightbox_close();"></a>
          <video id="VisaChipCardVideo" width="600" controls>
              <source src="" type="video/mp4">
              <!--Browser does not support <video> tag -->
            </video>
        </div>
        <div id="fade" onClick="lightbox_close();"></div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  window.document.onkeydown = function(e) {
  if (!e) {
    e = event;
  }
  if (e.keyCode == 27) {
    lightbox_close();
  }
}

function lightbox_open(video_url) {
  var lightBoxVideo = document.getElementById("VisaChipCardVideo");
  lightBoxVideo.setAttribute("src", video_url);
  window.scrollTo(0, 0);
  document.getElementById('light').style.display = 'block';
  document.getElementById('fade').style.display = 'block';
  lightBoxVideo.play();
}

function lightbox_close() {
  var lightBoxVideo = document.getElementById("VisaChipCardVideo");
  document.getElementById('light').style.display = 'none';
  document.getElementById('fade').style.display = 'none';
  lightBoxVideo.pause();
}
  function SetOpen(id) {
    document.getElementById(id).style.display = "table";
    document.getElementById('exit'+id).style.display = "inline-block";
    document.getElementById('open'+id).style.display = "none";
  }
  function SetExit(id) {
    document.getElementById(id).style.display = "none";
    document.getElementById('open'+id).style.display = "inline-block";
    document.getElementById('exit'+id).style.display = "none";
  }
  function ComFunc(id, set) {
    console.log(set, '=' , id);
    var url = "<?php echo base_url();?>";
    window.location.href = url+"index.php/pages/command?code="+id+','+set;

  }
  function readTextFile(file, callback) {
      var rawFile = new XMLHttpRequest();
      rawFile.overrideMimeType("application/json");
      rawFile.open("GET", file, true);
      rawFile.onreadystatechange = function() {
          if (rawFile.readyState === 4 && rawFile.status == "200") {
              callback(rawFile.responseText);
          }
      }
      rawFile.send(null);
  }

  function getCommands(commands, item) {
    var str = '';
    commands.forEach((command) => {
      str = str + `<tr onclick="ComFunc(${command.id},${item.id})" style="cursor: pointer;">
        <td>-00${command.id}</td>
        <td style="font-weight: bold;">${command.command_name}</td>
      <tr>`;
    });
    return str;
  }
  function Display(id) {
    var str = '';
    console.log(id);
    if(id != 1) {
      str = `display: none;`;
    }
    return str;
  }
  function Display1(id) {
    var str = 'style="display: none;"';
    console.log(id);
    if(id != 1) {
      str = `style="display: inline-block;"`;
    }
    return str;
  }
  function Display2(id) {
    var str = 'style="display: inline-block;"';
    console.log(id);
    if(id != 1) {
      str = `style="display: none;"`;
    }
    return str;
  }
  readTextFile("/data.json", function(text){
      var data = JSON.parse(text);
      console.log(data);
      const renderTableData = (result) => {
          return result.map((item, index) => {
            return `<tr>
                      <td>ASKNOTE-0${item.id}</td>
                      <td>${item.name}
                      <i id="open${item.id}" ` + Display1(item.id) + ` onclick="SetOpen(${item.id})" class="fa fa-expand"></i>
                      <i id="exit${item.id}" ` + Display2(item.id) + ` onclick="SetExit(${item.id})" class="fa fa-compress"></i>
                        <table id="${item.id}" style="width:100%;` + Display(item.id) + `">
                            <tr>
                              <th>セットNo</th>
                              <th>コマンド名</th>
                            </tr>` + getCommands(item.commands, item) + `
                        </table>
                      </td>
                      <td>${item.date}</td>
                  </tr>`;
          }).join('');
        };
        
        const dataBinding = (result) => {
          let x = document.getElementById("tableSection");
          x.innerHTML = renderTableData(result);
        };
        dataBinding(data);
  });
</script>