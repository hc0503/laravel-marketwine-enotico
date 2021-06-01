
@extends('layouts.vertical', ['title' => 'CRM Contacts'])

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
                            <li class="breadcrumb-item active">Contacts</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Contacts</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 


        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <form class="form-inline">
                                    <div class="form-group mb-2">
                                        <label for="inputPassword2" class="sr-only">Search</label>
                                        <input type="search" class="form-control" id="inputPassword2" placeholder="Search...">
                                    </div>
                                </form>
                            </div>
                            <div class="col-sm-8">
                                <div class="text-sm-right">
                                    <button type="button" class="btn btn-success waves-effect waves-light mb-2 mr-1"><i class="mdi mdi-cog"></i></button>
                                    <button type="button" class="btn btn-danger waves-effect waves-light mb-2" data-toggle="modal" data-target="#custom-modal">Add Contact</button>
                                </div>
                            </div><!-- end col-->
                        </div>

                        <div class="table-responsive">
                            <table class="table table-centered table-nowrap table-hover mb-0">
                                <thead>
                                    <tr>
                                        <th>Basic Info</th>
                                        <th>Phone</th>
                                        <th>Email</th>
                                        <th>Company</th>
                                        <th>Created Date</th>
                                        <th style="width: 82px;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-4.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Paul J. Friend</a>
                                        </td>
                                        <td>
                                            937-330-1634
                                        </td>
                                        <td>
                                            pauljfrnd@jourrapide.com
                                        </td>
                                        <td>
                                            Vine Corporation
                                        </td>
                                        <td>
                                            07/07/2018
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    
                                    <tr>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-3.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Bryan J. Luellen</a>
                                        </td>
                                        <td>
                                            215-302-3376
                                        </td>
                                        <td>
                                            bryuellen@dayrep.com
                                        </td>
                                        <td>
                                            Blue Motors
                                        </td>
                                        <td>
                                            09/12/2018
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-3.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Kathryn S. Collier</a>
                                        </td>
                                        <td>
                                            828-216-2190
                                        </td>
                                        <td>
                                            collier@jourrapide.com
                                        </td>
                                        <td>
                                            Arcanetworks
                                        </td>
                                        <td>
                                            06/30/2018
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-1.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Timothy Kauper</a>
                                        </td>
                                        <td>
                                            (216) 75 612 706
                                        </td>
                                        <td>
                                            thykauper@rhyta.com
                                        </td>
                                        <td>
                                            Boar Records
                                        </td>
                                        <td>
                                            09/08/2018
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Zara Raws</a>
                                        </td>
                                        <td>
                                            (02) 75 150 655
                                        </td>
                                        <td>
                                            austin@dayrep.com
                                        </td>
                                        <td>
                                            Bearings
                                        </td>
                                        <td>
                                            07/15/2018
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-6.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Annette P. Kelsch</a>
                                        </td>
                                        <td>
                                            (+15) 73 483 758
                                        </td>
                                        <td>
                                            annette@email.net
                                        </td>
                                        <td>
                                            Shadowshine
                                        </td>
                                        <td>
                                            09/05/2018
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-7.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Jenny C. Gero</a>
                                        </td>
                                        <td>
                                            078 7173 9261
                                        </td>
                                        <td>
                                            jennygero@teleworm.us
                                        </td>
                                        <td>
                                            Crowares
                                        </td>
                                        <td>
                                            08/02/2018
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-8.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Edward Roseby</a>
                                        </td>
                                        <td>
                                            078 6013 3854
                                        </td>
                                        <td>
                                            edwardR@armyspy.com
                                        </td>
                                        <td>
                                            Orangations
                                        </td>
                                        <td>
                                            08/23/2018
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-9.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Anna Ciantar</a>
                                        </td>
                                        <td>
                                            (216) 76 298 896
                                        </td>
                                        <td>
                                            annac@hotmai.us
                                        </td>
                                        <td>
                                            Surprise Brews
                                        </td>
                                        <td>
                                            05/06/2018
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td class="table-user">
                                            <img src="{{asset('assets/images/users/user-10.jpg')}}" alt="table-user" class="mr-2 rounded-circle">
                                            <a href="javascript:void(0);" class="text-body font-weight-semibold">Dean Smithies</a>
                                        </td>
                                        <td>
                                            077 6157 4248
                                        </td>
                                        <td>
                                            deanes@dayrep.com
                                        </td>
                                        <td>
                                            Apexlife
                                        </td>
                                        <td>
                                            04/09/2018
                                        </td>
                                        <td>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-square-edit-outline"></i></a>
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <ul class="pagination pagination-rounded justify-content-end mb-0 mt-2">
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

            <div class="col-lg-4">
                <div class="card-box">
                    <div class="media mb-3">
                        <img class="d-flex mr-3 rounded-circle avatar-lg" src="{{asset('assets/images/users/user-8.jpg')}}" alt="Generic placeholder image">
                        <div class="media-body">
                            <h4 class="mt-0 mb-1">Jade M. Walker</h4>
                            <p class="text-muted">Branch manager</p>
                            <p class="text-muted"><i class="mdi mdi-office-building"></i> Vine Corporation</p>

                            <a href="javascript: void(0);" class="btn- btn-xs btn-info">Send Email</a>
                            <a href="javascript: void(0);" class="btn- btn-xs btn-secondary">Call</a>
                            <a href="javascript: void(0);" class="btn- btn-xs btn-secondary">Edit</a>
                        </div>
                    </div>

                    <h5 class="mb-3 mt-4 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Personal Information</h5>
                    <div class="">
                        <h4 class="font-13 text-muted text-uppercase">About Me :</h4>
                        <p class="mb-3">
                            Hi I'm Johnathn Deo,has been the industry's standard dummy text ever since the
                            1500s, when an unknown printer took a galley of type.
                        </p>

                        <h4 class="font-13 text-muted text-uppercase mb-1">Date of Birth :</h4>
                        <p class="mb-3"> March 23, 1984 (34 Years)</p>

                        <h4 class="font-13 text-muted text-uppercase mb-1">Company :</h4>
                        <p class="mb-3">Vine Corporation</p>

                        <h4 class="font-13 text-muted text-uppercase mb-1">Added :</h4>
                        <p class="mb-3"> April 22, 2016</p>

                        <h4 class="font-13 text-muted text-uppercase mb-1">Updated :</h4>
                        <p class="mb-0"> Dec 13, 2017</p>

                    </div>

                </div> <!-- end card-box-->
            </div>
        </div>
        <!-- end row -->
        
    </div> <!-- container -->

    
    <!-- Modal -->
    <div class="modal fade" id="custom-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-light">
                    <h4 class="modal-title" id="myCenterModalLabel">Add Contacts</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body p-4">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter name">
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
                            <label for="company">Location</label>
                            <input type="text" class="form-control" id="company" placeholder="Enter location">
                        </div>
    
                        <div class="text-right">
                            <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                            <button type="button" class="btn btn-danger waves-effect waves-light m-l-10" >Cancel</button>
                        </div>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
@endsection

