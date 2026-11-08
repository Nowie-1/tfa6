<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    // Customer Accounts page (/customers).
    public function list()
    {
        // Data now comes from the customers table through the Customer model.
        $customers = Customer::orderBy('id')->get();

        return view('customers.index', ['customers' => $customers]);
    }
}
