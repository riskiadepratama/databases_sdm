<?php 
  
  include('../konek.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tb_barang WHERE id_barang = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>EDIT BARANG</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT BARANG
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">

                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>"  class="form-control">
                  <input type="hidden" name="id_barang" value="<?php echo $row['id_barang'] ?>">
                </div>

                <div class="form-group">
                  <label>Stok</label>
                  <input type="int" name="stock" value="<?php echo $row['stock'] ?>" class="form-control">
                </div>

                <div class="form-group">
                  <label>Harga modal</label>
                  <input type="int" name="harga_modal" value="<?php echo $row['harga_modal'] ?>" class="form-control">
                </div>

                
                <div class="form-group">
                  <label>Harga jual</label>
                  <input type="int" name="harga_jual" value="<?php echo $row['harga_jual'] ?>" class="form-control">
                </div>

                


                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </body>
</html>