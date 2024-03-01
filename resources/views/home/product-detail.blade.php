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
      <link rel="shortcut icon" href="{{url('assets/images/favicon.png')}}" type="">
      <title>Famms - Fashion HTML Template</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="{{url('assets/css/bootstrap.css')}}" />
      <!-- font awesome style -->
      <link href="{{url('assets/css/font-awesome.min.css')}}" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="{{url('assets/css/style.css')}}" rel="stylesheet" />
      <!-- responsive style -->
      <link href="{{url('assets/css/responsive.css')}}" rel="stylesheet" />
      <!-- Custom CSS for product details -->
      <style>
         .container {
            margin-top: 50px;
         }

         .box {
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
         }

         .img-box img {
            width: 60%;
            height: auto;
         }

         .detail-box {
            padding: 20px;
            background-color: #f9f9f9;
         }

         .detail-box h5 {
            margin-top: 0;
            margin-bottom: 20px;
            font-size: 20px;
            color: #333;
         }

         .detail-box p {
            margin-bottom: 20px;
            font-size: 16px;
            color: #666;
         }

         .price {
            font-size: 18px;
            font-weight: bold;
            color: #333;
            margin-top: 10px;
         }

         .discount {
            text-decoration: line-through;
            color: #999;
         }

         .cpy_ {
            background-color: #333;
            color: #fff;
            padding: 20px 0;
            text-align: center;
         }
      </style>
   </head>
   <body>
      @include('home.header')

      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-8">
               <div class="box">
                  <div class="img-box">
                     <img src="/product/{{$product->image}}" alt="{{$product->title}}">
                  </div>
                  <div class="detail-box">
                     <h5>{{$product->title}}</h5>
                     <p>{{$product->description}}</p>

                     <p >Remainig: <span>{{$product->quantity}}</span></p>

                     @if ($product->price_discount != null)
                     <p class="price" style="color: blue">Price: <span class="discount">${{$product->price}}</span> <span class="discounted-price">${{$product->price_discount}}</span></p>
                     @else 
                     <p class="price" style="color: blue">Price: <span>${{$product->price}}</span></p>

                     @endif  
                     <a class="btn btn-danger" href={{url('/add-cart')}}>Add to cart</a>
                  
                  
                  </div>
               </div>
            </div>
         </div>
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
