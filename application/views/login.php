<!DOCTYPE html>  
 <html>  
 <head>  
      <title><?php echo $title; ?></title>  
      <link rel="stylesheet" 
  href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />  
 </head>  
 <body>  
      <div class="container">
          <br><br><br><br><br><br><br><br><br>
          <div class="row">
              <div class="col-md-4">
                  
                </div>
                <div class="col-md-4">
                <form method="post" action="<?php echo base_url(); ?>main/login_validation">  
                <div class="form-group">  
                     <label>Нэвтрэх нэр :</label>  
                     <input type="text" name="username" class="form-control" placeholder="Админы нэр" required="required"/>  
                                      
                </div>  
                <div class="form-group">  
                     <label>Нууц үг :</label>  
                     <input type="password" name="password" class="form-control" placeholder="Нууц үг" required="required" />  
                      
                </div>  
                <div class="form-group">  
                     <input type="submit" name="insert" value="Нэвтрэх" class="btn btn-primary" />  
                     <?php  
                          echo '<label class="text-danger">'.$this->session->flashdata("error").'</label>';  
                     ?>  
                </div>  
           </form>  
                </div>
                <div class="col-md-4">
                  
                </div>
            </div>
           <br /><br /><br />  
           
      </div>  
 </body>  
 </html>  
