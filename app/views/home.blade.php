@extends('layouts.dashboard')
@section('page_heading','Dashboard')
@section('section')


    

            <!-- /.row -->
            <div class="col-sm-12">
            <div class="row">
                <div class="panel panel-heading">
                <div class="panel-heading">
                    <div class="panel-heading">
                        <h3 class="panel-title">Invoice Summary</h3>
                    </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-pencil fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Draft Invoices</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('draft-invoices') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Draft Invoices</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-sort-by-attributes-alt fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Sent Invoices</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('sent-invoices') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Sent Invoices</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-exclamation-sign fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Overdue Invoices</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('overdue-invoices') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Overdue Invoices</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-heart-empty fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div>Payments Collected</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ url('payments-collected') }}">
                            <div class="panel-footer">
                                <span class="pull-left">View Payments Collected</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
                </div>
                </div>

                <!-- /.row -->

                    <div class="row">
                        <div class="panel panel-heading">
                            <div class="panel-heading">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Quote Summary</h3>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-primary">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="glyphicon glyphicon-pencil fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div>Draft Quotes</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ url('draft-quotes') }}">
                                            <div class="panel-footer">
                                                <span class="pull-left">View Draft Quotes</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-green">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="fa fa-tasks fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div>Quotes Sent</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ url('sent-quotes') }}">
                                            <div class="panel-footer">
                                                <span class="pull-left">View Quotes Sent</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-yellow">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="glyphicon glyphicon-thumbs-down fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div>Rejected Quotes</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ url('rejected-quotes') }}">
                                            <div class="panel-footer">
                                                <span class="pull-left">View Rejected Quotes</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="panel panel-red">
                                        <div class="panel-heading">
                                            <div class="row">
                                                <div class="col-xs-3">
                                                    <i class="glyphicon glyphicon-thumbs-up fa-5x"></i>
                                                </div>
                                                <div class="col-xs-9 text-right">
                                                    <div>Accepted Quotes</div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="{{ url('accepted-quotes') }}">
                                            <div class="panel-footer">
                                                <span class="pull-left">View Accepted Quotes</span>
                                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                                <div class="clearfix"></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
</div>

                    <!-- /.panel .chat-panel -->
                    @endsection
                    @include('widgets.panel', array('header'=>true, 'as'=>'pane3'))
                </div>
                <!-- /.col-lg-4 -->
            
@stop
