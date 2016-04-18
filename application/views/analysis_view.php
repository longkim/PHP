<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart() {

        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['Pending Payment',     <?php echo $payment;?>],
          ['Male Customers',       <?php echo $male;?>],
          ['Female Customers',   <?php echo $female;?>],
          ['Outstanding Sales',  <?php echo $outstanding;?>],
          ['Pending Shipping',     <?php echo $shipping;?>]
        ]);

        var options = {
          title: '',
          backgroundColor : '#f1f1f1',
        };

        var chart = new google.visualization.PieChart(document.getElementById('piechart'));

        chart.draw(data, options);
      }
</script>
<h1 style="clear:left;text-align:center;padding-top:10px">People Health Pharmacy - Sales Analysis</h1>
<div id="piechart" style="width: 900px; height: 500px;clear:left;padding-top:5px;margin:auto"></div>
  </body>
</html>
