<?php
    if(is_array($dm)){
        extract($dm);
    }
?>
<div class="row">
    <div class="row frmtitle">
        <h1>CẬP NHẬT LOẠI HÀNG HÓA</h1>
    </div>
    <div class="row frmcontent">
        <form action="index.php?act=updatedm" method="post">
            <div class="row mb10">
                Mã loại<br>
                <input type="text" name="maloai" disabled value="<?= (($id !="")&&($id>0)) ? $id : "" ?>">
            </div>
            <div class="row mb10">
                Tên loại<br />
                <input type="text" name="tenloai" value="<?= ($name != "") ? $name : "" ?>"> <!-- check $name với if-->
            </div>
            <div class="row mb10">
                <input type="hidden" name="id" value="<?= (($id !="")&&($id>0)) ? $id : "" ?>">
                <input type="submit" name="capnhat" value="CẬP NHẬT">
                <input type="reset" value="NHẬP LẠI">
                <a href="index.php?act=listdm"><input type="button" value="DANH SÁCH"></a>
            </div>
            <?php
                if(isset($thongbao)&&($thongbao!=""))
                echo $thongbao;
            ?>
        </form>
    </div>
</div>
</div>