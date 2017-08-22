<?php

class invoicesController extends Controller {


    public function downloadinvoices()
    {

        $host = "localhost"; // Host name
        $username = "root"; // Mysql username
        $password = ""; //database password
        //J5eLX8LmN84W69m2

        $db_name = "invoice-hub"; // Database name
        $tbl_name = "invoices"; // Table name


        // Connect to server and select databse.
        $con = mysqli_connect("$host", "$username", "$password")or die("cannot connect");
        mysqli_select_db($con, $db_name)or die("cannot select DB");

        $filename = "invoices.csv";
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

    public function addnewinvoice() {
        //dd( Input::all() );

        $invoice = new Invoice;

        $invoice->status = Input::get('status');
        $invoice->invoicenumber = Input::get('invoicenumber');
        $invoice->date = Input::get('date');
        $invoice->due = Input::get('due');
        $invoice->client = Input::get('client');
        $invoice->summary = Input::get('summary');
        $invoice->balance = Input::get('balance');
        $invoice->save();

        return Redirect::back();


    }

}
