@extends("app")

@section("contenido")

    <form class="row" action="{{ url('/addresses/'.$address->AddressId.'/'.$customer->CustomerId) }}" method="post">
        {{ method_field('PUT') }}
        @csrf

        <div class="col-2"></div>
        <div class="col-8">
            <div class="card">
                <div class="card header autocenter">
                    <h1><strong>Updating Address</strong></h1>
                </div>
                <div class="card body">
                    <div class="row automargin">
                        <div class="from-group col-6">
                            <label for="">AddressLine</label>
                            <input type="text" class="form-control" name="AddressLine" id="AddressLine" value=" {{ $address->AddressLine }}" required>
                        </div>
                        <div class="from-group col-6">
                            <label for="">City</label>
                            <input type="text" class="form-control" name="City" value=" {{ $address->City }} " required>
                        </div>
                    </div>
                    <div class="row automargin">
                        <div class="from-group col-6">
                            <label for="">State/Province</label>
                            <input type="text" class="form-control" name="StateProvince" value=" {{ $address->StateProvince }} " required>
                        </div>
                        <div class="from-group col-6">
                            <label for="">Country Region</label>
                            <input type="text" class="form-control" name="CountryRegion" value=" {{ $address->CountryRegion }} " required>
                        </div>
                    </div>
                    <button class="btn btn-info btn-fixed" type="submit">Save New Values!</button> 
                </div>
            </div>
        </div>
        <div class="col-2"></div>
    </form>
</br>

@endsection