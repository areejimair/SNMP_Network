<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        body {background-color: powderblue;}
        h1 {
            position: absolute;
            left: 600px;
			color:deeppink;
        }
        a    {position:relative;
		}
    </style>
</head>
<body>

<h1> System Group</h1>

<a role="button" class="btn btn-primary" href="snmp.html" >Return to HomePage</a>
<br>
<br>
<br>
<form method="post" action="set.php">
  <label for="fname">Sys Contact:(1.3.6.1.2.1.1.4.0)</label><br>
  <input type="text" id="f1" name="f1" ><br>
  <label for="lname">Sys Name:(1.3.6.1.2.1.1.5.0)</label><br>
  <input type="text" id="f2" name="f2"><br><br>
<label for="lname">Sys Location:(1.3.6.1.2.1.1.6.0)</label><br>
  <input type="text" id="f3" name="f3"><br><br>
  <input type="submit" value="Submit">
</form>

<h2>Display in a table:</h2>
<br>




<?php


$a = snmpwalkoid("127.0.0.1", "public", "1.3.6.1.2.1.1"); 

$i1=0;
echo"<table class='table table-dark'>";
echo "<thead>";
echo "<tr> <th scope='col'>#</th>  <th scope='col'>index</th> <th scope='col'>Description</th> </tr></thead> <tbody>";
for (reset($a); $i = key($a); next($a)) {
echo " <tr> <th scope='row'>$i1</th> <td contenteditable='true' > $i </td><td contenteditable='true'>&nbsp;&nbsp; $a[$i] </td>   </tr>";
 //  echo "($i) $val  $b[$i] ------ $c[$i] <br>\n";
	$i1++;
}
echo"</tbody></table>";


?>




