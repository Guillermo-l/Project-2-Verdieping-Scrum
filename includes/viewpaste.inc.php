<?php
include "./dbh.inc.php";

// ?uid=gtl3vdy9

$uniqueidGet = $_GET["uid"];

$sql = "SELECT * FROM pastes WHERE uniqueid=$uniqueidGet;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $pasteShow = $row['paste'];
        
    }
}
