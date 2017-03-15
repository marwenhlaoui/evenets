@extends('layouts.app')
@section('title',$event->title)
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="pull-right">
                        <a href="{{ route('events.create') }}" class="btn btn-success btn-xs">Add Event</a>
                        <a href="{{ route('events.index') }}" class="btn btn-info btn-xs">Back</a> 
                    </div>
                    <h4>{{$event->title}}</h4>

                </div>

                <div class="panel-body">
                    <img src="{{ $event->img }}" style="max-width: 100%;min-width: 100%">
                    <b>{{ $event->at }}</b>
                    <p>{{ $event->content }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
