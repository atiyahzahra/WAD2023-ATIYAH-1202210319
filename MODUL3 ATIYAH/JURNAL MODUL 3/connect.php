<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->

<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin 
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'modul3_wad';

$conn = mysqli_connect($servername, $username, $password, $dbname);
// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya
    if(!$conn) {
        echo "error";
    }



// 
?>