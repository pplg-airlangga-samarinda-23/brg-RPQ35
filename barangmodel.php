<?php
class barangmodel{
    private $koneksi;

    public function __construct(mysqli $koneksi){
        $this->koneksi= $koneksi; 
    }

    public function getAll (){
        $SQL ="SELECT * FROM `inventor` ORDER BY `id` DESC";
        $rows= $this->koneksi->query($SQL);
        return $rows;
    }
}
?>