<?php
	// get the base and height from the textfields

$sidea = $_POST['side-a'];
$sideb = $_POST['side-b'];
$height = $_POST['height'];


$volume = number_format((1/6) * $sidea * $sideb * $height, 2);



?>
<h3>Results:</h3>
The volume of your right triangular pyramid is <?php echo "$volume" ?>m<sup>3</sup>.

