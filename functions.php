<?php 
// Démarrer la session si nécessaire 
    if (session_status() === PHP_SESSION_NONE) { 
    session_start(); 
    } 
    // Génération token CSRF 
    function csrf_token() { 
        if (empty($_SESSION['csrf'])) { 
        $_SESSION['csrf'] = bin2hex(random_bytes(32)); 
        } 
        return $_SESSION['csrf']; 
    } 
    // Vérification token CSRF 
        function check_csrf($token) { 
        return isset($_SESSION['csrf']) && hash_equals($_SESSION['csrf'], $token); 
    } 