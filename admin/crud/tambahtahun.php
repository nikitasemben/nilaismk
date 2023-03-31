<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <h3 class="text-gray-900">Tambah Tahun Ajaran</h3>
        </div>
    </div>

    <form>
        <div class="mb-3">
            <label for="id_tahun">Tahun Id</label>
            <input type="text" name="id_tahun" id=" id_tahun" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="kls_id"> Id Kelas</label>
            <input type="text" name="kls_id" id="kls_id" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="mapel"> Semester</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Semester</option>
                <option value="1">Ganjil</option>
                <option value="2">Genap</option>
            </select>
        </div>
    </form>