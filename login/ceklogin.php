<?php

//panggil koneksi database
session_start();

include('conn.php');

// $pass = md5($_POST['password']);
// $username = mysqli_escape_string($koneksi, $_POST['email']);
// $password = mysqli_escape_string($koneksi, $pass);
// $akses = mysqli_escape_string($koneksi, $_POST['level']);

// //cek user

// $cek_user = mysqli_query($koneksi, "SELECT * FROM users WHERE email = '$username' and level='$akses' ");
// $user_valid = mysqli_fetch_array($cek_user);

//uji username
// if ($user_valid) {
//     //jika terdaftar
//     //cek password

//     if ($password == $user_valid['password']) {
//         //jika sesuai
//         session_start();
//         $_SESSION['id'] = $user_valid['id'];
//         $_SESSION['email'] = $user_valid['email'];
//         $_SESSION['level'] = $user_valid['level'];

//         //uji level
//         if ($akses == "Admin") {
//             header('location:indexadmin.php');
//         } elseif ($akses == "WaliKelas") {
//             header('location:indexguru.php');
//         }
//     } else {
//         echo "<script>alert('Maaf, Login Gagal, Password anda tidak terdaftar!'); document.location='index.php' </script>";
//     }
// } else {
//     echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!'); document.location='index.php' </script>";
// }

$username = $_POST['email'];
$password = $_POST['password'];


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi, "SELECT * from users where email ='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

// cek apakah username dan password di temukan pada database
if ($cek > 0) {

    $data = mysqli_fetch_assoc($login);

    // cek jika user login sebagai admin
    if ($data['level'] == "Admin") {

        // buat session login dan username
        $_SESSION['email'] = $username;
        $_SESSION['level'] = "Admin";
        // alihkan ke halaman dashboard admin
        header("location:halaman_admin.php");

        // cek jika user login sebagai guru
    } elseif ($data['level'] == "WaliKelas") {
        // buat session login dan username
        $_SESSION['email'] = $username;
        $_SESSION['level'] = "WaliKelas";
        // alihkan ke halaman dashboard guru
        header("location:halaman_guru.php");
    } else {

        // alihkan ke halaman login kembali
        echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!'); document.location='index.php' </script>";
    }
} else {
    echo "<script>alert('Maaf, Login Gagal, Username anda tidak terdaftar!'); document.location='index.php' </script>";
}
