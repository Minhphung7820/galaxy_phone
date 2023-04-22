<?php
if (isset($_SESSION['login_user'])){
    $loginUser = $_SESSION['login_user'];
}
if(isset($_GET['action_user']))
    $action_user = $_GET['action_user'];
else
    $action_user = 'home';


switch($action_user){

    case 'home':
        $view_page_user = '../view/user/dashboard.php';
        $main = '../view/user/header_user.php';
        include_once '../view/header.php';
        break;

    case 'change-profile':
        $view_page_user = '../view/user/account-profile.php';
        $main = '../view/user/header_user.php';
        include_once '../view/header.php';
        break;
    case 'history':
        $view_page_user = '../view/user/account-orders.php';
        $main = '../view/user/header_user.php';
        include_once '../view/header.php';
        break;
    case 'order-detail-view':
        $view_page_user = '../view/user/account-order-details.php';
        $main = '../view/user/header_user.php';
        include_once '../view/header.php';
        break;
    case 'password':
        $view_page_user = '../view/user/account-password.php';
        $main = '../view/user/header_user.php';
        include_once '../view/header.php';
        break;
    case 'logOut':
        unset($_SESSION['login_user']);
        echo "<script>
        window.location='../';
        </script>";
    default:
        echo "Không hiểu thao tác của bạn?.";
        break;
}