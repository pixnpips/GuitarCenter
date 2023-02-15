<?php
namespace App\Http\Controllers;
use App\Models\item;
use Illuminate\Http\Request;
use Auth;
class PaymentController extends Controller
{
    public function charge($id)
    {
        $item= item::all()->find($id);
        $user = Auth::user();
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
        $user = Auth::user();
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
        return redirect()->route('dashboard');
    }
}
