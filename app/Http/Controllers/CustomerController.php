<?php

namespace App\Http\Controllers;
use App\Models\Customer;


use Illuminate\Http\Request;

class CustomerController extends Controller
{public function index(Request $request)
    {
$customerCount = Customer::count();

//read data from database
$query = Customer::orderBy('id');
if ($search = $request->search) {
$query->where(function ($q) use ($search) {
$q->where('customer_name', 'like', '%' . $search . '%')
   ->orWhere('customer_number', 'like', '%' . $search . '%')
   ->orWhere('customer_email', 'like', '%' . $search . '%');

});
}
$customers = $query->Paginate(12)->appends((['search' => $request->search]));

return view('customer.index', compact('customers', 'customerCount'));

}
}
