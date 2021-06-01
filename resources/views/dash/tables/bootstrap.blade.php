@extends('layouts.vertical', ['title' => 'Bootstrap Tables'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/bootstrap-table/bootstrap-table.min.css')}}" rel="stylesheet" type="text/css" />

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                            <li class="breadcrumb-item active">Bootstrap</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Bootstrap Tables</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title">Basic Columns</h4>
                    <p class="sub-header">
                        Example of basic columns.
                    </p>

                    <table data-toggle="table"
                            data-show-columns="false"
                            data-page-list="[5, 10, 20]"
                            data-page-size="5"
                            data-buttons-class="xs btn-light"
                            data-pagination="true" class="table-borderless">
                        <thead class="thead-light">
                        <tr>
                            <th data-field="id" data-switchable="false">First Name</th>
                            <th data-field="name">Last Name</th>
                            <th data-field="date">Job Title</th>
                            <th data-field="amount">DOB</th>
                            <th data-field="user-status">Status</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>Isidra</td>
                            <td>Boudreaux</td>
                            <td>Traffic Court Referee</td>
                            <td>22 Jun 1972</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Shona</td>
                            <td>Woldt</td>
                            <td>Airline Transport Pilot</td>
                            <td>3 Oct 1981</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Granville</td>
                            <td>Leonardo</td>
                            <td>Business Services Sales Representative</td>
                            <td>19 Apr 1969</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Easer</td>
                            <td>Dragoo</td>
                            <td>Drywall Stripper</td>
                            <td>13 Dec 1977</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Maple</td>
                            <td>Halladay</td>
                            <td>Aviation Tactical Readiness Officer</td>
                            <td>30 Dec 1991</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Maxine</td>
                            <td><a href="#">Woldt</a></td>
                            <td><a href="#">Business Services Sales Representative</a></td>
                            <td>17 Oct 1987</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Lorraine</td>
                            <td>Mcgaughy</td>
                            <td>Hemodialysis Technician</td>
                            <td>11 Nov 1983</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Lizzee</td>
                            <td><a href="#">Goodlow</a></td>
                            <td>Technical Services Librarian</td>
                            <td>1 Nov 1961</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Judi</td>
                            <td>Badgett</td>
                            <td>Electrical Lineworker</td>
                            <td>23 Jun 1981</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Lauri</td>
                            <td>Hyland</td>
                            <td>Blackjack Supervisor</td>
                            <td>15 Nov 1985</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Isidra</td>
                            <td>Boudreaux</td>
                            <td>Traffic Court Referee</td>
                            <td>22 Jun 1972</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Shona</td>
                            <td>Woldt</td>
                            <td>Airline Transport Pilot</td>
                            <td>3 Oct 1981</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Granville</td>
                            <td>Leonardo</td>
                            <td>Business Services Sales Representative</td>
                            <td>19 Apr 1969</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Easer</td>
                            <td>Dragoo</td>
                            <td>Drywall Stripper</td>
                            <td>13 Dec 1977</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Maple</td>
                            <td>Halladay</td>
                            <td>Aviation Tactical Readiness Officer</td>
                            <td>30 Dec 1991</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Maxine</td>
                            <td><a href="#">Woldt</a></td>
                            <td><a href="#">Business Services Sales Representative</a></td>
                            <td>17 Oct 1987</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Lorraine</td>
                            <td>Mcgaughy</td>
                            <td>Hemodialysis Technician</td>
                            <td>11 Nov 1983</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Lizzee</td>
                            <td><a href="#">Goodlow</a></td>
                            <td>Technical Services Librarian</td>
                            <td>1 Nov 1961</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Judi</td>
                            <td>Badgett</td>
                            <td>Electrical Lineworker</td>
                            <td>23 Jun 1981</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Lauri</td>
                            <td>Hyland</td>
                            <td>Blackjack Supervisor</td>
                            <td>15 Nov 1985</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Isidra</td>
                            <td>Boudreaux</td>
                            <td>Traffic Court Referee</td>
                            <td>22 Jun 1972</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Shona</td>
                            <td>Woldt</td>
                            <td>Airline Transport Pilot</td>
                            <td>3 Oct 1981</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Granville</td>
                            <td>Leonardo</td>
                            <td>Business Services Sales Representative</td>
                            <td>19 Apr 1969</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Easer</td>
                            <td>Dragoo</td>
                            <td>Drywall Stripper</td>
                            <td>13 Dec 1977</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Maple</td>
                            <td>Halladay</td>
                            <td>Aviation Tactical Readiness Officer</td>
                            <td>30 Dec 1991</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Maxine</td>
                            <td><a href="#">Woldt</a></td>
                            <td><a href="#">Business Services Sales Representative</a></td>
                            <td>17 Oct 1987</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Lorraine</td>
                            <td>Mcgaughy</td>
                            <td>Hemodialysis Technician</td>
                            <td>11 Nov 1983</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td>Lizzee</td>
                            <td><a href="#">Goodlow</a></td>
                            <td>Technical Services Librarian</td>
                            <td>1 Nov 1961</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td>Judi</td>
                            <td>Badgett</td>
                            <td>Electrical Lineworker</td>
                            <td>23 Jun 1981</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td>Lauri</td>
                            <td>Hyland</td>
                            <td>Blackjack Supervisor</td>
                            <td>15 Nov 1985</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div> <!-- end card-box-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title">Checkbox Select</h4>
                    <p class="sub-header">
                        Example of checkbox select.
                    </p>

                    <table data-toggle="table"
                            data-page-size="5"
                            data-buttons-class="xs btn-light"
                            data-pagination="true" class="table-bordered ">
                        <thead class="thead-light">
                        <tr>
                            <th data-field="state" data-checkbox="true"></th>
                            <th data-field="id" data-switchable="false">First Name</th>
                            <th data-field="name">Last Name</th>
                            <th data-field="date">Job Title</th>
                            <th data-field="amount">DOB</th>
                            <th data-field="user-status">Status</th>
                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td></td>
                            <td>Isidra</td>
                            <td>Boudreaux</td>
                            <td>Traffic Court Referee</td>
                            <td>22 Jun 1972</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Shona</td>
                            <td>Woldt</td>
                            <td>Airline Transport Pilot</td>
                            <td>3 Oct 1981</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Granville</td>
                            <td>Leonardo</td>
                            <td>Business Services Sales Representative</td>
                            <td>19 Apr 1969</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Easer</td>
                            <td>Dragoo</td>
                            <td>Drywall Stripper</td>
                            <td>13 Dec 1977</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Maple</td>
                            <td>Halladay</td>
                            <td>Aviation Tactical Readiness Officer</td>
                            <td>30 Dec 1991</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Maxine</td>
                            <td><a href="#">Woldt</a></td>
                            <td><a href="#">Business Services Sales Representative</a></td>
                            <td>17 Oct 1987</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lorraine</td>
                            <td>Mcgaughy</td>
                            <td>Hemodialysis Technician</td>
                            <td>11 Nov 1983</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lizzee</td>
                            <td><a href="#">Goodlow</a></td>
                            <td>Technical Services Librarian</td>
                            <td>1 Nov 1961</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Judi</td>
                            <td>Badgett</td>
                            <td>Electrical Lineworker</td>
                            <td>23 Jun 1981</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lauri</td>
                            <td>Hyland</td>
                            <td>Blackjack Supervisor</td>
                            <td>15 Nov 1985</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Isidra</td>
                            <td>Boudreaux</td>
                            <td>Traffic Court Referee</td>
                            <td>22 Jun 1972</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Shona</td>
                            <td>Woldt</td>
                            <td>Airline Transport Pilot</td>
                            <td>3 Oct 1981</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Granville</td>
                            <td>Leonardo</td>
                            <td>Business Services Sales Representative</td>
                            <td>19 Apr 1969</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Easer</td>
                            <td>Dragoo</td>
                            <td>Drywall Stripper</td>
                            <td>13 Dec 1977</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Maple</td>
                            <td>Halladay</td>
                            <td>Aviation Tactical Readiness Officer</td>
                            <td>30 Dec 1991</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Maxine</td>
                            <td><a href="#">Woldt</a></td>
                            <td><a href="#">Business Services Sales Representative</a></td>
                            <td>17 Oct 1987</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lorraine</td>
                            <td>Mcgaughy</td>
                            <td>Hemodialysis Technician</td>
                            <td>11 Nov 1983</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lizzee</td>
                            <td><a href="#">Goodlow</a></td>
                            <td>Technical Services Librarian</td>
                            <td>1 Nov 1961</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Judi</td>
                            <td>Badgett</td>
                            <td>Electrical Lineworker</td>
                            <td>23 Jun 1981</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lauri</td>
                            <td>Hyland</td>
                            <td>Blackjack Supervisor</td>
                            <td>15 Nov 1985</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Isidra</td>
                            <td>Boudreaux</td>
                            <td>Traffic Court Referee</td>
                            <td>22 Jun 1972</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Shona</td>
                            <td>Woldt</td>
                            <td>Airline Transport Pilot</td>
                            <td>3 Oct 1981</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Granville</td>
                            <td>Leonardo</td>
                            <td>Business Services Sales Representative</td>
                            <td>19 Apr 1969</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Easer</td>
                            <td>Dragoo</td>
                            <td>Drywall Stripper</td>
                            <td>13 Dec 1977</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Maple</td>
                            <td>Halladay</td>
                            <td>Aviation Tactical Readiness Officer</td>
                            <td>30 Dec 1991</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Maxine</td>
                            <td><a href="#">Woldt</a></td>
                            <td><a href="#">Business Services Sales Representative</a></td>
                            <td>17 Oct 1987</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lorraine</td>
                            <td>Mcgaughy</td>
                            <td>Hemodialysis Technician</td>
                            <td>11 Nov 1983</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lizzee</td>
                            <td><a href="#">Goodlow</a></td>
                            <td>Technical Services Librarian</td>
                            <td>1 Nov 1961</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Judi</td>
                            <td>Badgett</td>
                            <td>Electrical Lineworker</td>
                            <td>23 Jun 1981</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lauri</td>
                            <td>Hyland</td>
                            <td>Blackjack Supervisor</td>
                            <td>15 Nov 1985</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div> <!-- end card-box-->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title">Radio Select</h4>
                    <p class="sub-header">
                        Example of radio select.
                    </p>

                    <table data-toggle="table"
                            data-page-size="10"
                            data-buttons-class="xs btn-light"
                            data-pagination="true" class="table-bordered">
                        <thead class="thead-light">
                        <tr>
                            <th data-field="state" data-radio="true"></th>
                            <th data-field="id" data-switchable="false">First Name</th>
                            <th data-field="name">Last Name</th>
                            <th data-field="date">Job Title</th>
                            <th data-field="amount">DOB</th>
                            <th data-field="user-status" class="text-center">Status</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td></td>
                            <td>Isidra</td>
                            <td>Boudreaux</td>
                            <td>Traffic Court Referee</td>
                            <td>22 Jun 1972</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Shona</td>
                            <td>Woldt</td>
                            <td>Airline Transport Pilot</td>
                            <td>3 Oct 1981</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Granville</td>
                            <td>Leonardo</td>
                            <td>Business Services Sales Representative</td>
                            <td>19 Apr 1969</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Easer</td>
                            <td>Dragoo</td>
                            <td>Drywall Stripper</td>
                            <td>13 Dec 1977</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Maple</td>
                            <td>Halladay</td>
                            <td>Aviation Tactical Readiness Officer</td>
                            <td>30 Dec 1991</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Maxine</td>
                            <td><a href="#">Woldt</a></td>
                            <td><a href="#">Business Services Sales Representative</a></td>
                            <td>17 Oct 1987</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lorraine</td>
                            <td>Mcgaughy</td>
                            <td>Hemodialysis Technician</td>
                            <td>11 Nov 1983</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lizzee</td>
                            <td><a href="#">Goodlow</a></td>
                            <td>Technical Services Librarian</td>
                            <td>1 Nov 1961</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Judi</td>
                            <td>Badgett</td>
                            <td>Electrical Lineworker</td>
                            <td>23 Jun 1981</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lauri</td>
                            <td>Hyland</td>
                            <td>Blackjack Supervisor</td>
                            <td>15 Nov 1985</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Isidra</td>
                            <td>Boudreaux</td>
                            <td>Traffic Court Referee</td>
                            <td>22 Jun 1972</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Shona</td>
                            <td>Woldt</td>
                            <td>Airline Transport Pilot</td>
                            <td>3 Oct 1981</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Granville</td>
                            <td>Leonardo</td>
                            <td>Business Services Sales Representative</td>
                            <td>19 Apr 1969</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Easer</td>
                            <td>Dragoo</td>
                            <td>Drywall Stripper</td>
                            <td>13 Dec 1977</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Maple</td>
                            <td>Halladay</td>
                            <td>Aviation Tactical Readiness Officer</td>
                            <td>30 Dec 1991</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Maxine</td>
                            <td><a href="#">Woldt</a></td>
                            <td><a href="#">Business Services Sales Representative</a></td>
                            <td>17 Oct 1987</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lorraine</td>
                            <td>Mcgaughy</td>
                            <td>Hemodialysis Technician</td>
                            <td>11 Nov 1983</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lizzee</td>
                            <td><a href="#">Goodlow</a></td>
                            <td>Technical Services Librarian</td>
                            <td>1 Nov 1961</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Judi</td>
                            <td>Badgett</td>
                            <td>Electrical Lineworker</td>
                            <td>23 Jun 1981</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lauri</td>
                            <td>Hyland</td>
                            <td>Blackjack Supervisor</td>
                            <td>15 Nov 1985</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Isidra</td>
                            <td>Boudreaux</td>
                            <td>Traffic Court Referee</td>
                            <td>22 Jun 1972</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Shona</td>
                            <td>Woldt</td>
                            <td>Airline Transport Pilot</td>
                            <td>3 Oct 1981</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Granville</td>
                            <td>Leonardo</td>
                            <td>Business Services Sales Representative</td>
                            <td>19 Apr 1969</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Easer</td>
                            <td>Dragoo</td>
                            <td>Drywall Stripper</td>
                            <td>13 Dec 1977</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Maple</td>
                            <td>Halladay</td>
                            <td>Aviation Tactical Readiness Officer</td>
                            <td>30 Dec 1991</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Maxine</td>
                            <td><a href="#">Woldt</a></td>
                            <td><a href="#">Business Services Sales Representative</a></td>
                            <td>17 Oct 1987</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lorraine</td>
                            <td>Mcgaughy</td>
                            <td>Hemodialysis Technician</td>
                            <td>11 Nov 1983</td>
                            <td><span class="badge badge-dark">Disabled</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lizzee</td>
                            <td><a href="#">Goodlow</a></td>
                            <td>Technical Services Librarian</td>
                            <td>1 Nov 1961</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Judi</td>
                            <td>Badgett</td>
                            <td>Electrical Lineworker</td>
                            <td>23 Jun 1981</td>
                            <td><span class="badge badge-success">Active</span></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>Lauri</td>
                            <td>Hyland</td>
                            <td>Blackjack Supervisor</td>
                            <td>15 Nov 1985</td>
                            <td><span class="badge badge-danger">Suspended</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div> <!-- end card-box -->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title">Sort &amp; Format Column</h4>
                    <p class="sub-header mb-0">
                        Example of sort & format column.
                    </p>

                    <table data-toggle="table"
                            data-sort-name="id"
                            data-page-list="[5, 10, 20]"
                            data-page-size="5"
                            data-buttons-class="xs btn-light"
                            data-pagination="true" data-show-pagination-switch="true" class="table-borderless ">
                        <thead class="thead-light">
                        <tr>
                            <th data-field="id" data-sortable="true" data-formatter="invoiceFormatter">Order ID</th>
                            <th data-field="name" data-sortable="true">Name</th>
                            <th data-field="date" data-sortable="true" data-formatter="dateFormatter">Order date</th>
                            <th data-field="amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Price</th>
                            <th data-field="status" data-align="center" data-sortable="true" data-formatter="statusFormatter">Status</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td>UB-1609</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Unpaid</td>
                        </tr>
                        <tr>
                            <td>UB-1610</td>
                            <td>Woldt</td>
                            <td>24 Jun 2017</td>
                            <td>$ 15.00</td>
                            <td>Paid</td>
                        </tr>

                        <tr>
                            <td>UB-1611</td>
                            <td>Leonardo</td>
                            <td>25 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Shipped</td>
                        </tr>

                        <tr>
                            <td>UB-1612</td>
                            <td>Halladay</td>
                            <td>27 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Refunded</td>
                        </tr>

                        <tr>
                            <td>UB-1613</td>
                            <td>Badgett</td>
                            <td>28 Jun 2017</td>
                            <td>$ 95.00</td>
                            <td>Unpaid</td>
                        </tr>
                        <tr>
                            <td>UB-1614</td>
                            <td>Boudreaux</td>
                            <td>29 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Paid</td>
                        </tr>

                        <tr>
                            <td>UB-1615</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Shipped</td>
                        </tr>

                        <tr>
                            <td>UB-1616</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Refunded</td>
                        </tr>

                        <tr>
                            <td>UB-1617</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Unpaid</td>
                        </tr>
                        <tr>
                            <td>UB-1618</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Paid</td>
                        </tr>

                        <tr>
                            <td>UB-1619</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Shipped</td>
                        </tr>

                        <tr>
                            <td>UB-1620</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Refunded</td>
                        </tr>

                        <tr>
                            <td>UB-1621</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Unpaid</td>
                        </tr>
                        <tr>
                            <td>UB-1622</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Paid</td>
                        </tr>

                        <tr>
                            <td>UB-1623</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Shipped</td>
                        </tr>

                        <tr>
                            <td>UB-1624</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Refunded</td>
                        </tr>
                        </tbody>
                    </table>
                </div> <!-- end card-box-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title">Basic Toolbar</h4>
                    <p class="sub-header mb-0">
                        Example of basic toolbar.
                    </p>

                    <table data-toggle="table"
                            data-search="true"
                            data-show-refresh="true"
                            data-sort-name="id"
                            data-page-list="[5, 10, 20]"
                            data-page-size="5"
                            data-pagination="true" data-show-pagination-switch="true" class="table-borderless">
                        <thead class="thead-light">
                        <tr>
                            <th data-field="id" data-sortable="true" data-formatter="invoiceFormatter">Order ID</th>
                            <th data-field="name" data-sortable="true">Name</th>
                            <th data-field="date" data-sortable="true" data-formatter="dateFormatter">Order Date</th>
                            <th data-field="amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Price</th>
                            <th data-field="status" data-align="center" data-sortable="true" data-formatter="statusFormatter">Status</th>

                        </tr>
                        </thead>


                        <tbody>
                        <tr>
                            <td>UB-1609</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Unpaid</td>
                        </tr>
                        <tr>
                            <td>UB-1610</td>
                            <td>Woldt</td>
                            <td>24 Jun 2017</td>
                            <td>$ 15.00</td>
                            <td>Paid</td>
                        </tr>

                        <tr>
                            <td>UB-1611</td>
                            <td>Leonardo</td>
                            <td>25 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Shipped</td>
                        </tr>

                        <tr>
                            <td>UB-1612</td>
                            <td>Halladay</td>
                            <td>27 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Refunded</td>
                        </tr>

                        <tr>
                            <td>UB-1613</td>
                            <td>Badgett</td>
                            <td>28 Jun 2017</td>
                            <td>$ 95.00</td>
                            <td>Unpaid</td>
                        </tr>
                        <tr>
                            <td>UB-1614</td>
                            <td>Boudreaux</td>
                            <td>29 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Paid</td>
                        </tr>

                        <tr>
                            <td>UB-1615</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Shipped</td>
                        </tr>

                        <tr>
                            <td>UB-1616</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Refunded</td>
                        </tr>

                        <tr>
                            <td>UB-1617</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Unpaid</td>
                        </tr>
                        <tr>
                            <td>UB-1618</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Paid</td>
                        </tr>

                        <tr>
                            <td>UB-1619</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Shipped</td>
                        </tr>

                        <tr>
                            <td>UB-1620</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Refunded</td>
                        </tr>

                        <tr>
                            <td>UB-1621</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Unpaid</td>
                        </tr>
                        <tr>
                            <td>UB-1622</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Paid</td>
                        </tr>

                        <tr>
                            <td>UB-1623</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Shipped</td>
                        </tr>

                        <tr>
                            <td>UB-1624</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Refunded</td>
                        </tr>
                        </tbody>
                    </table>
                </div> <!-- end card-box-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->


        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title">Custom Toolbar</h4>
                    <p class="sub-header">
                        Example of custom toolbar.
                    </p>

                    <button id="demo-delete-row" class="btn btn-danger btn-sm" disabled><i class="mdi mdi-close mr-1"></i>Delete</button>
                    <table id="demo-custom-toolbar"  data-toggle="table"
                            data-toolbar="#demo-delete-row"
                            data-search="true"
                            data-show-refresh="true"
                            data-show-columns="true"
                            data-sort-name="id"
                            data-page-list="[5, 10, 20]"
                            data-page-size="5"
                            data-pagination="true" data-show-pagination-switch="true" class="table-borderless">
                        <thead class="thead-light">
                        <tr>
                            <th data-field="state" data-checkbox="true"></th>
                            <th data-field="id" data-sortable="true" data-formatter="invoiceFormatter">Order ID</th>
                            <th data-field="name" data-sortable="true">Name</th>
                            <th data-field="date" data-sortable="true" data-formatter="dateFormatter">Order Date</th>
                            <th data-field="amount" data-align="center" data-sortable="true" data-sorter="priceSorter">Price</th>
                            <th data-field="status" data-align="center" data-sortable="true" data-formatter="statusFormatter">Status</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <td></td>
                            <td>UB-1609</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Unpaid</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>UB-1610</td>
                            <td>Woldt</td>
                            <td>24 Jun 2017</td>
                            <td>$ 15.00</td>
                            <td>Paid</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>UB-1611</td>
                            <td>Leonardo</td>
                            <td>25 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Shipped</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>UB-1612</td>
                            <td>Halladay</td>
                            <td>27 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Refunded</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>UB-1613</td>
                            <td>Badgett</td>
                            <td>28 Jun 2017</td>
                            <td>$ 95.00</td>
                            <td>Unpaid</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>UB-1614</td>
                            <td>Boudreaux</td>
                            <td>29 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Paid</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>UB-1615</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Shipped</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>UB-1616</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Refunded</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>UB-1617</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Unpaid</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>UB-1618</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Paid</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>UB-1619</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Shipped</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>UB-1620</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Refunded</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>UB-1621</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Unpaid</td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>UB-1622</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Paid</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>UB-1623</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Shipped</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td>UB-1624</td>
                            <td>Boudreaux</td>
                            <td>22 Jun 2017</td>
                            <td>$ 35.00</td>
                            <td>Refunded</td>
                        </tr>
                        </tbody>
                    </table>
                </div> <!-- end card-box-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/bootstrap-table/bootstrap-table.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/bootstrap-tables.init.js')}}"></script>
@endsection