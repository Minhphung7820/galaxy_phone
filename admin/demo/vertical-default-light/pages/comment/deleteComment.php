<?php 
    $idBL = $_GET['idBL'];
    settype($idBL, "int");
    deleteComment($idBL);
    echo "<script>
        window.location='?page=comment';
        </script>";
?>