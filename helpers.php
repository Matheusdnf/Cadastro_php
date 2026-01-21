<?php
session_start();

function setError($msg) {
    $_SESSION['error'] = $msg;
}

function getError() {
    if (!empty($_SESSION['error'])) {
        $msg = $_SESSION['error'];
        unset($_SESSION['error']);
        return $msg;
    }
    return null;
}

function old($key) {
    return $_SESSION['old'][$key] ?? '';
}

function setOld($data) {
    $_SESSION['old'] = $data;
}

function clearOld() {
    unset($_SESSION['old']);
}

function setFieldError($field, $msg) {
    if (!isset($_SESSION['field_errors'])) $_SESSION['field_errors'] = [];
    $_SESSION['field_errors'][$field] = $msg;
}

function getFieldError($field) {
    if (!empty($_SESSION['field_errors'][$field])) {
        $msg = $_SESSION['field_errors'][$field];
        unset($_SESSION['field_errors'][$field]); 
        return $msg;
    }
    return null;
}
