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
                    <table class="table table-striped table-hover ">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Title</th>
                          <th>Date</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tbody> 
                        @foreach($data as $item)
                            <tr>
                              <td>{{$item->id}}</td> 
                              <td>{{$item->title}}</td> 
                              <td>{{$item->at}}</td> 
                              <td>
                                <a href="{{ route('events.show',$item->id) }}" class="btn btn-xs btn-info">Show</a>
                                <a href="{{ route('events.edit',$item->id) }}" class="btn btn-xs btn-warning">Edit</a>

                                <form action="{{ route('events.destroy',$item->id) }}" method="post" class="btn btn-xs btn-dander"> 
                                  {{ csrf_field() }}
                                  {{ method_field('DELETE') }}
                                  <button type="submit" >Delete</button>
                                </form>
                              </td> 
                            </tr>
                        @endforeach
                      </tbody>
                    </table> 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
