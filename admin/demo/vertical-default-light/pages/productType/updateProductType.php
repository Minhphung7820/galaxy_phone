<?php
    $idLoai = $_GET['idLoai'];
    settype($idLoai,"int");
    $loaiSanPham = getProductType($idLoai);
    if (isset($_POST['btn'])) {
        $tenLoai = $_POST['tenLoai'];
        $anHien = $_POST['anHien'];
        $thuTu = $_POST['thuTu'];
        $tenLoai = trim(strip_tags($tenLoai));
        $kq = updateProductType($tenLoai, $anHien, $thuTu, $idLoai);
        if ($kq!=true){
            echo "<script>
            window.location='?page=productTypeList';
            </script>";
        }
}
?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">CẬP NHẬT LOẠI SẢN PHẨM</h4>
        <p class="card-description">
        </p>
        <form class="forms-sample" method="post">
            <div class="form-group">
                <label>Tên Loại</label>
                <input type="text" class="form-control" id="exampleInputUsername1" value="<?= $loaiSanPham['tenLoai'] ?>" name="tenLoai" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ẩn Hiện</label><br>
                <input type="radio" id="anHien1" name="anHien" value="0" <?php if ($loaiSanPham['anHien'] == 0) echo "checked" ?>>
                <label for="anHien1">Hiện</label>
                <input type="radio" id="anHien2" name="anHien" value="1" <?php if ($loaiSanPham['anHien'] == 1) echo "checked" ?>>
                <label for="anHien2">Ẩn</label>
            </div>
            <div class="form-group">
                <label>Thứ Tự</label>
                <input type="number" min="0" class="form-control" id="exampleInputPassword1" value="<?= $loaiSanPham['thuTu'] ?>" name="thuTu" required>
            </div>
            <input type="submit" class="btn btn-primary me-2" name="btn" value="Cập nhật"></input>
            <!-- <button class="btn btn-light">Cancel</button> -->
        </form>
    </div>
</div>