<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        return view('Clientes.Clientes.index');
    }

    public function CustomerList(Request $request)
    {   
        $customerslist=Customer::where('descripcion','LIKE','%'.$request->input('search','').'%')->get(['id','descripcion as text']);
        return ['results'=>$customerslist];
    }
}
