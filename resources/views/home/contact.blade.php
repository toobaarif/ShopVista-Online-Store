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

      <style>
     
         .container {
            margin: 0 auto;
            padding: 20px;
         }

         .contact-container {
            background-color: #fff;
            border-radius: 5px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
         }

          /* h1 {
            text-align: center;
            margin-bottom: 30px;
            color: #333;
            font-size: 40px;
         } */

         .contact-container p {
            font-size: 16px;
            line-height: 1.6;
            margin-bottom: 15px;
         }

         .contact-container ul {
            list-style-type: none;
            padding: 0;
            margin-top: 20px;
         }

         .contact-container ul li {
            margin-bottom: 10px;
         }

         .contact-container ul li strong {
            font-weight: bold;
            margin-right: 5px;
         }

      </style>
   </head>
   <body>
      @include('home.header')

      <div class="container">
         <h1 style="font-size: 45px; font-weight:bold">Contact Us</h1>
         <div class="contact-container">
            <p>Welcome to ShopVista - Your destination for trendy fashion!</p>
            <p>At ShopVista, we offer a wide range of fashion items including clothing, accessories, and more to keep you looking stylish all year round.</p>
            <p>If you have any questions or need assistance, feel free to reach out to us using the contact details below:</p>
            <br>
            <ul>
               <li><strong>ADDRESS:</strong> 28 White Tower, Street Name, New York City, USA</li>
               <li><strong>TELEPHONE:</strong> +91 987 654 3210</li>
               <li><strong>EMAIL:</strong> shopvista@gmail.com</li>
            </ul>
         </div>
      </div>

      @include('home.footer')
      <!-- footer end -->

      <!-- jQuery -->
      <script src="{{url('assets/js/jquery-3.4.1.min.js')}}"></script>
      <!-- popper js -->
      <script src="{{url('assets/js/popper.min.js')}}"></script>
      <!-- bootstrap js -->
      <script src="{{url('assets/js/bootstrap.js')}}"></script>
      <!-- custom js -->
      <script src="{{url('assets/js/custom.js')}}"></script>
   </body>
</html>
