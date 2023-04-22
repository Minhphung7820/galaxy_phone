<?php
$idTin = $_GET['idTin'];
settype($idTin,"int");
$blog = getBlog($idTin);
if (isset($_POST['btn'])) {
    $tieuDe = $_POST['tieuDe'];
    $tomTat = $_POST['tomTat'];
    $noiDung = $_POST['noiDung'];
    $hinhAnh = $_POST['hinhAnh'];
    $anHien = $_POST['anHien'];
    $tieuDe = trim(strip_tags($tieuDe));
    $tomTat = trim(strip_tags($tomTat));
    $hinhAnh = trim(strip_tags($hinhAnh));
    $kq = updateBlog($tieuDe,$tomTat,$noiDung,$hinhAnh,$blog['idUser'],$blog['luotXem'],$anHien,$idTin);
    $blog = getBlog($idTin);
    echo "<script>
            window.location='?page=blogList';
            </script>";
}
?>
<style>
.ck-editor__editable_inline {
    min-height: 250px;
    max-height: 450px;
}
</style>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">SỬA TIN</h4>
        <p class="card-description">
        </p>
        <form class="forms-sample" method="post">
            <div class="form-group">
                <label>Tiêu đề</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Tiêu Đề" name="tieuDe" required value="<?=$blog['tieuDe'];?>">
            </div>
            <div class="form-group">
                <label>Tóm tắt</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Tóm tắt" name="tomTat" required value="<?=$blog['tomTat'];?>">
            </div>
            <div class="form-group">
                <label>Nội dung</label>
                <textarea id="noiDung" name="noiDung" required><?=$blog['noiDung'];?></textarea>
            </div>
            <div class="form-group">
                <label>Hình ảnh</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Hình ảnh" name="hinhAnh" required value="<?=$blog['hinhAnh'];?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ẩn Hiện</label><br>
                <input type="radio" id="anHien1" name="anHien" value="0" <?php if($blog['anHien']==0) echo "checked" ;?>>
                <label for="anHien1">Hiện</label>
                <input type="radio" id="anHien2" name="anHien" value="1" <?php if($blog['anHien']==1) echo "checked" ;?>>
                <label for="anHien2">Ẩn</label>
            </div>
            <input type="submit" class="btn btn-primary me-2" name="btn" value="Cập nhật"></input>
        </form>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/translations/vi.js"> </script>
<script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
<script>
ClassicEditor
    .create(document.querySelector('#noiDung'),{language: 'vi'} )
    .then( editor => {
        console.log( editor );
    } )
    .catch( error => {
        console.error( error );
    } );    
</script>