<?php
declare(strict_types=1);

class Task
{
    public function __construct(
        private PDO $pdo
    ) {}

    public function get_all() : string {
        $stmt = $this->pdo->query("SELECT * FROM task");
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $response = json_encode($res);
        return $response;
    }

    public function insert() {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            try {
                $json = file_get_contents('php://input');
                $data = json_decode($json, true);
                if (!$data) {
                    $response = [
                        "message" => "No data provided"
                    ];
                    return json_encode($response);
                }
                $name = $data["name"];
                
                $stmt = $this->pdo->prepare("INSERT INTO task (name) VALUES (?);");
                $stmt->execute([$name]);
                $response = [
                    "message" => "Insert new task"
                ];
                return json_encode($response);
            } catch (PDOException $e) {
                $response = [
                    "message" => "Error to try insert new task"
                ];
                return json_encode($response);
            }
        }
        http_response_code(405);
        $response = [
            "message" => "Method not allowed"
        ];
        return json_encode($response);
    }
}