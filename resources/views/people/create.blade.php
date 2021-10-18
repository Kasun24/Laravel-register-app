@extends('people.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Person</h2>
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
     
<form action="{{ route('people.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
    <div class="container">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
            <div class="form-group">
                <strong>Nic No:</strong>
                <input type="text" name="nic" class="form-control" placeholder="Nic No">
            </div>
            <div class="form-group">
                <strong>Age:</strong>
                <input type="text" name="age" class="form-control" placeholder="Age">
            </div>
            <div class="form-group">
                <strong>Date Of Birth:</strong>
                <input type="date" name="dob" class="form-control">
            </div>
            <div class="form-group">
                <strong>Contact No:</strong>
                <input type="text" name="contact" class="form-control" placeholder="Phone Number">
            </div>
            <div class="form-group">
                <strong>Address:</strong>
                <textarea class="form-control" style="height:150px" name="address" placeholder="Address"></textarea>
            </div>
            <div class="form-group">
                <strong>Nationality:</strong>
                <select class="custom-select" id="inlineFormCustomSelect" name="nationality">
                    <option selected></option>
                    <option value="Sinhala">Sinhala</option>
                    <option value="Tamil">Tamil</option>
                    <option value="Muslim">Muslim</option>
                    <option value="Burgher">Burgher</option>
                    <option value="Other">Other</option>
                </select>            
            </div>
            <div class="form-group">
                <strong>Religion:</strong>
                <select class="custom-select" id="inlineFormCustomSelect" name="religion">
                    <option selected></option>
                    <option value="Buddhism">Buddhism</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Islam">Islam</option>
                    <option value="Christians">Christian</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
                <button type="submit" class="btn btn-primary">Submit</button>
    </div>
     
</form>
@endsection 