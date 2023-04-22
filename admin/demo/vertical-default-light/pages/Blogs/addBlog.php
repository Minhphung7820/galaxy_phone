<?php
$UserLogin = $_SESSION['login_user'];
if (isset($_POST['btn'])) {
    $tieuDe = $_POST['tieuDe'];
    $tomTat = $_POST['tomTat'];
    $noiDung = $_POST['noiDung'];
    $hinh = $_POST['hinh'];
    $anHien = $_POST['anHien'];
    $tieuDe = trim(strip_tags($tieuDe));
    $tomTat = trim(strip_tags($tomTat));
    $hinh = trim(strip_tags($hinh));
    $kq = addBlog($tieuDe, $tomTat, $noiDung, $hinh, $UserLogin['idUser'], 0, $anHien);
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
        <h4 class="card-title">THÊM TIN</h4>
        <p class="card-description">
        </p>
        <form class="forms-sample" method="post">
            <div class="form-group">
                <label>Tiêu đề</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Tiêu Đề" name="tieuDe" required>
            </div>
            <div class="form-group">
                <label>Tóm tắt</label>
                <input type="text" class="form-control" id="exampleInputUsername1" placeholder="Tóm tắt" name="tomTat" required>
            </div>
            <div class="form-group">
                <label>Nội dung</label>
                <textarea id="noiDung" name="noiDung"></textarea>
            </div>
            <div class="form-group">
                <label>Hình ảnh</label>
                <input type="text" class="form-control" id="hinh" placeholder="Hình ảnh" name="hinh" required ondblclick="openPopup('hinh')">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Ẩn Hiện</label><br>
                <input type="radio" id="anHien1" name="anHien" value="0" checked>
                <label for="anHien1">Hiện</label>
                <input type="radio" id="anHien2" name="anHien" value="1">
                <label for="anHien2">Ẩn</label>
            </div>
            <input type="submit" class="btn btn-primary me-2" name="btn" value="Thêm tin"></input>
        </form>
    </div>
</div>
<script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/translations/vi.js"> </script>
<script src="https://cdn.ckeditor.com/ckeditor5/31.0.0/classic/ckeditor.js"></script>
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
<script>
ClassicEditor.create( document.querySelector('#noiDung') , {
    language: 'vi',
    ckfinder: {
        uploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&responseType=json'
    },    
    toolbar: {
    items: [  
        'fontfamily', 'fontsize', '|',
        'heading', '|',        
        'alignment', '|',
        'fontColor', 'fontBackgroundColor', '|',
        'bold', 'italic', 'underline', 'subscript', 'superscript', '|',
        'link', '|',
        'outdent', 'indent', '|',
        'bulletedList', 'numberedList', 'todoList', '|',
        'code', 'codeBlock', '|',
        'insertTable', '|',
        'ckfinder',
        'undo', 'redo'
    ],
    shouldNotGroupWhenFull: true
}
})
.then( editor => {   })
.catch( error => {console.error( error )} );
</script>
