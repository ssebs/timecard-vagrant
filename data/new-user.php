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

    <div class="center">
        <h1 class="txt-ctr">Create a new User Account</h1>
        <form action="util/create-user.php" method="post" onsubmit="return confirm('Are you sure you want to submit this form?');" class="center-50">
            <strong>First Name: </strong><input type="text" name="fst" required><br/>
            <!-- <strong>Last Name: </strong><input type="text" name="lst" required><br/> -->
            <strong>Username: </strong><input type="text" name="usr" required><br/>
            <strong>Email: </strong><input type="text" name="eml" required><br/>
            <strong>Birthday: </strong><input type="date" name="bdy" required><br/>
            <strong>Password: </strong> <input type="password" name="pswd" required><br/><br/>
            <button type="submit" name="sumbit">Create</button>
        </form>
    </div>




<?php
require "bottombar.php";
?>
</body>
</html>