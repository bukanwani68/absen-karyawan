<?php 
  
  include('koneksi.php');
  
  $nik = $_GET['nik'];
  
  $query = "SELECT * FROM tbl_riwayat_absen WHERE nik = $nik LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Absen</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT ABSEN
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">
                
                <div class="form-group">
                  <label>NIK</label>
                  <input type="number" name="nik" value="<?php echo $row['nik'] ?>" placeholder="Masukkan NIK" class="form-control">
                  <input type="hidden" name="nik_1" value="<?php echo $row['nik'] ?>" placeholder="Masukkan NIK" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama_pegawai" value="<?php echo $row['nama_pegawai'] ?>" placeholder="Masukkan Nama Siswa" class="form-control">
                </div>

                <div class="form-group">
                    <label>Jabatan</label>
                    <br>
                  <select name="jabatan" placeholder="Pilih">
                    <option>Staf</option>
                    <option>Manager</option>
                    <option>Direktur</option>
                  </select>
                </div>

          
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

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