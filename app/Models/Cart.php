<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class Cart
{

    public static function new(Product $product, Request $request)
    {

        $cart = self::getCart();

        $quantity = $request->get('quantity');

        // به‌روزرسانی تعداد آیتم‌ها
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $quantity;
        } else {
            $cart[$product->id] = [
                'product' => $product,
                'quantity' => $quantity
            ];
        }

        session()->put([
            'cart' => $cart
        ]);

        $cart['total_items'] = self::totalItems();
        $cart['total_amount'] = self::totalAmount();


        session()->put([
            'cart' => $cart
        ]);
    }

    public static function totalAmount()
    {
        $totalAmount = 0;

        foreach (self::getCart() as $cartItem){
            if (isset($cartItem['product'], $cartItem['quantity'])){
                $totalAmount += intval($cartItem['product']->cost_with_discount) * intval($cartItem['quantity']);
            }
        }

        return $totalAmount;
    }

    public static function getItems()
    {
        return array_filter(self::getCart(), function($key) {
            return is_numeric($key);
        }, ARRAY_FILTER_USE_KEY);
    }
    public static function totalItems(){

        $totalItems =  count(self::getItems());

        return $totalItems;
    }

    public static function getCart()
    {
        // بازگرداندن آرایه خالی اگر سبد خرید وجود نداشت
        return session()->get('cart',[]);
    }

    public static function remove(Product $product)
    {

        $cart = self::getCart();


        if (array_key_exists($product->id, $cart)){
            unset($cart[$product->id]);
        }

//اگر از کالکشن استفاده کنیم ازین طریق میتوانیم عمل کنیم
//        $cart->forget($product->id);

        session()->put([
            'cart' => $cart
        ]);

        $cart['total_amount'] = self::totalAmount();
        $cart['total_items'] = self::totalItems();

        session()->put([
            'cart' => $cart
        ]);
    }

    public static function removeAll()
    {
        session()->forget('cart');
    }
}
