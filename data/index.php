<!doctype html>
<html>
<head> 
    <title>Testing PHP</title>
    <link rel="stylesheet" type="text/css" href="css/sanitize.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />

</head>
<body>

<?php
require "php/connect.php";
$sql = "SELECT * FROM Users";
$result = $conn->query($sql);

// for($i = 0; $i < 10; $i++)
// {
//     echo "test PHP <strong>#" . $i . "</strong>";
//     echo "<br>\n";
// }
?>

<div id="headerbar"> 
    <h1>Test-Site</h1>
</div>

<table>
    <tr>
        <th>First</th>
        <th>Last</th>
        <th>Email</th>
        <th>Date of Birth</th>
    </tr>

<?php
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "\n<tr>\n<td>" . $row["First"]. "</td>\n<td>" . $row["Last"]. "</td>\n<td>" . $row["Email"]. "</td>\n<td>" . $row["Birthday"]. "</td>\n</tr>";
        }
    } else {
        echo "0 results";
    }

?>
</table>

</body>
</html>