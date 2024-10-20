<?php
include 'database_0001.php';
$db_0001 = new Database();
// var_dump($db_0001->editData($_GET['id']));
$detail = $db_0001->editData($_GET['id']);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
<body>

<div class="Container mt-3">
        <h1>CRUD OOP PHP</h1>
        <h4>Edit Data</h4>
        <hr class="mt-0">
        <!-- form tambah data -->
        <form method="POST" action="proses.php?aksi=update">
            <?php
            foreach($detail as $dataUser){
            ?>
            
            <!-- untuk id menggunakan type hidden karna id tidak diubah -->
             <input type="hidden" name="id"value="<?php echo $dataUser['id']?>">
             
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $dataUser ['nama'] ?>">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $dataUser ['alamat'] ?>">
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="<?php echo $dataUser ['no_hp'] ?>">
            </div>
            <td style="vertical-align: text-top;"><label>Jenis Kelamin : </label></td><br>
                <td>
                    <input type="radio" name="jns_kelamin" id="jns_kelamin" value="Laki-Laki">
                    <label for="jns_kelamin">Laki-Laki</label> <br>
                    <input type="radio" name="jns_kelamin" id="jns_kelamin" value="Perempuan">
                    <label for="jns_kelamin">Perempuan</label>
                </td><br>
            <?php
            }
            ?>
        <button class="btn btn-primary btn-sm" type="submit" name="confirm" onclick="return confirm('Apakah Anda yakin?')">Confirm</button>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
    