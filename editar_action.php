<?php

require 'config.php';

//pégando dados do formulario
$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'name');
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);

if ($id && $name && $email) {

    $sql = $pdo->prepare("UPDATE usuarios SET nome = :name, email = :email WHERE id = :id");
    $sql->bindvalue(':name', $name);
    $sql->bindvalue(':email', $email);
    $sql->bindvalue(':id', $id);
    $sql->execute();

    header("Location:index.php");
    exit;
} else {

    header("Location:adicionar.php");
    exit;
}
