<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <h3 class="text-gray-900">Tambah Wali</h3>
        </div>
    </div>
    <form>
        <div class="mb-3">
            <label for="id_wali">Wali Id</label>
            <input type="text" name="id_wali" id=" id_wali" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="guru_id">Id Guru</label>
            <input type="text" name="guru_id" id="guru_id" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="kelas_id"> Id Kelas</label>
            <input type="text" name="kelas_id" id="kelas_id" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="mapel"> Status</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Status</option>
                <option value="aktif">Aktif</option>
                <option value="tidak aktif">Tidak Aktif</option>
            </select>
        </div>
    </form>