<?php 
    $idSP = $_GET['idSP'];
    settype($idSP, "int");
    deleteProduct($idSP);
    echo "<script>
        window.location='?page=productList';
        </script>";
?>