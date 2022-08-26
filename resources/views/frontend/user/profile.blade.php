@extends('layouts.frontend')

@section('title')
    My Profile
@endsection

@section('content')
    
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">My Profile Page</h5>
                            <hr>
                            <form action="{{ url('my-profile-update') }}" method="POST" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-4 mb-3">
                                            <label for="">First Name</label>
                                            <input type="text" name="fname" class="form-control" value="{{ Auth::user()->name }}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="">Last Name</label>
                                            <input type="text" name="lname" class="form-control" value="{{ Auth::user()->lname }}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="">Email</label>
                                            <input type="text" class="form-control" readonly value="{{ Auth::user()->email }}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Address 1 (FlatNo, AptNo & Address)</label>
                                            <input type="text" name="address1" class="form-control" value="{{ Auth::user()->address1 }}">
                                        </div>
                                        <div class="col-md-6 mb-3">
                                            <label for="">Address 2 (Landmark, near by)</label>
                                            <input type="text" name="address2" class="form-control" value="{{ Auth::user()->address2 }}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="">City</label>
                                            <input type="text" name="city" class="form-control" value="{{ Auth::user()->city }}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="">State</label>
                                            <input type="text" name="state" class="form-control" value="{{ Auth::user()->state }}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="">Pincode / Zipcode</label>
                                            <input type="text" name="pincode" class="form-control" value="{{ Auth::user()->pincode }}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="">Phone Number</label>
                                            <input type="text" name="phone" class="form-control" value="{{ Auth::user()->phone }}">
                                        </div>
                                        <div class="col-md-4 mb-3">
                                            <label for="">Alternate Phone Number</label>
                                            <input type="text" name="alternate_phone" class="form-control" value="{{ Auth::user()->alternate_phone }}">
                                        </div>
                                        <div class="col-md-4 mt-md-4">
                                            <button type="submit" class="btn btn-primary">Update Profile</button>
                                        </div>
                                        <div class="col-md-4">
                                            <input type="file" name="image" class="form-control"> <br>
                                            <img src="{{ asset('uploads/profile/'.Auth::user()->image) }}" alt="" class="w-75">
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection