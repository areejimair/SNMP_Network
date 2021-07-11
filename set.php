<?php

// Start the session
session_start();

 $test = $_POST['f1'];
  $test2 = $_POST['f2'];
  $test3 = $_POST['f3'];     		   
if (!empty($test)){snmp2_set("localhost","public","1.3.6.1.2.1.1.4.0","s",$test); }
if (!empty($test2)){snmp2_set("localhost","public","1.3.6.1.2.1.1.5.0","s",$test2); }
if (!empty($test3)){snmp2_set("localhost","public","1.3.6.1.2.1.1.6.0","s",$test3); }



  $a = snmpwalkoid("127.0.0.1", "public", "1.3.6.1.2.1.1"); 
  $_SESSION["sys"] = $a;
  header('location:sys.php');
?>