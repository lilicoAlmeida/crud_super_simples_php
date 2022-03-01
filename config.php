<?php
try {
    //connexão com o banco ja trantando erros caso existam
  $pdo = new PDO('mysql:host=mysql;dbname=phpsimples','root' ,'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}


/* teste do banco abaixo:
$sql = $conn->query('SELECT * FROM usuarios');

$dados = $sql->fetchAll();

echo '<pre>';
print_r($dados);

?>

*/
