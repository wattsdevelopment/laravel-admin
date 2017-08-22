@extends ('layouts.dashboard')
@section('page_heading','Invoices')
@section('section')

    <?php

    ?>

    <link href="{{ asset('/css/form-tables.css') }}" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>


    <section class="content-header">
        <div id="new3">
            <!--<button id="new">New</button>-->

            {{Form::open(array('url'=>'invoice','method'=>'post'))}}
            <input type="text" name="status" placeholder="status">
            <input type="text" name="invoicenumber" placeholder="invoicenumber">
            <input type="date" name="date" placeholder="date">
            <input type="date" name="due" placeholder="due">
            <input type="text" name="client" placeholder="client">
            <input type="text" name="summary" placeholder="summary">
            <input type="text" name="balance" placeholder="balance">

            <input type="submit" value="Add Client">
            {{Form::close()}}

        </div>

    </section>

    <div class="clearfix"></div>
    <section class="content" style="padding:15px;">


        <div class="row">

            <div class="col-xs-12">

                <div class="box box-primary">

                    <div class="box-body no-padding">
                        <table class="table table-hover">

                            <?php

                            $host = "localhost"; // Host name
                            $username = "root"; // Mysql username
                            $password = ""; //database password
                            //J5eLX8LmN84W69m2

                            $db_name = "invoice-hub"; // Database name
                            $tbl_name = "invoices"; // Table name


                            // Connect to server and select databse.
                            $con = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
                            mysqli_select_db($con, $db_name)or die("cannot select DB");



                            $query = ("SELECT * From invoices");
                            $result = mysqli_query($con, $query);

                            echo "<thead>
                                             <tr>
                                             <th>Status</th>
                                             <th>Invoice-number</th>
                                             <th>Date</th>
                                             <th>Due</th>
                                             <th>Client</th>
											 <th>Summary</th>
											 <th>Balance</th>
                                             </tr>";



                            while ($record = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $record['status'] . "</td>";
                                echo "<td>" . $record['invoicenumber'] . "</td>";
                                echo "<td>" . $record['date'] . "</td>";
                                echo "<td>" . $record['due'] . "</td>";
                                echo "<td>" . $record['client'] . "</td>";
                                echo "<td>" . $record['summary'] . "</td>";
                                echo "<td>" . $record['balance'] . "</td>";
                                echo "</tr>";
                            }
                            echo "</thead>";
                            ?>

                            <tbody>
                            </tbody>


                        </table>
                    </div>

                </div>

                <div class="pull-right">

                </div>
                <a href="{{action('invoicesController@downloadinvoices')}}">Download</a>

            </div>

        </div>

    </section>

@stop
