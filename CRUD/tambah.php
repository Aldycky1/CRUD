<?php include('header.php') ?><br>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-6">
      <div class="card">
        <div class="card-header bg-dark text-white text-center"> Tambah Data Mahasiswa</div>
        <div class="card-body">
          <form method="POST" action="tambahAct.php">
            <div class="form-group">
              <label>Nim Mahasiswa</label>
              <input type="number" class="form-control" name="nim_mahasiswa">
            </div>
            <div class="form-group">
              <label>Nama Mahasiswa</label>
              <input type="text" class="form-control" name="nama_mahasiswa">
            </div>

            <div class="form-check">
              <input type="radio" class="form-check-input" name="jenis_kelamin" value="Laki-laki">
              <label class="form-check-label">
                Laki-laki
              </label>
            </div>

            <div class="form-check">
              <input type="radio" class="form-check-input" name="jenis_kelamin" value="Perempuan">
              <label class="form-check-label">
                Perempuan
              </label>
            </div>

            <div class="form-group">
              <label>Agama</label>
              <select class="form-control" name="agama">
                <option>----</option>
                <option value="Islam"> ISLAM</option>
                <option value="Kristen"> KRISTEN</option>
                <option value="Hindu"> HINDU</option>
                <option value="Budha"> BUDHA</option>
              </select>
            </div>

            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input type="date" class="form-control" name="tanggal_lahir">
            </div>

            <div class="form-group">
              <label>No Telepon</label>
              <input type="number" class="form-control" name="no_telepon">
            </div>
            <div class="form-group">
              <label>Alamat</label>
              <textarea name="alamat" class="form-control" cols="30" rows="10"></textarea>
            </div>
            <input type="submit" class="btn btn-primary btn-block" value="SIMPAN DATA">
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include('footer.php') ?>