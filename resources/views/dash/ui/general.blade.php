@extends('layouts.vertical', ['title' => 'General UI'])

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
                            <li class="breadcrumb-item active">General</li>
                        </ol>
                    </div>
                    <h4 class="page-title">General UI</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Default</h4>
                        <p class="sub-header">
                            A simple labeling component. Badges scale to match the size of the immediate parent element by using relative font sizing and <code>em</code> units.
                        </p>

                        <h1>h1.Example heading <span class="badge badge-secondary">New</span></h1>
                        <h2>h2.Example heading <span class="badge badge-soft-success">New</span></h2>
                        <h3>
                            h3.Example heading 
                            <button type="button" class="btn btn-sm btn-primary">
                                Notifications <span class="badge badge-light">4</span>
                            </button>
                        </h3>
                        <h4>h4.Example heading <a href="#" class="badge badge-soft-info">Info Link</a></h4>
                        <h5>h5.Example heading <span class="badge badge-outline-warning">New</span></h5>
                        <h6>h6.Example heading <span class="badge badge-danger">New</span></h6>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Pill Badges</h4>
                        <p class="sub-header">
                            Use the <code>.badge-pill</code> modifier class to make badges more rounded.
                        </p>

                        <span class="badge badge-primary badge-pill">Primary</span>
                        <span class="badge badge-secondary badge-pill">Secondary</span>
                        <span class="badge badge-success badge-pill">Success</span>
                        <span class="badge badge-danger badge-pill">Danger</span>
                        <span class="badge badge-warning badge-pill">Warning</span>
                        <span class="badge badge-info badge-pill">Info</span>
                        <span class="badge badge-pink badge-pill">Pink</span>
                        <span class="badge badge-blue badge-pill">Blue</span>
                        <span class="badge badge-light badge-pill">Light</span>
                        <span class="badge badge-dark badge-pill">Dark</span>

                        <h5 class="mt-4">Soft Badges</h5>
                        <p class="sub-header">
                            Use the <code>.badge-soft-*</code> modifier class to make badges soft.
                        </p>

                        <span class="badge badge-soft-primary badge-pill">Primary</span>
                        <span class="badge badge-soft-secondary badge-pill">Secondary</span>
                        <span class="badge badge-soft-success badge-pill">Success</span>
                        <span class="badge badge-soft-danger badge-pill">Danger</span>
                        <span class="badge badge-soft-warning badge-pill">Warning</span>
                        <span class="badge badge-soft-info badge-pill">Info</span>
                        <span class="badge badge-soft-pink badge-pill">Pink</span>
                        <span class="badge badge-soft-blue badge-pill">Blue</span>
                        <span class="badge badge-soft-light badge-pill">Light</span>
                        <span class="badge badge-soft-dark badge-pill">Dark</span>

                        <h5 class="mt-4">Outline Badges</h5>
                        <p class="sub-header">
                            Using the <code>.badge-outline-*</code> to quickly create a bordered badges.
                        </p>

                        <span class="badge badge-outline-primary badge-pill">Primary</span>
                        <span class="badge badge-outline-secondary badge-pill">Secondary</span>
                        <span class="badge badge-outline-success badge-pill">Success</span>
                        <span class="badge badge-outline-danger badge-pill">Danger</span>
                        <span class="badge badge-outline-warning badge-pill">Warning</span>
                        <span class="badge badge-outline-info badge-pill">Info</span>
                        <span class="badge badge-outline-pink badge-pill">Pink</span>
                        <span class="badge badge-outline-blue badge-pill">Blue</span>
                        <span class="badge badge-outline-light badge-pill">Light</span>
                        <span class="badge badge-outline-dark badge-pill">Dark</span>

                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col-->
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Contextual variations</h4>
                        <p class="sub-header">
                            Add any of the below mentioned modifier classes to change the appearance of a badge.
                            Badge can be more contextual as well. Just use regular convention e.g. <code>badge-*color</code>, <code>badge-primary</code>
                            to have badge with different background.
                        </p>

                        <span class="badge badge-primary">Primary</span>
                        <span class="badge badge-secondary">Secondary</span>
                        <span class="badge badge-success">Success</span>
                        <span class="badge badge-danger">Danger</span>
                        <span class="badge badge-warning">Warning</span>
                        <span class="badge badge-info">Info</span>
                        <span class="badge badge-pink">Pink</span>
                        <span class="badge badge-blue">Blue</span>
                        <span class="badge badge-light">Light</span>
                        <span class="badge badge-dark">Dark</span>

                        <h5 class="mt-4">Soft Badges</h5>
                        <p class="sub-header">
                            Using the <code>.badge-soft*</code> modifier class, you can have more soften variation.
                        </p>

                        <span class="badge badge-soft-primary">Primary</span>
                        <span class="badge badge-soft-secondary">Secondary</span>
                        <span class="badge badge-soft-success">Success</span>
                        <span class="badge badge-soft-danger">Danger</span>
                        <span class="badge badge-soft-warning">Warning</span>
                        <span class="badge badge-soft-info">Info</span>
                        <span class="badge badge-soft-pink">Pink</span>
                        <span class="badge badge-soft-blue">Blue</span>
                        <span class="badge badge-soft-light">Light</span>
                        <span class="badge badge-soft-dark">Dark</span>

                        <h5 class="mt-4">Outline Badges</h5>
                        <p class="sub-header">
                            Using the <code>.badge-outline-*</code> to quickly create a bordered badges.
                        </p>

                        <span class="badge badge-outline-primary">Primary</span>
                        <span class="badge badge-outline-secondary">Secondary</span>
                        <span class="badge badge-outline-success">Success</span>
                        <span class="badge badge-outline-danger">Danger</span>
                        <span class="badge badge-outline-warning">Warning</span>
                        <span class="badge badge-outline-info">Info</span>
                        <span class="badge badge-outline-pink">Pink</span>
                        <span class="badge badge-outline-blue">Blue</span>
                        <span class="badge badge-outline-light">Light</span>
                        <span class="badge badge-outline-dark">Dark</span>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Links Badges</h4>
                        <p class="sub-header">
                            Using the contextual <code>.badge-*</code> classes on an <code>&lt;a&gt;</code> element quickly provide <em>actionable</em> badges with hover and focus states.
                        </p>

                        <a href="#" class="badge badge-primary">Primary</a>
                        <a href="#" class="badge badge-secondary">Secondary</a>
                        <a href="#" class="badge badge-success">Success</a>
                        <a href="#" class="badge badge-danger">Danger</a>
                        <a href="#" class="badge badge-warning">Warning</a>
                        <a href="#" class="badge badge-info">Info</a>
                        <a href="#" class="badge badge-pink">Pink</a>
                        <a href="#" class="badge badge-blue">Blue</a>
                        <a href="#" class="badge badge-light">Light</a>
                        <a href="#" class="badge badge-dark">Dark</a>

                        <h5 class="mt-4">Soft Badges</h5>
                        <p class="sub-header">
                            Use the <code>.badge-soft-*</code> modifier class to make badges lighten.
                        </p>

                        <a href="#" class="badge badge-soft-primary">Primary</a>
                        <a href="#" class="badge badge-soft-secondary">Secondary</a>
                        <a href="#" class="badge badge-soft-success">Success</a>
                        <a href="#" class="badge badge-soft-danger">Danger</a>
                        <a href="#" class="badge badge-soft-warning">Warning</a>
                        <a href="#" class="badge badge-soft-info">Info</a>
                        <a href="#" class="badge badge-soft-pink">Pink</a>
                        <a href="#" class="badge badge-soft-blue">Blue</a>
                        <a href="#" class="badge badge-soft-light">Light</a>
                        <a href="#" class="badge badge-soft-dark">Dark</a>

                        <h5 class="mt-4">Outline Badges</h5>
                        <p class="sub-header">
                            Using the <code>.badge-outline-*</code> to quickly create a bordered badges.
                        </p>

                        <a href="#" class="badge badge-outline-primary">Primary</a>
                        <a href="#" class="badge badge-outline-secondary">Secondary</a>
                        <a href="#" class="badge badge-outline-success">Success</a>
                        <a href="#" class="badge badge-outline-danger">Danger</a>
                        <a href="#" class="badge badge-outline-warning">Warning</a>
                        <a href="#" class="badge badge-outline-info">Info</a>
                        <a href="#" class="badge badge-outline-pink">Pink</a>
                        <a href="#" class="badge badge-outline-blue">Blue</a>
                        <a href="#" class="badge badge-outline-light">Light</a>
                        <a href="#" class="badge badge-outline-dark">Dark</a>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <h4 class="header-title">Pagination</h4>
                                <p class="sub-header">
                                    Provide pagination links for your site or app with the multi-page pagination component.
                                </p>

                                <p class="mb-1 font-weight-bold">Default Pagination</p>
                                <p class="text-muted font-14">
                                    Simple pagination inspired by Rdio, great for apps and search results.
                                </p>

                                <nav>
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                                <p class="mb-1 font-weight-bold mt-4">Rounded Pagination</p>
                                <p class="text-muted font-14">
                                    Add <code> .pagination-rounded</code> for rounded pagination.
                                </p>

                                <nav>
                                    <ul class="pagination pagination-rounded">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item active"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">4</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">5</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>


                                <p class="mb-1 font-weight-bold mt-4">Sizing</p>
                                <p class="text-muted font-14">
                                    Add <code>
                                    .pagination-lg</code>
                                    or <code>
                                    .pagination-sm</code>
                                    for additional sizes.
                                </p>

                                <nav>
                                    <ul class="pagination pagination-lg">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                                <nav>
                                    <ul class="pagination pagination-sm">
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Previous">
                                                <span aria-hidden="true">&laquo;</span>
                                                <span class="sr-only">Previous</span>
                                            </a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);" aria-label="Next">
                                                <span aria-hidden="true">&raquo;</span>
                                                <span class="sr-only">Next</span>
                                            </a>
                                        </li>
                                    </ul>
                                </nav>

                                <p class="mb-1 font-weight-bold mt-4">Alignment</p>
                                <p class="text-muted font-14">
                                    Change the alignment of pagination components with flexbox utilities.
                                </p>

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript: void(0);" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>

                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="javascript: void(0);" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">1</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">2</a></li>
                                        <li class="page-item"><a class="page-link" href="javascript: void(0);">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="javascript: void(0);">Next</a>
                                        </li>
                                    </ul>
                                </nav>

                            </div>

                            <div class="col-md-6">
                                <h4 class="header-title mt-3 mt-sm-0">Breadcrumb</h4>
                                <p class="text-muted font-14">
                                    Indicate the current page’s location within a navigational hierarchy.
                                </p>

                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Home</li>
                                </ol>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item active">Library</li>
                                </ol>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                    <li class="breadcrumb-item"><a href="javascript: void(0);">Library</a></li>
                                    <li class="breadcrumb-item active">Data</li>
                                </ol>

                            </div>

                        </div>
                        <!-- end row -->

                    </div> <!-- end card-body-->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="jumbotron">
                    <h1 class="display-4">Hello, world!</h1>
                    <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                    <hr class="my-4">
                    <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                    <a class="btn btn-primary btn-lg waves-effect waves-light" href="#" role="button">Learn more</a>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->    
@endsection