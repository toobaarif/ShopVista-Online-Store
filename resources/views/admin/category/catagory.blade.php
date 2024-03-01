<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
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

              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <h1 class="card-title">Add Category</h1>
                        <form class="form-inline" action="{{url('/add_catagory')}}" method="POST">
                            @csrf
                            <label class="sr-only" for="inlineFormInputName2">Name</label>
                            <input type="text" name="catagory_name" class="form-control mb-2 mr-sm-2" id="inlineFormInputName2" placeholder="Category Name">
                       <br>
                            <span class="text-danger">@error('catagory_name') {{ $message }}   @enderror</span>
                          <br>
                            <button type="submit" class="btn btn-primary mb-2">Add</button>
                        </form>
                    </div>
                </div>
            </div>
            




            {{-- table of showing category --}}

            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                  <div class="card-body">
                      <h4 class="card-title">Category Table</h4>
                      <div class="table-responsive">
                          <table class="table table-striped">
                              <thead>
                                  <tr>
                                      <th>S.No</th>
                                      <th>Category Name</th>
                                      <th>Action</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @php
                                  $sno = 1; // Initialize the serial number counter
                                  @endphp
                                  @foreach ($data as $category)
                                  <tr>
                                      <td>{{ $sno++ }}</td> 
                                      <td>{{ $category->catagory_name }}</td>
                                      <td>
                                        <form action="{{ route('delete_category', ['id' => $category->id]) }}" method="POST" id="deleteForm{{$category->id}}" style="display: inline;">
                                          @csrf
                                          @method('DELETE')
                                          <button type="button" class="btn btn-danger" onclick="confirmDelete({{ $category->id }})">Delete</button>
                                      </form>
                                      
                                      <script>
                                          function confirmDelete(categoryId) {
                                              if (confirm('Are you sure you want to delete this category?')) {
                                                  document.getElementById('deleteForm'+categoryId).submit();
                                              }
                                          }
                                      </script>


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