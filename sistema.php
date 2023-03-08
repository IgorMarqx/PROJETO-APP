<?php
session_start();
if ((!isset($_SESSION['user']) == true) and (!isset($_SESSION['password']) == true)) {
    unset($_SESSION['user']);
    unset($_SESSION['password']);
    header('Location: ./index.php');
} else {
    $logado = $_SESSION['user'];
}

?>

<!DOCTYPE html>
<html lang="en">

<?php
    include_once('./views/styles.php')
?>

<body>
    <?php
    include_once('./views/header.php');
    include_once('./views/main.php');
    ?>


</body>

</html>