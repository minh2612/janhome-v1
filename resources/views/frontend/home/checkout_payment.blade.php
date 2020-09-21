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
                <div class="timeline-item flex-1 p-0" data-step="&#xe69b;">
                  <div class="pt-8 pb-7 px-2 px-sm-4 border-bottom border-secondary">
                    <span class="text-uppercase small-3 fw-600">Address</span>
                  </div>
                </div>
                <div class="timeline-item flex-1 p-0" data-step="&#xe721;">
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
                <div>
                  <h4>Payment Options</h4>
                  <hr class="border-secondary my-4">
                  <span class="d-block small-1 o-90 mb-4">Select Payment Method</span>
                  <div>
                    <div id="accordion-5" class="accordion accordion-connected accordion-no-header">
                      <div class="card">
                        <div class="card-header" id="Paypal">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapse-5-1" class="collapsed d-flex align-items-center">
                              <span class="icon"><i class="fab fa-paypal text-warning lead-5"></i></span>
                              Paypal
                            </a>
                          </h5>
                        </div>
                        <div id="collapse-5-1" class="collapse" aria-labelledby="Paypal" data-parent="#accordion-5">
                          <div class="card-body">
                            <span class="d-block mb-3">After clicking on 'Place order', you will be redirected to the PayPal page to finish your transaction.</span>
                            <form class="input-transparent">
                              <div class="form-group custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="paypal_ref">
                                <label class="custom-control-label" for="paypal_ref">
                                  Save payment details for faster checkout next time
                                </label>
                              </div>
                            </form>            
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="Card">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapse-5-2" class="d-flex align-items-center">
                              <span class="icon"><i class="fab fa-cc-visa text-warning lead-5"></i></span>
                              Card
                            </a>
                          </h5>
                        </div>
                        <div id="collapse-5-2" class="collapse show" aria-labelledby="Card" data-parent="#accordion-5">
                          <div class="card-body">
                            <form class="input-transparent">
                              <div class="form-row">
                                <div class="form-group col-md-5">
                                  <label class="small-1" for="cardNumber">Card Number *</label>
                                  <input class="form-control" id="cardNumber" type="text" name="cardNumber" required="">
                                </div>
                                <div class="form-group col-md-3">
                                  <label class="small-1" for="securityCode">Security Code *</label>
                                  <input class="form-control" id="securityCode" type="text" name="securityCode" required="">
                                </div>
                                <div class="form-group col-md-4">
                                  <div class="d-flex align-items-center pt-md-7">
                                    <div class="lead-3 pl-1 pr-3"><i class="fas fa-credit-card text-warning"></i></div>
                                    <div class="small lh-5">The 3 digit security code on the back of your card.</div>
                                  </div>
                                </div>
                              </div>
                              <div class="form-row">
                                <div class="form-group col-md-5">
                                  <label class="small-1" for="nameOnCard">Name on Card *</label>
                                  <input class="form-control" id="nameOnCard" type="text" name="nameOnCard" required="">
                                </div>
                                <div class="form-group col-md-3">
                                  <label class="small-1" for="expiryDate">Expiry Date *</label>
                                  <div class="form-row">
                                    <div class="form-group mb-md-0 col-md-6">
                                      <select class="form-control pl-2" id="expiryDate">
                                        <option>MM</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                      </select>
                                    </div>
                                    <div class="form-group mb-md-0 col-md-6">
                                      <select class="form-control pl-2" id="expiryDateYYYY">
                                        <option>YYYY</option>
                                        <option>2019</option>
                                        <option>2020</option>
                                        <option>2021</option>
                                        <option>2022</option>
                                        <option>2023</option>
                                        <option>2024</option>
                                        <option>2025</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group col-md-4">
                                  <label class="small-1" for="expiryDate">Start Date <span class="small">(if applicable)</span></label>
                                  <div class="form-row">
                                    <div class="form-group mb-md-0 col-md-6">
                                      <select class="form-control pl-2" id="startDate">
                                        <option>MM</option>
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                        <option>6</option>
                                        <option>7</option>
                                        <option>8</option>
                                        <option>9</option>
                                        <option>10</option>
                                        <option>11</option>
                                        <option>12</option>
                                      </select>
                                    </div>
                                    <div class="form-group mb-md-0 col-md-6">
                                      <select class="form-control pl-2" id="startDateYYYY">
                                        <option>YYYY</option>
                                        <option>2019</option>
                                        <option>2018</option>
                                        <option>2017</option>
                                        <option>2016</option>
                                        <option>2015</option>
                                        <option>2014</option>
                                        <option>2013</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group mb-md-0 col-md-6">
                                  <label class="small-1" for="issueNumber">Issue Number <span class="small">(if applicable)</span></label>
                                  <input class="form-control" id="issueNumber" type="text" name="issueNumber" required="">
                                </div>
                                <div class="form-group mb-md-0 col-md-6">
                                  <div>
                                    <label class="o-0 d-none d-md-inline-block" for="issueNumber">Remember my payment details</label>
                                    <div class="form-group custom-control custom-checkbox mb-0 pt-2 pl-2">
                                      <input class="custom-control-input" type="checkbox" value="" id="rMyPD">
                                      <label class="custom-control-label" for="rMyPD">
                                        Remember my payment details
                                      </label>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                      <div class="card">
                        <div class="card-header" id="ApplePay">
                          <h5 class="mb-0">
                            <a data-toggle="collapse" href="#collapse-5-3" class="collapsed d-flex align-items-center">
                              <span class="icon"><i class="fab fa-apple-pay text-warning lead-5"></i></span>
                              Apple Pay
                            </a>
                          </h5>
                        </div>
                        <div id="collapse-5-3" class="collapse" aria-labelledby="ApplePay" data-parent="#accordion-5">
                          <div class="card-body">
                            <span class="d-block mb-3">After clicking on 'Place order', you will be redirected to the Apple Pay page to finish your transaction.</span>
                            <form class="input-transparent">
                              <div class="form-group custom-control custom-checkbox">
                                <input class="custom-control-input" type="checkbox" value="" id="applePay_ref">
                                <label class="custom-control-label" for="applePay_ref">
                                  Save payment details for faster checkout next time
                                </label>
                              </div>
                            </form>            
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
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
                        <div class="ml-auto">1 434,32$</div>
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
                    <li class="my-1">
                      <div class="d-flex small-2 fw-600">
                        <div>Estimated Tax</div>
                        <div class="ml-auto text-danger">$7.3$</div>
                      </div>
                    </li>
                    <li class="my-1">
                      <div class="d-flex small-2 fw-600">
                        <div>Delivery Charges</div>
                        <div class="ml-auto text-warning">Free</div>
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
                      <a href="#" class="btn btn-lg btn-block btn-warning mt-4">Place Order</a>
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

  <!-- offcanvas-cart -->
  <div id="offcanvas-cart" class="offcanvas-cart offcanvas text-light h-100 r-0 l-auto d-flex flex-column" data-animation="slideRight">
    <div>
      <button type="button" data-toggle="offcanvas-close" class="close float-right ml-4 text-light o-1 fw-100" data-dismiss="offcanvas" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <hr class="border-light o-20 mt-8 mb-4">
    </div>
    <div class="offcanvas-cart-body flex-1">
      <div class="empty">
        <span class="fw-500">The cart is empty.</span>
      </div>
    </div>
    <div>
      <a data-toggle="offcanvas-close" data-dismiss="offcanvas" aria-label="Close" class="btn btn-lg btn-block btn-outline-light">Continue shopping</a>
    </div>
  </div>
  <!-- /.offcanvas-cart -->
</body>
@stop