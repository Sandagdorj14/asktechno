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
                                            <th>company name</th>
                                            <th>email</th>
                                            <th>mac address</th>
                                            <th>is activate</th>
                                            <th>is entry</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>company name</th>
                                            <th>email</th>
                                            <th>mac address</th>
                                            <th>is activate</th>
                                            <th>is entry</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                    <?php foreach ($users as $key) { ?>
                                        <tr>
                                            <td><?php echo($key->user_id); ?></td>
                                            <td><?php echo($key-> company_name); ?></td>
                                            <td><?php echo($key->user_email); ?></td>
                                            <td><?php echo($key->macid); ?></td>
                                            <td><?php echo($key->is_activate); ?></td>
                                            <td><?php echo($key->entry_flg); ?></td>
                                        </tr>
                                        <?php } ?>
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

