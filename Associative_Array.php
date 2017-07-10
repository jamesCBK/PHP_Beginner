<html>
<head>
</head>
<?php
$node_test = array("AC"=>array("current"=>45,"voltage"=>66),
"UPS"=>array("current"=>45,"voltage"=>66));

$size_of_node = sizeof($node_test);

// $node_test['AC']['current'];
//echo "$size_of_node";
echo "<table>";
function traverse_test($arrays,$no){
	foreach($arrays as $key=>$value)
	{		
		 {
			
		echo "key=" . $key  ;
		echo "<br>";
			foreach($value as $keys=>$values)
			{
				echo "" .$keys . "" . $values; 
				echo "<br>";
		}

	}
}
}
traverse_test($node_test,$size_of_node);
?>

</html>
