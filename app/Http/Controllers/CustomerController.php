<?php

namespace App\Http\Controllers;
use App\Models\Customer;


use Illuminate\Http\Request;

class CustomerController extends Controller
{public function index(Request $request)
    {

//cursor


foreach (Flight::where('destination', 'Zurich')->cursor() as $flight) {
    // ...
}



// Retrieve a model by its primary key...
$flight = Flight::find(1);

// Retrieve the first model matching the query constraints...
$flight = Flight::where('active', 1)->first();

// Alternative to retrieving the first model matching the query constraints...
$flight = Flight::firstWhere('active', 1);

//subquery
return Destination::addSelect(['last_flight' => Flight::select('name')
    ->whereColumn('destination_id', 'destinations.id')
    ->orderByDesc('arrived_at')
    ->limit(1)
])->get();
//true k niye asa
    //collect methhod use kore amra database theke data collect korte pari
//$collection = Collect([1, 2, 3, 4, 5]);





$customerCount = Customer::count();

//read data from database
$query = Customer::orderBy('id');
if ($search = $request->search) {
$query->where(function ($q) use ($search) {
$q->where('customer_name', 'like', '%' . $search . '%')
   ->orWhere('customer_phone', 'like', '%' . $search . '%')
   ->orWhere('customer_email', 'like', '%' . $search . '%');

});
}
$customers = $query->Paginate(12)->appends((['search' => $request->search]));

return view('customer.index', compact('customers', 'customerCount'));

}
public function create()
    {
        return view('customer.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'customer_name' => 'required',
            'customer_phone' => 'required',
            'customer_email' => 'required|email',
        ]);

        //insert data into database

       /* Customer::create([
            'customer_name' => $request->customer_name,
            'customer_phone' => $request->customer_phone,
            'customer_email' => $request->customer_email,
        ]);*/


        //amra object create kore data insert korte pari

        $customer = new Customer();
        $customer->customer_name = $request->customer_name;
        $customer->customer_phone = $request->customer_phone;
        $customer->customer_email = $request->customer_email;
        $customer->save();

return redirect()->route('customer.index')->with('success', 'Customer created successfully.');
    }

    public function edit($id)
    {
        $customer = Customer::find($id); //single data read

        return view('customer.edit', compact('customer'));
    }

   public function update(Request $request, $id)
    {$request->validate([
        'customer_name' => 'required|max:255',
        'customer_phone' => 'required|max:20|unique:customers,customer_phone,' . $id,
        'customer_email' => 'required|email|max:255|unique:customers,customer_email,' . $id,
    ]);
//update data from model orm
      /*  $customer = Customer::find($id);
        $customer->customer_name = $request->customer_name;
        $customer->customer_phone = $request->customer_phone;
        $customer->customer_email = $request->customer_email;
        $customer->save();

        $customer->update($request->all());*/


        $customer = Customer::find($id)->update([
            'customer_name' => $request->customer_name,
            'customer_phone' => $request->customer_phone,
            'customer_email' => $request->customer_email,
        ]);


        return redirect()->route('customer.index')->with('success', 'Customer updated successfully.');
    }

//destroy data from database
    public function destroy($id)
    {
        $customer = Customer::find($id);
 Customer::destroy($id);


        return redirect()->route('customer.index')->with('success', 'Customer deleted successfully.');
    }

}

