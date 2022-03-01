<?php

require 'config.php';

$info = [];

$id = filter_input(INPUT_GET, 'id');

if ($id) {
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {

        $info = $sql->fetch(PDO::FETCH_ASSOC);
    } else {
        header("Location:index.php");
        exit;
    }
} else {
    header("Location:index.php");
    exit;
}
?>

<!-- utilzando bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<br><br><br><br><br><br>

<center>

    <h1><b>Editar Usuario</b></h1>

    <br><br>

    <form method="POST" action="editar_action.php">

        <input type="hidden" name="id" value="<?= $info['id']; ?>" />

        <label class="btn btn-outline-secondary">
            Nome:<br>
            <input type="text" name="name" value="<?= $info['nome']; ?>" />
        </label><br><br><br>

        <label class="btn btn-outline-secondary">
            Email:<br>
            <input type="email" name="email" value="<?= $info['email']; ?>" />
        </label><br><br><br>

        <input class="btn btn-success " type="submit" value="Salvar" />

    </form>

</center>