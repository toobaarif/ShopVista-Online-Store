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
      <link rel="shortcut icon" href={{url('assets/images/favicon.png')}} type="">
      <title>ShopVista - Products</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href={{url('assets/css/bootstrap.css')}} />
      <!-- font awesome style -->
      <link href={{url('assets/css/font-awesome.min.css')}} rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href={{url('assets/css/style.css')}} rel="stylesheet" />
      <!-- responsive style -->
      <link href={{url('assets/css/responsive.css')}} rel="stylesheet" />

   </head>
   <body>
      
      @include('home.header')
      
   
      
    
      

      
      <!-- product section -->
     @include('home.products-section')
      <!-- end product section -->

 
     @include('home.footer')
      <!-- footer end -->

      <!-- jQery -->
      <script src={{url('assets/js/jquery-3.4.1.min.js')}}></script>
      <!-- popper js -->
      <script src={{url('assets/js/popper.min.js')}}></script>
      <!-- bootstrap js -->
      <script src={{url('assets/js/bootstrap.js')}}></script>
      <!-- custom js -->
      <script src={{url('assets/js/custom.js')}}></script>
   </body>
</html>













