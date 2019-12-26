@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                    <!-- Button trigger modal -->
                    <a href="{{URL::to('/')}}/home/student/create">Add Student</a>
                    <a href="{{URL::to('/')}}/home/student">Go Back</a>
                    <form action="{{URL::to('/')}}/home/student/{{$id}}/update" method="POST">
                        @foreach($students as $student)
                        <input type="hidden" name="_token" class="token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Email" value="{{$student->fullname}}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{$student->address}}">
                        </div>
                        <button type="submit">Update</button>
                        @endforeach
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection