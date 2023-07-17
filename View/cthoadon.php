<div class="col-md-4 col-md-offset-4">
    <h3><b>DANH SÁCH HÀNG HÓA</b></h3>
</div>
<div class="row col-12">
    <a href="index.php?action=hanghoa&act=themsp">
        <h4>Thêm sản phẩm</h4>
    </a>
</div>
<div class="row justify-content-center">
    <table class="table" style="width: 1300px;">
        <thead>
            <tr class="table-primary">
                <th>Mã Số Hóa Đơn</th>
                <th>Mã Hàng Hóa</th>
                <th>Số Lượng Mua</th>
                <th>Màu Sắc</th>
                <th>Size</th>
                <th>Thành Tiền</th>
                <th>Tình Trạng</th>
                <th>Cập Nhật</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $hh = new hanghoa();
            $result = $hh->getcthoadon();
            while ($set = $result->fetch()) :
            ?>
                <tr>
                    <td><?php echo $set['masohd'] ?> </td>        
                    <td><?php echo $set['mahh'] ?></td>
                    <td><?php echo $set['soluongmua'] ?></td>
                    <td><?php echo $set['mausac'] ?></td>
                    <td><?php echo $set['size'] ?></td>
                    <td><?php echo $set['thanhtien'] ?></td>
                    <td><?php echo $set['tinhtrang'] ?></td>
                    <td><a href="">Cập nhật</a></td>
                    <td><a href="">Xóa</a></td>
                </tr>
            <?php
            endwhile
            ?>
        </tbody>
    </table>
</div>
