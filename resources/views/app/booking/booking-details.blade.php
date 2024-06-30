@extends('app.master')

@section('content')
<div class="app-main">
    @include('app.partials._nav')
    <div class="app-main__outer">
        <div class="page-body">
            <!-- Container-fluid starts-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header  card-header--2">

                                <div>
                                    <h5>Booking Details: {{ $endUserData->name }}</h5>
                                </div>
                            </div>

                            <div class="card-body">
                                <div>
                                    <ul>
                                        <li><strong>Booking Id: </strong> {{ $bookingData->booking_id }}</li>
                                        <li><strong>Full Name: </strong> {{ $endUserData->name }}
                                        <li><strong>Email Address: </strong> {{ $endUserData->email }}</li>
                                        <li><strong>Contact Number: </strong> {{ $endUserData->phone_number }}</li>
                                        <li><strong>Arrival Date & Time: </strong> {{ $bookingData->arrival_date }} || {{ $bookingData->arrival_time }}</li>
                                        <li><strong>Total Guest: </strong> {{ $bookingData->total_people }}</li>
                                        <li><strong>Room Price: </strong> {{ $roomData->title }}</li>
                                        <li><strong>Room Category: </strong> {{ $roomData->price }}</li>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection