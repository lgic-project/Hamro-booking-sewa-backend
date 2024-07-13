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
                        <div class="card-title">Edit Rooms Details</div>
                        <hr />
                        <form class="" method="post" action="/updaterooms/{{$roomData->id}}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">

                                <div class="position-relative form-group col-6"><label for="photos" class="">Photo</label>
                                    <img src="/images/hotel/room/{{$roomData->room_gallery}}" style="width:100px; height:100px;" />
                                    <input name="room_gallery" id="room_gallery" accept="image/*" type="file" class="form-control-file" wfd-id="id6">
                                </div>

                                <div class="position-relative form-group col-6">
                                    <label for="title" class="">Title</label>
                                    <input name="title" id="title" value="{{$roomData->title}}" placeholder="Room Category" type="text" class="form-control" value="{{ $roomData->title }}" wfd-id="id4">
                                </div>

                                <div class="position-relative form-group col-6">
                                    <label for="description" class="">Description</label>
                                    <input name="description" id="description" value="{{$roomData->description}}" placeholder="Description" type="text" class="form-control" value="{{ $roomData->description }}" wfd-id="id4">
                                </div>

                                <div class="position-relative form-group col-6">
                                    <label for="price" class="">Price</label>
                                    <input name="price" id="price" value="{{$roomData->price}}" placeholder="Price" type="text" class="form-control" value="{{ $roomData->Price }}" wfd-id="id4">
                                </div>

                                <div class="position-relative form-group col-6">
                                    <label for="total_rooms" class="">Total rooms</label>
                                    <input name="total_rooms" id="total_rooms" value="{{$roomData->total_rooms}}" placeholder="total_rooms" type="text" class="form-control" value="{{ $roomData->total_rooms }}" wfd-id="id4">
                                </div>

                                <div class="position-relative form-group col-6">
                                    <label for="location" class="">is_available
                                    </label><input name="is_available" id="is_available" value="{{$roomData->is_available}}" placeholder="is_available" type="text" class="form-control" value="{{ $roomData->is_available }}" wfd-id="id4">
                                </div>
                                <div class="position-relative form-group col-6">
                                    <label for="room_thumbnail" class="">room_thumbnail
                                    </label><input name="room_thumbnail" id="room_thumbnail"accept="image/*" value="{{$roomData->room_thumbnail}}" placeholder="is_available" type="text" class="form-control" value="{{ $roomData->room_thumbnail }}" wfd-id="id4">
                                </div>
                                <div class="position-relative form-group col-6">
                                    <label for="rating" class="">rating
                                    </label><input name="rating" id="rating" value="{{$roomData->rating}}" placeholder="rating" type="text" class="form-control" value="{{ $roomData->rating }}" wfd-id="id4">
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