<!DOCTYPE html>
<html>

<head>
  <title>Biểu đồ thống kê</title>
  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
      padding: 0;
    }

    .chart-container {
      width: 80%;
      margin: 0 auto;
      border-radius: 5px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-bottom: 30px;
    }

    #chart_div,
    #chart_div_sanpham {
      height: 400px;
    }

    .chart-title {
      padding: 10px;
      background-color: #f5f5f5;
      border-radius: 5px 5px 0 0;
      font-weight: bold;
    }
  </style>
</head>

<body>

  <div class="chart-container">
    <div class="chart-title">Biểu đồ doanh thu và số lượng bán theo năm</div>
    <div id="chart_div"></div>
  </div>

  <div class="chart-container">
    <div class="chart-title">Thống kê sản phẩm</div>
    <div id="chart_div_sanpham"></div>
  </div>


  <?php
  $db = new Connect();

  // Truy vấn để lấy dữ liệu từ bảng thongke
  $getthongke = "SELECT `id_thongke`, `ngaydat`, `soluong`, `tongtien` FROM `thongke` ORDER BY `ngaydat` ASC";
  $rsthongke = $db->getList($getthongke);

  // Chuyển kết quả thành mảng
  $thongkeArray = array();
  while ($row = $rsthongke->fetch(PDO::FETCH_ASSOC)) {
    $thongkeArray[] = $row;
  }

  // Mã hóa mảng thành chuỗi JSON
  $thongkeJSON = json_encode($thongkeArray);


  // Truy vấn để lấy dữ liệu từ bảng thongke_loai
  $getthongke_loai = "SELECT a.id_loai, b.tenloai, a.soluong, a.tongtien FROM thongke_loai a, loai b WHERE 1 and a.id_loai=b.idloai";
  $rsthongke_loai = $db->getList($getthongke_loai);

  // Chuyển kết quả thành mảng
  $thongke_loaiArray = array();
  while ($row = $rsthongke_loai->fetch(PDO::FETCH_ASSOC)) {
    $thongke_loaiArray[] = $row;
  }

  // Encode mock data arrays to JSON
  $thongke_loaiJSON = json_encode($thongke_loaiArray);
  ?>

  <script type="text/javascript">
    // Load visualization library
    google.load('visualization', '1.0', {
      'packages': ['corechart']
    });
    google.setOnLoadCallback(drawChart);

    // PHP data
    var thongkeJSON = <?php echo $thongkeJSON; ?>;
    var thongke_loaiJSON = <?php echo $thongke_loaiJSON; ?>;

    // Draw chart function
    function drawChart() {
      // Chart for thongke data
      var dataTable = new google.visualization.DataTable();
      dataTable.addColumn('string', 'Ngày');
      dataTable.addColumn('number', 'Doanh thu');
      dataTable.addColumn('number', 'Số lượng bán');

      // Add data to the chart for thongke
      for (var i = 0; i < thongkeJSON.length; i++) {
        dataTable.addRow([
          thongkeJSON[i].ngaydat,
          parseFloat(thongkeJSON[i].tongtien),
          parseInt(thongkeJSON[i].soluong)
        ]);
      }

      // Chart options for thongke
      var options = {
        title: 'Biểu đồ doanh thu và số lượng bán theo năm',
        hAxis: {
          title: 'Ngày'
        },
        vAxis: {
          title: 'Doanh thu (VNĐ) và Số lượng bán'
        },
        backgroundColor: '#f9f9f9',
        tooltip: {
          isHtml: true
        },
        colors: ['#3366cc', '#dc3912']
      };

      // Draw chart for thongke
      var chart = new google.visualization.LineChart(document.getElementById('chart_div'));
      chart.draw(dataTable, options);

      // Chart for thongke_loai data
      var data_loai = new google.visualization.DataTable();
      data_loai.addColumn('string', 'Tên loại sản phẩm');
      data_loai.addColumn('number', 'Số lượng bán');
      data_loai.addColumn('number', 'Tổng doanh thu');

      // Add data to the chart for thongke_loai
      for (var i = 0; i < thongke_loaiJSON.length; i++) {
        data_loai.addRow([
          thongke_loaiJSON[i].tenloai,
          parseInt(thongke_loaiJSON[i].soluong),
          parseFloat(thongke_loaiJSON[i].tongtien)
        ]);
      }

      // Chart options for thongke_loai
      var options_loai = {
        title: 'Thống kê sản phẩm theo loại',
        hAxis: {
          title: 'Tên loại sản phẩm',
          titleTextStyle: {
            color: '#333'
          }
        },
        vAxis: {
          minValue: 0
        },
        backgroundColor: '#F9F9F9'
      };

      // Draw chart for thongke_loai
      var chart_loai = new google.visualization.ColumnChart(document.getElementById('chart_div_sanpham'));
      chart_loai.draw(data_loai, options_loai);
    }
  </script>

  <script type="text/javascript">
    // Call drawChart function when Google Charts library is loaded
    google.setOnLoadCallback(function() {
      drawChart();
    });
  </script>

</body>

</html>