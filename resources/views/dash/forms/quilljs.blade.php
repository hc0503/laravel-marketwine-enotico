@extends('layouts.vertical', ['title' => 'Quilljs Editors'])

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                            <li class="breadcrumb-item active">Quilljs</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Quilljs Editor</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Snow Editor</h4>
                        <p class="sub-header">Snow is a clean, flat toolbar theme.</p>

                        <div id="snow-editor" style="height: 300px;">
                            <h3><span class="ql-size-large">Hello World!</span></h3>
                            <p><br></p>
                            <h3>This is an simple editable area.</h3>
                            <p><br></p>
                            <ul>
                                <li>
                                    Select a text to reveal the toolbar.
                                </li>
                                <li>
                                    Edit rich document on-the-fly, so elastic!
                                </li>
                            </ul>
                            <p><br></p>
                            <p>
                                End of simple area
                            </p>

                        </div> <!-- end Snow-editor-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div><!-- end col -->
        </div>
        <!-- end row -->  

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Bubble Editor</h4>
                        <p class="sub-header">Bubble is a simple tooltip based theme.</p>

                        <div id="bubble-editor" style="height: 300px;">
                            <h3><span class="ql-size-large">Hello World!</span></h3>
                            <p><br></p>
                            <h3>This is an simple editable area.</h3>
                            <p><br></p>
                            <ul>
                                <li>
                                    Select a text to reveal the toolbar.
                                </li>
                                <li>
                                    Edit rich document on-the-fly, so elastic!
                                </li>
                            </ul>
                            <p><br></p>
                            <p>
                                End of simple area
                            </p>
                        </div> <!-- end Snow-editor-->
                    </div> <!-- end card-body-->
                </div> <!-- end card-->
            </div><!-- end col -->
        </div>
        <!-- end row -->  
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/quill/quill.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/form-quilljs.init.js')}}"></script>
@endsection