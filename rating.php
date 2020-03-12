<?php
$pagename="Your Rating";

include ("db.php");	
//Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>"; 	//Call in stylesheet

echo "<title>".$pagename."</title>";			//display name of the page as window title

echo "<body>";

echo "<h4>".$pagename."</h4>";				//display name of the page on the web page

//Capture the ratings from the form 

	$rating1= $_POST['number1'];
	$rating2= $_POST['number2'];
	$rating3= $_POST['number3'];
	$rating4= $_POST['number4'];
	$rating5= $_POST['number5'];

echo "<h1>Rating recived</h1><br>";	
echo "<h1><a href='ArticlesTairDoron.html'>Back to articles</a></h1>";	

echo "</body>";
?>
