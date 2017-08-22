<?php
$filename = "clients.csv";
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

