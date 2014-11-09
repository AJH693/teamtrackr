@extends('layouts.master', [

	'title' => ''

])


@section('content')

<div class="container" style="padding-bottom:40px;">

	@foreach($projects as $index => $project)

	<?php $extra = $index % 3 === 0 ? 'project-left' : '' ?>

	<div class='col-sm-4 col-md-4 project {{ $extra }}'>
		<a href="{{ route('project', ['id' => $project->name]) }}" class="nostyle">
		<div class='post'>
			<div id="projectGuage{{ $index }}" style="height:220px" data-numtasks="{{ $project->numtasks }}" data-budget="{{ $project->budget }}" data-taskscompleted="{{ $project->taskscompleted }}" data-projectname="{{ $project->name }}" data-teamname="{{ $project->teamname }}"></div>
			<div class='content'>
				<strong>Team: </strong>{{{ $project->teamname }}}<br>
				<strong>Project: </strong>{{{ $project->name }}}<br>
				<strong>Number of Tasks: </strong>{{{ $project->numtasks }}}<br>
				<strong> Budget: </strong>${{{ $project->budget }}}
			</div>
		</div>
		</a>
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
            center: ['50%', '90%'],
            size: '160%',
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
                [0.1, '#55BF3B'], // green
                [0.5, '#DDDF0D'], // yellow
                [0.9, '#DF5353'] // red
            ],
            lineWidth: 0,
            minorTickInterval: null,
            tickPixelInterval: 400,
            tickWidth: 0,
            tickInterval: 400,
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

    for(var i = 0; i < guages.length; i++) {
    	var $guage = $(guages[i]);

    	$guage.highcharts(Highcharts.merge(gaugeOptions, {
    		yAxis: {
	            min: 0,
	            max: $guage.data('numtasks'),
	            title: {
	                text: ''
	            }
	        },

	        series: [{
	            name: 'RPM',
	            data: [$guage.data('taskscompleted')],
	            dataLabels: {
	                format: '<div style="text-align:center"><span style="font-size:25px;color:' +
	                    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y:.1f}</span><br/>' +
	                       '<span style="font-size:12px;color:silver">Tasks</span></div>'
	            }
	        }],
    	}));
    }

</script>

@stop
