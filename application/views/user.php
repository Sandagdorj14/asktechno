<!DOCTYPE html>
<html lang="en">
<head>
  <title>Database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<?php echo '<h2>Welcome - '.$this->session->userdata('username').'</h2>';  ?>
<?php echo '<label><a href="'.site_url('').'main/logout">Гарах</a></label>';  ?>

<div class="container">
  <h2>Бидний бүтээл</h2>
  <br><br>
  <form action="<?php echo site_url('')?>user/insert" method="POST">
    <table>
      <tr>
          <td>Төрөл</td>
          <td>:</td>
          <input type="text" required="required"/>
          <td><input type="text" name="type"></td>
      </tr>
      <tr>
          <td>Нэр</td>
          <td>:</td>
          <td><input type="text" name="name"></td>
      </tr>
      <tr>
          <td>Зураг</td>
          <td>:</td>
          <td><input type="text" name="image"></td>
      </tr>
      <tr>
          <td>Тайлбар</td>
          <td>:</td>
          <td><input type="text" name="description"></td>
      </tr>
      <tr>
          <td>Огноо</td>
          <td>:</td>
          <td><input type="text" name="date"></td>
      </tr>
      
      <tr>
        <td></td>
        <td></td>
        <td><input type="submit" value="Add">
      </tr>
    </table><hr>
  </form>
  
  <table class="table table-bordered" table-responsive>
      <tr>
        <th>Дугаар</th>
        <th>Төрөл</th>
        <th>Нэр</th>
        <th>Зураг</th>
        <th>Тайлбар</th>
        <th>Огноо</th>
        <th>Өөрчлөх</th>
      </tr>
        <?php
            foreach($products->result()as $re)
            echo "<tr>"
                ."<td> $re->id</td>"
                ."<td> $re->type</td>"
                ."<td> $re->title</td>"
                ."<td> $re->image</td>"
                ."<td> $re->descr</td>"
                ."<td> $re->product_date</td>"
                ."<td>Edit Delete</td>"


        ?>
    
  </table>
</div>

</body>
</html>
