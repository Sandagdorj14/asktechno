<!DOCTYPE html>
<!--
   _____   _____   _____   ____   _   _   _____     ___ __  __  ___
  |  _  | |  _  | |  _  | |  __| | | / | |  _  |   |_  )  \/  \| __|
  | |_| | | |_| | | |_| | | |__  | |/ /  | |_| |    / / ()  () ||_ \
  |  _/_  | | | | |  _/_  | |__| |   |   | | | |   /___\__/\__/|___/
  | |_| | | | | | | |_| | | |__  | |\ \  | | | |
  |_____| |_| |_| |_____| |____| |_| \_| |_| |_|
  
    
  !-->
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ASK techno LLC</title>
<meta name="description" content="ASK techno LLC">
<meta name="author" content="Babeka | Susano LLC">
<meta name="keywords" content="モンゴルオフショア開発,スサノテクノロジ,受託開発,ソフトウェア開発,CADカスタマイズ開発,CADプログラミング,AR/VR開発,ウェブシステム開発,ASK TECHNO,ASK TECHNO">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="<?php echo base_url()?>img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="<?php echo base_url()?>img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url()?>img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url()?>img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>css/style.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>css/prettyPhoto.css">
<link href='http://fonts.googleapis.com/css?family=Lato:400,700,900,300' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800,600,300' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="<?php echo base_url()?>js/modernizr.custom.js"></script>
<link rel="icon" type="image/x-icon" class="js-site-favicon" href="<?php echo base_url()?>img/logo1.png">

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
    <!-- Navigation
    ==========================================-->
    <nav id="menu" class="navbar navbar-default navbar-fixed-top" style="background: #b5b0b0 !important">
  <div class="container"> 
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
      <!-- <a  class="navbar-brand" href="">ASK TECHNO</a> -->
      <a class="navbar-brand" href=""><img src="<?php echo base_url()?>img/ask.gif" height="74" width="116" style="margin-top: -30px;"> <strong></strong></a>
    </div>
	  <div class="language-switcher-language-url" id="block-languageswitcher" role="navigation">
      <ul class="links">
      </ul>
  </div>
    
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="/index.php/pages/view#" class="page-scroll"><?php echo $this->lang->line("nuur");?></a></li>   
        <li><a href="/index.php/pages/view#about-section" class="page-scroll"><?php echo $this->lang->line("taniltsuulga");?></a></li>          
        <li><a href="/index.php/pages/view#services-section" class="page-scroll"><?php echo $this->lang->line("uilchilgee");?></a></li>
        <li><a href="/index.php/pages/view#works-section" class="page-scroll"><?php echo $this->lang->line("company_medeelel");?></a></li>
        <li><a href="/index.php/pages/view#team-section" class="page-scroll"><?php echo $this->lang->line("ajilchid");?></a></li>
        <li><a href="/index.php/pages/view#company-section" class="page-scroll"><?php echo $this->lang->line("company_section");?></a></li>
        <li><a href="privacy_policy" class="page-scroll"><?php echo $this->lang->line("privacy_policy");?></a></li>
        <li><a href="/index.php/pages/view#contact-section" class="page-scroll"><?php echo $this->lang->line("holboo_barih");?></a></li>
      </ul>
    </div>
    <!-- /.navbar-collapse --> 
  </div>
  <!-- /.container-fluid --> 
</nav>
    <div id="works-section">
    <div class="container">
        <div class="section-title text-center center">
            <h2> Revitアドイン販売 </h2><hr>
            <div class="row" style="justify-content: center;">
              <div class="col-md-6 col-sm-6 service"> 
                  <table id="customers">
                </table>
              </div>
              <div class="col-md-6 col-sm-6 service" id="video">
              </div>
            </div>
            <br>
              <button id="prevbtn" class="button" onclick="PrevFunc(<?php echo $code; ?>)" style="float: left;">←前のコマンドへ</button>
              <a class="button" href="addsales">コマンド一覧へ戻る</a>
              <button id="nextbtn" class="button" onclick="NextFunc(<?php echo $code; ?>)" style="float: right;">次のコマンドへ→</button>
        </div>
    </div>
    </div>
    <div id="footer">
  <div class="container">
    <div class="fnav">
      <?php if($this->lang->line("nuur") == "Нүүр хуудас") {?>


      <p>Зохиогчийн эрхийн тухай хуулиар хамгаалагдсан. © 2018 он.</p> <?php } else {?>
      <p>Copyright &copy; ASK techno. ALL RIGHTS RESERVED</p> <?php }?>
       
    
    </div>
  </div>
</div>
    </body>
</html>

<script>
  var min;
  var max;
    function PrevFunc(id) {
      var url = "<?php echo base_url();?>";
      var nextid = parseInt(id) - 1;
      var code = "<?php echo $code; ?>";
      var set_id = code.split(",")[1];
      if(min <= nextid) {
        window.location.href = url+"index.php/pages/command?code="+nextid+","+set_id;
      }
    }
    function NextFunc(id) {
      var url = "<?php echo base_url();?>";
      var nextid = parseInt(id) + 1;
      var code = "<?php echo $code; ?>";
      var set_id = code.split(",")[1];
      if (max >= nextid) {
        window.location.href = url+"index.php/pages/command?code="+nextid+","+set_id;
      }
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
    readTextFile("/data.json", function(text){
      var data = JSON.parse(text);
      var MAX = [];
      var code = "<?php echo $code; ?>";
      var set_id = code.split(",")[1];
      var command_id = code.split(",")[0];
      for(i = 0; i < data.length; i++) {
          if(data[i].id == set_id) {
            console.log(data[i].commands);
            var data1 = data[i].commands;
            for(i1 = 0; i1 < data1.length; i1++) {
              MAX.push(parseInt(data1[i1].id))
              if(data1[i1].id == command_id) {
                document.getElementById("customers").innerHTML = `<tr>
                  <th colspan="2" scope="colgroup">ASKENOTE-01-00${data1[i1].id}</th>
                </tr>
                <tr>			
                  <th>コマンド名</th>
                  <td style="font-weight: bold;">${data1[i1].command_name}</td>
                </tr>
                <tr>
                  <th>内容</th>
                  <td>${data1[i1].contents}</td>
                </tr>
                <tr>
                  <th>メリット</th>
                  <td>${data1[i1].merit}</td>
                </tr>
                <tr>
                  <th>作成経緯</th>
                  <td>${data1[i1].creation_process}</td>
                </tr>
                <tr>
                  <th>コマンド難易度</th>
                  <td>${data1[i1].command_difficulty}</td>
                </tr>`;
                var base_url = "<?php echo base_url();?>"+"videos/";
                document.getElementById("video").innerHTML = `<video width="auto" height="240" controls>
                    <source src="${base_url+data1[i1].url}" type="video/mp4">
                    <source src="${data1[i1].url}" type="video/ogg">
                  </video>`;
              }
            }
          }          
      }
      min = arrayMin(MAX);
      max = arrayMax(MAX);
      var code = "<?php echo $code; ?>";
      var command_id = code.split(",")[0];
      if (command_id == min) {
        document.getElementById("prevbtn").disabled = true;
        document.getElementById("prevbtn").style.background = 'gray';
      }
      if (command_id == max) {
        document.getElementById("nextbtn").disabled = true;
        document.getElementById("nextbtn").style.background = 'gray';
      }
  });
  function arrayMin(arr) {
    var len = arr.length, min = Infinity;
    while (len--) {
      if (arr[len] < min) {
        min = arr[len];
      }
    }
    return min;
  };

  function arrayMax(arr) {
    var len = arr.length, max = -Infinity;
    while (len--) {
      if (arr[len] > max) {
        max = arr[len];
      }
    }
    return max;
  };
</script>
