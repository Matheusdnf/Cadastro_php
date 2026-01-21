<?php

$id       = $_POST['id'] ?? null;
$nome     = trim($_POST['nome'] ?? '');
$email    = trim($_POST['email'] ?? '');
$telefone = trim($_POST['telefone'] ?? '');

if (!$nome || !$email || !$telefone) {
    setError("Todos os campos são obrigatórios.");
    setOld($_POST);
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    setError("E-mail inválido.");
    setOld($_POST);
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}

if (!preg_match('/^\(\d{2}\)\s?\d{4,5}-\d{4}$/', $telefone)) {
    setError("Formato de telefone inválido. Use (99) 99999-9999.");
    setOld($_POST);
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit;
}

if ($id) {
    UserController::update($id, $nome, $email, $telefone);
} else {
    UserController::store($nome, $email, $telefone);
}

clearOld();
header("Location: " . BASE_URL . "index.php?success=1");
exit;