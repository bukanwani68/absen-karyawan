<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Absen Karyawan</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              ABSEN KEHADIRAN
            </div>
            <div class="card-body">
              <form action="simpan.php" method="POST">
                
                <div class="form-group">
                  <label>NIK</label>
                  <input type="number" name="nik" placeholder="Masukkan NIK Anda" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_lengkap" placeholder="Masukkan Nama Lengkap" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jabatan</label>
                <br>
                  <select name="jabatan">
                    <option>Staf</option>
                    <option>Manager</option>
                    <option>Direktur</option>
                  </select>
                </div>

                <div class="form-group">
                  <label>Jam Masuk</label>
                  <input type="time" name="jam_masuk" class="form-control">
                </div>
         
                <button type="submit" class="btn btn-primary">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

                <br>
                <div class="text-center" style="margin-top: 15px">
                Sudah Mau Pulang? <a href="keluar.php">Klik Disini</a>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>