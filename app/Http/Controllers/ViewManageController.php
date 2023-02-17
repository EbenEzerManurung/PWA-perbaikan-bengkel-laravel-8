<?php

namespace App\Http\Controllers;

use Session;
use Carbon\Carbon;
use App\Market;
use App\Transaction;
use Illuminate\Http\Request;

class ViewManageController extends Controller
{
    // Show View Dashboard
    public function viewDashboard()
    {
    	

    	return view('dashboard');
    }

    
}