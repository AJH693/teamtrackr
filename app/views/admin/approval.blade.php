@extends('layouts.master', [

	'title' => 'Pending Changes'

])


@section('content')

	<!-- Write all your html here! -->

    <div class="container">
        <div class="row">
            <div class="well">
                <h1 class="text-center">Pending project changes:</h1>
                <div class="list-group">
                    <div class="list-group-item">
                        <div class="media col-md-3">
                            <figure class="pull-left">
                                <img height="250" width="350" class="media-object img-rounded img-responsive"  src="http://www.utne.com/~/media/Images/UTR/Editorial/Articles/Magazine%20Articles/2012/11-01/Anonymous%20Hacktivist%20Collective/Anonymous-Seal.jpg" alt="placehold.it/350x250" >
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <h4 class="list-group-item-heading"> Team Anonymous </h4>
                            <p class="list-group-item-text">
                                There are 3 pending changes:
                            </p>
                            <ul>
                                <li>Task 2 (<i>Module Architecture</i>) <font color="0099FF">completed</font> on <b>10/29/14</b></li>
                                    <ul>
                                    <li>Time: 4 days</li>
                                    <li>Cost: $5.50</li>
                                    <li>Lines of Code: 0</li>
                                    </ul>
                                <li>Budget <font color="FF9933">updated</font> on <b>10/30/14</b></li>
                                    <ul>
                                    <li>Item <i>Raspberry Pi</i> added for <i>$49.95</i></li>
                                    <li>Total cost increased <i>$49.95</i> to <i>$780.35</i></li>
                                    </ul>
                                <li>Task 3 (<i>Scaffolding Implementation</i>) <font color="00CC66">started</font> on <b>11/1/14</b></li>
                            </ul>
                        </div>
                        <div class="col-md-3 text-center">
                            <h2><small>Progress:</small> 8%</h2>
                            <span class="glyphicon glyphicon-arrow-down"></span>
                            <h2><small>Progress:</small> 11%</h2>
                            <button type="button" class="btn btn-default btn-lg btn-block"> Accept </button>
                            <button type="button" class="btn btn-default btn-lg btn-block"> Decline </button>
                        </div>
                    </div>

<!--                     <div class="list-group-item">
                        <div class="media col-md-3">
                            <figure class="pull-left">
                                <img height="250" width="350" class="media-object img-rounded img-responsive"  src="http://www.utne.com/~/media/Images/UTR/Editorial/Articles/Magazine%20Articles/2012/11-01/Anonymous%20Hacktivist%20Collective/Anonymous-Seal.jpg" alt="placehold.it/350x250" >
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <h4 class="list-group-item-heading"> Team Anonymous </h4>
                            <p class="list-group-item-text">
                                There are 3 pending changes:
                            </p>
                            <ul>
                                <li>Task 2 (<i>Module Architecture</i>) <font color="0099FF">completed</font> on <b>10/29/14</b></li>
                                    <ul>
                                    <li>Time: 4 days</li>
                                    <li>Cost: $5.50</li>
                                    <li>Lines of Code: 0</li>
                                    </ul>
                                <li>Budget <font color="FF9933">updated</font> on <b>10/30/14</b></li>
                                    <ul>
                                    <li>Item <i>Raspberry Pi</i> added for <i>$49.95</i></li>
                                    <li>Total cost increased <i>$49.95</i> to <i>$780.35</i></li>
                                    </ul>
                                <li>Task 3 (<i>Scaffolding Implementation</i>) <font color="00CC66">started</font> on <b>11/1/14</b></li>
                            </ul>
                        </div>
                        <div class="col-md-3 text-center">
                            <h2><small>Progress:</small> 8%</h2>
                            <span class="glyphicon glyphicon-arrow-down"></span>
                            <h2><small>Progress:</small> 11%</h2>
                            <button type="button" class="btn btn-default btn-lg btn-block"> Accept </button>
                            <button type="button" class="btn btn-default btn-lg btn-block"> Decline </button>
                        </div>
                    </div> -->



                </div>
            </div>
        </div>
    </div>
</div>

@stop