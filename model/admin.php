<?php
require_once 'PDO.php';
//Lấy danh sách loại sản phẩm
function getAllProductType()
{
   $sql = "select idLoai,tenLoai,anHien from loai_san_pham order by idLoai asc";
   return pdo_query($sql);
}
//Lấy 1 loại sản phẩm
function getProductType($idLoai)
{
   $sql = "select idLoai,tenLoai,anHien,thuTu from loai_san_pham where idLoai=?";
   return pdo_query_one($sql, $idLoai);
}
//Thêm loại sản phẩm
function addProductType($tenLoai, $anHien, $thuTu)
{
   $sql = "INSERT INTO loai_san_pham (tenLoai,anHien,thuTu) VALUES (?,?,?)";
   return pdo_execute($sql, $tenLoai, $anHien, $thuTu);
}
//Sửa loại sản phẩm
function updateProductType($tenLoai, $anHien, $thuTu, $idLoai)
{
   $sql = "UPDATE loai_san_pham SET tenLoai=?,anHien=?,thuTu=? WHERE idLoai=?";
   return pdo_execute($sql, $tenLoai, $anHien, $thuTu, $idLoai);
}
//Xóa loại sản phẩm
function deleteProductType($idLoai)
{
   $sql = "DELETE FROM loai_san_pham WHERE idLoai=?";
   return pdo_execute($sql, $idLoai);
}
// Lấy danh sách user từ bảng tai_khoan
function getAllUser()
{
   $sql = "select idUser,tenDangNhap,matKhau,ten,email,soDienThoai,ngayTao,nhom from tai_khoan order by idUser asc";
   return pdo_query($sql);
}
//Thêm user
function addUser($tenDangNhap, $matKhau, $ten, $email, $soDienThoai, $nhom)
{
   $sql = "INSERT INTO tai_khoan (tenDangNhap,matKhau,ten,email,soDienThoai,nhom) VALUES (?,?,?,?,?,?)";
   return pdo_execute($sql, $tenDangNhap, $matKhau, $ten, $email, $soDienThoai, $nhom);
}
//Lấy 1 User
function getUser($idUser)
{
   $sql = "select tenDangNhap,matKhau,ten,email,soDienThoai,ngayTao,nhom from tai_khoan where idUser=?";
   return pdo_query_one($sql, $idUser);
}
//Xóa user
function deleteUser($idUser)
{
   $sql = "DELETE FROM tai_khoan WHERE idUser=?";
   return pdo_execute($sql, $idUser);
}
//Sửa user
function updateUser($tenDangNhap, $matKhau, $ten, $email, $soDienThoai, $nhom, $idUser)
{
   $sql = "UPDATE tai_khoan SET tenDangNhap=?,matKhau=?,ten=?,email=?,soDienThoai=?,nhom=? WHERE idUser=?";
   return pdo_execute($sql, $tenDangNhap, $matKhau, $ten, $email, $soDienThoai, $nhom, $idUser);
}
//Lấy danh sách sản phẩm
function getAllProduct()
{
   $sql = "select idSP,tenSP,donGia,giamGia,ngayNhap,hinhAnh,luotXem,thongSo,moTa,anHien,idLoai from san_pham order by idSP asc";
   return pdo_query($sql);
}
//Lấy 1 sản phẩm
function getProduct($idSP)
{
   $sql = "select idSP,tenSP,donGia,giamGia,ngayNhap,hinhAnh,luotXem,thongSo,moTa,anHien,idLoai from san_pham where idSP=?";
   return pdo_query_one($sql, $idSP);
}
//Thêm sản phẩm
function addProduct($tenSP, $donGia, $giamGia, $hinhAnh, $luotXem, $thongSo, $moTa, $anHien, $idLoai)
{
   $sql = "INSERT INTO san_pham (tenSP,donGia,giamGia,hinhAnh,luotXem,thongSo,moTa,anHien,idLoai) VALUES (?,?,?,?,?,?,?,?,?)";
   return pdo_execute($sql, $tenSP, $donGia, $giamGia, $hinhAnh, $luotXem, $thongSo, $moTa, $anHien, $idLoai);
}
//Sửa sản phẩm
function updateProduct($tenSP, $donGia, $giamGia, $hinhAnh, $luotXem, $thongSo, $moTa, $anHien, $idLoai, $idSP)
{
   $sql = "UPDATE san_pham SET tenSP=?,donGia=?,giamGia=?,hinhAnh=?,luotXem=?,thongSo=?,moTa=?,anHien=?,idLoai=? WHERE idSP=?";
   return pdo_execute($sql, $tenSP, $donGia, $giamGia, $hinhAnh, $luotXem, $thongSo, $moTa, $anHien, $idLoai, $idSP);
}
//Xóa sản phẩm
function deleteProduct($idSP)
{
   $sql = "DELETE FROM san_pham WHERE idSP=?";
   return pdo_execute($sql, $idSP);
}
//Lấy danh sách bình luận
function getAllComment()
{
   $sql = "select idBL,idUser,anHien,noiDung,ngayDang,idSP from binh_luan order by idBL desc";
   return pdo_query($sql);
}
//Lấy 1 bình luận
function getComment($idBL)
{
   $sql = "select idBL,idUser,anHien,noiDung,ngayDang,idSP from binh_luan where idBL=?";
   return pdo_query_one($sql, $idBL);
}
//Xóa sản phẩm
function deleteComment($idBL)
{
   $sql = "DELETE FROM binh_luan WHERE idBL=?";
   return pdo_execute($sql, $idBL);
}
//Ẩn hiện comment
function hideComment($anHien, $idBL)
{
   $sql = "UPDATE binh_luan SET anHien=? WHERE idBL=?";
   return pdo_execute($sql, $anHien, $idBL);
}
//Lấy danh sách tin
function getAllBlog()
{
   $sql = "select idTin,tieuDe,tomTat,noiDung,ngayDang,hinhAnh,idUser,luotXem,anHien from tin order by idTin desc";
   return pdo_query($sql);
}
//Lấy 1 tin
function getBlog($idTin)
{
   $sql = "select idTin,tieuDe,tomTat,noiDung,ngayDang,hinhAnh,idUser,luotXem,anHien from tin where idTin=?";
   return pdo_query_one($sql, $idTin);
}
//Thêm tin
function addBlog($tieuDe,$tomTat,$noiDung,$hinhAnh,$idUser,$luotXem,$anHien)
{
   $sql = "INSERT INTO tin (tieuDe,tomTat,noiDung,hinhAnh,idUser,luotXem,anHien) VALUES (?,?,?,?,?,?,?)";
   return pdo_execute($sql,$tieuDe,$tomTat,$noiDung,$hinhAnh,$idUser,$luotXem,$anHien);
}
//Sửa tin
function updateBlog($tieuDe,$tomTat,$noiDung,$hinhAnh,$idUser,$luotXem,$anHien,$idTin)
{
   $sql = "UPDATE tin SET tieuDe=?,tomTat=?,noiDung=?,hinhAnh=?,idUser=?,luotXem=?,anHien=? WHERE idTin=?";
   return pdo_execute($sql,$tieuDe,$tomTat,$noiDung,$hinhAnh,$idUser,$luotXem,$anHien,$idTin);
}
//Xóa tin
function deleteBlog($idTin)
{
   $sql = "DELETE FROM tin WHERE idTin=?";
   return pdo_execute($sql, $idTin);
}
//Lấy tất cả hóa đơn
function getAllInvoice()
{
   $sql = "select * from hoa_don order by idHoaDon desc";
   return pdo_query($sql);
}
//Lấy chi tiết hóa đơn
function getDetailInvoice($idHoaDon)
{
   $sql = "select * from chi_tiet_hoa_don where idHoaDon=?";
   return pdo_query($sql,$idHoaDon);
}
//Check loại sản phẩm có sản phẩm không
function getProductByIDLoai($idLoai)
{
   $sql = "select * from san_pham where idLoai=?";
   return pdo_query_one($sql, $idLoai);
}
//Doanh thu 1 tháng
function revenue($month)
{
   $sql = "SELECT sum(thanhTien) FROM hoa_don WHERE MONTH(ngayMua) = ?";
   $data = pdo_query_one($sql, $month);
   return $data['sum(thanhTien)'];
}
//Tổng số sản phẩm bán được
function totalProductSold()
{
   $sql = "SELECT sum(soLuong) FROM chi_tiet_hoa_don";
   $data = pdo_query_one($sql);
   return $data['sum(soLuong)'];
}
//Số tài khoản tạo trong ngày
function userCreateToday($today)
{
   $sql = "SELECT count(*) FROM tai_khoan WHERE date(ngayTao)=?";
   $data = pdo_query_one($sql,$today);
   return $data['count(*)'];
}
//Số tài khoản tạo trong ngày
function commentCreateToday($today)
{
   $sql = "SELECT count(*) FROM binh_luan WHERE date(ngayDang)=?";
   $data = pdo_query_one($sql,$today);
   return $data['count(*)'];
}
//Số tài khoản tạo trong ngày
function invoiceCreateToday($today)
{
   $sql = "SELECT count(*) FROM hoa_don WHERE date(ngayMua)=?";
   $data = pdo_query_one($sql,$today);
   return $data['count(*)'];
}

?>