@extends ('layouts.dashboard')
@section('page_heading','Overdue Invoices')
@section('section')

    <link href="{{ asset('/css/form-tables.css') }}" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>


    <section class="content-header">


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



                            //$query = ("SELECT * From clients WHERE status='draft'");
                            $query = "SELECT * FROM $tbl_name WHERE status = 'overdue'";
                            $result = mysqli_query($con, $query);

                            echo "<thead>
                                             <tr>
                                             <th>status</th>
                                             <th>invoice-number</th>
                                             <th>date</th>
                                             <th>due</th>
                                             <th>client</th>
											 <th>summary</th>
											 <th>balance</th>
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

            </div>

        </div>

    </section>

@stop
