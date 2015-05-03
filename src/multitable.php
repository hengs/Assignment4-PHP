
<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
//header('Content-Type: text/plain');
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
			<title>Multiplication Table</title>
	</head>
	<body>

		<?php
			$multi_table = array();
			$multi_table["max_multicand"] = $_GET["max_multicand"];
			$multi_table["min_multicand"] = $_GET["min_multicand"];
			$multi_table["min_multiplier"] = $_GET["min_multiplier"];
			$multi_table["max_multiplier"] = $_GET["max_multiplier"];

			foreach($multi_table as $key => $value){
				if(empty($value)){
					echo "The parameters are empty. Please Enter again." . $multi_table[$key] . "<br/>";
					exit(1);
			}}
		

			if($multi_table["min_multiplier"] > $multi_table["max_multiplier"]){
				echo "Incorrect input. The min-multiplier is greater than the max-multiplier";
				exit(1);
			}
			if($multi_table["min_multicand"] > $multi_table["max_multicand"]){
				echo "Incorrect input. The min-multicand is greater than the max-multicand";
				exit(1);
			}

			$height = $multi_table["max_multicand"] - $multi_table["min_multicand"] + 2;
			$width = $multi_table["max_multiplier"] - $multi_table["min_multiplier"] + 2;

			
			//reference http://www.dreamincode.net/forums/topic/219304-multiplication-table/
			echo "<table border=\"1\">";
			echo '<tr><th></th>';
			
			//creating the header first with space
			for($cols = 1; $cols <= $width; $cols++){
				echo '<th>' . $cols . '</th>';
			}
			echo "</tr>\n";

			//populate the rest of the table
        	for ($rows =1; $rows <= $height; $rows++){

            	echo '<tr><th>' . $rows . '</th>';

            	for ($cols = 1; $cols <= $width; $cols++)
                	echo '<td>' .($cols*$rows).'</td>';
           		echo "</tr>\n"; 

        }

        echo"</table>";
			?>


	</body>

</html>