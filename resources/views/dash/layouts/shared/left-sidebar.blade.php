<!-- ========== Left Sidebar Start ========== -->
<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!-- User box -->
        <div class="user-box text-center">
            <img src="{{asset('dash/assets/images/users/user-1.jpg')}}" alt="user-img" title="Mat Helme"
                class="rounded-circle avatar-md">
            <div class="dropdown">
                <a href="javascript: void(0);" class="text-dark dropdown-toggle h5 mt-2 mb-1 d-block"
                    data-toggle="dropdown">Geneva Kennedy</a>
                <div class="dropdown-menu user-pro-dropdown">

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-user mr-1"></i>
                        <span>My Account</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-settings mr-1"></i>
                        <span>Settings</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-lock mr-1"></i>
                        <span>Lock Screen</span>
                    </a>

                    <!-- item-->
                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <i class="fe-log-out mr-1"></i>
                        <span>Logout</span>
                    </a>

                </div>
            </div>
            <p class="text-muted">Admin Head</p>
        </div>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Menú</li>
                <li>
                    <a href="{{url('/perfil')}}" >
                        <i data-feather="user"></i>
                        <span> Perfil </span>
                        
                    </a>                    
                </li>
                <li>
                    <a href="#sidebarEcommerce" data-toggle="collapse">
                        <i data-feather="shopping-bag"></i>
                        <span> Productos </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{url('/productos')}}">Listado</a>
                            </li>
                            <li>
                                <a href="{{url('/productos_new')}}">Nuevo Producto</a>
                            </li>
                            
                            
                        </ul>
                    </div>
                </li>

                 <li>
                    <a href="#sidebarEcommerce3" data-toggle="collapse">
                        <i data-feather="shopping-bag"></i>
                        <span> Packs </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce3">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{url('/packs')}}">Listado</a>
                            </li>
                            <li>
                                <a href="{{url('/new_packs')}}">Nuevo Pack</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarEcommerce1" data-toggle="collapse">
                        <i data-feather="shopping-bag"></i>
                        <span> Marcas </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarEcommerce1">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{url('/marcas')}}">Listado</a>
                            </li>
                            <li>
                                <a href="{{url('/marcas_new')}}">Nueva Marca</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>


                <li>
                    <a href="{{url('/perfil')}}" >
                        <i data-feather="watch"></i>
                        <span> Historial de Ventas </span>
                        
                    </a>                    
                </li>

                <li>
                    <a href="{{url('/perfil')}}" >
                        <i data-feather="shopping-cart"></i>
                        <span> Pedidos </span>
                        
                    </a>                    
                </li>

                <li>
                    <a href="#sidebarCrm" data-toggle="collapse">
                        <i data-feather="truck"></i>
                        <span> Transportistas </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{url('/productos')}}">Listado</a>
                            </li>
                            <li>
                                <a href="{{url('/productos_new')}}">Nuevo Transportista</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                
                <li>
                    <a href="{{url('/perfil')}}" >
                        <i data-feather="credit-card"></i>
                        <span> Pago </span>
                        
                    </a>                    
                </li>
                <li>
                    <a href="{{url('/perfil')}}">
                        <i data-feather="bar-chart"></i>
                        <span> Resumen de ventas </span>
                        
                    </a>                    
                </li>
                <li>
                    <a href="{{url('/perfil')}}">
                        <i data-feather="dollar-sign"></i> 
                        <span> Retirar fondos </span>
                        <span class="badge badge-pink float-right">€0.00</span>
                    </a>                    
                </li>
                <li>
                    <a href="{{url('/perfil')}}">
                        <i data-feather="message-square"></i> 
                        <span> Mensajes </span>                        
                    </a>                    
                </li>
                <li>
                    <a href="{{url('/perfil')}}">
                        <i data-feather="tag"></i> 
                        <span> Ofertas </span>                        
                    </a>                    
                </li>
            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
<!-- Left Sidebar End -->