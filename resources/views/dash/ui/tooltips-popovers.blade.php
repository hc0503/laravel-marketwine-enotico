@extends('layouts.vertical', ['title' => 'Tooltips & Popovers'])

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
                            <li class="breadcrumb-item active">Tooltips & Popovers</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Tooltips & Popovers</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title">Popovers</h4>
                    <p class="sub-header">Add small overlays of content, like those on
                        the iPad, to any element for housing secondary information.</p>


                    <div class="button-list">
                        <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover" data-placement="top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                            Popover on top
                        </button>

                        <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover" data-placement="bottom" data-content="Vivamus
                        sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                            Popover on bottom
                        </button>

                        <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover" data-placement="right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="">
                            Popover on right
                        </button>

                        <button type="button" class="btn btn-light" data-container="body" title="" data-toggle="popover" data-placement="left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus." data-original-title="Popover title">
                            Popover on left
                        </button>

                        <button type="button" tabindex="0" class="btn btn-primary" data-toggle="popover" data-trigger="focus" title="" data-content="And here's some amazing content. It's very engaging. Right?" data-original-title="Dismissible popover">
                            Dismissible popover
                        </button>
                    </div>
                </div> <!-- end card-box -->
            </div> <!-- end col-->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-12">
                <div class="card-box">
                    <h4 class="header-title m-t-0">Tooltips</h4>
                    <p class="sub-header">Four options are available: top, right, bottom,
                        and left aligned.</p>

                    <div class="button-list">

                        <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="top" title="" data-original-title="Tooltip on top">Tooltip on top</button>

                        <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="Tooltip on bottom">Tooltip on bottom</button>

                        <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="left" title="Tooltip on left">Tooltip on left</button>

                        <button type="button" class="btn btn-light" data-toggle="tooltip" data-placement="right" title="" data-original-title="Tooltip on right">Tooltip on right</button>
                    </div>

                    <h4 class="header-title mt-4">Tippy Tooltips</h4>
                    <p class="sub-header">A highly customizable vanilla JS tooltip & popover library</p>

                    <div class="row">
                        <div class="col-xl-6">
                            <p class="mb-1 h5">Placement</p>
                            <p class="text-muted font-13 mb-3">
                                The default tippy tooltip looks like this when given no options. It has a nifty backdrop filling animation!
                            </p>
                            <div class="button-list" >
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-placement="top">Top</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-placement="bottom">Bottom</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-placement="left">Left</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-placement="right">Right</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-placement="top-start">Top-Start</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-placement="top-end">Top-End</button>
                            </div>    
                            
                            <p class="mb-1 h5 mt-4">Arrows</p>
                            <p class="text-muted font-13 mb-3">
                                Arrows point toward the reference element. 
                            </p>
                            <div class="button-list" >
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-arrow="true" data-tippy-animation="fade">Default</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-arrow="true" data-tippy-arrowType="round" data-tippy-animation="fade">Round</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-arrow="true" data-tippy-arrowTransform="scaleX(1.5)" data-tippy-animation="fade">Wide</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-arrow="true" data-tippy-arrowTransform="scaleX(0.75)" data-tippy-animation="fade">Skinny</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-arrow="true" data-tippy-arrowTransform="scale(0.75)" data-tippy-animation="fade">Small</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-arrow="true" data-tippy-arrowTransform="scale(1.35)" data-tippy-animation="fade">Large</button>            
                            </div>  
                            
                            <p class="mb-1 mt-4 h5">Interactivity</p>
                            <p class="text-muted font-13 mb-3">
                                Tooltips can be interactive, meaning they won't hide when you hover over or click on them.
                            </p>
                            <div class="button-list" >
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-interactive="true">Interactive (hover)</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-interactive="true" data-tippy-trigger="click">Interactive (click)</button>                       
                            </div> 

                            <p class="mb-1 mt-4 h5">Duration</p>
                            <p class="text-muted font-13 mb-3">
                                A tippy can have different transition durations.
                            </p>
                            <div class="button-list" >
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-duration="0">0ms</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-duration="200">200ms</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-duration="1000">1000ms</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-duration="[500, 200]">[500ms, 200ms]</button>                                 
                            </div>  
                        </div> <!-- end col-->

                        <div class="col-xl-6 mt-4 mt-xl-0">
                            <p class="mb-1 h5">Animations</p>
                            <p class="text-muted font-13 mb-3">
                                Tooltips can have different types of animations.
                            </p>
                            <div class="button-list" >
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-animation="shift-away" data-tippy-arrow="true">Shift away</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-animation="shift-toward" data-tippy-arrow="true">Shift toward</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-animation="fade" data-tippy-arrow="true">Fade</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-animation="scale" data-tippy-arrow="true">Scale</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-animation="perspective" data-tippy-arrow="true">Perspective</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-animation="shift-away" data-tippy-inertia="true" data-tippy-duration="[600, 300]" data-tippy-arrow="true">Inertia (shift-away)</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-animation="shift-toward" data-tippy-inertia="true" data-tippy-duration="[600, 300]" data-tippy-arrow="true">Inertia (shift-toward)</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-animation="scale" data-tippy-inertia="true" data-tippy-duration="[600, 300]" data-tippy-arrow="true">Inertia (scale)</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-animation="perspective" data-tippy-inertia="true" data-tippy-duration="[600, 300]" data-tippy-arrow="true">Inertia (perspective)</button>                      
                            </div>    
                            
                            <p class="mb-1 h5 mt-4">Themes</p>
                            <p class="text-muted font-13 mb-3">
                                A tippy can have any kind of theme you want! Creating a custom theme is a breeze.
                            </p>
                            <div class="button-list" >
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="See-through!" data-plugin="tippy" data-tippy-theme="translucent">Translucent</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="A light Tooltip !" data-plugin="tippy" data-tippy-theme="light" data-tippy-arrow="true">Light</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="Awesome Gradient !" data-plugin="tippy" data-tippy-theme="gradient">Gradient</button>
                            </div>  
                            
                            <p class="mb-1 mt-4 h5">Misc</p>
                            <p class="text-muted font-13 mb-3">
                                Tippy has a ton of features, and it's constantly improving.
                            </p>
                            <div class="button-list" >
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="How cool&#39;s this?!" data-plugin="tippy" data-tippy-followCursor="true" data-tippy-arrow="true" data-tippy-animation="fade">Follow cursor</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="You&#39;ll need a touch device for this one." data-plugin="tippy" data-tippy-touchHold="true">Touch &amp; Hold</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m hugging the tooltip!" data-plugin="tippy" data-tippy-distance="0" data-tippy-animation="fade">Distance</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="10px x-axis, 50px y-axis offset" data-plugin="tippy" data-tippy-offset="10, 50">Offset</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-size="small">Small</button>
                                <button class="btn btn-sm btn-primary waves-effect waves-light" title="I&#39;m a Tippy tooltip!" data-plugin="tippy" data-tippy-size="large">Large</button>                                   
                            </div> 

                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->

                </div> <!-- end card-box -->
            </div> <!-- end col-->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/tippy.js/tippy.js.min.js')}}"></script>
@endsection