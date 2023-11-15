
<!-- About Section -->
<div id="about-section">
  <div class="container">
    <div class="section-title text-center center">
      <h2> <?php echo $this->lang->line('taniltsuulga');?> </h2>
      <hr>
      <div class="clearfix"></div>
      <!-- <p><?php echo $this->lang->line('taniltsuulga_tailbar');?></p> -->
    </div>
    <div class="row">
      <!-- <div class="col-md-6"> <img src="<?php echo base_url()?>img/us.jpg" class="img-responsive"> </div> -->
      <div class="col-md-12">
        <div class="about-text">
          <h4><?php echo $this->lang->line('who_we_are'); ?></h4>
          <h4><?php echo $this->lang->line('who_we_are_tailbar'); ?></h4>
          <h4><?php echo $this->lang->line('what_we_do'); ?></h4>
          <p><?php echo $this->lang->line('what_we_do_tailbar'); ?></p>
          <h4><?php echo $this->lang->line('why_choose_us'); ?></h4>
          <p><?php echo $this->lang->line('why_choose_us_tailbar'); ?></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Services Section -->
<div id="services-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2><?php echo $this->lang->line("uilchilgee");?></h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="space"></div>
    <div class="row" style="display: flex;
    justify-content: center;">
      <div class="col-md-3 col-sm-6 service"> <a href="/index.php/pages/addsales"><i class="fa fa-desktop"></i></a>
        <a href="/index.php/pages/addsales"><h3><?php echo $this->lang->line('web_hugjuulelt');?></h3></a>
        <p> <?php echo $this->lang->line('web_hugjuulelt_tailbar');?></p>
      </div>
      <div class="col-md-3 col-sm-6 service"> <a href="/index.php/pages/user"><i class="fa fa-desktop"></a></i>
        <a href="/index.php/pages/user"><h3><?php echo $this->lang->line('uildveriin_hyanalt');?></h3></a>
        <p> <?php echo $this->lang->line('uilveriin_hyanalt_tailbar');?></p>
      </div>
    </div>
  </div>
</div>
<!-- Portfolio Section -->



<!-- About Section -->
<div id="works-section">
  <div class="container">
    <div class="section-title text-center center">
      <h2> <?php echo $this->lang->line('company_medeelel');?> </h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="row">
      <!-- <div class="col-md-6">
        <div class="about-text">
            <h4>施工図会社</h4>
          <div class="t-text">
            <h3>主な実施内容</h3>
            <p>施工図を作成するための多岐にわたるツールの作成</p>
            <ul class="no-bullets">
              <li>モデル作成作業を効率化をするコマンド</li>
              <li>図面作成を効率化するコマンド</li>
              <li>モデルをチェックするコマンド</li>
              <li>自動生成するコマンド</li>
              <li>作業ミスを減らすコマンド　　など・・</li>
            </ul>
            <h3>作成期間</h3>
            <p>〇〇年(現在継続中)</p>
            <h3>作成ツール数</h3>
            <p>50ツール以上</p>
            <h3>お客様の声</h3>
            <p>
              自社テンプレート開発時から絡んでもらい、多大な効率を生み出せる<br>
              仕組みまで出来ました。<br>
              こちらの意図をくみ取ることはもちろん、それに加えた提案をして頂き<br>
              より良い仕組みが出来てきています。
            </p>
          </div>
        </div>
        <div class="about-text">
            <h4>店舗設計会社</h4>
          <div class="t-text">
            <h3>主な実施内容</h3>
            <p>社内管理しているファミリ群の検索ツール</p>
            <h3>作成期間</h3>
            <p>約2カ月</p>
            <h3>作成ツール数</h3>
            <p>1ツール</p>
            <h3>お客様の声</h3>
            <p>
            今まで時間をかけて探していたものが瞬時に見つかり<br>
            かなりの業務効率となりました。
            </p>
          </div>
        </div>
      </div> -->
      <div class="col-md-12">
        <div class="col-md-6">
        <div class="col-sm-10 col-md-10 col-lg-10 app">
          <div class="portfolio-item">
            <div class="hover-bg"> 
              <a href="#popup2" rel="prettyPhoto">
                <div class="hover-text">
                  <h4>事例1：施工図会社</h4>
                </div>
                  <h4>事例1：施工図会社</h4>
                <img src="<?php echo base_url()?>img/products/02.png" class="img-responsive" alt="事例1：施工図会社">
              </a>
          </div>
          </div>
        </div></div>
        <div class="col-md-6">
        <div class="col-sm-10 col-md-10 col-lg-10 app">
          <div class="portfolio-item">
            <div class="hover-bg"> 
              <a  href="#popup1" rel="prettyPhoto">
              <div class="hover-text">
                <h4>事例2：店舗設計会社</h4>
              </div>
                <h4>事例2：店舗設計会社</h4>
              <img src="<?php echo base_url()?>img/products/06.png" class="img-responsive" alt="事例2：店舗設計会社">
            </a>
            </div>
          </div>
        </div></div>
        <div id="popup1" class="overlay">
            <div class="content">
              <br>
              <h4>店舗設計会社</h4>
              <h3>主な実施内容</h3>
              <p>社内管理しているファミリ群の検索ツール</p>
              <h3>作成期間</h3>
              <p>約2カ月</p>
              <h3>作成ツール数</h3>
              <p>1ツール</p>
              <h3>お客様の声</h3>
              <p>
              今まで時間をかけて探していたものが瞬時に見つかり<br>
              かなりの業務効率となりました。
              </p>
              <br>
            </div>
        </div>
        <div id="popup2" class="overlay">
            <div class="content"> 
              <br>
              <h4>施工図会社</h4>
              <h3>主な実施内容</h3>
              <p>施工図を作成するための多岐にわたるツールの作成</p>
              <ul class="no-bullets">
                <li>モデル作成作業を効率化をするコマンド</li>
                <li>図面作成を効率化するコマンド</li>
                <li>モデルをチェックするコマンド</li>
                <li>自動生成するコマンド</li>
                <li>作業ミスを減らすコマンド　　など・・</li>
              </ul>
              <h3>作成期間</h3>
              <p>〇〇年(現在継続中)</p>
              <h3>作成ツール数</h3>
              <p>50ツール以上</p>
              <h3>お客様の声</h3>
              <p>
                自社テンプレート開発時から絡んでもらい、多大な効率を生み出せる<br>
                仕組みまで出来ました。<br>
                こちらの意図をくみ取ることはもちろん、それに加えた提案をして頂き<br>
                より良い仕組みが出来てきています。
              </p>
              <br>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Team Section -->
<div id="team-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2><?php echo $this->lang->line('bag_hamt_olon'); ?></h2>
      <hr>
      <!-- <p> <?php echo $this->lang->line('bag_hamt_olon_tailbar'); ?> </p> -->
    </div>
    <div id="row">

          <!-- <?php foreach($employees as $employee) {?>

      <div class="col-md-3 col-sm-6 team">
        <div class="thumbnail"> <img src="<?php echo base_url()?>img/team/<?=$employee->employee_image?>" alt="..." class="img-circle team-img">
          <div class="caption">
            <h3><?=$employee->name?></h3>
            <?php if(trim($employee->job) == 'Ерөнхий захирал') {?>
            <p><?=$this->lang->line('ceo')?></p>
            <?php }?>
            <?php if(trim($employee->job) == 'Ерөнхий менежер') {?>
            <p><?=$this->lang->line('manager')?></p>
            <?php }?>
            <?php if(trim($employee->job) == 'Ахлах программист') {?>
            <p><?=$this->lang->line('cto')?></p>
            <?php }?>
            <?php if(trim($employee->job) == 'Нягтлан бодогч') {?>
            <p><?=$this->lang->line('accountant')?></p>
            <?php }?>
            <p><?=$employee->descr?></p>
          </div>
        </div>
      </div>
      <?php }?> -->
      <div class="col-md-4 col-sm-6 team">
        <div class="thumbnail"> 
          <!-- <img src="<?php echo base_url()?>img/team/02.jpg" alt="..." class="img-circle team-img"> -->
          <div class="caption">
            <h3>A・K</h3>
            <!-- <p>Web Designer</p> -->
            <p>建築工事、施工図の経験があり、建築の広い分野で経験豊富。</p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 team">
        <div class="thumbnail"> 
          <!-- <img src="<?php echo base_url()?>img/team/03.jpg" alt="..." class="img-circle team-img"> -->
          <div class="caption">
            <h3>K・H</h3>
            <!-- <p>Creative Director</p> -->
            <p>建築工事、施工図の経験があり、BIMに精通しており、Revit開発実績もある。
            2次元の図面との違い、Revitが故の問題も日々経験し苦労を重ねてる。。<br>
            経験者だからこそ出るマニアックなアイデアを武器にRevit開発を楽しんでます！
            </p>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-6 team">
        <div class="thumbnail"> 
          <!-- <img src="<?php echo base_url()?>img/team/04.jpg" alt="..." class="img-circle team-img"> -->
          <div class="caption">
            <h3>S・B</h3>
            <!-- <p>Project Manager</p> -->
            <p>幾何学的な計算に夢中になっています。</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- About Section -->
<div id="company-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2><?php echo $this->lang->line("company_section");?></h2>
      <hr>
      <div class="clearfix"></div>
    </div>
    <div class="space"></div>
    <div class="row" style="display: flex;justify-content: center;">
      <div class="col-md-3 col-sm-6 service"> 
        <a href="http://www.highbig.co.jp/"  target="_blank">
          <img  class="img-responsive"  src="<?php echo base_url()?>img/highbig.jpg" height="123" width="123">
        </a>
      </div>
      <div class="col-md-3 col-sm-6 service">
        <a href="https://susano-tech.mn/pages/jap"  target="_blank">
          <img  class="img-responsive"  style="margin-top: -50px;" src="<?php echo base_url()?>img/susano-english-logo.png" height="250" width="250">
        </a>
      </div>
    </div>
  </div>
</div>


<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-up"></i></button>
<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
</script>