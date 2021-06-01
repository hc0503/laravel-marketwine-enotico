@extends('layouts.vertical', ['title' => 'Ecommerce Dashboard'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/admin-resources/admin-resources.min.css')}}" rel="stylesheet" type="text/css" />
@endsection

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">eCommerce</a></li>
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dashboard</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded bg-soft-primary">
                                <i class="dripicons-wallet font-24 avatar-title text-primary"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1">$<span data-plugin="counterup">58,947</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Revenue</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded bg-soft-success">
                                <i class="dripicons-basket font-24 avatar-title text-success"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">1,845</span></h3>
                                <p class="text-muted mb-1 text-truncate">Orders</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded bg-soft-info">
                                <i class="dripicons-store font-24 avatar-title text-info"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">825</span></h3>
                                <p class="text-muted mb-1 text-truncate">Stores</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded bg-soft-warning">
                                <i class="dripicons-user-group font-24 avatar-title text-warning"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">2,430</span></h3>
                                <p class="text-muted mb-1 text-truncate">Sellers</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-xl-8">
                <div class="card-box pb-2">
                    <div class="float-right d-none d-md-inline-block">
                        <div class="btn-group mb-2">
                            <button type="button" class="btn btn-xs btn-light">Today</button>
                            <button type="button" class="btn btn-xs btn-light">Weekly</button>
                            <button type="button" class="btn btn-xs btn-secondary">Monthly</button>
                        </div>
                    </div>

                    <h4 class="header-title mb-3">Sales Analytics</h4>

                    <div class="row text-center">
                        <div class="col-md-4">
                            <p class="text-muted mb-0 mt-3">Current Week</p>
                            <h2 class="font-weight-normal mb-3">
                                <small class="mdi mdi-checkbox-blank-circle text-primary align-middle mr-1"></small>
                                <span>$58,254</span>
                            </h2>
                        </div>
                        <div class="col-md-4">
                            <p class="text-muted mb-0 mt-3">Previous Week</p>
                            <h2 class="font-weight-normal mb-3">
                                <small class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></small>
                                <span>$69,524</span>
                            </h2>
                        </div>
                        <div class="col-md-4">
                            <p class="text-muted mb-0 mt-3">Targets</p>
                            <h2 class="font-weight-normal mb-3">
                                <small class="mdi mdi-checkbox-blank-circle text-success align-middle mr-1"></small>
                                <span>$95,025</span>
                            </h2>
                        </div>
                    </div>

                    <div id="revenue-chart" class="apex-charts mt-3" data-colors="#6658dd,#1abc9c"></div>
                </div> <!-- end card-box -->
            </div> <!-- end col-->

            <div class="col-xl-4">
                <div class="card-box">
                    <div class="dropdown float-right">
                        <a href="#" class="dropdown-toggle arrow-none card-drop" data-toggle="dropdown" aria-expanded="false">
                            <i class="mdi mdi-dots-vertical"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Sales Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Export Report</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Profit</a>
                            <!-- item-->
                            <a href="javascript:void(0);" class="dropdown-item">Action</a>
                        </div>
                    </div>

                    <h4 class="header-title mb-0">Total Revenue</h4>

                    <div class="widget-chart text-center" dir="ltr">
                        
                        <div id="world-map-markers" style="height: 230px" class="mt-4"></div>

                        <h5 class="text-muted mt-4">Total sales made today</h5>
                        <h2>$178</h2>

                        <p class="text-muted w-75 mx-auto sp-line-2">Traditional heading elements are designed to work best in the meat of your page content.</p>

                        <div class="row mt-4">
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Target</p>
                                <h4><i class="fe-arrow-down text-danger mr-1"></i>$7.8k</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Last week</p>
                                <h4><i class="fe-arrow-up text-success mr-1"></i>$1.4k</h4>
                            </div>
                            <div class="col-4">
                                <p class="text-muted font-15 mb-1 text-truncate">Last Month</p>
                                <h4><i class="fe-arrow-down text-danger mr-1"></i>$15k</h4>
                            </div>
                        </div>
                        
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col-->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xl-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Transaction History</h4>

                    <div class="table-responsive">
                        <table class="table table-centered table-hover mb-0">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Name</th>
                                    <th class="border-top-0">Card</th>
                                    <th class="border-top-0">Date</th>
                                    <th class="border-top-0">Amount</th>
                                    <th class="border-top-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                        <span class="ml-2">Imelda J. Stanberry</span>
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/images/cards/visa.png')}}"alt="user-card" height="24" />
                                        <span class="ml-2">**** 3256</span>
                                    </td>
                                    <td>27.03.2018</td>
                                    <td>$345.98</td>
                                    <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{asset('assets/images/users/user-3.jpg')}}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                        <span class="ml-2">Francisca S. Lobb</span>
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/images/cards/master.png')}}"alt="user-card" height="24" />
                                        <span class="ml-2">**** 8451</span>
                                    </td>
                                    <td>28.03.2018</td>
                                    <td>$1,250</td>
                                    <td><span class="badge badge-pill badge-success">Paid</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                        <span class="ml-2">James A. Wert</span>
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/images/cards/amazon.png')}}"alt="user-card" height="24" />
                                        <span class="ml-2">**** 2258</span>
                                    </td>
                                    <td>28.03.2018</td>
                                    <td>$145</td>
                                    <td><span class="badge badge-pill badge-success">Paid</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{asset('assets/images/users/user-4.jpg')}}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                        <span class="ml-2">Dolores J. Pooley</span>
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/images/cards/american-express.png')}}"alt="user-card" height="24" />
                                        <span class="ml-2">**** 6950</span>
                                    </td>
                                    <td>29.03.2018</td>
                                    <td>$2,005.89</td>
                                    <td><span class="badge badge-pill badge-danger">Failed</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="user-pic" class="rounded-circle avatar-sm bx-shadow-lg" />
                                        <span class="ml-2">Karen I. McCluskey</span>
                                    </td>
                                    <td>
                                        <img src="{{asset('assets/images/cards/discover.png')}}"alt="user-card" height="24" />
                                        <span class="ml-2">**** 0021</span>
                                    </td>
                                    <td>31.03.2018</td>
                                    <td>$24.95</td>
                                    <td><span class="badge badge-pill badge-success">Paid</span></td>
                                </tr>
                            
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive -->

                </div> <!-- end card-box-->
            </div> <!-- end col-->
            <div class="col-xl-6">
                <div class="card-box">
                    <h4 class="header-title mb-3">Recent Products</h4>

                    <div class="table-responsive">
                        <table class="table table-centered table-hover mb-0">
                            <thead>
                                <tr>
                                    <th class="border-top-0">Product</th>
                                    <th class="border-top-0">Category</th>
                                    <th class="border-top-0">Added Date</th>
                                    <th class="border-top-0">Amount</th>
                                    <th class="border-top-0">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <img src="{{asset('assets/images/products/product-1.png')}}"alt="product-pic" height="36" />
                                        <span class="ml-2">Adirondack Chair</span>
                                    </td>
                                    <td>
                                        Dining Chairs
                                    </td>
                                    <td>27.03.2018</td>
                                    <td>$345.98</td>
                                    <td><span class="badge bg-soft-success text-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{asset('assets/images/products/product-2.png')}}"alt="product-pic" height="36" />
                                        <span class="ml-2">Biblio Plastic Armchair</span>
                                    </td>
                                    <td>
                                        Baby Chairs
                                    </td>
                                    <td>28.03.2018</td>
                                    <td>$1,250</td>
                                    <td><span class="badge bg-soft-success text-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{asset('assets/images/products/product-3.png')}}"alt="product-pic" height="36" />
                                        <span class="ml-2">Amazing Modern Chair</span>
                                    </td>
                                    <td>
                                        Plastic Armchair
                                    </td>
                                    <td>28.03.2018</td>
                                    <td>$145</td>
                                    <td><span class="badge bg-soft-danger text-danger">Deactive</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{asset('assets/images/products/product-4.png')}}"alt="product-pic" height="36" />
                                        <span class="ml-2">Designer Awesome Chair</span>
                                    </td>
                                    <td>
                                        Wing Chairs
                                    </td>
                                    <td>29.03.2018</td>
                                    <td>$2,005.89</td>
                                    <td><span class="badge bg-soft-success text-success">Active</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src="{{asset('assets/images/products/product-5.png')}}"alt="product-pic" height="36" />
                                        <span class="ml-2">The butterfly chair</span>
                                    </td>
                                    <td>
                                        Plastic Armchair
                                    </td>
                                    <td>31.03.2018</td>
                                    <td>$24.95</td>
                                    <td><span class="badge bg-soft-success text-success">Active</span></td>
                                </tr>
                            
                            </tbody>
                        </table>
                    </div> <!-- end table-responsive -->
                </div> <!-- end card-box-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Third Party js-->
    <script src="{{asset('assets/libs/apexcharts/apexcharts.min.js')}}"></script>

    <!-- Plugins js-->
    <script src="{{asset('assets/libs/admin-resources/admin-resources.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/ecommerce-dashboard.init.js')}}"></script>
@endsection