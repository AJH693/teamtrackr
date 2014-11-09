@extends('layouts.master', [

	'title' => ''

])


@section('content')

	<div id="projectView" class="container-fluid" style="padding-top:40px">

		<div class="detail col-md-6">
			<h1 style="padding: 0;margin: 0 0 20px 0;">{{{ $name }}}</h1>
			<h4><strong>Team </strong>{{{ $teamname }}}</h4>
			<h4><strong>Total Tasks </strong>{{{ $numtasks }}}</h4>
			<h4><strong>Tasks Done </strong>{{{ $taskscompleted }}}</h4>
			<h4><strong>Budget </strong>{{{ $budget }}}</h4>
		</div>

		<div id="chart" class="col-md-6" style="height: 400px">
		</div>

		<div id="guages" class="col-md-12" style="padding-top:60px">
			<div id="budgetChart" data-max="{{ $budget }}" data-actual="{{{ $spent }}}" class="col-md-4" style="height: 200px"></div>
			<div id="tasksChart" data-max="{{{ $numtasks }}}" data-actual="{{{ $taskscompleted }}}" class="col-md-4" style="height: 200px"></div>
			<div id="codeChart" data-max="20000" data-actual="12400" class="col-md-4" style="height: 200px"></div>
		</div>

	</div>

	<script>

	var guageOptions = {

        chart: {
            type: 'solidgauge'
        },

        credits: {
        	enabled: false
        },

        title: null,

        pane: {
            center: ['50%', '90%'],
            size: '180%',
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
                [0.1, Highcharts.theme], // green
                [0.5, Highcharts.theme], // yellow
                [0.9, Highcharts.theme] // red
            ],
            lineWidth: 0,
            minorTickInterval: null,
            tickPixelInterval: 400,
            tickWidth: 0,
            tickInterval: 50000,
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

	$('#chart').highcharts({
        title: {
            text: ''
        },
        credits: {
        	enabled: false
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: ''
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: '°C'
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Tokyo',
            data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }]
    });

    $('#budgetChart').highcharts(Highcharts.merge(guageOptions, {
    	yAxis: {
            min: 0,
            max: $('#budgetChart').data('max'),
            title: {
                text: ''
            }
        },

        series: [{
            name: 'RPM',
            data: [$('#budgetChart').data('actual')],
            dataLabels: {
                format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +
                       '<span style="font-size:12px;color:silver">Budget</span></div>'
            }
        }]
    }));

    $('#tasksChart').highcharts(Highcharts.merge(guageOptions, {
    	yAxis: {
            min: 0,
            max: $('#tasksChart').data('max'),
            title: {
                text: ''
            }
        },

        series: [{
            name: 'RPM',
            data: [$('#tasksChart').data('actual')],
            dataLabels: {
                format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +
                       '<span style="font-size:12px;color:silver">Tasks</span></div>'
            }
        }]
    }));

    $('#codeChart').highcharts(Highcharts.merge(guageOptions, {
    	yAxis: {
            min: 0,
            max: $('#codeChart').data('max'),
            title: {
                text: ''
            }
        },

        series: [{
            name: 'RPM',
            data: [$('#codeChart').data('actual')],
            dataLabels: {
                format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +
                       '<span style="font-size:12px;color:silver">Lines Of Code</span></div>'
            }
        }]
    }));

	</script>

@stop