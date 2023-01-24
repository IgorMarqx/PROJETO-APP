<?php
include_once('./controllers/config.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <!-- FOLHA CSS -->
    <link rel="stylesheet" href="./src/login.css">
    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Controle condominal</title>
</head>

<body>
    <div class="top">
        <div class="container">
            <img class="logo" src="./imgs/audaLogo.png" alt="">
            <h1>Auda administrações</h1>
        </div>
    </div>
    <div class="body">
        <div class="container mt-5">
            <div class="formulario mt-3">
                <div class="auda">
                    <img src="./imgs/audaLogo.png" alt="">
                </div>
                <form action="./controllers/login/login.php" method="POST">
                    <label class="us" for="user">Usuario <span>*</span></label>
                    <div class="error">
                        <span><i class="fa-solid fa-triangle-exclamation"></i>Usuario ou senha inválidos, contate o <a href="">administrador(a)</a></span>
                    </div>
                    <input name="user" type="text" id="user" class="form-control" autofocus placeholder="Insira seu usuário">

                    <label class="us" for="pass">Senha <span>*</span></label>
                    <input name="password" type="password" id="pass" class="form-control" placeholder="Informe sua senha">

                    <div class="d-grid gap-2 col-12 mx-auto mt-3">
                        <input name="submit" class="btn" id="submit" type="submit" value="Entrar">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- SCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="./src/login.js"></script>
</body>

</html>