<div class="row">
    <div class="row formtitle mb">
        <h1>DANH SÁCH LOẠI HÀNG</h1>
    </div>
    <form action="index.php?act=listsp" method="post">
                <input type="text" name="kyw">
                <select name="iddm" >
                    <option value="0" selected>Tất cả</option>
                            <?php 
                            foreach($listdanhmuc as $danhmuc){
                                extract($danhmuc);
                                echo '<option value="'.$id.'">'.$name.'</option>';
                            }
                            ?>
                            
                        </select>
                        <input type="submit" name="listok" value="GO">
            </form>
    <div class="row formcontent">
        <div class="row mb10 formdsloai">
            
            <table>
                <tr>
                    <th> Chọn</th>
                    <th>Mã sản phẩm</th>
                    <th>Tên Sản Phẩm</th>
                    <th>Gía</th>
                    <th>Mô tả</th>
                    <th>Số lượng</th>
                    <th>Mã danh mục</th>
                    <th>Hành động</th>
                </tr>
                <?php
                foreach ($listsanpham as $sanpham) {
                    extract($sanpham);
                    $suasp = "index.php?act=suasp&id=".$id;
                    $xoasp = "index.php?act=xoasp&id=".$id;
                    $hinhpath="../upload/".$img;
                    if(is_file($hinhpath)){
                        $hinh="<img src='".$hinhpath."' height='80px'>";
                    }else{
                        $hinh = "no photo";
                    }
                    echo ' <tr>
                            <td><input type="checkbox" name=""></td>
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                             <td>'.$hinh.'</td>
                              <td>'.$price.'</td>
                               <td>'.$luotxem.'</td>
                            <td>
                                <a href="'.$suasp.'"><input type="button" value="SỬA"></a>
                                <a href="'.$xoasp.'"><input type="button" value="XÓA"></a>
                            </td>
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