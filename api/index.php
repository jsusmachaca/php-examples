<?php

require_once 'controllers/taskController.php';
require_once 'config/config.php';

$pdo = get_connection();
// migrate($pdo);

header("Content-Type: application/json");

switch($_SERVER["REQUEST_URI"]){
    case("/api/get-all"):
        $task = new Task($pdo);
        echo $task->get_all();
        break;
    case("/api/insert-task"):
        $task = new Task($pdo);
        echo $task->insert();
        break;
    default:
        echo json_encode([
            "routes" => [
                "/api/get-all",
                "/api/insert",
                "/api/delete",
                "bro"
            ]
            ]);
        break;
}