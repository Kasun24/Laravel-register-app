@extends('people.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Person</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('people.index') }}"> Back</a>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="form-group">
            <strong>Image:</strong>
            <img src="/image/{{ $person->image }}" width="500px">
        </div>
        <div class="form-group">
            <strong>Name:</strong>
            {{ $person->name }}
        </div>
        <div class="form-group">
            <strong>Nic No:</strong>
            {{ $person->nic }}
        </div>
        <div class="form-group">
            <strong>Age:</strong>
            {{ $person->age }}
        </div>
        <div class="form-group">
            <strong>Date Of Birth:</strong>
            {{ $person->dob }}
        </div>
        <div class="form-group">
            <strong>Contact No:</strong>
            {{ $person->contact }}
        </div>
        <div class="form-group">
            <strong>Address:</strong>
            {{ $person->address }}
        </div>
        <div class="form-group">
            <strong>Religion:</strong>
            {{ $person->religion }}
        </div>
        <div class="form-group">
            <strong>Nationality:</strong>
            {{ $person->nationality }}
        </div>
    </div>
@endsection
