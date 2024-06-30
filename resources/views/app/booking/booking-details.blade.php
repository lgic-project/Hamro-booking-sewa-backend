@extends('admin.master')

@section('content')
    <div class="page-body">

        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header  card-header--2">

                            <div>
                                <h5>Booking Details: {{ $bookingData->packageName }}</h5>
                            </div>
                        </div>

                        <div class="card-body">
                            <div>
                                <ul>
                                    <li><strong>Booking Id: </strong> {{ $bookingData->booking_id }}</li>
                                    <li><strong>Package Name: </strong> {{ $bookingData->packageName }}</li>
                                    <li><strong>Full Name: </strong> {{ $bookingData->firstName }}
                                        {{ $bookingData->lastName }}</li>
                                    <li><strong>Gender: </strong> {{ $bookingData->gender }}</li>
                                    <li><strong>DOB: </strong> {{ $bookingData->dob }}</li>
                                    <li><strong>Nationality: </strong> {{ $bookingData->nationality }}</li>
                                    <li><strong>Email Address: </strong> {{ $bookingData->emailAddress }}</li>
                                    <li><strong>Contact Number: </strong> {{ $bookingData->contactNumber }}</li>
                                    <li><strong>Country: </strong> {{ $bookingData->country }}</li>
                                    <li><strong>Province: </strong> {{ $bookingData->province }}</li>
                                    <li><strong>State: </strong> {{ $bookingData->state }}</li>
                                    <li><strong>Trip Date: </strong> {{ $bookingData->tripDate }}</li>
                                    <li><strong>Total Guest: </strong> {{ $bookingData->guestCount }}</li>
                                    <li><strong>Total Price: </strong> {{ $bookingData->totalPrice }}</li>
                                    <li><strong>Specific Requirement: </strong> {{ $bookingData->specificRequirement }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection