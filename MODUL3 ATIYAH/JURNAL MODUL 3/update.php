<!-- Pada file ini kalian membuat coding untuk logika update / meng-edit data mobil pada showroom sesuai id-->
<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
require 'connect.php';

if (isset($_POST['update'])) {
// (2) Tangkap nilai "id" mobil (CLUE: gunakan GET)
    $id = $_GET['id'];
    $nama_mobil = $_POST['nama_mobil'];
    $brand_mobil = $_POST['brand_mobil'];
    $warna_mobil = $_POST['warna_mobil'];
    $tipe_mobil = $_POST['tipe_mobil'];
    $harga_mobil = $_POST['harga_mobil'];


    // (3) Buatkan fungsi "update" yang menerima data sebagai parameter
        // Dapatkan data yang dikirim sebagai parameter dan simpan dalam variabel yang sesuai.
        // Buatkan perintah SQL UPDATE untuk mengubah data di tabel, berdasarkan id mobil
        $update = "UPDATE showroom_mobil SET 
                nama_mobil='$nama_mobil', brand_mobil='$brand_mobil', warna_mobil='$warna_mobil', tipe_mobil='$tipe_mobil', harga_mobil='$harga_mobil' WHERE id=$id";
        // Eksekusi perintah SQL
        $result = mysqli_query($conn, $update);
        // Buatkan kondisi jika eksekusi query berhasil
        
        // Jika terdapat kesalahan, buatkan eksekusi query gagalnya

    // Panggil fungsi update dengan data yang sesuai
    if ($result) {
        echo "<script>alert('Data berhasil diubah')</script>";
        echo "<script>document.location.href = 'list_mobil.php'</script>";
        exit(); 
    } else {
        echo "Error: " . mysqli_error($conn);
    }
} else {
    echo "Permintaan tidak valid.";
}
    
// Tutup koneksi ke database setelah selesai menggunakan database
mysqli_close($conn);
?>
