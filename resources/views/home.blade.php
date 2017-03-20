@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="pull-right">
                        <a href="{{ route('events.create') }}" class="btn btn-success btn-xs">Add Event</a>
                    </div>
                    <h4>Events List</h4>

                </div>

                <div class="panel-body">
                    @foreach($data as $k=>$item)
                        <h1>{{ ($k+1).' - '.$item->title }}</h1>
                    @endforeach
                    {{ $data->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
