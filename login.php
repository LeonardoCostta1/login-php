<?php
if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {
    require './classes/Connection.php';

    require './classes/User.php';

    $conn = new connection();

    $user = new User();

    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $user->login($email, $senha);

    if ($user->login($email, $senha) == true) {
        if (isset($_SESSION['id'])) {
            header('Location: home.php');
        } else {
            header('Location: index.php');
        }
    } else {
        header('Location: index.php');
    }
} else {
    header('Location: index.php');
}
