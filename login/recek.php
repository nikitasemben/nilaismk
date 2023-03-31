<?php
$host = "localhost";
$user = "root"; //nama user yang digunakan masuk k database
$password = ""; //password yagn digunakan masuk k database
$database = "nilaismk"; //nama database yang digunakkan
$koneksi = mysqli_connect($host, $user, $password, $database);

//cek koneksi ke database
//jika tidak menampilkan apa-apa artinya koneksi berhasil dilakukan
if (mysqli_connect_errno()) {
    echo "Koneksi gagal : " . mysqli_connect_error();
}

//mengaktifkan session
session_start();

//mengambil data yang dikirim dari form sebelumnya
$username = $_POST['username'];
$password = $_POST['password'];

//mengambil data user di tabel user
$user = mysqli_query($koneksi, "SELECT from use where username='$username' and password='$password'");
//menghitung jumlah data
$cek = mysqli_num_rows($user);

//jika username dan password lebih besar dari 0 maka user ditemukan
if ($cek > 0) {
    $data = mysqli_fetch_assoc($user);
    //jika user adalah admin
    if ($data['level'] == 'admin') {
        //buat session username dan levelnya
        $_SESSION['username'] = $username;
        $_SESSION['level'] = 'admin';

        //arahkan user admin ke halaman admin
        header('location: admin/halaman_admin.php');

        //jika user adalah ketua
    } elseif ($data['level'] == 'wali') {
        //buat session username dan levelnya
        $_SESSION['username'] = $username;
        $_SESSION['level'] = 'wali';

        //arahkan user ketua ke halaman ketua
        header('location:halaman_guru.php');
    }
} else {
    //jika user tidak ditemukan
    header("location:../index.php");
}
