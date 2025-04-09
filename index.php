<?php

$url = "https://api101.up.railway.app/quote";

$response = file_get_contents($url);

$data = json_decode($response);

if ($data && is_array($data)) {
    echo "<ul>";
    foreach ($data as $quote) {
        echo "<li><strong>Author:</strong> " . htmlspecialchars($quote->author) . "<br>";
        echo "<strong>Quote:</strong> " . htmlspecialchars($quote->quote) . "<br>";
        echo "<strong>Source:</strong> <a href='" . htmlspecialchars($quote->source) . "' target='_blank'>" . htmlspecialchars($quote->source) . "</a></li>";
    }
    echo "</ul>";
} else {
    echo "Error al obtener los datos de la API.";
}

?>