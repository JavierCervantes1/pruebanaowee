@extends("app")

@section("contenido")

    <form class="row" action="{{ url('addresses/'.$customer->CustomerId) }}" method="post">
        @csrf
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card">
                <div class="card header autocenter">
                    <h1><strong>Add Address for Customer: {{ $customer->FirstName }}  {{ $customer->LastName }}</strong></h1>
                </div>
                <div class="card body">
                    <div class="row automargin">
                        <div class="from-group col-6">
                            <label for="">AddressLine</label>
                            <input type="text" class="form-control" name="AddressLine" value="" required>
                        </div>
                        <div class="from-group col-6">
                            <label for="">City</label>
                            <input type="text" class="form-control" name="City" required>
                        </div>
                    </div>
                    <div class="row automargin">
                        <div class="from-group col-6">
                            <label for="">State/Province</label>
                            <input type="text" class="form-control" name="StateProvince" required>
                        </div>
                        <div class="from-group col-6">
                            <label for="">Country Region</label>
                            <input type="text" class="form-control" name="CountryRegion" required>
                        </div>
                    </div>
                    <button class="btn btn-info btn-fixed" type="submit">Associate!</button> 
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </form>
</br>
<div class="row">
        <div class="col-1"></div>
            <div class="col-10">
        <table class="table table-striped">
            <thead class="thead-light">
                <tr>
                    <td>#</td>
                    <td>AddressLine</td>
                    <td>City</td>
                    <td>State/Province</td>
                    <td>Country Region</td>
                    <td>Add</td>
                    <td>Options</td>
                </tr>
            </thead>
            <tbody>
                @foreach($addresses as $address)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $address->AddressLine }}</td>
                    <td>{{ $address->City }}</td>
                    <td>{{ $address->StateProvince }}</td>
                    <td>{{ $address->CountryRegion }}</td>
                    <td><a href="{{ route('SalesRoute', [$customer->CustomerId, $address->AddressId]) }}" class="btn btn-info">Sales Order</a></td>
                    <td><a href="{{ url('/addresses/'.$address->AddressId.'/'.$customer->CustomerId.'/edit') }}" class="btn btn-warning">Update</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
        </div>
        <div class="col-1"></div>
    </div>

@endsection