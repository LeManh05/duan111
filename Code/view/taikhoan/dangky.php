<div class="row mb ">
    <div class="boxtrai mr">
        <div class="row mb">
          
            <div class="boxtitle">
                ĐĂNG KÍ THÀNH VIÊN
            </div>
            <div class=" row boxcontent formtaikhoan">
           <form action="index.php?act=dangky" method="post" >
           <div class="row mb10">
            EMAIL
            <input type="email" name="email">
           </div>
           <div class="row mb10">
            TÊN ĐĂNG NHÂP
            <input type="text" name="user">
           </div>
           <div class="row mb10">
            MẬT KHẨU
            <input type="password" name="pass">
           </div>
           <div class="row mb10">
            <input type="submit" value="ĐĂNG KÝ" name="dangky">
           </div>
           <div class="row mb10">
            <input type="reset" value="Nhập lại">
           </div>
           </form>
           <h2 class="thongbao">
           <?php 
           if(isset($thongbao)&&($thongbao!=0)){
            echo $thongbao;
           }
           ?>
           </h2>
            </div>
        </div>
        
        
    </div>
    <div class="boxphai">
        <?php include "view/boxright.php"; ?>
    </div>
</div>