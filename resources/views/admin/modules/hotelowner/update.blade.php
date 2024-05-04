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
                        <div class="card-title">Edit hotel details</div>
                        <hr />
                        <form class="" method="post" action="/update/{{$hotelownerData->id}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="position-relative form-group col-6"><label for="photos" class="">Photo</label>
                                    <img src="images/hotel/{{$hotelownerData->photos}}" style="width:100px; height:100px;" />
                                    <input name="photos" id="photos" type="file" class="form-control-file" wfd-id="id6">
                                </div>

                                <div class="position-relative form-group col-6"><label for="title" class="">Title</label><input name="owner_title" id="owner_title" value="{{$hotelownerData->title}}" placeholder="Title" type="text" class="form-control" value="{{ $hotelownerData->title }}" wfd-id="id4">
                                </div>

                                <div class="position-relative form-group col-6"><label for="description" class="">Description</label><input name="owner_description" id="owner_description" value="{{$hotelownerData->description}}" placeholder="Description" type="text" class="form-control" value="{{ $hotelownerData->description }}" wfd-id="id4">
                                </div>

                                <div class="position-relative form-group col-6"><label for="phone_number" class="">Phone Number</label><input name="owner_phone_number" id="owner_phone_number" value="{{$hotelownerData->phone_number}}" placeholder="Phone Number" type="text" class="form-control" value="{{ $hotelownerData->phone_number }}" wfd-id="id4">
                                </div>

                                <div class="position-relative form-group col-6"><label for="email" class="">Email</label><input name="owner_email" id="owner_email" value="{{$hotelownerData->email}}" placeholder="Email" type="text" class="form-control" value="{{ $hotelownerData->email }}" wfd-id="id4">
                                </div>

                                <div class="position-relative form-group col-6"><label for="location" class="">Location</label><input name="owner_location" id="owner_location" value="{{$hotelownerData->location}}" placeholder="Location" type="text" class="form-control" value="{{ $hotelownerData->location }}" wfd-id="id4">
                                </div>

                                <div class="position-relative form-group col-6"><label for="rating" class="">Rating</label><input name="owner_rating" id="owner_rating" value="{{$hotelownerData->rating}}" placeholder="Rating" type="text" class="form-control" value="{{ $hotelownerData->rating }}" wfd-id="id4">
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