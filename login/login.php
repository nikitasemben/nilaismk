<?php
session_start();
include('template_login/header.php');
//require_once 'function/functions.php';
//if (!isset($_SESSION['username'])) {
//  header('Location: login/');
//  exit();
//}else{
//	header("location:./".$_SESSION['lokasi']);
//};
?>


<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-3">
                                </div>
                                <div class="col-9">
                                    <h2>SIPN SMKN 1 Toraja Utara</h2>
                                </div>
                            </div>
                            <br />
                            <div id="message"></div>
                            <div id="login-form">
                                <form method="POST" name="form1" action="recek.php" class="needs-validation" novalidate="">
                                    <div class="form-group">
                                        <label for="email">Username</label>
                                        <input id="email" type="text" class="form-control" name="email" tabindex="1" autocomplete=off required autofocus>
                                        <div class="invalid-feedback">
                                            Silahkan isi Username
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="d-block">
                                            <label for="password" class="control-label">Password</label>
                                            <div class="float-right">

                                            </div>
                                        </div>
                                        <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                                        <div class="invalid-feedback">
                                            Silahkan isi Password
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button name="Submit" id="btn_login" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                            Login
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
    </section>
</div>

</body>

</html>