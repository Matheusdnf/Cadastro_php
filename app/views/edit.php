<?php
require __DIR__ . '/../../config/config.php';
require __DIR__ . '/../../helpers.php';
require __DIR__ . '/../../models/UserController.php';

$id   = $_GET['id'] ?? null;
$user = UserController::find($id);

if (!$user) die("Usuário não encontrado");
?>

<h1>Editar Usuário</h1>

<?php if ($error = getError()): ?>
  <div style="color:red"><?= htmlspecialchars($error) ?></div>
<?php endif; ?>

<form method="POST" action="<?= BASE_URL ?>controllers/upsert_user.php" onsubmit="return validateModalForm()">
    <input type="hidden" name="id" id="edit-id" value="<?= $user['id'] ?>">
    <input type="text" name="nome" id="edit-nome" value="<?= htmlspecialchars($user['nome']) ?>">
    <input type="email" name="email" id="edit-email" value="<?= htmlspecialchars($user['email']) ?>">
    <input type="text" name="telefone" id="edit-telefone" value="<?= htmlspecialchars($user['telefone']) ?>">
    
    <button type="submit">Salvar Alterações</button>
</form>
<script src="<?= BASE_URL ?>validation/validation.js"></script>
