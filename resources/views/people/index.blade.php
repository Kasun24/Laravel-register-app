@extends('people.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel Person Registration System</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('people.create') }}"> Create New Person</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <input class="form-control" id="myInput" type="text" placeholder="Search..">
    <br>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Image</th>
                <th>Name</th>
                <th>NIC No</th>
                <th>Age</th>
                <th>Date Of Birth</th>
                <th>Contact No</th>
                <th>Address</th>
                <th>Nationality</th>
                <th>Religion</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        @foreach ($people as $person)
            <tbody id="myTable">
                <tr>
                    <td>{{ ++$i }}</td>
                    <td><img src="/image/{{ $person->image }}" width="100px"></td>
                    <td>{{ $person->name }}</td>
                    <td>{{ $person->nic }}</td>
                    <td>{{ $person->age }}</td>
                    <td>{{ $person->dob }}</td>
                    <td>{{ $person->contact }}</td>
                    <td>{{ $person->address }}</td>
                    <td>{{ $person->nationality }}</td>
                    <td>{{ $person->religion }}</td>
                    <td>
                        <form action="{{ route('people.destroy', $person->id) }}" method="POST">

                            <a class="btn btn-info" href="{{ route('people.show', $person->id) }}">Show</a>

                            <a class="btn btn-primary" href="{{ route('people.edit', $person->id) }}">Edit</a>

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        @endforeach

    </table>

    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>

    {!! $people->links() !!}

@endsection
