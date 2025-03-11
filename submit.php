<?php
$filename = "/tmp/latest_post.txt"; // Use a temporary file to store the latest value

// Handle POST request and save the posted data
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $inputString = $_POST['input_string'] ?? '';
    file_put_contents($filename, $inputString);
    echo "String received!";
}

// Handle GET request and return the latest data
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if (file_exists($filename)) {
        echo file_get_contents($filename);
    } else {
        echo ""; // No data yet
    }
}
?>

