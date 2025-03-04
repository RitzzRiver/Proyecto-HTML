<?php

include("data.php");

header("Access-Control-Allow-Origin: http://localhost:5173");
header("Access-Control-Allow-Methods: POST");
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

//TODO make this valid using a single API file
if (!$_SERVER['REQUEST_METHOD'] === 'POST' || !$_SERVER['REQUEST_METHOD'] === 'GET') {
    http_response_code(405);
    echo "forbiden method";
} else {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //required 
        $name = mysqli_real_escape_string($connection, $_POST['name']);
        $email = mysqli_real_escape_string($connection, $_POST['email']);
        $phoneNumber = mysqli_real_escape_string($connection, $_POST['phoneNumber']);
        $formation = mysqli_real_escape_string($connection, $_POST['formation']);

        //optional
        $birthday = mysqli_real_escape_string($connection, $_POST['birthday']);
        $gender = mysqli_real_escape_string($connection, $_POST['gender']);
        $comment = mysqli_real_escape_string($connection, $_POST['comment']);

        $sql = "INSERT INTO
            inscriptions
            (name, email, phoneNumber, birthday, gender, formation, comment)
            VALUES
            ('$name', '$email', '$phoneNumber', '$birthday', '$gender', '$formation', '$comment')";

        if (mysqli_query($connection, $sql)) {
            echo json_encode(["success" => "data get success"]);
        } else {
            http_response_code(500);
            echo json_encode(["error" => "ERROR: " . mysqli_error($connection)]);
        }

        mysqli_close($connection);
    } elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
        $result = mysqli_query($connection, "SELECT * FROM inscriptions");

        $data = [];

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }

        echo json_encode($data);

        mysqli_close($connection);
    }
}
