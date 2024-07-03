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
                        <h1 class="mt-4">Logs</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                Logs
                            </div>
                            <div class="card-body">
                            <table id="datatablesAnkets">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Mac Address</th>
                                            <th>Log Time</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>mac address</th>
                                            <th>log time</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($logs as $key) { ?>
                                        <tr>
                                            <td><?php echo($key->id); ?></td>
                                            <td><?php echo($key->macid); ?></td>
                                            <td><?php echo($key->log_time); ?></td>
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

