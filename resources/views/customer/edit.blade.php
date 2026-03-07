@extends('welcome')

@section('content')

<div class="container mt-5">
    <h4 class="text-center">Update Customer Data</h4>
    <a href="{{ route('customer.index') }}" class="btn btn-primary mb-3">Customer List</a>
    <!--display success message-->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
         @endif
 <div class="mb-3">
<form method="POST" action="{{ route('customer.update', $customer->id) }}" method="POST">
    @csrf
    @method('PUT')
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Customer Name</label>
    <input type="text" class="form-control @error('customer_name')
        is-invalid

    @enderror"
  value="{{ old('customer_name', $customer->customer_name) }}"
  placeholder="Enter the customer name"
  name="customer_name"
  id="exampleInputEmail1"
  aria-describedby="emailHelp">

  </div>


 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Customer Phone</label>
    <input type="text" class="form-control @error('customer_phone')
        is-invalid
    @enderror"
    value="{{ old('customer_phone', $customer->customer_phone) }}"
    placeholder="Enter the customer phone"
    id="exampleInputPassword1" name="customer_phone">
  </div>
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Customer Email</label>
    <input type="email" class="form-control @error('customer_email')
        is-invalid
    @enderror"
    value="{{ old('customer_email', $customer->customer_email) }}"
    placeholder="Enter the customer email"
    id="exampleInputPassword1" name="customer_email">
  </div>


  <button type="submit" class="btn btn-primary">Update</button>
</form>

</div>


@endsection
