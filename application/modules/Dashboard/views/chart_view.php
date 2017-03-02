<!--chart_container-->
<div id="<?php echo $chart_name; ?>_container"></div>

<!--highcharts_configuration-->
<script type="text/javascript">
  $(function () {
    Highcharts.setOptions({
        global: {
            useUTC: false,
            
        },
        lang: {
          decimalPoint: '.',
          thousandsSep: ','
        }
    });

    var chartName = '<?php echo $chart_name; ?>'
    var filter_item = '<?php echo $chart_x_variable; ?>'

    $('#<?php echo $chart_name; ?>_container').highcharts({
        chart: {
            type: '<?php echo $chart_type; ?>'
        },
        title: {
            text: '<?php echo $chart_title; ?>'
        },
        subtitle: {
            text: '<?php echo $chart_source; ?>'
        },
        xAxis: {
            categories: <?php echo $chart_columns; ?>,
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: '<?php echo $chart_metric_title; ?>'
            }
        },
        tooltip: {
            pointFormat: '{point.key} <b>{point.y:,.0f}</b>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
                colorByPoint: true
            },
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false,
                    format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style: {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                },
                showInLegend: true
            },
            series: {
                cursor: 'pointer',
                point: {
                    events: {
                        click: function () {
                            var filterName = this.name
                            if(filterName == null){
                                filterName = this.category
                            }
                        }
                    }
                }
            }
        },
        series: <?php echo $chart_data; ?>,
        exporting: { 
            enabled: false 
        }
    });
});
</script>