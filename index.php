<?php 

    include "databases/koneksi.php";
    $query      = mysqli_query($connect, "SELECT * FROM tabel_modul");
    $results    = mysqli_fetch_all($query, MYSQLI_ASSOC);

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />

    <title>tabel moduk PKK</title>
  </head>
  <body>

    <h1 class="text-center mb-5 mt-3">Data Modul PKK</h1>

    <div class='container'>
    <a href="assets/tambah.php" class="btn btn-outline-primary"><i class="fas fa-plus me-2"></i>Tambah Data</a>
        <table class="table table-bordered table-hover mt-3">
            <thead>
                <tr class="text-center">
                    <th scope="col">ID Modul</th>
                    <th scope="col">Nama Modul</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">File Upload</th>
                    <th scope="col">Options</th>                    
                </tr>
            </thead>
            <tbody>
                <?php foreach ($results as $result) : ?>
                    <tr class="text-center content">
                        <th width="100px"><?= $result['id_modul']; ?></th>
                        <td><?= $result['nama_modul']; ?></td>
                        <td><?= $result['kelas']; ?></td>
                        <td><a href="download.php?file_upload=<?= $result['file_upload'] ?>"><?= $result['file_upload']; ?></a></td>
                        <td><a href="assets/edit.php?id=<?= $result['id_modul']?>" class="btn btn-success btn-sm option"><i class="fas fa-edit"></i>EDIT</a> | 
                        <a href="assets/delete.php?id=<?= $result['id_modul']?>" onclick="return confirm('Apakah anda yakin akan menghapus <?= $result['nama_modul'] ?> ?');" class="btn btn-danger btn-sm option"><i class="fas fa-trash-alt"></i>HAPUS</a></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>