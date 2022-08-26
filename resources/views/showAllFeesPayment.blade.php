@extends('layouts.frontend')

@section('content')
    <div class="container mb-4">
        <div class="row justify-content-center">
            <div>
                <h1>Fees Payments</h1>
                <div>
                    <a href="" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Add new
                        payment</a>
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
                            <td class="d-none">Student_id</td>
                            <td>Student_name</td>
                            <td>Term_fees</td>
                            <td>Amount_paid</td>
                            <td>Fee_balance</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($payments as $payment)
                            <tr>
                                <td>{{ $payment->id }}</td>
                                <td class="d-none">{{ $payment->Student_id }}</td>
                                <td>{{ $payment->student->Student_name }}</td>
                                <td>{{ $payment->Term_fees }}</td>
                                <td>{{ $payment->Amount_paid }}</td>
                                <td>{{ $payment->Fee_balance }}</td>
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
                    <h5 class="modal-title" id="exampleModalLabel">Add Fee Payment</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="fees-payment/add-payment" method="POST" id="form">
                        @csrf

                        <div class="form-group mb-2">
                            <label for="">Student_id</label>
                            <input type="text" class="form-control" name="Student_id" id="Student_id">
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Term_fees</label>
                            <input type="text" class="form-control" name="Term_fees" id="Term_fees">
                        </div>
                        <div class="form-group mb-4">
                            <label for="">Amount_paid</label>
                            <input type="text" class="form-control" name="Amount_paid" id="Amount_paid">
                        </div>
                        <div class="form-group">
                            <input type="submit" id="submit" value="Add Payment" class="btn btn-success form-control">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
