<?php

    ////// buat include dan mentalin masuk tanpa login
    include 'db.php';
    if(!$_SESSION['login']){
        header("location:login.php");
    };
    
    include 'tampilan_and_remove.php';
    include 'add.php';
    include 'edit.php';
    ///// manggil data dari database untuk di tampilkan di table
    
    include 'barangmodel.php';
    $barangmodel = new BarangModel($conne);
    $hasil=$barangmodel->getAll();
    
    /////buat pulang ke laman login
    if(isset($_POST['back'])){
        header("location:login.php");
    }
 

    ////////////////////////edit mode???
        $kondisi_mboh=false;
    if(isset($_POST['editmaybe'])){
        $kondisi_mboh =true;
    }
    if(isset($_POST['liatmaybe'])){
        $kondisi_mboh =true;
    }

    //// buat reset negecegah eror
    $inp_barang=null;
    $inp_jum=null;
    $inp_stat=null;
    // ///////////////////////////
    ?>

    <table>
        <tr>
            <th>no</th>
            <th>nama barang</th>
            <th>stok</th>
            <th>status</th>
            <th>aksi</th>
        </tr>
       <?php

    //////perulangan untuk menampilkan data di table///////////////////////////////////////////////////////////
        while ($baris = $hasil->fetch_row()) {
            if ($baris != null) {
                $inilah[] = $baris; // Add the row to the array
            }
        }

        if (!$kondisi_mboh){
        jalan($inilah); // Call function
        }
        elseif($kondisi_mboh){
            mundur($inilah);
        }
  


?>