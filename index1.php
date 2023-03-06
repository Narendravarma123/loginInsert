<table>
  <tr>
    <th>ID</th>
    <th></th>
    <th>Email</th>
  </tr>
  <?php
  // PHP code to fetch and display data as HTML table rows<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "staff";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT * FROM college";
$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "<td>" . $row['gender'] . "</td>";
    echo "<td>" . $row['adress'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
}
?>

  ?>
</table>

