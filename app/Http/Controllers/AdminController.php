<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Catagory;
use App\Models\Product;
use App\Models\Order;

class AdminController extends Controller
{

// form and show data 
  public function catagory(){ 
    $data = Catagory::all();
    return view('admin.category.catagory', compact('data'));
  }


//  user request to send data into server
  public function add_catagory(Request $request){
    $request->validate([
      'catagory_name' => 'required'
    ]);

    $data = new Catagory();
    $data->catagory_name = $request->catagory_name;
    $save = $data->save();
    if($save){
      return redirect()->back()->with('message', 'Catagory added succesfully');
    }
    else{
      return 'error';
    }
  }


// delete category
  public function delete_category($id) {
    try {
        $category = Catagory::findOrFail($id);
      
        $category->delete();
        return redirect()->back()->with('message', 'Category deleted successfully.');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', 'Error deleting category: ' . $e->getMessage());
    }
}





// product functions
public function add_product()
{
    $catagories = Catagory::all();
return view('admin.product.add_product', compact('catagories'));
}




public function insert_product(Request $request)
{
    // Validate the incoming request data
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric|min:0',
        'quantity' => 'required|numeric|min:0',
        'catagory' => 'required|exists:catagories,catagory_name', // Validate that the selected category exists in the 'catagories' table
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate the product image
    ]);

    try {
        // Create a new instance of the Product model
        $product = new Product();
        // Assign values to the product object from the request
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->price_discount = $request->price_discount;
        $product->quantity = $request->quantity;
        $product->catagory = $request->catagory;

        // Handle the product image upload
        $image= $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('product', $imagename);
        $product->image = $imagename;

        // Save the product to the database
        $product->save();

        // Redirect back with success message
        return redirect()->back()->with('message', 'Product added successfully.');
    } catch (\Exception $e) {
        // Handle any exceptions that occur during the insertion process
        return redirect()->back()->with('error', 'Error adding product: ' . $e->getMessage());
    }
}


// show products
public function show_product () {
  $product = Product::all();
  return view('admin.product.show_product' , compact('product'));
}

// delete product
public function delete_product($id) {
  try {
      $product = Product::findOrFail($id);
    
      $product->delete();
      return redirect('/show_product')->with('message', 'Product deleted successfully.');
  } catch (\Exception $e) {
      return redirect()->back()->with('error', 'Error deleting category: ' . $e->getMessage());
  }
}

// edit product
public function edit_product($id){
  $product = Product::findOrFail($id);
  $categories = Catagory::all();

  return view('admin.product.edit_product', compact('product', 'categories'));
}


// update products
public function update_product(Request $request, $id)
{
    // Validate the incoming request data
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'required|string',
        'price' => 'required|numeric|min:0',
        'quantity' => 'required|numeric|min:0',
        'catagory' => 'required|exists:catagories,catagory_name', // Validate that the selected category exists in the 'catagories' table
        'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Allow image field but make it optional for update
    ]);

    try {
        // Find the product by its ID
        $product = Product::findOrFail($id);

        // Update product information based on the incoming request data
        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->catagory = $request->catagory; // Assuming 'category_id' is the foreign key for the category

        // Handle the product image upload only if a new image is provided
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('product'), $imageName);
            $product->image = $imageName;
        }

        // Save the updated product information
        $product->save();

        return redirect('show_product')->with('message', 'Product updated successfully.');
    } catch (\Exception $e) {
        // Return to the previous page with an error message if an exception occurs
        return redirect()->back()->with('error', 'Error updating product: ' . $e->getMessage());
    }
}


   // show orders
   public function show_orders(){
    $order = Order::all();
    return view('admin.orders.show-orders', compact('order'));
}



public function delivered($orderId) {
  // Find the order by its ID
  $order = Order::find($orderId);

  // Check if the order exists
  if (!$order) {
      return redirect()->back()->with("error", "Order not found!");
  }

  // Check if the current status is "proceed"
  if ($order->delievery_status === "proceed") {
      // Update the status to "delivered"
      $order->delievery_status = "delivered";
      $order->payment_status = "paid";
      $order->save();

      return redirect()->back()->with("success", "Order status updated to Delivered!");
  }

  // If the status is already "delivered", no action needed
  return redirect()->back()->with("message", "Order is already Delivered!");
}


}






