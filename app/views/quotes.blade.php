@extends ('layouts.dashboard')
@section('page_heading','Quotes')
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
            <h3>Send a quick quote</h3>
            <!--<button id="new">New</button>-->

            {{Form::open(array('url'=>'quote','method'=>'post'))}}
            <input type="text" name="status" placeholder="status">
            <input type="text" name="quotenumber" placeholder="Quote Number">
            <input type="date" name="date" placeholder="date">
            <input type="date" name="expires" placeholder="expires">
            <input type="text" name="summary" placeholder="summary">
            <input type="text" name="total" placeholder="Total">
            <input type="text" name="invoiced" placeholder="invoiced?">
            <input type="text" name="email" placeholder="email">

            <input type="submit" value="Send Quote">
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
                            $tbl_name = "quotes"; // Table name


                            // Connect to server and select databse.
                            $con = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
                            mysqli_select_db($con, $db_name)or die("cannot select DB");



                            $query = ("SELECT * From quotes");
                            $result = mysqli_query($con, $query);

                            echo "<thead>
                                             <tr>
                                             <th>Status</th>
                                             <th>quotenumber</th>
                                             <th>Date</th>
                                             <th>expires</th>
                                             <th>Summary</th>
											 <th>Total</th>
											 <th>Invoiced</th>
											 <th>email</th>
                                             </tr>";



                            while ($record = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $record['status'] . "</td>";
                                echo "<td>" . $record['quotenumber'] . "</td>";
                                echo "<td>" . $record['date'] . "</td>";
                                echo "<td>" . $record['expires'] . "</td>";
                                echo "<td>" . $record['summary'] . "</td>";
                                echo "<td>" . $record['total'] . "</td>";
                                echo "<td>" . $record['invoiced'] . "</td>";
                                echo "<td>" . $record['email'] . "</td>";
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
                <a href="{{action('quotesController@downloadquotes')}}">Download</a>

            </div>



        </div>

    </section>

@stop
