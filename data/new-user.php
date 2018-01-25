<!doctype html>
<html>
<head> 
    <title>New User</title>
    <link rel="stylesheet" type="text/css" href="../css/sanitize.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

    <?php
    require "connect.php";
    require "headerbar.php";
   
   
    // $sql = "SELECT * FROM Users";
    // $result = $conn->query($sql);



    // if ($result->num_rows > 0) {
    //     while($row = $result->fetch_assoc()) {
    //         echo "\n<tr>\n<td>" . $row["First"]. "</td>\n<td>" . $row["Last"]. "</td>\n<td>" . $row["Email"]. "</td>\n<td>" . $row["Birthday"]. "</td>\n</tr>";
    //     }
    // } else {
    //     echo "0 results";
    // }

    ?>
<?php
require "bottombar.php";
?>
</body>
</html>