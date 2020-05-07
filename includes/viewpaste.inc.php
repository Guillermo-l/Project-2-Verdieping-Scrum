<?php
include "./includes/dbh.inc.php";

// ?uid=gtl3vdy9

$uniqueidGet = $_GET["uid"];

$sql = "SELECT * FROM pastes WHERE uniqueid = '$uniqueidGet';";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);

if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $pasteTitle= $row['pasteTitle'];
        $paste = $row['paste'];
        $syntax= $row['syntax'];
    }
} else {
    $errorMssge = "Voer een geldige url in!";
}