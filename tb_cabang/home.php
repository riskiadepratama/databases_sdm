<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Tambahkan CABANG</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH DATA

            </div>
            <div class="card-body">
              <form action="koneksi.php" method="POST">

              <div class="form-group">
                  <label>ID PERUSAHAAN</label>
                <?php
                      include '../konek.php';
                     
                      $query = mysqli_query($connection,"SELECT * FROM tb_perusahaan"); 
                      $a=" ( ";
                      $b=" ) ";?>
                  <select name="id_perusahaan" class="form-control">
                  <?php while($row1=mysqli_fetch_array($query)){?>
                  <option value= "<?php echo $row1['id_perusahaan']?>"><?php echo $row1['id_perusahaan'].$a.$row1['nama_pn'].$b;?></option>
                  <?php }   ?>
                  </select> </div>

                
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama_cb" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat_cb" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>NO HP</label>
                  <input type="bigint" name="hp_cb" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email_cb" class="form-control" required>
                </div>

                
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script src="../js/jquery.min.js"></script>
    <script src="../js/bootstrap.js"></script>
  </body>
</html>