@extends('templates.app')

@section('style')
    {!! HTML::style('css/achievements.css') !!}
@stop

@section('content')
    @include('partials.alerts.flash')
    <div class="container-fluid profile-theme" id="hero">
        <div class="wrapper container">
            <div class="page-header">
                <h1>My achievements</h1>
            </div>

            <div class="row">
                <!-- POINTS -->
                <div class="col-lg-6 col-md-12">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-trophy fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <h2 class="huge">Points</h2>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer text-center">
                            <h2>{{ $user->points }}</h2>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- RANK -->
                <div class="col-lg-6 col-md-12 col-md-offset-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-gamepad fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <h2 class="huge">Last games</h2>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <table class="table table-condensed">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Game</th>
                                        <th>Points</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    @foreach($games as $g)
                                        <tr>
                                            <th scope="row">{{ $i }}</th>
                                            <td>{{ $g->game->title }}</td>
                                            <td>{{ $g->points }}</td>
                                        </tr>
                                        <?php $i++; ?>
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- GAMES HISTORY -->
                <div class="col-lg-6 col-md-12">
                    <div class="panel panel-purple">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-mortar-board fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <h2 class="huge">Ranking</h2>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <table class="table table-condensed">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Points</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                    $pos = $row - sizeof($topranking);
                                ?>
                                @foreach($topranking as $toprank)
                                    <tr>
                                        <th scope="row">{{ $pos }}</th>
                                        <td>{{ $toprank->firstname }} {{ $toprank->name }}</td>
                                        <td>{{ $toprank->points }}</td>
                                    </tr>
                                    <?php $pos++; ?>
                                @endforeach
                                <tr class="active">
                                    <th scope="row">{{ $pos }}</th>
                                    <td>{{ $user->firstname }} {{ $user->name }}</td>
                                    <td>{{ $user->points }}</td>
                                </tr>
                                @foreach($lowranking as $lowrank)
                                    <?php $pos++; ?>
                                    <tr>
                                        <th scope="row">{{ $pos }}</th>
                                        <td>{{ $lowrank->firstname }} {{ $lowrank->name }}</td>
                                        <td>{{ $lowrank->points }}</td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Achievements -->
                <div class="col-lg-12 col-md-12">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-bar-chart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <h2 class="huge">Achievements</h2>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <div class="row">
                                @foreach($badges as $badge)
                                    <div class="col-xs-6 col-md-3 text-center">
                                        <h3>{{ $badge->title }}</h3>
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="{{ asset($badge->link) }}" alt="{{ $badge->title }}">
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection