@extends ('layouts.dashboard')
@section('page_heading','Clients')
@section('section')

    <link href="{{ asset('/css/form-tables.css') }}" rel="stylesheet">
    <script
            src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>


    <section class="content-header">



        <div id="new2">
            <!--<button id="new">New</button>-->

            {{Form::open(array('url'=>'client','method'=>'post'))}}
            <input type="text" name="clientname" placeholder="Clients name">
            <input type="text" name="email" placeholder="Email">
            <input type="text" name="phone" placeholder="Phone">
            <input type="text" name="balance" placeholder="Balance">
            <input type="text" name="active" placeholder="Active?">
            <input type="text" name="options" placeholder="Options">

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
                            $tbl_name = "clients"; // Table name

                            // Connect to server and select databse.
                            $con = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
                            mysqli_select_db($con, $db_name)or die("cannot select DB");



                            $query = ("SELECT * From clients");
                            $result = mysqli_query($con, $query);

                            echo "<thead>
                                             <tr>
                                             <th>Name</th>
                                             <th>Email</th>
                                             <th>Contact</th>
                                             <th>balance</th>
                                             <th>Active</th>
											 <th>Options</th>
                                             </tr>";



                            while ($record = mysqli_fetch_assoc($result)) {
                                echo "<tr>";
                                echo "<td>" . $record['clientname'] . "</td>";
                                echo "<td>" . $record['email'] . "</td>";
                                echo "<td>" . $record['phone'] . "</td>";
                                echo "<td>" . $record['balance'] . "</td>";
                                echo "<td>" . $record['active'] . "</td>";
                                echo "<td>" . $record['options'] . "</td>";
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

                <a href="{{action('clientController@download')}}">Download</a>

            </div>

        </div>

    </section>

    @stop