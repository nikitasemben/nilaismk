<?php include('../template/header.php'); ?>

<div class="sidebar pe-6 pb-3">
    <?php include('../template/sidebar.php'); ?>
</div>
<div class="content">
    <?php include('../template/navbar.php'); ?>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Data Jurusan</h6>
                <a button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#completeModaljurus">
                    Tambah Data
                    </button></a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Nama Jurusan</th>
                            <th scope="col">Kode Jurusan</th>
                            <th scope="col">Jumlah Jurusan</th>
                            <th scope="col">Jumlah Kelas</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>Nama Jurusan</td>
                            <td>Kode Jurusan</td>
                            <td>Jumlah Jurusan</td>
                            <td>Jumlah Kelas</td>
                            <td><a class="btn btn-sm btn-danger m-2" href="">Delete</a></td>
                            <td><a class="btn btn-sm btn-success m-2" href="">Edit</a></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>

<?php include('../template/footer.php'); ?>

<?php include('modal/modaljurus.php'); ?>