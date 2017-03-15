@extends('layouts.app')
@section('title',"Edit ".$event->title)
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="pull-right">
                        <a href="{{ route('events.index') }}" class="btn btn-info btn-xs">Back</a>
                    </div>
                    <h4>Edit {{$event->title}}</h4>

                </div>

                <div class="panel-body">
                    <form action="{{ route('events.update',$event->id) }}" method="post">
                        {{ csrf_field() }}
                        {{ method_field('PUT') }}


                        <div class="form-group">
                          <label for="inputTitle" class="col-md-3 control-label">Title</label>
                          <div class="col-md-8">
                            <input type="text" class="form-control" id="inputTitle" placeholder="Title Event" name="title" value="{{ $event->title }}"> 
                          </div>
                        </div> 

                        <div class="form-group">
                          <label for="inputImg" class="col-md-3 control-label">Picture</label>
                          <div class="col-md-8">
                            <input type="url" class="form-control" id="inputImg" placeholder="Picture Event" name="img" value="{{ $event->img }}"> 
                          </div>
                        </div> 

                        <div class="form-group">
                          <label for="inputDate" class="col-md-3 control-label">Date</label>
                          <div class="col-md-8">
                            <input type="date" class="form-control" id="inputDate"  name="at" value="{{ $event->at }}"> 
                          </div>
                        </div> 

                        <div class="form-group">
                          <label for="textContent" class="col-md-3 control-label">Content</label>
                          <div class="col-md-8">
                            <textarea class="form-control" rows="5" id="textContent" placeholder="Content Event" name="content">{{ $event->content }}</textarea> 
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-8 col-lg-offset-4"><br>
                            <button type="reset" class="btn btn-default">Cancel</button>
                            <button type="submit" class="btn btn-primary">Update</button>
                          </div>
                        </div>
                        

                    </form> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
