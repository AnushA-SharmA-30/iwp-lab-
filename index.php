<?php
$servername = "localhost";
$username = "username";
$password = "";
$dbname = "db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);
?>
<table><tr><th>first col</th><th>first col</th>
<?php
if ($result->num_rows > 0) {

  while($row = $result->fetch_assoc()) {
    echo"<tr>"
    echo "<td> " . $row["id"]. " </td><td> " . $row["firstname"]. "</td><td> " . $row["lastname"]. "</td><br>";
  }
} else {
  echo "0 results";
}
$conn->close();
?>
</table>