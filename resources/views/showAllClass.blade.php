@extends('layouts.frontend')

@section('content')
    <div class="container mb-4">
        <div class="row justify-content-center">
            <div>
                <h1>All Classes</h1>
                <div>
                    <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add new
                        class</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-2">
                <div class="list-group">
                    <a href="/class" class="list-group-item list-group-item-action">Classes</a>
                    <a href="/student" class="list-group-item list-group-item-action">Students</a>
                    <a href="/fees-payment" class="list-group-item list-group-item-action">Fees Payments</a>
                </div>
            </div>
            <div class="col-10">
                <table class="table" id="myTable">
                    <thead>
                        <tr>
                            <td>id</td>
                            <td>Class_name</td>
                            <td>Teacher_name</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($classes as $class)
                            <tr>
                                <td>{{ $class->id }}</td>
                                <td>{{ $class->Class_name }}</td>
                                <td>{{ $class->Teacher_name }}</td>
                                <td> <a href="javascript:void(0)" class="btn btn-warning showEditModal">Edit</a> </td>
                                <td>
                                    <form action='class/{{ $class->id }}' method="POST">

                                        @csrf

                                        <input type="submit" value="Delete" class="btn btn-danger">

                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>

                </table>
            </div>
        </div>

    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Class</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="class/add-class" method="POST" id="form">
                        @csrf

                        <div class="form-group mb-2">
                            <label for="">Class_name</label>
                            <input type="text" class="form-control" name="Class_name" id="Class_name">
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Teacher_name</label>
                            <input type="text" class="form-control" name="Teacher_name" id="Teacher_name">
                        </div>
                        <div class="form-group">
                            <input type="submit" id="submit" value="Add Class" class="btn btn-success form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
