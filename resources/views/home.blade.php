@extends('layouts.frontend')

@section('content')
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
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        You are logged in!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
