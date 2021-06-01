@extends('layouts.vertical', ['title' => 'Cropper Image Crop'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/cropper/cropper.min.css')}}" rel="stylesheet" type="text/css" />

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
                            <li class="breadcrumb-item active">Image Crop</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Image Crop</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-9">
                                <div class="img-container">
                                    <img id="image" src="{{asset('assets/images/small/img-3.jpg')}}" alt="Picture" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-xl-3">
                                <div class="image-crop-preview clearfix">
                                    <div class="img-preview preview-lg"></div>
                                    <div class="img-preview preview-md"></div>
                                    <div class="img-preview preview-sm"></div>
                                    <div class="img-preview preview-xs"></div>
                                </div>

                                <div class="docs-data">
                                    <div class="input-group input-group-sm mt-2">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text width-xs" for="dataX">X</label>
                                        </span>
                                        <input type="text" class="form-control" id="dataX" placeholder="x">
                                        <span class="input-group-append">
                                            <span class="input-group-text">px</span>
                                        </span>
                                    </div>
                                    <div class="input-group input-group-sm mt-2">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text width-xs" for="dataY">Y</label>
                                        </span>
                                        <input type="text" class="form-control" id="dataY" placeholder="y">
                                        <span class="input-group-append">
                                            <span class="input-group-text">px</span>
                                        </span>
                                    </div>
                                    <div class="input-group input-group-sm mt-2">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text width-xs" for="dataWidth">Width</label>
                                        </span>
                                        <input type="text" class="form-control" id="dataWidth" placeholder="width">
                                        <span class="input-group-append">
                                            <span class="input-group-text">px</span>
                                        </span>
                                    </div>
                                    <div class="input-group input-group-sm mt-2">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text width-xs" for="dataHeight">Height</label>
                                        </span>
                                        <input type="text" class="form-control" id="dataHeight" placeholder="height">
                                        <span class="input-group-append">
                                            <span class="input-group-text">px</span>
                                        </span>
                                    </div>
                                    <div class="input-group input-group-sm mt-2">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text width-xs" for="dataRotate">Rotate</label>
                                        </span>
                                        <input type="text" class="form-control" id="dataRotate" placeholder="rotate">
                                        <span class="input-group-append">
                                            <span class="input-group-text">deg</span>
                                        </span>
                                    </div>
                                    <div class="input-group input-group-sm mt-2">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text width-xs" for="dataScaleX">ScaleX</label>
                                        </span>
                                        <input type="text" class="form-control" id="dataScaleX" placeholder="scaleX">
                                    </div>
                                    <div class="input-group input-group-sm mt-2">
                                        <span class="input-group-prepend">
                                            <label class="input-group-text width-xs" for="dataScaleY">ScaleY</label>
                                        </span>
                                        <input type="text" class="form-control" id="dataScaleY" placeholder="scaleY">
                                    </div>
                                </div> <!-- end .doc-data -->

                            </div> <!-- end col -->
                        </div><!--end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card-->
            </div> <!-- end col-->
        </div>
        <!--end row-->


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-9 img-crop-preview-btns docs-buttons">                                        
                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-method="setDragMode" data-option="move" title="Move">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setDragMode&quot;, &quot;move&quot;)">
                                        <span class="ti-move"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-method="setDragMode" data-option="crop" title="Crop">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setDragMode&quot;, &quot;crop&quot;)">
                                        <span class="ti-cut"></span>
                                        </span>
                                    </button>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-method="zoom" data-option="0.1" title="Zoom In">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;zoom&quot;, 0.1)">
                                        <span class="ti-zoom-in"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-method="zoom" data-option="-0.1" title="Zoom Out">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;zoom&quot;, -0.1)">
                                        <span class="ti-zoom-out"></span>
                                        </span>
                                    </button>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-method="move" data-option="-10" data-second-option="0" title="Move Left">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, -10, 0)">
                                        <span class="ti-arrow-left"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-method="move" data-option="10" data-second-option="0" title="Move Right">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 10, 0)">
                                        <span class="ti-arrow-right"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-method="move" data-option="0" data-second-option="-10" title="Move Up">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 0, -10)">
                                        <span class="ti-arrow-up"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-method="move" data-option="0" data-second-option="10" title="Move Down">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;move&quot;, 0, 10)">
                                        <span class="ti-arrow-down"></span>
                                        </span>
                                    </button>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-method="rotate" data-option="-45" title="Rotate Left">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;rotate&quot;, -45)">
                                        <span class="ti-back-left"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-method="rotate" data-option="45" title="Rotate Right">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;rotate&quot;, 45)">
                                        <span class="ti-back-right"></span>
                                        </span>
                                    </button>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-method="scaleX" data-option="-1" title="Flip Horizontal">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;scaleX&quot;, -1)">
                                        <span class="ti-arrows-horizontal"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-method="scaleY" data-option="-1" title="Flip Vertical">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;scaleY&quot;, -1)">
                                        <span class="ti-arrows-vertical"></span>
                                        </span>
                                    </button>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-method="crop" title="Crop">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;crop&quot;)">
                                        <span class="ti-check"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-method="clear" title="Clear">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;clear&quot;)">
                                        <span class="ti-close"></span>
                                        </span>
                                    </button>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-method="disable" title="Disable">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;disable&quot;)">
                                        <span class="ti-lock"></span>
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-method="enable" title="Enable">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;enable&quot;)">
                                        <span class="ti-unlock"></span>
                                        </span>
                                    </button>
                                </div>

                                <div class="btn-group">
                                    <button type="button" class="btn btn-outline-secondary btn-sm" data-method="reset" title="Reset">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;reset&quot;)">
                                        <span class="ti-reload"></span>
                                        </span>
                                    </button>
                                    <label class="btn btn-outline-secondary mb-0 btn-upload btn-sm" for="inputImage" title="Upload image file">
                                        <input type="file" class="sr-only" id="inputImage" name="file" accept=".jpg,.jpeg,.png,.gif,.bmp,.tiff">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="Import image with Blob URLs">
                                        <span class="ti-upload"></span>
                                        </span>
                                    </label>
                                    <button type="button" class="btn btn-danger btn-sm" data-method="destroy" title="Destroy">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;destroy&quot;)">
                                        <span class="ti-power-off"></span>
                                        </span>
                                    </button>
                                </div>
                                <br/>

                                <div class="btn-group btn-group-crop">
                                    <button type="button" class="btn btn-success btn-sm" data-method="getCroppedCanvas" data-option="{ &quot;maxWidth&quot;: 4096, &quot;maxHeight&quot;: 4096 }">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { maxWidth: 4096, maxHeight: 4096 })">
                                        Get Cropped Canvas
                                    </span>
                                    </button>
                                    <button type="button" class="btn btn-success btn-sm" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 160, &quot;height&quot;: 90 }">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 160, height: 90 })">
                                        160&times;90
                                        </span>
                                    </button>
                                    <button type="button" class="btn btn-success btn-sm" data-method="getCroppedCanvas" data-option="{ &quot;width&quot;: 320, &quot;height&quot;: 180 }">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCroppedCanvas&quot;, { width: 320, height: 180 })">
                                        320&times;180
                                        </span>
                                    </button>
                                </div>
                            
                                <div class="modal fade docs-cropped" id="getCroppedCanvasModal" aria-hidden="true" aria-labelledby="getCroppedCanvasTitle" role="dialog" tabindex="-1">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="getCroppedCanvasTitle">Cropped</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body text-center"></div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">Close</button>
                                                <a class="btn btn-outline-info" id="download" href="javascript:void(0);" download="cropped.jpg')}}">Download</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <button type="button" class="btn btn-outline-secondary btn-sm" data-method="getData" data-option data-target="#putData">
                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getData&quot;)">
                                    Get Data
                                    </span>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-sm" data-method="setData" data-target="#putData">
                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setData&quot;, data)">
                                    Set Data
                                    </span>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-sm" data-method="getContainerData" data-option data-target="#putData">
                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getContainerData&quot;)">
                                    Get Container Data
                                    </span>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-sm" data-method="getImageData" data-option data-target="#putData">
                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getImageData&quot;)">
                                    Get Image Data
                                    </span>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-sm" data-method="getCanvasData" data-option data-target="#putData">
                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCanvasData&quot;)">
                                    Get Canvas Data
                                    </span>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-sm" data-method="setCanvasData" data-target="#putData">
                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setCanvasData&quot;, data)">
                                    Set Canvas Data
                                    </span>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-sm" data-method="getCropBoxData" data-option data-target="#putData">
                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;getCropBoxData&quot;)">
                                    Get Crop Box Data
                                    </span>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-sm" data-method="setCropBoxData" data-target="#putData">
                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="$().cropper(&quot;setCropBoxData&quot;, data)">
                                    Set Crop Box Data
                                    </span>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-sm" data-method="moveTo" data-option="0">
                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="cropper.moveTo(0)">
                                    Move to [0,0]
                                    </span>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-sm" data-method="zoomTo" data-option="1">
                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="cropper.zoomTo(1)">
                                    Zoom to 100%
                                    </span>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-sm" data-method="rotateTo" data-option="180">
                                    <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="cropper.rotateTo(180)">
                                    Rotate 180°
                                    </span>
                                </button>
                                <button type="button" class="btn btn-outline-secondary btn-sm" data-method="scale" data-option="-2" data-second-option="-1">
                                    <span class="docs-tooltip" data-toggle="tooltip" title="cropper.scale(-2, -1)">
                                    Scale (-2, -1)
                                    </span>
                                </button>
                                <textarea class="form-control" id="putData" rows="1" placeholder="Get data to here or set data with this value"></textarea>
                            </div> <!-- end col -->

                            <div class="col-xl-3 docs-toggles">                                            
                                <div class="btn-group btn-group-sm d-flex flex-nowrap" data-toggle="buttons">
                                    <label class="btn btn-outline-secondary active">
                                        <input type="radio" class="sr-only" id="aspectRatio0" name="aspectRatio" value="1.7777777777777777">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 16 / 9">
                                        16:9
                                        </span>
                                    </label>
                                    <label class="btn btn-outline-secondary">
                                        <input type="radio" class="sr-only" id="aspectRatio1" name="aspectRatio" value="1.3333333333333333">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 4 / 3">
                                        4:3
                                        </span>
                                    </label>
                                    <label class="btn btn-outline-secondary">
                                        <input type="radio" class="sr-only" id="aspectRatio2" name="aspectRatio" value="1">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 1 / 1">
                                        1:1
                                        </span>
                                    </label>
                                    <label class="btn btn-outline-secondary">
                                        <input type="radio" class="sr-only" id="aspectRatio3" name="aspectRatio" value="0.6666666666666666">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: 2 / 3">
                                        2:3
                                        </span>
                                    </label>
                                    <label class="btn btn-outline-secondary">
                                        <input type="radio" class="sr-only" id="aspectRatio4" name="aspectRatio" value="NaN">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="aspectRatio: NaN">
                                        Free
                                        </span>
                                    </label>
                                </div>

                                <div class="btn-group btn-group-sm d-flex flex-nowrap" data-toggle="buttons">
                                    <label class="btn btn-outline-secondary active">
                                        <input type="radio" class="sr-only" id="viewMode0" name="viewMode" value="0" checked>
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="View Mode 0">
                                        VM0
                                        </span>
                                    </label>
                                    <label class="btn btn-outline-secondary">
                                        <input type="radio" class="sr-only" id="viewMode1" name="viewMode" value="1">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="View Mode 1">
                                        VM1
                                        </span>
                                    </label>
                                        <label class="btn btn-outline-secondary">
                                        <input type="radio" class="sr-only" id="viewMode2" name="viewMode" value="2">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="View Mode 2">
                                        VM2
                                        </span>
                                    </label>
                                    <label class="btn btn-outline-secondary">
                                        <input type="radio" class="sr-only" id="viewMode3" name="viewMode" value="3">
                                        <span class="docs-tooltip" data-toggle="tooltip" data-animation="false" title="View Mode 3">
                                        VM3
                                        </span>
                                    </label>
                                </div>

                                <div class="dropdown dropup docs-options">
                                    <button type="button" class="btn btn-outline-info btn-block dropdown-toggle" id="toggleOptions" data-toggle="dropdown" aria-expanded="true">
                                        Toggle Options <i class="mdi mdi-chevron-up"></i>
                                    </button>
                                    <ul class="dropdown-menu docs-drop-options" aria-labelledby="toggleOptions" role="menu">
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox0" type="checkbox" name="responsive" checked>
                                                <label for="checkbox0">
                                                    Responsive
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox1" type="checkbox" name="restore" checked>
                                                <label for="checkbox1">
                                                    Restore
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox2" type="checkbox" name="checkCrossOrigin" checked>
                                                <label for="checkbox2">
                                                    CheckCrossOrigin
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox3" type="checkbox" name="checkOrientation" checked>
                                                <label for="checkbox3">
                                                    CheckOrientation
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox4" type="checkbox" name="modal" checked>
                                                <label for="checkbox4">
                                                    Modal
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox5" type="checkbox" name="guides" checked>
                                                <label for="checkbox5">
                                                    Guides
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox6" type="checkbox" name="center" checked>
                                                <label for="checkbox6">
                                                    Center
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox7" type="checkbox" name="highlight" checked>
                                                <label for="checkbox7">
                                                    Highlight
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox8" type="checkbox" name="background" checked>
                                                <label for="checkbox8">
                                                    Background
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox9" type="checkbox" name="autoCrop" checked>
                                                <label for="checkbox9">
                                                    AutoCrop
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox10" type="checkbox" name="movable" checked>
                                                <label for="checkbox10">
                                                    Movable
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox11" type="checkbox" name="rotatable" checked>
                                                <label for="checkbox11">
                                                    Rotatable
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox12" type="checkbox" name="scalable" checked>
                                                <label for="checkbox12">
                                                    Scalable
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox13" type="checkbox" name="zoomable" checked>
                                                <label for="checkbox13">
                                                    Zoomable
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox14" type="checkbox" name="zoomOnTouch" checked>
                                                <label for="checkbox14">
                                                    ZoomOnTouch
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox15" type="checkbox" name="zoomOnWheel" checked>
                                                <label for="checkbox15">
                                                    ZoomOnWheel
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox16" type="checkbox" name="cropBoxMovable" checked>
                                                <label for="checkbox16">
                                                    CropBoxMovable
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox17" type="checkbox" name="cropBoxResizable" checked>
                                                <label for="checkbox17">
                                                    CropBoxResizable
                                                </label>
                                            </div>
                                        </li>
                                        <li class="dropdown-item">
                                            <div class="checkbox">
                                                <input id="checkbox18" type="checkbox" name="toggleDragModeOnDblclick" checked>
                                                <label for="checkbox18">
                                                    ToggleDragModeOnDblclick
                                                </label>
                                            </div>
                                        </li>
                                    </ul>
                                </div> <!-- end .docs-options -->

                            </div> <!-- end col -->
                        </div><!--end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div><!--end row-->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/cropper/cropper.min.js')}}"></script>

    <!-- Page js-->
    <script src="{{asset('assets/js/pages/form-imagecrop.init.js')}}"></script>
@endsection