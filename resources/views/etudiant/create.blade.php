@extends('etudiant.layout')

@section('content')
    <div class="panel panel-default">
        <div class="panel-body">
            <p style="font-size:20px; font-weight:bold;">Create new students</p>
            <form action="{{ route('student.store') }}" method="POST">
                @csrf
                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control">

                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" class="form-control">

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>

                <div class="form-group{{ $errors->has('place') ? ' has-error' : '' }}">
                    <label for="place">place</label>
                    <input type="text" name="place" id="place" class="form-control">

                    @if ($errors->has('place'))
                        <span class="help-block">
                            <strong>{{ $errors->first('place') }}</strong>
                        </span>
                    @endif
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{route('student.page')}}" class="btn btn-secondary" >Cancel</a>
            </form>
        </div>
    </div>
@endsection