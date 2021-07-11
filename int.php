

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

<h1> Interface Group</h1>

<a role="button" class="btn btn-primary" href="snmp.html" >Return to HomePage</a>
<br>
<br>
<br>
<h2>Display in a table:</h2>
<br>
<?php
$a = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.1.0");
$b = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.2.0");
$c = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.3.0");
$d = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.4.0");
$e = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.5.0");
$f = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.6.0");
$g = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.7.0");
$h = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.8.0");
$w = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.9.0");
$j = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.10.0");
$k = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.11.0");
$l = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.12.0");
$m = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.13.0");
$n = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.14.0");
$o = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.15.0");
$p = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.16.0");
$q = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.17.0");
$r = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.18.0");
$s = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.19.0");
$t = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.20.0");
$u = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.21.0");
$v = snmp2_walk($ip, "public", ".1.3.6.1.2.1.2.2.1.22.0");



$i =0;
echo"<table>";

echo "<tr><td > ِifIndex:</td> <td> ifDescr: </td><td > ifType:</td><td> ifMtu </td><td > ِifSpeed:</td><td> ifPhysAddress: </td><<td >ifAdminStatus:</td><td> ifOperStatus: </td><td > ِifLastChange:</td><td> ifInOctets: </td><td > ifInUcastPkts:</td><td> ifNUcastPkts: </td><td >ifInDiscards:</td><td> ifInErrors: </td><td > ifUnkownProtos:</td><td> ifOutOctets: </td><td > ِifOutUcastPkts:</td><td> ifNUcastPkts: </td><td > ifOutDiscards:</td><td> ifOutErrors: </td><td >ifOutQLen:</td><td> ifSpecific: </td></tr> "  ;

for ($j=0, $count=count($a); $j<$count;$j++) {
	echo "<tr><td> $a[$j] </td> <td> $b[$j] </td><td> $c[$j] </td> <td> $d[$j]</td><td> $e[$j] </td> <td> $f[$j] </td><td> $g[$j] </td> <td> $h[$j]</td>
<td> $w[$j] </td> <td> $j[$j] </td><td> $k[$j] </td> <td> $l[$j]</td>
<td> $m[$j] </td> <td> $n[$j] </td><td> $o[$j] </td> <td> $p[$j]</td> <td> $q[$j] </td> <td> $r[$j] </td><td> $s[$j] </td> <td> $t[$j]</td> <td> $u[$j] </td> <td> $v[$j] </td></tr>";

	$i++;
}
echo"</table>";	


?>

