<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>products</span>
          </h2>
       </div>

       <div class="row">
          @foreach ($products as $product )
          <div class="col-sm-6 col-md-4 col-lg-4">
              <div class="box">
                  <div class="img-box">
                      <img src='/product/{{ $product->image }}' alt="">
                  </div>
                  <div class="detail-box">
                      <h5>{{ $product->title }}</h5>
                      <div class="price-container">
                          @if ($product->price_discount!= null)
                              <h6 class="discount-price" style="color: #F7444E">Discount: ${{ $product->price_discount }}</h6>
                              <h6 style="color:blue">Price: <del>${{ $product->price }}</del></h6>
                          @else
                              <h6 style="color:blue">Price: ${{ $product->price }}</h6>
                          @endif
                      </div>
                      <form action="{{ url('/add-cart', $product->id) }}" method="POST" class="add-to-cart-form">
                          @csrf
                          <div class="quantity-container">
                              <input type="number" name="quantity" value="1" min="1" max="10" class="quantity-input">
                              <button type="submit" class="add-to-cart-btn">Add to Cart</button>
                          </div>
                      </form>
                       <a href="{{ url('/product-detail', $product->id) }}" class="product-detail-link">Product Detail</a>
                  </div>
              </div>
          </div>
          @endforeach
          {!! $products->WithQueryString()->links('pagination::bootstrap-5') !!}
      </div>
      
      


       {{-- <div class="btn-box">
          <a href="">
          View All products
          </a>
       </div> --}}
    </div>
 </section>