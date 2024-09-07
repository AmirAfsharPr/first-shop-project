<?php

namespace App\Http\Controllers\client;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Http\Request;
use Shetabit\Multipay\Invoice;
use Shetabit\Multipay\Payment;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        return view('client.orders.create',[
            'items'=>Cart::getItems(),
            'total_amount' => Cart::totalAmount(),
            'total_items' => Cart::totalItems()
        ]);

    }

    public function store(Request $request)
    {
        $userAddress = [
            'state' => $request->get('state'),
            'city' => $request->get('city'),
            'address' => $request->get('address'),
            'zip_code' => $request->get('zip_code'),
            'phone' => $request->get('phone'),
            'description' => $request->get('description'),
        ];

        $userAddressJson = json_encode($userAddress);

        $order = Order::query()->create([
            'amount' => Cart::totalAmount(),
            'address' => $userAddressJson,
        ]);

        foreach (Cart::getItems() as $cartItem) {

            $product = $cartItem['product'];
            $productQty = $cartItem['quantity'];

            $order->details()->create([
                'product_id' => $product->id,
                'unit_amount' => $product->cost_with_discount,
                'count' => $productQty,
                'total_amount' => $productQty * $product->cost_with_discount,
            ]);

        }


        Cart::removeAll();

        $invoice = (new Invoice)->amount($order->amount);

        $payment = new Payment();

        return $payment->purchase($invoice,function ($driver, $transactionId) use ($order) {
            $order->update([
                'transaction_id' => $transactionId,
            ]);
        })->pay()->render();
    }

    public function callback(Request $request)
    {

        $order = Order::query()->where('transaction_id',$request->get('Authority'))
        ->first();

        $order->update([
            'payment_status' => $request->get('Status'),
        ]);

        return redirect(route('client.orders.show', $order));
    }

    public function show(Order $order)
    {
        return view('client.orders.show',[
            'order'=>$order,
        ]);
    }
}
