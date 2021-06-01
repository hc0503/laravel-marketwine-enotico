@extends('layouts.vertical', ['title' => 'Typography'])

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
                            <li class="breadcrumb-item active">Typography</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Typography</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 

        <div class="row">
            <div class="col-12">

                <div class="card-box">
                    <h4 class="header-title">Display headings</h4>
                    <p class="sub-header">
                        Traditional heading elements are designed to work best in the meat of your page content. When you need a heading to stand out, consider using a display heading—a larger, slightly more opinionated heading style.
                    </p>

                    <h1 class="display-1">Display 1</h1>
                    <p class="text-muted">Suspendisse vel quam malesuada, aliquet sem sit
                        amet, fringilla elit. Morbi
                        tempor tincidunt tempor. Etiam id turpis viverra, vulputate sapien
                        nec,
                        varius sem. Curabitur ullamcorper fringilla eleifend. In ut eros
                        hendrerit
                        est consequat posuere et at velit.</p>

                    <div class="clearfix"></div>

                    <h1 class="display-2">Display 2</h1>
                    <p class="text-muted">In nec rhoncus eros. Vestibulum eu mattis nisl.
                        Quisque viverra viverra magna
                        nec pulvinar. Maecenas pellentesque porta augue, consectetur
                        facilisis diam
                        porttitor sed. Suspendisse tempor est sodales augue rutrum
                        tincidunt.
                        Quisque a malesuada purus.</p>

                    <div class="clearfix"></div>

                    <h1 class="display-3">Display 3</h1>
                    <p class="text-muted">Vestibulum auctor tincidunt semper. Phasellus ut
                        vulputate lacus. Suspendisse
                        ultricies mi eros, sit amet tempor nulla varius sed. Proin nisl
                        nisi,
                        feugiat quis bibendum vitae, dapibus in tellus.</p>

                    <div class="clearfix"></div>

                    <h1 class="display-4">Display 4</h1>
                    <p class="text-muted">Nulla et mattis nunc. Curabitur scelerisque
                        commodo condimentum. Mauris
                        blandit, velit a consectetur egestas, diam arcu fermentum justo,
                        eget
                        ultrices arcu eros vel erat.</p>

                    <div class="clearfix"></div>
                </div> <!-- end card-box-->

                <div class="card-box">
                    <h4 class="header-title">Headings</h4>
                    <p class="sub-header">
                        All HTML headings, <code class="highlighter-rouge">&lt;h1&gt;</code> through
                        <code>&lt;h6&gt;</code>, are available. <code>.h1</code> through <code>.h6</code>
                        classes are also available, for when you want to match the font styling of a heading
                        but still want your text to be displayed inline.
                    </p>

                    <h1>This is a Heading 1</h1>
                    <p class="text-muted">Suspendisse vel quam malesuada, aliquet sem sit
                        amet, fringilla elit. Morbi
                        tempor tincidunt tempor. Etiam id turpis viverra, vulputate sapien
                        nec,
                        varius sem. Curabitur ullamcorper fringilla eleifend. In ut eros
                        hendrerit
                        est consequat posuere et at velit.</p>

                    <div class="clearfix"></div>

                    <h2>This is a Heading 2</h2>
                    <p class="text-muted">In nec rhoncus eros. Vestibulum eu mattis nisl.
                        Quisque viverra viverra magna
                        nec pulvinar. Maecenas pellentesque porta augue, consectetur
                        facilisis diam
                        porttitor sed. Suspendisse tempor est sodales augue rutrum
                        tincidunt.
                        Quisque a malesuada purus.</p>

                    <div class="clearfix"></div>

                    <h3>This is a Heading 3</h3>
                    <p class="text-muted">Vestibulum auctor tincidunt semper. Phasellus ut
                        vulputate lacus. Suspendisse
                        ultricies mi eros, sit amet tempor nulla varius sed. Proin nisl
                        nisi,
                        feugiat quis bibendum vitae, dapibus in tellus.</p>

                    <div class="clearfix"></div>

                    <h4>This is a Heading 4</h4>
                    <p class="text-muted">Nulla et mattis nunc. Curabitur scelerisque
                        commodo condimentum. Mauris
                        blandit, velit a consectetur egestas, diam arcu fermentum justo,
                        eget
                        ultrices arcu eros vel erat.</p>

                    <div class="clearfix"></div>

                    <h5>This is a Heading 5</h5>
                    <p class="text-muted">Quisque nec turpis at urna dictum luctus.
                        Suspendisse convallis dignissim
                        eros at volutpat. In egestas mattis dui. Aliquam mattis dictum
                        aliquet.
                        Nulla sapien mauris, eleifend et sem ac, commodo dapibus odio.
                        Vivamus
                        pretium nec odio cursus elementum. Suspendisse molestie ullamcorper
                        ornare.</p>

                    <div class="clearfix"></div>

                    <h6>This is a Heading 6</h6>
                    <p class="text-muted">Donec ultricies, lacus id tempor condimentum, orci
                        leo faucibus sem, a
                        molestie libero lectus ac justo. ultricies mi eros, sit amet tempor
                        nulla
                        varius sed. Proin nisl nisi, feugiat quis bibendum vitae, dapibus in
                        tellus.</p>
                </div> <!-- end card-box -->

                <div class="card-box">
                    <div class="row">
                        <div class="col-xl-6">
                            <h4 class="header-title">Inline text elements</h4>
                            <p class="sub-header">
                                Your awesome text goes here.
                            </p>

                            <p class="lead">
                                Your title goes here
                            </p>

                            <p>You can use the mark tag to <mark>highlight</mark> text.</p>
                            <p><del>This line of text is meant to be treated as deleted text.</del></p>
                            <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
                            <p><ins>This line of text is meant to be treated as an addition to the document.</ins></p>
                            <p><u>This line of text will render as underlined</u></p>
                            <p><small>This line of text is meant to be treated as fine print.</small></p>
                            <p><strong>This line rendered as bold text.</strong></p>
                            <p><em>This line rendered as italicized text.</em></p>
                        </div>

                        <div class="col-xl-6 mt-3 mt-xl-0">
                            <h4 class="header-title">Contextual Text Colors</h4>
                            <p class="sub-header">
                                Your awesome text goes here.
                            </p>

                            <p class="text-custom">
                                Etiam porta sem malesuada magna mollis euismod.
                            </p>
                            <p class="text-pink">
                                Donec ullamcorper nulla non metus auctor fringilla.
                            </p>
                            <p class="text-muted">
                                Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.
                            </p>
                            <p class="text-primary">
                                Nullam id dolor id nibh ultricies vehicula ut id elit.
                            </p>
                            <p class="text-success">
                                Duis mollis, est non commodo luctus, nisi erat porttitor ligula.
                            </p>
                            <p class="text-info">
                                Maecenas sed diam eget risus varius blandit sit amet non magna.
                            </p>
                            <p class="text-warning">
                                Etiam porta sem malesuada magna mollis euismod.
                            </p>
                            <p class="text-danger">
                                Donec ullamcorper nulla non metus auctor fringilla.
                            </p>
                            <p class="text-dark">
                                Nullam id dolor id nibh ultricies vehicula ut id elit.
                            </p>
                            <p class="text-purple m-b-0">
                                Fusce dapibus, tellus ac cursus commodo, tortor mauris nibh.
                            </p>

                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div> <!-- end card-box -->

                <div class="card-box">
                    <div class="row">
                        <div class="col-xl-4">
                            <h4 class="header-title">Unordered</h4>
                            <p class="sub-header">
                                A list of items in which the order does not explicitly matter.
                            </p>

                            <ul>
                                <li>
                                    Lorem ipsum dolor sit amet
                                </li>
                                <li>
                                    Consectetur adipiscing elit
                                </li>
                                <li>
                                    Integer molestie lorem at massa
                                </li>
                                <li>
                                    Facilisis in pretium nisl aliquet
                                </li>
                                <li>
                                    Nulla volutpat aliquam velit
                                    <ul>
                                        <li>
                                            Phasellus iaculis neque
                                        </li>
                                        <li>
                                            Purus sodales ultricies
                                        </li>
                                        <li>
                                            Vestibulum laoreet porttitor sem
                                        </li>
                                        <li>
                                            Ac tristique libero volutpat at
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Faucibus porta lacus fringilla vel
                                </li>
                                <li>
                                    Aenean sit amet erat nunc
                                </li>
                                <li>
                                    Eget porttitor lorem
                                </li>
                            </ul>

                        </div> <!-- end col -->

                        <div class="col-xl-4 mt-3 mt-xl-0">
                            <h4 class="header-title">Ordered</h4>
                            <p class="sub-header">
                                A list of items in which the order does explicitly matter.
                            </p>

                            <ol>
                                <li>
                                    Lorem ipsum dolor sit amet
                                </li>
                                <li>
                                    Consectetur adipiscing elit
                                </li>
                                <li>
                                    Integer molestie lorem at massa
                                </li>
                                <li>
                                    Facilisis in pretium nisl aliquet
                                </li>
                                <li>
                                    Nulla volutpat aliquam velit
                                    <ol>
                                        <li>
                                            Phasellus iaculis neque
                                        </li>
                                        <li>
                                            Purus sodales ultricies
                                        </li>
                                        <li>
                                            Vestibulum laoreet porttitor sem
                                        </li>
                                        <li>
                                            Ac tristique libero volutpat at
                                        </li>
                                    </ol>
                                </li>
                                <li>
                                    Faucibus porta lacus fringilla vel
                                </li>
                                <li>
                                    Aenean sit amet erat nunc
                                </li>
                                <li>
                                    Eget porttitor lorem
                                </li>
                            </ol>
                        </div> <!-- end col -->

                        <div class="col-xl-4 mt-3 mt-xl-0">
                            <h4 class="header-title">Unstyled</h4>
                            <p class="sub-header">
                                <strong>This only applies to immediate children
                                    list items</strong>, meaning you will need to add the class for any nested lists as well.
                            </p>

                            <ul class="list-unstyled">
                                <li>
                                    Lorem ipsum dolor sit amet
                                </li>
                                <li>
                                    Integer molestie lorem at massa
                                    <ul>
                                        <li>
                                            Phasellus iaculis neque
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    Faucibus porta lacus fringilla vel
                                </li>
                                <li>
                                    Eget porttitor lorem
                                </li>
                            </ul>

                            <h5>Inline</h5>
                            <p class="text-muted m-b-15">
                                Place all list items on a single line with <code>
                                display: inline-block;</code>
                                and some light padding.
                            </p>

                            <ul class="list-inline m-b-0">
                                <li class="list-inline-item">
                                    Lorem ipsum
                                </li>
                                <li class="list-inline-item">
                                    Phasellus iaculis
                                </li>
                                <li class="list-inline-item">
                                    Nulla volutpat
                                </li>
                            </ul>

                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                    <!-- end card-box -->

                <div class="card-box">
                    <div class="row">
                        <div class="col-xl-6">
                            <h4 class="header-title">Blockquotes</h4>
                            <p class="sub-header">
                                Your awesome text goes here.
                            </p>

                            <blockquote class="blockquote">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>

                            <p class="text-muted m-b-15 m-t-20">
                                Use text utilities as needed to change the alignment of your blockquote.
                            </p>

                            <blockquote class="blockquote text-center">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>

                            <blockquote class="blockquote text-right">
                                <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                <footer class="blockquote-footer">Someone famous in <cite title="Source Title">Source Title</cite></footer>
                            </blockquote>
                        </div> <!-- end col -->

                        <div class="col-xl-6 mt-3 mt-xl-0">
                            <h4 class="header-title">Description list alignment</h4>
                            <p class="text-muted m-b-30">
                                Align terms and descriptions horizontally by using our grid system’s predefined classes (or semantic mixins). For longer terms, you can optionally add a <code class="highlighter-rouge">.text-truncate</code> class to truncate the text with an ellipsis.
                            </p>

                            <dl class="row">
                                <dt class="col-sm-3">Description lists</dt>
                                <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

                                <dt class="col-sm-3">Euismod</dt>
                                <dd class="col-sm-9">
                                    <p>Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
                                    <p>Donec id elit non mi porta gravida at eget metus.</p>
                                </dd>

                                <dt class="col-sm-3">Malesuada porta</dt>
                                <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

                                <dt class="col-sm-3 text-truncate">Truncated term is truncated</dt>
                                <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

                                <dt class="col-sm-3">Nesting</dt>
                                <dd class="col-sm-9">
                                    <dl class="row">
                                        <dt class="col-sm-4">Nested definition list</dt>
                                        <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
                                    </dl>
                                </dd>
                            </dl>

                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end card-box -->
            </div> <!-- end col -->

        </div>
        <!-- end row -->
        
    </div> <!-- container -->    
@endsection