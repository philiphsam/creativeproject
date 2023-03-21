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
<table border="2">
<tr>
<th>Id</th>
<th>firstname</th>
<th>lastname</th>
<th>contact</th>
<th>email</th>
<th>joined_on</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "", "creativ");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id, firstname, lastname,contact,email,created_at FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["id"]. "</td><td>" . $row["firstname"] . "</td><td>"
. $row["lastname"]. "</td><td>" . $row["contact"]. "</td><td>" . $row["email"]. "</td><td>" . $row["created_at"]. "</td></tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>