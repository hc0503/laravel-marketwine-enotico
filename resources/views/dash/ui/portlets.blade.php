@extends('layouts.vertical', ['title' => 'Portlets'])

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
                            <li class="breadcrumb-item active">Portlets</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Portlets</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-lg-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase1" role="button" aria-expanded="false" aria-controls="cardCollpase1"><i class="mdi mdi-minus"></i></a>
                            <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h5 class="card-title mb-0">Card title</h5>

                        <div id="cardCollpase1" class="collapse pt-3 show">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                            put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                        </div>
                    </div>
                </div> <!-- end card-->
            </div><!-- end col -->

            <div class="col-lg-4">
                <!-- Portlet card -->
                <div class="card bg-primary text-white">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase2" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                            <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h5 class="card-title mb-0 text-white">Card title</h5>

                        <div id="cardCollpase2" class="collapse pt-3 show">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                            put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                        </div>
                    </div>
                </div> <!-- end card-->
            </div><!-- end col -->

            <div class="col-lg-4">
                <!-- Portlet card -->
                <div class="card bg-success text-white">
                    <div class="card-body">
                        <div class="card-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase3" role="button" aria-expanded="false" aria-controls="cardCollpase3"><i class="mdi mdi-minus"></i></a>
                            <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h5 class="card-title mb-0 text-white">Card title</h5>

                        <div id="cardCollpase3" class="collapse pt-3 show">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                            put a bird on it squid single-origin coffee nulla assumenda shoreditch et.
                        </div>
                    </div>
                </div> <!-- end card-->
            </div><!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-header bg-danger py-3 text-white">
                        <div class="card-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase4" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                            <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h5 class="card-title mb-0 text-white">Card title</h5>
                    </div>
                    <div id="cardCollpase4" class="collapse show">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                            put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                        </div>
                    </div>
                </div> <!-- end card-->
            </div><!-- end col -->

            <div class="col-lg-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-header bg-blue py-3 text-white">
                        <div class="card-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase5" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                            <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h5 class="card-title mb-0 text-white">Card title</h5>
                    </div>
                    <div id="cardCollpase5" class="collapse show">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                            put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                        </div>
                    </div>
                </div> <!-- end card-->
            </div><!-- end col -->

            <div class="col-lg-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-header bg-warning py-3 text-white">
                        <div class="card-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase6" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                            <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h5 class="card-title mb-0 text-white">Card title</h5>
                    </div>
                    <div id="cardCollpase6" class="collapse show">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                            put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                        </div>
                    </div>
                </div> <!-- end card-->
            </div><!-- end col -->
        </div>
        <!-- end row -->

        <div class="row">
            <div class="col-lg-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-header bg-info py-3 text-white">
                        <div class="card-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase7" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                            <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h5 class="card-title mb-0 text-white">Card title</h5>
                    </div>
                    <div id="cardCollpase7" class="collapse show">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                            put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                        </div>
                    </div>
                </div> <!-- end card-->
            </div><!-- end col -->

            <div class="col-lg-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-header bg-dark py-3 text-white">
                        <div class="card-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase8" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                            <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h5 class="card-title mb-0 text-white">Card title</h5>
                    </div>
                    <div id="cardCollpase8" class="collapse show">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                            put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                        </div>
                    </div>
                </div> <!-- end card-->
            </div><!-- end col -->

            <div class="col-lg-4">
                <!-- Portlet card -->
                <div class="card">
                    <div class="card-header bg-pink py-3 text-white">
                        <div class="card-widgets">
                            <a href="javascript:;" data-toggle="reload"><i class="mdi mdi-refresh"></i></a>
                            <a data-toggle="collapse" href="#cardCollpase9" role="button" aria-expanded="false" aria-controls="cardCollpase2"><i class="mdi mdi-minus"></i></a>
                            <a href="#" data-toggle="remove"><i class="mdi mdi-close"></i></a>
                        </div>
                        <h5 class="card-title mb-0 text-white">Card title</h5>
                    </div>
                    <div id="cardCollpase9" class="collapse show">
                        <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute,
                            non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua
                            put a bird on it squid single-origin coffee nulla assumenda shoreditch et. 
                        </div>
                    </div>
                </div> <!-- end card-->
            </div><!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->    
@endsection
