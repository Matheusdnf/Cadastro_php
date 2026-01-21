<?php
require '../config/database.php';
require '../src/User.php';

$user = new User($pdo);
$data = $user->find($_GET['id']);

if ($_POST) {
    $user->update(
        $_GET['id'],
        $_POST['nome'],
        $_POST['email'],
        $_POST['telefone']
    );
    header("Location: index.php");
    exit;
}
?>

<form method="POST">
  <h2>Editar Usuário</h2>
  <input name="nome" value="<?= $data['nome'] ?>" required>
  <input name="email" value="<?= $data['email'] ?>" required>
  <input name="telefone" value="<?= $data['telefone'] ?>" required>
  <button>Atualizar</button>
</form>
