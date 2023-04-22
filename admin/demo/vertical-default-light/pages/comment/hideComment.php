<?php 
    $idBL = $_GET['idBL'];
    settype($idBL, "int");
    $comment = getComment($idBL);
    if ($comment['anHien']==0) $anHien=1; else $anHien=0;
    hideComment($anHien,$idBL);
    echo "<script>
        window.location='?page=comment';
        </script>";
?>