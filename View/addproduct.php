<div class="col-md-4 col-md-offset-4">
  <h3><b>THÊM SẢN PHẨM</b></h3>
</div>;

<div class="row col-md-4 col-md-offset-4">

  <form action="index.php?action=hanghoa&act=themsp_action" method="post" enctype="multipart/form-data">



    <table class="table m-auto" style="text-align: center;">

      <tr>
        <td>Mã hàng</td>
        <td> <input type="text" class="form-control" name="mahh" value="" readonly /></td>
      </tr>
      <tr>
        <td>Tên hàng</td>
        <td><input type="text" class="form-control" name="tenhh" value="" maxlength="100px"></td>
      </tr>
      <tr>
        <td>Đơn giá</td>
        <td><input type="text" class="form-control" name="dongia" value=""></td>
      </tr>
      <tr>
        <td>Giảm giá</td>
        <td><input type="text" class="form-control" name="giamgia" value=""></td>
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
        <td>Nhóm</td>

        <td>
          <input type="text" class="form-control" name="nhom" value="">
        </td>
      </tr>
      <tr>
        <td>Mã loại</td>
        <td>
          <select name="maloai" class="form-control" style="width:150px;">
            <?php
            $loai = new loai();
            $result = $loai->getLoai();
            while ($set = $result->fetch()) :
            ?>
              <option value="<?php echo $set['maloai']; ?>"><?php echo $set['tenloai']; ?></option>
            <?php
            endwhile;
            ?>
          </select>
        </td>
      </tr>
      <tr>
        <td>Đặc biệt</td>
        <td><input type="text" class="form-control" name="dacbiet" value="">
        </td>
      </tr>
      <tr>
        <td>Số lượt xem</td>
        <td><input type="text" class="form-control" name="slx" value="">
        </td>
      </tr>
      <tr>
        <td>Ngày lập</td>
        <td><input type="text" class="form-control" name="ngaylap" value="">
        </td>
      </tr>
      <tr>
        <td>Mô tả</td>
        <td><input type="text" class="form-control" name="mota" value="">
        </td>
      </tr>
      <tr>
        <td>Số lượng tồn</td>
        <td><input type="text" class="form-control" name="slt" value="">
        </td>
      </tr>
      <tr>
        <td>Màu sắc</td>
        <td><input type="text" class="form-control" name="mausac" value="">
        </td>
      </tr>
      <tr>
        <td>Size</td>
        <td><input type="text" class="form-control" name="size" value="">
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <input type="submit" value="submit" />
        </td>
      </tr>

    </table>
  </form>
</div>