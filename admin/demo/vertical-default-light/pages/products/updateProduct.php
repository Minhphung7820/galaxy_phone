<?php
$idSP = $_GET['idSP'];
settype($idSP, "int");
$sanPham = getProduct($idSP);
$thongSoSP = json_decode($sanPham['thongSo'], true);
if (isset($_POST['btn'])) {
    $tenSP = $_POST['tenSP'];
    $donGia = $_POST['donGia'];
    $giamGia = $_POST['giamGia'];
    $hinh = $_POST['hinh'];
    $manHinh = $_POST['manHinh'];
    $heDieuHanh = $_POST['heDieuHanh'];
    $cameraTruoc = $_POST['cameraTruoc'];
    $cameraSau = $_POST['cameraSau'];
    $Chip = $_POST['Chip'];
    $RAM = $_POST['RAM'];
    $boNhoTrong = $_POST['boNhoTrong'];
    $SIM = $_POST['SIM'];
    $pinVSac = $_POST['pinVSac'];
    $thongSo = array("manHinh" => "$manHinh", "heDieuHanh" => "$heDieuHanh", "cameraTruoc" => "$cameraTruoc", "cameraSau" => "$cameraSau", "Chip" => "$Chip", "RAM" => "$RAM", "boNhoTrong" => "$boNhoTrong", "SIM" => "$SIM", "pinVSac" => "$pinVSac");
    $thongSo = json_encode($thongSo);
    $moTa = $_POST['moTa'];
    $anHien = $_POST['anHien'];
    $idLoai = $_POST['loai'];
    $tenSP = trim(strip_tags($tenSP));
    $hinh = trim(strip_tags($hinh));
    $kq = updateProduct($tenSP, $donGia, $giamGia, $hinh, 0, $thongSo, $moTa, $anHien, $idLoai, $idSP);
    if ($kq != true) {
        echo "<script>
        window.location='?page=productList';
        </script>";
    }
}
?>
<div class="card">
    <div class="card-body">
        <h4 class="card-title">CẬP NHẬT SẢN PHẨM</h4>
        <p class="card-description">
        </p>
        <form class="forms-sample" method="post">
            <div class="form-group">
                <label>Tên sản phẩm</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Tên sản phẩm" name="tenSP" value="<?= $sanPham['tenSP'] ?>" required>
            </div>
            <div class="form-group">
                <label>Giá</label>
                <input type="number" class="form-control" id="exampleInputUsername1" placeholder="Giá" name="donGia" value="<?= $sanPham['donGia'] ?>" required min="0" max="99999999999">
            </div>
            <div class="form-group">
                <label>Giảm giá</label>
                <input type="number" class="form-control" id="exampleInputUsername1" placeholder="Giảm giá" name="giamGia" value="<?= $sanPham['giamGia'] ?>" required min="0" max="99999999999">
            </div>
            <div class="form-group">
                <label>Hình ảnh</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="link ảnh" name="hinh" value="<?= $sanPham['hinh'] ?>" ondblclick="openPopup('hinh')" required>
            </div>
            <div class="form-group">
                <label>Màn hình</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Màn hình" name="manHinh" value="<?= $thongSoSP['manHinh'] ?>">
            </div>
            <div class="form-group">
                <label>Hệ điều hành</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Hệ điều hành" name="heDieuHanh" value="<?= $thongSoSP['heDieuHanh'] ?>">
            </div>
            <div class="form-group">
                <label>Camera trước</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Camera trước" name="cameraTruoc" value="<?= $thongSoSP['cameraTruoc'] ?>">
            </div>
            <div class="form-group">
                <label>Camera sau</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Camera sau" name="cameraSau" value="<?= $thongSoSP['cameraSau'] ?>">
            </div>
            <div class="form-group">
                <label>Chip</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Chip" name="Chip" value="<?= $thongSoSP['Chip'] ?>">
            </div>
            <div class="form-group">
                <label>RAM</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="RAM" name="RAM" value="<?= $thongSoSP['RAM'] ?>">
            </div>
            <div class="form-group">
                <label>Bộ nhớ trong</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Bộ nhớ trong" name="boNhoTrong" value="<?= $thongSoSP['boNhoTrong'] ?>">
            </div>
            <div class="form-group">
                <label>SIM"</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="SIM" name="SIM" value="<?= $thongSoSP['SIM'] ?>">
            </div>
            <div class="form-group">
                <label>PIN/Sạc</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="PIN/Sạc" name="pinVSac" value="<?= $thongSoSP['pinVSac'] ?>">
            </div>
            <div class="form-group">
                <label>Mô tả</label>
                <textarea name="moTa" id="" cols="100" rows="15"><?= $sanPham['moTa'] ?></textarea>
            </div>
            <label>Loại</label>
            <select name="loai" id="loai" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                <?php $loai_san_pham = getAllProductType();
                foreach ($loai_san_pham as $loaiSP) {
                    if ($loaiSP['idLoai'] == $sanPham['idLoai']) {
                        echo "<option selected value='" . $loaiSP['idLoai'] . "'>" . $loaiSP['tenLoai'] . "</option>";
                    } else {
                    echo "<option value='" . $loaiSP['idLoai'] . "'>" . $loaiSP['tenLoai'] . "</option>";
                    }
                }
                ?>
            </select>
            <br>
            <div class="form-group">
                <label for="exampleInputEmail1">Ẩn Hiện</label><br>
                <input type="radio" id="anHien1" name="anHien" value="0" <?php if ($loaiSP['anHien'] == 0) echo "checked"; ?>>
                <label for="anHien1">Hiện</label>
                <input type="radio" id="anHien2" name="anHien" value="1" <?php if ($loaiSP['anHien'] == 1) echo "checked"; ?>>
                <label for="anHien2">Ẩn</label>
            </div>
            <input type="submit" class="btn btn-primary me-2" name="btn" value="Cập nhật"></input>
            <!-- <button class="btn btn-light"></button> -->
        </form>
    </div>
</div>
<script>
    function openPopup(idobj) {
        CKFinder.popup({
            chooseFiles: true,
            onInit: function(finder) {
                finder.on('files:choose', function(evt) {
                    var file = evt.data.files.first();
                    document.getElementById(idobj).value = file.getUrl();
                });
                finder.on('file:choose:resizedImage', function(evt) {
                    document.getElementById(idobj).value = evt.data.resizedUrl;
                });
            }
        });
    }
</script>