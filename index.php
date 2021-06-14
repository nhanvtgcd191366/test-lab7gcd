<html>
<head>
<title> Database Test </title>
</head>
<body>
<?php
include("connection.php");
//Connect
$pg_conn = pg_connect($conn_string);
#Get data
$result = pg_query($pg_conn, "select * from product;");
?>
<?php
	include("db_display.php");
	display_table($result);
	pg_close();
?>
</table>
</body>
</html>
