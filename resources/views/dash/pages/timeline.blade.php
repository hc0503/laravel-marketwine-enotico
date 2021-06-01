@extends('layouts.vertical', ['title' => 'Timeline'])

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Extras</a></li>
                            <li class="breadcrumb-item active">Timeline</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Timeline</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 


        <div class="row">
            <div class="col-12">
                <div class="timeline" dir="ltr">

                    <article class="timeline-item">
                        <h2 class="m-0 d-none">&nbsp;</h2>
                        <div class="time-show mt-0">
                            <a href="#" class="btn btn-primary width-lg">Today</a>
                        </div>
                    </article>

                    <article class="timeline-item timeline-item-left">
                        <div class="timeline-desk">
                            <div class="timeline-box">
                                <span class="arrow-alt"></span>
                                <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                <h4 class="mt-0 font-16">1 hour ago</h4>
                                <p class="text-muted"><small>08:25 am</small></p>
                                <p class="mb-0">Dolorum provident rerum aut hic quasi placeat iure tempora laudantium ipsa ad debitis unde? </p>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="timeline-box">
                                <span class="arrow"></span>
                                <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                <h4 class="mt-0 font-16">2 hours ago</h4>
                                <p class=" text-muted"><small>08:25 am</small></p>
                                <p class="mb-0">consectetur adipisicing elit. Iusto, optio, dolorum <a href="#">John deon</a> provident rerum aut hic quasi placeat iure tempora laudantium </p>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item timeline-item-left">
                        <div class="timeline-desk">
                            <div class="timeline-box">
                                <span class="arrow-alt"></span>
                                <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                <h4 class="mt-0 font-16">10 hours ago</h4>
                                <p class="text-muted"><small>08:25 am</small></p>
                                <p>3 new photo Uploaded on facebook fan page</p>
                                <div class="timeline-album">
                                    <a href="javascript: void(0);">
                                        <img alt="" src="{{asset('assets/images/small/img-1.jpg')}}">
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img alt="" src="{{asset('assets/images/small/img-2.jpg')}}">
                                    </a>
                                    <a href="javascript: void(0);">
                                        <img alt="" src="{{asset('assets/images/small/img-3.jpg')}}">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="timeline-box">
                                <span class="arrow"></span>
                                <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                <h4 class="mt-0 font-16">14 hours ago</h4>
                                <p class="text-muted"><small>08:25 am</small></p>
                                <p class="mb-0">Outdoor visit at California State Route 85 with John Boltana &
                                    Harry Piterson regarding to setup a new show room.</p>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item  timeline-item-left">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="timeline-box">
                                    <span class="arrow-alt"></span>
                                    <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                    <h4 class="mt-0 font-16">19 hours ago</h4>
                                    <p class="text-muted"><small>08:25 am</small></p>
                                    <p class="mb-0">Jonatha Smith added new milestone <span><a href="#">Pathek</a></span>
                                        Lorem ipsum dolor sit amet consiquest dio</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item">
                        <h2 class="m-0 d-none">&nbsp;</h2>
                        <div class="time-show">
                            <a href="#" class="btn btn-primary width-lg">Yesterday</a>
                        </div>
                    </article>

                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="timeline-box">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                    <h4 class="mt-0 font-16">07 January 2018</h4>
                                    <p class="text-muted"><small>08:25 am</small></p>
                                    <p class="mb-0">Montly Regular Medical check up at Greenland Hospital by the
                                        doctor <span><a href="#"> Johm meon </a></span>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </article>
                    <article class="timeline-item timeline-item-left">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="timeline-box">
                                    <span class="arrow-alt"></span>
                                    <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                    <h4 class="mt-0 font-16">07 January 2018</h4>
                                    <p class="text-muted"><small>08:25 am</small></p>
                                    <p class="mb-0">Download the new updates of Ubold admin dashboard</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="timeline-box">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                    <h4 class="mt-0 font-16">07 January 2018</h4>
                                    <p class="text-muted"><small>08:25 am</small></p>
                                    <p class="mb-0">Jonatha Smith added new milestone <span><a class="blue" href="#">crishtian</a></span>
                                        Lorem ipsum dolor sit amet consiquest dio</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item">
                        <h2 class="m-0 d-none">&nbsp;</h2>
                        <div class="time-show">
                            <a href="#" class="btn btn-primary width-lg">Last Month</a>
                        </div>
                    </article>

                    <article class="timeline-item timeline-item-left">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="timeline-box">
                                    <span class="arrow-alt"></span>
                                    <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                    <h4 class="mt-0 font-16">31 December 2017</h4>
                                    <p class="text-muted"><small>08:25 am</small></p>
                                    <p class="mb-0">Download the new updates of Ubold admin dashboard</p>
                                </div>
                            </div>
                        </div>
                    </article>

                    <article class="timeline-item">
                        <div class="timeline-desk">
                            <div class="panel">
                                <div class="timeline-box">
                                    <span class="arrow"></span>
                                    <span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
                                    <h4 class="mt-0 font-16">16 Decembar 2017</h4>
                                    <p class="text-muted"><small>08:25 am</small></p>
                                    <p class="mb-0">Jonatha Smith added new milestone <span><a href="#">prank</a></span>
                                        Lorem ipsum dolor sit amet consiquest dio</p>
                                </div>
                            </div>
                        </div>
                    </article>

                </div>
                <!-- end timeline -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection