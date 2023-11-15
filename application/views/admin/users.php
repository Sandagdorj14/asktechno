<!DOCTYPE html>
<html>
<head>
<title>Admin</title>
<link rel="stylesheet" type="text/css"  href="<?php echo base_url()?>css/admin.css">
</head>
<body class="sb-nav-fixed">
    <?php include 'header.php';?>
        <div id="layoutSidenav">
            <?php include 'menu.php';?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Users</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                Users
                            </div>
                            <div class="card-body">
                            <table id="datatablesAnkets">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>contract ID</th>
                                            <th>email</th>
                                            <th>user ID</th>
                                            <th>is activate</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>contract ID</th>
                                            <th>email</th>
                                            <th>user ID</th>
                                            <th>is activate</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>1</td>
                                            <td>example@gmail.com</td>
                                            <td>2</td>
                                            <td>0</td>
                                            <td>
                                                <a class="btn btn-danger" data-toggle="modal" href="">
                                                    <span>Delete</span>
                                                </a>
                                                <a class="btn btn-success" data-toggle="modal" href="">
                                                    <span>Update</span>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </body>
    <script>
        window.addEventListener('DOMContentLoaded', event => {
            const datatablesSimple = document.getElementById('datatablesAnkets');
            if (datatablesSimple) {
                new simpleDatatables.DataTable(datatablesSimple);
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
</html>

