<div  class="col-md-4 col-md-offset-4"><h3 ><b>DANH SÁCH LOẠI HÀNG HÓA</b></h3></div>
<div class="row col-12">
<div class="row col-12">
    <a href="index.php?action=loaiadmin&act=themloai">
        <h4>Thêm loại</h4>
    </a>
</div>

</div>
<div class="row"  style="padding: 0px 120px">
<table class="table">
    <thead>
      <tr class="table-primary">
        <th>Mã loại</th>
        <th>Tên loại</th>
        <th>Id menu</th>
        <th>Cập Nhật</th>
        <th>Xóa</th>
      </tr>
    </thead>
    <tbody>
    <tr>
      <?php
          $hh=new loaiadmin();
          $result=$hh->getLoaiAll();
          while($set=$result->fetch()):
      ?>
          <td><?php echo $set['maloai'];?></td>
          <td><?php echo $set['tenloai'];?></td>
          <td><?php echo $set['idmenu'];?></td>
          <td><a href="index.php?action=loaiadmin&act=edit&id=<?php echo $set['maloai'];?>">Cập nhật</a></td>
          <td><a href="index.php?action=loaiadmin&act=delete&id=<?php echo $set['maloai'];?>">Xóa</a></td>
      </tr>
      <?php
          endwhile;
      ?>
    </tbody>
  </table>
</div>
