@extends("app")

@section("contenido")

    <form class="row" action="{{ route('SalesPostRoute', [$customer->CustomerId, $address->AddressId]) }}" method="post">
        @csrf
        <div class="col-2"></div>
        <div class="col-8">
            <div class="card">
                <div class="card header autocenter">
                    <h1><strong>Make Sales Order</strong></h1>
                </div>
                <div class="card body">
                    <div class="row automargin">
                        <div class="from-group col-6">
                            <label for="">Order Date</label>
                            <input type="datetime-local" class="form-control" name="OrderDate" required>
                        </div>
                        <div class="from-group col-6">
                            <label for="">Status</label>
                            <input type="number" class="form-control" name="Status" required>
                        </div>
                    </div>
                    <button class="btn btn-info btn-fixed" type="submit">Order!</button>
                    
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
                        <td>Order Date</td>
                        <td>Status</td>
                        <td>ChangeStatus</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sales as $sale)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $sale->OrderDate }}</td>
                        <td>{{ $sale->Status }}</td>
                        <td>Update</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection