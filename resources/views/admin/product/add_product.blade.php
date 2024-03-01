<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ url('admin/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ url('admin/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
    <link rel="stylesheet" href="{{ url('admin/assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/assets/vendors/owl-carousel-2/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ url('admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css') }}">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ url('admin/assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ url('admin/assets/images/favicon.png') }}" />
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



                <div class="col-md-10 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Add Products</h4>
                            <form class="forms-sample" action="{{ url('/insert_product') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Product Title</label>
                                    <input type="text" class="form-control" placeholder="Title" name="title" style="color: black">
                                    <span class="text-danger">@error('title') {{ $message }}   @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Description</label>
                                    <input type="text" class="form-control" placeholder="Description" name="description" style="color: black">
                                    <span class="text-danger">@error('description') {{ $message }}   @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Price</label>
                                    <input type="number" class="form-control" placeholder="Price" name="price" style="color: black">
                                    <span class="text-danger">@error('price') {{ $message }}   @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price Discount</label>
                                    <input type="text" class="form-control" placeholder="Price Discount" name="price_discount" style="color: black">
                                    <span class="text-danger">@error('price_discount') {{ $message }}   @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Quantity</label>
                                    <input type="number" class="form-control" placeholder="Product Quantity" name="quantity" min="0" style="color: black">
                                    <span class="text-danger">@error('quantity') {{ $message }} @enderror</span>
                                </div>

                              
                                <div class="form-group">
                                  <label for="exampleInputEmail1">Product Category</label>
                                  <select name="catagory" class="form-control">
                                      <option value="" disabled selected>Select a category</option>
                                      @foreach ($catagories as $catagory)
                                          <option value="{{ $catagory->catagory_name }}">{{ $catagory->catagory_name }}</option>
                                      @endforeach
                                  </select>
                                  <span class="text-danger">@error('catagory') {{ $message }} @enderror</span>
                              </div>
                              
                              


                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Image</label>
                                    <input type="file" class="form-control" name="image" accept="image/*">
                                    <span class="text-danger">@error('image') {{ $message }}   @enderror</span>
                                </div>
                                <button type="submit" class="btn btn-primary mr-2">Add product</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- container-scroller -->
<!-- plugins:js -->
<script src="{{ url('admin/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="{{ url('admin/assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ url('admin/assets/vendors/progressbar.js/progressbar.min.js') }}"></script>
<script src="{{ url('admin/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
<script src="{{ url('admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
<script src="{{ url('admin/assets/vendors/owl-carousel-2/owl.carousel.min.js') }}"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="{{ url('admin/assets/js/off-canvas.js') }}"></script>
<script src="{{ url('admin/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ url('admin/assets/js/misc.js') }}"></script>
<script src="{{ url('admin/assets/js/settings.js') }}"></script>
<script src="{{ url('admin/assets/js/todolist.js') }}"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="{{ url('admin/assets/js/dashboard.js') }}"></script>
<!-- End custom js for this page -->
</body>
</html>
