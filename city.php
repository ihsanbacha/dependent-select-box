<?php
include "config.php";
$sid= $_POST['state_id'];
$select="SELECT * FROM `cities` WHERE state_id = '$sid'";
$query=$conn->query($select);
$option_data="";
$option_data.=" <option value=''>select city</option>";
    while($row=mysqli_fetch_assoc($query)){
    $option_data.=" 
    <option value='{$row['id']}'>{$row['name']}</option>";
}
echo $option_data;
mysqli_close($conn);
?>