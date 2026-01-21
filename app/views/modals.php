
<div id="modalEdit" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modalEdit')">×</span>
        <h2>Editar Usuário</h2>
        
        <form method="POST" action="<?= BASE_URL ?>index.php?action=edit" onsubmit="return validateModalForm()">
            <input type="hidden" id="edit-id" name="id">
            <input type="text" id="edit-nome" name="nome" placeholder="Nome" required>
            <input type="email" id="edit-email" name="email" placeholder="Email" required>
            <input type="text" id="edit-telefone" name="telefone" placeholder="Telefone" required>
            <button type="submit">Salvar</button>
        </form>
    </div>
</div>

<div id="modalDelete" class="modal" style="display:none;">
    <div class="modal-content">
        <span class="close" onclick="closeModal('modalDelete')">&times;</span>
        <h2>Confirmar Exclusão</h2>
        <p>Deseja realmente excluir <strong id="delete-nome"></strong>?</p>
        
        <form method="POST" action="<?= BASE_URL ?>index.php?action=delete">
            <input type="hidden" id="delete-id" name="id">
            
            <button type="submit" class="btn-danger">Confirmar Exclusão</button>
            <button type="button" onclick="closeModal('modalDelete')">Cancelar</button>
        </form>
    </div>
</div>


