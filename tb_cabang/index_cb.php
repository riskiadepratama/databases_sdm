<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>DATA BARANG </title>
  </head>

  <body>

  <!-- nav bar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-success">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="../index.php"> HOME  </a>
          </li> 
          <li class="nav-item">
          <a class="nav-link" href="../tb_kategori/index_kt.php"> KATEGORI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../tb_supplier/index_sp.php"> SUPPLIER</a>
          </li>
          <li class="nav-item">
          <a class="nav-link" href="../tb_barang/index_bg.php"> BARANG</a> 
          </li>
          <li class="nav-item">
          <a class="nav-link" href="../tb_perusahaan/index_ps.php"> PERUSAHAAN</a> 
          </li>
          <li class="nav-item">
          <a class="nav-link" href="../tb_member/index_mm.php"> MEMBER</a> 
          </li>
          <li class="nav-item">
          <a class="nav-link" href="../tb_cabang/index_cb.php"> CABANG</a> 
          </li>
          <li class="nav-item">
          <a class="nav-link" href="../tb_kasir/index_ks.php"> KASIR</a> 
          </li>
      </div>
  </div>
</nav>

<!-- isi -->
    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-footer ">
              DATA BARANG
            </div>
            <div class="card-body">
              <a href="home.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                  <th scope="col">ID_BARANG</th>
                  <th scope="col">NAMA_PN</th>
                    <th scope="col">NAMA_CB</th>
                    <th scope="col">ALAMAT</th>
                    <th scope="col">NO HP</th>
                    <th scope="col">EMAIL</th> 
                    
                    
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('../konek.php');
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM tb_cabang inner join tb_perusahaan on tb_perusahaan.id_perusahaan=tb_cabang.id_perusahaan" );
                      while($row = mysqli_fetch_array($query)){?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nama_pn'] ?></td>
                      <td><?php echo $row['nama_cb'] ?></td>
                      <td><?php echo $row['alamat_cb'] ?></td>
                      <td><?php echo $row['hp_cb'] ?></td>
                      <td><?php echo $row['email_cb'] ?></td>
                      
                      
                      <td class="text-center">
                        <a href="edit.php?id=<?php echo $row['id_cabang'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus.php?id=<?php echo $row['id_cabang'] ?>" class="btn btn-sm btn-dark">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>

    <script src="../js/bootstrap.js"></script>
    <script src="../js/jquery.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script>
  </body>
</html>