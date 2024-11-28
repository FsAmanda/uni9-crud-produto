<?php
$pdo = new PDO("mysql:host=localhost;dbname=escola", "root", "");  // Ajuste o 'root' e a senha conforme sua configuração
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>