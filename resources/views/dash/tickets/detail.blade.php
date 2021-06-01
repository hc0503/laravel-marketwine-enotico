@extends('layouts.vertical', ['title' => 'Support Ticket Details'])

@section('css')
    <!-- Plugins css -->
    <link href="{{asset('assets/libs/bootstrap-select/bootstrap-select.min.css')}}" rel="stylesheet" type="text/css" />
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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Apps</a></li>
                            <li class="breadcrumb-item active">Ticket Detail</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Ticket #752</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-xl-8 col-lg-7">
                <!-- project card -->
                <div class="card d-block">
                    <div class="card-body">

                        <div class="float-right">
                            <div class="form-row">
                                <div class="col-auto">
                                    <a href="{{route('second', ['tickets', 'list'])}}" class="btn btn-sm btn-link"><i class="mdi mdi-keyboard-backspace"></i> Back</a>
                                </div>
                                <div class="col-auto">
                                    <select class="custom-select custom-select-sm form">
                                        <option selected="">Watch</option>
                                        <option value="1">Remind me</option>
                                        <option value="2">Close</option>
                                    </select>
                                </div>
                            </div>
                        </div> <!-- end dropdown-->

                        <h4 class="mb-3 mt-0 font-18">Payout not received since last 3 months</h4>

                        <div class="clerfix"></div>

                        <div class="row">
                            <div class="col-md-4">
                                <!-- Ticket type -->
                                <label class="mt-2 mb-1">Ticket Type :</label>
                                <p>
                                    <i class='mdi mdi-ticket font-18 text-success mr-1 align-middle'></i> Payments
                                </p>
                                <!-- end Ticket Type -->
                            </div>
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-md-6">
                                <!-- Reported by -->
                                <label class="mt-2 mb-1">Reported By :</label>
                                <div class="media">
                                    <img src="{{asset('assets/images/users/user-9.jpg')}}" alt="Arya S"
                                        class="rounded-circle mr-2" height="24" />
                                    <div class="media-body">
                                        <p> Jonathan Andrews </p>
                                    </div>
                                </div>
                                <!-- end Reported by -->
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <!-- assignee -->
                                <label class="mt-2 mb-1">Assigned To :</label>
                                <div class="media">
                                    <img src="{{asset('assets/images/users/user-2.jpg')}}" alt="Arya S"
                                        class="rounded-circle mr-2" height="24" />
                                    <div class="media-body">
                                        <p> Thelma Fridley </p>
                                    </div>
                                </div>
                                <!-- end assignee -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-md-6">
                                <!-- assignee -->
                                <label class="mt-2 mb-1">Created On :</label>
                                <p>10 Feb 2020 <small class="text-muted">1:37 PM</small></p>
                                <!-- end assignee -->
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <!-- assignee -->
                                <label class="mt-2 mb-1">Updated On :</label>
                                <p>13 Feb 2020 <small class="text-muted">4:09 PM</small></p>
                                <!-- end assignee -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <div class="row">
                            <div class="col-md-6">
                                <!-- Status -->
                                <label class="mt-2 mb-1">Status :</label>
                                <div class="form-row">
                                    <div class="col-auto">
                                        <select class="selectpicker" data-style="btn-sm btn-light">
                                            <option>Open</option>
                                            <option>Close</option>
                                            <option>In Progress</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end Status -->
                            </div> <!-- end col -->

                            <div class="col-md-6">
                                <!-- Priority -->
                                <label class="mt-2 mb-1">Priority :</label>
                                <div class="form-row">
                                    <div class="col-auto">
                                        <select class="selectpicker" data-style="btn-sm btn-light">
                                            <option>Low</option>
                                            <option selected>Medium</option>
                                            <option>High</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end Priority -->
                            </div> <!-- end col -->
                        </div> <!-- end row -->

                        <label class="mt-4 mb-1">Overview :</label>

                        <p class="text-muted mb-0">
                            This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer. Some quick example text to build on the card title and make up the bulk of the card's content. Some quick example text to build on the card title and make up.
                        </p>

                    </div> <!-- end card-body-->
                    
                </div> <!-- end card-->

                <div class="card">
                    <div class="card-body">

                        <div class="float-right">
                            <select class="custom-select custom-select-sm ">
                                <option selected="">Recent</option>
                                <option value="1">Old</option>
                            </select>
                        </div> <!-- end dropdown-->

                        <h4 class="mb-4 mt-0 font-16">Discussion (68)</h4>

                        <div class="clerfix"></div>
                        
                        <div class="media">
                            <img class="mr-2 rounded-circle" src="{{asset('assets/images/users/user-9.jpg')}}"
                                alt="Generic placeholder image" height="32">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Jonathan Andrews <small class="text-muted float-right">3 hours ago</small></h5>
                                Nice work, makes me think of The Money Pit.

                                <br/>
                                <a href="javascript: void(0);" class="text-muted font-13 d-inline-block mt-2"><i
                                    class="mdi mdi-reply"></i> Reply</a>

                            </div>
                        </div>

                        <div class="media mt-3">
                            <img class="mr-2 rounded-circle" src="{{asset('assets/images/users/user-2.jpg')}}"
                                alt="Generic placeholder image" height="32">
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Thelma Fridley <small class="text-muted float-right">5 hours ago</small></h5>
                                It would be very nice to have.

                                <br/>
                                <a href="javascript: void(0);" class="text-muted font-13 d-inline-block mt-2"><i
                                    class="mdi mdi-reply"></i> Reply</a>
                            </div>
                        </div>

                        <div class="media mt-3">
                            <a class="pr-2" href="#">
                                <img src="{{asset('assets/images/users/user-9.jpg')}}" class="rounded-circle"
                                    alt="Generic placeholder image" height="32">
                            </a>
                            <div class="media-body">
                                <h5 class="mt-0 mb-1">Jonathan Andrews <small class="text-muted float-right">1 day ago</small></h5>
                                i'm in the middle of a timelapse animation myself! (Very different though.) Awesome stuff.

                                <br/>
                                <a href="javascript: void(0);" class="text-muted font-13 d-inline-block mt-2">
                                    <i class="mdi mdi-reply"></i> Reply
                                </a>
                            </div>
                        </div>

                        <div class="text-center mt-2">
                            <a href="javascript:void(0);" class="text-danger"><i class="mdi mdi-spin mdi-loading mr-1"></i> Load more </a>
                        </div>

                        <div class="border rounded mt-4">
                            <form action="#" class="comment-area-box">
                                <textarea rows="3" class="form-control border-0 resize-none" placeholder="Your message..."></textarea>
                                <div class="p-2 bg-light d-flex justify-content-between align-items-center">
                                    <div>
                                        <a href="#" class="btn btn-sm px-1 btn-light"><i class='mdi mdi-upload'></i></a>
                                        <a href="#" class="btn btn-sm px-1 btn-light"><i class='mdi mdi-at'></i></a>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-success"><i class='uil uil-message mr-1'></i>Submit</button>
                                </div>
                            </form>
                        </div> <!-- end .border-->

                    </div> <!-- end card-body-->
                </div>
                <!-- end card-->
            </div> <!-- end col -->

            <div class="col-xl-4 col-lg-5">

                <div class="card">
                    <div class="card-body">

                        <h5 class="card-title font-16 mb-3">Attachments</h5>

                        <div class="card mb-1 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-sm">
                                            <span class="avatar-title badge-soft-primary text-primary rounded">
                                                pdf
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col pl-0">
                                        <a href="javascript:void(0);" class="text-muted font-weight-bold">invoice-dec-2019.pdf</a>
                                        <p class="mb-0 font-12">2.3 MB</p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="javascript:void(0);" class="btn btn-link font-16 text-muted">
                                            <i class="dripicons-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-1 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-sm">
                                            <span class="avatar-title badge-soft-primary text-primary rounded">
                                                doc
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col pl-0">
                                        <a href="javascript:void(0);" class="text-muted font-weight-bold">paypal-statement.docs</a>
                                        <p class="mb-0 font-12">0.25 MB</p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="javascript:void(0);" class="btn btn-link font-16 text-muted">
                                            <i class="dripicons-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card mb-0 shadow-none border">
                            <div class="p-2">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div class="avatar-sm">
                                            <span class="avatar-title bg-secondary rounded">
                                                pdf
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col pl-0">
                                        <a href="javascript:void(0);" class="text-muted font-weight-bold">visa-credit-card.pdf</a>
                                        <p class="mb-0 font-12">1.05 MB</p>
                                    </div>
                                    <div class="col-auto">
                                        <!-- Button -->
                                        <a href="javascript:void(0);" class="btn btn-link font-16 text-muted">
                                            <i class="dripicons-download"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Plugins js-->
    <script src="{{asset('assets/libs/bootstrap-select/bootstrap-select.min.js')}}"></script>
@endsection