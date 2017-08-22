@extends('layouts.plane')

<link href="{{ asset('/css/menu.css') }}" rel="stylesheet">


@section('body')
 <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ ('dashboard') }}">Michael Watts</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                                </button>
                            </span>
                            <!-- /input-group -->
                        </li>
                        <li {{ (Request::is('*dashboard') ? 'class="active"' : '') }}>
                            <a href="{{ ('dashboard') }}"><i class="fa fa-dashboard fa-fw"></i>  Dashboard</a>
                        </li>
                        <li {{ (Request::is('*clients') ? 'class="active"' : '') }}>
                            <a href="{{ ('clients') }}"><i class="fa fa-users"></i>  Clients</a>
                            <!-- /.nav-second-level -->
                        </li>
                        <li {{ (Request::is('*quotes') ? 'class="active"' : '') }}>
                            <a href="{{ ('quotes') }}"><i class="fa fa-file-text-o"></i>  Quotes</a>
                        </li>
                        <li {{ (Request::is('*invoices') ? 'class="active"' : '') }}>
                            <a href="{{ ('invoices') }}"><i class="fa fa-file-text"></i>  Invoices</a>
                        </li>
                        <li {{ (Request::is('*payments') ? 'class="active"' : '') }}>
                            <a href="{{ ('payments') }}"><i class="fa fa-credit-card"></i>  Payments</a>
                        </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
			 <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('page_heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
           </div>
			<div class="row">  
				@yield('section')

            </div>
            <!-- /#page-wrapper -->
        </div>
    </div>
@stop

