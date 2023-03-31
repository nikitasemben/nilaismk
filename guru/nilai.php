<?php include('../template/header.php'); ?>

<div class="sidebar pe-6 pb-3">
    <?php include('../template/sidebar.php'); ?>
</div>
<div class="content">
    <?php include('../template/navbar.php'); ?>
    <div class="container-fluid pt-4 px-4">
        <div class="bg-light text-center rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Data Nilai</h6>
                <a href="">Show All</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Nama Siswa</th>
                            <th scope="col">NISN</th>
                            <th scope="col">Jenis Kelamin</th>
                            <th scope="col">Nama Mata Pelajaran</th>
                            <th scope="col">Wali Kelas</th>
                            <th scope="col">Nilai KKM</th>
                            <th scope="col">Tugas</th>
                            <th scope="col">Praktikum</th>
                            <th scope="col">Remedial</th>
                            <th scope="col">Ujian</th>
                            <th scope="col">Ulangan</th>
                            <th scope="col">Total</th>
                            <th scope="col">Rata</th>
                            <th colspan="2">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>Nama Siswa</td>
                            <td>NISN</td>
                            <td>Jenis Kelamin</td>
                            <td>Mata Pelajaran</td>
                            <td>Wali Kelas</td>
                            <td>KKM</td>
                            <td>Tugas</td>
                            <td>Praktikum</td>
                            <td>Remedial</td>
                            <td>Ujian</td>
                            <td>Ulangan</td>
                            <td>Total</td>
                            <td>Rata-rata</td>
                            <td>Ulangan</td>
                            <td><a class="btn btn-sm btn-primary m-2" href="">Detail</a></td>
                            <td><a class="btn btn-sm btn-success m-2" href="">Edit</a></td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <a class="btn btn-sm btn-success m-2" href="">Tambah</a></td>
    </div>
</div>
</div>

<?php include('../template/footer.php'); ?>