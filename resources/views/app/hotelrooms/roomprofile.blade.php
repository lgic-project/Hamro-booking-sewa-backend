@extends('admin.master')

@section('content')
<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">

        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="{{ asset('images/hotel/room/' . $roomData->room_thumbnail) }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">{{$roomData->title}}</h5>
                        
                        <div class="d-flex justify-content-center mb-2">
                        <a href="{{route('listrooms') }}" class="btn btn-primary btn-lg" style="font-size: 1.1rem;"><i class="fas fa-edit"></i>
                            Go Back</a>
                    </a>
                            <div class="modal fade" id="resumeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Employee Resume</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset('images/hotel/room/' . $roomData->room_gallery) }}" alt="Employee cv" class="img-fluid">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                           
                        </div>
                    </div>
                </div>
                <div class="card mb-4 mb-lg-0">
                    <div class="card-body p-0">
                        <ul class="list-group list-group-flush rounded-3">
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fas fa-globe fa-lg text-warning"></i>
                                <p class="mb-0">https://mdbootstrap.com</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-github fa-lg" style="color: #333333;"></i>
                                <p class="mb-0">mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-twitter fa-lg" style="color: #55acee;"></i>
                                <p class="mb-0">@mdbootstrap</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-instagram fa-lg" style="color: #ac2bac;"></i>
                                <p class="mb-0">Facebppk</p>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center p-3">
                                <i class="fab fa-facebook-f fa-lg" style="color: #3b5998;"></i>
                                <p class="mb-0">mdbootstrap</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mb-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Room Category</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$roomData->title}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">price</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$roomData->price}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Availability</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$roomData->is_available}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$roomData->employee_address}}</p>
                            </div>
                        </div>
                        <hr>

                    </div>
                </div>
                <div class="row">
                    <h4 style="text-align: center; margin-bottom:2rem;">Room Description</h4>
                    <div class="card-body col-md-12" style="text-align:justify">
                        <h5>{!!$roomData->description!!}</h5>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection