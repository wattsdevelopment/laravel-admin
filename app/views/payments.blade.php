@extends ('layouts.dashboard')
@section('page_heading','Payments')

<link href="{{ asset('/css/form-payments.css') }}" rel="stylesheet">


@section('section')

    <section class="content">


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
                            $tbl_name = "payments"; // Table name


                            // Connect to server and select databse.
                            $con = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
                            mysqli_select_db($con, $db_name)or die("cannot select DB");



                            $query = ("SELECT * From payments");
                            $result = mysqli_query($con, $query);

                            echo "<thead>
                                             <tr>
                                             <th>Client-Name</th>
                                             <th>Invoice-number</th>
                                             <th>Method</th>
                                             <th>Amount</th>
                                             <th>Date</th>
                                             </tr>";



                            while ($record = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $record['client-name'] . "</td>";
                                echo "<td>" . $record['invoice'] . "</td>";
                                echo "<td>" . $record['method'] . "</td>";
                                echo "<td>" . $record['amount'] . "</td>";
                                echo "<td>" . $record['date'] . "</td>";
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
                <a href="{{action('paymentsController@downloadpayments')}}">Download</a>

            </div>

        </div>

    </section>

@stop