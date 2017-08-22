@extends ('layouts.dashboard')
@section('page_heading','Expenses')

<link href="{{ asset('/css/form-expenses.css') }}" rel="stylesheet">


@section('section')

    <section class="content-header">

        <div class="pull-right">
            <div class="btn-group">
                <form method="GET" action="https://demo.fusioninvoice.com/expenses" accept-charset="UTF-8" id="filter">
                    <select class="expense_filter_options form-control inline" name="company_profile"><option value="" selected="selected">All Company Profiles</option><option value="1">Dunder Mifflin</option></select>
                    <select class="expense_filter_options form-control inline" name="status"><option value="" selected="selected">All Statuses</option><option value="billed">Billed</option><option value="not_billed">Not Billed</option><option value="not_billable">Not Billable</option></select>
                    <select class="expense_filter_options form-control inline" name="category"><option value="" selected="selected">All Categories</option></select>
                    <select class="expense_filter_options form-control inline" name="vendor"><option value="" selected="selected">All Vendors</option></select>
                </form>
            </div>
            <a href="https://demo.fusioninvoice.com/expenses/create" class="btn btn-primary"><i class="fa fa-plus"></i> New</a>
        </div>

        <div class="clearfix"></div>
    </section>

    <section class="content" style="padding: 15px;">


        <div class="row">

            <div class="col-xs-12">

                <div class="box box-primary">

                    <div class="box-body no-padding">
                        <table class="table table-hover">

                            <thead>
                            <tr>
                                <th class="col-md-2"><a href="https://demo.fusioninvoice.com/expenses?s=expense_date&amp;o=asc">Date </a></th>
                                <th class="col-md-2"><a href="https://demo.fusioninvoice.com/expenses?s=expense_categories.name&amp;o=asc">Category </a></th>
                                <th class="col-md-3"><a href="https://demo.fusioninvoice.com/expenses?s=description&amp;o=asc">Description </a></th>
                                <th class="col-md-2"><a href="https://demo.fusioninvoice.com/expenses?s=amount&amp;o=asc">Amount </a></th>
                                <th class="col-md-2">Attachments</th>
                                <th class="col-md-1">Options</th>
                            </tr>
                            </thead>

                            <tbody>
                            </tbody>

                        </table>
                    </div>

                </div>

                <div class="pull-right">

                </div>

            </div>

        </div>

    </section>

@stop