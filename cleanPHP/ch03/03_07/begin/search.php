<?php
require './includes/db_connect.php';

$sql = 'SELECT searchterm FROM searchterms
        WHERE searchterm LIKE :search OR alternative LIKE :search';
$stmt = $db->prepare($sql);
$stmt->execute([':search' => '%' . $_GET['searchterm'] . '%']);
$searchterm = $stmt->fetchColumn();
if ($searchterm) {
    header("Location: search/$searchterm");
} else {
    session_start();
    $_SESSION['not-found'] = $_GET['searchterm'];
    header('Location: search/not-found');
}
exit;