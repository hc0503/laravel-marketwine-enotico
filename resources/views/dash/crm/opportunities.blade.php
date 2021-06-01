@extends('layouts.vertical', ['title' => 'CRM Opportunities'])

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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">CRM</a></li>
                        <li class="breadcrumb-item active">Opportunities</li>
                    </ol>
                </div>
                <h4 class="page-title">Opportunities</h4>
            </div>
        </div>
    </div>
    <!-- end page title -->


    <div class="row">
        <div class="col-xl-8 order-xl-1 order-2">
            <div class="card mb-2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-8">
                            <form class="form-inline">
                                <div class="form-group">
                                    <label for="inputPassword2" class="sr-only">Search</label>
                                    <input type="search" class="form-control" id="inputPassword2"
                                        placeholder="Search...">
                                </div>
                                <div class="form-group mx-sm-3">
                                    <label for="status-select" class="mr-2">Sort By</label>
                                    <select class="custom-select" id="status-select">
                                        <option selected="">All</option>
                                        <option value="1">Hot</option>
                                        <option value="2">Cold</option>
                                        <option value="3">In Progress</option>
                                        <option value="4">Lost</option>
                                        <option value="5">Won</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                        <div class="col-lg-4">
                            <div class="text-lg-right mt-3 mt-lg-0">
                                <button type="button" class="btn btn-success waves-effect waves-light mr-1"><i
                                        class="mdi mdi-cog"></i></button>
                                <button type="button" class="btn btn-danger waves-effect waves-light"
                                    data-toggle="modal" data-target="#custom-modal"><i
                                        class="mdi mdi-plus-circle mr-1"></i> Add New</button>
                            </div>
                        </div><!-- end col-->
                    </div> <!-- end row -->
                </div> <!-- end card-body-->
            </div> <!-- end card-->

            <div class="card-box mb-2">
                <div class="row align-items-center">
                    <div class="col-sm-4">
                        <div class="media">
                            <img class="d-flex align-self-center mr-3 rounded-circle"
                                src="{{asset('assets/images/companies/amazon.png')}}" alt="Generic placeholder image"
                                height="64">
                            <div class="media-body">
                                <h4 class="mt-0 mb-2 font-16">Amazon Inc.</h4>
                                <p class="mb-1"><b>Location:</b> Seattle, Washington</p>
                                <p class="mb-0"><b>Category:</b> Ecommerce</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <p class="mb-1 mt-3 mt-sm-0"><i class="mdi mdi-email mr-1"></i> collier@jourrapide.com</p>
                        <p class="mb-0"><i class="mdi mdi-phone-classic mr-1"></i> 828-216-2190</p>
                    </div>
                    <div class="col-sm-2">
                        <div class="text-center mt-3 mt-sm-0">
                            <div class="badge font-14 bg-soft-info text-info p-1">Hot</div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="text-sm-right">
                            <a href="javascript:void(0);" class="action-icon"> <i
                                    class="mdi mdi-square-edit-outline"></i></a>
                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                        </div>
                    </div> <!-- end col-->
                </div> <!-- end row -->
            </div> <!-- end card-box-->

            <div class="card-box mb-2">
                <div class="row align-items-center">
                    <div class="col-sm-4">
                        <div class="media">
                            <img class="d-flex align-self-center mr-3 rounded-circle"
                                src="{{asset('assets/images/companies/apple.png')}}" alt="Generic placeholder image"
                                height="64">
                            <div class="media-body">
                                <h4 class="mt-0 mb-2 font-16">Apple Inc.</h4>
                                <p class="mb-1"><b>Location:</b> Cupertino, California</p>
                                <p class="mb-0"><b>Category:</b> Ecommerce</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <p class="mb-1 mt-3 mt-sm-0"><i class="mdi mdi-email mr-1"></i> deanes@dayrep.com</p>
                        <p class="mb-0"><i class="mdi mdi-phone-classic mr-1"></i> 077 6157 4248</p>
                    </div>
                    <div class="col-sm-2">
                        <div class="text-center mt-3 mt-sm-0">
                            <div class="badge font-14 bg-soft-primary text-primary p-1">Cold</div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="text-sm-right">
                            <a href="javascript:void(0);" class="action-icon"> <i
                                    class="mdi mdi-square-edit-outline"></i></a>
                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                        </div>
                    </div> <!-- end col-->
                </div> <!-- end row -->
            </div> <!-- end card-box-->

            <div class="card-box mb-2">
                <div class="row align-items-center">
                    <div class="col-sm-4">
                        <div class="media">
                            <img class="d-flex align-self-center mr-3 rounded-circle"
                                src="{{asset('assets/images/companies/google.png')}}" alt="Generic placeholder image"
                                height="64">
                            <div class="media-body">
                                <h4 class="mt-0 mb-2 font-16">Google LLC</h4>
                                <p class="mb-1"><b>Location:</b> Menlo Park, California</p>
                                <p class="mb-0"><b>Category:</b> Search engine</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <p class="mb-1 mt-3 mt-sm-0"><i class="mdi mdi-email mr-1"></i> nnac@hotmai.us</p>
                        <p class="mb-0"><i class="mdi mdi-phone-classic mr-1"></i> (216) 76 298 896 </p>
                    </div>
                    <div class="col-sm-2">
                        <div class="text-center mt-3 mt-sm-0">
                            <div class="badge font-14 bg-soft-warning text-warning p-1">In-progress</div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="text-sm-right">
                            <a href="javascript:void(0);" class="action-icon"> <i
                                    class="mdi mdi-square-edit-outline"></i></a>
                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                        </div>
                    </div> <!-- end col-->
                </div> <!-- end row -->
            </div> <!-- end card-box-->

            <div class="card-box mb-2">
                <div class="row align-items-center">
                    <div class="col-sm-4">
                        <div class="media">
                            <img class="d-flex align-self-center mr-3 rounded-circle"
                                src="{{asset('assets/images/companies/airbnb.png')}}" alt="Generic placeholder image"
                                height="64">
                            <div class="media-body">
                                <h4 class="mt-0 mb-2 font-16">Airbnb Inc.</h4>
                                <p class="mb-1"><b>Location:</b> San Francisco, California</p>
                                <p class="mb-0"><b>Category:</b> Real Estate</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <p class="mb-1 mt-3 mt-sm-0"><i class="mdi mdi-email mr-1"></i> austin@dayrep.com</p>
                        <p class="mb-0"><i class="mdi mdi-phone-classic mr-1"></i> (02) 75 150 655</p>
                    </div>
                    <div class="col-sm-2">
                        <div class="text-center mt-3 mt-sm-0">
                            <div class="badge font-14 bg-soft-danger text-danger p-1">Lost</div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="text-sm-right">
                            <a href="javascript:void(0);" class="action-icon"> <i
                                    class="mdi mdi-square-edit-outline"></i></a>
                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                        </div>
                    </div> <!-- end col-->
                </div> <!-- end row -->
            </div> <!-- end card-box-->

            <div class="card-box mb-2">
                <div class="row align-items-center">
                    <div class="col-sm-4">
                        <div class="media">
                            <img class="d-flex align-self-center mr-3 rounded-circle"
                                src="{{asset('assets/images/companies/cisco.png')}}" alt="Generic placeholder image"
                                height="64">
                            <div class="media-body">
                                <h4 class="mt-0 mb-2 font-16">Cisco Systems</h4>
                                <p class="mb-1"><b>Location:</b> San Jose, California</p>
                                <p class="mb-0"><b>Category:</b> Operating Systems</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <p class="mb-1 mt-3 mt-sm-0"><i class="mdi mdi-email mr-1"></i> annette@email.net</p>
                        <p class="mb-0"><i class="mdi mdi-phone-classic mr-1"></i> (+15) 73 483 758</p>
                    </div>
                    <div class="col-sm-2">
                        <div class="text-center mt-3 mt-sm-0">
                            <div class="badge font-14 bg-soft-success text-success p-1">Won</div>
                        </div>
                    </div>
                    <div class="col-sm-2">
                        <div class="text-sm-right">
                            <a href="javascript:void(0);" class="action-icon"> <i
                                    class="mdi mdi-square-edit-outline"></i></a>
                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                        </div>
                    </div> <!-- end col-->
                </div> <!-- end row -->
            </div> <!-- end card-box-->

            <div class="text-center my-4">
                <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading mr-1"></i> Load
                    more </a>
            </div>

        </div> <!-- end col -->

        <div class="col-xl-4 order-xl-2 order-1">
            <div class="card-box" dir="ltr">
                <h4 class="header-title mb-3">Status Charts</h4>

                <div class="text-center">
                    <div id="status-chart"></div>

                    <p class="text-muted font-15 font-family-secondary mb-0 mt-3">
                        <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-success"></i> Won</span>
                        <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-info"></i> Hot</span>
                        <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-primary"></i> Cold</span>
                        <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-warning"></i> In-progress</span>
                        <span class="mx-2"><i class="mdi mdi-checkbox-blank-circle text-danger"></i> Lost</span>
                    </p>
                </div>

            </div> <!-- end card-box-->
        </div> <!-- end col -->
    </div>
    <!-- end row -->

</div> <!-- container -->

<!-- Modal -->
<div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header bg-light">
                <h4 class="modal-title" id="myCenterModalLabel">Add New Opportunities</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            </div>
            <div class="modal-body p-4">
                <form>
                    <div class="form-group">
                        <label for="name">Company Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter company name">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="position">Phone</label>
                        <input type="text" class="form-control" id="position" placeholder="Enter phone number">
                    </div>
                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" class="form-control" id="category" placeholder="Enter category">
                    </div>

                    <div class="text-right">
                        <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                        <button type="button" class="btn btn-danger waves-effect waves-light"
                            data-dismiss="modal">Continue</button>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
@endsection

@section('script')
<!-- Plugins js-->
<script src="{{asset('assets/libs/jquery-sparkline/jquery-sparkline.min.js')}}"></script>

<!-- Page js-->
<script src="{{asset('assets/js/pages/crm-opportunities.init.js')}}"></script>
@endsection