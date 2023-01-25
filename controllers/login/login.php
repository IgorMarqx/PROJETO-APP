<?php
session_start();

// print_r($_REQUEST);

if (isset($_POST['submit']) && !empty($_POST['user']) && !empty($_POST['password'])) {
    // se existir a variavel submit, user e password, o sistema deixa acessa o site 
    include_once('../config.php');
    $user = $_POST['user'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE user = '$user' AND pass = '$password'";

    $resultado = $conexao->query($sql);


    if (mysqli_num_rows($resultado) < 1) {
        unset($_SESSION['user']);
        unset($_SESSION['password']);
        header('Location:  ../../index.php');
    } else {
        $_SESSION['user'] = $user;
        $_SESSION['password'] = $password;
        header('Location: ../../sistema.php');
    }
} else {
    header('Location: ../../index.php');
}
