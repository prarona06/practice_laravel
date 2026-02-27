@extends('welcome')

@section('content')

<div class="container mt-5">
       <!--display success message-->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
         @endif
    <h4 class="text-center">Shop List</h4>
    <a href="{{ route('shop.create') }}" class="btn btn-success mb-3">Add New Shop</a>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">srial</th>
      <th scope="col">shop name</th>
      <th scope="col">shop number</th>
      <th scope="col">shop phone</th>
       <th scope="col">shop email</th>
        <th scope="col">tin numbr</th>
         <th scope="col">Ation</th>
    </tr>
  </thead>
 <tbody>
@foreach ($ShopLists as $Shop)
<tr>
    <th scope="row">{{$Shop->id}}</th>
    <td>{{$Shop->shop_name}}</td>
    <td>{{$Shop->shop_number}}</td>
    <td>{{$Shop->shop_phone}}</td>
    <td>{{$Shop->shop_email}}</td>
    <td>{{$Shop->shop_tin_number}}</td>
    <td>
        <a href="{{ route('shop.edit', $Shop->id) }}" class="btn btn-primary">Edit</a>
        <form action="{{ route('shop.delete', $Shop->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this shop?')">Delete</button>
        </form>
    </td>
</tr>
@endforeach
</tbody>
</table>
