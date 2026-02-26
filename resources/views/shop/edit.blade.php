@extends('welcome ')

@section('content')

<div class="container mt-5">
    <h4 class="text-center">Shop Edit</h4>
    <a href="{{ route('shop.index') }}" class="btn btn-primary mb-3">Shop List</a>
    <!--display success message-->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
         @endif
 <div class="mb-3">
<form method="POST" action="{{ route('shop.store') }}" method="POST">
    @csrf
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Shop Name</label>
    <input type="text" class="form-control @error('shop_name')
        is-invalid

    @enderror"
  value="{{ old('shop_name', $shop->shop_name) }}"
  placeholder="Enter the shop name"
  name="shop_name"
  id="exampleInputEmail1"
  aria-describedby="emailHelp">

  </div>
  <div class="mb-3">
    <label for="exampleI nputPassword1" cla                                                                                                                                                                                                                                                                                           ss="form-label">Shop Number</label>
    <input type="text" class="form-control @error('shop_number')
        is-invalid
    @enderror"
    value="{{ old('shop_number', $shop->shop_number) }}"
    placeholder="Enter the shop number"
    id="exampleInputPassword1" name="shop_number">
  </div>
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Shop Address</label>
    <input type="text" class="form-control @error('shop_address')
        is-invalid
    @enderror"
    value="{{ old('shop_address', $shop->shop_address) }}"
    placeholder="Enter the shop address"
    id="exampleInputPassword1" name="shop_address">
  </div>
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Shop Phone</label>
    <input type="text" class="form-control @error('shop_phone')
        is-invalid
    @enderror"
    value="{{ old('shop_phone', $shop->shop_phone) }}"
    placeholder="Enter the shop phone"
    id="exampleInputPassword1" name="shop_phone">
  </div>
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Shop Email</label>
    <input type="email" class="form-control @error('shop_email')
        is-invalid
    @enderror"
    value="{{ old('shop_email', $shop->shop_email) }}"
    placeholder="Enter the shop email"
    id="exampleInputPassword1" name="shop_email">
  </div>
 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">TIN Number</label>
    <input type="text" class="form-control @error('tin_number')
        is-invalid
    @enderror"
    value="{{ old('tin_number', $shop->shop_tin_number) }}"
    placeholder="Enter the TIN number"
    id="exampleInputPassword1" name="tin_number">
  </div>

  <button type="submit" class="btn btn-success">Submit</button>
</form>

</div>


@endsection
