<meta charset="UTF-8">
<style>
  .statistics {
    display: flex;
    align-items: center;
    justify-content: space-around;
  }
</style>
<!--Load the AJAX API-->
<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
  google.load('visualization', '1.0', {
    'packages': ['corechart']
  });
  google.setOnLoadCallback(drawVisualization);

  function drawVisualization() {
    //thống kê số lượng bán hàng theo mặt hàng vẽ bieu do tron
    var data = new google.visualization.DataTable();
    var name = new Array();
    var sellNumber = new Array();
    var dataProducts = 0;
    var quantity = 0;
    var rows = new Array();

    <?php
    $product = new hanghoa();
    $result = $product->getThongKeMatHang();
    while ($set = $result->fetch()) {
      $name = $set['tenhh'];
      $quantity = $set['soluong'];
      echo "name.push('" . $name . "');";
      echo "sellNumber.push('" . $quantity . "');";
    }
    ?>
    for (i = 0; i < name.length; i++) {
      dataProducts = name[i];
      quantity = parseInt(sellNumber[i]);
      rows.push([dataProducts, quantity]);
    }

    data.addColumn('string', 'Tên hàng hóa');
    data.addColumn('number', 'Số lượng bán');
    data.addRows(rows);

    var option = {
      title: "Thống kê số lượng bán",
      "width": 600,
      "height": 400,
      "backgroudColor": "#ffffff",
      is3D: true
    }

    var chart = new google.visualization.BarChart(document.getElementById("chart_div"));
    chart.draw(data, option);
  }
</script>
<div class="statistics">
  <div id="chart_div"></div>
</div>