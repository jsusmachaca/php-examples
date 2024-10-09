<?php
function get_connection()
{
    $DB_HOST = getenv('DB_HOST');
    $DB_PORT = getenv('DB_PORT');
    $DB_NAME = getenv('DB_NAME');
    $DB_USER = getenv('DB_USER');
    $DB_PASSWORD = getenv('DB_PASSWORD');
    $uri = "pgsql:host=$DB_HOST;port=$DB_PORT;dbname=$DB_NAME;";

    try {
        $con = new PDO(
            $uri,
            $DB_USER,
            $DB_PASSWORD,
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
        );
        return $con;
    } catch(PDOException $e) {
        echo "Connection refuset".$e->getMessage();
        die($e->getMessage());
    }
}

function migrate(PDO $con)
{
    $con->exec("
    CREATE TABLE IF NOT EXISTS task(
        id SERIAL PRIMARY KEY,
        name VARCHAR UNIQUE,
        done BOOLEAN DEFAULT(false)
    );
    ");
}