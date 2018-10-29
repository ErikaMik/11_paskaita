<?php

$names = ['Petras', 'Onute'];

if(isset($_GET['name']) && !empty($_GET['name'])) {
array_push($names, $_GET['name']);
}


echo '<pre>';
print_r($names);


?>



<form>
	<input type="text" name="name">
	<input type="submit" name="Add">
</form>