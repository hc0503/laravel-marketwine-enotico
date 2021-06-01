<div class="topnav">
    <div class="container-fluid">
        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">

            <div class="collapse navbar-collapse" id="topnav-menu-content">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe-airplay mr-1"></i> Dashboards <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                            <a href="{{route('any', 'dashboard')}}" class="dropdown-item">Dashboard 1</a>
                            <a href="{{route('any', 'dashboard-2')}}" class="dropdown-item">Dashboard 2</a>
                            <a href="{{route('any', 'dashboard-3')}}" class="dropdown-item">Dashboard 3</a>
                            <a href="{{route('any', 'dashboard-4')}}" class="dropdown-item">Dashboard 4</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-apps" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe-grid mr-1"></i> Apps <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-apps">

                            <a href="{{route('second', ['apps', 'calendar'])}}" class="dropdown-item"><i class="fe-calendar mr-1"></i> Calendar</a>
                            <a href="{{route('second', ['apps', 'chat'])}}" class="dropdown-item"><i class="fe-message-square mr-1"></i> Chat</a>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-shopping-cart mr-1"></i> Ecommerce <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                    <a href="{{route('second', ['ecommerce', 'dashboard'])}}" class="dropdown-item">Dashboard</a>
                                    <a href="{{route('second', ['ecommerce', 'products'])}}" class="dropdown-item">Products</a>
                                    <a href="{{route('second', ['ecommerce', 'product-detail'])}}" class="dropdown-item">Product Detail</a>
                                    <a href="{{route('second', ['ecommerce', 'product-edit'])}}" class="dropdown-item">Add Product</a>
                                    <a href="{{route('second', ['ecommerce', 'customers'])}}" class="dropdown-item">Customers</a>
                                    <a href="{{route('second', ['ecommerce', 'orders'])}}" class="dropdown-item">Orders</a>
                                    <a href="{{route('second', ['ecommerce', 'order-detail'])}}" class="dropdown-item">Order Detail</a>
                                    <a href="{{route('second', ['ecommerce', 'sellers'])}}" class="dropdown-item">Sellers</a>
                                    <a href="{{route('second', ['ecommerce', 'cart'])}}" class="dropdown-item">Shopping Cart</a>
                                    <a href="{{route('second', ['ecommerce', 'checkout'])}}" class="dropdown-item">Checkout</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-mail mr-1"></i> Email <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                    <a href="{{route('second', ['email', 'inbox'])}}" class="dropdown-item">Inbox</a>
                                    <a href="{{route('second', ['email', 'read'])}}" class="dropdown-item">Read Email</a>
                                    <a href="{{route('second', ['email', 'compose'])}}" class="dropdown-item">Compose Email</a>
                                    <a href="{{route('second', ['email', 'templates'])}}" class="dropdown-item">Email Templates</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-crm"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-users mr-1"></i> CRM <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-crm">
                                    <a href="{{route('second', ['crm', 'dashboard'])}}" class="dropdown-item">Dashboard</a>
                                    <a href="{{route('second', ['crm', 'contacts'])}}." class="dropdown-item">Contacts</a>
                                    <a href="{{route('second', ['crm', 'opportunities'])}}" class="dropdown-item">Opportunities</a>
                                    <a href="{{route('second', ['crm', 'leads'])}}" class="dropdown-item">Leads</a>
                                    <a href="{{route('second', ['crm', 'customers'])}}" class="dropdown-item">Customers</a>
                                </div>
                            </div>

                            <a href="{{route('second', ['apps', 'social-feed'])}}" class="dropdown-item"><i class="fe-rss mr-1"></i> Social Feed</a>
                            <a href="{{route('second', ['apps', 'companies'])}}" class="dropdown-item"><i class="fe-activity mr-1"></i> Companies</a>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-project"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-briefcase mr-1"></i> Projects <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-project">
                                    <a href="{{route('second', ['project', 'list'])}}" class="dropdown-item">List</a>
                                    <a href="{{route('second', ['project', 'detail'])}}" class="dropdown-item">Detail</a>
                                    <a href="{{route('second', ['project', 'create'])}}" class="dropdown-item">Create Project</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-task"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-clipboard mr-1"></i> Tasks <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-task">
                                    <a href="{{route('second', ['task', 'list'])}}" class="dropdown-item">List</a>
                                    <a href="{{route('second', ['task', 'details'])}}" class="dropdown-item">Details</a>
                                    <a href="{{route('second', ['task', 'kanban-board'])}}" class="dropdown-item">Kanban Board</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-book mr-1"></i> Contacts <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                    <a href="{{route('second', ['contacts', 'list'])}}" class="dropdown-item">Members List</a>
                                    <a href="{{route('second', ['contacts', 'profile'])}}" class="dropdown-item">Profile</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-tickets"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-aperture mr-1"></i> Tickets <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-tickets">
                                    <a href="{{route('second', ['tickets', 'list'])}}" class="dropdown-item">List</a>
                                    <a href="{{route('second', ['tickets', 'detail'])}}" class="dropdown-item">Detail</a>
                                </div>
                            </div>
                            <a href="{{route('second', ['apps', 'file-manager'])}}" class="dropdown-item"><i class="fe-folder-plus mr-1"></i> File Manager</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-ui" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe-briefcase mr-1"></i> UI Elements <div class="arrow-down"></div>
                        </a>

                        <div class="dropdown-menu mega-dropdown-menu dropdown-mega-menu-xl" aria-labelledby="topnav-ui">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div>
                                        <a href="{{route('second', ['ui', 'buttons'])}}" class="dropdown-item">Buttons</a>
                                        <a href="{{route('second', ['ui', 'cards'])}}" class="dropdown-item">Cards</a>
                                        <a href="{{route('second', ['ui', 'avatars'])}}" class="dropdown-item">Avatars</a>
                                        <a href="{{route('second', ['ui', 'portlets'])}}" class="dropdown-item">Portlets</a>
                                        <a href="{{route('second', ['ui', 'tabs-accordions'])}}" class="dropdown-item">Tabs & Accordions</a>
                                        <a href="{{route('second', ['ui', 'modals'])}}" class="dropdown-item">Modals</a>
                                        <a href="{{route('second', ['ui', 'progress'])}}" class="dropdown-item">Progress</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="{{route('second', ['ui', 'notifications'])}}" class="dropdown-item">Notifications</a>
                                        <a href="{{route('second', ['ui', 'spinners'])}}" class="dropdown-item">Spinners</a>
                                        <a href="{{route('second', ['ui', 'images'])}}" class="dropdown-item">Images</a>
                                        <a href="{{route('second', ['ui', 'carousel'])}}" class="dropdown-item">Carousel</a>
                                        <a href="{{route('second', ['ui', 'list-group'])}}" class="dropdown-item">List Group</a>
                                        <a href="{{route('second', ['ui', 'video'])}}" class="dropdown-item">Embed Video</a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div>
                                        <a href="{{route('second', ['ui', 'dropdowns'])}}" class="dropdown-item">Dropdowns</a>
                                        <a href="{{route('second', ['ui', 'ribbons'])}}" class="dropdown-item">Ribbons</a>
                                        <a href="{{route('second', ['ui', 'tooltips-popovers'])}}" class="dropdown-item">Tooltips & Popovers</a>
                                        <a href="{{route('second', ['ui', 'general'])}}" class="dropdown-item">General UI</a>
                                        <a href="{{route('second', ['ui', 'typography'])}}" class="dropdown-item">Typography</a>
                                        <a href="{{route('second', ['ui', 'grid'])}}" class="dropdown-item">Grid</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe-layers mr-1"></i> Components <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-extendedui"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-pocket mr-1"></i> Extended UI <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-extendedui">
                                    <a href="{{route('second', ['extended', 'nestable'])}}" class="dropdown-item">Nestable List</a>
                                    <a href="{{route('second', ['extended', 'range-slider'])}}" class="dropdown-item">Range Slider</a>
                                    <a href="{{route('second', ['extended', 'dragula'])}}" class="dropdown-item">Dragula</a>
                                    <a href="{{route('second', ['extended', 'animation'])}}" class="dropdown-item">Animation</a>
                                    <a href="{{route('second', ['extended', 'sweet-alert'])}}" class="dropdown-item">Sweet Alert</a>
                                    <a href="{{route('second', ['extended', 'tour'])}}" class="dropdown-item">Tour Page</a>
                                    <a href="{{route('second', ['extended', 'scrollspy'])}}" class="dropdown-item">Scrollspy</a>
                                    <a href="{{route('second', ['extended', 'loading-buttons'])}}" class="dropdown-item">Loading Buttons</a>
                                </div>
                            </div>
                            <a href="{{route('any', 'widgets')}}" class="dropdown-item"><i class="fe-gift mr-1"></i> Widgets</a>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-bookmark mr-1"></i> Forms <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-form">
                                    <a href="{{route('second', ['forms', 'elements'])}}" class="dropdown-item">General Elements</a>
                                    <a href="{{route('second', ['forms', 'advanced'])}}" class="dropdown-item">Advanced</a>
                                    <a href="{{route('second', ['forms', 'validation'])}}" class="dropdown-item">Validation</a>
                                    <a href="{{route('second', ['forms', 'pickers'])}}" class="dropdown-item">Pickers</a>
                                    <a href="{{route('second', ['forms', 'wizard'])}}" class="dropdown-item">Wizard</a>
                                    <a href="{{route('second', ['forms', 'masks'])}}" class="dropdown-item">Masks</a>
                                    <a href="{{route('second', ['forms', 'summernote'])}}" class="dropdown-item">Summernote</a>
                                    <a href="{{route('second', ['forms', 'quilljs'])}}" class="dropdown-item">Quilljs Editor</a>
                                    <a href="{{route('second', ['forms', 'file-uploads'])}}" class="dropdown-item">File Uploads</a>
                                    <a href="{{route('second', ['forms', 'x-editable'])}}" class="dropdown-item">X Editable</a>
                                    <a href="{{route('second', ['forms', 'image-crop'])}}" class="dropdown-item">Image Crop</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-bar-chart-2 mr-1"></i> Charts <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                    <a href="{{route('second', ['charts', 'apex'])}}" class="dropdown-item">Apex Charts</a>
                                    <a href="{{route('second', ['charts', 'flot'])}}" class="dropdown-item">Flot Charts</a>
                                    <a href="{{route('second', ['charts', 'morris'])}}" class="dropdown-item">Morris Charts</a>
                                    <a href="{{route('second', ['charts', 'chartjs'])}}" class="dropdown-item">Chartjs Charts</a>
                                    <a href="{{route('second', ['charts', 'peity'])}}" class="dropdown-item">Peity Charts</a>
                                    <a href="{{route('second', ['charts', 'chartist'])}}" class="dropdown-item">Chartist Charts</a>
                                    <a href="{{route('second', ['charts', 'c3'])}}" class="dropdown-item">C3 Charts</a>
                                    <a href="{{route('second', ['charts', 'sparklines'])}}" class="dropdown-item">Sparklines Charts</a>
                                    <a href="{{route('second', ['charts', 'knob'])}}" class="dropdown-item">Jquery Knob Charts</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-grid mr-1"></i> Tables <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-table">
                                    <a href="{{route('second', ['tables', 'basic'])}}" class="dropdown-item">Basic Tables</a>
                                    <a href="{{route('second', ['tables', 'datatables'])}}" class="dropdown-item">Data Tables</a>
                                    <a href="{{route('second', ['tables', 'editable'])}}" class="dropdown-item">Editable Tables</a>
                                    <a href="{{route('second', ['tables', 'responsive'])}}" class="dropdown-item">Responsive Tables</a>
                                    <a href="{{route('second', ['tables', 'footables'])}}" class="dropdown-item">FooTable</a>
                                    <a href="{{route('second', ['tables', 'bootstrap'])}}" class="dropdown-item">Bootstrap Tables</a>
                                    <a href="{{route('second', ['tables', 'tablesaw'])}}" class="dropdown-item">Tablesaw Tables</a>
                                    <a href="{{route('second', ['tables', 'jsgrid'])}}" class="dropdown-item">JsGrid Tables</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-cpu mr-1"></i> Icons <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                    <a href="{{route('second', ['icons', 'two-tone'])}}" class="dropdown-item">Two Tone Icons</a>
                                    <a href="{{route('second', ['icons', 'feather'])}}">Feather Icons</a>
                                    <a href="{{route('second', ['icons', 'mdi'])}}" class="dropdown-item">Material Design Icons</a>
                                    <a href="{{route('second', ['icons', 'dripicons'])}}" class="dropdown-item">Dripicons</a>
                                    <a href="{{route('second', ['icons', 'font-awesome'])}}" class="dropdown-item">Font Awesome 5</a>
                                    <a href="{{route('second', ['icons', 'themify'])}}" class="dropdown-item">Themify</a>
                                    <a href="{{route('second', ['icons', 'simple-line'])}}" class="dropdown-item">Simple Line</a>
                                    <a href="{{route('second', ['icons', 'weather'])}}" class="dropdown-item">Weather</a>
                                </div>
                            </div>
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fe-map mr-1"></i> Maps <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-map">
                                    <a href="{{route('second', ['maps', 'google'])}}" class="dropdown-item">Google Maps</a>
                                    <a href="{{route('second', ['maps', 'vector'])}}" class="dropdown-item">Vector Maps</a>
                                    <a href="{{route('second', ['maps', 'mapael'])}}" class="dropdown-item">Mapael Maps</a>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe-package mr-1"></i> Pages <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-pages">
                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Auth Style 1 <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth">
                                    <a href="{{route('second', ['auth', 'login'])}}" class="dropdown-item">Log In</a>
                                    <a href="{{route('second', ['auth', 'register'])}}" class="dropdown-item">Register</a>
                                    <a href="{{route('second', ['auth', 'signin-signup'])}}" class="dropdown-item">Signin - Signup</a>
                                    <a href="{{route('second', ['auth', 'recoverpw'])}}" class="dropdown-item">Recover Password</a>
                                    <a href="{{route('second', ['auth', 'lock-screen'])}}" class="dropdown-item">Lock Screen</a>
                                    <a href="{{route('second', ['auth', 'logout'])}}" class="dropdown-item">Logout</a>
                                    <a href="{{route('second', ['auth', 'confirm-mail'])}}" class="dropdown-item">Confirm Mail</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-auth2"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Auth Style 2 <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-auth2">
                                    <a href="{{route('second', ['auth', 'login-2'])}}" class="dropdown-item">Log In 2</a>
                                    <a href="{{route('second', ['auth', 'register-2'])}}" class="dropdown-item">Register 2</a>
                                    <a href="{{route('second', ['auth', 'signin-signup-2'])}}" class="dropdown-item">Signin - Signup 2</a>
                                    <a href="{{route('second', ['auth', 'recoverpw-2'])}}" class="dropdown-item">Recover Password 2</a>
                                    <a href="{{route('second', ['auth', 'lock-screen-2'])}}" class="dropdown-item">Lock Screen 2</a>
                                    <a href="{{route('second', ['auth', 'logout-2'])}}" class="dropdown-item">Logout 2</a>
                                    <a href="{{route('second', ['auth', 'confirm-mail-2'])}}" class="dropdown-item">Confirm Mail 2</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-error"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Errors <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-error">
                                    <a href="{{route('second', ['pages', '404'])}}" class="dropdown-item">Error 404</a>
                                    <a href="{{route('second', ['pages', '404-two'])}}" class="dropdown-item">Error 404 Two</a>
                                    <a href="{{route('second', ['pages', '404-alt'])}}" class="dropdown-item">Error 404-alt</a>
                                    <a href="{{route('second', ['pages', '500'])}}" class="dropdown-item">Error 500</a>
                                    <a href="{{route('second', ['pages', '500-two'])}}" class="dropdown-item">Error 500 Two</a>
                                </div>
                            </div>

                            <div class="dropdown">
                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                    role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Utility <div class="arrow-down"></div>
                                </a>
                                <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                    <a href="{{route('second', ['pages', 'starter'])}}" class="dropdown-item">Starter</a>
                                    <a href="{{route('second', ['pages', 'timeline'])}}" class="dropdown-item">Timeline</a>
                                    <a href="{{route('second', ['pages', 'sitemap'])}}" class="dropdown-item">Sitemap</a>
                                    <a href="{{route('second', ['pages', 'invoice'])}}" class="dropdown-item">Invoice</a>
                                    <a href="{{route('second', ['pages', 'faqs'])}}" class="dropdown-item">FAQs</a>
                                    <a href="{{route('second', ['pages', 'search-results'])}}" class="dropdown-item">Search Results</a>
                                    <a href="{{route('second', ['pages', 'pricing'])}}" class="dropdown-item">Pricing</a>
                                    <a href="{{route('second', ['pages', 'maintenance'])}}" class="dropdown-item">Maintenance</a>
                                    <a href="{{route('second', ['pages', 'coming-soon'])}}" class="dropdown-item">Coming Soon</a>
                                    <a href="{{route('second', ['pages', 'gallery'])}}" class="dropdown-item">Gallery</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-layout" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fe-sidebar mr-1"></i> Layouts <div class="arrow-down"></div>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="topnav-layout">
                            <a href="{{route('index')}}" class="dropdown-item">Vertical</a>
                            <a href="{{route('second', ['layoutsDemo', 'horizontal'])}}" class="dropdown-item">Horizontal</a>
                            <a href="{{route('second', ['layoutsDemo', 'detached'])}}" class="dropdown-item">Detached</a>
                            <a href="{{route('second', ['layoutsDemo', 'two-column'])}}" class="dropdown-item">Two Column Menu</a>
                            <a href="{{route('second', ['layoutsDemo', 'two-tone-icons'])}}" class="dropdown-item">Two Tones Icons</a>
                            <a href="{{route('second', ['layoutsDemo', 'preloader'])}}" class="dropdown-item">Preloader</a>
                        </div>
                    </li>
                </ul> <!-- end navbar-->
            </div> <!-- end .collapsed-->
        </nav>
    </div> <!-- end container-fluid -->
</div> <!-- end topnav-->