@extends('layouts.frontend')

@section('content')
    <div class="container mb-4">
        <div class="row justify-content-center">
            <div>
                <h1>All Students</h1>
                <div>
                    <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#newStudentModal">Add new
                        student</a>
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
                            <td>Student_name</td>
                            <td class="d-none">Class_id</td>
                            <td>Class_name</td>
                            <td>Teacher_name</td>
                            <td>Edit</td>
                            <td>Delete</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr>
                                <td>{{ $student->id }}</td>
                                <td>{{ $student->Student_name }}</td>
                                <td class="d-none">{{ $student->Class_id }}</td>
                                <td>{{ $student->myClass->Class_name }}</td>
                                <td>{{ $student->myClass->Teacher_name }}</td>
                                <td> <a href="javascript:void(0)" class="btn btn-warning showStudentEditModal">Edit</a>
                                </td>
                                <td>
                                    <form action='student/{{ $student->id }}' method="POST">

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

    <div class="modal fade" id="newStudentModal" tabindex="-1" role="dialog" aria-labelledby="newStudentModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="newStudentModalLabel">Add Student</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="student/add-student" method="POST" id="form">
                        @csrf

                        <div class="form-group mb-2">
                            <label for="">Student_name</label>
                            <input type="text" class="form-control" name="Student_name" id="Student_name">
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Class_id</label>
                            <input type="text" class="form-control" name="Class_id" id="Class_id">
                        </div>
                        <div class="form-group">
                            <input type="submit" id="submit" value="Add Student" class="btn btn-success form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
