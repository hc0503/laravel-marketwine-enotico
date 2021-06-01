@extends('layouts.vertical', ['title' => 'FooTable'])

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Foo</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Foo Tables</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title">Filtering</h4>
                    <p class="sub-header">
                        include filtering in your FooTable.
                    </p>

                    <div class="mb-2">
                        <div class="row">
                            <div class="col-12 text-sm-center form-inline">
                                <div class="form-group mr-2">
                                    <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                        <option value="">Show all</option>
                                        <option value="active">Active</option>
                                        <option value="disabled">Disabled</option>
                                        <option value="suspended">Suspended</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="table-responsive">
                        <table id="demo-foo-filtering" class="table table-bordered toggle-circle mb-0" data-page-size="7">
                            <thead>
                            <tr>
                                <th data-toggle="true">First Name</th>
                                <th>Last Name</th>
                                <th data-hide="phone">Job Title</th>
                                <th data-hide="phone, tablet">DOB</th>
                                <th data-hide="phone, tablet">Status</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Isidra</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>22 Jun 1972</td>
                                <td><span class="badge label-table badge-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Shona</td>
                                <td>Woldt</td>
                                <td>Airline Transport Pilot</td>
                                <td>3 Oct 1981</td>
                                <td><span class="badge label-table badge-secondary">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Granville</td>
                                <td>Leonardo</td>
                                <td>Business Services Sales Representative</td>
                                <td>19 Apr 1969</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Easer</td>
                                <td>Dragoo</td>
                                <td>Drywall Stripper</td>
                                <td>13 Dec 1977</td>
                                <td><span class="badge label-table badge-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Maple</td>
                                <td>Halladay</td>
                                <td>Aviation Tactical Readiness Officer</td>
                                <td>30 Dec 1991</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Maxine</td>
                                <td><a href="#">Woldt</a></td>
                                <td><a href="#">Business Services Sales Representative</a></td>
                                <td>17 Oct 1987</td>
                                <td><span class="badge label-table badge-secondary">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Lorraine</td>
                                <td>Mcgaughy</td>
                                <td>Hemodialysis Technician</td>
                                <td>11 Nov 1983</td>
                                <td><span class="badge label-table badge-secondary">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Lizzee</td>
                                <td><a href="#">Goodlow</a></td>
                                <td>Technical Services Librarian</td>
                                <td>1 Nov 1961</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Judi</td>
                                <td>Badgett</td>
                                <td>Electrical Lineworker</td>
                                <td>23 Jun 1981</td>
                                <td><span class="badge label-table badge-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Lauri</td>
                                <td>Hyland</td>
                                <td>Blackjack Supervisor</td>
                                <td>15 Nov 1985</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Isidra</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>22 Jun 1972</td>
                                <td><span class="badge label-table badge-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Shona</td>
                                <td>Woldt</td>
                                <td>Airline Transport Pilot</td>
                                <td>3 Oct 1981</td>
                                <td><span class="badge label-table badge-secondary">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Granville</td>
                                <td>Leonardo</td>
                                <td>Business Services Sales Representative</td>
                                <td>19 Apr 1969</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Easer</td>
                                <td>Dragoo</td>
                                <td>Drywall Stripper</td>
                                <td>13 Dec 1977</td>
                                <td><span class="badge label-table badge-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Maple</td>
                                <td>Halladay</td>
                                <td>Aviation Tactical Readiness Officer</td>
                                <td>30 Dec 1991</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Maxine</td>
                                <td><a href="#">Woldt</a></td>
                                <td><a href="#">Business Services Sales Representative</a></td>
                                <td>17 Oct 1987</td>
                                <td><span class="badge label-table badge-secondary">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Lorraine</td>
                                <td>Mcgaughy</td>
                                <td>Hemodialysis Technician</td>
                                <td>11 Nov 1983</td>
                                <td><span class="badge label-table badge-secondary">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Lizzee</td>
                                <td><a href="#">Goodlow</a></td>
                                <td>Technical Services Librarian</td>
                                <td>1 Nov 1961</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Judi</td>
                                <td>Badgett</td>
                                <td>Electrical Lineworker</td>
                                <td>23 Jun 1981</td>
                                <td><span class="badge label-table badge-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Lauri</td>
                                <td>Hyland</td>
                                <td>Blackjack Supervisor</td>
                                <td>15 Nov 1985</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Isidra</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>22 Jun 1972</td>
                                <td><span class="badge label-table badge-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Shona</td>
                                <td>Woldt</td>
                                <td>Airline Transport Pilot</td>
                                <td>3 Oct 1981</td>
                                <td><span class="badge label-table badge-secondary">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Granville</td>
                                <td>Leonardo</td>
                                <td>Business Services Sales Representative</td>
                                <td>19 Apr 1969</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Easer</td>
                                <td>Dragoo</td>
                                <td>Drywall Stripper</td>
                                <td>13 Dec 1977</td>
                                <td><span class="badge label-table badge-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Maple</td>
                                <td>Halladay</td>
                                <td>Aviation Tactical Readiness Officer</td>
                                <td>30 Dec 1991</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Maxine</td>
                                <td><a href="#">Woldt</a></td>
                                <td><a href="#">Business Services Sales Representative</a></td>
                                <td>17 Oct 1987</td>
                                <td><span class="badge label-table badge-secondary">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Lorraine</td>
                                <td>Mcgaughy</td>
                                <td>Hemodialysis Technician</td>
                                <td>11 Nov 1983</td>
                                <td><span class="badge label-table badge-secondary">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Lizzee</td>
                                <td><a href="#">Goodlow</a></td>
                                <td>Technical Services Librarian</td>
                                <td>1 Nov 1961</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Judi</td>
                                <td>Badgett</td>
                                <td>Electrical Lineworker</td>
                                <td>23 Jun 1981</td>
                                <td><span class="badge label-table badge-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Lauri</td>
                                <td>Hyland</td>
                                <td>Blackjack Supervisor</td>
                                <td>15 Nov 1985</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr class="active">
                                <td colspan="5">
                                    <div class="text-right">
                                        <ul class="pagination pagination-rounded justify-content-end footable-pagination m-t-10 mb-0"></ul>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div> <!-- end .table-responsive-->
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title">Add &amp; Remove Rows</h4>
                    <p class="sub-header">
                        Add or remove rows from your FooTable.
                    </p>

                    <div class="mb-2">
                        <div class="row">
                            <div class="col-12 text-sm-center form-inline">
                                <div class="form-group mr-2">
                                    <button id="demo-btn-addrow" class="btn btn-primary"><i class="mdi mdi-plus-circle mr-2"></i> Add New Row</button>
                                </div>
                                <div class="form-group">
                                    <input id="demo-input-search2" type="text" placeholder="Search" class="form-control" autocomplete="off">
                                </div>
                            </div>
                        </div>
                    </div>

                    <table id="demo-foo-addrow" class="table table-centered table-striped table-bordered mb-0 toggle-circle" data-page-size="7">
                        <thead>
                        <tr>
                            <th data-sort-ignore="true" class="min-width"></th>
                            <th data-sort-initial="true" data-toggle="true">First Name</th>
                            <th>Last Name</th>
                            <th data-hide="phone">Job Title</th>
                            <th data-hide="phone, tablet">DOB</th>
                            <th data-hide="phone, tablet">Status</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                            <td>Isidra</td>
                            <td>Boudreaux</td>
                            <td>Traffic Court Referee</td>
                            <td>22 Jun 1972</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                            <td>Shona</td>
                            <td>Woldt</td>
                            <td>Airline Transport Pilot</td>
                            <td>3 Oct 1981</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                            <td>Granville</td>
                            <td>Leonardo</td>
                            <td>Business Services Sales Representative</td>
                            <td>19 Apr 1969</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                            <td>Easer</td>
                            <td>Dragoo</td>
                            <td>Drywall Stripper</td>
                            <td>13 Dec 1977</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                            <td>Maple</td>
                            <td>Halladay</td>
                            <td>Aviation Tactical Readiness Officer</td>
                            <td>30 Dec 1991</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                            <td>Maxine</td>
                            <td><a href="#">Woldt</a></td>
                            <td><a href="#">Business Services Sales Representative</a></td>
                            <td>17 Oct 1987</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                            <td>Lorraine</td>
                            <td>Mcgaughy</td>
                            <td>Hemodialysis Technician</td>
                            <td>11 Nov 1983</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                            <td>Lizzee</td>
                            <td><a href="#">Goodlow</a></td>
                            <td>Technical Services Librarian</td>
                            <td>1 Nov 1961</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                            <td>Judi</td>
                            <td>Badgett</td>
                            <td>Electrical Lineworker</td>
                            <td>23 Jun 1981</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td class="text-center"><button class="demo-delete-row btn btn-danger btn-xs btn-icon"><i class="fa fa-times"></i></button></td>
                            <td>Lauri</td>
                            <td>Hyland</td>
                            <td>Blackjack Supervisor</td>
                            <td>15 Nov 1985</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        </tbody>
                        <tfoot>
                        <tr class="active">
                            <td colspan="6">
                                <div class="text-right">
                                    <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10"></ul>
                                </div>
                            </td>
                        </tr>
                        </tfoot>
                    </table>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title">Triggers</h4>
                    <p class="sub-header">
                        Trigger certain FooTable actions.
                    </p>
                    <table id="demo-foo-row-toggler" class="table table-bordered toggle-circle mb-0">
                        <thead>
                        <tr>
                            <th data-toggle="true"> First Name </th>
                            <th> Last Name </th>
                            <th data-hide="phone"> Job Title </th>
                            <th data-hide="all"> DOB </th>
                            <th data-hide="all"> Status </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Isidra</td>
                            <td>Boudreaux</td>
                            <td>Traffic Court Referee</td>
                            <td>22 Jun 1972</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Shona</td>
                            <td>Woldt</td>
                            <td>Airline Transport Pilot</td>
                            <td>3 Oct 1981</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Granville</td>
                            <td>Leonardo</td>
                            <td>Business Services Sales Representative</td>
                            <td>19 Apr 1969</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Easer</td>
                            <td>Dragoo</td>
                            <td>Drywall Stripper</td>
                            <td>13 Dec 1977</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Maple</td>
                            <td>Halladay</td>
                            <td>Aviation Tactical Readiness Officer</td>
                            <td>30 Dec 1991</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Maxine</td>
                            <td><a href="#">Woldt</a></td>
                            <td><a href="#">Business Services Sales Representative</a></td>
                            <td>17 Oct 1987</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Lorraine</td>
                            <td>Mcgaughy</td>
                            <td>Hemodialysis Technician</td>
                            <td>11 Nov 1983</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Lizzee</td>
                            <td><a href="#">Goodlow</a></td>
                            <td>Technical Services Librarian</td>
                            <td>1 Nov 1961</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Judi</td>
                            <td>Badgett</td>
                            <td>Electrical Lineworker</td>
                            <td>23 Jun 1981</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Lauri</td>
                            <td>Hyland</td>
                            <td>Blackjack Supervisor</td>
                            <td>15 Nov 1985</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Isidra</td>
                            <td>Boudreaux</td>
                            <td>Traffic Court Referee</td>
                            <td>22 Jun 1972</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Shona</td>
                            <td>Woldt</td>
                            <td>Airline Transport Pilot</td>
                            <td>3 Oct 1981</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Granville</td>
                            <td>Leonardo</td>
                            <td>Business Services Sales Representative</td>
                            <td>19 Apr 1969</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Easer</td>
                            <td>Dragoo</td>
                            <td>Drywall Stripper</td>
                            <td>13 Dec 1977</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Maple</td>
                            <td>Halladay</td>
                            <td>Aviation Tactical Readiness Officer</td>
                            <td>30 Dec 1991</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Maxine</td>
                            <td><a href="#">Woldt</a></td>
                            <td><a href="#">Business Services Sales Representative</a></td>
                            <td>17 Oct 1987</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Lorraine</td>
                            <td>Mcgaughy</td>
                            <td>Hemodialysis Technician</td>
                            <td>11 Nov 1983</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Lizzee</td>
                            <td><a href="#">Goodlow</a></td>
                            <td>Technical Services Librarian</td>
                            <td>1 Nov 1961</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Judi</td>
                            <td>Badgett</td>
                            <td>Electrical Lineworker</td>
                            <td>23 Jun 1981</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Lauri</td>
                            <td>Hyland</td>
                            <td>Blackjack Supervisor</td>
                            <td>15 Nov 1985</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Isidra</td>
                            <td>Boudreaux</td>
                            <td>Traffic Court Referee</td>
                            <td>22 Jun 1972</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Shona</td>
                            <td>Woldt</td>
                            <td>Airline Transport Pilot</td>
                            <td>3 Oct 1981</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Granville</td>
                            <td>Leonardo</td>
                            <td>Business Services Sales Representative</td>
                            <td>19 Apr 1969</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Easer</td>
                            <td>Dragoo</td>
                            <td>Drywall Stripper</td>
                            <td>13 Dec 1977</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Maple</td>
                            <td>Halladay</td>
                            <td>Aviation Tactical Readiness Officer</td>
                            <td>30 Dec 1991</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Maxine</td>
                            <td><a href="#">Woldt</a></td>
                            <td><a href="#">Business Services Sales Representative</a></td>
                            <td>17 Oct 1987</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Lorraine</td>
                            <td>Mcgaughy</td>
                            <td>Hemodialysis Technician</td>
                            <td>11 Nov 1983</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Lizzee</td>
                            <td><a href="#">Goodlow</a></td>
                            <td>Technical Services Librarian</td>
                            <td>1 Nov 1961</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Judi</td>
                            <td>Badgett</td>
                            <td>Electrical Lineworker</td>
                            <td>23 Jun 1981</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Lauri</td>
                            <td>Hyland</td>
                            <td>Blackjack Supervisor</td>
                            <td>15 Nov 1985</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title">Pagination</h4>
                    <p class="sub-header">
                        Include pagination in your FooTable.
                    </p>

                    <label class="form-inline mb-3">
                        Show
                        <select id="demo-show-entries" class="form-control form-control-sm ml-1 mr-1">
                            <option value="5">5</option>
                            <option value="10">10</option>
                            <option value="15">15</option>
                            <option value="20">20</option>
                        </select>
                        entries
                    </label>
                    
                    <div class="table-responsive">
                        <table id="demo-foo-pagination" class="table mb-0 table-bordered toggle-arrow-tiny" data-page-size="5">
                            <thead>
                            <tr>
                                <th data-toggle="true"> First Name </th>
                                <th> Last Name </th>
                                <th data-hide="phone"> Job Title </th>
                                <th data-hide="all"> DOB </th>
                                <th data-hide="all"> Status </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Isidra</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>22 Jun 1972</td>
                                <td><span class="badge label-table badge-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Shona</td>
                                <td>Woldt</td>
                                <td>Airline Transport Pilot</td>
                                <td>3 Oct 1981</td>
                                <td><span class="badge label-table badge-secondary">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Granville</td>
                                <td>Leonardo</td>
                                <td>Business Services Sales Representative</td>
                                <td>19 Apr 1969</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Easer</td>
                                <td>Dragoo</td>
                                <td>Drywall Stripper</td>
                                <td>13 Dec 1977</td>
                                <td><span class="badge label-table badge-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Maple</td>
                                <td>Halladay</td>
                                <td>Aviation Tactical Readiness Officer</td>
                                <td>30 Dec 1991</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Maxine</td>
                                <td><a href="#">Woldt</a></td>
                                <td><a href="#">Business Services Sales Representative</a></td>
                                <td>17 Oct 1987</td>
                                <td><span class="badge label-table badge-secondary">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Lorraine</td>
                                <td>Mcgaughy</td>
                                <td>Hemodialysis Technician</td>
                                <td>11 Nov 1983</td>
                                <td><span class="badge label-table badge-secondary">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Lizzee</td>
                                <td><a href="#">Goodlow</a></td>
                                <td>Technical Services Librarian</td>
                                <td>1 Nov 1961</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Judi</td>
                                <td>Badgett</td>
                                <td>Electrical Lineworker</td>
                                <td>23 Jun 1981</td>
                                <td><span class="badge label-table badge-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Lauri</td>
                                <td>Hyland</td>
                                <td>Blackjack Supervisor</td>
                                <td>15 Nov 1985</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Isidra</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>22 Jun 1972</td>
                                <td><span class="badge label-table badge-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Shona</td>
                                <td>Woldt</td>
                                <td>Airline Transport Pilot</td>
                                <td>3 Oct 1981</td>
                                <td><span class="badge label-table badge-secondary">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Granville</td>
                                <td>Leonardo</td>
                                <td>Business Services Sales Representative</td>
                                <td>19 Apr 1969</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Easer</td>
                                <td>Dragoo</td>
                                <td>Drywall Stripper</td>
                                <td>13 Dec 1977</td>
                                <td><span class="badge label-table badge-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Maple</td>
                                <td>Halladay</td>
                                <td>Aviation Tactical Readiness Officer</td>
                                <td>30 Dec 1991</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Maxine</td>
                                <td><a href="#">Woldt</a></td>
                                <td><a href="#">Business Services Sales Representative</a></td>
                                <td>17 Oct 1987</td>
                                <td><span class="badge label-table badge-secondary">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Lorraine</td>
                                <td>Mcgaughy</td>
                                <td>Hemodialysis Technician</td>
                                <td>11 Nov 1983</td>
                                <td><span class="badge label-table badge-secondary">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Lizzee</td>
                                <td><a href="#">Goodlow</a></td>
                                <td>Technical Services Librarian</td>
                                <td>1 Nov 1961</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Judi</td>
                                <td>Badgett</td>
                                <td>Electrical Lineworker</td>
                                <td>23 Jun 1981</td>
                                <td><span class="badge label-table badge-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Lauri</td>
                                <td>Hyland</td>
                                <td>Blackjack Supervisor</td>
                                <td>15 Nov 1985</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Isidra</td>
                                <td>Boudreaux</td>
                                <td>Traffic Court Referee</td>
                                <td>22 Jun 1972</td>
                                <td><span class="badge label-table badge-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Shona</td>
                                <td>Woldt</td>
                                <td>Airline Transport Pilot</td>
                                <td>3 Oct 1981</td>
                                <td><span class="badge label-table badge-secondary">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Granville</td>
                                <td>Leonardo</td>
                                <td>Business Services Sales Representative</td>
                                <td>19 Apr 1969</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Easer</td>
                                <td>Dragoo</td>
                                <td>Drywall Stripper</td>
                                <td>13 Dec 1977</td>
                                <td><span class="badge label-table badge-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Maple</td>
                                <td>Halladay</td>
                                <td>Aviation Tactical Readiness Officer</td>
                                <td>30 Dec 1991</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Maxine</td>
                                <td><a href="#">Woldt</a></td>
                                <td><a href="#">Business Services Sales Representative</a></td>
                                <td>17 Oct 1987</td>
                                <td><span class="badge label-table badge-secondary">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Lorraine</td>
                                <td>Mcgaughy</td>
                                <td>Hemodialysis Technician</td>
                                <td>11 Nov 1983</td>
                                <td><span class="badge label-table badge-secondary">Disabled</span></td>
                            </tr>
                            <tr>
                                <td>Lizzee</td>
                                <td><a href="#">Goodlow</a></td>
                                <td>Technical Services Librarian</td>
                                <td>1 Nov 1961</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            <tr>
                                <td>Judi</td>
                                <td>Badgett</td>
                                <td>Electrical Lineworker</td>
                                <td>23 Jun 1981</td>
                                <td><span class="badge label-table badge-success">Active</span></td>
                            </tr>
                            <tr>
                                <td>Lauri</td>
                                <td>Hyland</td>
                                <td>Blackjack Supervisor</td>
                                <td>15 Nov 1985</td>
                                <td><span class="badge label-table badge-danger">Suspended</span></td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr class="active">
                                <td colspan="5">
                                    <div class="text-right">
                                        <ul class="pagination pagination-split justify-content-end footable-pagination m-t-10"></ul>
                                    </div>
                                </td>
                            </tr>
                            </tfoot>
                        </table>
                    </div> <!-- end .table-responsive-->
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title">Accordion</h4>
                    <p class="sub-header">
                        include accordion in your FooTable.
                    </p>

                    <table id="demo-foo-accordion" class="table table-colored mb-0 toggle-arrow-tiny">
                        <thead>
                        <tr>
                            <th data-toggle="true"> First Name </th>
                            <th> Last Name </th>
                            <th data-hide="phone"> Job Title </th>
                            <th data-hide="all"> DOB </th>
                            <th data-hide="all"> Status </th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Isidra</td>
                            <td>Boudreaux</td>
                            <td>Traffic Court Referee</td>
                            <td>22 Jun 1972</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Shona</td>
                            <td>Woldt</td>
                            <td>Airline Transport Pilot</td>
                            <td>3 Oct 1981</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Granville</td>
                            <td>Leonardo</td>
                            <td>Business Services Sales Representative</td>
                            <td>19 Apr 1969</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Easer</td>
                            <td>Dragoo</td>
                            <td>Drywall Stripper</td>
                            <td>13 Dec 1977</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Maple</td>
                            <td>Halladay</td>
                            <td>Aviation Tactical Readiness Officer</td>
                            <td>30 Dec 1991</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Maxine</td>
                            <td><a href="#">Woldt</a></td>
                            <td><a href="#">Business Services Sales Representative</a></td>
                            <td>17 Oct 1987</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Lorraine</td>
                            <td>Mcgaughy</td>
                            <td>Hemodialysis Technician</td>
                            <td>11 Nov 1983</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Lizzee</td>
                            <td><a href="#">Goodlow</a></td>
                            <td>Technical Services Librarian</td>
                            <td>1 Nov 1961</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Judi</td>
                            <td>Badgett</td>
                            <td>Electrical Lineworker</td>
                            <td>23 Jun 1981</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Lauri</td>
                            <td>Hyland</td>
                            <td>Blackjack Supervisor</td>
                            <td>15 Nov 1985</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Isidra</td>
                            <td>Boudreaux</td>
                            <td>Traffic Court Referee</td>
                            <td>22 Jun 1972</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Shona</td>
                            <td>Woldt</td>
                            <td>Airline Transport Pilot</td>
                            <td>3 Oct 1981</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Granville</td>
                            <td>Leonardo</td>
                            <td>Business Services Sales Representative</td>
                            <td>19 Apr 1969</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Easer</td>
                            <td>Dragoo</td>
                            <td>Drywall Stripper</td>
                            <td>13 Dec 1977</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Maple</td>
                            <td>Halladay</td>
                            <td>Aviation Tactical Readiness Officer</td>
                            <td>30 Dec 1991</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Maxine</td>
                            <td><a href="#">Woldt</a></td>
                            <td><a href="#">Business Services Sales Representative</a></td>
                            <td>17 Oct 1987</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Lorraine</td>
                            <td>Mcgaughy</td>
                            <td>Hemodialysis Technician</td>
                            <td>11 Nov 1983</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Lizzee</td>
                            <td><a href="#">Goodlow</a></td>
                            <td>Technical Services Librarian</td>
                            <td>1 Nov 1961</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Judi</td>
                            <td>Badgett</td>
                            <td>Electrical Lineworker</td>
                            <td>23 Jun 1981</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Lauri</td>
                            <td>Hyland</td>
                            <td>Blackjack Supervisor</td>
                            <td>15 Nov 1985</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Isidra</td>
                            <td>Boudreaux</td>
                            <td>Traffic Court Referee</td>
                            <td>22 Jun 1972</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Shona</td>
                            <td>Woldt</td>
                            <td>Airline Transport Pilot</td>
                            <td>3 Oct 1981</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Granville</td>
                            <td>Leonardo</td>
                            <td>Business Services Sales Representative</td>
                            <td>19 Apr 1969</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Easer</td>
                            <td>Dragoo</td>
                            <td>Drywall Stripper</td>
                            <td>13 Dec 1977</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Maple</td>
                            <td>Halladay</td>
                            <td>Aviation Tactical Readiness Officer</td>
                            <td>30 Dec 1991</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Maxine</td>
                            <td><a href="#">Woldt</a></td>
                            <td><a href="#">Business Services Sales Representative</a></td>
                            <td>17 Oct 1987</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Lorraine</td>
                            <td>Mcgaughy</td>
                            <td>Hemodialysis Technician</td>
                            <td>11 Nov 1983</td>
                            <td><span class="badge label-table badge-secondary">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Lizzee</td>
                            <td><a href="#">Goodlow</a></td>
                            <td>Technical Services Librarian</td>
                            <td>1 Nov 1961</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Judi</td>
                            <td>Badgett</td>
                            <td>Electrical Lineworker</td>
                            <td>23 Jun 1981</td>
                            <td><span class="badge label-table badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Lauri</td>
                            <td>Hyland</td>
                            <td>Blackjack Supervisor</td>
                            <td>15 Nov 1985</td>
                            <td><span class="badge label-table badge-danger">Suspended</span></td>
                        </tr>
                        </tbody>

                    </table>
                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/footable/footable.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/foo-tables.init.js')}}"></script>
@endsection