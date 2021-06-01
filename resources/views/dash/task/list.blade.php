@extends('layouts.vertical', ['title' => 'Tasks Listing'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/quill/quill.min.css')}}" rel="stylesheet" type="text/css" />

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
                            <li class="breadcrumb-item active">Tasks</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Tasks</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <!-- tasks panel -->
        <div class="row">
            <div class="col-xl-8">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <!-- cta -->
                                <div class="row">
                                    <div class="col-sm-3">
                                        <a href="#" class="btn btn-primary waves-effect waves-light"><i class='fe-plus mr-1'></i>Add New</a>
                                    </div>
                                    <div class="col-sm-9">
                                        <div class="float-sm-right mt-3 mt-sm-0">
                                            
                                            <div class="d-inline-block mb-3 mb-sm-0 mr-sm-2">
                                                <form class="search-bar form-inline">
                                                    <div class="position-relative">
                                                        <input type="text" class="form-control" placeholder="Search...">
                                                        <span class="mdi mdi-magnify"></span>
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="dropdown d-inline-block">
                                                <button class="btn btn-light dropdown-toggle" type="button"
                                                    data-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false">
                                                    <i class="mdi mdi-filter-variant"></i>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Due Date</a>
                                                    <a class="dropdown-item" href="#">Added Date</a>
                                                    <a class="dropdown-item" href="#">Assignee</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row mt-4" data-plugin="dragula" data-containers='["task-list-one", "task-list-two", "task-list-three"]'>
                                    <div class="col">
                                        <a class="text-dark" data-toggle="collapse" href="#todayTasks"
                                            aria-expanded="false" aria-controls="todayTasks">
                                            <h5 class="mb-0"><i class='mdi mdi-chevron-down font-18'></i> Today <span class="text-muted font-14">(10)</span></h5>
                                        </a>

                                        <div class="collapse show" id="todayTasks">
                                            <div class="card mb-0 shadow-none">
                                                <div class="card-body pb-0" id="task-list-one">
                                                    <!-- task -->
                                                    <div class="row justify-content-sm-between task-item">
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox"
                                                                    class="custom-control-input" id="task1">
                                                                <label class="custom-control-label"
                                                                    for="task1">
                                                                    Draft the new contract document for
                                                                    sales team
                                                                </label>
                                                            </div> <!-- end checkbox -->
                                                        </div> <!-- end col -->
                                                        <div class="col-lg-6">
                                                            <div class="d-sm-flex justify-content-between">
                                                                <div>
                                                                    <img src="{{asset('assets/images/users/user-9.jpg')}}" lt="image" class="avatar-xs rounded-circle" data-toggle="tooltip" data-placement="bottom" title="Assigned to Arya S" />
                                                                </div>
                                                                <div class="mt-3 mt-sm-0">
                                                                    <ul class="list-inline font-13 text-sm-right">
                                                                        <li class="list-inline-item pr-1">
                                                                            <i class='mdi mdi-calendar-month-outline font-16 mr-1'></i>
                                                                            Today 10am
                                                                        </li>
                                                                        <li class="list-inline-item pr-1">
                                                                            <i class='mdi mdi-tune font-16 mr-1'></i>
                                                                            3/7
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <i class='mdi mdi-comment-text-multiple-outline font-16 mr-1'></i>
                                                                            21
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <span class="badge badge-soft-danger p-1">High</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div> <!-- end .d-flex-->
                                                        </div> <!-- end col -->
                                                    </div>
                                                    <!-- end task -->

                                                    <!-- task -->
                                                    <div class="row justify-content-sm-between task-item">
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox"
                                                                    class="custom-control-input" id="task2">
                                                                <label class="custom-control-label"
                                                                    for="task2">
                                                                    iOS App home page
                                                                </label>
                                                            </div> <!-- end checkbox -->
                                                        </div> <!-- end col -->
                                                        <div class="col-lg-6">
                                                            <div class="d-sm-flex justify-content-between">
                                                                <div>
                                                                    <img src="{{asset('assets/images/users/user-2.jpg')}}"
                                                                        alt="image"
                                                                        class="avatar-xs rounded-circle"
                                                                        data-toggle="tooltip"
                                                                        data-placement="bottom"
                                                                        title="Assigned to James B" />
                                                                </div>
                                                                <div class="mt-3 mt-sm-0">
                                                                    <ul
                                                                        class="list-inline font-13 text-sm-right">
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='mdi mdi-calendar-month-outline font-16 mr-1'></i>
                                                                            Today 4pm
                                                                        </li>
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='mdi mdi-tune font-16 mr-1'></i>
                                                                            2/7
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <i
                                                                                class='mdi mdi-comment-text-multiple-outline font-16 mr-1'></i>
                                                                            48
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <span
                                                                                class="badge badge-soft-danger p-1">High</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div> <!-- end .d-flex-->
                                                        </div> <!-- end col -->
                                                    </div>
                                                    <!-- end task -->

                                                    <!-- task -->
                                                    <div class="row justify-content-sm-between task-item">
                                                        <div class="col-lg-6 mb-2">
                                                            <div class="custom-control custom-checkbox">
                                                                <input type="checkbox"
                                                                    class="custom-control-input" id="task3">
                                                                <label class="custom-control-label"
                                                                    for="task3">
                                                                    Write a release note
                                                                </label>
                                                            </div> <!-- end checkbox -->
                                                        </div> <!-- end col -->
                                                        <div class="col-lg-6">
                                                            <div class="d-sm-flex justify-content-between">
                                                                <div>
                                                                    <img src="{{asset('assets/images/users/user-4.jpg')}}"
                                                                        alt="image"
                                                                        class="avatar-xs rounded-circle"
                                                                        data-toggle="tooltip"
                                                                        data-placement="bottom"
                                                                        title="Assigned to Kevin C" />
                                                                </div>
                                                                <div class="mt-3 mt-sm-0">
                                                                    <ul
                                                                        class="list-inline font-13 text-sm-right">
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='mdi mdi-calendar-month-outline font-16 mr-1'></i>
                                                                            Today 6pm
                                                                        </li>
                                                                        <li class="list-inline-item pr-1">
                                                                            <i
                                                                                class='mdi mdi-tune font-16 mr-1'></i>
                                                                            18/21
                                                                        </li>
                                                                        <li class="list-inline-item pr-2">
                                                                            <i
                                                                                class='mdi mdi-comment-text-multiple-outline font-16 mr-1'></i>
                                                                            73
                                                                        </li>
                                                                        <li class="list-inline-item">
                                                                            <span
                                                                                class="badge badge-soft-info p-1">Medium</span>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div> <!-- end .d-flex-->
                                                        </div> <!-- end col -->
                                                    </div>
                                                    <!-- end task -->
                                                </div> <!-- end card-body-->
                                            </div> <!-- end card -->
                                        </div> <!-- end .collapse-->

                                        <!-- upcoming tasks -->
                                        <div class="mt-4">
                                            <a class="text-dark" data-toggle="collapse"
                                                href="#upcomingTasks" aria-expanded="false"
                                                aria-controls="upcomingTasks">
                                                <h5 class="mb-0">
                                                    <i class='mdi mdi-chevron-down font-18'></i> Upcoming <span class="text-muted font-14">(5)</span>
                                                </h5>
                                            </a>

                                            <div class="collapse show" id="upcomingTasks">
                                                <div class="card mb-0 shadow-none">
                                                    <div class="card-body pb-0" id="task-list-two">
                                                        <!-- task -->
                                                        <div class="row justify-content-sm-between task-item">
                                                            <div class="col-lg-6 mb-2">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        id="task4">
                                                                    <label class="custom-control-label"
                                                                        for="task4">
                                                                        Invite user to a project
                                                                    </label>
                                                                </div> <!-- end checkbox -->
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="d-sm-flex justify-content-between">
                                                                    <div>
                                                                        <img src="{{asset('assets/images/users/user-2.jpg')}}"
                                                                            alt="image"
                                                                            class="avatar-xs rounded-circle"
                                                                            data-toggle="tooltip"
                                                                            data-placement="bottom"
                                                                            title="Assigned to James B" />
                                                                    </div>
                                                                    <div class="mt-3 mt-sm-0">
                                                                        <ul
                                                                            class="list-inline font-13 text-sm-right">
                                                                            <li class="list-inline-item pr-1">
                                                                                <i
                                                                                    class='mdi mdi-calendar-month-outline font-16 mr-1'></i>
                                                                                Tomorrow
                                                                                7am
                                                                            </li>
                                                                            <li class="list-inline-item pr-1">
                                                                                <i
                                                                                    class='mdi mdi-tune font-16 mr-1'></i>
                                                                                1/12
                                                                            </li>
                                                                            <li class="list-inline-item pr-2">
                                                                                <i
                                                                                    class='mdi mdi-comment-text-multiple-outline font-16 mr-1'></i>
                                                                                36
                                                                            </li>
                                                                            <li class="list-inline-item">
                                                                                <span
                                                                                    class="badge badge-soft-danger p-1">High</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> <!-- end .d-flex-->
                                                            </div> <!-- end col -->
                                                        </div>
                                                        <!-- end task -->

                                                        <!-- task -->
                                                        <div class="row justify-content-sm-between task-item">
                                                            <div class="col-lg-6 mb-2">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        id="task5">
                                                                    <label class="custom-control-label"
                                                                        for="task5">
                                                                        Enable analytics tracking
                                                                    </label>
                                                                </div> <!-- end checkbox -->
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="d-sm-flex justify-content-between">
                                                                    <div>
                                                                        <img src="{{asset('assets/images/users/user-2.jpg')}}"
                                                                            alt="image"
                                                                            class="avatar-xs rounded-circle"
                                                                            data-toggle="tooltip"
                                                                            data-placement="bottom"
                                                                            title="Assigned to James B" />
                                                                    </div>
                                                                    <div class="mt-3 mt-sm-0">
                                                                        <ul class="list-inline font-13 text-sm-right">
                                                                            <li class="list-inline-item pr-1">
                                                                                <i class='mdi mdi-calendar-month-outline font-16 mr-1'></i>
                                                                                27 Aug 10am
                                                                            </li>
                                                                            <li class="list-inline-item pr-1">
                                                                                <i
                                                                                    class='mdi mdi-tune font-16 mr-1'></i>
                                                                                13/72
                                                                            </li>
                                                                            <li class="list-inline-item pr-2">
                                                                                <i
                                                                                    class='mdi mdi-comment-text-multiple-outline font-16 mr-1'></i>
                                                                                211
                                                                            </li>
                                                                            <li class="list-inline-item">
                                                                                <span
                                                                                    class="badge badge-soft-success p-1">Low</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> <!-- end .d-flex-->
                                                            </div> <!-- end col -->
                                                        </div>
                                                        <!-- end task -->

                                                        <!-- task -->
                                                        <div class="row justify-content-sm-between task-item">
                                                            <div class="col-lg-6 mb-2">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        id="task6">
                                                                    <label class="custom-control-label"
                                                                        for="task6">
                                                                        Code HTML email template
                                                                    </label>
                                                                </div> <!-- end checkbox -->
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="d-sm-flex justify-content-between">
                                                                    <div>
                                                                        <img src="{{asset('assets/images/users/user-7.jpg')}}"
                                                                            alt="image"
                                                                            class="avatar-xs rounded-circle"
                                                                            data-toggle="tooltip"
                                                                            data-placement="bottom"
                                                                            title="Assigned to Edward S" />
                                                                    </div>
                                                                    <div class="mt-3 mt-sm-0">
                                                                        <ul class="list-inline font-13 text-sm-right">
                                                                            <li class="list-inline-item pr-1">
                                                                                <i class='mdi mdi-calendar-month-outline font-16 mr-1'></i>
                                                                                No Due Date
                                                                            </li>
                                                                            <li class="list-inline-item pr-1">
                                                                                <i
                                                                                    class='mdi mdi-tune font-16 mr-1'></i>
                                                                                0/7
                                                                            </li>
                                                                            <li class="list-inline-item pr-2">
                                                                                <i
                                                                                    class='mdi mdi-comment-text-multiple-outline font-16 mr-1'></i>
                                                                                0
                                                                            </li>
                                                                            <li class="list-inline-item">
                                                                                <span
                                                                                    class="badge badge-soft-info p-1">Medium</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> <!-- end .d-flex-->
                                                            </div> <!-- end col -->
                                                        </div>
                                                        <!-- end task -->
                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card -->
                                            </div> <!-- end collapse-->
                                        </div>
                                        <!-- end upcoming tasks -->

                                        <!-- start other tasks -->
                                        <div class="mt-4">
                                            <a class="text-dark" data-toggle="collapse" href="#otherTasks"
                                                aria-expanded="false" aria-controls="otherTasks">
                                                <h5>
                                                    <i class='mdi mdi-chevron-down font-18'></i> Other <span class="text-muted font-14">(5)</span>
                                                </h5>
                                            </a>

                                            <div class="collapse show" id="otherTasks">
                                                <div class="card mb-0 shadow-none">
                                                    <div class="card-body pb-0" id="task-list-three">
                                                        <!-- task -->
                                                        <div class="row justify-content-sm-between task-item">
                                                            <div class="col-lg-6 mb-2 mb-lg-0">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        id="task7">
                                                                    <label class="custom-control-label"
                                                                        for="task7">
                                                                        Coordinate with business development
                                                                    </label>
                                                                </div> <!-- end checkbox -->
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="d-sm-flex justify-content-between">
                                                                    <div>
                                                                        <img src="{{asset('assets/images/users/user-9.jpg')}}"
                                                                            alt="image"
                                                                            class="avatar-xs rounded-circle"
                                                                            data-toggle="tooltip"
                                                                            data-placement="bottom"
                                                                            title="Assigned to Arya S" />
                                                                    </div>
                                                                    <div class="mt-3 mt-sm-0">
                                                                        <ul
                                                                            class="list-inline font-13 text-sm-right">
                                                                            <li class="list-inline-item pr-1">
                                                                                <i class='mdi mdi-calendar-month-outline font-16 mr-1'></i>
                                                                                Today 10am
                                                                            </li>
                                                                            <li class="list-inline-item pr-1">
                                                                                <i
                                                                                    class='mdi mdi-tune font-16 mr-1'></i>
                                                                                5/14
                                                                            </li>
                                                                            <li class="list-inline-item pr-2">
                                                                                <i
                                                                                    class='mdi mdi-comment-text-multiple-outline font-16 mr-1'></i>
                                                                                71
                                                                            </li>
                                                                            <li class="list-inline-item">
                                                                                <span
                                                                                    class="badge badge-soft-info p-1">Medium</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> <!-- end .d-flex-->
                                                            </div> <!-- end col -->
                                                        </div>
                                                        <!-- end task -->

                                                        <!-- task -->
                                                        <div class="row justify-content-sm-between task-item">
                                                            <div class="col-lg-6 mb-2">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        id="task8">
                                                                    <label class="custom-control-label"
                                                                        for="task8">
                                                                        Kanban board design
                                                                    </label>
                                                                </div> <!-- end checkbox -->
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="d-sm-flex justify-content-between">
                                                                    <div>
                                                                        <img src="{{asset('assets/images/users/user-2.jpg')}}"
                                                                            alt="image"
                                                                            class="avatar-xs rounded-circle"
                                                                            data-toggle="tooltip"
                                                                            data-placement="bottom"
                                                                            title="Assigned to James B" />
                                                                    </div>
                                                                    <div class="mt-3 mt-sm-0">
                                                                        <ul
                                                                            class="list-inline font-13 text-sm-right">
                                                                            <li class="list-inline-item pr-1">
                                                                                <i
                                                                                    class='mdi mdi-calendar-month-outline font-16 mr-1'></i>
                                                                                No Due
                                                                                Date
                                                                            </li>
                                                                            <li class="list-inline-item pr-1">
                                                                                <i
                                                                                    class='mdi mdi-tune font-16 mr-1'></i>
                                                                                0/8
                                                                            </li>
                                                                            <li class="list-inline-item pr-2">
                                                                                <i
                                                                                    class='mdi mdi-comment-text-multiple-outline font-16 mr-1'></i>
                                                                                0
                                                                            </li>
                                                                            <li class="list-inline-item">
                                                                                <span
                                                                                    class="badge badge-soft-info p-1">Medium</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> <!-- end .d-flex-->
                                                            </div> <!-- end col -->
                                                        </div>
                                                        <!-- end task -->

                                                        <!-- task -->
                                                        <div class="row justify-content-sm-between task-item">
                                                            <div class="col-lg-6 mb-2">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        id="task11">
                                                                    <label class="custom-control-label"
                                                                        for="task11">
                                                                        Draft the new contract document for
                                                                        sales team
                                                                    </label>
                                                                </div> <!-- end checkbox -->
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="d-sm-flex justify-content-between">
                                                                    <div>
                                                                        <img src="{{asset('assets/images/users/user-9.jpg')}}"
                                                                            alt="image"
                                                                            class="avatar-xs rounded-circle"
                                                                            data-toggle="tooltip"
                                                                            data-placement="bottom"
                                                                            title="Assigned to Arya S" />
                                                                    </div>
                                                                    <div class="mt-3 mt-sm-0">
                                                                        <ul
                                                                            class="list-inline font-13 text-sm-right">
                                                                            <li class="list-inline-item pr-1">
                                                                                <i
                                                                                    class='mdi mdi-calendar-month-outline font-16 mr-1'></i>
                                                                                Today 10am
                                                                            </li>
                                                                            <li class="list-inline-item pr-1">
                                                                                <i
                                                                                    class='mdi mdi-tune font-16 mr-1'></i>
                                                                                3/7
                                                                            </li>
                                                                            <li class="list-inline-item pr-2">
                                                                                <i
                                                                                    class='mdi mdi-comment-text-multiple-outline font-16 mr-1'></i>
                                                                                21
                                                                            </li>
                                                                            <li class="list-inline-item">
                                                                                <span
                                                                                    class="badge badge-soft-danger p-1">High</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> <!-- end .d-flex-->
                                                            </div> <!-- end col -->
                                                        </div>
                                                        <!-- end task -->

                                                        <!-- task -->
                                                        <div class="row justify-content-sm-between task-item">
                                                            <div class="col-lg-6 mb-2">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        id="task12">
                                                                    <label class="custom-control-label"
                                                                        for="task12">
                                                                        iOS App home page
                                                                    </label>
                                                                </div> <!-- end checkbox -->
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="d-sm-flex justify-content-between">
                                                                    <div>
                                                                        <img src="{{asset('assets/images/users/user-2.jpg')}}"
                                                                            alt="image"
                                                                            class="avatar-xs rounded-circle"
                                                                            data-toggle="tooltip"
                                                                            data-placement="bottom"
                                                                            title="Assigned to James B" />
                                                                    </div>
                                                                    <div class="mt-3 mt-sm-0">
                                                                        <ul
                                                                            class="list-inline font-13 text-sm-right">
                                                                            <li class="list-inline-item pr-1">
                                                                                <i
                                                                                    class='mdi mdi-calendar-month-outline font-16 mr-1'></i>
                                                                                Today 4pm
                                                                            </li>
                                                                            <li class="list-inline-item pr-1">
                                                                                <i
                                                                                    class='mdi mdi-tune font-16 mr-1'></i>
                                                                                2/7
                                                                            </li>
                                                                            <li class="list-inline-item pr-2">
                                                                                <i
                                                                                    class='mdi mdi-comment-text-multiple-outline font-16 mr-1'></i>
                                                                                48
                                                                            </li>
                                                                            <li class="list-inline-item">
                                                                                <span
                                                                                    class="badge badge-soft-danger p-1">High</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> <!-- end .d-flex-->
                                                            </div> <!-- end col -->
                                                        </div>
                                                        <!-- end task -->

                                                        <!-- task -->
                                                        <div class="row justify-content-sm-between task-item">
                                                            <div class="col-lg-6 mb-2">
                                                                <div class="custom-control custom-checkbox">
                                                                    <input type="checkbox"
                                                                        class="custom-control-input"
                                                                        id="task13">
                                                                    <label class="custom-control-label"
                                                                        for="task13">
                                                                        Write a release note
                                                                    </label>
                                                                </div> <!-- end checkbox -->
                                                            </div> <!-- end col -->
                                                            <div class="col-lg-6">
                                                                <div class="d-sm-flex justify-content-between">
                                                                    <div>
                                                                        <img src="{{asset('assets/images/users/user-4.jpg')}}"
                                                                            alt="image"
                                                                            class="avatar-xs rounded-circle"
                                                                            data-toggle="tooltip"
                                                                            data-placement="bottom"
                                                                            title="Assigned to Kevin C" />
                                                                    </div>
                                                                    <div class="mt-3 mt-sm-0">
                                                                        <ul
                                                                            class="list-inline font-13 text-sm-right">
                                                                            <li class="list-inline-item">
                                                                                <i
                                                                                    class='mdi mdi-calendar-month-outline font-16 mr-1'></i>
                                                                                Today 6pm
                                                                            </li>
                                                                            <li class="list-inline-item pr-1">>
                                                                                <i
                                                                                    class='mdi mdi-tune font-16 mr-1'></i>
                                                                                18/21
                                                                            </li>
                                                                            <li class="list-inline-item pr-2">
                                                                                <i
                                                                                    class='mdi mdi-comment-text-multiple-outline font-16 mr-1'></i>
                                                                                73
                                                                            </li>
                                                                            <li class="list-inline-item">
                                                                                <span
                                                                                    class="badge badge-soft-info p-1">Medium</span>
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </div> <!-- end .d-flex-->
                                                            </div> <!-- end col -->
                                                        </div>
                                                        <!-- end task -->

                                                    </div> <!-- end card-body-->
                                                </div> <!-- end card -->

                                                <div class="row mt-5">
                                                    <div class="col-12">
                                                        <div class="text-center">
                                                            <a href="javascript:void(0);" class="btn btn-sm btn-white">
                                                                <i class="mdi mdi-spin mdi-loading mr-2"></i>
                                                                Load more
                                                            </a>
                                                        </div>
                                                    </div> <!-- end col-->
                                                </div>
                                                <!-- end row -->
                                            </div>
                                        </div>
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                
                            </div> <!-- end card-body -->
                        </div> <!-- end card -->
                    </div> <!-- end col -->
                </div> <!-- end row -->
            </div> <!-- end col -->

            <!-- task details -->
            <div class="col-xl-4">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col">
                                <div class="dropdown float-right">
                                    <a href="#" class="dropdown-toggle arrow-none text-muted"
                                        data-toggle="dropdown" aria-expanded="false">
                                        <i class='mdi mdi-dots-horizontal font-18'></i>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class='mdi mdi-attachment mr-1'></i>Attachment
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class='mdi mdi-pencil-outline mr-1'></i>Edit
                                        </a>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item">
                                            <i class='mdi mdi-content-copy mr-1'></i>Mark as Duplicate
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <!-- item-->
                                        <a href="javascript:void(0);" class="dropdown-item text-danger">
                                            <i class='mdi mdi-delete-outline mr-1'></i>Delete
                                        </a>
                                    </div> <!-- end dropdown menu-->
                                </div> <!-- end dropdown-->

                                <div class="custom-control custom-checkbox float-left">
                                    <input type="checkbox" class="custom-control-input" id="completedCheck">
                                    <label class="custom-control-label" for="completedCheck">
                                        Mark as completed
                                    </label>
                                </div> <!-- end custom-checkbox-->
                                <div class="clearfix"></div>

                                <hr class="my-2" />
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <h4>Simple Admin Dashboard Template Design</h4>

                                <div class="row">
                                    <div class="col-6">
                                        <!-- assignee -->
                                        <p class="mt-2 mb-1 text-muted">Assigned To</p>
                                        <div class="media">
                                            <img src="{{asset('assets/images/users/user-9.jpg')}}" alt="Arya S"
                                                class="rounded-circle mr-2" height="24" />
                                            <div class="media-body">
                                                <h5 class="mt-1 font-size-14">
                                                    Arya Stark
                                                </h5>
                                            </div>
                                        </div>
                                        <!-- end assignee -->
                                    </div> <!-- end col -->

                                    <div class="col-6">
                                        <!-- start due date -->
                                        <p class="mt-2 mb-1 text-muted">Due Date</p>
                                        <div class="media">
                                            <i class='mdi mdi-calendar-month-outline font-18 text-success mr-1'></i>
                                            <div class="media-body">
                                                <h5 class="mt-1 font-size-14">
                                                    Today 10am
                                                </h5>
                                            </div>
                                        </div>
                                        <!-- end due date -->
                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <!-- task description -->
                                <div class="row mt-3">
                                    <div class="col">
                                        <div id="bubble-editor" style="height: 120px;">
                                            <p>This is a task description with markup support</p>
                                            <ul>
                                                <li>Select a text to reveal the toolbar.</li>
                                                <li>Edit rich document on-the-fly, so elastic!</li>
                                            </ul>
                                            <p>End of air-mode area</p>
                                        </div>
                                    </div> <!-- end col -->
                                </div>
                                <!-- end task description -->

                                <!-- start sub tasks/checklists -->
                                <h5 class="mt-4 mb-2 font-size-16">Checklists/Sub-tasks</h5>
                                <div class="custom-control custom-checkbox mt-1">
                                    <input type="checkbox" class="custom-control-input" id="checklist1">
                                    <label class="custom-control-label strikethrough" for="checklist1">
                                        Find out the old contract documents
                                    </label>
                                </div>

                                <div class="custom-control custom-checkbox mt-1">
                                    <input type="checkbox" class="custom-control-input" id="checklist2">
                                    <label class="custom-control-label strikethrough" for="checklist2">
                                        Organize meeting sales associates to understand need in detail
                                    </label>
                                </div>

                                <div class="custom-control custom-checkbox mt-1">
                                    <input type="checkbox" class="custom-control-input" id="checklist3">
                                    <label class="custom-control-label strikethrough" for="checklist3">
                                        Make sure to cover every small details
                                    </label>
                                </div>
                                <!-- end sub tasks/checklists -->

                                <!-- start attachments -->
                                <h5 class="mt-4 mb-2 font-size-16">Attachments</h5>
                                <div class="card mb-1 shadow-none border">
                                    <div class="p-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-sm">
                                                    <span class="avatar-title badge-soft-primary text-primary rounded">
                                                        ZIP
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col pl-0">
                                                <a href="javascript:void(0);" class="text-muted font-weight-bold">Ubold-sketch-design.zip</a>
                                                <p class="mb-0 font-12">2.3 MB</p>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Button -->
                                                <a href="javascript:void(0);" class="btn btn-link font-16 text-muted">
                                                    <i class="dripicons-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="card mb-1 shadow-none border">
                                    <div class="p-2">
                                        <div class="row align-items-center">
                                            <div class="col-auto">
                                                <div class="avatar-sm">
                                                    <span class="avatar-title badge-soft-primary text-primary rounded">
                                                        JPG
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="col pl-0">
                                                <a href="javascript:void(0);" class="text-muted font-weight-bold">Dashboard-design.jpg</a>
                                                <p class="mb-0 font-12">3.25 MB</p>
                                            </div>
                                            <div class="col-auto">
                                                <!-- Button -->
                                                <a href="javascript:void(0);" class="btn btn-link font-16 text-muted">
                                                    <i class="dripicons-download"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end attachments -->

                                <!-- comments -->
                                <div class="row mt-3">
                                    <div class="col">
                                        <h5 class="mb-2 font-size-16">Comments</h5>

                                        <div class="media mt-3 p-1">
                                            <img src="{{asset('assets/images/users/user-9.jpg')}}"
                                                class="mr-2 rounded-circle" height="36" alt="Arya Stark" />
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-0 font-size-14">
                                                    <span class="float-right text-muted font-12">4:30am</span>
                                                    Arya Stark
                                                </h5>
                                                <p class="mt-1 mb-0 text-muted">
                                                    Should I review the last 3 years legal documents as
                                                    well?
                                                </p>
                                            </div>
                                        </div> <!-- end comment -->

                                        <hr />

                                        <div class="media mt-2 p-1">
                                            <img src="{{asset('assets/images/users/user-5.jpg')}}"
                                                class="mr-2 rounded-circle" height="36" alt="Dominc B" />
                                            <div class="media-body">
                                                <h5 class="mt-0 mb-0 font-size-14">
                                                    <span class="float-right text-muted font-12">3:30am</span>
                                                    Gary Somya
                                                </h5>
                                                <p class="mt-1 mb-0 text-muted">
                                                    @Arya FYI..I have created some general guidelines last
                                                    year.
                                                </p>
                                            </div>
                                        </div> <!-- end comment-->

                                        <hr />

                                    </div> <!-- end col -->
                                </div> <!-- end row -->

                                <div class="row mt-2">
                                    <div class="col">
                                        <div class="border rounded">
                                            <form action="#">
                                                <textarea rows="3" class="form-control border-0 resize-none" placeholder="Your comment...."></textarea>
                                                <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                                                    <div>
                                                        <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-cloud-upload-outline"></i></a>
                                                        <a href="#" class="btn btn-sm px-2 font-16 btn-light"><i class="mdi mdi-at"></i></a>
                                                    </div>
                                                    <button type="submit" class="btn btn-sm btn-success"><i class="mdi mdi-send mr-1"></i>Submit</button>
                                                </div>
                                            </form>
                                        </div> <!-- end .border-->
                                    </div> <!-- end col-->
                                </div>
                                <!-- end comments -->
                            </div> <!-- end col -->
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        
    </div> <!-- container -->
@endsection
@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/dragula/dragula.min.js')}}"></script>
    <script src="{{asset('assets/libs/quill/quill.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/dragula.init.js')}}"></script>
    <script src="{{asset('assets/js/pages/task.init.js')}}"></script>
@endsection