@extends('layouts.vertical', ['title' => 'Dashboard'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/datatables/datatables.min.css')}}" rel="stylesheet" type="text/css" />
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                            <li class="breadcrumb-item active">Tickets</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Tickets</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-primary">
                                <i class="fe-tag font-22 avatar-title text-white"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">3,947</span></h3>
                                <p class="text-muted mb-1 text-truncate">Total Tickets</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-warning">
                                <i class="fe-clock font-22 avatar-title text-white"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">624</span></h3>
                                <p class="text-muted mb-1 text-truncate">Pending Tickets</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-success">
                                <i class="fe-check-circle font-22 avatar-title text-white"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">3195</span></h3>
                                <p class="text-muted mb-1 text-truncate">Closed Tickets</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->

            <div class="col-md-6 col-xl-3">
                <div class="widget-rounded-circle card-box">
                    <div class="row">
                        <div class="col-6">
                            <div class="avatar-lg rounded-circle bg-danger">
                                <i class="fe-trash-2 font-22 avatar-title text-white"></i>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="text-right">
                                <h3 class="text-dark mt-1"><span data-plugin="counterup">128</span></h3>
                                <p class="text-muted mb-1 text-truncate">Deleted Tickets</p>
                            </div>
                        </div>
                    </div> <!-- end row-->
                </div> <!-- end widget-rounded-circle-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <button type="button" class="btn btn-sm btn-blue waves-effect waves-light float-right">
                        <i class="mdi mdi-plus-circle"></i> Add Ticket
                    </button>
                    <h4 class="header-title mb-4">Manage Tickets</h4>

                    <table class="table table-hover m-0 table-centered dt-responsive nowrap w-100" id="tickets-table">
                        <thead>
                        <tr>
                            <th>
                                ID
                            </th>
                            <th>Requested By</th>
                            <th>Subject</th>
                            <th>Assignee</th>
                            <th>Priority</th>
                            <th>Status</th>
                            <th>Created Date</th>
                            <th>Due Date</th>
                            <th class="hidden-sm">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td><b>#1256</b></td>
                            <td>
                                <a href="javascript: void(0);" class="text-body">
                                    <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                    <span class="ml-2">George A. Llanes</span>
                                </a>
                            </td>

                            <td>
                                Support for theme
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="{{asset('assets/images/users/user-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                </a>
                            </td>

                            <td>
                                <span class="badge bg-soft-secondary text-secondary">Low</span>
                            </td>

                            <td>
                                <span class="badge badge-success">Open</span>
                            </td>

                            <td>
                                2017/04/28
                            </td>

                            <td>
                                2017/04/28
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><b>#2542</b></td>
                            <td>
                                <a href="javascript: void(0);" class="text-body">
                                    <img src="{{asset('assets/images/users/user-3.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                    <span class="ml-2">Jose D. Delacruz</span>
                                </a>
                            </td>

                            <td>
                                New submission on your website
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="{{asset('assets/images/users/user-9.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                </a>
                            </td>

                            <td>
                                <span class="badge bg-soft-warning text-warning">Medium</span>
                            </td>

                            <td>
                                <span class="badge badge-secondary">Closed</span>
                            </td>

                            <td>
                                2008/04/25
                            </td>

                            <td>
                                2008/04/25
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><b>#320</b></td>
                            <td>
                                <a href="javascript: void(0);" class="text-body">
                                    <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                    <span class="ml-2">Phyllis K. Maciel</span>
                                </a>
                            </td>

                            <td>
                                Verify your new email address!
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="{{asset('assets/images/users/user-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                </a>
                            </td>

                            <td>
                                <span class="badge bg-soft-danger text-danger">High</span>
                            </td>

                            <td>
                                <span class="badge badge-success">Open</span>
                            </td>

                            <td>
                                2017/04/20
                            </td>

                            <td>
                                2017/04/25
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><b>#1254</b></td>
                            <td>
                                <a href="javascript: void(0);" class="text-body">
                                    <img src="{{asset('assets/images/users/user-8.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                    <span class="ml-2">Margeret V. Ligon</span>
                                </a>
                            </td>

                            <td>
                                Your application has been received!
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="{{asset('assets/images/users/user-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                </a>
                            </td>

                            <td>
                                <span class="badge bg-soft-danger text-danger">High</span>
                            </td>

                            <td>
                                <span class="badge badge-secondary">Closed</span>
                            </td>

                            <td>
                                01/04/2017
                            </td>

                            <td>
                                21/05/2017
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><b>#1020</b></td>
                            <td>
                                <a href="javascript: void(0);" class="text-body">
                                    <img src="{{asset('assets/images/users/user-9.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                    <span class="ml-2">Erwin E. Brown</span>
                                </a>
                            </td>

                            <td>
                                A new rating has been received
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                </a>
                            </td>

                            <td>
                                <span class="badge bg-soft-warning text-warning">Medium</span>
                            </td>

                            <td>
                                <span class="badge badge-secondary">Closed</span>
                            </td>

                            <td>
                                2013/08/11
                            </td>

                            <td>
                                2013/08/30
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><b>#854</b></td>
                            <td>
                                <a href="javascript: void(0);" class="text-body">
                                    <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                    <span class="ml-2">William L. Trent</span>
                                </a>
                            </td>

                            <td>
                                Your Profile has been accepted
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="{{asset('assets/images/users/user-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                </a>
                            </td>

                            <td>
                                <span class="badge bg-soft-danger text-danger">High</span>
                            </td>

                            <td>
                                <span class="badge badge-success">Open</span>
                            </td>

                            <td>
                                01/04/2017
                            </td>

                            <td>
                                21/05/2017
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><b>#9501</b></td>
                            <td>
                                <a href="javascript: void(0);" class="text-body">
                                    <img src="{{asset('assets/images/users/user-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                    <span class="ml-2">Amy R. Barnaby</span>
                                </a>
                            </td>

                            <td>
                                Homeworth for your property increased
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="{{asset('assets/images/users/user-3.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                </a>
                            </td>

                            <td>
                                <span class="badge bg-soft-secondary text-secondary">Low</span>
                            </td>

                            <td>
                                <span class="badge badge-success">Open</span>
                            </td>

                            <td>
                                01/04/2017
                            </td>

                            <td>
                                21/05/2017
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><b>#3652</b></td>
                            <td>
                                <a href="javascript: void(0);" class="text-body">
                                    <img src="{{asset('assets/images/users/user-3.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                    <span class="ml-2">Jessica T. Phillips</span>
                                </a>
                            </td>

                            <td>
                                Item Support Message sent
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="{{asset('assets/images/users/user-9.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                </a>
                            </td>

                            <td>
                                <span class="badge bg-soft-warning text-warning">Medium</span>
                            </td>

                            <td>
                                <span class="badge badge-secondary">Closed</span>
                            </td>

                            <td>
                                01/04/2017
                            </td>

                            <td>
                                21/05/2017
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><b>#9852</b></td>
                            <td>
                                <a href="javascript: void(0);" class="text-body">
                                    <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                    <span class="ml-2">Debra J. Wilson</span>
                                </a>
                            </td>

                            <td>
                                Your item has been updated!
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="{{asset('assets/images/users/user-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                </a>
                            </td>

                            <td>
                                <span class="badge bg-soft-danger text-danger">High</span>
                            </td>

                            <td>
                                <span class="badge badge-success">Open</span>
                            </td>

                            <td>
                                01/04/2017
                            </td>

                            <td>
                                21/05/2017
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><b>#3652</b></td>
                            <td>
                                <a href="javascript: void(0);" class="text-body">
                                    <img src="{{asset('assets/images/users/user-4.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                    <span class="ml-2">Luke J. Sain</span>
                                </a>
                            </td>

                            <td>
                                Your password has been reset
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="{{asset('assets/images/users/user-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                </a>
                            </td>

                            <td>
                                <span class="badge bg-soft-secondary text-secondary">Low</span>
                            </td>

                            <td>
                                <span class="badge badge-success">Open</span>
                            </td>

                            <td>
                                01/04/2017
                            </td>

                            <td>
                                21/05/2017
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><b>#1352</b></td>
                            <td>
                                <a href="javascript: void(0);" class="text-body">
                                    <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                    <span class="ml-2">Karen R. Doyle</span>
                                </a>
                            </td>

                            <td>
                                Question regarding your Bootstrap Theme
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="{{asset('assets/images/users/user-8.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                </a>
                            </td>

                            <td>
                                <span class="badge bg-soft-danger text-danger">High</span>
                            </td>

                            <td>
                                <span class="badge badge-success">Open</span>
                            </td>

                            <td>
                                01/04/2017
                            </td>

                            <td>
                                21/05/2017
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><b>#3562</b></td>
                            <td>
                                <a href="javascript: void(0);" class="text-body">
                                    <img src="{{asset('assets/images/users/user-8.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                    <span class="ml-2">Freddie J. Plourde</span>
                                </a>
                            </td>

                            <td>
                                Security alert for my account
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                </a>
                            </td>

                            <td>
                                <span class="badge bg-soft-secondary text-secondary">Low</span>
                            </td>

                            <td>
                                <span class="badge badge-success">Open</span>
                            </td>

                            <td>
                                01/04/2017
                            </td>

                            <td>
                                21/05/2017
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><b>#3658</b></td>
                            <td>
                                <a href="javascript: void(0);" class="text-body">
                                    <img src="{{asset('assets/images/users/user-9.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                    <span class="ml-2">Darrell J. Cook</span>
                                </a>
                            </td>

                            <td>
                                Christopher S. Ahmad
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="{{asset('assets/images/users/user-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                </a>
                            </td>

                            <td>
                                <span class="badge bg-soft-warning text-warning">Medium</span>
                            </td>

                            <td>
                                <span class="badge badge-secondary">Closed</span>
                            </td>

                            <td>
                                01/04/2017
                            </td>

                            <td>
                                21/05/2017
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><b>#2251</b></td>
                            <td>
                                <a href="javascript: void(0);" class="text-body">
                                    <img src="{{asset('assets/images/users/user-8.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                    <span class="ml-2">Mark C. Diaz</span>
                                </a>
                            </td>

                            <td>
                                Verify your new email address!
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="{{asset('assets/images/users/user-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                </a>
                            </td>

                            <td>
                                <span class="badge bg-soft-danger text-danger">High</span>
                            </td>

                            <td>
                                <span class="badge badge-success">Open</span>
                            </td>

                            <td>
                                01/04/2017
                            </td>

                            <td>
                                21/05/2017
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td><b>#3654</b></td>
                            <td>
                                <a href="javascript: void(0);" class="text-body">
                                    <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                    <span class="ml-2">Robert K. Joseph</span>
                                </a>
                            </td>

                            <td>
                                Support for theme
                            </td>

                            <td>
                                <a href="javascript: void(0);">
                                    <img src="{{asset('assets/images/users/user-10.jpg')}}" alt="contact-img" title="contact-img" class="rounded-circle avatar-xs" />
                                </a>
                            </td>

                            <td>
                                <span class="badge bg-soft-secondary text-secondary">Low</span>
                            </td>

                            <td>
                                <span class="badge badge-success">Open</span>
                            </td>

                            <td>
                                01/04/2017
                            </td>

                            <td>
                                21/05/2017
                            </td>

                            <td>
                                <div class="btn-group dropdown">
                                    <a href="javascript: void(0);" class="table-action-btn dropdown-toggle arrow-none btn btn-light btn-sm" data-toggle="dropdown" aria-expanded="false"><i class="mdi mdi-dots-horizontal"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-pencil mr-2 text-muted font-18 vertical-middle"></i>Edit Ticket</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-check-all mr-2 text-muted font-18 vertical-middle"></i>Close</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-delete mr-2 text-muted font-18 vertical-middle"></i>Remove</a>
                                        <a class="dropdown-item" href="#"><i class="mdi mdi-star mr-2 font-18 text-muted vertical-middle"></i>Mark as Unread</a>
                                    </div>
                                </div>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div><!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/datatables/datatables.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/tickets.js')}}"></script>
@endsection