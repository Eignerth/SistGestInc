<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Listtksupport;
use App\Models\Customer;
use App\Models\Knowledgebase;

class DashboardController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index()
    {
        $tkregister = $this->getTkSupportRegisterToday();
        $tkclose = $this->getTkSupportCloseToday();
        $customers = $this->getCustomers();
        $kb = $this->getKb();
        return view('Dashboard.index',['tkregister'=>$tkregister,'tkclose'=>$tkclose,'kb'=>$kb,'customers'=>$customers]);
    }

    private function getTkSupportRegisterToday()
    {
        $numtks = Listtksupport::whereDate('created_at',date('Y-m-d'))->count();
        return $numtks;
    }

    private function getTkSupportCloseToday()
    {
        $numtks = Listtksupport::whereDate('created_at',date('Y-m-d'))
            ->where('status','Terminado')
            ->count();
        return $numtks;
    }

    private function getCustomers(){
        $numCustomers = Customer::count();
        return $numCustomers;
    }
    private function getKb(){
        $numKb = Knowledgebase::count();
        return $numKb;
    }
}
