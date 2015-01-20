@extends('layouts.master')

@section('head')
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/css/circliful.css') }}" media="screen" />
<script src="{{ URL::asset('assets/js/circliful.min.js') }}"></script>
<script>
    $( document ).ready(function() {
        var width = $('.timerWidget').innerWidth();
        $('#timerChart').data( "dimension", width );

        $(window).resize(function() {
            $('#timerChart').data( "dimension", $('.timerWidget').innerWidth() );
            if($('.timerWidget').innerWidth() <= 126){
                $('#timerChart').data( "width", 8 );
            } else {
                $('#timerChart').data( "width", 30 );
            }
            $('#timerChart').empty();
            $('#timerChart').circliful();

        });
        $('#thinStat').circliful();
        $('#timerChart').circliful();
    });
</script>
@stop

@section('left-col')
<div class="panel panel-default">
    <div class="panel-body">
        <div class="timerWidget">
            <div id="timerChart" data-dimension="250" data-text="40.5" data-info="Hours Available" data-width="30" data-fontsize="20" data-percent="46" data-fgcolor="#61a9dc" data-bgcolor="#eee" data-total="150" data-part="72" data-border="inline" data-icon="users" data-icon-size="28" data-icon-color="#ccc"></div>
            <p>percentage of quoted total hours.</p>
        </div>
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        Totals<br />
        Un-billed Hours<br />
    </div>
</div>
@stop

@section('center-col')
<div class="row">
    <div class="panel panel-default">
        <div class="panel-body">
            Today's tasks
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-body">
            Recent Tasks
        </div>
    </div>
</div>
@stop

@section('right-col')
<div class="panel panel-default">
    <div class="panel-body">
        Recent Clients
    </div>
</div>
<div class="panel panel-default">
    <div class="panel-body">
        Client list
    </div>
</div>
@stop