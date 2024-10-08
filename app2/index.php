<?php
const API_URL = "https://whenisthenextmcufilm.com/api";
$ch = curl_init(API_URL);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($ch);
$data = json_decode($result, true);
curl_close($ch);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >
    <title>The next MUC film</title>
    <style>
        section {
            margin-top: 50px;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h1 {
            width: 370px;
        }
        p {
            width: 350px;
        }
    </style>
</head>
<body>
    <main>
        <section>
            <div>
                <h1><?= $data["title"] ?></h1>
                <p><?= $data["overview"] ?></p>
            </div>
                <img 
                src="<?= $data["poster_url"]; ?>" 
                alt="Poster from <?= $data["title"]; ?>" 
                width="300"
                style="border-radius: 10px;"
            />
        </section>
    </main>
</body>
</html>