<?php

$conn = mysqli_connect('localhost', 'root', '', 'paste_bit');

function checkKeys($conn, $randStr)
{
    $sql = "SELECT * FROM keystring";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['keystringkey'] == $randStr) {
            $keyExists = true;
            break;
        } else {
            $keyExists = false;
        }
    }

    return $keyExists;
}

function generateKey($conn)
{
    $keyLength = 8;
    $str = "0132465789abcdefghijklmnopqrstuvwxyz";
    $randStr = substr(str_shuffle($str), 0, $keyLength);

    // $checkKey = checkKeys($conn, $randStr);

    // while ($checkKey == true) {
    //     $randStr = substr(str_shuffle($str), 0, $keyLength);
    //     $checkKey = checkKeys($conn, $randStr);
    // }

    return $randStr;
}

$uniqueid = generateKey($conn);
$paste_Title = $_POST['pasteTitle'];
$syntax = $_POST['syntax'];
$paste = $_POST['paste'];


if ($conn->connect_error) {
    echo 'database connection error';
}

$stmt = $conn->prepare("INSERT INTO pastes (uniqueid, paste, syntax, pasteTitle) VALUES (?, ?, ?, ?)");

$stmt->bind_param($uniqueid, $paste, $syntax, $paste_Title);

if($stmt->execute()) {
    echo "succes";
} else {
    echo "failure";
}

?>
