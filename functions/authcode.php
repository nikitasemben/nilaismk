<?php

session_start();
include('../login/conn.php');

if (isset($_POST['btn_login'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $login_quary = "SELECT * from users where email='$email' and password='$password'";
    $login_quary_run = mysqli_query($con, $login_quary);

    if (mysqli_num_rows($login_quary_run) > 0) {
        $_SESSION['auth'] = true;

        $userdata = mysqli_fetch_array($login_quary_run);
        $username = $userdata['nama'];
        $useremail = $userdata['email'];
        $_SESSION['auth_user'] = [
            'nama' => $username,
            'email' => $useremail
        ];

        $_SESSION['message'] = "logged In Successfully";
        header('Location: login/halaman_admin.php');
    } else {
        $_SESSION['message'] = "Invalid Credentials";
        header('Location: ../index.php');
    }
}
