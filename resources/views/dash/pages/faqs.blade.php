@extends('layouts.vertical', ['title' => 'FAQs'])

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
                            <li class="breadcrumb-item active">FAQs</li>
                        </ol>
                    </div>
                    <h4 class="page-title">FAQs</h4>
                </div>
            </div>
        </div>     
        <!-- end page title -->
        
        
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <i class="h1 mdi mdi-comment-multiple-outline text-muted"></i>
                    <h3 class="mb-3">Frequently Asked Questions</h3>
                    <p class="text-muted"> Nisi praesentium similique totam odio obcaecati, reprehenderit,
                        dignissimos rem temporibus ea inventore alias!<br/> Beatae animi nemo ea
                        tempora, temporibus laborum facilis ut!</p>

                    <button type="button" class="btn btn-success waves-effect waves-light mt-2 mr-1"><i class="mdi mdi-email-outline mr-1"></i> Email us your question</button>
                    <button type="button" class="btn btn-primary waves-effect waves-light mt-2"><i class="mdi mdi-twitter mr-1"></i> Send us a tweet</button>

                </div>
            </div><!-- end col -->
        </div><!-- end row -->


        <div class="row pt-5">
            <div class="col-lg-5 offset-lg-1">
                <!-- Question/Answer -->
                <div>
                    <div class="faq-question-q-box">Q.</div>
                    <h4 class="faq-question" data-wow-delay=".1s">What is Lorem Ipsum?</h4>
                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>

                <!-- Question/Answer -->
                <div>
                    <div class="faq-question-q-box">Q.</div>
                    <h4 class="faq-question">Why use Lorem Ipsum?</h4>
                    <p class="faq-answer mb-4">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                </div>

                <!-- Question/Answer -->
                <div>
                    <div class="faq-question-q-box">Q.</div>
                    <h4 class="faq-question">How many variations exist?</h4>
                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>

                <!-- Question/Answer -->
                <div>
                    <div class="faq-question-q-box">Q.</div>
                    <h4 class="faq-question" data-wow-delay=".1s">What is Lorem Ipsum?</h4>
                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>

            </div>
            <!--/col-md-5 -->

            <div class="col-lg-5">
                <!-- Question/Answer -->
                <div>
                    <div class="faq-question-q-box">Q.</div>
                    <h4 class="faq-question">Is safe use Lorem Ipsum?</h4>
                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>

                <!-- Question/Answer -->
                <div>
                    <div class="faq-question-q-box">Q.</div>
                    <h4 class="faq-question">When can be used?</h4>
                    <p class="faq-answer mb-4">Lorem ipsum dolor sit amet, in mea nonumes dissentias dissentiunt, pro te solet oratio iriure. Cu sit consetetur moderatius intellegam, ius decore accusamus te. Ne primis suavitate disputando nam. Mutat convenirete.</p>
                </div>

                <!-- Question/Answer -->
                <div>
                    <div class="faq-question-q-box">Q.</div>
                    <h4 class="faq-question">License &amp; Copyright</h4>
                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>

                <!-- Question/Answer -->
                <div>
                    <div class="faq-question-q-box">Q.</div>
                    <h4 class="faq-question">Is safe use Lorem Ipsum?</h4>
                    <p class="faq-answer mb-4">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
                </div>

            </div>
            <!--/col-md-5-->
        </div>
        <!-- end row -->

        
    </div> <!-- container -->
@endsection