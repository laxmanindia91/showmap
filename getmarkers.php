<?php
$con = mysqli_connect('localhost','root','','angular');
if (!$con) {
    die('Could not connect: ' . mysqli_error($con));
}

$listings = array();
$sql = 'SELECT * FROM pp_listing_location';
$result = mysqli_query($con, $sql);

         if (mysqli_num_rows($result) > 0) {
			 $i = 0;
            while($row = mysqli_fetch_assoc($result)) {
				//while ($obj=mysqli_fetch_object($result)) {
			   $listings[] = array('lat' => $row['lattitude'], 'lng' => $row['longitude']);
			   //array_push($listings, $obj);
            }
         } else {
            echo "0 results";
         }
		 
//return $listings;
echo '<pre>';
print_r($listings);
echo '</pre>';
mysqli_close($con);
?>