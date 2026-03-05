@extends('welcome')

@section('content')

<div class="container mt-5">
       <!--display success message-->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
         @endif
         <h4>Total Customers: {{ $customerCount }}</h4>
    <h4 class="text-center">Customer List</h4>
    <a href="{{ route('customer.create') }}" class="btn btn-success mb-3">Add New Customer</a>
    <form action="{{ route('customer.index') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search customers..." value="{{ request('search') }}">
            <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="submit">Search</button>
            </div>
        </div>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">srial</th>
      <th scope="col">customer name</th>
      <th scope="col">customer phone</th>
       <th scope="col">customer email</th>
       <th scope="col">Register Time</th>

         <th scope="col">Ation</th>
    </tr>
  </thead>
 <tbody>
@forelse ($customers as $customer)
<tr>
    <th scope="row">{{$customer->id}}</th>
    <td>{{$customer->customer_name}}</td>
    <td>{{$customer->customer_phone}}</td>
   <td>{{$customer->customer_email}}</td>
    <td>{{$customer->created_at}}</td>
    <td>


        <a href="{{ route('customer.edit', $customer->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('customer.delete', $customer->id) }}" method="POST" style="display:inline;">

            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this shop?')">Delete</button>
        </form>
    </td>
</tr>
@empty
<tr></tr>
    <td colspan="7" class="text-center">No shops found.</td>
</tr>
@endforelse

</tbody>
</table>
{{ $customers->firstItem() }} - {{ $customers->lastItem() }} of {{ $customers->total() }}
{{ $customers->Links() }}
</div>
@endsection
