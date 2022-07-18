<?php 
  
  include('../konek.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tb_perusahaan WHERE id_perusahaan = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>EDIT DATA</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT DATA
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>"  class="form-control">
                  <input type="hidden" name="id_supplier" value="<?php echo $row['id_perusahaan'] ?>">
                </div>

                
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>No HP</label>
                  <input type="bigint" name="hp" value="<?php echo $row['hp'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Email</label>
                  <input type="email" name="email" value="<?php echo $row['email'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>tanggal berdiri</label>
                  <input type="date" name="tanggal_berdiri" value="<?php echo $row['tanggal_berdiri'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>NpWp</label>
                  <input type="bigint" name="npwp" value="<?php echo $row['npwp'] ?>" class="form-control">
                </div>
               <br>
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery.min.js"></script>
  </body>
</html>