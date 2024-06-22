@extends('admin.master')

@section('content')
<div class="app-main">
    @include('admin.partials._nav')

    <style>
        label {
            font-size: 1.1rem;
            font-weight: 600;
        }
    </style>
    <div class="app-main__outer">
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-body">
                        <div class="card-title">Edit Users details</div>
                        <hr />
                        <form class="" method="post" action="/localusers/update/{{$localUsersData->id}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="position-relative form-group col-6"><label for="name" class="">Full Name</label><input name="name" id="name" value="{{$localUsersData->name}}" placeholder="full-name" type="text" class="form-control" value="{{ $localUsersData->name }}" wfd-id="id4">
                                </div>

                                <div class="position-relative form-group col-6">
                                    <label for="category" class="">Category</label>
                                    <select name="category" id="category" class="form-control">
                                        <option value="">Select a category</option>
                                        <option value="superadmin" {{ $localUsersData->category == 'superadmin' ? 'selected' : '' }}>Superadmin</option>
                                        <option value="hotel" {{ $localUsersData->category == 'hotel' ? 'selected' : '' }}>Hotel</option>
                                        <option value="user" {{ $localUsersData->category == 'user' ? 'selected' : '' }}>User</option>
                                    </select>
                                </div>


                                <div class="position-relative form-group col-6"><label for="email" class="">Email</label><input name="email" id="email" value="{{$localUsersData->email}}" placeholder="Email" type="text" class="form-control" value="{{ $localUsersData->email }}" wfd-id="id4">
                                </div>

                                <div class="position-relative form-group col-6"><label for="password" class="">Password</label><input name="password" id="password" value="{{$localUsersData->password}}" placeholder="Password" type="password" class="form-control" value="{{ $localUsersData->password }}" wfd-id="id4">
                                </div>

                                <div class="position-relative form-group col-6"><label for="phone_number" class="">Phone Number</label><input name="phone_number" id="phone_number" value="{{$localUsersData->phone_number}}" placeholder="Phone Number" type="text" class="form-control" value="{{ $localUsersData->phone_number }}" wfd-id="id4">
                                </div>

                            </div>
                            <button class="btn btn-primary col-4">Submit</button>
                        </form>
                    </div>
                    <div class="app-wrapper-footer">
                        <div class="app-footer">
                            <div class="app-footer__inner">
                                <div class="app-footer-left">
                                    <ul class="nav">
                                        <li class="nav-item">
                                            <a href="javascript:void(0);" class="nav-link" style="font-size: 20px; align-content:center;">
                                                © 2024 Hamro Booking Sewa
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="app-footer-right">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        @endsection