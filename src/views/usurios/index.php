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
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Crear Usurio
                        </button>
                        <hr>
                        <h3>
                            Usuarios
                        </h3>
                        <p>
                        <table id="table_id" class="display">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Correo</th>
                                    <th>Nombre</th>
                                    <th>Perfil</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
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
        <script src="./../../js/pages/usurios/datatables.js"></script>
    </main>



    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Crear usurio</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="/" id="formCreateUserV" method="post">
                        <div class="row">

                            <div class="col-6">
                                <div class="form-floating my-3">
                                    <input type="text" name="floatingNombre" class="form-control" id="floatingNombre" placeholder="Nombre" value="carlos" required>
                                    <label for="floatingNombre">Nombre</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating my-3">
                                    <input type="mail" name="floatingMail" class="form-control" id="floatingMail" placeholder="Password" value="asd@asd.asd" required>
                                    <label for="floatingMail">mail</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating my-3">
                                    <input type="password" name="floatingPassword" class="form-control" id="floatingPassword" placeholder="Contraseña" value="123456789" required>
                                    <label for="floating">Controseña</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating my-3">
                                    <input type="password" name="floatingPasswordConf" class="form-control" id="floatingPasswordConf" placeholder="Confirmar Contraseña" value="123456789" required>
                                    <label for="floatingPasswordConf">Confirmacion Contraseña</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating my-3">
                                    <select name="perfil" class="form-control" id="floatingperfil" required>
                                        <option value="">Selecione una opcion</option>
                                        <option value="1">Administrador</option>
                                        <option value="2">Vendedor</option>
                                        <option value="3">Cliente</option>
                                    </select>
                                    <label for="floatingperfil">Perfil</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="form-control btn btn-primary" type="submit">Crear</button>
                            </div>
                        </div>
                        <div class="alert alert-danger visually-hidden validForm my-2" role="alert">

                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>

</body>

</html>