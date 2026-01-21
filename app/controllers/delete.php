<?php

$id = $_POST['id'] ?? null;

if (!$id) {
    setError("ID não encontrado.");
    header("Location: " . BASE_URL . "index.php");
    exit;
}

try {
    UserController::delete($id);
    
    header("Location: " . BASE_URL . "index.php?deleted=1");
    exit;
} catch (Exception $e) {
    setError("Erro ao excluir: " . $e->getMessage());
    header("Location: " . BASE_URL . "index.php");
    exit;
}