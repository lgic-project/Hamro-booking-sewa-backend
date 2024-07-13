 @extends('app.master')

@section('content')
<div class="app-main">
    @include('app.partials._nav')
    <div class="app-main__outer">
        <div class="app-main__inner">
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Booking Id </th>
                            <th class="text-center">Booking Name  </th>
                            <th class="text-center">Total People </th>
                            <th class="text-center">Arrival Date </th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($bookingData as $bookingData)
                
                            <tr>
                                <td>{{ $bookingData->created_at->toDateString() }}</td>
                                <td><a
                                        href="/dashboard/view-booking/{{ $bookingData->id }}">{{ $bookingData->booking_id }}</a>
                                </td>
                               
                                <td>{{ $endUserData->name }}<</td>
                                <td>{{ $bookingData->total_people }}</td>
                                <td>{{ $bookingData->arrival_date }} </td>
                                
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection