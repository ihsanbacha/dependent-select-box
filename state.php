<?php
include "config.php";
$cid= $_POST['country_id'];
$select="SELECT * FROM `states` WHERE country_id = '$cid'";
$query=$conn->query($select);
$option_data="";
$option_data.=" <option value=''>select state</option>";
    while($row=mysqli_fetch_assoc($query)){
    $option_data.=" 
    <option value='{$row['id']}'>{$row['name']}</option>";
}
echo $option_data;
mysqli_close($conn);
?>