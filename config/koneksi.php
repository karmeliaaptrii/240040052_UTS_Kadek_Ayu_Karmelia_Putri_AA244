<?php

class Koneksi {

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db = "inventory_db";

    public function connect(){

        $conn = new mysqli(
            $this->host,
            $this->user,
            $this->pass,
            $this->db
        );

        if($conn->connect_error){
            die("Koneksi database gagal");
        }

        return $conn;
    }

}

?>