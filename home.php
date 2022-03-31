<?php
require './verifica.php';
if(isset($_SESSION['id']) && !empty($_SESSION['id']));
if(empty($_SESSION['id'])){

   session_destroy();
 header('location: index.php');
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Seja bem Vindo <?php echo $nome ?></h1>

   <a href="logout.php">sair</a>
</body>
</html>