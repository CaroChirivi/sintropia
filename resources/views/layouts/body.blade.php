<body class="no-skin skin-4">
    <div class="fnd-spin fnd-notShow">
        <img src="{{ asset('images/spin.gif') }}">
    </div>
    <div id="navbar" class="navbar navbar-default    navbar-collapse       h-navbar ace-save-state">
        <div class="navbar-container ace-save-state fnd-navbar-container" id="navbar-container">
            <div class="navbar-header pull-left">
                <a href=" {{ route('panel.show')}}" class="navbar-brand">
                    <div class="logo"></div>
                </a>
                <!-- MENU -->
                <div class="box-shadow-buttons " id="menu">
                    <div class="menu-header">
                        <div class="menu-header-back">
                            <div class="menu-header-icon">
                                <span>
                                    <i class="fa fa-bars st white" data-size="3.5"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="menu-body">
                        <div id="sidebar2" class="sidebar responsive ace-save-state">
                            <ul class="nav nav-list">
                                    {{-- @foreach(getPadres() as $p)
                                        @if($p->draw)
                                            <li>
                                                @if(!$p->route)
                                                    <a class="dropdown-toggle" href="#"> <!-- menu sin submenu -->
                                                @else
                                                    <a href=" {{ url($p->route) }} ">
                                                @endif
                                                        <i class="menu-icon" data-icon="{{ $p->icono }}"></i>
                                                        <span class="menu-text"> {{ $p->descripcion }}</span>
                                                    </a>

                                                <b class="arrow"></b>

                                                <ul class="submenu">
                                                    
                                                        @foreach(getHijos() as $h)
                                                            @if($h->padre == $p->menu)
                                                                <li>
                                                                    <a href=" {{ url($h->route) }} ">
                                                                        {{ $h->descripcion }}
                                                                    </a>

                                                                    <b class="arrow"></b>
                                                                </li>
                                                            @endif
                                                        @endforeach
                                                </ul>
                                                    </a> <!-- cierra menu sin submenu -->
                                            </li>
                                        @endif
                                    @endforeach --}}
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- FIN MENU -->
            </div>

            <div class="navbar-header pull-center" align="center">
                <div class="datetime cl-fnd-dark" data-tono="1">
                    <p class="fnd-st" data-size="1.6">{{ \Carbon\Carbon::now()->isoFormat('LLLL') }}</p>
                </div>
                <div class="name">
                    <P class="cl-fnd-dark">SISTEMA 
                    <span class="cl-fnd-pink">INFORMACION</span>
                    </P>
                    <p class="cl-fnd-dark">FAMILIAR</p>
                </div>
            </div>

            <div class="navbar-buttons navbar-header pull-left collapse navbar-collapse fnd-perfil cl-cms-dark" data-tono="1" role="navigation">
                <ul class="nav ace-nav">
                    <li class="dropdown-modal fnd-dropdown-modal">
                        <a data-toggle="dropdown" href="#" class="dropdown-toggle bk-cms-blue fnd-dropdown-toggle">
                            <img class="nav-user-photo fnd-nav-user-photo" src=" {{ asset('assets/images/avatars/usuario.png') }}" alt="Jason's Photo" />
                            <span class="user-info fnd-user-info white">
                                Welcome,
                                <br>
                                {!!Auth::user()->user!!}
                            </span>

                            <i class="ace-icon fa fa-caret-down"></i>
                        </a>

                        <ul class="user-menu dropdown-menu-right dropdown-menu dropdown-yellow dropdown-caret dropdown-close">
                            <li>
                                <a href="#">
                                    <i class="ace-icon fa fa-cog"></i>
                                    Settings
                                </a>
                            </li>

                            <li>
                                <a href="profile.html">
                                    <i class="ace-icon fa fa-user"></i>
                                    Profile
                                </a>
                            </li>

                            <li class="divider"></li>

                            <li>
                                <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    <i class="ace-icon fa fa-power-off"></i>
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div><!-- /.navbar-container -->
    </div>

    <div class="main-container ace-save-state" id="main-container">
        <script type="text/javascript">
            try{ace.settings.loadState('main-container')}catch(e){}
        </script>	

        <div class="main-content">
            <div class="main-content-inner">
                <div class="page-content main-content transparente">
                    <!-- LUPA -->
                    <div class="ace-settings-container lupa" id="ace-settings-container">
                        <div class="btn btn-app btn-xs ace-settings-btn box-shadow-buttons" id="ace-settings-btn">
                            <i class="ace-icon fa fa-search bigger-200"></i>
                        </div>

                        <!-- FIN OSTICKETS -->
                        <div class="botones_flotantes">
                            <a href="http://gator4104.temp.domains/~buildstein/osticket/scp/login.php" class="buttons-new yellow-buttons box-shadow-buttons" target="_blank">
                                Os<span>Ticket</span>
                            </a>
                        </div>
                        <!-- FIN OSTICKETS -->

                        <div class="ace-settings-box clearfix" id="ace-settings-box">
                            <div class="col-xs-12">
                                <div class="row botonera">
                                    <!-- <div class="botonera"> -->
                                        <button class="buttons-new yellow-buttons box-shadow-buttons">Issues</button>
                                        <button class="buttons-new yellow-buttons box-shadow-buttons">Pending</button>
                                    <!-- </div> -->
                                </div>

                                <div class="space-6"></div>

                            </div>

                            <div class="pull-left width-35">
                                <div class="ace-settings-item my-ace-settings-item">
                                    <span>Phone Number: </span>
                                </div>
                                <div class="ace-settings-item my-ace-settings-item">
                                    <span>Student ID: </span>
                                </div>
                                <div class="ace-settings-item my-ace-settings-item">
                                    <span>Lead ID: </span>
                                </div>
                                <div class="ace-settings-item my-ace-settings-item">
                                    <span>Sale ID: </span>
                                </div>
                                <div class="ace-settings-item my-ace-settings-item">
                                    <span>Proposal ID: </span>
                                </div>
                                <div class="ace-settings-item my-ace-settings-item">
                                    <span>Last Name: </span>
                                </div>
                                <div class="ace-settings-item my-ace-settings-item">
                                    <span>Email: </span>
                                </div>

                            </div><!-- /.pull-left -->

                            <div class="pull-left width-60">
                                <form form method="POST" action="{{ url('cms/lead') }}" class="form-horizontal" role="form">
                                    @csrf
                                    <div class="ace-settings-item">
                                        <input type="text" name="phone">
                                    </div>
                                    <div class="ace-settings-item">
                                        <input type="text" name="">
                                    </div>
                                    <div class="ace-settings-item">
                                        <input type="text" name="">
                                    </div>
                                    <div class="ace-settings-item">
                                        <input type="text" name="">
                                    </div>
                                    <div class="ace-settings-item">
                                        <input type="text" name="">
                                    </div>
                                    <div class="ace-settings-item">
                                        <input type="text" name="">
                                    </div>
                                    <div class="ace-settings-item">
                                        <input type="text" name="">
                                    </div>
                                    <button type="submit" class="buttons-new yellow-buttons box-shadow-buttons">Search</button>
                                

                            </div><!-- /.pull-left -->

                            
                            <div class="col-xs-12 center">

                                <div class="space-6"></div>

                                <div class="row botonera">
                                    <!-- <div class="botonera"> -->
                                        <button class="buttons-new yellow-buttons gray-buttons box-shadow-buttons">Last Lead</button>
                                        <button class="buttons-new yellow-buttons box-shadow-buttons">Supply View</button>


                                    <!-- </div> -->
                                </div>

                                <div class="space-6"></div>
                            </div>
                            </form>

                        </div><!-- /.ace-settings-box -->
                    </div><!-- /.ace-settings-container -->
                    <!-- FIN LUPA -->

                    <!-- CONTENIDO PPAL -->

                    <!-- BOTONES ACCESO RÁPIDO -->
                    @yield('msn')
                    @section("content")
                        <div class="row">
                            <div class="col-xs-3"></div>
                            <div class="col-xs-7">
                                <div>
                                    <div class="quick-link" style="margin-left: 0;">
                                        <div class="link-logo"></div>
                                        <p>DESCRIPTION</p>
                                    </div>
                                    <div class="quick-link">
                                        <div class="link-logo" data-logo="2"></div>
                                        <p>DESCRIPTION</p>
                                    </div>
                                    <div class="quick-link">
                                        <div class="link-logo" data-logo="3"></div>
                                        <p>DESCRIPTION</p>
                                    </div>
                                    <div class="quick-link">
                                        <div class="link-logo" data-logo="4"></div>
                                        <p>DESCRIPTION</p>
                                    </div>
                                    <div class="quick-link" style="margin-left: 12%;">
                                        <div class="link-logo" data-logo="5"></div>
                                        <p>DESCRIPTION</p>
                                    </div>
                                    <div class="quick-link">
                                        <div class="link-logo" data-logo="6"></div>
                                        <p>DESCRIPTION</p>
                                    </div>
                                    <div class="quick-link">
                                        <div class="link-logo" data-logo="7"></div>
                                        <p>DESCRIPTION</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-3"></div>
                        </div>
                    @show
                    <!-- FIN BOTONES DE ACCESO RAPIDO -->

                    <!-- COMUNICACION ESTILO BLOG -->
                    
                    <!-- FIN COMUNICACION ESTILO BLOG -->

                    
                    <!-- FIN CONTENIDO PPAL -->

                </div><!-- /.page-content -->
            </div>
        </div><!-- /.main-content -->

        @extends('layouts.footer')

        <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
            <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
        </a>
    </div><!-- /.main-container -->

    <!-- basic scripts -->

    <!--[if !IE]> -->
    <script src=" {{ asset('assets/js/plugin/jquery-2.1.4.min.js') }} "></script>
    

    <!-- <![endif]-->

    <!--[if IE]>
<script src="assets/js/jquery-1.11.3.min.js"></script>
<![endif]-->
    <!-- <script type="text/javascript">
        if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script> -->
    <script src=" {{ asset('assets/js/plugin/bootstrap-3.3.7.min.js') }} "></script>

    <!-- page specific plugin scripts -->

    <!-- ace scripts -->
    <script src=" {{ asset('assets/js/theme/ace-elements.min.js') }} "></script>
    <script src=" {{ asset('assets/js/theme/ace.min.js') }} "></script>

    <script src=" {{ asset('assets/js/plugin/fontawesomekit.js') }} "></script>
    
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="{{ asset('assets/js/formularios.js') }}"></script>
    <script src="{{ asset('assets/js/ajax.js') }}"></script>
    <script src="{{ asset('assets/js/modales.js') }}"></script>

    <!-- inline scripts related to this page -->
    @yield('scripts')
</body>