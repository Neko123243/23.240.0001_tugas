<?php
include 'database_0001.php';
$db_0001 = new Database;
// var_dump($db_0001);
$db_0001->rinciData();
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="background-image: url(../Crd-oop-PHP/BG_CS_S1Final_77.jpg);background-size: cover;">
  <div class="Container mt-3">
    <div class="card mb-3" style="max-width: 700px;">
  <div class="row g-0">
    <div class="col-md-4">
    <img method="POST" action="input.php?aksi=rinci" src="../" alt="Shiroko" width="500px" height="500px" class="img-fluid rounded-start">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Detail Pengguna :</h5>
        <!-- tabel untuk menampilkan data user -->
    <table class="table table-hover">
  <thead>
  <?php
    $nomor = 1;
    foreach ($db_0001->rinciData() as $dataUsers){
    ?>
    <tr>
      <p>Id : <?php echo $nomor++ ?></p>
      <p>Nama : <?php echo $dataUsers['nama']; ?></p>
      <p>Alamat : <?php echo $dataUsers['alamat']; ?></p>
      <p>No Hp : <?php echo $dataUsers['no_hp']; ?></p>
      <p>Jenis Kelamin : <?php echo $dataUsers['jns_kelamin']; ?></p>
    </tr>
  </thead>

  <tbody>
    <?php
    }
    ?>
  </tbody>
</table>
      </div>
    </div>
  </div>
</div>
  </div>  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>


