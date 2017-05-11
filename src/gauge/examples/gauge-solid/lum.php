<!DOCTYPE HTML>
<html>
	<head>
		<?require_once('../../../../templates/head.php');?>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Highcharts Example</title>

		<style type="text/css">
.highcharts-yaxis-grid .highcharts-grid-line {
	display: none;
}
		</style>
	</head>
	<body>


<div style="width: 600px; height: 400px; margin: 0 auto">
    <div id="container-speed" style="width: 300px; height: 200px; margin-left: 70px; margin-top: 3.5%"></div>
</div>




		<script type="text/javascript">


var gaugeOptions = {

    chart: {
        type: 'solidgauge'
    },

    title: null,

    pane: {
        center: ['50%', '85%'],
        size: '140%',
        startAngle: -90,
        endAngle: 90,
        background: {
            backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
            innerRadius: '60%',
            outerRadius: '100%',
            shape: 'arc'
        }
    },

    tooltip: {
        enabled: false
    },

    // the value axis
    yAxis: {
        stops: [
            [0.1, '#FFFFF'], // green
            [0.9, '#FFD700'], // yellow
            [0.9, '#FFFFFF'] // red
        ],
        lineWidth: 0,
        minorTickInterval: null,
        tickAmount: 2,
        title: {
            y: -70
        },
        labels: {
            y: 16
        }
    },

    plotOptions: {
        solidgauge: {
            dataLabels: {
                y: 5,
                borderWidth: 0,
                useHTML: true
            }
        }
    }
};

// The speed gauge
var chartSpeed = Highcharts.chart('container-speed', Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 20000,

    },

    credits: {
        enabled: false
    },

    series: [{
        name: 'luminosity',
        data: [3000],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                   '<span style="font-size:12px;color:silver">lux</span></div>'
        },
        tooltip: {
            valueSuffix: ' lux'
        }
    }]

}));

// Bring life to the dials
setInterval(function () {
    // luminosity
    var point,
        newVal,
        inc;

    if (chartSpeed) {
        point = chartSpeed.series[0].points[0];
        inc = Math.round((Math.random() - 100) * 100);
        newVal = point.y + inc;

        if (newVal < 0 || newVal > 20000) {
            newVal = point.y - inc;
        }

        point.update(newVal);
    }

}, 2000);



		</script>
	</body>
</html>
