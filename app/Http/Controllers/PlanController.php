<?php

namespace App\Http\Controllers;

use App\Models\OrderRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class PlanController extends Controller
{
    //
    // Individual Plan Page
    // 
    public function plan_details($id)
    {
        include_once(storage_path('app/public/plans.php'));
        $plan = $plans[app()->getLocale()][$id];
        $plan['name'] = $id;
        return view('pages.plans.individual')->with('plan', $plan);
    }

    // 
    // Order Page
    // 
    public function ordering_call(Request $request, $id)
    {

        $request->validate([
            'orderer_name' => 'required|string',
            'phone_number' => 'required|numeric|digits:9',
        ]);

        OrderRequests::create([
            'name' => $request->orderer_name,
            'number' => $request->phone_number,
        ]);

        return redirect('/')->with('status', 'content.order_successful');
    }
}
