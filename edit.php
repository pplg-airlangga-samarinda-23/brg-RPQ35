<?php
function mundur($inilah) {
        $inilah = array_reverse($inilah); 
        $indxing = 1;
        echo"only 1 at the time";
        foreach ($inilah as $baris) {
            $mbohco=$baris['3'];
            echo '<tr>';
            echo '<th> <form method="POST" action="">' . $indxing  . '</th>';
            echo '<th><input value=' . $baris[1] . ' name="nama_barang_edit"></input></th>';
            echo '<th><input value=' . $baris[2] . ' name="stok_edit"></input></th>';
            echo "<th><select name='status_edit'>";
            echo '<option value="baik"';?> <?=($baris['3']=='baik')?'selected':''?>  <?php echo '> baik </option>';
            echo '<option value="rusak" ';?><?=($mbohco=='rusak')?'selected':'' ?><?php echo'>rusak</option>';
            echo '</select></th>';
            echo '<th><button type="submit" name="edit" value="' . htmlspecialchars($baris[0]) . '">edit</button>';
            echo '</form></th>';
            echo '</tr>';
            $indxing += 1; 
        };
    }
    if (isset($_POST['edit'])) {
        $idToedit = (int)$_POST['edit']; // Cast to int for safety
        $conne3 = new mysqli("localhost", "root", "", "jadwal_tidur");

        $nama_barang_edit=@$_POST['nama_barang_edit'];
        $stok_edit=@$_POST['stok_edit'];
        $status_edit=@$_POST['status_edit'];
        $stmtn = $conne3->prepare("UPDATE inventor SET `nama_barang`='$nama_barang_edit' , `stok`='$stok_edit' , `status`='$status_edit'  WHERE id = ?");
        $stmtn->bind_param("i", $idToedit); // "i" indicates the type is integer
        $stmtn->execute();
        $stmtn->close();
        $conne3->close();
        header('Location: '.$_SERVER["PHP_SELF"], true, 303);
    }
    ?>