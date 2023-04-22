<?php 
    $idLoai = $_GET['idLoai'];
    settype($idLoai, "int");
    deleteProductType($idLoai);
    echo "<script>
        window.location='?page=productTypeList';
        </script>";
?>