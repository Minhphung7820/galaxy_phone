<?php
//phương thức lấy dữ liệu 
if ($_SERVER['REQUEST_METHOD'] == "POST") {

    // xử lý đăng nhập
    if (isset($_POST['type_'])) {
        if ($_POST['type_'] == 'login_account') {
            // khai báo amrng lỗi error
            $error = array();
            //kiểm tra email có trống ko
            if (empty($_POST['email'])) {
                $error['not_email'] = "Vui lòng nhập email !";
            } else {
                $email = $_POST['email'];
            }
            // kiểm tra mật khẩu có trống ko
            if (empty($_POST['pass'])) {
                $error['not_pass'] = "Vui lòng nhập mật khẩu !";
            } else {
                $pass = md5($_POST['pass']);
            }
            //nếu error không tồn tại thì thực thi nút bấm
            if (empty($error)) {
                if (isset($_POST['login']) && ($_POST['login'])) {
                    $check_login = check_login($email, $pass);
                    if (is_array($check_login)) {
                        if ($check_login['kichHoat']==1){
                            $_SESSION['login_user'] = $check_login;
                            echo '<script language="javascript">';
                            echo 'alert(" Đăng nhập thành công ! ")';
                            echo '</script>';
                            echo "<script>
                                    window.location='./';
                                    </script>";
                        } else {
                            $error['not_active'] = "Tài khoản của bạn chưa được kích hoạt !";
                        }    
                    } else {
                        $tb = "Email đăng nhập hoặc mật khẩu không đúng !";
                    }
                }
            }
        }
    

    // xử lý đăng ký
    else if ($_POST['type_'] == 'register_account') {

        //khai bao biến error là mảng
        $error = array();
        //bắt lỗi trống email
        if (empty($_POST['dk_email'])) {
            $error['not_email_dk'] = "Vui lòng nhập email !";
        } else {
            $email = $_POST['dk_email'];
            $row_email = Kiem_Tra_Email_Tontai($email);
            //kiểm tra email đã tồn tại hay không
            if (sizeof($row_email) > 0) {
                $error['tontai_email'] = "Email đã tồn tại vui lòng chọn email khác !";
            }
        }
        //bắt lỗi chưa nhap mật khẩu
            if (empty($_POST['dk_pass'])) {
                $error['not_pass_dk'] = "Vui lòng nhập mật khẩu !";
            } else {
                $pass = md5($_POST['dk_pass']);
                //mật khẩu ngán
                if (strlen($_POST['dk_pass']) < 8) {
                    $error['pass_ngan'] = "Mật khẩu không được nhỏ hơn 8 ký tự !";
                }
            }
            // chưa nhập lại mật khẩu
            if (empty($_POST['dk_rp_pass'])) {
                $error['not_rp_pass'] = "Hãy nhập lại mật khẩu !";
            } else {
                $pass2 = md5($_POST['dk_rp_pass']);
                //nhập lại mật khẩu không gioodng nhau
                if ($_POST['dk_pass'] != $_POST['dk_rp_pass']) {
                    $error['not_like_pass'] = "Nhập lại mật khẩu không đúng !";
                }
            }
            // chưa nhập họ và tên
            if (empty($_POST['dk_hvt'])) {
                $error['not_hvt'] = "Hãy nhập họ và tên !";
            } else {
                $hoVaTen = $_POST['dk_hvt'];
            }
            // chưa nhập số điện thoại
            if (empty($_POST['dk_sdt'])) {
                $error['not_sdt'] = "Hãy nhập số điện thoại !";
            } else {
                $soDienThoai = $_POST['dk_sdt'];
            }
            // nếu mảng error ko tồn tại thì thực thi cau lệnh submit
            if (empty($error)) {
                if (isset($_POST['register']) && ($_POST['register'])) {
                    register_user($email, $pass, $hoVaTen, $soDienThoai);
                    require_once "sendMail.php";
                    GuiMailXacNhan($email);
                    echo '<script language="javascript">';
                    echo 'alert(" Đăng ký thành công ! Vui lòng kiểm tra email để kích hoạt tài khoản của bạn")';
                    echo '</script>';
                }
            }
        }
    }
}
?>