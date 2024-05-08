@extends('admin.master')

@section('content')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>
<div class="app-main">
    @include('admin.partials._nav')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <style>
        .ck-editor__editable_inline {
            min-height: 300px;
        }
    </style>
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="app-page-title">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <div class="page-title-icon">
                            <i class="fas fa-hotel"></i>
                        </div>
                        <div> Hotel Rooms
                            <div class="page-title-subheading">Add Rooms
                            </div>
                        </div>
                    </div>
                    <div class="page-title-actions" hidden>
                        <button type="button" data-toggle="tooltip" title="Example Tooltip" data-placement="bottom" class="btn-shadow mr-3 btn btn-dark">
                            <i class="fa fa-star"></i>
                        </button>
                        <div class="d-inline-block dropdown">
                            <button type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="btn-shadow dropdown-toggle btn btn-info">
                                <span class="btn-icon-wrapper pr-2 opacity-7">
                                    <i class="fa fa-business-time fa-w-20"></i>
                                </span>
                                Buttons
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                <ul class="nav flex-column">
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-inbox"></i>
                                            <span>
                                                Inbox
                                            </span>
                                            <div class="ml-auto badge badge-pill badge-secondary">86</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-book"></i>
                                            <span>
                                                Book
                                            </span>
                                            <div class="ml-auto badge badge-pill badge-danger">5</div>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="javascript:void(0);" class="nav-link">
                                            <i class="nav-link-icon lnr-picture"></i>
                                            <span>
                                                Picture
                                            </span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a disabled href="javascript:void(0);" class="nav-link disabled">
                                            <i class="nav-link-icon lnr-file-empty"></i>
                                            <span>
                                                File Disabled
                                            </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    @if ($message = Session::get('success'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ $message }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <h2> Add Hotel </h2>
                    <form method="post" action="/createrooms" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group ">
                            <label>Room category</label>
                            <input type="text" class="form-control" name="title" placeholder="Room Category">
                         </div>
                         <div class="form-group ">
                            <label>Hote id</label>
                            <input type="text" class="form-control" name="hotel_owner_id" placeholder="Hotel id">
                        </div>
                        <div class="form-group ">
                            <label>Price</label>
                            <input type="text" class="form-control" name="price" placeholder="price">
                        </div>
                        <div class="form-group">
                            <label>Total Rooms</label>
                            <input type="number" class="form-control" name="total_rooms" placeholder="total_rooms">
                        </div>
                        <div class="form-group">
                            <label>room_gallery</label>
                            <input type="file" class="form-control" name="room_gallery" placeholder="room_gallery.">
                        </div>
                        <div class="form-group">
                            <label>Rating </label>
                            <input type="text" class="form-control" name="rating" placeholder="rating">
                        </div>
                        <div class="form-group">
                            <label>Available </label>
                            <input type="text" class="form-control" name="is_available" placeholder="is_available">
                        </div>
                        <div class="form-group">
                            <label>Thmbnail</label>
                            <input type="text" class="form-control" name="room_thumbnail" placeholder="room_thumbnail">
                        </div>
                        
                        <div class="form-group">
                            <label>Description</label>
                            <textarea id="descriptionEditor" class="form-control" name="description"></textarea>
                            <script>
                                ClassicEditor
                                    .create(document.querySelector('#descriptionEditor'))
                                    .catch(error => {
                                        console.error(error);
                                    });
                            </script>
                        </div>
                        <button type="submit" class="btn btn-primary col-12">Submit</button>
                    </form>
                    <hr />
                </div>
                <div class="col-3"></div>
            </div>
            @endsection