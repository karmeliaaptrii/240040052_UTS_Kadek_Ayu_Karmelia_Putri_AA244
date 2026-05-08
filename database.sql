CREATE DATABASE inventory_db;

USE inventory_db;

CREATE TABLE produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(100),
    kategori VARCHAR(50),
    stok INT
);

CREATE TABLE transaksi (
    id INT AUTO_INCREMENT PRIMARY KEY,
    produk_id INT,
    jumlah INT,
    tanggal TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);