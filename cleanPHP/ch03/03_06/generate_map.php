<?php
require '../../handp/includes/db_connect.php';

$sql = 'SELECT title, arrangement_id FROM arrangements';

$file = fopen('end/map.txt', 'w');
foreach ($db->query($sql) as $row) {
    fwrite($file, strtolower(str_replace([' ', '!'], ['-', ''], $row['title'])) .
        ' ' . $row['arrangement_id'] . PHP_EOL);
}
fclose($file);
echo 'Done';