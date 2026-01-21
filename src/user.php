<?php
class User {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function all() {
        return $this->pdo
            ->query("SELECT * FROM users ORDER BY id DESC")
            ->fetchAll(PDO::FETCH_ASSOC);
    }

    public function create($nome, $email, $telefone) {
        $stmt = $this->pdo->prepare(
            "INSERT INTO users (nome, email, telefone) VALUES (?, ?, ?)"
        );
        return $stmt->execute([$nome, $email, $telefone]);
    }

    public function find($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $nome, $email, $telefone) {
        $stmt = $this->pdo->prepare(
            "UPDATE users SET nome=?, email=?, telefone=? WHERE id=?"
        );
        return $stmt->execute([$nome, $email, $telefone, $id]);
    }

    public function delete($id) {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE id = ?");
        return $stmt->execute([$id]);
    }
}
