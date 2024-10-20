<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OOP PHP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="Container mt-3">
        <h1>CRUD OOP PHP</h1>
        <h4>Tambah Data</h4>
        <hr class="mt-0">
        <!-- form tambah data -->
        <form method="POST" action="proses.php?aksi=tambah">
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat"> </input>
            </div>
            <div class="mb-3">
                <label for="no_hp" class="form-label">No HP</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp">
            </div>

            <div class="mb-3">
            <label for="gambar">Pilih Gambar:</label><br>
            <input type="file" name="gambar" id="gambar" accept="image/*" required><br><br>
            </div>

            <td style="vertical-align: text-top;"><label>Jenis Kelamin : </label></td><br>
                <td>
                    <input type="radio" name="jns_kelamin" id="jns_kelamin" value="Laki-Laki">
                    <label for="jns_kelamin">Laki-Laki</label> <br>
                    <input type="radio" name="jns_kelamin" id="jns_kelamin" value="Perempuan">
                    <label for="jns_kelamin">Perempuan</label>
                </td><br>

            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
        
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>