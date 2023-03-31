<?php include('../template/header.php'); ?>

<div class="sidebar pe-6 pb-3">
    <?php include('../template/sidebar.php'); ?>
</div>
<div class="content">
    <?php include('../template/navbar.php'); ?>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Data Wali Kelas</h6>
                <a button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#completeModalwali">
                    Tambah Data
                    </button></a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">ID Wali Kelas</th>
                            <th scope="col">Nama Guru</th>
                            <th scope="col">Kelas</th>
                            <th scope="col">Jurusan</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>ID wali Kelas</td>
                            <td>Nama Guru</td>
                            <td>Kelas</td>
                            <td>Jurusan</td>
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


<?php include('modal/modalwali.php'); ?>