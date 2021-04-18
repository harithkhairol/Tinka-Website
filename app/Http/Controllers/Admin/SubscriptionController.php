<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;

class SubscriptionController extends Controller
{
    public function index(Request $request)
    {
        $subscription = Subscription::orderBy('id','DESC')->paginate(10);
        return view('admin.subscription.index', compact('subscription'))
        	->with('i', ($request->input('page', 1) - 1) * 10);;
    }

    public function show($id)
    {
        $subscription = Subscription::find($id);
        return view('admin.subscription.show',compact('subscription'));
    }
}