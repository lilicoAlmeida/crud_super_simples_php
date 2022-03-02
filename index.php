<!-- utilzando bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<?php require 'config.php';

$adicionar = 'adicionar.php';
$botao = '"btn btn-outline-success"';
?>

<?php $sql = $pdo->query("SELECT * FROM usuarios");  //fazendo o select 
if ($sql->rowCount() > 0) { // contando e vendo se existem itens no banco
    $lista = $sql->fetchAll(PDO::FETCH_ASSOC); // fazendo associação do item chave e valor
}
?>

<br>

<center>
    <h1 class="btn btn-secondary">CRUD Simples Cadastro de Usuario</h1>
</center>

<center >

<br>
<?php
if ($sql->rowCount() == 0) {
    echo ("<a class=" . $botao . " href=" . $adicionar . ">adicionar usuario</a>");
}
?>
<br><br>
</center>

<table class="table">
    <thead class="thead-dark">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">NOME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">AÇÔES</th>
        </tr>

        <thead class="thead-dark">
            <?php foreach ($lista as $usuario) : ?>

                <td scope="row"><?php echo  $usuario['id'];    ?></td>
                <td scope="row"><?php echo  $usuario['nome'];  ?></td>
                <td scope="row"><?php echo  $usuario['email']; ?></td>


                <td>
                    <a class="btn btn-success " href="adicionar.php">adicionar usuario</a>
                    <a class="btn btn-secondary  " href="editar.php?id=<?= $usuario['id']; ?>">Editar</a>
                    <a class="btn btn-danger  " href="excluir.php?id=<?= $usuario['id']; ?>">Excluir</a>
                </td>

                </tr>
            <?php endforeach; ?>
</table>