<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" type="" />
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{url('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{url('assets/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{url('assets/css/responsive.css')}}" rel="stylesheet" />
      <!-- Custom table style -->
      <style>
         table-wrapper {
            width: 100%;
            border-collapse: collapse;
            border-radius: 5px;
            overflow: hidden;
            margin: auto;
         }

         th, td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
         }

         th {
            background-color: #f2f2f2;
            font-weight: bold;
            color: #333;
         }

         tr:hover {
            background-color: #f5f5f5;
         }

         tbody tr:nth-child(even) {
            background-color: #fafafa;
         }

         .table-wrapper {
            display: flex;
            justify-content: center;
         }
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')

            {{-- success alert --}}
            @if (session()->has('message'))
            <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
              {{session()->get('message')}}
            </div>
              
            @endif

      <div class="table-wrapper">
         <table>
            <thead>
               <tr>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Image</th>
                  <th>Action</th>

               </tr>
            </thead>

            <?php $totalPrice = 0; ?>
            @foreach ($cartProducts as $product)
            <tbody>
               <tr>
                  <td>{{$product->title}}</td>
                  <td>{{$product->quantity}}</td>
                  <td>{{$product->price}}</td>
                  <td><img src="/product/{{$product->image}}" alt="{{$product->title}} Image" style="width: 100px; height: auto;"></td>
                  <td><a href="{{url('/cart-remove', $product->id)}}" class="btn btn-danger">Remove</a></td>

                </tr>
              
            </tbody>
            <?php $totalPrice =  $totalPrice + $product->price?>
            @endforeach

         </table>
         
        </div>
        <div class="container" style="margin: auto"> <h1 class="text-center text-bold">Total Price: {{$totalPrice}}</h1> </div>
<br>
      <div class="container" style="margin-left: 350px">
         <h1 style="font-size: 23px; font-weight:bold;">Proceed Order</h1>
         <p style="">Click to Order</p>
         <a class="btn btn-danger"  href="{{url('cash_order')}}">Cash on Delievery</a>
      </div>

      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2021 All Rights Reserved By <a href="https://html.design/">Free Html Templates</a><br>
            Distributed By <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
         </p>
      </div>
      <!-- jQery -->
      <script src="{{url('assets/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{url('assets/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{url('assets/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{url('assets/js/custom.js')}}"></script>
   </body>
</html>
