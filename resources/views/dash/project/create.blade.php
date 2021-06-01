@extends('layouts.vertical', ['title' => 'Create Project'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/dropzone/dropzone.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/select2/select2.min.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{asset('assets/libs/flatpickr/flatpickr.min.css')}}" rel="stylesheet" type="text/css" />

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Projects</a></li>
                            <li class="breadcrumb-item active">Create Project</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Create Project</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-xl-6">
                                <div class="form-group">
                                    <label for="projectname">Project Name</label>
                                    <input type="text" id="projectname" class="form-control" placeholder="Enter project name">
                                </div>

                                <div class="form-group">
                                    <label for="project-overview">Project Overview</label>
                                    <textarea class="form-control" id="project-overview" rows="5" placeholder="Enter some brief about project.."></textarea>
                                </div>

                                <div class="form-group">
                                    <label>Project Privacy</label> <br/>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio1">Private</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
                                        <label class="custom-control-label" for="customRadio2">Team</label>
                                    </div>
                                    <div class="custom-control custom-radio custom-control-inline">
                                        <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input" checked>
                                        <label class="custom-control-label" for="customRadio3">Public</label>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-6">
                                        <!-- Date View -->
                                        <div class="form-group">
                                            <label>Start Date</label>
                                            <input type="text" class="form-control" data-toggle="flatpicker" placeholder="October 9, 2019">
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <!-- Date View -->
                                        <div class="form-group">
                                            <label>Due Date</label>
                                            <input type="text" class="form-control" data-toggle="flatpicker" placeholder="March 9, 2020">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="project-priority">Project Priority</label>
                                    
                                    <select class="form-control" data-toggle="select2">
                                        <option value="MD">Medium</option>
                                        <option value="HI">High</option>
                                        <option value="LW">Low</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="project-budget">Budget</label>
                                    <input type="text" id="project-budget" class="form-control" placeholder="Enter project budget">
                                </div>

                            </div> <!-- end col-->

                            <div class="col-xl-6">
                                <div class="form-group mt-3 mt-xl-0">
                                    <label for="projectname" class="mb-0">Avatar</label>
                                    <p class="text-muted font-14">Recommended thumbnail size 800x400 (px).</p>

                                    <form action="/" method="post" class="dropzone" id="myAwesomeDropzone" data-plugin="dropzone" data-previews-container="#file-previews"
                                        data-upload-preview-template="#uploadPreviewTemplate">
                                        <div class="fallback">
                                            <input name="file" type="file" />
                                        </div>

                                        <div class="dz-message needsclick">
                                            <i class="h3 text-muted dripicons-cloud-upload"></i>
                                            <h4>Drop files here or click to upload.</h4>
                                        </div>
                                    </form>

                                    <!-- Preview -->
                                    <div class="dropzone-previews mt-3" id="file-previews"></div>

                                    <!-- file preview template -->
                                    <div class="d-none" id="uploadPreviewTemplate">
                                        <div class="card mt-1 mb-0 shadow-none border">
                                            <div class="p-2">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">
                                                        <img data-dz-thumbnail src="#" class="avatar-sm rounded bg-light" alt="">
                                                    </div>
                                                    <div class="col pl-0">
                                                        <a href="javascript:void(0);" class="text-muted font-weight-bold" data-dz-name></a>
                                                        <p class="mb-0" data-dz-size></p>
                                                    </div>
                                                    <div class="col-auto">
                                                        <!-- Button -->
                                                        <a href="" class="btn btn-link btn-lg text-muted" data-dz-remove>
                                                            <i class="mdi mdi-close"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end file preview template -->
                                </div>

                                <div class="form-group mb-0">
                                    <label for="project-overview">Team Members</label>
                                    
                                    <select class="form-control" data-toggle="select2">
                                        <option>Select</option>
                                        <option value="AZ">Mary Scott</option>
                                        <option value="CO">Holly Campbell</option>
                                        <option value="ID">Beatrice Mills</option>
                                        <option value="MT">Melinda Gills</option>
                                        <option value="NE">Linda Garza</option>
                                        <option value="NM">Randy Ortez</option>
                                        <option value="ND">Lorene Block</option>
                                        <option value="UT">Mike Baker</option>
                                    </select>

                                    <div class="mt-2">
                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mat Helme" class="d-inline-block">
                                            <img src="{{asset('assets/images/users/user-6.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                        </a>

                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Michael Zenaty" class="d-inline-block">
                                            <img src="{{asset('assets/images/users/user-7.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                        </a>

                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="James Anderson" class="d-inline-block">
                                            <img src="{{asset('assets/images/users/user-8.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                        </a>

                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Lorene Block" class="d-inline-block">
                                            <img src="{{asset('assets/images/users/user-4.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                        </a>

                                        <a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="" data-original-title="Mike Baker" class="d-inline-block">
                                            <img src="{{asset('assets/images/users/user-5.jpg')}}" class="rounded-circle avatar-xs" alt="friend">
                                        </a>
                                    </div>

                                </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row -->


                        <div class="row mt-3">
                            <div class="col-12 text-center">
                                <button type="button" class="btn btn-success waves-effect waves-light m-1"><i class="fe-check-circle mr-1"></i> Create</button>
                                <button type="button" class="btn btn-light waves-effect waves-light m-1"><i class="fe-x mr-1"></i> Cancel</button>
                            </div>
                        </div>

                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!-- end row-->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/dropzone/dropzone.min.js')}}"></script>
    <script src="{{asset('assets/libs/select2/select2.min.js')}}"></script>
    <script src="{{asset('assets/libs/flatpickr/flatpickr.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/create-project.init.js')}}"></script>
@endsection