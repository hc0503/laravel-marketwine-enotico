@extends('layouts.vertical', ['title' => 'Order Details'])

@section('content')
    <!-- Start Content-->
    <div class="container-fluid">
        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UBold</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Ecommerce</a></li>
                            <li class="breadcrumb-item active">Order Detail</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Order Detail</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Track Order</h4>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h5 class="mt-0">Order ID:</h5>
                                    <p>#VL2537</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-4">
                                    <h5 class="mt-0">Tracking ID:</h5>
                                    <p>894152012012</p>
                                </div>
                            </div>
                        </div>

                        <div class="track-order-list">
                            <ul class="list-unstyled">
                                <li class="completed">
                                    <h5 class="mt-0 mb-1">Order Placed</h5>
                                    <p class="text-muted">April 21 2019 <small class="text-muted">07:22 AM</small> </p>
                                </li>
                                <li class="completed">
                                    <h5 class="mt-0 mb-1">Packed</h5>
                                    <p class="text-muted">April 22 2019 <small class="text-muted">12:16 AM</small></p>
                                </li>
                                <li>
                                    <span class="active-dot dot"></span>
                                    <h5 class="mt-0 mb-1">Shipped</h5>
                                    <p class="text-muted">April 22 2019 <small class="text-muted">05:16 PM</small></p>
                                </li>
                                <li>
                                    <h5 class="mt-0 mb-1"> Delivered</h5>
                                    <p class="text-muted">Estimated delivery within 3 days</p>
                                </li>
                            </ul>

                            <div class="text-center mt-4">
                                <a href="#" class="btn btn-primary">Show Details</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Items from Order #VL2537</h4>

                        <div class="table-responsive">
                            <table class="table table-bordered table-centered mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th>Product name</th>
                                        <th>Product</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Polo Navy blue T-shirt</th>
                                        <td><img src="{{asset('assets/images/products/product-1.png')}}"alt="product-img" height="32"></td>
                                        <td>1</td>
                                        <td>$39</td>
                                        <td>$39</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Red Hoodie for men</th>
                                        <td><img src="{{asset('assets/images/products/product-5.png')}}"alt="product-img" height="32"></td>
                                        <td>2</td>
                                        <td>$46</td>
                                        <td>$92</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Red Hoodie for men</th>
                                        <td><img src="{{asset('assets/images/products/product-3.png')}}"alt="product-img" height="32"></td>
                                        <td>1</td>
                                        <td>$46</td>
                                        <td>$46</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="4" class="text-right">Sub Total :</th>
                                        <td><div class="font-weight-bold">$177</div></td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="4" class="text-right">Shipping Charge :</th>
                                        <td>$24</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="4" class="text-right">Estimated Tax :</th>
                                        <td>$12</td>
                                    </tr>
                                    <tr>
                                        <th scope="row" colspan="4" class="text-right">Total :</th>
                                        <td><div class="font-weight-bold">$213</div></td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Shipping Information</h4>

                        <h5 class="font-family-primary font-weight-semibold">Brent Jones</h5>
                        
                        <p class="mb-2"><span class="font-weight-semibold mr-2">Address:</span> 3559 Roosevelt Wilson Lane San Bernardino, CA 92405</p>
                        <p class="mb-2"><span class="font-weight-semibold mr-2">Phone:</span> (123) 456-7890</p>
                        <p class="mb-0"><span class="font-weight-semibold mr-2">Mobile:</span> (+01) 12345 67890</p>

                    </div>
                </div>
            </div> <!-- end col -->
        
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Billing Information</h4>

                        <ul class="list-unstyled mb-0">
                            <li>
                                <p class="mb-2"><span class="font-weight-semibold mr-2">Payment Type:</span> Credit Card</p>
                                <p class="mb-2"><span class="font-weight-semibold mr-2">Provider:</span> Visa ending in 2851</p>
                                <p class="mb-2"><span class="font-weight-semibold mr-2">Valid Date:</span> 02/2020</p>
                                <p class="mb-0"><span class="font-weight-semibold mr-2">CVV:</span> xxx</p>
                            </li>
                        </ul>

                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mb-3">Delivery Info</h4>

                        <div class="text-center">
                            <i class="mdi mdi-truck-fast h2 text-muted"></i>
                            <h5><b>UPS Delivery</b></h5>
                            <p class="mb-1"><span class="font-weight-semibold">Order ID :</span> xxxx235</p>
                            <p class="mb-0"><span class="font-weight-semibold">Payment Mode :</span> COD</p>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->

        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection
