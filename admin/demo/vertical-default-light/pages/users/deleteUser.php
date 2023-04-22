<?php 
    $idUser = $_GET['idUser'];
    settype($idUser, "int");
    deleteUser($idUser);
    echo "<script>
        window.location='?page=userList';
        </script>";
?>