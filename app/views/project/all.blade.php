<?php

$projects = [
	['teamname'=>'Malware', 'projectname'=>'TeamTrackr', 'numtasks'=>'52', 'budget'=>'$0', 'taskscompleted'=>'50'], 
	['teamname'=>'Names', 'projectname'=>'Inventory Tracker', 'numtasks'=>'45', 'budget'=>'$150', 'taskscompleted'=>'5'],
	['teamname'=>'Mavericks', 'projectname'=>'PacMan', 'numtasks'=>'86', 'budget'=>'$200', 'taskscompleted'=>'55'],
	['teamname'=>'Potatoe', 'projectname'=>'Pig weight estimator', 'numtasks'=>'74', 'budget'=>'$62', 'taskscompleted'=>'21']
];

?>

@extends('layouts.master', [

	'title' => ''

])


@section('content')

<div class="container" style="padding-bottom:40px;">

	@foreach($projects as $index => $project)

	<div class='col-sm-4 col-md-4'>
		<div class='post'>
			<div id="projectGuage{{ $index }}">
			
			</div>
			<div class='content'>
				<strong>Team: </strong>{{{ $project['teamname'] }}}<br>
				<strong>Project: </strong>{{{ $project['projectname'] }}}<br>
				<strong>Number of Tasks: </strong>{{{ $project['numtasks'] }}}
				<strong> Budget: </strong>{{{ $project['budget'] }}}
			</div>
		</div>
	</div>

	@endforeach

</div>

<script>

	var guages = $('[id^=projectGuage]');
	
	var gaugeOptions = {

        chart: {
            type: 'solidgauge'
        },

        credits: {
        	enabled: false
        },

        title: null,

        pane: {
            center: ['50%', '85%'],
            size: '100%',
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
        
        yAxis: {
            min: 0,
            max: 5,
            title: {
                text: 'RPM'
            }
        },

        series: [{
            name: 'RPM',
            data: [1],
            dataLabels: {
                format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +
                       '<span style="font-size:12px;color:silver">* 1000 / min</span></div>'
            },
            tooltip: {
                valueSuffix: ' revolutions/min'
            }
        }],

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

    for(var i = 0; i < guages.length; i++) {
    	$(guages[i]).highcharts(gaugeOptions);
    }

</script>

@stop
