<?php
try {
    $pdo = new PDO(
        'mysql:host=127.0.0.1;port=3306;dbname=task_list',
        'root',
        'root',
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
    );
    echo "Connection successful!\n";
    print_r($pdo->query('SELECT VERSION()')->fetch());
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage() . "\n";
}
