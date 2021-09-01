<?php 

    include "../databases/koneksi.php";

    $id_modul       = $_POST['id'];
    $nama_modul     = $_POST['nama_modul'];
    $kelas          = $_POST['kelas'];
    $file_upload    = $_FILES['file_upload']['name'];
    $tmp            = $_FILES['file_upload']['tmp_name'];
    $path           = "../file_upload/";
    $extenstion     = pathinfo($_FILES['file_upload']['name'], PATHINFO_EXTENSION);

    $upload = move_uploaded_file($tmp, $path.$file_upload);

    if ($upload) {
        $update = mysqli_query($connect, "UPDATE tabel_modul SET nama_modul='$nama_modul', kelas='$kelas', file_upload='$file_upload' ");

        if ($update) {
            echo "
            <script>
                alert('data berhasil di Edit!');
                document.location.href = '../index.php';
            </script>
            ";
        }
    } else {
        echo "Gagal...";
    }

?>