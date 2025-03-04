<?php
include("data.php");

header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type");

$connection = mysqli_connect(
    $dbData["server"],
    $dbData["user"],
    $dbData["password"],
    $dbData["db"]
);

if (!$connection) {
    http_response_code(500);
    echo json_encode(["error" => "connection failed" . mysqli_connect_error()]);
    exit;
}

$result = mysqli_query($connection, "SELECT * FROM inscriptions");

$data = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $data[] = $row;
    }
}

echo json_encode($data);

mysqli_close($connection);
