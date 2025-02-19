<?php

function jalan($inilah)//function to echo the data
{
    $inilah = array_reverse($inilah); 
    $indxing = 1;

    foreach ($inilah as $baris) {
        echo '<tr>';
        echo '<th>' . $indxing  . '</th>';
        echo '<th>' . $baris[1] . '</th>';
        echo '<th>' . $baris[2] . '</th>';
        echo '<th name="3">' . $baris[3] . '</th>';
        echo '<th><form method="POST" action="">';
        echo '<button type="submit" name="btt" value="' . htmlspecialchars($baris[0]) . '">remove</button>';
        echo '</form></th>';
        echo '</tr>';
        $indxing += 1; 
    };
// ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



    // ntuk nge delete data dari database/////////////////////////
    if (isset($_POST['btt'])) {
        $idToDelete = (int)$_POST['btt']; // Cast to int for safety
        $conne2 = new mysqli("localhost", "root", "", "jadwal_tidur");

        $stmt = $conne2->prepare("DELETE FROM inventor WHERE id = ?");
        $stmt->bind_param("i", $idToDelete); // "i" indicates the type is integer
        $stmt->execute();
        $stmt->close();
        $conne2->close();
        header('Location: '.$_SERVER["PHP_SELF"], true, 303);
    };

 
}

?>