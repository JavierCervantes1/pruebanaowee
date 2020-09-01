@extends("app")

@section("contenido")

    <form class="row" action="{{ url('/customers') }}" method="post">
        @csrf
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card">
                <div class="card header autocenter">
                    <h1><strong>Customers</strong></h1>
                </div>
                <div class="card body">
                    <div class="row automargin">
                        <div class="from-group col-6">
                            <label for="">FirstName</label>
                            <input type="text" class="form-control" name="FirstName" required>
                        </div>
                        <div class="from-group col-6">
                            <label for="">LastName</label>
                            <input type="text" class="form-control" name="LastName" required>
                        </div>
                    </div>
                    <div class="row automargin">
                        <div class="from-group col-6">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="Email" required>
                        </div>
                        <div class="from-group col-6">
                            <label for="">Phone</label>
                            <input type="number" class="form-control" name="Phone"required>
                        </div>
                    </div>
                    <button class="btn btn-info btn-fixed" type="submit">Create</button>
                    
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
                            <td>FirstName</td>
                            <td>LastName</td>
                            <td>Email</td>
                            <td>Phone Number</td>
                            <td>Add</td>
                            <td>Options</td>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($customers as $customer)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $customer->FirstName }}</td>
                            <td>{{ $customer->LastName }}</td>
                            <td>{{ $customer->Email }}</td>
                            <td>{{ $customer->Phone }}</td>
                            <td><a href="{{ url('addresses/'.$customer->CustomerId) }}" class="btn btn-info">Address</a></td>
                            <td><a href="{{ url('/customers/'.$customer->CustomerId.'/edit') }}" class="btn btn-warning">Update</a>
                                <a href="{{ route('customer.destroy', $customer->CustomerId) }}" class="btn btn-danger">Delete</a></td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            <div class="col-1"></div>
        </div>
    </div>

@endsection