<div class="row col-md-4 col-md-offset-4">
  <?php
  $ac = 0;
  if (isset($_GET['act'])) {
    if ($_GET['act'] == "edit") {
      $ac = 1;
    }
    if ($_GET['act'] == "themloai") {
      $ac = 2;
    }
  }
  ?>
  <?php
  if ($ac == 1) {
    echo '<div class="text-center" style="margin-top: 20px; color: orange;"><h3><b>CẬP NHẬT LOẠI HÀNG HÓA</b></h3></div>';
  }
  if ($ac == 2) {
    echo '<div class="text-center" style="margin-top: 20px; color: orange;"><h3><b>THÊM LOẠI HÀNG HÓA</b></h3></div>';
  }
  ?>
  <?php
  if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $hh = new loaiadmin();
    $result = $hh->getLoaiId($id);
    $maloai = $result['maloai'];
    $tenloai = $result['tenloai'];
    $idmenu = $result['idmenu'];
  }
  ?>
  <div style="margin-left: 400px;">
    <form action="index.php?action=loaiadmin&act=importloai_action" method="post" enctype="multipart/form-data">
      <div class="text-center">
        <input type="file" name="file" />
        <input type="submit" class="primary-btn" name="submit_file" value="Import">
      </div>
    </form>
  </div>
</div>