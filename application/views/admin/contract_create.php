<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>css/admin.css">
<script>
function validateForm() {
  let x = document.forms["myForm"]["Company_name"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
}
</script>
</head>
<body class="sb-nav-fixed">
    <?php include 'header.php';?>
        <div id="layoutSidenav">
            <?php include 'menu.php';?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Contract create</h1>
                        <div class="card card-primary">
                        <form name="myForm" action="contract_create" method="POST" onsubmit="return validateForm()">
                            <div class="card-body">
                            <div class="form-group">
                                <label>Company Name</label>
                                <input type="text" class="form-control" name="Company_name" value="" placeholder="Company Name">
                            </div>
                            <div class="form-group">
                                <label>Email address</label>
                                <input type="email" class="form-control" name="email" value="" placeholder="Enter email">
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" class="form-control" name="password"value="" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label>License count</label>
                                <input type="number" class="form-control" name="license_count" placeholder="License count">
                            </div>
                            <div class="form-group">
                                <label>Expired date</label>
                                <input type="date" class="form-control" name="expired_date" placeholder="License count">
                            </div>
                            </div>
                            <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
</html>

