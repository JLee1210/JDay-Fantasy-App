<!DOCTYPE html>
<html>
<head>
	<title>Favorite Knick Survey Result</title>
		<style type="text/css">
			table,td, th{
				border: 1px solid black;
			}
		</style>
</head>
<body>
<?php
	//header("Location: FantasyTitle.html");
	$host ="host=ec2-54-235-155-172.compute-1.amazonaws.com";
	$database = "dbname=dbd8qo68h469ou";
	$user = "user=xfgkmmzzqryych";
	$port = "port=5432";
	$password = "password=_uXuHo2EdK7WAqhq9PZ1U1TwH3";
	$db = pg_connect($host." ".$database." ".$user." ".$port.
		" ".$password);

	$name = pg_escape_string($db, $_POST["name"]);
	$player1 = pg_escape_string($db, $_POST["player1"]);
	$player2 = pg_escape_string($db, $_POST["player2"]);
	$player3 = pg_escape_string($db, $_POST["player3"]);
 echo "<body style='background-image: url(\"http://www.cs.cmu.edu/afs/cs.cmu.edu/academic/class/15463-f13/www/proj3/www/srinathg/samples/blue_wall.jpg\"); background-repeat: no-repeat center;
     background-size: 100% 100%;
     background-attachment: fixed;'>";

	 //$query2 = <<<EOF
	 	//DROP TABLE JDAY;
//EOF;

 //	$val = pg_query($db, $query2);
 	//if(!$val){
 	//	echo pg_last_error($db);
 //	} //

 //	$query2 = <<<EOF
 //		CREATE TABLE JDAY (NAME TEXT, PLAYER1 TEXT, PLAYER2 TEXT, PLAYER3 TEXT);
//EOF;

//	 $val = pg_query($db, $query2);
//	 if(!$val){
//	 	echo pg_last_error($db);
//	 } 

	$query2 = <<<EOF
		INSERT INTO JDAY (NAME, PLAYER1, PLAYER2, PLAYER3)
		VALUES ('$name', '$player1', '$player2', '$player3');
EOF;

	$val = pg_query($db, $query2);

	$query = <<<EOF
		SELECT * from JDAY;
EOF;
	$val = pg_query($db, $query);
	if(!$val){
		echo pg_last_error($db);
	}
	if(pg_num_rows($val)){
		echo "<table cellspacing='5' style='border-collapse: collapse; width: 100%' align='center'><tr><th align='center' valign='middle'><font color = #168EF7>Name:</th><th align='center' valign='middle'><font color = #168EF7>Player 1:</th><th align='center' valign='middle'><font color = #168EF7>Player 2:</th><th align='center' valign='middle'><font color = #168EF7>Player 3:</th></tr>";
		// output data of each row
		while($row = pg_fetch_row($val)){
			echo "<tr><td align='center' valign='middle'><font color = #EDB32B>".$row[0]."</td><td align='center' valign='middle'><font color = #EDB32B>".$row[1]."</td><td align='center' valign='middle'><font color = #EDB32B>".$row[2]."</td><td align='center' valign='middle'><font color = #EDB32B>".$row[3]."</td><td align='center' valign='middle'><font color = #EDB32B>".$row[4]."</td></tr>";
			}
			echo "</table>";		}
		else {
			echo "0 results";
		}
?>
</body>
</html>