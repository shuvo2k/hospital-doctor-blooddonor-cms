@extends('layouts.base')
@section('title')

    @push('css')
        <link rel="stylesheet" href="../style/log/css/signup.css">
    @endpush


@section('content')
    <div class="form-area">

        <div class="row">
            <div class="col-lg-2">
                <div class="container-fluid">
                    {{--                <div class="row signup-img">--}}
                    {{--                    <img src="img/logo4.png" alt="">--}}
                    {{--                </div>--}}

                </div>
            </div>
            <div class="col-lg-8">
                <!-- error -->
                @if ($errors->any()) @foreach ($errors->all() as $error)
                    <div class="alert alert-danger alert-dismissible">
                        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> {{ $error }}
                    </div>
                @endforeach @endif

                @if (session()->has('error_password'))
                    <div class="alert alert-danger alert-dismissible">
                        {{ session('error_password') }}
                    </div>
            @endif
            <!-- error end -->
                <div class="container-fluid">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row justify-content-left">
                                        <h4>Healthline</h4>
                                    </div>
                                    <div class="row justify-content-left">
                                        <p>Create a Healthline Account</p>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form class="form-container" action="{{route('signup.post')}}" method="post">
                                        @csrf
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Frist Name</label>
                                                <input type="text" name="first_name" class="form-control"
                                                       placeholder="First Name" value="{{ old('first_name') }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Last Name</label>
                                                <input type="text" class="form-control" name="last_name"
                                                       placeholder="Last Name" value="{{ old('last_name') }}">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Who are You?</label>
                                            <select class="form-control" name="role" value="{{ old('role') }}">
                                                <option selected disabled>Select</option>
                                                <option>Health Org</option>
                                                <option>Doctor</option>
                                                <option>Blood Donner</option>
                                            </select>
                                        </div>

                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Email </label>
                                                <input type="email" class="form-control" name="email"
                                                       placeholder="Enter Email" value="{{ old('email') }}">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Mobile No </label>
                                                <input type="number" class="form-control" name="mobile_no"
                                                       placeholder="Enter Mobile Number" value="{{ old('mobile_no') }}">
                                            </div>
                                        </div>
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">Password</label>
                                                <input type="password" class="form-control" name="password"
                                                       placeholder="Enter Password">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">Confirm Password</label>
                                                <input type="password" class="form-control" name="password_confirm"
                                                       placeholder="Confirm Password">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Sign Up</button>
                                    </form>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="container-fluid">
                    <div class="row signup-img">
                        <img src="img/logo4.png" alt="">
                    </div>

                </div>
            </div>

        </div>

    </div>
@endsection



@push('js')
@endpush
