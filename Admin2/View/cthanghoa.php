
<div class="row col-md-4 col-md-offset-4" >
  <form action="index.php?action=cthanghoa&act=cthanghoa_action" method="post" enctype="multipart/form-data">
    <table class="table" style="border: 0px;">

      <tr>
        <td>Mã hàng hóa</td>
        <td> <select name="mahh" class="form-control" style="width:150px;">
            <?php
              $hh=new hanghoa();
              $hang=$hh->getHangHoa();
              while($set=$hang->fetch()):
            ?>
            <option value="<?php echo $set['mahh'];?>"><?php echo $set['tenhh'];?></option>
            <?php
              endwhile;
            ?>
            </select>
        </td>
      </tr>
      <tr>
        <td>Loại</td>
        <td><select name="maloai" class="form-control" style="width:150px;">
            <?php
            $selectLoai = -1;
            if (isset($maloai) && $maloai != -1) {
              $selectLoai = $maloai;
            }
            $loai = new loai();
            $result = $loai->getLoai();
            while ($set = $result->fetch()) :
            ?>
              <option value="<?php echo $set['idloai'] ?>" <?php if ($selectLoai == $set['idloai']) echo 'selected'; ?>><?php echo $set['tenloai'] ?></option>
            <?php
            endwhile;
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Đơn giá</td>
        <td><input type="number" class="form-control" name="dongia" ></td>
      </tr>
      <tr>
        <td>Hình</td>
        <td>
            <label><img width="50px" height="50px" src=""></label>
            Chọn file để upload:
            <input type="file" name="image" id="fileupload">
         
        </td>
      </tr>
      <tr>
        <td>Giảm giá</td>
        <td><input type="number" class="form-control" name="giamgia" ></td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" name="submit" value="submit">
          

        </td>
      </tr>

    </table>
  </form>
</div>