<?php
// require 'utils/functions.php'; <- not recommended
// require_once 'utils/functions.php'; <- first form
// include 'utils/functions.php'; <- not recommended
// include_once 'utils/functions.php';  <- second form
require_once 'utils/functions.php'; // optional use (). Ejm require_once ('utils/functions.php');

const API_URL = "https://whenisthenextmcufilm.com/api";

$data = get_data(API_URL);
$messages = days_until($data);
// $data["messages"] = $messages; <- other form
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
    >
    <title>The next MUC film</title>
</head>

<?php 
render_template("body", array_merge( // <- other form
    $data, 
    ["messages" => $messages]
));
require 'template/style.php';
?>