<?php
require '../config/database.php';
require '../src/User.php';

$user = new User($pdo);

if ($_POST) {
    $user->create($_POST['nome'], $_POST['email'], $_POST['telefone']);
    header("Location: index.php");
    exit;
}
?>

<form method="POST">
  <h2>Novo Usuário</h2>
  <input name="nome" placeholder="Nome" required>
  <input name="email" placeholder="Email" required>
  <input name="telefone" placeholder="Telefone" required>
  <button>Salvar</button>
</form>
