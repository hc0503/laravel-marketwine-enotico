@extends('layouts.vertical', ['title' => 'Avatars'])

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">UI</a></li>
                            <li class="breadcrumb-item active">Avatars</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Avatars</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Sizing - Images</h4>
                        <p class="text-muted font-14 mb-3">
                            Create and group avatars of different sizes and shapes with the css classes.
                            Using Bootstrap's naming convention, you can control size of avatar including standard avatar, or scale it up to different sizes.
                        </p>

                        <div class="row">
                            <div class="col-md-3">
                                <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="image" class="img-fluid avatar-xs rounded">
                                <p>
                                    <code>.avatar-xs</code>
                                </p>
                                <img src="{{asset('assets/images/users/user-3.jpg')}}" alt="image" class="img-fluid avatar-sm rounded mt-2">
                                <p class="mb-2 mb-sm-0">
                                    <code>.avatar-sm</code>
                                </p>
                            </div>
                            <div class="col-md-3">
                                <img src="{{asset('assets/images/users/user-4.jpg')}}" alt="image"
                                        class="img-fluid avatar-md rounded"/>
                                <p>
                                    <code>.avatar-md</code>
                                </p>
                            </div>

                            <div class="col-md-3">
                                <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="image"
                                        class="img-fluid avatar-lg rounded"/>
                                <p>
                                    <code>.avatar-lg</code>
                                </p>
                            </div>

                            <div class="col-md-3">
                                <img src="{{asset('assets/images/users/user-6.jpg')}}" alt="image"
                                        class="img-fluid avatar-xl rounded"/>
                                <p class="mb-0">
                                    <code>.avatar-xl</code>
                                </p>
                            </div>
                        </div> <!-- end row-->

                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Rounded Circle</h4>
                        <p class="text-muted font-14 mb-4">
                            Using an additional class <code>.rounded-circle</code> in <code>&lt;img&gt;</code> element creates the rounded avatar.
                        </p>

                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{asset('assets/images/users/user-7.jpg')}}" alt="image"
                                        class="img-fluid avatar-md rounded-circle"/>
                                <p class="mt-1">
                                    <code>.avatar-md .rounded-circle</code>
                                </p>
                            </div>

                            <div class="col-md-4">
                                <img src="{{asset('assets/images/users/user-8.jpg')}}" alt="image"
                                        class="img-fluid avatar-lg rounded-circle"/>
                                <p>
                                    <code>.avatar-lg .rounded-circle</code>
                                </p>
                            </div>

                            <div class="col-md-4">
                                <img src="{{asset('assets/images/users/user-9.jpg')}}" alt="image"
                                        class="img-fluid avatar-xl rounded-circle"/>
                                <p class="mb-0">
                                    <code>.avatar-xl .rounded-circle</code>
                                </p>
                            </div>
                        </div> <!-- end row-->
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Sizing - Background Color</h4>
                        <p class="text-muted font-14 mb-3">
                            Using utilities classes of background e.g. <code>bg-*</code> allows you to have any background color as well.
                        </p>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="avatar-xs">
                                    <span class="avatar-title bg-primary rounded">
                                        xs
                                    </span>
                                </div>
                                <p class="mb-2 font-14 mt-1">
                                    Using <code>.avatar-xs</code>
                                </p>
                                
                                <div class="avatar-sm mt-3">
                                    <span class="avatar-title bg-success rounded">
                                        sm
                                    </span>
                                </div>

                                <p class="mb-0 font-14 mt-1">
                                    Using <code>.avatar-sm</code>
                                </p>
                            </div>
                            <div class="col-md-3">
                                <div class="avatar-md">
                                    <span class="avatar-title bg-soft-info text-info font-20 rounded">
                                        MD
                                    </span>
                                </div>

                                <p class="mb-0 font-14 mt-1">
                                    Using <code>.avatar-md</code>
                                </p>
                            </div>

                            <div class="col-md-3">
                                <div class="avatar-lg">
                                    <span class="avatar-title bg-danger font-22 rounded">
                                        LG
                                    </span>
                                </div>

                                <p class="mb-0 font-14 mt-1">
                                    Using <code>.avatar-lg</code>
                                </p>
                            </div>

                            <div class="col-md-3">
                                <div class="avatar-xl">
                                    <span class="avatar-title bg-soft-warning text-warning font-24 rounded">
                                        XL
                                    </span>
                                </div>

                                <p class="mb-0 font-14 mt-1">
                                    Using <code>.avatar-xl</code>
                                </p>
                            </div>
                        </div> <!-- end row-->

                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Rounded Circle Background</h4>
                        <p class="text-muted font-14 mb-3">
                            Using an additional class <code>.rounded-circle</code> in <code>&lt;img&gt;</code> element creates the rounded avatar.
                        </p>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="avatar-md">
                                    <span class="avatar-title bg-soft-secondary text-secondary font-20 rounded-circle">
                                        MD
                                    </span>
                                </div>

                                <p class="mb-0 font-14 mt-1">
                                    Using <code>.avatar-md .rounded-circle</code>
                                </p>
                            </div>

                            <div class="col-md-4">
                                <div class="avatar-lg">
                                    <span class="avatar-title bg-light text-dark font-22 rounded-circle">
                                        LG
                                    </span>
                                </div>

                                <p class="mb-0 font-14 mt-1">
                                    Using <code>.avatar-lg .rounded-circle</code>
                                </p>
                            </div>

                            <div class="col-md-4">
                                <div class="avatar-xl">
                                    <span class="avatar-title bg-soft-primary text-primary font-24 rounded-circle">
                                        XL
                                    </span>
                                </div>

                                <p class="mb-0 font-14 mt-1">
                                    Using <code>.avatar-xl .rounded-circle</code>
                                </p>
                            </div>
                        </div> <!-- end row-->

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Images Shapes</h4>
                        <p class="text-muted font-14 mb-3">
                            Avatars with different sizes and shapes.
                        </p>

                        <div class="row">
                            <div class="col-sm-2">
                                <img src="{{asset('assets/images/small/img-2.jpg')}}" alt="image"
                                        class="img-fluid rounded" width="200"/>
                                <p class="mb-0">
                                    <code>.rounded</code>
                                </p>
                            </div>

                            <div class="col-sm-2 text-center">
                                <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="image"
                                        class="img-fluid rounded" width="120"/>
                                <p class="mb-0">
                                    <code>.rounded</code>
                                </p>
                            </div>
                            
                            <div class="col-sm-2 text-center">
                                <img src="{{asset('assets/images/users/user-7.jpg')}}" alt="image"
                                        class="img-fluid rounded-circle" width="120"/>
                                <p class="mb-0">
                                    <code>.rounded-circle</code>
                                </p>
                            </div>

                            <div class="col-sm-2">
                                <img src="{{asset('assets/images/small/img-3.jpg')}}" alt="image"
                                        class="img-fluid img-thumbnail" width="200"/>
                                <p class="mb-0">
                                    <code>.img-thumbnail</code>
                                </p>
                            </div>
                            <div class="col-sm-2">
                                <img src="{{asset('assets/images/users/user-8.jpg')}}" alt="image"
                                        class="img-fluid rounded-circle img-thumbnail" width="120"/>
                                <p class="mb-0">
                                    <code>.rounded-circle .img-thumbnail</code>
                                </p>
                            </div>
                        </div> <!-- end row-->

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection