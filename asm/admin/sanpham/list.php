<div class="row">
            <div class="row frmtitle">
                <H1>DANH SÁCH LOẠI HÀNG</H1>
            </div>
            <form action="index.php?act=listsp" method="POST">
                        <input type="text" name="kyw">
                        <select name="iddm">
                            <option value="0" selected>---Chọn---</option>
                            <?php 
                                foreach($listdanhmuc as $danhmuc){
                                    extract($danhmuc);
                                    echo '<option value="'.$id.'">'.$name.'</option>';
                                }
                            ?>
                        </select>
                        <input type="submit" name="listok" value="Search">
            </form>
            <div class="row frmcontent">
                <div class="row mb10 frmdsloai">
                    <table>
                        <tr>
                            <th></th>
                            <th>MÃ LOẠI</th>
                            <th>TÊN SẢN PHẨM</th>
                            <th>HÌNH</th>
                            <th>GIÁ</th>
                            <th>LƯỢT XEM</th>
                            <th>HÀNH ĐỘNG</th>
                        </tr>
                        <?php 
                            foreach($listsanpham as $sanpham){ 
                                extract($sanpham);
                                $suasp="index.php?act=suasp&id=".$id;
                                $xoasp="index.php?act=xoasp&id=".$id;
                                $hinhpath="../upload/".$img;
                                if(is_file($hinhpath)){
                                    $hinh="<img src='".$hinhpath."'height='80'>";
                                }else{
                                    $hinh='Không có ảnh';
                                }
                                echo '<tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td>'.$id.'</td>
                                        <td>'.$name.'</td>
                                        <td>'.$hinh.'</td>
                                        <td>'.$price.'</td>
                                        <td>'.$luotxem.'</td>
                                        <td><a href="'.$suasp.'"><input type="button" value="Sửa"></a> <a href="'.$xoasp.'"><input type="button" value="Xóa"></td></a>
                                    </tr>';
                            }
                        ?>
                        
                    </table>
                </div>
                <div class="row mb10">
                    <input type="button" value="Chọn tất cả">
                    <input type="button" value="Bỏ chọn tất cả">
                    <input type="button" value="Xóa các mục đã chọn">
                    <a href="index.php?act=addsp"><input type="button" value="Nhập thêm"></a>
                </div>
            </div>
        </div>
