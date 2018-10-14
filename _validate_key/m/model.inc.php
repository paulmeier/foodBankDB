<?php
                                          // write debug message if debug = 1 

$table=$_GET["tbl"];
$key=$_GET["key"];
$value=$_GET["val"];
$query="select * from $table where $key='$value'";
$db = ADOdb_connect($cfg);              //  connect to database
$rs1 = ADOdb_query($db,$query);          // Perform SQL query

if ($rs1->RecordCount() != 0)
   echo "found";
else
   echo "not found";

ADOdb_close($db);

?>
