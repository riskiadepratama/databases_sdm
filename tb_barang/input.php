<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Tambahkan Barang</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH Barang

            </div>
            <div class="card-body">
              <form action="barang.php" method="POST">
                
                <div class="form-group">
                  <label>Nama</label>
                  <input type="text" name="nama" class="form-control">
                </div>

                <div class="form-group">
                  <label>Stock</label>
                  <input type="text" name="stock" class="form-control">
                </div>

                <div class="form-group">
                  <label>harga modal</label>
                  <input type="int" name="harga_modal" class="form-control">
                </div>

                <div class="form-group">
                  <label>Harga jual</label>
                  <input type="int" name="harga_jual" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tanggal masuk</label>
                  <input type="date" name="tanggal_masuk" class="form-control">
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