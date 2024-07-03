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
                        <h1 class="mt-4">Contracts</h1>
                        <div class="card mb-4">
                            <div class="card-header">
                                Contracts
                                <a class="btn btn-success" style="float: inline-end;" data-toggle="modal" href="contract">
                                    <span>INSERT</span>
                                </a>
                            </div>
                            <div class="card-body">
                            <table id="datatablesAnkets">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>company name</th>
                                            <th>email</th>
                                            <th>license count</th>
                                            <th>expired date</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>company name</th>
                                            <th>email</th>
                                            <th>license count</th>
                                            <th>expired date</th>
                                            <th></th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php foreach ($contracts as $key) { ?>
                                        <tr>
                                            <td><?php echo($key->id); ?></td>
                                            <td><?php echo($key->company_name); ?></td>
                                            <td><?php echo($key->email); ?></td>
                                            <td><?php echo($key->license_count); ?></td>
                                            <td><?php echo($key->expired_date); ?></td>
                                            <td>
                                                <a href="contract_delete?id=<?php echo($key->id)?> "  class="btn btn-danger" data-toggle="modal" href="delete">
                                                <?php if($key->delete_flg == 1){?>
                                                    <span>Restory</span> 
                                                <?php }else{?>
                                                    <span>Delete</span> 
                                                <?php }?>
                                                </a>
                                                <a href="contract_update?id=<?php echo($key->id)?> " class="btn btn-success" data-toggle="modal" href="update">
                                                    <span>Update</span>
                                                </a>
                                            </td>
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

