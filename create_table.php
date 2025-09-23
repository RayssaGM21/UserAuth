<?php
declare(strict_types=1);

require_once __DIR__ . '/vendor/autoload.php';

use App\Database\Database;

/** Cria tabela users se não existir */
$db = Database::getConnection();

$db->exec("
    CREATE TABLE IF NOT EXISTS users (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        name TEXT NOT NULL,
        email TEXT NOT NULL UNIQUE,
        password TEXT NOT NULL
    );
");

echo "Tabela criada com sucesso.\n";
