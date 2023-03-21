<!DOCTYPE html>
<html>
<head>
<title>Table with database</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table border="1">
<tr>
<th>Id</th>
<th>firstname</th>
<th>contact</th>
<th>eventname</th>
<th>slots_needed</th>
<th>slot_type</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "creativ");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, firstname,contact,eventname,slots_needed,slot_type FROM eventbookings";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"] . "</td><td>" . $row["contact"]. "</td><td>"
. $row["eventname"]. "</td><td>" . $row["slots_needed"]. "</td><td>" . $row["slot_type"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>