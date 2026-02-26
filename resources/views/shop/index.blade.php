@extends('welcome ')

@section('content')

<div class="container mt-5">
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
    <td>{{$Shop->shop_tin_number}}</td> <!-- যদি column থাকে -->
    <td>
        <a href="{{ route('shop.edit', $Shop->id) }}" class="btn btn-primary">Edit</a>
        <a href="#" class="btn btn-danger">Delete</a>
    </td>
</tr>
@endforeach
</tbody>
</table>
