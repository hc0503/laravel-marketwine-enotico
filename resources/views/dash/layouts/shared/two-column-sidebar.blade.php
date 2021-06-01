<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" >

        <div class="sidebar-content">
            <div class="sidebar-icon-menu h-100" data-simplebar>
                <!-- LOGO -->
                <a href="{{route('index')}}" class="logo">
                    <span>
                        <img src="{{asset('dash/assets/images/logo-sm-light.png')}}"alt="" height="28">
                    </span>
                </a>
                <nav class="nav flex-column" id="two-col-sidenav-main">
                    <a class="nav-link active" href="#dashboard" data-toggle="tooltip" data-placement="right"
                        title="Dashboard" data-trigger="hover">
                        <i data-feather="home"></i>
                    </a>
                    <a class="nav-link" href="#apps" data-toggle="tooltip" data-placement="right" title="Apps" data-trigger="hover">
                        <i data-feather="grid"></i>
                    </a>
                    <a class="nav-link" href="#pages" data-toggle="tooltip" data-placement="right" title="Pages" data-trigger="hover">
                        <i data-feather="file-text"></i>
                    </a>
                    <a class="nav-link" href="#layouts" data-toggle="tooltip" data-placement="right" title="Layouts" data-trigger="hover">
                        <i data-feather="layout"></i>
                    </a>
                    <a class="nav-link" href="#uielements" data-toggle="tooltip" data-placement="right" title="UI Elements" data-trigger="hover">
                        <i data-feather="briefcase"></i>
                    </a>
                    <a class="nav-link" href="#components" data-toggle="tooltip" data-placement="right"
                        title="Components" data-trigger="hover">
                        <i data-feather="package"></i>
                    </a>
                    <a class="nav-link" href="{{route('any', 'widgets')}}" data-toggle="tooltip" data-placement="right" title="Widgets" data-trigger="hover">
                        <i data-feather="gift"></i>
                    </a>
                </nav>
            </div>
            <!--- Sidemenu -->
            <div class="sidebar-main-menu">
                <div id="two-col-menu" class="h-100" data-simplebar>
                    <div class="twocolumn-menu-item d-block" id="dashboard">
                        <div class="title-box">
                            <h5 class="menu-title">Dashboards</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('any', 'dashboard')}}">Dashboard 1</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('any', 'dashboard-2')}}">Dashboard 2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('any', 'dashboard-3')}}">Dashboard 3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('any', 'dashboard-4')}}">Dashboard 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="twocolumn-menu-item" id="apps">
                        <h5 class="menu-title">Apps</h5>
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('second', ['apps', 'calendar'])}}">Calendar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('second', ['apps', 'chat'])}}">Chat</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEcommerce" data-toggle="collapse" class="nav-link">
                                    <span> Ecommerce </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarEcommerce">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('second', ['ecommerce', 'dashboard'])}}">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['ecommerce', 'products'])}}">Products</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['ecommerce', 'product-detail'])}}">Product Detail</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['ecommerce', 'product-edit'])}}">Add Product</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['ecommerce', 'customers'])}}">Customers</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['ecommerce', 'orders'])}}">Orders</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['ecommerce', 'order-detail'])}}">Order Detail</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['ecommerce', 'sellers'])}}">Sellers</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['ecommerce', 'cart'])}}">Shopping Cart</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['ecommerce', 'checkout'])}}">Checkout</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarCrm" data-toggle="collapse" class="nav-link">
                                    <span> CRM </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarCrm">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('second', ['crm', 'dashboard'])}}">Dashboard</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['crm', 'contacts'])}}">Contacts</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['crm', 'opportunities'])}}">Opportunities</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['crm', 'leads'])}}">Leads</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['crm', 'customers'])}}">Customers</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarEmail" data-toggle="collapse" class="nav-link">
                                    <span> Email </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarEmail">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('second', ['email', 'inbox'])}}">Inbox</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['email', 'read'])}}">Read Email</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['email', 'compose'])}}">Compose Email</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['email', 'templates'])}}">Email Templates</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('second', ['apps', 'social-feed'])}}">Social Feed</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('second', ['apps', 'companies'])}}">Companies</a>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarProjects" data-toggle="collapse" class="nav-link">
                                    <span> Projects </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarProjects">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('second', ['project', 'list'])}}">List</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['project', 'detail'])}}">Detail</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['project', 'create'])}}">Create Project</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTasks" data-toggle="collapse" class="nav-link">
                                    <span> Tasks </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarTasks">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('second', ['task', 'list'])}}">List</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['task', 'details'])}}">Details</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['task', 'kanban-board'])}}">Kanban Board</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarContacts" data-toggle="collapse" class="nav-link">
                                    <span> Contacts </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarContacts">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('second', ['contacts', 'list'])}}">Members List</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['contacts', 'profile'])}}">Profile</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a href="#sidebarTickets" data-toggle="collapse" class="nav-link">
                                    <span> Tickets </span>
                                    <span class="menu-arrow"></span>
                                </a>
                                <div class="collapse" id="sidebarTickets">
                                    <ul class="nav-second-level">
                                        <li>
                                            <a href="{{route('second', ['tickets', 'list'])}}">List</a>
                                        </li>
                                        <li>
                                            <a href="{{route('second', ['tickets', 'detail'])}}">Detail</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('second', ['apps', 'file-manager'])}}">File Manager</a>
                            </li>
                        </ul>
                    </div>

                    <div class="twocolumn-menu-item" id="pages">
                        <div class="title-box">
                            <h5 class="menu-title">Pages</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['pages', 'starter'])}}">Starter</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['pages', 'timeline'])}}">Timeline</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['pages', 'sitemap'])}}">Sitemap</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['pages', 'invoice'])}}">Invoice</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['pages', 'faqs'])}}">FAQs</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['pages', 'search-results'])}}">Search Results</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['pages', 'pricing'])}}">Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['pages', 'maintenance'])}}">Maintenance</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['pages', 'coming-soon'])}}">Coming Soon</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['pages', 'gallery'])}}">Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarAuth" data-toggle="collapse" class="nav-link">
                                        <span> Auth Pages </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarAuth">
                                        <ul class="nav-second-level">
                                            <li>
                                                <a href="{{route('second', ['auth', 'login'])}}">Log In</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['auth', 'login-2'])}}">Log In 2</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['auth', 'register'])}}">Register</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['auth', 'register-2'])}}">Register 2</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['auth', 'signin-signup'])}}">Signin - Signup</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['auth', 'signin-signup-2'])}}">Signin - Signup 2</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['auth', 'recoverpw'])}}">Recover Password</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['auth', 'recoverpw-2'])}}">Recover Password 2</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['auth', 'lock-screen'])}}">Lock Screen</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['auth', 'lock-screen-2'])}}">Lock Screen 2</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['auth', 'logout'])}}">Logout</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['auth', 'logout-2'])}}">Logout 2</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['auth', 'confirm-mail'])}}">Confirm Mail</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['auth', 'confirm-mail-2'])}}">Confirm Mail 2</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarErrors" data-toggle="collapse" class="nav-link">
                                        Error Pages <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarErrors">
                                        <ul class="nav-second-level">
                                            <li>
                                                <a href="{{route('second', ['pages', '404'])}}">Error 404</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['pages', '404-two'])}}">Error 404 Two</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['pages', '404-alt'])}}">Error 404-alt</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['pages', '500'])}}">Error 500</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['pages', '500-two'])}}">Error 500 Two</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                
                            </ul>
                        </div>
                    </div>

                    <div class="twocolumn-menu-item" id="layouts">
                        <div class="title-box">
                            <h5 class="menu-title">Layouts</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('index')}}">Vertical</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['layoutsDemo', 'horizontal'])}}'">Horizontal</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['layoutsDemo', 'detached'])}}">Detached</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['layoutsDemo', 'two-column'])}}">Two Column Menu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['layoutsDemo', 'two-tone-icons'])}}">Two Tones Icons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['layoutsDemo', 'preloader'])}}">Preloader</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="twocolumn-menu-item" id="uielements">
                        <div class="title-box">
                            <h5 class="menu-title">UI Elements</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'buttons'])}}">Buttons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'cards'])}}">Cards</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'avatars'])}}">Avatars</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'portlets'])}}">Portlets</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'tabs-accordions'])}}">Tabs & Accordions</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'modals'])}}">Modals</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'progress'])}}">Progress</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'notifications'])}}">Notifications</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'spinners'])}}">Spinners</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'images'])}}">Images</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'carousel'])}}">Carousel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'list-group'])}}">List Group</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'video'])}}">Embed Video</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'dropdowns'])}}">Dropdowns</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'ribbons'])}}">Ribbons</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'tooltips-popovers'])}}">Tooltips & Popovers</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'general'])}}">General UI</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'typography'])}}">Typography</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('second', ['ui', 'grid'])}}">Grid</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="twocolumn-menu-item" id="components">
                        <div class="title-box">
                            <h5 class="menu-title">Components</h5>
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a href="#sidebarExtendedui" data-toggle="collapse" class="nav-link">
                                        <span class="badge badge-info float-right">Hot</span>
                                        <span> Extended UI </span>
                                    </a>
                                    <div class="collapse" id="sidebarExtendedui">
                                        <ul class="nav-second-level">
                                            <li>
                                                <a href="{{route('second', ['extended', 'nestable'])}}">Nestable List</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['extended', 'range-slider'])}}">Range Slider</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['extended', 'dragula'])}}">Dragula</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['extended', 'animation'])}}">Animation</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['extended', 'sweet-alert'])}}">Sweet Alert</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['extended', 'tour'])}}">Tour Page</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['extended', 'scrollspy'])}}">Scrollspy</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['extended', 'loading-buttons'])}}">Loading Buttons</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarIcons" data-toggle="collapse" class="nav-link">
                                        <span> Icons </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarIcons">
                                        <ul class="nav-second-level">
                                            <li>
                                                <a href="{{route('second', ['icons', 'two-tone'])}}">Two Tone Icons</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['icons', 'feather'])}}">Feather Icons</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['icons', 'mdi'])}}">Material Design Icons</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['icons', 'dripicons'])}}">Dripicons</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['icons', 'font-awesome'])}}">Font Awesome 5</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['icons', 'themify'])}}">Themify</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['icons', 'simple-line'])}}">Simple Line</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['icons', 'weather'])}}">Weather</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarForms" data-toggle="collapse" class="nav-link">
                                        <span> Forms </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarForms">
                                        <ul class="nav-second-level">
                                            <li>
                                                <a href="{{route('second', ['forms', 'elements'])}}">General Elements</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['forms', 'advanced'])}}">Advanced</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['forms', 'validation'])}}">Validation</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['forms', 'pickers'])}}">Pickers</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['forms', 'wizard'])}}">Wizard</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['forms', 'masks'])}}">Masks</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['forms', 'summernote'])}}">Summernote</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['forms', 'quilljs'])}}">Quilljs Editor</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['forms', 'file-uploads'])}}">File Uploads</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['forms', 'x-editable'])}}">X Editable</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['forms', 'image-crop'])}}">Image Crop</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarTables" data-toggle="collapse" class="nav-link">
                                        <span> Tables </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarTables">
                                        <ul class="nav-second-level">
                                            <li>
                                                <a href="{{route('second', ['tables', 'basic'])}}">Basic Tables</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['tables', 'datatables'])}}">Data Tables</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['tables', 'editable'])}}">Editable Tables</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['tables', 'responsive'])}}">Responsive Tables</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['tables', 'footables'])}}">FooTable</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['tables', 'bootstrap'])}}">Bootstrap Tables</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['tables', 'tablesaw'])}}">Tablesaw Tables</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['tables', 'jsgrid'])}}">JsGrid Tables</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarCharts" data-toggle="collapse" class="nav-link">
                                        <span> Charts </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarCharts">
                                        <ul class="nav-second-level">
                                            <li>
                                                <a href="{{route('second', ['charts', 'apex'])}}">Apex Charts</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['charts', 'flot'])}}">Flot Charts</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['charts', 'morris'])}}">Morris Charts</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['charts', 'chartjs'])}}">Chartjs Charts</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['charts', 'peity'])}}">Peity Charts</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['charts', 'chartist'])}}">Chartist Charts</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['charts', 'c3'])}}">C3 Charts</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['charts', 'sparklines'])}}">Sparklines Charts</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['charts', 'knob'])}}">Jquery Knob Charts</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarMaps" data-toggle="collapse" class="nav-link">
                                        <span> Maps </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarMaps">
                                        <ul class="nav-second-level">
                                            <li>
                                                <a href="{{route('second', ['maps', 'google'])}}">Google Maps</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['maps', 'vector'])}}">Vector Maps</a>
                                            </li>
                                            <li>
                                                <a href="{{route('second', ['maps', 'mapael'])}}">Mapael Maps</a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a href="#sidebarMultilevel" data-toggle="collapse" class="nav-link">
                                        <span> Multi Level </span>
                                        <span class="menu-arrow"></span>
                                    </a>
                                    <div class="collapse" id="sidebarMultilevel">
                                        <ul class="nav-second-level">
                                            <li>
                                                <a href="#sidebarMultilevel2" data-toggle="collapse">
                                                    Second Level <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarMultilevel2">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="javascript: void(0);">Item 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="javascript: void(0);">Item 2</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                
                                            <li>
                                                <a href="#sidebarMultilevel3" data-toggle="collapse">
                                                    Third Level <span class="menu-arrow"></span>
                                                </a>
                                                <div class="collapse" id="sidebarMultilevel3">
                                                    <ul class="nav-second-level">
                                                        <li>
                                                            <a href="javascript: void(0);">Item 1</a>
                                                        </li>
                                                        <li>
                                                            <a href="#sidebarMultilevel4" data-toggle="collapse">
                                                                Item 2 <span class="menu-arrow"></span>
                                                            </a>
                                                            <div class="collapse" id="sidebarMultilevel4">
                                                                <ul class="nav-second-level">
                                                                    <li>
                                                                        <a href="javascript: void(0);">Item 1</a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="javascript: void(0);">Item 2</a>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
            <div class="clearfix"></div>
        </div>
        <!-- End Sidebar -->

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->