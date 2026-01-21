<?php

require_once __DIR__ . '/../../config/config.php';

function renderHeader($title = "Sistema de Usuários") {
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <title><?= htmlspecialchars($title) ?></title>
  
  <link rel="stylesheet" href="<?= BASE_URL ?>style/style.css">
  
</head>
<body>
  <nav class="navbar">
    <a href="<?= BASE_URL ?>index.php">Home</a>
    <a href="<?= BASE_URL ?>app/views/create_user.php">Novo Usuário</a>
  </nav>
  <main class="container">
<?php
}

function renderFooter() {
?>
  </main>
  <script src="<?= BASE_URL ?>js/scripts.js"></script>
</body>
</html>
<?php
}
?>
