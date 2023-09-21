@extends('etudiant.layout')
@section('content')
    <div class="px-content">
        <div class="page-header">
            <div class="row">
                <div class="col-md-4 text-xs-center text-md-left text-nowrap">
                    <h1>
                        <i class="px-nav-icon ion-android-apps"></i>Edit n ° {{$student->id}}
                    </h1>
                </div>

                <hr class="page-wide-block visible-xs visible-sm">
                <!-- Spacer -->
                <div class="m-b-2 visible-xs visible-sm clearfix"></div>
            </div>
        </div>
        <div class="row">
            <div class="panel">
                <div class="panel-body">
                    <div class="table-responsive">
                        <form class="panel-body" action="{{route('student.update',['id'=> $student->id])}}" method="POST">
                            @csrf
                            @method('PUT')
                            <fieldset class="form-group">
                            <label for="form-group-input-1">Name</label>
                                <input type="text" name="name" class="form-control" id="form-group-input-1" value="{{$student->name}}">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="form-group-input-1">Email</label>
                                <input type="text" name="email" class="form-control" id="form-group-input-1" value="{{$student->email}}">
                            </fieldset>
                            <fieldset class="form-group">
                                <label for="form-group-input-1">Place</label>
                                <input type="text" name="place" class="form-control" id="form-group-input-1" value="{{$student->place}}">
                            </fieldset>
                            <button type="submit" class="btn btn-primary pull-right">Entre</button>
                        </form>
                    </div>  
                </div>
            </div>
        </div>
    </div>
@endsection