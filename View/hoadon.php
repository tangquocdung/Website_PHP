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
                <th>Mã Khách Hàng</th>
                <th>Ngày Đặt</th>
                <th>Tổng Tiền</th>
                <th>Cập Nhật</th>
                <th>Xóa</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $hh = new hanghoa();
            $result = $hh->gethoadon();
            while ($set = $result->fetch()) :
            ?>
                <tr>
                    <td> <?php echo $set['masohd'] ?> </td>        
                    <td><?php echo $set['makh'] ?></td>
                    <td><?php echo $set['ngaydat'] ?></td>
                    <td><?php echo $set['tongtien'] ?></td>
                    <td> <a href="">Cập nhật</a></td>
                    <td> <a href="">Xóa</a></td>
                </tr>
            <?php
            endwhile
            ?>
        </tbody>
    </table>
</div>
