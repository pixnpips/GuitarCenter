<?php
namespace App\Http\Controllers;
use App\Models\item;
use App\Models\Customer;
use Illuminate\Http\Request;
use Auth;
use Session;
class PaymentController extends Controller
{
    public function charge($id)
    {
        $item= item::all()->find($id);
//        $user = Auth::user();
        $user=Customer::all()->find(session('customer'));
        return view('payment',[
            'user'=>$user,
            'intent' => $user->createSetupIntent(),
            'product' => $item->title,
            'price' => $item->price,
            'id'=> $item->id,
        ]);
    }

    public function processPayment(Request $request, $id)
    {
        $item= item::all()->find($id);
//        $user = Auth::user();
        $user=Customer::all()->find(session('customer'));
        $paymentMethod = $request->input('payment_method');
        $user->createOrGetStripeCustomer();
        $user->addPaymentMethod($paymentMethod);
        try
        {
            $user->charge($item->price*100, $paymentMethod);
        }
        catch (\Exception $e)
        {
            return back()->withErrors(['message' => 'Error creating subscription. ' . $e->getMessage()]);
        }
        session(['ordercompleted' => true]);
        return redirect()->route('orders.create');
    }
}
