<?php
require 'config.php';
?>

<html>
<head>
  <title>CRUD</title>
  <meta charset="UTF-8" />
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
  <section>
    <div class="container">
      <div class="top">
        <h1>CRUD - USERS </H1>
        <a class="add" href="add.php"><span>ADICIONAR USUÁRIO</span></a>
      </div>
      <table>
        <tr>
          <th>Nome</th>
          <th>E-mail</th>
          <th>Ações</th>
<?php
$sql = "SELECT * FROM usuarios";
$sql = $pdo->prepare($sql);
$sql->execute();

if ($sql->rowCount() > 0) {
    foreach ($sql->fetchAll() as $usuario) {

        echo '<tr>';
        echo '<td>'.$usuario['nome'].'</td>';
        echo '<td>'.$usuario['email'].'</td>';
        echo '<td><a class="edit" href="edit.php?id='.$usuario['id'].'">Editar</a> - <a class="delete" href="delete.php?id='.$usuario['id'].'">Excluir</a> </td>';
        echo '</tr>';
    }
}
?>
        </tr>
      </table>
    </div>
  </section>
</body>
</html>