<?php

require './classes/Connection.php';

$conn = new Connection();

$conn->connection();

if(isset($_SESSION['id']) && !empty($_SESSION['id'])){

require_once './classes/User.php';
$user = new User();

$listLogged = $user->logged($_SESSION['id']);
$nome =  $listLogged['email'];

}else{
    header('localtion: index.php');
}