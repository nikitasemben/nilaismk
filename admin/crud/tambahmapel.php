<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <h3 class="text-gray-900">Tambah Mata Pelajaran</h3>
        </div>
    </div>

    <form>
        <div class="mb-3">
            <label for="nama_mapel">Nama Mata Pelajaran</label>
            <input type="text" name="nama_mapel" id="nama_mapel" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="id_mapel">Id Mata Pelajaran</label>
            <input type="text" name="id_mapel" id="id_mapel" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="id_guru"> Id Guru</label>
            <input type="text" name="id_guru" id="id_guru" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="kd_mapel">Kode Mata Pelajaran</label>
            <input type="text" name="kd_mapel" id="kd_mapel" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="mapel"> Guru Mata Pelajaran</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Guru Mata Pelajaran</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
            </select>
        </div>
    </form>