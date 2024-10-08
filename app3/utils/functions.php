<?php
declare(strict_types=1);

function render_template($template, $data = [])
{
    extract($data);
    require "template/$template.php";
}

function get_data(string $url): array
{
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $result = curl_exec($ch);
    $data = json_decode($result, true);
    curl_close($ch);
    return $data;
}

function days_until(array $data): string
{
    $days = $data["days_until"];
    return match (true) {
        $days === 0 => "Today is the premiere",
        $days === 1 => "Tomorrow is the premiere",
        $days < 20  => "Coming out very soon",
        default     => "There's still a long way to go until the premiere",
    };
}