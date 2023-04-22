<?php 
    $idTin = $_GET['idTin'];
    settype($idTin, "int");
    deleteBlog($idTin);
    echo "<script>
        window.location='?page=blogList';
        </script>";
?>