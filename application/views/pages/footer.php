<!-- Contact Section -->
<div id="contact-section" class="text-center">
  <div class="container">
    <div class="section-title center">
      <h2> <?php echo $this->lang->line('holboo_barih'); ?></h2>
      <hr>
      
    </div>
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-6"> <i class="fa fa-map-marker"></i>
        <p> <?php echo $this->lang->line('address'); ?>
          
		  </p>
      </div>
      <div class="col-md-6"> <i class="fa fa-envelope-o"></i>
        <p><?php echo $this->lang->line('email'); ?></p>
      </div> 
      <!-- <div class="col-md-4"> <i class="fa fa-phone"></i>
        <p> (976) 95834340, (976) 94834340</p>
      </div> -->
      
      <div class="clearfix"></div>
    </div>
    <div class="col-md-8 col-md-offset-2">
      <h3> <?php echo $this->lang->line('sanal_huseltee_ilgeeneuu'); ?> </h3>
      <form name="sentMessage" id="contactForm" novalidate>
      <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="company_name" name="company_name" class="form-control" placeholder="会社名" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="text" id="name" name="name" class="form-control" placeholder=" <?php echo $this->lang->line('ovog_ner'); ?>" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <input type="tel" id="phone_number" name="phone_number" class="form-control" placeholder="連絡先電話番号" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <input type="email" id="email" name="email" class="form-control" placeholder="メール" required="required">
              <p class="help-block text-danger"></p>
            </div>
          </div>
        </div>
        <div class="form-group">
          <textarea name="message" id="message" name="message" class="form-control" rows="4" placeholder="<?php echo $this->lang->line('sanal_huselt'); ?>" required></textarea>
          <p class="help-block text-danger"></p>
        </div>
        <div id="success"></div>
        <button type="submit" class="btn btn-default"><?php echo $this->lang->line('ilgeeh'); ?></button>
      </form>
    </div>
  </div>
</div>
</div>
<!-- <div id="social-section">
  <div class="container">
    <div class="social">
      <ul>
        <li><a href="https://www.facebook.com" target="_blank"><i class="fa fa-facebook"></i></a></li>
        <li><a href="https://www.twitter.com" target="_blank"><i class="fa fa-twitter"></i></a></li>
        <li><a href="https://www.skype.com" target="_blank"><i class="fa fa-skype"></i></a></li>
        
        
      </ul>
    </div>
  </div>
</div> -->
<div id="footer">
  <div class="container">
    <div class="fnav">
      <?php if($this->lang->line("nuur") == "Нүүр хуудас") {?>


      <p>Зохиогчийн эрхийн тухай хуулиар хамгаалагдсан. © 2018 он.</p> <?php } else {?>
      <p>Copyright &copy; ASK techno. ALL RIGHTS RESERVED</p> <?php }?>
       
    
    </div>
  </div>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.1.11.1.js"></script> 
<!-- Include all compiled plugins (below), or include individual files as needed --> 
<script type="text/javascript" src="<?php echo base_url()?>js/bootstrap.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>js/SmoothScroll.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.counterup.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>js/waypoints.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.prettyPhoto.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>js/jquery.isotope.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>js/jqBootstrapValidation.js"></script> 
<script type="text/javascript" src="<?php echo base_url()?>js/contact_me.js"></script> 

<!-- Javascripts
    ================================================== --> 
<script type="text/javascript" src="<?php echo base_url()?>js/main.js"></script>