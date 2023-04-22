<?php
include_once 'PDO.php';

function get_All_list_news(){
   $sql="SELECT * FROM tin ";
   return pdo_query($sql);
}

function get_All_list_news_nb(){
    $sql="SELECT * FROM tin LIMIT 2,6";
    return pdo_query($sql);
 }

function get_Detail_new($id_post){
    $sql="SELECT * FROM tin WHERE idTin = '$id_post'";
    return pdo_query_one($sql);
}

function set_view_blog($idTin){
    $sql = "UPDATE tin SET luotXem = luotXem + 1 WHERE idTin=?";
    return pdo_execute($sql, $idTin);
 }

 function getLastestBlogs(){
    $sql="SELECT * FROM tin ORDER BY ngayDang desc LIMIT 4";
    return pdo_query($sql);
}

function getMostViewedBlogs(){
    $sql="SELECT * FROM tin ORDER BY luotXem desc LIMIT 4";
    return pdo_query($sql);
}

function get_All_blog_COUNT(){
    $sql = "SELECT count(*) FROM tin";
    $data = pdo_query_one($sql);
    return $data['count(*)'];
 }

 function get_All_blog($page_num, $page_size){
    $start_now = ($page_num-1)*$page_size;
    $sql = "SELECT * FROM tin LIMIT $start_now,$page_size ";
    return pdo_query($sql);
 }

?>