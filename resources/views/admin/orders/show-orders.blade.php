<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Products</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href={{url('admin/assets/vendors/mdi/css/materialdesignicons.min.css')}}>
    <link rel="stylesheet" href={{url('admin/assets/vendors/css/vendor.bundle.base.css')}}>
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href={{url('admin/assets/vendors/jvectormap/jquery-jvectormap.css')}}>
    <link rel="stylesheet" href={{url('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css')}}>
    <link rel="stylesheet" href={{url('admin/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}>
    <link rel="stylesheet" href={{url('admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}>
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href={{url('admin/assets/css/style.css')}}>
    <!-- End layout styles -->
    <link rel="shortcut icon" href={{url('admin/assets/images/favicon.png')}} />
  </head>
  <body>
    <div class="container-scroller">

    @include('admin.sidebar')
    
      <div class="container-fluid page-body-wrapper">
        @include('admin.navbar')

        <div class="main-panel">
            <div class="content-wrapper">



                   {{-- success alert --}}
                   @if (session()->has('message'))
                   <div class="alert alert-success">
                     <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                     {{session()->get('message')}}
                   </div>
                     
                   @endif

                   <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">All Orders</h4>
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>S.No</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone no</th>
                                            <th>Address</th>
                                            <th>Product</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                            <th>Payment Status</th>
                                            <th>Image</th>
                                            <th>Delivery Status</th>
                                            <th>Update Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                        $sno = 1; // Initialize the serial number counter
                                        @endphp
                                        @foreach ($order as $order)
                                        <tr>
                                            <td>{{ $sno++ }}</td> 
                                            <td>{{ $order->name }}</td>
                                            <td>{{ $order->emaail }}</td>
                                            <td>{{ $order->phone }}</td>
                                            <td>{{ $order->address }}</td>
                                            <td>{{ $order->product_title }}</td>
                                            <td>{{ $order->quantity }}</td>
                                            <td>{{ $order->price }}</td>
                                            <td>{{ $order->payment_status }}</td>
                                            <td><img src="product/{{$order->image}}" alt=""></td>
                                            <td>{{ $order->delievery_status }}</td>
                                            <td>
                                                @if($order->delievery_status == "proceed")
                                                <form method="post" action="{{url('/delivered', $order->id) }}">
                                                    @csrf
                                                    <button type="submit" class="btn btn-primary btn-sm" onclick="return confirm('Are you sure this product is delivered?')"> Deliver</button>
                                                </form>
                                                @elseif($order->delievery_status == "delivered")
                                                Delivered
                                                @endif
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                


        </div>
      </div>
    </div>
    
    








    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src={{url('admin/assets/vendors/js/vendor.bundle.base.js')}}></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src={{url('admin/assets/vendors/chart.js/Chart.min.js')}}></script>
    <script src={{url('admin/assets/vendors/progressbar.js/progressbar.min.js')}}></script>
    <script src={{url('admin/assets/vendors/jvectormap/jquery-jvectormap.min.js')}}></script>
    <script src={{url('admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js')}}></script>
    <script src={{url('admin/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src={{url('admin/assets/js/off-canvas.js')}}></script>
    <script src={{url('admin/assets/js/hoverable-collapse.js')}}></script>
    <script src={{url('admin/assets/js/misc.js')}}></script>
    <script src={{url('admin/assets/js/settings.js')}}></script>
    <script src={{url('admin/assets/js/todolist.js')}}></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src={{url('admin/assets/js/dashboard.js')}}></script>
    <!-- End custom js for this page -->
  </body>
</html>