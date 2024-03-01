<header class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/"><img width="250" src={{url('assets/images/shop1.png')}} alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                </li>
            
                <li class="nav-item">
                   <a class="nav-link" href="/products">Products</a>
                </li>
            
                <li class="nav-item">
                   <a class="nav-link" href={{url('/contact')}}>Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href={{url('cart-show')}}>
                      <i class="fas fa-shopping-cart"></i> Cart
                  </a>
              </li>
              

                <form class="form-inline">
                   <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                   <i class="fa fa-search" aria-hidden="true"></i>
                   </button>
                </form>

                {{-- auth changes --}}
                @if (Route::has('login'))
                @auth

                <li class="nav-item">
                <x-app-layout>
                 
              </x-app-layout>
                </li>

           


               @else
                <li class="nav-item">
                  <a class="btn btn-danger" href="register" style="margin-right: 10px">Register</a>
               </li>
               <li class="nav-item">
                  <a class="btn btn-danger" href="login">Login</a>
               </li>

               @endauth
               @endif


             </ul>
          </div>
       </nav>
    </div>
 </header>