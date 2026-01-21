<?php
require __DIR__ . '/../../config/database.php';

class UserController {

    public static function all() {
        global $pdo;
        return $pdo->query("SELECT * FROM users ORDER BY id ASC")
                   ->fetchAll(PDO::FETCH_ASSOC);
    }

    public static function find($id) {
        global $pdo;
        $stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public static function store($nome, $email, $telefone) {
        global $pdo;
        $stmt = $pdo->prepare(
            "INSERT INTO users (nome, email, telefone) VALUES (?, ?, ?)"
        );
        $stmt->execute([$nome, $email, $telefone]);
    }

    public static function update($id, $nome, $email, $telefone) {
        global $pdo;
        $stmt = $pdo->prepare(
            "UPDATE users SET nome=?, email=?, telefone=? WHERE id=?"
        );
        $stmt->execute([$nome, $email, $telefone, $id]);
    }

    public static function delete($id) {
        global $pdo;
        $stmt = $pdo->prepare("DELETE FROM users WHERE id=?");
        $stmt->execute([$id]);
    }
}
