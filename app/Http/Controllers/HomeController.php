<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Order;

class HomeController extends Controller
{
    
    public function redirect(){
        $usertype = Auth::user()->usertype;

        $username = Auth::user()->username; 
        if($usertype == '1'){
            return view('admin.admin-page', ['username' => $username]);
        }
        else{
            $products = Product::paginate(6);
            return view('home.user-page', compact('products'));
        }
    }

    public function index(){
        $products = Product::paginate(6);
        return view('home.user-page', compact('products'));
    }


    public function product_detail($id){
        $product = Product::find($id);
        return view('home.product-detail', compact('product'));
    }


    public function add_cart(Request $request, $id){
        if(Auth::id()) {

            // get user data from user model taable
            $user = Auth::user();
              // get user data from product model taable
            $product = Product::find($id);
            
            $cart = new Cart();
            $cart->name = $user->name;
            $cart->email = $user->email;
            $cart->phone = $user->phone;
            $cart->address = $user->address;
            $cart->title = $product->title;
            
            // if product has discount price
            if($product->price_discount != null){
                $cart->price = $product->price_discount * $request->quantity;
            }
                else{
            $cart->price = $product->price * $request->quantity;
            }    

          
            $cart->quantity = $request->quantity;
            $cart->image = $product->image;
            $cart->product_id = $id;
            $cart->user_id = $user->id;
            $cart->save();
            
             return redirect()->back()->with('success', 'Product added to cart successfully.');
        } else {
            return redirect()->route('login')->with('error', 'Please login to add product to cart.');
        }
    }
    



    // cart show controller function
    public function cart_show(){
        if(Auth::id()){

        $userid = Auth::user()->id;

        $cartProducts = Cart::where('user_id', '=', $userid)->get();
        return view('home.cart-show', compact('cartProducts'));

        }
        else{
            return redirect()->route('login')->with('error', 'Please login to add product to cart.');

        }
    }


    // cart_remove function
    public function cart_remove($id){
        $remove = Cart::find($id);
        $remove->delete();
        return redirect()->back();

    }

    // cash orders
    public function cash_order(){
     
        $user = Auth::user();
        $user_id = $user->id;

        // get data from cart table through the user id and sent data from cart tablr to order table
        $data = Cart::where("user_id", "=", $user_id)->get();


        
    // Check if there are no items in the cart
    if ($data->isEmpty()) {
        return redirect()->back()->with("message", "Your cart is empty!");
    }


        // that product should be more than one so wee wraped in foreach loop to sent all cart data related to specific id
        foreach ($data as $data) {
            $order = new Order();
            $order->name = $data->name;
            $order->emaail = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;

            $order->product_title = $data->title;
            $order->quantity = $data->quantity;
            $order->price = $data->price;
            $order->image = $data->image;
            $order->product_id = $data->product_id;
            $order->payment_status = "cash on delievery";
            $order->delievery_status = "proceed";

            $order->save();

            // get product id and delete from cart
            $productid = $data->id;
            $id = Cart::find($productid);
            $id->delete();

           
        }
        return redirect()->back()->with("message", "Your Order Placed!");


}


public function products_view(){
    $products = Product::paginate(6);
    return view('home.product-view', compact('products'));
}

public function contact(){
    return view('home.contact');
}


 
}
