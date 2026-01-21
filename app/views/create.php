<?php
require __DIR__ . '/../../config/config.php';
require __DIR__ . '/../../helpers.php';


if ($_SERVER['REQUEST_METHOD'] === 'GET' && !isset($_SESSION['error'])) {
    clearOld();
}

require 'layout.php';
renderHeader("Novo Usuário");
?>

<div class="form-container">
    <h1>Cadastrar Usuário</h1>

    <?php if ($error = getError()): ?>
        <div class="error-message" style="color:red; margin-bottom: 15px;">
            <?= htmlspecialchars($error) ?>
        </div>
    <?php endif; ?>

    <form method="POST" action="<?= BASE_URL ?>controllers/handle_user.php" onsubmit="return Validate_register();">
        <input type="text" name="nome" value="<?= htmlspecialchars(old('nome')) ?>" placeholder="Nome" required>
        <input type="email" name="email" value="<?= htmlspecialchars(old('email')) ?>" placeholder="Email" required>
        <input type="text" name="telefone" id="telefone" value="<?= htmlspecialchars(old('telefone')) ?>" placeholder="Telefone: (99) 99999-9999" required>
        <button type="submit">Cadastrar</button>
    </form>
</div>

<script src="<?= BASE_URL ?>valiation/validation.js"></script>