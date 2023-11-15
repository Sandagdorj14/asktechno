<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>css/admin.css">
</head>
<body class="bg-primary">
  <div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
      <main>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-5">
              <div class="card shadow-lg border-0 rounded-lg mt-5">
                <div class="card-header"><h3 class="text-center font-weight-light my-4">ログイン</h3></div>
                <div class="card-body">
                  <form action="admin_login" method="POST">
                    <div class="form-floating mb-3">
                      <input class="form-control" name="username" type="text" placeholder="Username" />
                      <label for="inputUsername">メールアドレス</label>
                    </div>
                    <div class="form-floating mb-3">
                      <input class="form-control" name="password" type="password" placeholder="Password" />
                      <label for="inputPassword">パスワード</label>
                    </div>
                    <div class="d-flex align-items-center justify-content-between mt-4 mb-0">
                      <button class="btn btn-primary" type="submit">ログイン</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>
    </div>
  </div>
</body>
</html>

