@extends('layouts.vertical', ['title' => 'Images'])

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
                            <li class="breadcrumb-item active">Images</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Images</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <div class="row">
                        <div class="col-xl-6">
                            <h4 class="header-title">Images shapes</h4>
                            <p class="sub-header">
                                Add classes to an <code>&lt;img&gt;</code> element to easily style
                                images in any project.
                            </p>

                            <div class="row">
                                <div class="col-sm-4">
                                    <img src="{{asset('assets/images/small/img-1.jpg')}}" alt="image"
                                            class="img-fluid rounded" width="200"/>
                                    <p class="mb-0">
                                        <code>.rounded</code>
                                    </p>
                                </div>

                                <div class="col-sm-4 text-center">
                                    <img src="{{asset('assets/images/users/user-6.jpg')}}" alt="image"
                                            class="img-fluid rounded-circle" width="120"/>
                                    <p class="mb-0">
                                        <code>.rounded-circle</code>
                                    </p>
                                </div>

                                <div class="col-sm-4">
                                    <img src="{{asset('assets/images/small/img-3.jpg')}}" alt="image"
                                            class="img-fluid img-thumbnail" width="200"/>
                                    <p class="mb-0">
                                        <code>.img-thumbnail</code>
                                    </p>
                                </div>
                            </div>
                        </div> <!-- end col-->

                        <div class="col-xl-6 mt-3 mt-xl-0">
                            <h4 class="header-title">Image sizes</h4>
                            <p class="sub-header">
                                Add classes to an <code>&lt;img&gt;</code> element to easily style
                                images in any project.
                            </p>

                            <div class="row">
                                <div class="col-sm-3">
                                    <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="image"
                                            class="img-fluid avatar-xs rounded"/>
                                    <p class="mb-0">
                                        <code>.avatar-xs</code>
                                    </p>
                                    <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="image"
                                            class="img-fluid avatar-sm rounded mt-2"/>
                                    <p class="mb-0">
                                        <code>.avatar-sm</code>
                                    </p>
                                </div>

                                <div class="col-sm-3">
                                    <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="image"
                                            class="img-fluid avatar-md rounded"/>
                                    <p class="mb-0">
                                        <code>.avatar-md</code>
                                    </p>
                                </div>

                                <div class="col-sm-3">
                                    <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="image"
                                            class="img-fluid avatar-lg rounded"/>
                                    <p class="mb-0">
                                        <code>.avatar-lg</code>
                                    </p>
                                </div>

                                <div class="col-sm-3">
                                    <img src="{{asset('assets/images/users/user-5.jpg')}}" alt="image"
                                            class="img-fluid avatar-xl rounded"/>
                                    <p class="mb-0">
                                        <code>.avatar-xl</code>
                                    </p>
                                </div>
                            </div>

                        </div> <!-- end col -->
                    </div> <!-- end row -->

                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div>
        <!-- end row-->

        <!-- ===== MEDIA ==== -->

        <div class="row">
            <div class="col-sm-12">
                <div class="card-box">
                    <h4 class="header-title">Default media object</h4>
                    <p class="sub-header">The default media displays a media object
                        (images, video, audio) to the left or right of a content block.</p>

                    <div class="media mb-3">
                        <img class="d-flex mr-3 rounded-circle" src="{{asset('assets/images/users/user-10.jpg')}}" alt="Generic placeholder image" height="48">
                        <div class="media-body">
                            <h5 class="mt-0">Media heading</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                    </div>

                    <div class="media mb-3">
                        <img class="d-flex mr-3 rounded-circle" src="{{asset('assets/images/users/user-2.jpg')}}" alt="Generic placeholder image" height="48">
                        <div class="media-body">
                            <h5 class="mt-0">Media heading</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

                            <div class="media mt-3">
                                <a class="d-flex pr-3" href="#">
                                    <img src="{{asset('assets/images/users/user-3.jpg')}}" alt="Generic placeholder image" height="48" class="rounded-circle">
                                </a>
                                <div class="media-body">
                                    <h5 class="mt-0">Media heading</h5>
                                    Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="media">
                        <div class="media-body">
                            <h5 class="mt-0 mb-1">Media object</h5>
                            Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
                        </div>
                        <img class="d-flex ml-3 rounded-circle" src="{{asset('assets/images/users/user-4.jpg')}}" alt="Generic placeholder image" height="48">
                    </div>

                </div> <!-- end card-box -->
            </div> <!-- end col -->
        </div> <!-- end row -->

        <!-- Media alignment -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title">Media alignment</h4>
                    <p class="text-muted m-b-30 font-13">The images or other media can be aligned top,
                        middle, or bottom. The default is top aligned.</p>

                    <div class="media mb-3">
                        <img class="d-flex align-self-start rounded mr-3" src="{{asset('assets/images/users/user-5.jpg')}}" alt="Generic placeholder image" height="48">
                        <div class="media-body">
                            <h5 class="mt-0">Top-aligned media</h5>
                            <p class="mb-1">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                    </div>

                    <div class="media mb-3">
                        <img class="d-flex align-self-center rounded mr-3" src="{{asset('assets/images/users/user-6.jpg')}}" alt="Generic placeholder image" height="48">
                        <div class="media-body">
                            <h5 class="mt-0">Center-aligned media</h5>
                            <p class="mb-1">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                    </div>

                    <div class="media">
                        <img class="d-flex align-self-end rounded mr-3" src="{{asset('assets/images/users/user-7.jpg')}}" alt="Generic placeholder image" height="48">
                        <div class="media-body">
                            <h5 class="mt-0">Bottom-aligned media</h5>
                            <p class="mb-1">Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.</p>
                            <p class="mb-0">Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
                        </div>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col  -->
        </div> <!-- end row -->
        
    </div> <!-- container -->    
@endsection