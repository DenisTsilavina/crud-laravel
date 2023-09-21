@extends('etudiant.layout')

@section('title')
All Students
@endsection
@section('content')
    <div class="row">
        <div class="col px-0 ">
            <a class="btn btn-primary float-end"  href="{{route('student.create')}}">Ajouter </a>
    </div>

    <div class="row mt-3">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Nom</th>
                <th>Email</th>
                <th>Place</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody id="userList">
            </tbody>
            <tbody>
                @foreach ($students as $singleStudent)
                <tr>
                    <th scope="col">{{$singleStudent->id}}</th>
                    <th scope="col">{{$singleStudent->name}}</th>
                    <th scope="col">{{$singleStudent->email}}</th>
                    <th scope="col">{{$singleStudent->place}}</th>
                    <th scope="col">
                        <a class="btn btn-warning float-end"
                         href="{{route('student.show',['id'=> $singleStudent->id])}}">Update</a>
                        <form action="{{route('student.delete',['id' => $singleStudent->id])}}"
                            method="post">
                          @method('DELETE')
                          @csrf
                          <button type="submit" class="btn btn-Danger">Supprimer</button>
                        </form>
                    </th>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
@endsection
</body>
</html>

