<?php
include_once "dbh.inc.php";

function checkUniqueids($conn, $randStr)
{
    $sql = "SELECT * FROM pastes";
    $result = mysqli_query($conn, $sql);

    while ($row = mysqli_fetch_assoc($result)) {
        if ($row['uniqueid'] == $randStr) {
            $idExists = true;
            break;
        } else {
            $idExists = false;
        }
    }
    return $idExists;
}

function generateUniqueid($conn)
{
    $uniqueidLength = 8;
    $str = "0123456789abcdefghijklmnopqrstuvwxyz";
    $randStr = substr(str_shuffle($str), 0, $uniqueidLength);

    $checkUniqueid = checkUniqueids($conn, $randStr);

    while ($checkUniqueid == true) {
        $randStr = substr(str_shuffle($str), 0, $uniqueidLength);
        $checkUniqueid = checkUniqueids($conn, $randStr);
    }

    return $randStr;
}


$uniqueid = generateUniqueid($conn);
$paste = $_POST['paste'];
$pasteTitle = $_POST['pasteName'];
$syntax = $_POST['highlighting'];

$sql = "INSERT INTO `pastes`(`uniqueid`, `paste`, `syntax`, `pasteTitle`) VALUES ('$uniqueid', '$paste', '$syntax', '$pasteTitle');";
mysqli_query($conn, $sql);

header("location: ./code.php?paste=succes");
