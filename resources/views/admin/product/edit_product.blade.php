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

                <div class="col-md-10 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Product</h4>
                            <form class="forms-sample" action="{{ url('/update_product/'.$product->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputUsername1">Product Title</label>
                                    <input style="color: black" type="text" class="form-control" placeholder="Title" name="title" value="{{ $product->title }}">
                                    <span class="text-danger">@error('title') {{ $message }}   @enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Description</label>
                                    <input style="color: black" type="text" class="form-control" placeholder="Description" name="description" value="{{ $product->description }}">
                                    <span class="text-danger">@error('description') {{ $message }}   @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Price</label>
                                    <input type="number" style="color: black" class="form-control" placeholder="Price" name="price" value="{{ $product->price }}">
                                    <span class="text-danger">@error('price') {{ $message }}   @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price Discount</label>
                                    <input type="text" style="color: black" class="form-control" placeholder="Price Discount" name="price_discount" value="{{ $product->price_discount }}">
                                    <span class="text-danger">@error('price_discount') {{ $message }}   @enderror</span>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Quantity</label>
                                    <input type="number" style="color: black" class="form-control" placeholder="Product Quantity" name="quantity" min="0" value="{{ $product->quantity }}">
                                    <span class="text-danger">@error('quantity') {{ $message }} @enderror</span>
                                </div>

                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Category</label>
                                    <select name="catagory" style="color: black" class="form-control">
                                        <option value="" disabled>Select a category</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->catagory_name }}" @if($category->catagory_name == $product->catagory) selected @endif>{{ $category->catagory_name }}</option>
                                        @endforeach
                                    </select>
                                    <span class="text-danger">@error('category') {{ $message }} @enderror</span>
                                </div>
                                
                            
                              <div class="form-group">
                                <label for="exampleInputEmail1">Current Image</label>
                                <img height="100" width="100" src="/product/{{ $product->image }}" alt="Current Image">
                            </div>
                        
                            <div class="form-group">
                                <label for="exampleInputEmail1">Change Image</label>
                                <input type="file" class="form-control" name="image" accept="image/*">
                                <span class="text-danger">@error('image') {{ $message }} @enderror</span>
                            </div>



                                <button type="submit" class="btn btn-primary mr-2">Update product</button>
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
