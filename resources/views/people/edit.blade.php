@extends('people.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Person</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('people.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('people.update', $person->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="container">

            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" value="{{ $person->name }}" class="form-control">
            </div>
            <div class="form-group">
                <strong>Nic No:</strong>
                <input type="text" name="nic" value="{{ $person->nic }}" class="form-control">
            </div>
            <div class="form-group">
                <strong>Age:</strong>
                <input type="text" name="age" value="{{ $person->age }}" class="form-control">
            </div>
            <div class="form-group">
                <strong>Date Of Birth:</strong>
                <input type="date" name="dob" value="{{ $person->dob }}" class="form-control">
            </div>
            <div class="form-group">
                <strong>Contact No:</strong>
                <input type="text" name="contact" value="{{ $person->contact }}" class="form-control">
            </div>
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="address" value="{{ $person->address }}" class="form-control">
            </div>
            <div class="form-group">
                <strong>Nationality:</strong>
                <input type="text" name="nationality" value="{{ $person->nationality }}" class="form-control">
            </div>
            <div class="form-group">
                <strong>Religion:</strong>
                <input type="text" name="religion" value="{{ $person->religion }}" class="form-control">
            </div>
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
                <img src="/image/{{ $person->image }}" width="300px">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>

    </form>
@endsection
