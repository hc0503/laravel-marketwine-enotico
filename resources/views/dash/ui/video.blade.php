@extends('layouts.vertical', ['title' => 'Video'])

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
                            <li class="breadcrumb-item active">Video</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Embed Video</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Responsive embed video 21:9</h4>
                    <p class="sub-header">Use class <code>.embed-responsive-21by9</code></p>
                    <!-- 21:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-21by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PrUxWZiQfy4?autohide=0&showinfo=0&controls=0"></iframe>
                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Responsive embed video 16:9</h4>
                    <p class="sub-header">Use class <code>.embed-responsive-16by9</code></p>
                    <!-- 16:9 aspect ratio -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PrUxWZiQfy4?ecver=1"></iframe>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->


        <div class="row">
            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Responsive embed video 4:3</h4>
                    <p class="sub-header">Use class <code>.embed-responsive-4by3</code></p>
                    <!-- 4:3 aspect ratio -->
                    <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PrUxWZiQfy4?ecver=1"></iframe>
                    </div>
                </div>
            </div> <!-- end col -->

            <div class="col-lg-6">
                <div class="card-box">
                    <h4 class="header-title">Responsive embed video 1:1</h4>
                    <p class="sub-header">Use class <code>.embed-responsive-1by1</code></p>
                    <!-- 1:1 aspect ratio -->
                    <div class="embed-responsive embed-responsive-1by1">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/PrUxWZiQfy4?ecver=1"></iframe>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->    
@endsection