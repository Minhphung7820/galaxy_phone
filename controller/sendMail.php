<?php
function GuiMailContact($emailKhach, $hoVaTen, $tieuDe, $noiDung)
{
    require "../PHPMailer-master/src/PHPMailer.php";
    require "../PHPMailer-master/src/SMTP.php";
    require '../PHPMailer-master/src/Exception.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
        $mail->isSMTP();
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'duanfpolyeducation@gmail.com'; // SMTP username
        $mail->Password = 'A.f.1st.cf';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('duanfpolyeducation@gmail.com', 'Mail contact');
        $mail->addAddress('duanfpolyeducation@gmail.com', 'Mail contact'); //mail và tên người nhận  
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = $tieuDe;
        $noidungthu = '<h3>Thư liên hệ từ khách hàng</h3>
            <hr>
            <p>Họ và tên khách hàng: ' . $hoVaTen . '</p>
            <p>Email khách hàng: ' . $emailKhach . '</p>
            <p>Nội dung liên hệ: ' . $noiDung . '</p>';
        $mail->Body = $noidungthu;
        $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
    } catch (Exception $e) {
        echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
    }
} //function GuiMail
function GuiMailXacNhan($emailKhach)
{
    require "../PHPMailer-master/src/PHPMailer.php";
    require "../PHPMailer-master/src/SMTP.php";
    require '../PHPMailer-master/src/Exception.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
        $mail->isSMTP();
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'duanfpolyeducation@gmail.com'; // SMTP username
        $mail->Password = 'A.f.1st.cf';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('duanfpolyeducation@gmail.com', 'Galaxy Phone');
        $mail->addAddress($emailKhach, ''); //mail và tên người nhận  
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Kích hoạt tài khoản Galaxy Phone';
        //randomkey = mã hóa md5 của email từ kí tự 7 đến -3
        $noidungthu = '<div style="background-color:#f9f9f9">
    <div style="max-width:640px;margin:0 auto;border-radius:4px;overflow:hidden">
        <div style="margin:0px auto;max-width:640px;background:#ffffff">
            <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;background:#ffffff" align="center" border="0">
                <tbody>
                    <tr>
                        <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:40px 50px">
                            <div aria-labelledby="mj-column-per-100" class="m_-4030199233842470800mj-column-per-100" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%">
                                <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                    <tbody>
                                        <tr>
                                            <td style="word-break:break-word;font-size:0px;padding:0px" align="left">
                                                <div style="color:#737f8d;font-family:Whitney,Helvetica Neue,Helvetica,Arial,Lucida Grande,sans-serif;font-size:16px;line-height:24px;text-align:left">

                                                    <h2 style="font-family:Whitney,Helvetica Neue,Helvetica,Arial,Lucida Grande,sans-serif;font-weight:500;font-size:20px;color:#4f545c;letter-spacing:0.27px">Chào '.$emailKhach.',</h2>
                                                    <p>Cảm ơn bạn đã đăng ký tài khoản trên Galaxy Phone! Trước khi bắt đầu, chúng ta cần kích hoạt tài khoản của bạn. Nhấp vào bên dưới để kích hoạt tài khoản của bạn:</p>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="word-break:break-word;font-size:0px;padding:10px 25px;padding-top:20px" align="center">
                                                <table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:separate" align="center" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td style="border:none;border-radius:3px;color:white;padding:15px 19px" align="center" valign="middle" bgcolor="#5865f2"><a href="'.Get_link_home().'/controller/activeUser.php?randomkey='.substr(md5($emailKhach), 7, -3).'" style="text-decoration:none;line-height:100%;background:#5865f2;color:white;font-family:Ubuntu,Helvetica,Arial,sans-serif;font-size:15px;font-weight:normal;text-transform:none;margin:0px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://click.discord.com/ls/click?upn%3DqDOo8cnwIoKzt0aLL1cBeFE1RlVCKJFF5zAq8ml-2BFh1dq-2FeX22E9yMPFmLMSO5CY1XfCMUymauQY-2BniGi1Aeb7PUqLfYnjMG0oxfE-2Fg3ZwX9IXD83DQRTbOxjb00rB1AfyBd9dXpSjdLO09KhSLTigfFiU0sZd96p5o7dyR-2F9dAiCbKuPBE4nqHp1qumoVfb2yuMiBvTwwyRhYDgSwumvJ3yh34YdUtuHH9otKOnbJY-3D7zgS_XTY1IDR8LvsDdMzMMBokT5nbTq1s-2FK2vS5DKSa8-2FINgvTwFanoU3P2kp0oWuHejzJ4gSc2B8kDRPaWKmsflin1XN60EA-2FEZeOS5K5-2FcvfbM34b-2Bz3XzF1VlRnw6v-2B-2FeFsuaVVd-2BZaxx93EAZjHhgHP9pXo3gduUEDRyrdAocAsOpYID6h5AWStNxuGM6Apm0AOmCRhGRv8bNf6QHrexUZpI8koiptArxIKu2BBVYDQPe3QNSSm6pdZWfX4sh7wdshA8RZn8TDaZT2-2BpMsCDJ0Q-3D-3D&amp;source=gmail&amp;ust=1637996964084000&amp;usg=AOvVaw1v1BhMI_pdx0gw-EV4y36t">
                                                                    Nhấn vào đây
                                                                </a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>' ;
        // $noidungthu = 'Link kích hoạt tài khoản: <a href="http://localhost/duan1/duan1nhom6/controller/activeUser.php?randomkey=' . substr(md5($emailKhach), 7, -3) . '">Nhấn vào đây</a>';
        $mail->Body = $noidungthu;
        $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
    } catch (Exception $e) {
        echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
    }
} //function GuiMail
function GuiMailResetPass($emailKhach)
{
    require "../PHPMailer-master/src/PHPMailer.php";
    require "../PHPMailer-master/src/SMTP.php";
    require '../PHPMailer-master/src/Exception.php';
    $mail = new PHPMailer\PHPMailer\PHPMailer(true); //true:enables exceptions
    try {
        $mail->SMTPDebug = 0; //0,1,2: chế độ debug. khi chạy ngon thì chỉnh lại 0 nhé
        $mail->isSMTP();
        $mail->CharSet  = "utf-8";
        $mail->Host = 'smtp.gmail.com';  //SMTP servers
        $mail->SMTPAuth = true; // Enable authentication
        $mail->Username = 'duanfpolyeducation@gmail.com'; // SMTP username
        $mail->Password = 'A.f.1st.cf';   // SMTP password
        $mail->SMTPSecure = 'ssl';  // encryption TLS/SSL 
        $mail->Port = 465;  // port to connect to                
        $mail->setFrom('duanfpolyeducation@gmail.com', 'Galaxy Phone');
        $mail->addAddress($emailKhach, ''); //mail và tên người nhận  
        $mail->isHTML(true);  // Set email format to HTML
        $mail->Subject = 'Reset mật khẩu tài khoản Galaxy Phone';
        //randomkey = mã hóa md5 của email từ kí tự 7 đến -3
        $noidungthu = '<div style="background-color:#f9f9f9">
    <div style="max-width:640px;margin:0 auto;border-radius:4px;overflow:hidden">
        <div style="margin:0px auto;max-width:640px;background:#ffffff">
            <table role="presentation" cellpadding="0" cellspacing="0" style="font-size:0px;width:100%;background:#ffffff" align="center" border="0">
                <tbody>
                    <tr>
                        <td style="text-align:center;vertical-align:top;direction:ltr;font-size:0px;padding:40px 50px">
                            <div aria-labelledby="mj-column-per-100" class="m_-4030199233842470800mj-column-per-100" style="vertical-align:top;display:inline-block;direction:ltr;font-size:13px;text-align:left;width:100%">
                                <table role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                    <tbody>
                                        <tr>
                                            <td style="word-break:break-word;font-size:0px;padding:0px" align="left">
                                                <div style="color:#737f8d;font-family:Whitney,Helvetica Neue,Helvetica,Arial,Lucida Grande,sans-serif;font-size:16px;line-height:24px;text-align:left">

                                                    <h2 style="font-family:Whitney,Helvetica Neue,Helvetica,Arial,Lucida Grande,sans-serif;font-weight:500;font-size:20px;color:#4f545c;letter-spacing:0.27px">Chào '.$emailKhach.',</h2>
                                                    <p>Đây là mail RESET PASSWORD. Nhấp vào bên dưới để cập nhật lại mật khẩu cho tài khoản của bạn:</p>

                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="word-break:break-word;font-size:0px;padding:10px 25px;padding-top:20px" align="center">
                                                <table role="presentation" cellpadding="0" cellspacing="0" style="border-collapse:separate" align="center" border="0">
                                                    <tbody>
                                                        <tr>
                                                            <td style="border:none;border-radius:3px;color:white;padding:15px 19px" align="center" valign="middle" bgcolor="#5865f2"><a href="'.Get_link_home().'/view/user/account-reset-password.php?randomkey='.substr(md5($emailKhach), 7, -3).'" style="text-decoration:none;line-height:100%;background:#5865f2;color:white;font-family:Ubuntu,Helvetica,Arial,sans-serif;font-size:15px;font-weight:normal;text-transform:none;margin:0px" target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://click.discord.com/ls/click?upn%3DqDOo8cnwIoKzt0aLL1cBeFE1RlVCKJFF5zAq8ml-2BFh1dq-2FeX22E9yMPFmLMSO5CY1XfCMUymauQY-2BniGi1Aeb7PUqLfYnjMG0oxfE-2Fg3ZwX9IXD83DQRTbOxjb00rB1AfyBd9dXpSjdLO09KhSLTigfFiU0sZd96p5o7dyR-2F9dAiCbKuPBE4nqHp1qumoVfb2yuMiBvTwwyRhYDgSwumvJ3yh34YdUtuHH9otKOnbJY-3D7zgS_XTY1IDR8LvsDdMzMMBokT5nbTq1s-2FK2vS5DKSa8-2FINgvTwFanoU3P2kp0oWuHejzJ4gSc2B8kDRPaWKmsflin1XN60EA-2FEZeOS5K5-2FcvfbM34b-2Bz3XzF1VlRnw6v-2B-2FeFsuaVVd-2BZaxx93EAZjHhgHP9pXo3gduUEDRyrdAocAsOpYID6h5AWStNxuGM6Apm0AOmCRhGRv8bNf6QHrexUZpI8koiptArxIKu2BBVYDQPe3QNSSm6pdZWfX4sh7wdshA8RZn8TDaZT2-2BpMsCDJ0Q-3D-3D&amp;source=gmail&amp;ust=1637996964084000&amp;usg=AOvVaw1v1BhMI_pdx0gw-EV4y36t">
                                                                    Nhấn vào đây
                                                                </a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>' ;
        // $noidungthu = 'Link kích hoạt tài khoản: <a href="http://localhost/duan1/duan1nhom6/controller/activeUser.php?randomkey=' . substr(md5($emailKhach), 7, -3) . '">Nhấn vào đây</a>';
        $mail->Body = $noidungthu;
        $mail->smtpConnect(array(
            "ssl" => array(
                "verify_peer" => false,
                "verify_peer_name" => false,
                "allow_self_signed" => true
            )
        ));
        $mail->send();
    } catch (Exception $e) {
        echo 'Mail không gửi được. Lỗi: ', $mail->ErrorInfo;
    }
} //function GuiMail
?>

