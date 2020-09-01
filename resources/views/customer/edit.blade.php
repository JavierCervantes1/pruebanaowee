@extends("app")

@section("contenido")

    <form class="row" action="{{ url('/customers/'.$customer->CustomerId) }}" method="post">
        {{ method_field('PUT') }}
        @csrf

        <div class="col-2"></div>
        <div class="col-8">
            <div class="card">
                <div class="card header autocenter">
                    <h2><strong>Updating Data Customer</strong></h2>
                </div>
                <div class="card body">
                    <div class="row automargin">
                        <div class="from-group col-6">
                            <label for="">FirstName</label>
                            <input type="text" class="form-control" name="FirstName" value="{{ $customer->FirstName }}" required>
                        </div>
                        <div class="from-group col-6">
                            <label for="">LastName</label>
                            <input type="text" class="form-control" name="LastName" value="{{ $customer->LastName }}" required>
                        </div>
                    </div>
                    <div class="row automargin">
                        <div class="from-group col-6">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="Email" value="{{ $customer->Email }}" required>
                        </div>
                        <div class="from-group col-6">
                            <label for="">Phone</label>
                            <input type="number" class="form-control" name="Phone" value="{{ $customer->Phone }}" required>
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