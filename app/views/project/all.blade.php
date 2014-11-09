@extends('layouts.master', [

	'title' => ''

])


@section('content')

		<body><br>
		<div style="width: 600px; height: 400px; margin: 0 auto">
	<div id="container-speed" style="width: 300px; height: 200px; float: left"></div>
</div>
			<script> $(function () {

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
						[0.1, '#55BF3B'], // green
						[0.5, '#DDDF0D'], // yellow
						[0.9, '#DF5353'] // red
					    ],
					    lineWidth: 0,
					    minorTickInterval: null,
					    tickPixelInterval: 400,
					    tickWidth: 0,
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
				    $('#container-speed').highcharts(Highcharts.merge(gaugeOptions, {
					yAxis: {
					    min: 0,
					    max: 30,
					    title: {
						text: 'Tasks Completed'
					    }
					},

					credits: {
					    enabled: false
					},

					series: [{
					    name: 'Tasks Completed',
					    data: [25],
					    dataLabels: {
						format: "<div style='text-align:center'><span style='font-size:25px;color:" +
						((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + "'>{y}</span><br/ >" +
						       "<span style='font-size:12px;color:silver'>tasks</span></div>"
					    },
					    tooltip: {
						valueSuffix: ' tasks'
					    }
					}]

				    }));

				 


				});
			    /*var gaugeOptions = {

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
					[0.1, '#55BF3B'], // green
					[0.5, '#DDDF0D'], // yellow
					[0.9, '#DF5353'] // red
				    ],
				    lineWidth: 0,
				    minorTickInterval: null,
				    tickPixelInterval: 400,
				    tickWidth: 0,
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
			    console.log("here");*/
			</script>
			<?php
			
			function printGauge($totaltasks, $taskscompleted, $id) {
			    return "<script>(function () "."{"."$('#".$id."').highcharts(Highcharts.merge(gaugeOptions, {
				yAxis: {
				    min: 0,
				    max: ".$totaltasks.",
				    title: {
					text: 'Tasks Completed'
				    }
				},

				credits: {
				    enabled: false
				},

				series: [{
				    name: 'Tasks Completed',
				    data: [".$taskscompleted."],
				    dataLabels: {
					format: \"<div style='text-align:center'><span style='font-size:25px;color:'\" +
					    ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + \"'>{y}</span><br/>\" +
					       \"<span style='font-size:12px;color:silver'>tasks</span></div>\"
				    },
				    tooltip: {
					valueSuffix: ' tasks'
				    }
				}]

			    }))
			    });</script>";
	
		}
	?>


			<div class="container">
			<?php
				$mockdata = [
					['teamname'=>'Malware', 'projectname'=>'TeamTrackr', 'numtasks'=>'52', 'budget'=>'$0', 'taskscompleted'=>'50'], 
					['teamname'=>'Names', 'projectname'=>'Inventory Tracker', 'numtasks'=>'45', 'budget'=>'$150', 'taskscompleted'=>'5'],
					['teamname'=>'Mavericks', 'projectname'=>'PacMan', 'numtasks'=>'86', 'budget'=>'$200', 'taskscompleted'=>'55'],
					['teamname'=>'Potatoe', 'projectname'=>'Pig weight estimator', 'numtasks'=>'74', 'budget'=>'$62', 'taskscompleted'=>'21']
					     ];
				$count = 0;
				$html = "";
				$script = "";
				foreach($mockdata as $project) {
				         $id = "div{$count}";
					 $html .= ($count%3==0 ? "<div class='row'>" : "").
						"<div class='col-sm-4 col-md-4'>
							<div class='post'>
								<div id='".$id."' style='width: 100px; height: 200px; float: left'>
								
								</div>
								<div class='content'>
									<strong>Team: </strong>".$project['teamname']."<br>
									<strong>Project: </strong>".$project['projectname']."<br>
									<strong>Number of Tasks: </strong>".$project['numtasks']."
									<strong> Budget: </strong>".$project['budget']."
								</div>
							</div>
						</div>"
					.(($count+1)%3==0 ? "</div><br>" : "");
					$script .= printGauge($project['numtasks'],$project['taskscompleted'],$id);
					$count++;
				}
				$html .= "</div>";
				$html .= $script;
				echo $html;
			?>
			</div>
		</body>

@stop
