 <?php
require __DIR__ . '/../config/config.php';
require __DIR__ . '/../helpers.php';
require __DIR__ . '/../app/models/UserController.php';
require __DIR__ . '/../app/views/layout.php';

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

    <button

      class="btn-edit"

      data-id="<?= $u['id'] ?>"

      data-nome="<?= htmlspecialchars($u['nome']) ?>"

      data-email="<?= htmlspecialchars($u['email']) ?>"

      data-telefone="<?= htmlspecialchars($u['telefone']) ?>">

      Editar

    </button>


    <button

      class="btn-delete"

      data-id="<?= $u['id'] ?>"

      data-nome="<?= htmlspecialchars($u['nome']) ?>">

      Excluir

    </button>

</td>


</tr>

<?php endforeach; ?>
</table>

<script src="<?= BASE_URL ?>js/scripts.js"></script>

<?php include __DIR__ . '/../app/views/modals.php';
renderFooter();

?> 