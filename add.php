<?php


    ///////untuk menambahkan data ke database 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if(isset($_POST['add'])){
        $inp_barang =htmlspecialchars( @$_POST['nama']);
        $inp_jum = intval(htmlspecialchars(@$_POST['stok']));
        $inp_stat = strval(htmlspecialchars(@$_POST['status']));
        $SQL_out = "INSERT INTO `inventor` (`nama_barang`, `stok`, `status`) VALUES ('$inp_barang', '$inp_jum', '$inp_stat')";
        $conne->query($SQL_out);
        $conne->close();
        header('Location: '.$_SERVER["PHP_SELF"], true, 303);}
    };

?>