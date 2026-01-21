<?php
require_once __DIR__ . '/../config/config.php';
require_once __DIR__ . '/../helpers.php';
require_once __DIR__ . '/../app/models/UserController.php';
require_once __DIR__ . '/../app/views/layout.php';

$p = $_GET['p'] ?? 'lista';          
$action = $_GET['action'] ?? null;   

if ($action === 'edit') {
    
    require_once __DIR__ . '/../app/controllers/handle_user.php';
    exit; 
}

if ($action === 'delete') {
    require_once __DIR__ . '/../app/controllers/delete.php';
    exit;
}

if ($p === 'create') {

    renderHeader("Novo Usuário");
    require_once __DIR__ . '/../app/views/create.php';
    renderFooter();
} else {

    renderHeader("Lista de Usuários");
    
    $users = UserController::all();
    ?>

    <h1>Usuários</h1>

    <?php if ($error = getError()): ?>
        <div style="color:red; margin-bottom:10px"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Email</th>
            <th>Telefone</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($users as $u): ?>
        <tr>
            <td><?= $u['id'] ?></td>
            <td><?= htmlspecialchars($u['nome']) ?></td>
            <td><?= htmlspecialchars($u['email']) ?></td>
            <td><?= htmlspecialchars($u['telefone']) ?></td>
            <td>
                <button class="btn-edit" data-id="<?= $u['id'] ?>" data-nome="<?= htmlspecialchars($u['nome']) ?>" 
                        data-email="<?= htmlspecialchars($u['email']) ?>" data-telefone="<?= htmlspecialchars($u['telefone']) ?>">
                    Editar
                </button>
                <button class="btn-delete" data-id="<?= $u['id'] ?>" data-nome="<?= htmlspecialchars($u['nome']) ?>">
                    Excluir
                </button>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>

    <script src="<?= BASE_URL ?>js/scripts.js"></script>

    <?php 
    include __DIR__ . '/../app/views/modals.php';
    renderFooter();
}