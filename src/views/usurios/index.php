<?php
require_once('./../../layouts/session.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>font light</title>
    <?php require_once(dirname(__FILE__) . '/../../layouts/head.php'); ?>

</head>

<body>
    <?php require_once(dirname(__FILE__) . '/../../layouts/header.php'); ?>
    <main>
        <div class="container">

            <section>
                <div class="card my-3">
                    <div class="card-body">
                        <h3>
                            Usuarios
                        </h3>
                        <p>
                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>Column 1</th>
                                    <th>Column 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Row 1 Data 1</td>
                                    <td>Row 1 Data 2</td>
                                </tr>
                                <tr>
                                    <td>Row 2 Data 1</td>
                                    <td>Row 2 Data 2</td>
                                </tr>
                            </tbody>
                        </table>
                        </p>
                    </div>
                </div>

            </section>
        </div>



        <hr class="featurette-divider">
        <!-- FOOTER -->
        <?php require_once(dirname(__FILE__) . '/../../layouts/foot.php'); ?>
        <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
        <script src="./../../js/pages/datatables.js"></script>
    </main>


</body>

</html>