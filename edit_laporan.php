<?php
include "db.php";

$lapor_text=$_POST["lapor_text"];
$lapor_aspek=$_POST["lapor_aspek"];
$data_file=$_POST["data_file"];

$sql = "update lapor_id set lapor_aspek='".$lapor_aspek."', data_file='".$data_file."' where lapor_text='".$lapor_text."' ";

$hasil=mysqli_query($kon,$sql);

?>