<script type="text/javascript">

  $(function () { 
    var myChart = Highcharts.chart('container', {
      chart: {
        type: 'column'
      },
      title: {
        text: <?php echo json_encode($registro_source); ?>
      },
      subtitle: {
        text: 'Source: Vozes na minha cabeça'
      },
      xAxis: {
        categories: ['Número de Registros']
      },
      yAxis: {
        title: {
          text: 'Número de Registros'
        }
      },
      exporting: {
        sourceWidth: 1502,
        scale: 1, 
        chartOptions: {
          chart:{
            height: this.chartHeight
          }
        }
      },
      series: [{
        name: 'AAAAAAAAAAAAAAAAAAAAAAAAA',
        data: [<?php echo join($tipo2, ',') ?>]
      }, {
        name: 'BBBBBBBBBBBBBBBBBBBBBBBBB',
        data: [<?php echo join($tipo, ',') ?>]
      }]
    });
  });
</script>