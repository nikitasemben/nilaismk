<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <h3 class="text-gray-900">Tambah Guru</h3>
        </div>
    </div>

    <form>
        <div class="mb-3">
            <label for="nama">Nama Guru</label>
            <input type="text" name="nama" id=" nama" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="nip">NIP</label>
            <input type="text" name="nip" id="nip" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="id_guru"> Id Guru</label>
            <input type="text" name="id_guru" id="id_guru" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="mapel"> Agama</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Agama</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Islam">Islam</option>
                <option value="Hindu">Hindu</option>
                <option value="Buddha">Buddha</option>
                <option value="Konghucu">Konghucu</option>
                <option value="dll">dll</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="mapel"> Mata Pelajaran</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Mata Pelajaran</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="tgl_lahir">Tanggal Lahir</label>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <input type="text" name="alamat" id="alamat" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="no_hp"> No. Hp</label>
            <input type="text" name="no_hp" id="no_hp" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="jk">Jenis Kelamin</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Jenis Kelamin</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="formFile" class="form-label">Upload Foto</label>
            <input class="form-control" type="file" id="formFile">
        </div>
    </form>