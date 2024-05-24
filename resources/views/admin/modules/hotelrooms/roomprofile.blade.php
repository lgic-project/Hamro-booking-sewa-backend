@extends('admin.master')

@section('content')
<section style="background-color: #eee;">
    <div class="container py-5">
        <div class="row">
            <div class="col">
                <nav aria-label="breadcrumb" class="bg-body-tertiary rounded-3 p-3 mb-4">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">User</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$employeeData->employee_first_name}}</li>
                    </ol>
                </nav>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="card mb-4">
                    <div class="card-body text-center">
                        <img src="{{ asset('images/employee/profile/' . $employeeData->employee_image) }}" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                        <h5 class="my-3">{{$employeeData->employee_first_name}}</h5>
                        <p class="text-muted mb-4">{{$employeeData->employee_address}}</p>
                        <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#resumeModal">
                                View Resume
                            </button>
                            <div class="modal fade" id="resumeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Employee Resume</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <img src="{{ asset('images/employee/cv/' . $employeeData->employee_cv) }}" alt="Employee cv" class="img-fluid">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <a href="/employee/verification/{{$employeeData->id}}"> <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary ms-1">{{$employeeData->employee_status}}</button></a>
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
                                <p class="mb-0">mdbootstrap</p>
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
                                <p class="mb-0">Full Name</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$employeeData->employee_first_name . " " . $employeeData->employee_middle_name . " " . $employeeData->employee_last_name}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Email</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$employeeData->employee_email}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Phone</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$employeeData->employee_contact}}</p>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <p class="mb-0">Address</p>
                            </div>
                            <div class="col-sm-9">
                                <p class="text-muted mb-0">{{$employeeData->employee_address}}</p>
                            </div>
                        </div>
                        <hr>

                    </div>
                </div>
                <div class="row">
                    <h4 style="text-align: center; margin-bottom:2rem;">Employee Description</h4>
                    <div class="card-body col-md-12" style="text-align:justify">
                        <h5>{{$employeeData->employee_description}}</h5>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit repellat voluptas nobis saepe recusandae soluta nesciunt assumenda veritatis nihil consequatur error harum laborum necessitatibus, odio voluptatem dolor modi rerum nulla!
                        Voluptatem commodi ipsa quidem maiores cum reprehenderit eveniet hic cumque officia deserunt itaque delectus, culpa eaque et explicabo, exercitationem accusantium labore ipsum blanditiis reiciendis architecto quo cupiditate aspernatur. Ipsum, aliquam!
                        Cupiditate rem officiis, illo harum quasi quas minus provident nostrum porro asperiores est fuga dolorem aperiam maxime consequuntur accusamus consequatur dolorum sed facere neque voluptas ullam. Sit aspernatur magni aperiam?
                        Delectus in repudiandae, facilis laudantium culpa ut saepe quas. Architecto ex molestiae omnis, sunt, iusto reiciendis quas, autem at quo veniam ducimus libero amet rerum sint cum esse officiis doloribus?
                        Obcaecati, voluptatem! Architecto eligendi ullam repellendus facilis vitae eos alias dolores ex eum, voluptas quibusdam nisi sint suscipit, nam qui ipsam ea earum ducimus fugiat cumque consequuntur reprehenderit quasi odio.
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection