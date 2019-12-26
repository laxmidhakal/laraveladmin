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
                    <a href="{{URL::to('/')}}/home/teacher/create">Add teacher</a>
                    <a href="{{URL::to('/')}}/home/teacher">Go Back</a>
                    <form>
                        @foreach($teachers as $teacher)
                        <input type="hidden" name="_token" class="token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="fullname">Fullname</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Email" value="{{$teacher->fullname}}">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Address" value="{{$teacher->address}}">
                        </div>
                         <div class="form-group">
                            <label for="phone">phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="phone" value="{{$teacher->phone}}">
                        </div>
                         <div class="form-group">
                            <label for="salary">salary</label>
                            <input type="text" class="form-control" id="salary" name="salary" placeholder="salary" value="{{$teacher->salary}}">
                        </div>
                        @endforeach
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection