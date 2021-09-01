<?php 

    include "../databases/koneksi.php";

    $id = $_GET['id'];

    $query  = mysqli_query($connect, "DELETE FROM tabel_modul WHERE id_modul='$id' ");

    header("location: ../index.php");

?>