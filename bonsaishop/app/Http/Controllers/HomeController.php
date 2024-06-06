<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function posts(){
        $posts = Post::all();
        return view('post', compact('posts'));
    }

    public function showPost($id){
        $post = Post::find($id);
        if($post){
            return view('show-post',compact('post'));
        }
        abort('404');
    }

    public function carts(){
        $cart = session()->get('cart', []);

        return view('carts',compact('cart'));
    }
    public function addToCart(Request $request, $id)
    {
        $product = Product::find($id);

        if(!$product) {
            return redirect()->back()->with('error', 'Product not found!');
        }

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->pro_name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function checkout(Request $request){

        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('carts')->with('error', 'Giỏ hàng của bạn đang trống.');
        }

        $totalPrice = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));

        $data = $request->all();
        $code_card = rand(00,1000000000);
        $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
        $vnp_TmnCode = "58Y4TB5Q";
        $vnp_HashSecret = "UZXMNCQQQXTZUVTDPXWQPVDSSEWCWCJF";
        $vnp_TxnRef = $code_card;
        $vnp_OrderInfo = 'Thanh toan don hang test';
        $vnp_OrderType = 'billpayment';
        $vnp_Amount = $totalPrice * 100;
        $vnp_Locale = 'VN';
        $vnp_BankCode = 'NCB';
        $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
        $vnp_ReturnUrl = env('APP_URL') . '/checkout/status?' . http_build_query($data);

        $inputData = array(
            "vnp_Version" => "2.1.0",
            "vnp_TmnCode" => $vnp_TmnCode,
            "vnp_Amount" => $vnp_Amount,
            "vnp_Command" => "pay",
            "vnp_CreateDate" => date('YmdHis'),
            "vnp_CurrCode" => "VND",
            "vnp_IpAddr" => $vnp_IpAddr,
            "vnp_Locale" => $vnp_Locale,
            "vnp_OrderInfo" => $vnp_OrderInfo,
            "vnp_OrderType" => $vnp_OrderType,
            "vnp_ReturnUrl" => $vnp_ReturnUrl,
            "vnp_TxnRef" => $vnp_TxnRef,
        );

        if (isset($vnp_BankCode) && $vnp_BankCode != "") {
            $inputData['vnp_BankCode'] = $vnp_BankCode;
        }
        if (isset($vnp_Bill_State) && $vnp_Bill_State != "") {
            $inputData['vnp_Bill_State'] = $vnp_Bill_State;
        }

        //var_dump($inputData);
        ksort($inputData);
        $query = "";
        $i = 0;
        $hashdata = "";
        foreach ($inputData as $key => $value) {
            if ($i == 1) {
                $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
            } else {
                $hashdata .= urlencode($key) . "=" . urlencode($value);
                $i = 1;
            }
            $query .= urlencode($key) . "=" . urlencode($value) . '&';

        }

        $vnp_Url = $vnp_Url . "?" . $query;
        if (isset($vnp_HashSecret)) {
            $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//
            $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
        }
        $returnData = array('code' => '00'
        , 'message' => 'success'
        , 'data' => $vnp_Url);
        if (isset($_POST['redirect'])) {
            header('Location: ' . $vnp_Url);
            die();
        } else {
            echo json_encode($returnData);
        }
    }

    public function checkoutStatus(Request $request){
        $cart = session()->get('cart', []);

        if (empty($cart)) {
            return redirect()->route('carts')->with('error', 'Giỏ hàng của bạn đang trống.');
        }

        $totalPrice = array_sum(array_map(fn($item) => $item['price'] * $item['quantity'], $cart));

        if(!empty($request->vnp_TransactionNo)){
            $order = Order::create([
                'name' => $request->name,
                'email' => $request->email,
                'total_price' => $totalPrice,
            ]);

            foreach ($cart as $id => $details) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_name' => $details['name'],
                    'product_price' => $details['price'],
                    'quantity' => $details['quantity'],
                ]);
            }
            session()->forget('cart');
            return redirect()->route('carts')->with('success', 'Thanh toán thành công!');
        }else{
            return redirect()->route('carts')->with('success', 'Thanh toán thất bại!');
        }
    }

}
