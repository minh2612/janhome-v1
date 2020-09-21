@extends('frontend.layouts.master')
@section('content')
<body class="page-body">

  <!-- main content -->
  <main class="checkout-order-body main-content gradient-lg position-relative">

    <!-- overlay -->
    <div class="overlay pe-n br-n bp-c bs-c o-30" style="background-image: url(assets2/img/bg/bg_shape.png);"></div>
    <!-- /.overlay -->

    <!-- content area -->
    <div class="content-section text-light">
      <div class="container">
        <header class="header text-center mb-6">
          <div class="row gutters-y">
            <div class="col-12 pt-8">
              <div class="timeline-horizontal">
                <div class="timeline-item flex-1 p-0" data-step="&#xe60d;">
                  <div class="pt-8 pb-7 px-2 px-sm-4 border-left border-bottom border-secondary">
                    <span class="text-uppercase small-3 fw-600">Your Cart</span>
                  </div>
                </div>
                <div class="timeline-item flex-1 border-secondary p-0" data-step="&#xe69b;">
                  <div class="pt-8 pb-7 px-2 px-sm-4 border-bottom border-secondary">
                    <span class="text-uppercase small-3 fw-600">Address</span>
                  </div>
                </div>
                <div class="timeline-item flex-1 border-secondary p-0" data-step="&#xe721;">
                  <div class="pt-8 pb-7 px-2 px-sm-4 border-bottom border-secondary border-right">
                    <span class="text-uppercase small-3 fw-600">Payment</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </header>
        <div class="position-relative">
          <div class="row">
            <div class="col-lg-8 mb-8 mb-lg-0">
              <div>
                <div class="mb-7">
                  <h4>Your cart</h4>
                  <hr class="border-secondary my-4">
                  @if(session('cart'))
                  @foreach(session('cart') as $key=>$val)
                  <div class="row" id='{{$key}}'>
                    <!-- item -->
                    <div class="col-md-12 mb-4">
                      <div class="product-item">
                        <div class="row align-items-center no-gutters">
                          <div class="item_img d-none d-sm-block">
                            <a href="store-product.html">
                              <img class="checkout-order-img img bl-3 text-primary" src="{{$val['image']}}" alt="{{$val['title']}}">
                            </a>
                          </div>
                          <div class="item_content flex-1 flex-grow pl-0 pl-sm-6 pr-6">
                            <a href="store-product.html">
                              <h6 class="item_title ls-1 small-1 fw-600 text-uppercase mb-1">{{$val['title']}}</h6>
                            </a>
                            <div class="mb-0">
                              <i class="mr-2 fab fa-windows"></i>
                              <i class="mr-2 fab fa-steam"></i>
                              <i class="fab fa-apple"></i>
                            </div>
                          </div>
                          <div class="amount-wrapper d-flex align-items-center justify-content-center border border-secondary">
                            @if($val['quantity'] >1)
                           <a href="javascript:void(0);" class="btn-outline-warning" style="border-radius: 1000%;  width: 40px;  height: 40px;   background:none; border:0.5px solid #ffbf00;  line-height:40px;  vertical-align:center;  text-align:center;   color:while;" data-action="incre-to-cart" data-product_id="{{$key}}"><span class="d-block" hover="opacity: 1">-</span></a>

                           @endif
                            <input class="input-amount quantity" min="1" data-product_id='{{$key}}'  value='{{$val['quantity']}}' type="number">
                          <a href="javascript:void(0);" class="btn-outline-warning" style=" border-radius: 1000%;  width: 40px;  height: 40px;   background:none; border:0.5px solid #ffbf00;  display:inline-block;  line-height:40px;  vertical-align:center;  text-align:center;   color:  while;" data-action="decre-to-cart" data-product_id="{{$key}}"><span class="d-block">+</span></a>
                          </div>
                            

                           

                          <div class="item_discount d-none d-sm-block">
                            <div class="row align-items-center h-100 no-gutters">
                              <div class="text-right text-secondary px-6">
                                <span class="fw-600 btn bg-warning">-50%</span>
                              </div>
                            </div>
                          </div>
                          <div class="item_price d-none d-sm-block">
                            <div class="row align-items-center h-100 no-gutters">
                              <div class="text-right">
                                <!-- <span class="fw-600 td-lt">€144.99</span><br> -->
                                <span class="fw-600">{{$val['price']}}&nbspĐ</span>
                              </div>
                            </div>
                          </div>
                          <div class="pl-4">
                            <div class="row align-items-center h-100 no-gutters">
                              <div class="text-right lead-2">
                                <a href="javascript:void(0)" class="delete ti-trash text-warning" data-product_id='{{$key}}'></a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.item -->
                  </div>
                  @endforeach
                  @endif
                  <hr class="border-secondary my-4">
                </div>
                <div>
                  <h4 class="mb-5">Coupons</h4>
                  <form class="input-transparent">
                    <div class="form-group input-group mb-0">
                      <input type="text" class="form-control" placeholder="Enter Your Code">
                      <div class="input-group-append ml-3">
                        <button class="btn btn-warning" type="button">Apply</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="archive border border-secondary rounded">
                <div class="bg-secondary px-4 py-1"><span class="fw-600 ls-1 text-uppercase lead-1">Cart Summary</span></div>
                <div class="p-4">
                  <ul class="list-unstyled small mb-0">
                    <li class="small-2">Price Details</li>
                    <li><hr class="my-3 border-secondary"></li>

                    <li class="my-1">
                      <div class="d-flex small-2 fw-600">
                        <div>Full Price</div>
                        <div id="total" class="ml-auto">@if ($total > 0){{number_format($total)}}$ @endif</div>
                      </div>
                    </li>
                    <li class="my-1">
                      <div class="d-flex text-info small-2 fw-600">
                        <div>Your Discount</div>
                        <div class="ml-auto">-519,79$</div>
                      </div>
                    </li>
                    <li class="my-1">
                      <div class="d-flex text-warning small-2 fw-600">
                        <div>You Save</div>
                        <div class="ml-auto">-519,79$</div>
                      </div>
                    </li>
                    
                    <li><hr class="my-3 border-secondary"></li>
                    <li>
                      <div class="d-flex small-1 fw-600">
                        <div>Total</div>
                        <div class="ml-auto text-warning">-919,79$</div>
                      </div>
                    </li>
                    <li><hr class="my-3 border-secondary"></li>
                    <li>
                      <a href="{{route('home.checkout_address')}}" class="btn btn-lg btn-block btn-warning mt-4">Place Order</a>
                    </li>
                    <li class="lh-1">
                      <span class="small-4 text-lt w-100 mt-4 pb-1 d-inline-block">By clicking Place Order, you accept our <a href="#" target="_blank" class="text-rp text-primary text-underline">refund policy</a>.</span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>  
    </div>
    <!-- /.content area -->

  </main>
  <script type="text/javascript">

    $('.quantity').change(function () {
    var product_id = $(this).data('product_id');
    var quantity = $(this).val();
    $.ajax({
        url: '/api/update-cart',
        method: 'POST',
        data: {product_id: product_id, quantity: quantity},
        success: function (resp) {
            if (resp.success == true) {
                $('.itm-cont').html(resp.count);
                $('#total').html(resp.total + ' đ');
                alert('Lưu thành công');
            } else {
                swal('Lưu thất bại');
            }
        }
    });
})

$('.delete').click(function () {
    var product_id = $(this).data('product_id');
    $.ajax({
        url: '/api/delete-cart',
        method: 'POST',
        data: {product_id: product_id},
        success: function (resp) {
            if (resp.success == true) {
                $('.itm-cont').html(resp.count);
                $('#total').html(resp.total + ' đ');
            }
        }
    });
    $('#'+product_id).fadeOut();
});
</script>
</body>
@stop