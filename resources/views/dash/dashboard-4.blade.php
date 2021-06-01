@extends('layouts.vertical', ['title' => 'Dashboard 4'])

@section('css')

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
                            <li class="breadcrumb-item active">Dashboard 4</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Dashboard 4</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 
        

        <div class="row">
            <div class="col-xl-4 col-md-6">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body" dir="ltr">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Lifetime Sales</h4>

                        <div id="cardCollpase1" class="collapse pt-3 show">
                            <div class="text-center">
                                <div class="row mt-2">
                                    <div class="col-4">
                                        <h3 data-plugin="counterup">3,487</h3>
                                        <p class="text-muted font-13 mb-0 text-truncate">Total Sales</p>
                                    </div>
                                    <div class="col-4">
                                        <h3 data-plugin="counterup">814</h3>
                                        <p class="text-muted font-13 mb-0 text-truncate">Open Campaign</p>
                                    </div>
                                    <div class="col-4">
                                        <h3 data-plugin="counterup">5,324</h3>
                                        <p class="text-muted font-13 mb-0 text-truncate">Daily Sales</p>
                                    </div>
                                </div> <!-- end row -->

                                <div id="lifetime-sales" data-colors="#4fc6e1,#6658dd,#ebeff2" style="height: 270px;" class="morris-chart mt-3"></div>                
                            
                            </div>
                        </div> <!-- end collapse-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-4 col-md-6">
                <div class="card">
                    <div class="card-body" dir="ltr">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Statistics</h4>

                        <div id="cardCollpase3" class="collapse pt-3 show">
                            <div class="text-center">

                                <div class="row mt-2">
                                    <div class="col-6">
                                        <h3 data-plugin="counterup">1,284</h3>
                                        <p class="text-muted font-13 mb-0 text-truncate">Total Sales</p>
                                    </div>
                                    <div class="col-6">
                                        <h3 data-plugin="counterup">7,841</h3>
                                        <p class="text-muted font-13 mb-0 text-truncate">Open Campaign</p>
                                    </div>
                                </div> <!-- end row -->
                                <div id="statistics-chart" data-colors="#02c0ce" style="height: 270px;" class="morris-chart mt-3"></div>

                            </div>
                        </div> <!-- end collapse-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->

            <div class="col-xl-4 col-md-12">
                <div class="card">
                    <div class="card-body" dir="ltr">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Income Amounts</h4>

                        <div id="cardCollpase2" class="collapse pt-3 show">
                            <div class="text-center">
                                <div class="row mt-2">
                                    <div class="col-4">
                                        <h3 data-plugin="counterup">2,845</h3>
                                        <p class="text-muted font-13 mb-0 text-truncate">Total Sales</p>
                                    </div>
                                    <div class="col-4">
                                        <h3 data-plugin="counterup">6,487</h3>
                                        <p class="text-muted font-13 mb-0 text-truncate">Open Campaign</p>
                                    </div>
                                    <div class="col-4">
                                        <h3 data-plugin="counterup">201</h3>
                                        <p class="text-muted font-13 mb-0 text-truncate">Daily Sales</p>
                                    </div>
                                </div> <!-- end row -->

                                <div id="income-amounts" data-colors="#4a81d4,#e3eaef" style="height: 270px;" class="morris-chart mt-3"></div>

                            </div>
                        </div> <!-- end collapse-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="avatar-lg">
                                <img src="{{asset('assets/images/users/user-3.jpg')}}" class="img-fluid rounded-circle" alt="user-img">
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="mb-1 mt-2 font-16">Thelma Fridley</h5>
                            <p class="mb-2 text-muted">Admin User</p>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="avatar-lg">
                                <img src="{{asset('assets/images/users/user-4.jpg')}}" class="img-fluid rounded-circle" alt="user-img">
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="mb-1 mt-2 font-16">Chandler Hervieux</h5>
                            <p class="mb-2 text-muted">Manager</p>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="avatar-lg">
                                <img src="{{asset('assets/images/users/user-5.jpg')}}" class="img-fluid rounded-circle" alt="user-img">
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="mb-1 mt-2 font-16">Percy Demers</h5>
                            <p class="mb-2 text-muted">Director</p>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box bg-blue">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <div class="avatar-lg">
                                <img src="{{asset('assets/images/users/user-6.jpg')}}" class="img-fluid rounded-circle img-thumbnail" alt="user-img">
                            </div>
                        </div>
                        <div class="col">
                            <h5 class="mb-1 mt-2 text-white font-16">Antoine Masson</h5>
                            <p class="mb-2 text-white-50">Premium User</p>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript: void(0);" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase4" role="button" aria-expanded="false" aria-controls="cardCollpase4"><i class="mdi mdi-minus"></i></a>
                            <a href="javascript: void(0);" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h4 class="header-title mb-0">Projects</h4>

                        <div id="cardCollpase4" class="collapse pt-3 show">
                            <div class="table-responsive">
                                <table class="table table-centered table-borderless mb-0">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Project Name</th>
                                            <th>Start Date</th>
                                            <th>Due Date</th>
                                            <th>Team</th>
                                            <th>Status</th>
                                            <th>Clients</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>App design and development</td>
                                            <td>Jan 03, 2015</td>
                                            <td>Oct 12, 2018</td>
                                            <td>
                                                <div class="avatar-group">
                                                    <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                        <img src="{{asset('assets/images/users/user-1.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                                    </a>
            
                                                    <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                                                        <img src="{{asset('assets/images/users/user-2.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                                    </a>
            
                                                    <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                                                        <img src="{{asset('assets/images/users/user-3.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                                    </a>
            
                                                    <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Username">
                                                        <img src="{{asset('assets/images/users/user-5.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                                    </a>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-soft-info text-info p-1">Work in Progress</span></td>
                                            <td>Halette Boivin</td>
                                        </tr>
                                        <tr>
                                            <td>Coffee detail page - Main Page</td>
                                            <td>Sep 21, 2016</td>
                                            <td>May 05, 2018</td>
                                            <td>
                                                <div class="avatar-group">
                                                    <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                                                        <img src="{{asset('assets/images/users/user-3.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                                    </a>
            
                                                    <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                        <img src="{{asset('assets/images/users/user-4.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                                    </a>
            
                                                    <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Username">
                                                        <img src="{{asset('assets/images/users/user-5.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                                    </a>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-soft-warning text-warning p-1">Pending</span></td>
                                            <td>Durandana Jolicoeur</td>
                                        </tr>
                                        <tr>
                                            <th>Poster illustation design</th>
                                            <td>Mar 08, 2018</td>
                                            <td>Sep 22, 2018</td>
                                            <td>
                                                <div class="avatar-group">
                                                    
                                                    <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                                                        <img src="{{asset('assets/images/users/user-2.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                                    </a>
            
                                                    <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                        <img src="{{asset('assets/images/users/user-6.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                                    </a>
            
                                                    <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Username">
                                                        <img src="{{asset('assets/images/users/user-7.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                                    </a>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-soft-success text-success p-1">Completed</span></td>
                                            <td>Lucas Sabourin</td>
                                        </tr>
                                        <tr>
                                            <td>Drinking bottle graphics</td>
                                            <td>Oct 10, 2017</td>
                                            <td>May 07, 2018</td>
                                            <td>
                                                <div class="avatar-group">
                                                    <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                        <img src="{{asset('assets/images/users/user-9.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                                    </a>
            
                                                    <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                                                        <img src="{{asset('assets/images/users/user-10.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                                    </a>
            
                                                    <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                                                        <img src="{{asset('assets/images/users/user-1.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                                    </a>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-soft-info text-info p-1">Work in Progress</span></td>
                                            <td>Donatien Brunelle</td>
                                        </tr>
                                        <tr>
                                            <td>Landing page design - Home</td>
                                            <td>Coming Soon</td>
                                            <td>May 25, 2021</td>
                                            <td>
                                                <div class="avatar-group">
            
                                                    <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty">
                                                        <img src="{{asset('assets/images/users/user-5.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                                    </a>
            
                                                    <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson">
                                                        <img src="{{asset('assets/images/users/user-8.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                                    </a>
            
                                                    <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme">
                                                        <img src="{{asset('assets/images/users/user-2.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                                    </a>
            
                                                    <a href="javascript: void(0);" class="avatar-group-item" data-toggle="tooltip" data-placement="top" title="" data-original-title="Username">
                                                        <img src="{{asset('assets/images/users/user-7.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                                    </a>
                                                </div>
                                            </td>
                                            <td><span class="badge bg-soft-dark text-dark p-1">Coming Soon</span></td>
                                            <td>Karel Auberjo</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div> <!-- .table-responsive -->
                        </div> <!-- end collapse-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/morris.js06/morris.js06.min.js')}}"></script>
    <script src="{{asset('assets/libs/raphael/raphael.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/dashboard-4.init.js')}}"></script>
@endsection
