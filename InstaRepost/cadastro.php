<!DOCTYPE html>
<html lang="PT-BR">
<?php
include "database/create_user.php"
?>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />

    <link rel="stylesheet" href="assets/css/main.css">
    <style>
        .container {
            max-width: 350px;
        }
    </style>
</head>

<body>
    <main>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <form action="cadastro.php" method="POST">
                            <div class="card p-3">
                                <img class="mx-auto" src="https://www.instagram.com/static/images/web/mobile_nav_type_logo.png/735145cfe0a4.png" width="125px" height="50px" alt="logo instagram" />

                                <div class="form-floating d-grid gap-2 mt-3">
                                    <input type="email" class="form-control" id="email" placeholder="name@example.com" name="email" />
                                    <label for="email">Email</label>
                                </div>

                                <div class="form-floating d-grid gap-2 mt-3">
                                    <input type="text" class="form-control" id="nomecompleto " placeholder="name@example.com" name="nomecompleto" />
                                    <label for="nomecompleto">Nome completo</label>
                                </div>

                                <div class="form-floating d-grid gap-2 mt-3">
                                    <input type="text" class="form-control" id="usuario" placeholder="name@example.com" name="usuario" />
                                    <label for="usuario">Usuário</label>
                                </div>

                                <div class="form-floating d-grid gap-2 mt-3">
                                    <input type="password" class="form-control" id="password" placeholder="name@example.com" name="password" />
                                    <label for="password">Senha</label>
                                </div>

                                <div class="d-grid gap-2 mt-3">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Enviar">
                                </div>

                            </div>
                    </div>

                </div>
            </div>
        </section>
    </main>

</body>

</html>