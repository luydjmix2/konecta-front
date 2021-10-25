<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>font light</title>
    <?php require_once(dirname(__FILE__) . '/layouts/head.php'); ?>

</head>

<body>
    <?php require_once(dirname(__FILE__) . '/layouts/header.php'); ?>
    <main>
        <div class="container">

            <section>
                <div class="card my-3">
                    <div class="card-body">
                        <h3>
                            Registro
                        </h3>
                        <form action="/" id="formCreateUser" method="post">
                            <div class="row">

                                <div class="col-6">
                                    <div class="form-floating my-3">
                                        <input type="text" class="form-control" id="floatingNombre" placeholder="Nombre" value="carlos">
                                        <label for="floatingNombre">Nombre</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating my-3">
                                        <input type="mail" class="form-control" id="floatingMail" placeholder="Password" value="asd@asd.asd">
                                        <label for="floatingMail">mail</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating my-3">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Contraseña" value="123456789">
                                        <label for="floating">Controseña</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating my-3">
                                        <input type="password" class="form-control" id="floatingPasswordConf" placeholder="Confirmar Contraseña" value="123456789">
                                        <label for="floatingPasswordConf">Confirmacion Contraseña</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-floating my-3">
                                        <select name="perfil" class="form-control" id="floatingperfil">
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
                        </form>
                    </div>
                </div>

            </section>
        </div>



        <hr class="featurette-divider">
        <!-- FOOTER -->
        <?php require_once(dirname(__FILE__) . '/layouts/foot.php'); ?>
    </main>


</body>

</html>