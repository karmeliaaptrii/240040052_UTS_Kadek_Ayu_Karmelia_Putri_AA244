<?php

class Produk {

    private $conn;

    public function __construct($db){
        $this->conn = $db;
    }

    public function tambahProduk($nama,$kategori,$stok){

        if($stok < 0){
            echo "Stok tidak boleh negatif";
            return;
        }

        $query = "INSERT INTO produk(nama_produk,kategori,stok)
                  VALUES('$nama','$kategori','$stok')";

        $this->conn->query($query);
    }

    public function tampilProduk(){

        $query = "SELECT * FROM produk";

        return $this->conn->query($query);

    }

}

?>