<?php
require '../config/database.php';
require '../src/User.php';

$user = new User($pdo);
$users = $user->all();
?>

<!DOCTYPE html>
<html>
<head>
  <title>Usuários</title>
</head>
<body>
  <h1>Lista de Usuários</h1>
  <a href="create.php">Cadastrar novo</a>

  <table border="1">
    <tr>
      <th>Nome</th>
      <th>Email</th>
      <th>Telefone</th>
      <th>Ações</th>
    </tr>

    <?php foreach ($users as $u): ?>
      <tr>
        <td><?= htmlspecialchars($u['nome']) ?></td>
        <td><?= htmlspecialchars($u['email']) ?></td>
        <td><?= htmlspecialchars($u['telefone']) ?></td>
        <td>
          <a href="edit.php?id=<?= $u['id'] ?>">Editar</a>
          <a href="delete.php?id=<?= $u['id'] ?>"
             onclick="return confirm('Excluir usuário?')">Excluir</a>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
</body>
</html>
