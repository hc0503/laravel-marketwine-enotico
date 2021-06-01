@extends('layouts.vertical', ['title' => 'Dashboard'])

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
                            <li class="breadcrumb-item active">Sellers</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Sellers</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <form class="search-bar form-inline">
                                    <div class="position-relative">
                                        <input type="text" class="form-control" placeholder="Search...">
                                        <span class="mdi mdi-magnify"></span>
                                    </div>
                                </form>                          
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right">
                                    <button type="button" class="btn btn-danger waves-effect waves-light mb-2 mr-2"><i class="mdi mdi-basket mr-1"></i> Add Sellers</button>
                                    <button type="button" class="btn btn-success waves-effect waves-light mb-2 mr-1"><i class="mdi mdi-cog"></i></button>
                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap table-borderless table-hover mb-0">
                                <thead class="thead-light">
                                    <tr>
                                        <th style="width: 20px;">
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                <label class="custom-control-label" for="customCheck1">&nbsp;</label>
                                            </div>
                                        </th>
                                        <th>Owner Name</th>
                                        <th>Store Name</th>
                                        <th>Ratings</th>
                                        <th>Products</th>
                                        <th>Wallet Balance</th>
                                        <th>Create Date</th>
                                        <th>Revenue</th>
                                        <th style="width: 82px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Paul J. Friend</a>
                                        </td>
                                        <td>
                                            Homovee
                                        </td>
                                        <td>
                                            <i class="mdi mdi-star text-warning"></i> 4.9
                                        </td>
                                        <td>
                                            <span class="font-weight-semibold">128</span>
                                        </td>
                                        <td>
                                            $128,250
                                        </td>
                                        <td>
                                            07/07/2018
                                        </td>
                                        <td>
                                            $258.26k
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck3">
                                                <label class="custom-control-label" for="customCheck3">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-3.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Bryan J. Luellen</a>
                                        </td>
                                        <td>
                                            Execucy
                                        </td>
                                        <td>
                                            <i class="mdi mdi-star text-warning"></i> 3.5
                                        </td>
                                        <td>
                                            <span class="font-weight-semibold">09</span>
                                        </td>
                                        <td>
                                            $78,410
                                        </td>
                                        <td>
                                            09/12/2018
                                        </td>
                                        <td>
                                            $152.3k
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck4">
                                                <label class="custom-control-label" for="customCheck4">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-4.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Kathryn S. Collier</a>
                                        </td>
                                        <td>
                                            Epiloo
                                        </td>
                                        <td>
                                            <i class="mdi mdi-star text-warning"></i> 4.1
                                        </td>
                                        <td>
                                            <span class="font-weight-semibold">78</span>
                                        </td>
                                        <td>
                                            $89,458
                                        </td>
                                        <td>
                                            06/30/2018
                                        </td>
                                        <td>
                                            $178.6k
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck5">
                                                <label class="custom-control-label" for="customCheck5">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Timothy Kauper</a>
                                        </td>
                                        <td>
                                            Uberer
                                        </td>
                                        <td>
                                            <i class="mdi mdi-star text-warning"></i> 4.9
                                        </td>
                                        <td>
                                            <span class="font-weight-semibold">847</span>
                                        </td>
                                        <td>
                                            $258,125
                                        </td>
                                        <td>
                                            09/08/2018
                                        </td>
                                        <td>
                                            $368.2k
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck6">
                                                <label class="custom-control-label" for="customCheck6">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Zara Raws</a>
                                        </td>
                                        <td>
                                            Symic
                                        </td>
                                        <td>
                                            <i class="mdi mdi-star text-warning"></i> 5.0
                                        </td>
                                        <td>
                                            <span class="font-weight-semibold">235</span>
                                        </td>
                                        <td>
                                            $56,210
                                        </td>
                                        <td>
                                            07/15/2018
                                        </td>
                                        <td>
                                            $89.5k
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                <label class="custom-control-label" for="customCheck7">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-6.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Annette P. Kelsch</a>
                                        </td>
                                        <td>
                                            Insulore
                                        </td>
                                        <td>
                                            <i class="mdi mdi-star text-warning"></i> 4.0
                                        </td>
                                        <td>
                                            <span class="font-weight-semibold">485</span>
                                        </td>
                                        <td>
                                            $330,251
                                        </td>
                                        <td>
                                            09/05/2018
                                        </td>
                                        <td>
                                            $597.8k
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                <label class="custom-control-label" for="customCheck8">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-7.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Jenny C. Gero</a>
                                        </td>
                                        <td>
                                            Susadmin
                                        </td>
                                        <td>
                                            <i class="mdi mdi-star text-warning"></i> 4.3
                                        </td>
                                        <td>
                                            <span class="font-weight-semibold">38</span>
                                        </td>
                                        <td>
                                            $12,000
                                        </td>
                                        <td>
                                            08/02/2018
                                        </td>
                                        <td>
                                            $29.3k
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                <label class="custom-control-label" for="customCheck9">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-8.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Edward Roseby</a>
                                        </td>
                                        <td>
                                            Hyperill
                                        </td>
                                        <td>
                                            <i class="mdi mdi-star text-warning"></i> 5.0
                                        </td>
                                        <td>
                                            <span class="font-weight-semibold">77</span>
                                        </td>
                                        <td>
                                            $45,216
                                        </td>
                                        <td>
                                            08/23/2018
                                        </td>
                                        <td>
                                            $48.6k
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                <label class="custom-control-label" for="customCheck10">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-9.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Anna Ciantar</a>
                                        </td>
                                        <td>
                                            Vicedel
                                        </td>
                                        <td>
                                            <i class="mdi mdi-star text-danger"></i> 2.7
                                        </td>
                                        <td>
                                            <span class="font-weight-semibold">347</span>
                                        </td>
                                        <td>
                                            $7,815
                                        </td>
                                        <td>
                                            05/06/2018
                                        </td>
                                        <td>
                                            $12.1k
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                <label class="custom-control-label" for="customCheck11">&nbsp;</label>
                                            </div>
                                        </td>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-10.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Dean Smithies</a>
                                        </td>
                                        <td>
                                            Circumous
                                        </td>
                                        <td>
                                            <i class="mdi mdi-star text-warning"></i> 4.9
                                        </td>
                                        <td>
                                            <span class="font-weight-semibold">506</span>
                                        </td>
                                        <td>
                                            $68,143
                                        </td>
                                        <td>
                                            04/09/2018
                                        </td>
                                        <td>
                                            $78.2k
                                        </td>
    
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <ul class="pagination pagination-rounded justify-content-end my-2">
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active"><a class="page-link" href="javascript: void(0);">1</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                            <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                            <li class="page-item">
                                <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection
