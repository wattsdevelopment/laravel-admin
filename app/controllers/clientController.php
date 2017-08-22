<?php

class clientController extends Controller
{


    public function download()
    {

        //ob_end_clean();

        $host = "localhost"; // Host name
        $username = "root"; // Mysql username
        $password = ""; //database password
        //J5eLX8LmN84W69m2

        $db_name = "invoice-hub"; // Database name
        $tbl_name = "clients"; // Table name


        // Connect to server and select databse.
        $con = mysqli_connect("$host", "$username", "$password") or die("cannot connect");
        mysqli_select_db($con, $db_name) or die("cannot select DB");

        $filename = "clients.csv";
        $fp = fopen('php://output', 'w');

        $query = "SELECT * FROM $tbl_name";
        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_row($result)) {
            $header[] = $row[0];
        }

        header('Content-type: application/csv');
        header('Content-Disposition: attachment; filename=' . $filename);
        fputcsv($fp, $header);
        $num_column = count($header);
        $query = "SELECT * FROM $tbl_name";
        $result = mysqli_query($con, $query);


        while ($row = mysqli_fetch_row($result)) {
            fputcsv($fp, $row);
        }
        exit;


    }

    public function addnewclient()
    {

        //dd( Input::all() );

        $user = new User;
        $user->clientname = Input::get('clientname');
        $user->email = Input::get('email');
        $user->phone = Input::get('phone');
        $user->balance = Input::get('balance');
        $user->active = Input::get('active');
        $user->options = Input::get('options');
        $user->save();

        return Redirect::back();

    }

}
