<?php

class quotesController extends Controller {


    public function downloadquotes()
    {

        $host = "localhost"; // Host name
        $username = "root"; // Mysql username
        $password = ""; //database password
        //J5eLX8LmN84W69m2

        $db_name = "invoice-hub"; // Database name
        $tbl_name = "quotes"; // Table name


        // Connect to server and select databse.
        $con = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
        mysqli_select_db($con, $db_name)or die("cannot select DB");

        $filename = "quotes.csv";
        $fp = fopen('php://output', 'w');

        $query = "SELECT * FROM $tbl_name";
        $result = mysqli_query($con, $query);

        while ($row = mysqli_fetch_row($result)) {
            $header[] = $row[0];
        }

        header('Content-type: application/csv');
        header('Content-Disposition: attachment; filename='.$filename);
        fputcsv($fp, $header);
        $num_column = count($header);
        $query = "SELECT * FROM $tbl_name";
        $result = mysqli_query($con, $query);


        while($row = mysqli_fetch_row($result)) {
            fputcsv($fp, $row);
        }
        exit;


    }

    public function addnewquote() {
        //dd( Input::all() );

        $quote = new Quote;

        $quote->status = Input::get('status');
        $quote->quotenumber = Input::get('quotenumber');
        $quote->date = Input::get('date');
        $quote->expires = Input::get('expires');
        $quote->summary = Input::get('summary');
        $quote->total = Input::get('total');
        $quote->invoiced = Input::get('invoiced');
        $quote->email = Input::get('email');
        $quote->save();

        return Redirect::back();


    }

//    public function sendnewquote() {
//        //send quick quote
//        $to = "michael@invoicehub.com";
//        $from = $_POST['email']; // this is the sender's Email address
//        $quotenumber = $_POST['quotenumber'];
//        $date = $_POST['date'];
//        $expires = $_POST['expires'];
//        $summary = $_POST['summary'];
//        $total = $_POST['total'];
//        $headers = "From:" . $from;
//
//        $subject = "New Quote From InvoiceHub";
//        $message = $quotenumber . " " . $date . " " . $expires . " " . $summary . " " . $total . "\n\n";
//        // $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['message'];
//
//        $headers2 = "From:" . $to;
//        mail($to,$subject,$message,$headers);
//        //mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
//    }

}
