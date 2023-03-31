<div class="container-fluid">

    <div class="row">
        <div class="col-12">
            <h3 class="text-gray-900">Tambah Pengguna</h3>
        </div>
    </div>


    <form>
        <div class="mb-3">
            <label for="id">Id</label>
            <input type="text" name="id" id="id" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="id_pengguna">Id Pengguna</label>
            <input type="text" name="id_pengguna" id="id_pengguna" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="email"> Email</label>
            <input type="text" name="email" id="email" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="PASSWORD">Password</label>
            <input type="text" name="PASSWORD" id="PASSWORD" class="form-control">
            <div class="invalid-feedback"></div>
        </div>
        <div class="mb-3">
            <label for="mapel"> Akses</label>
            <select class="form-select" aria-label="Default select example">
                <option selected>Akses</option>
                <option value="Admin">Admin</option>
                <option value="Wali Kelas">Wali Kelas</option>
            </select>
        </div>
    </form>