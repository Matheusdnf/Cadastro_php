<!-- Modal Editar -->
<div id="modalEdit" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modalEdit')">×</span>
        <h2>Editar Usuário</h2>
        
        <form method="POST" action="<?= BASE_URL ?>controllers/handle_user.php" onsubmit="return validateModalForm()">
            <input type="hidden" id="edit-id" name="id">
            <input type="text" id="edit-nome" name="nome" placeholder="Nome" required>
            <input type="email" id="edit-email" name="email" placeholder="Email" required>
            <input type="text" id="edit-telefone" name="telefone" placeholder="Telefone" required>
            <button type="submit">Salvar</button>
        </form>
    </div>
</div>

<!-- Modal Excluir -->
<div id="modalDelete" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modalDelete')">×</span>
        <h2>Confirmar Exclusão</h2>
        
        <p>Deseja realmente excluir <strong id="delete-nome"></strong>?</p>
        
        <form method="POST" action="<?= BASE_URL ?>controllers/handle_user.php">
            <input type="hidden" id="delete-id" name="id">
            <input type="hidden" name="action" value="delete">
            <button type="submit" class="btn-danger">Excluir</button>
            <button type="button" onclick="closeModal('modalDelete')">Cancelar</button>
        </form>
    </div>
</div>

<!-- Modal Alerta -->
<div id="modalAlert" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modalAlert')">×</span>
        <p id="alert-message"></p>
        <button onclick="closeModal('modalAlert')">OK</button>
    </div>
</div>

<!-- Modal Sucesso -->
<div id="modalSuccess" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modalSuccess')">×</span>
        <p>✅ Operação realizada com sucesso!</p>
        <button onclick="closeModal('modalSuccess')">OK</button>
    </div>
</div>