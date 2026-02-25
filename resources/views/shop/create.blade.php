@extends('welcome ')

@section('content')

<div class="container mt-5">
    <h4 class="text-center">New Shop Open</h4>
    <a href="{{ route('shop.index') }}" class="btn btn-primary mb-3">Shop List</a>
 <div class="mb-3">
<form method="POST" action="{{ route('shop.store') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Shop Name</label>
    <input type="text" class="form-control" id="exampleInputEmail1" name="shop_name" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Enter the shop name.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Shop Number</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="shop_number">
  </div>
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Shop Address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="shop_address">
  </div>
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Shop Phone</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="shop_phone">
  </div>
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Shop Email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="shop_email">
  </div>
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">TIN Number</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="tin_number">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>


@endsection
