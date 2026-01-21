<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!function_exists('setError')) {
    function setError($msg) {
        $_SESSION['error'] = $msg;
    }
}

if (!function_exists('getError')) {
    function getError() {
        if (!empty($_SESSION['error'])) {
            $msg = $_SESSION['error'];
            unset($_SESSION['error']);
            return $msg;
        }
        return null;
    }
}

if (!function_exists('old')) {
    function old($key) {
        return $_SESSION['old'][$key] ?? '';
    }
}

if (!function_exists('setOld')) {
    function setOld($data) {
        $_SESSION['old'] = $data;
    }
}

if (!function_exists('clearOld')) {
    function clearOld() {
        unset($_SESSION['old']);
    }
}

if (!function_exists('setFieldError')) {
    function setFieldError($field, $msg) {
        if (!isset($_SESSION['field_errors'])) $_SESSION['field_errors'] = [];
        $_SESSION['field_errors'][$field] = $msg;
    }
}

if (!function_exists('getFieldError')) {
    function getFieldError($field) {
        if (!empty($_SESSION['field_errors'][$field])) {
            $msg = $_SESSION['field_errors'][$field];
            unset($_SESSION['field_errors'][$field]); 
            return $msg;
        }
        return null;
    }
}