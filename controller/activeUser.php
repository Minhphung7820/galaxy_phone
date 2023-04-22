<?php
    $randomkey = $_GET['randomkey'];
    require_once "../model/hamnguoidung.php";
    $user = getEmailUser();
    foreach($user as $taiKhoan){
        if (substr(md5($taiKhoan['email']),7,-3)==$randomkey){
            activeUser($taiKhoan['email']);
            echo "<script>alert('Tài khoản của bạn đã được kích hoạt thành công');
                    document.location='../';
            </script>";
            break;
        }
    }
?>