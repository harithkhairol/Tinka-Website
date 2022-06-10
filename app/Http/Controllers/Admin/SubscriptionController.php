<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscription;
use App\Models\User;
use App\Models\Plan;
use App\Models\Payment;
use Carbon\Carbon;

class SubscriptionController extends Controller
{
    public function index(Request $request)
    {
        $subscription = Subscription::orderBy('id','DESC')->paginate(10);
        return view('admin.subscription.index', compact('subscription'))
        	->with('i', ($request->input('page', 1) - 1) * 10);
    }

    public function show($id)
    {
        $subscription = Subscription::find($id);
        $renewal = Payment::where('subscription_id', $subscription->id)->get();
        return view('admin.subscription.show',compact('subscription', 'renewal'));
    }

    public function edit($id)
    {
        $subscription = Subscription::find($id);
        return view('admin.subscription.edit')->with('subscription', $subscription)->with('id', $id);
    }

    public function downgrade($id)
    {
        $subscription = Subscription::find($id);
        $plan = Plan::where('category', $subscription->plan->category)->where('id', '!=', $subscription->plan_id)->get();
        return view('admin.subscription.downgrade', compact('subscription', 'plan', 'id'));
    }

    public function update(Request $request, $id)
    {
        $subscription = Subscription::find($id);
        $subscription->subjects = implode(', ', $request->input('subjects'));
        $subscription->plan_id = $request->input('plan_id');
        $subscription->save();
        
        return redirect()->route('admin.subscription.index')->with('success','Subcription updated successfully for student '.$subscription->student_name.'. New fee will reflect on next invoice.');
    }
}
