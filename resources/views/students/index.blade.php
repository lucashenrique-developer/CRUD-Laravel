@extends('students.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel CRUD</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/student/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            Add New
                        </a>
                        <br>
                        <br>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>Adress</th>
                                        <th>Mobile</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->adress }}</td>
                                        <td>{{ $item->mobile }}</td>
                                        <td>
                                            <a href="{{ url('/student/' . $item->id ) }}" title="View Student"><button class="btn btn-info btn-sm">View</button></a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm">Edit</button></a>

                                            <form action="{{ url('student/' .$item->id) }}" method="POST" style="display:inline;">
                                            {{ method_field('DELETE') }}
                                             {{ csrf_field() }}
                                             <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm Delete?')">Delete</button>   
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
    </div>
@endsection
