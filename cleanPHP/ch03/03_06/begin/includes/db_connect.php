<?php
$message = '';
try {
    $db = new PDO('mysql:host=localhost;dbname=handp', 'rewrite', 'lynda');
} catch (PDOException $e) {
    $message = $e->getMessage();
}