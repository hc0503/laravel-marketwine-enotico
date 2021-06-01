@extends('layouts.vertical', ['title' => 'Email Inbox'])

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
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Email</a></li>
                            <li class="breadcrumb-item active">Inbox</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Inbox</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 


        <div class="row">

            <!-- Right Sidebar -->
            <div class="col-12">
                <div class="card-box">
                    <!-- Left sidebar -->
                    <div class="inbox-leftbar">

                        <a href="{{route('second', ['email', 'compose'])}}" class="btn btn-danger btn-block waves-effect waves-light">Compose</a>

                        <div class="mail-list mt-4">
                            <a href="javascript: void(0);" class="text-danger font-weight-bold"><i class="dripicons-inbox mr-2"></i>Inbox<span class="badge badge-soft-danger float-right ml-2">7</span></a>
                            <a href="javascript: void(0);"><i class="dripicons-star mr-2"></i>Starred</a>
                            <a href="javascript: void(0);"><i class="dripicons-clock mr-2"></i>Snoozed</a>
                            <a href="javascript: void(0);"><i class="dripicons-document mr-2"></i>Draft<span class="badge badge-soft-info float-right ml-2">32</span></a>
                            <a href="javascript: void(0);"><i class="dripicons-exit mr-2"></i>Sent Mail</a>
                            <a href="javascript: void(0);"><i class="dripicons-trash mr-2"></i>Trash</a>
                            <a href="javascript: void(0);"><i class="dripicons-tag mr-2"></i>Important</a>
                            <a href="javascript: void(0);"><i class="dripicons-warning mr-2"></i>Spam</a>
                        </div>

                        <h6 class="mt-4">Labels</h6>

                        <div class="list-group b-0 mail-list">
                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-info mr-2"></span>Web App</a>
                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-warning mr-2"></span>Recharge</a>
                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-dark mr-2"></span>Wallet Balance</a>
                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-primary mr-2"></span>Friends</a>
                            <a href="#" class="list-group-item border-0"><span class="mdi mdi-circle text-success mr-2"></span>Family</a>
                        </div>

                    </div>
                    <!-- End Left sidebar -->

                    <div class="inbox-rightbar">

                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-archive font-18"></i></button>
                            <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-alert-octagon font-18"></i></button>
                            <button type="button" class="btn btn-sm btn-light waves-effect"><i class="mdi mdi-delete-variant font-18"></i></button>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-folder font-18"></i>
                                <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu">
                                <span class="dropdown-header">Move to</span>
                                <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                            </div>
                        </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-label font-18"></i>
                                <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu">
                                <span class="dropdown-header">Label as:</span>
                                <a class="dropdown-item" href="javascript: void(0);">Updates</a>
                                <a class="dropdown-item" href="javascript: void(0);">Social</a>
                                <a class="dropdown-item" href="javascript: void(0);">Promotions</a>
                                <a class="dropdown-item" href="javascript: void(0);">Forums</a>
                            </div>
                        </div>

                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-light dropdown-toggle waves-effect" data-toggle="dropdown" aria-expanded="false">
                                <i class="mdi mdi-dots-horizontal font-18"></i> More
                                <i class="mdi mdi-chevron-down"></i>
                            </button>
                            <div class="dropdown-menu">
                                <span class="dropdown-header">More Option :</span>
                                <a class="dropdown-item" href="javascript: void(0);">Mark as Unread</a>
                                <a class="dropdown-item" href="javascript: void(0);">Add to Tasks</a>
                                <a class="dropdown-item" href="javascript: void(0);">Add Star</a>
                                <a class="dropdown-item" href="javascript: void(0);">Mute</a>
                            </div>
                        </div>

                        <div class="mt-3">
                            <ul class="message-list">
                                <li class="unread">
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk1">
                                            <label for="chk1" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star text-warning"></span>
                                        <a href="" class="title">Lucas Kriebel (via Twitter)</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Lucas Kriebel (@LucasKriebel) has sent
                                            you a direct message on Twitter! &nbsp;&ndash;&nbsp;
                                            <span class="teaser">@LucasKriebel - Very cool :) Nicklas, You have a new direct message.</span>
                                        </a>
                                        <div class="date">11:49 am</div>
                                    </div>
                                </li>

                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk3">
                                            <label for="chk3" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star"></span>
                                        <a href="" class="title">Randy, me (5)</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Last pic over my village &nbsp;&ndash;&nbsp;
                                            <span class="teaser">Yeah i'd like that! Do you remember the video you showed me of your train ride between Colombo and Kandy? The one with the mountain view? I would love to see that one again!</span>
                                        </a>
                                        <div class="date">5:01 am</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk4">
                                            <label for="chk4" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star text-warning"></span>
                                        <a href="" class="title">Andrew Zimmer</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Mochila Beta: Subscription Confirmed
                                            &nbsp;&ndash;&nbsp; <span class="teaser">You've been confirmed! Welcome to the ruling class of the inbox. For your records, here is a copy of the information you submitted to us...</span>
                                        </a>
                                        <div class="date">Mar 8</div>
                                    </div>
                                </li>
                                <li class="unread">
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk5">
                                            <label for="chk5" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star"></span>
                                        <a href="" class="title">Infinity HR</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Sveriges Hetaste sommarjobb &nbsp;&ndash;&nbsp;
                                            <span class="teaser">Hej Nicklas Sandell! Vi vill bjuda in dig till "First tour 2014", ett rekryteringsevent som erbjuder jobb på 16 semesterorter iSverige.</span>
                                        </a>
                                        <div class="date">Mar 8</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk6">
                                            <label for="chk6" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star"></span>
                                        <a href="" class="title">Web Support Dennis</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Re: New mail settings &nbsp;&ndash;&nbsp;
                                            <span class="teaser">Will you answer him asap?</span>
                                        </a>
                                        <div class="date">Mar 7</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk7">
                                            <label for="chk7" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star text-warning"></span>
                                        <a href="" class="title">me, Peter (2)</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Off on Thursday &nbsp;&ndash;&nbsp;
                                            <span class="teaser">Eff that place, you might as well stay here with us instead! Sent from my iPhone 4 &gt; 4 mar 2014 at 5:55 pm</span>
                                        </a>
                                        <div class="date">Mar 4</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk8">
                                            <label for="chk8" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star"></span>
                                        <a href="" class="title">Medium</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">This Week's Top Stories &nbsp;&ndash;&nbsp;
                                            <span class="teaser">Our top pick for you on Medium this week The Man Who Destroyed America’s Ego</span>
                                        </a>
                                        <div class="date">Feb 28</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk9">
                                            <label for="chk9" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star text-warning"></span>
                                        <a href="" class="title">Death to Stock</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Montly High-Res Photos &nbsp;&ndash;&nbsp;
                                            <span class="teaser">To create this month's pack, we hosted a party with local musician Jared Mahone here in Columbus, Ohio.</span>
                                        </a>
                                        <div class="date">Feb 28</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk10">
                                            <label for="chk10" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star"></span>
                                        <a href="" class="title">Revibe</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Weekend on Revibe &nbsp;&ndash;&nbsp;
                                            <span class="teaser">Today's Friday and we thought maybe you want some music inspiration for the weekend. Here are some trending tracks and playlists we think you should give a listen!</span>
                                        </a>
                                        <div class="date">Feb 27</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk11">
                                            <label for="chk11" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star"></span>
                                        <a href="" class="title">Erik, me (5)</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Regarding our meeting &nbsp;&ndash;&nbsp;
                                            <span class="teaser">That's great, see you on Thursday!</span>
                                        </a>
                                        <div class="date">Feb 24</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk12">
                                            <label for="chk12" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star text-warning"></span>
                                        <a href="" class="title">KanbanFlow</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Task assigned: Clone ARP's website
                                            &nbsp;&ndash;&nbsp; <span class="teaser">You have been assigned a task by Alex@Work on the board Web.</span>
                                        </a>
                                        <div class="date">Feb 24</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk13">
                                            <label for="chk13" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star"></span>
                                        <a href="" class="title">Tobias Berggren</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Let's go fishing! &nbsp;&ndash;&nbsp;
                                            <span class="teaser">Hey, You wanna join me and Fred at the lake tomorrow? It'll be awesome.</span>
                                        </a>
                                        <div class="date">Feb 23</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk14">
                                            <label for="chk14" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star text-warning"></span>
                                        <a href="" class="title">Charukaw, me (7)</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Hey man &nbsp;&ndash;&nbsp; <span
                                                class="teaser">Nah man sorry i don't. Should i get it?</span>
                                        </a>
                                        <div class="date">Feb 23</div>
                                    </div>
                                </li>
                                <li class="unread">
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk15">
                                            <label for="chk15" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star text-warning"></span>
                                        <a href="" class="title">me, Peter (5)</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Home again! &nbsp;&ndash;&nbsp; <span
                                                class="teaser">That's just perfect! See you tomorrow.</span>
                                        </a>
                                        <div class="date">Feb 21</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk16">
                                            <label for="chk16" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star"></span>
                                        <a href="" class="title">Stack Exchange</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">1 new items in your Stackexchange inbox
                                            &nbsp;&ndash;&nbsp; <span class="teaser">The following items were added to your Stack Exchange global inbox since you last checked it.</span>
                                        </a>
                                        <div class="date">Feb 21</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk17">
                                            <label for="chk17" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star text-warning"></span>
                                        <a href="" class="title">Google Drive Team</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">You can now use your storage in Google
                                            Drive &nbsp;&ndash;&nbsp; <span class="teaser">Hey Nicklas Sandell! Thank you for purchasing extra storage space in Google Drive.</span>
                                        </a>
                                        <div class="date">Feb 20</div>
                                    </div>
                                </li>
                                <li class="unread">
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk18">
                                            <label for="chk18" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star"></span>
                                        <a href="" class="title">me, Susanna (11)</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Train/Bus &nbsp;&ndash;&nbsp; <span
                                                class="teaser">Yes ok, great! I'm not stuck in Stockholm anymore, we're making progress.</span>
                                        </a>
                                        <div class="date">Feb 19</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk19">
                                            <label for="chk19" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star"></span>
                                        <a href="" class="title">Peter, me (3)</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Hello &nbsp;&ndash;&nbsp; <span
                                                class="teaser">Trip home from Colombo has been arranged, then Jenna will come get me from Stockholm. :)</span>
                                        </a>
                                        <div class="date">Mar. 6</div>
                                    </div>
                                </li>
                                <li>
                                    <div class="col-mail col-mail-1">
                                        <div class="checkbox-wrapper-mail">
                                            <input type="checkbox" id="chk20">
                                            <label for="chk20" class="toggle"></label>
                                        </div>
                                        <span class="star-toggle far fa-star"></span>
                                        <a href="" class="title">me, Susanna (7)</a>
                                    </div>
                                    <div class="col-mail col-mail-2">
                                        <a href="" class="subject">Since you asked... and i'm
                                            inconceivably bored at the train station &nbsp;&ndash;&nbsp;
                                            <span class="teaser">Alright thanks. I'll have to re-book that somehow, i'll get back to you.</span>
                                        </a>
                                        <div class="date">Mar. 6</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <!-- end .mt-4 -->

                        <div class="row">
                            <div class="col-7 mt-1">
                                Showing 1 - 20 of 289
                            </div> <!-- end col-->
                            <div class="col-5">
                                <div class="btn-group float-right">
                                    <button type="button" class="btn btn-light btn-sm"><i class="mdi mdi-chevron-left"></i></button>
                                    <button type="button" class="btn btn-info btn-sm"><i class="mdi mdi-chevron-right"></i></button>
                                </div>
                            </div> <!-- end col-->
                        </div>
                        <!-- end row-->
                    </div> 
                    <!-- end inbox-rightbar-->

                    <div class="clearfix"></div>
                </div> <!-- end card-box -->

            </div> <!-- end Col -->
        </div><!-- End row -->
        
    </div> <!-- container -->
@endsection

@section('script')
    <!-- Page js-->
    <script src="{{asset('assets/js/pages/inbox.js')}}"></script>
@endsection