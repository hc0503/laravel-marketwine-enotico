@extends('layouts.vertical', ['title' => 'Summernote Editor'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/summernote/summernote.min.css')}}" rel="stylesheet" type="text/css" />

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Summernote</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Summernote</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Default Editor</h4>
                        <p class="sub-header">Super simple wysiwyg editor on Bootstrap</p>

                        <!-- basic summernote-->
                        <div id="summernote-basic"></div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div><!-- end col -->
        </div>
        <!-- end row -->  

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Inline Editor</h4>
                        <p class="sub-header">Air-mode give an interface without the Toolbar. To reveal popover Toolbar, select a text where you want to modify. Simply turn on <code>airMode</code> and just focus on text.</p>
                        <div id="summernote-airmode">
                            <p>This is an Air-mode editable area.</p>
                            <ul>
                                <li>Select a text to reveal the toolbar.</li>
                                <li>Edit rich document on-the-fly, so elastic!</li>
                            </ul>
                            <p>End of air-mode area</p>
                        </div> 
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div><!-- end col -->
        </div>
        <!-- end row -->  

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title m-t-0">Click to edit</h4>
                        <p class="sub-header">You can edit content on the fly.</p>
                        <div id="summernote-editmode">
                            <h5>Hello User, </h5>
                            <p>We create simple, flat & responsive admin dashboard template.</p>
                            <p>Please, write text here!</p>
                            <p class="lead">Super simple WYSIWYG editor on bootstrap.</p>
                        </div>
                        <button id="summernote-edit" class="btn btn-primary btn-sm"><i class="mdi mdi-pencil mr-1"></i> Edit</button>
                        <button id="summernote-save" class="btn btn-success btn-sm mt-2" style="display: none;"><i class="mdi mdi-content-save-outline mr-1"></i> Save Changes</button> 
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div><!-- end col -->
        </div>
        <!-- end row -->  

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0">Hint for words</h4>
                        <p class="sub-header">Summernote supports autocomplete features, hint to help typing. You can define custom hints with options. Hint options can be an object or array for multiple hints.</p>
                        <div id="summernote-hint"></div>
                        
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div><!-- end col -->
        </div>
        <!-- end row --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0">Hint for emoji</h4>
                        <p class="sub-header">For Emoji’s you can use <code>https://api.github.com/emojis</code></p>
                        <div id="summernote-emoji"></div>
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div><!-- end col -->
        </div>
        <!-- end row --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title mt-0">Hint for mentions</h4>
                        <p class="sub-header">For Mentions: [jayden, sam, alvin, david]</p>
                        <div id="summernote-hint-mentions"></div> 
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div><!-- end col -->
        </div>
        <!-- end row --> 
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/summernote/summernote.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/form-summernote.init.js')}}"></script>
@endsection