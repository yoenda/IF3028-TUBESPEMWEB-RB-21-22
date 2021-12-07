<?php
include "db.php";

$lapor_text=$_POST["lapor_text"];
$lapor_aspek=$_POST["lapor_aspek"];
$data_file=$_POST["data_file"];

$sql="insert into lapor_id (lapor_text,lapor_aspek,data_file) values('$lapor_text','$lapor_aspek','$data_file')";

$hasil=mysqli_query($kon,$sql);

?>