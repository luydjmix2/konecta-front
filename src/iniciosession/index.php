<?php

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>font light</title>
    <?php require_once(dirname(__FILE__) . '/../layouts/head.php'); ?>
</head>
<body>
    <?php //require_once(dirname(__FILE__) . '/../layouts/header.php'); ?>
    <main>
        <div class="container">

            <section>
                <div class="card my-3">
                    <div class="card-body">
                        <h3>
                            Registro
                        </h3>
                        <form action="/" id="formLoginUser" method="post">
                            <div class="row">
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
                                <div class="col-12">
                                    <button class="form-control btn btn-primary" type="submit">Crear</button>
                                </div>
                            </div>
                            <div class="alert alert-danger visually-hidden validForm my-2" role="alert">

                            </div>
                        </form>
                    </div>
                </div>

            </section>
        </div>
        <hr class="featurette-divider">
        <!-- FOOTER -->
        <?php require_once(dirname(__FILE__) . '/../layouts/foot.php'); ?>
    </main>
</body>
</html>